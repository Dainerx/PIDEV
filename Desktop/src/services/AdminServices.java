/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import java.sql.Connection;
import modal.*;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

/**
 *
 * @author slim
 */
public class AdminServices {

    private Connection conn;
    ResultSet result;
    public static String loginConnecté = "";

    public AdminServices() {
        this.conn = DataSource.getInstance().getConnection();
    }

    public int seConnecter(String login, String motPasse) {
        String req = "SELECT  `username`, `password` FROM administrateur WHERE username='" + login + "'and password='" + motPasse + "'";
        try {
            PreparedStatement ps =
            conn.prepareStatement(req);
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

    public boolean VerifierMotPasse(String motPasse) throws SQLException {
        String req = "select password from administrateur where username='" + loginConnecté + "'";
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

    public static String getLoginConnecté() {
        return loginConnecté;
    }

    public static void setLoginConnecté(String loginConnecté) {
        AdminServices.loginConnecté = loginConnecté;
    }

    public ResultSet AfficherMembre() throws SQLException {

        PreparedStatement ps = conn.prepareStatement("SELECT * from membre");

        result = ps.executeQuery();
        return result;

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
}
