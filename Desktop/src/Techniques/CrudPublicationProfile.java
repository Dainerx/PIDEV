/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Techniques;

import modal.Profile;
import modal.PublicationProfil;
import assets.MyConnection;
import java.sql.Date;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.logging.Level;
import java.util.logging.Logger;

/**
 *
 * @author xagta1
 */
public class CrudPublicationProfile {
    
    public List<PublicationProfil> getPubsListPerProfile(Profile pr) throws SQLException
    {
           Statement ste = MyConnection.getInstance().createStatement() ; 
        
        String req = "Select * from publication_profil where id_profil="+pr.getId()+" ; " ; 
        
       ResultSet set= ste.executeQuery(req) ; 
       List<PublicationProfil> ListPub = new ArrayList<>() ; 
      while (set.next())
              {
                         PublicationProfil Pub = new PublicationProfil(); 

                 
                  LocalDate Datepub=set.getDate("date").toLocalDate() ; 
                  Pub.setContenu(set.getString("contenu"));
                  Pub.setDate(Datepub); 
                  Pub.setId(set.getInt("id"));
                  Pub.setIdProfil(pr);
                  Pub.setPicpath(set.getString("picpath"));
                  
                 ListPub.add(Pub);
                  
              }
      
      
      return ListPub ; 
    }
    
    
     public int addProfilePub(PublicationProfil pp) throws SQLException {
    
         String req = "insert into publication_profil (id_profil,date,contenu,picpath) values (?,?,?,?); " ; 
         
         PreparedStatement preparedStatement = MyConnection.getInstance().prepareStatement(req) ; 
         
                 Date date = Date.valueOf(pp.getDate());

         preparedStatement.setInt(1, pp.getIdProfil().getId());
         preparedStatement.setDate(2,date);
         preparedStatement.setString(3, pp.getContenu());
         preparedStatement.setString(4, pp.getPicpath());
         
        return preparedStatement.executeUpdate() ; 

    } 
     
     
}
