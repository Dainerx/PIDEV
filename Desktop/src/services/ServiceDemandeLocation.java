/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;

import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import modal.DemandeLocation;
import assets.MyConnection;

/**
 *
 * @author Ameni
 */
public class ServiceDemandeLocation {

    public void insertDemandeLocation(DemandeLocation a) {
        String req = "INSERT INTO `demande_location` (`id_membre`,`nom_location`, `date_debut`, `date_fin`,`cout`) VALUES (?,?,?,?,?);";
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1,7);
            ps.setString(2, a.getNom_location());
            ps.setDate(3, a.getDate_debut());
            ps.setDate(4, a.getDate_fin());
            ps.setFloat(5, a.getCout());
          
            ps.executeUpdate();
            System.out.println(" demande location  ajouté");
        } catch (Exception e) {
            System.out.println(" probleme d'ajout de la demande de location");
        }

    }
    
    public void insertDemandeLocation2(DemandeLocation a) {
        String req = "INSERT INTO `demande_location` (`id_membre`,`nom_membre`, `nom_location`, `date_debut`, `date_fin`, `etat`) VALUES (?,?,?,?,?,?);";
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1,7);
            ps.setString(2, a.getNom_membre());
            ps.setString(3, a.getNom_location());
            ps.setDate(4, a.getDate_debut());
            ps.setDate(5, a.getDate_fin());
            ps.setString(6, a.getEtat());
            ps.executeUpdate();
            System.out.println(" demande location  ajouté");
        } catch (Exception e) {
            System.out.println(" probleme d'ajout de la demande de location");
        }

    }

    public void deleteDemandeLocation(int id) {
        String req = "delete from demande_location where (id=?)";
        try {

            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1, id);
            ps.executeUpdate();
            System.out.println(" Demande location supprimé");
        } catch (Exception e) {
            e.printStackTrace();
            System.out.println("probleme de suppression de la demande de location ");
        }
    }

    public List<DemandeLocation> DisplayDemandeLocation() {
        String req = "select * from demande_location";

        List<DemandeLocation> demandes = new ArrayList<DemandeLocation>();
        try {
            Statement state = MyConnection.getInstance().createStatement();
            ResultSet result = state.executeQuery(req);
            while (result.next()) {
                String i1 = result.getString("nom_membre");
                String i2 = result.getString("nom_location");
                int i = result.getInt("id");
                int m = result.getInt("id_membre");
                Date d = result.getDate("date_debut");
                Date d1 = result.getDate("date_fin");
                String str = result.getString("etat");
                float f = result.getFloat("cout");

                DemandeLocation p = new DemandeLocation(i,m, i1, i2, d, d1, str,f);
                demandes.add(p);
            }
            return demandes;
        } catch (Exception e) {
            e.printStackTrace();
            System.out.println("probleme d'affichage de demande de location");
        }
        return demandes;
    }

    public DemandeLocation getById(int id) {

        String req = "select * from demande_location where id =?";
        DemandeLocation u = null;
        try {
            PreparedStatement ps = MyConnection.getInstance().prepareStatement(req);
            ps.setInt(1, id);
            ResultSet rs = ps.executeQuery();
            while (rs.next()) {
                u = new DemandeLocation(rs.getInt(1),rs.getInt(2), rs.getString(3), rs.getString(4), rs.getDate(5), rs.getDate(6), rs.getString(7),rs.getFloat(8));

            }
        } catch (Exception e) {
            System.out.println(" probleme edu.esprit.service.ServiceDemandeLocation.getById()");
            e.printStackTrace();
        }
        return u;
        //System.out.println(u);

    }

    public boolean ModifierDemandeLocation(DemandeLocation an, Date dd1, Date df1) {
        try {
            String sql = "update demande_location set date_debut='"+dd1+"',date_fin='"+df1+"' where id='"+an.getId()+"'";
            PreparedStatement ps;
            ps = MyConnection.getInstance().prepareStatement(sql);

           // ps.setDate(1, an.getDate_debut());
            //ps.setDate(2, an.getDate_fin());
            // ps.setString(3, an.getEtat());

            ps.executeUpdate();
        } catch (SQLException ex) {
            System.out.println("------ ERREUURRRRRR ----------");
        }

        return true;

    }

    public boolean ModifierDemandeLocation1(DemandeLocation an,String s) {
        try {
            String sql ="update demande_location set etat='"+s+"' where id='"+an.getId()+"'";
            PreparedStatement ps;
            ps = MyConnection.getInstance().prepareStatement(sql);
           // ps.setString(1, an.getEtat());
             ps.executeUpdate();
             System.out.println("demande modifié");
        } catch (SQLException ex) {
            System.out.println("------ ERREUURRRRRR ----------");
        }

        return true;

    }

}
