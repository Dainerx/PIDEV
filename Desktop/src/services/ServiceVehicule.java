/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package services;
import java.sql.*;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import modal.Trajet;
import modal.Vehicule;

/**
 *
 * @author dainer
 */
public class ServiceVehicule {
    
    private final Connection conn;

    
    public ServiceVehicule() {
        this.conn = DataSource.getInstance().getConnection();
    }

    
    public void ajouterVehicule(Vehicule vehicule) throws SQLException {
        PreparedStatement query = conn.prepareStatement(
                "INSERT into vehicule (marque, matricule, modele, gamme)"
                        + "values (?,?,?,?)");        
        query.setString(1, vehicule.getMarque());
        query.setString(2, vehicule.getMatricule());
        query.setString(3, vehicule.getModel());
        query.setString(4, vehicule.getGamme());
        query.executeUpdate();
    }
    
    
    public ResultSet getLastID() throws SQLException {
        PreparedStatement stat = conn.prepareStatement("select id from vehicule order by id desc limit 1 \n" +
        "");
        return stat.executeQuery();
    }

    
    public void mettreJourVehicule(Vehicule vehicule) throws SQLException {
        PreparedStatement query = conn.prepareStatement(
                "UPDATE vehicule set marque=?, matricule=?, modele=?, gamme=? where id=?");        
        
        query.setString(1, vehicule.getMarque());
        query.setString(2, vehicule.getMarque());
        query.setString(3, vehicule.getModel());
        query.setString(4, vehicule.getGamme());
        query.setInt(5, vehicule.getId());        
        query.executeUpdate();
    }

    
    public ResultSet afficherVehicules() throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT * from vehicule");
        return stat.executeQuery();
    }
        
    public void delete(Vehicule vehicule) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("delete from vehicule where id=?");        
        stat.setInt(1, vehicule.getId());        
        stat.executeUpdate();
    }
    
    public List <Vehicule> rechercherVehicule (String entry) throws SQLException {
        List <Vehicule> liste = new ArrayList<>();
        PreparedStatement stat = conn.prepareStatement("SELECT * from vehicule where matricule "
                + "like ? or marque like ? or modele like ? or gamme like ?");
        stat.setString(1, "%" + entry + "%");
        stat.setString(2, "%" + entry + "%");
        stat.setString(3,"%" + entry + "%");
        stat.setString(4,"%" + entry + "%");        
        ResultSet set = stat.executeQuery();
        
        while (set.next())
        {
            Vehicule vehicule = new Vehicule(set.getString("marque"),set.getString("matricule"),set.getString("modele"),set.getString("gamme"));
            liste.add(vehicule);
        }
        return liste;
    }
    
    public ResultSet getConducteurVehicule(int id) throws SQLException {
        PreparedStatement stat = conn.prepareStatement("SELECT * FROM membre M inner join trajet T on M.id = T.id_membre join vehicule V on T.id_vehicule=V.id");
        return stat.executeQuery();
    }
    
    
}
