/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package services;

import modal.*;
import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;

/**
 *
 * @author slim
 */
public class ServiceCalendrier {
    private Connection conn;
    ResultSet result;
    
     public ServiceCalendrier() {
        this.conn = DataSource.getInstance().getConnection();
    }
 
    public ResultSet AfficherEvennement(int id) throws SQLException{
      
        PreparedStatement ps=conn.prepareStatement("SELECT E.* from evenement E inner join membre M on E.Membre_id=M.id where M.id=?");
        ps.setInt(1, id);
        
        result=ps.executeQuery();
        return result;
        
        
    }
    public void ajouterEvennement(Calendrier c) {
        String req="INSERT INTO evenement(`libelle`,`Membre_id`,`date`,`description`,`lieu`) values (?,?,?,?,?)";
        try {
            PreparedStatement ps=conn.prepareStatement(req);
            ps.setString(1, "");
            ps.setInt(2, 1);
            
            ps.setString(3, c.getDateTrajet());
            ps.setString(4, c.getDescription());
            ps.setString(5, "");
           
            ps.executeUpdate();
            System.out.println("evennement ajouté");
   
        }catch (Exception e) {
            e.printStackTrace();
        }
        
        }
     
  
     
      public void supprimerEvennement(String description){
        String req="delete  from evenement where description=?";
        try{
            PreparedStatement ps=conn.prepareStatement(req);
            ps.setString(1, description);
            ps.executeUpdate();
            System.out.println("evennement supprimé");
            
        }catch(Exception e){
         e.printStackTrace();
        }
        
    }
      
    
}
