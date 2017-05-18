/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;
import iservices.iService;
import java.sql.Date;
import modal.*;

/**
 *
 * @author sahar ghorch
 */
public class UserServices implements iService<User> {

    private Connection conn;
    private Statement ste;
    private PreparedStatement pst;

    ResultSet result;
    public static String loginConnecté = "";

    public UserServices() {
        this.conn = DataSource.getInstance().getConnection();
    }

    public boolean Sinscrire(Membre u) {
        String req = "INSERT INTO membre (`username`,`username_canonical`,`password`, `email`, `nom`, `numero_tel`, `adresse`,`email_canonical`,`roles`,`points_fidelite`) values (?,?,?,?,?,?,?,?,?,?)";
        try {
            PreparedStatement ps = conn.prepareStatement(req);
            ps.setString(1, u.getLogin());
            ps.setString(2, u.getLogin());
            ps.setString(3, u.getMotPasse());
            ps.setString(4, u.getMail());
            ps.setString(5, u.getNom() + u.getPrenom());
            ps.setString(6, u.getNumerotel());
            ps.setString(7, u.getAdresse());
            ps.setString(8, u.getMail());
            ps.setString(9, "a:0:{}");
            ps.setInt(10,0);
            if (chercherMembre(u.getLogin()) != 0) {
                System.out.println("Login deja existant");
                return false;
            } else {
                ps.executeUpdate();
                System.out.println("user ajouté");
                return true;
            }

        } catch (Exception e) {
            e.printStackTrace();
        }
        return false;
    }

    public void supprimerMembre(String login) {
        String req = "delete  from membre where username=?";
        try {
            PreparedStatement ps = conn.prepareStatement(req);
            ps.setString(1, login);
            ps.executeUpdate();
            System.out.println("User supprimé");

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public int chercherMembre(String login) {
        String req = "select *  from membre where username='" + login + "'";
        try {
            PreparedStatement ps = conn.prepareStatement(req);

            result = ps.executeQuery(req);
            result.last();
            int nbrRow = result.getRow();
            if (nbrRow == 1) {
                System.out.println("Membre existant");
                return 1;
            } else {
                System.out.println("Membre inexistant");
            }

        } catch (Exception e) {
            e.printStackTrace();
        }
        return 0;

    }

    public void modifierNom(String nom) {
        String req = "update membre set nom='" + nom + "' where username='" + loginConnecté + "'";
        try {
            PreparedStatement ps = conn.prepareStatement(req);

            ps.executeUpdate(req);
            System.out.println("nom modifié");

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public void modifierPrenom(String prenom) {
        String req = "update membre set nom='" + prenom + "' where username='" + loginConnecté + "'";
        try {
            PreparedStatement ps = conn.prepareStatement(req);

            ps.executeUpdate(req);
            System.out.println("prenom modifié");

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public void modifierMotPasse(String motPasse) {
        String req = "update membre set password='" + motPasse + "' where username='" + loginConnecté + "'";
        try {
            PreparedStatement ps = conn.prepareStatement(req);

            ps.executeUpdate(req);
            System.out.println("mot de passe modifié");

        } catch (Exception e) {
            e.printStackTrace();
        }
    }

    public void modifierAdresse(String adresse) {
        String req = "update membre set adresse='" + adresse + "' where username='" + loginConnecté + "'";
        try {
            PreparedStatement ps = conn.prepareStatement(req);

            ps.executeUpdate(req);
            System.out.println("adresse modifié");

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public void modifierNumTel(String numTel) {
        String req = "update membre set numero_tel ='" + numTel + "' where username='" + loginConnecté + "'";
        try {
            PreparedStatement ps = conn.prepareStatement(req);

            ps.executeUpdate(req);
            System.out.println("n° tel modifié");

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public boolean VerifierMotPasse(String motPasse) throws SQLException {
        String req = "select password from membre where username='" + loginConnecté + "'";
        PreparedStatement ps = conn.prepareStatement(req);
        result = ps.executeQuery(req);
        String mdp = "";
        while (result.next()) {
            mdp = result.getString("password");
        }
        if (mdp.equals(motPasse)) {
            return true;
        }
        return false;

    }
//   

    public void afficherMembres() throws SQLException {
        List<Membre> listMembre = new ArrayList<>();
        String req = "select * from membre ";

        PreparedStatement ps = conn.prepareStatement(req);
        result = ps.executeQuery(req);
        while (result.next()) {

            listMembre.add(new Membre(result.getString("nom"), result.getString("nom"), result.getString("username"),
                    result.getString("password"), result.getString("email"), result.getString("adresse"), result.getString("date_naissance"),
                    result.getString("numero_tel")));
        }

        listMembre.forEach(System.out::println);

    }

    public int seConnecter(String login, String motPasse) {
        String req = "SELECT  `username`, `password` FROM `membre` WHERE username='" + login + "'and password='" + motPasse + "'";
        try {
            PreparedStatement ps = conn.prepareStatement(req);
            result = ps.executeQuery(req);
            result.last();
            int nbrRow = result.getRow();
            if (nbrRow == 1) {
                System.out.println("Vous etes connecté");
                setLoginConnecté(login);
                System.out.println(loginConnecté);
                return 1;
            } else {
                System.out.println("Verifier votre login ou votre mot de passe");
            }

        } catch (Exception e) {
            e.printStackTrace();
        }
        return 0;

    }

    public void seDeconnecter() {
        setLoginConnecté("");
    }

    public Membre DetailsMembre(String login) throws SQLException {

        Membre u = new Membre();
        PreparedStatement ps = conn.prepareStatement("select * from membre where username=?");
        ps.setString(1, login);

        result = ps.executeQuery();
        while (result.next()) {
            String nom = result.getString("nom");
            String prenom = result.getString("nom");
            String log = result.getString("username");
            String mdp = result.getString("password");
            String mail = result.getString("email");
            String adresse = result.getString("adresse");
            Date date = result.getDate("date_naissance");
            String num = result.getString("numero_tel");

            u.setNom(nom);
            u.setPrenom(prenom);
            u.setLogin(log);
            u.setMotPasse(mdp);
            u.setMail(mail);
            u.setAdresse(adresse);

            u.setNumerotel(num);

        }

        System.out.println(u);
        return u;

    }

    public String getLoginConnecte() {
        return loginConnecté;
    }

    public void setLoginConnecté(String loginConnecté) {
        this.loginConnecté = loginConnecté;
    }

    public void modifierInfo(String login, String nom, String prenom, String motPasse) {
        String req = "update membre set nom='" + (nom + prenom) + "'" + "',password='" + motPasse + "' where username='" + login + "' ";
        try {
            PreparedStatement ps = conn.prepareStatement(req);

            ps.executeUpdate(req);
            System.out.println("user modifié");

        } catch (Exception e) {
            e.printStackTrace();
        }

    }

    public User displayAllUser(int p) {
        User user = null;

        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        try {
            pst = conn.prepareStatement("select * from membre where id=12");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                user = new User();

                //récupérer les valeurs
                user.setNom(rs.getString("nom"));
                user.setPrenom(rs.getString("nom"));
                user.setLogin(rs.getString("login"));
                user.setMotPasse(rs.getString("password"));
                user.setMail(rs.getString("email"));

                //afficher l'instane 
                //System.out.println(l);
            }

        } catch (SQLException ex) {
            Logger.getLogger(PublicationServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return user;

    }

    @Override
    public void add(User t) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void update(User t, int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void delete(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public List<User> displayAll() {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public User findById(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }
}
