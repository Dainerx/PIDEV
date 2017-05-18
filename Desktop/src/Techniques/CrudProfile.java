/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Techniques;

import modal.Membre;
import modal.Profile;
import assets.MyConnection;
import java.lang.reflect.Member;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.Date;
import java.util.List;

/**
 *
 * @author xagta1
 */
public class CrudProfile {
    
    
    

    
     public int addProfile(Profile pr) throws SQLException {
    
         String req = "insert into Profil (id_membre,photo,description,phonenumber,Pseudo) values (?,?,?,?,?); " ; 
         
         PreparedStatement preparedStatement = MyConnection.getInstance().prepareStatement(req) ; 
         
         preparedStatement.setInt(1, pr.getIdMembre().getId());
         preparedStatement.setString(2,pr.getPhoto());
         preparedStatement.setString(3, pr.getDescription());
         preparedStatement.setString(4, pr.getPhonenumber());
         preparedStatement.setString(5, pr.getPseudo());
         
        return preparedStatement.executeUpdate() ; 

    } 
    
    public List<Profile> getProfiles() throws SQLException {
        
        CrudMembre CM = new CrudMembre(); 
        
        Statement ste = MyConnection.getInstance().createStatement() ; 
        
        String req = "Select * from profil; " ; 
        
       ResultSet set= ste.executeQuery(req) ; 
       
          List<Profile> P = new ArrayList<>() ; 
  
       while (set.next())
       {
          Membre m1= CM.getMembreById(set.getInt("id_membre"));
           
   
           P.add(new Profile(set.getInt("id"), m1, set.getString("photo"), set.getString("description"), set.getString("phonenumber"),set.getString("Pseudo"))) ; 
    
       }
       return P ; 
     }
    
    
    public Profile getProfilByMembre(Membre m ) throws SQLException {
         CrudMembre CM = new CrudMembre(); 
         Profile Pr = new Profile();
        
        Statement ste = MyConnection.getInstance().createStatement() ; 
        
          String req = "Select * from profil where id_membre="+m.getId()+"" ; 
        
       ResultSet set= ste.executeQuery(req) ; 
       
         while (set.next())
       {
           Pr=new Profile(set.getInt("id"), m, set.getString("photo"), set.getString("description"), set.getString("phonenumber"),set.getString("Pseudo")); 
       }
         
         return Pr ; 
        
        
    }
        
    
    
        
    }  
    
    

