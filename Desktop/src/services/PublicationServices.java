/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import modal.Publication;
import modal.User;
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
import iservices.iServicepub;
import modal.Commentaire;

/**
 *
 * @author sahar ghorch
 */
public class PublicationServices   implements iServicepub <Publication> {
    private Connection con;
    private Statement ste;
    private PreparedStatement pst;

    public PublicationServices() {
        this.con = DataSource.getInstance().getConnection();
    }

    @Override
    public void add(Publication t) {
        //throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.

        try {
            //System.out.println(t.getCom_created());
            Statement st = con.createStatement();
            System.out.println("aaaaa" + t.getId_personne());
            st.executeUpdate("insert into publication_forum values(null,CURRENT_TIMESTAMP(),'" + t.getContenu() + "',null,null,'" + t.getId_personne() + "','" + t.getTitre() + "','" + t.getType() + "',null,null,null,null,null,null)");

        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    public void update(Publication t) {
        //throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        try {
            System.out.println("*********");

            pst = con.prepareStatement("update publication ");

            pst.executeUpdate();

        } catch (SQLException ex) {
            System.out.println(ex);
        }

    }

    public void update1(Publication t, String c) {
        //throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        try {
            System.out.println(c);

            pst = con.prepareStatement("update publication set contenu='" + c + "' where titre='" + t.getTitre() + "'");

            pst.executeUpdate();

        } catch (SQLException ex) {
            System.out.println(ex);
        }

    }

    public void deletebyid(int a) {
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        try {

            pst = con.prepareStatement("delete from publication_forum where id_pub='" + a + "' ");

            pst.executeUpdate();
        } catch (SQLException ex) {
            System.out.println(ex);
        }
    }

    @Override
    public List<Publication> displayAll() {
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        Publication l = null;
        List<Publication> publications = new ArrayList();
        try {
            pst = con.prepareStatement("select * from publication_forum ");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                l = new Publication();

                //récupérer les valeurs
                l.setId_pub(rs.getInt(1));
                l.setId_personne(rs.getInt(6));
                l.setTitre(rs.getString(7));
                l.setContenu(rs.getString(3));
                l.setDate(rs.getDate(2));
                l.setPicpath(rs.getString(4));
                l.setVideopath(rs.getString(5));
                l.setType(rs.getString(8));

                publications.add(l);

                //afficher l'instane 
                //System.out.println(l);
            }

        } catch (SQLException ex) {
            Logger.getLogger(PublicationServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return publications;

    }

    public List<Publication> displayAllCovoiturage() {
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        Publication l = null;
        List<Publication> publications = new ArrayList();
        try {
            pst = con.prepareStatement("select * from publication_forum where type='covoiturage'");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                l = new Publication();

                //récupérer les valeurs
                l.setId_pub(rs.getInt(1));
                l.setId_personne(rs.getInt(6));
                l.setTitre(rs.getString(7));
                l.setContenu(rs.getString(3));
                l.setDate(rs.getDate(2));
                l.setPicpath(rs.getString(4));
                l.setVideopath(rs.getString(5));
                l.setType(rs.getString(8));

                publications.add(l);

                //afficher l'instane 
                //System.out.println(l);
            }

        } catch (SQLException ex) {
            Logger.getLogger(PublicationServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return publications;

    }

    public List<Publication> displayAllLocation() {
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        Publication l = null;
        List<Publication> publications = new ArrayList();
        try {
            pst = con.prepareStatement("select * from publication_forum where type='location'");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                l = new Publication();

                //récupérer les valeurs
                l.setId_pub(rs.getInt(1));
                l.setId_personne(rs.getInt(6));
                l.setTitre(rs.getString(7));
                l.setContenu(rs.getString(3));
                l.setDate(rs.getDate(2));
                l.setPicpath(rs.getString(4));
                l.setVideopath(rs.getString(5));
                l.setType(rs.getString(8));

                publications.add(l);

                //afficher l'instane 
                //System.out.println(l);
            }

        } catch (SQLException ex) {
            Logger.getLogger(PublicationServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return publications;

    }

    public List<Publication> displayAllPartenariat() {
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        Publication l = null;
        List<Publication> publications = new ArrayList();
        try {
            pst = con.prepareStatement("select * from publication_forum where type='partenariat'");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                l = new Publication();

                //récupérer les valeurs
                l.setId_pub(rs.getInt(1));
                l.setId_personne(rs.getInt(6));
                l.setTitre(rs.getString(7));
                l.setContenu(rs.getString(3));
                l.setDate(rs.getDate(2));
                l.setPicpath(rs.getString(4));
                l.setVideopath(rs.getString(5));
                l.setType(rs.getString(8));

                publications.add(l);

                //afficher l'instane 
                //System.out.println(l);
            }

        } catch (SQLException ex) {
            Logger.getLogger(PublicationServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return publications;

    }

  

    public Publication findByTitre(String t) {

        Publication c = null;

        try {
            pst = con.prepareStatement("select * from publication where titre='" + t + "' ");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                c = new Publication();
                //récupérer les valeurs
                c.setId_pub(rs.getInt(1));
                c.setId_personne(rs.getInt(2));
                c.setTitre(rs.getString(3));
                c.setContenu(rs.getString(4));
                c.setDate(rs.getDate(5));

                //afficher l'instane 
                //System.out.println(l);
            }

        } catch (SQLException ex) {
            Logger.getLogger(PublicationServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return c;

    }

    public User displayAllUser(int p) {
        User user = null;

        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
        try {
            pst = con.prepareStatement("select * from membre where id='" + p + "'");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                user = new User();

                //récupérer les valeurs
                user.setNom(rs.getString("nom"));
             //   user.setPrenom(rs.getString("prenom"));
               // user.setLogin(rs.getString("login"));
                //user.setMotPasse(rs.getString("mot_passe"));
           
                user.setMail(rs.getString("email"));

                //afficher l'instane 
                //System.out.println(l);
            }

        } catch (SQLException ex) {
            Logger.getLogger(PublicationServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return user;

    }

    public List<User> displayAllUser1() {
        User user = null;

        List<User> users = new ArrayList();
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.

        try {
            pst = con.prepareStatement("select * from membre ");
            ResultSet rs = pst.executeQuery();

            while (rs.next()) {
                //créer une instance vide de personne()
                user = new User();

                //récupérer les valeurs
                user.setId_membre(rs.getInt("id"));
                user.setNom(rs.getString("nom"));
               // user.setPrenom(rs.getString("prenom"));
               // user.setLogin(rs.getString("login"));
              //  user.setMotPasse(rs.getString("mot_passe"));
                user.setMail(rs.getString("email"));
                users.add(user);
                //afficher l'instane 
                //System.out.println(l);

            }

        } catch (SQLException ex) {
            Logger.getLogger(PublicationServices.class.getName()).log(Level.SEVERE, null, ex);
        }

        return users;

    }

    public User findById(int id) {
        User A = null;
        try {
            ste = con.createStatement();
            ResultSet rs = ste.executeQuery("select * from membre where id=" + id + " ");
            rs.next();

            A = new User( /* rs.getInt(1), rs.getString(2), rs.getString(3), rs.getString(4), rs.getString(5), rs.getString(6) */);
A.setId_membre(rs.getInt(1));
A.setNom(rs.getString(5));
A.setMail(rs.getString(4));
        } catch (SQLException ex) {
            System.out.println(ex);
        }
        return A;

    }

    @Override
    public void update(Publication t, int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    @Override
    public void delete(int id) {
        throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

}
