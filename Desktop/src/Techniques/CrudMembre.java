/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Techniques;
import modal.Membre;
import modal.Profile;
import assets.MyConnection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.ArrayList;
import java.util.List;
import java.util.stream.Collectors; 
import java.sql.Date ; 



/**
 *
 * @author xagta1
 */
public class CrudMembre {
    
    //public static Membre Current= getMembre ; 
    
    public  List<Membre> getMembreList() throws SQLException
    {
        Statement ste = MyConnection.getInstance().createStatement() ; 
        
        String req = "Select * from membre " ; 
        
       ResultSet set= ste.executeQuery(req) ; 
        
          List<Membre> ListMembre = new ArrayList<>() ; 
      while (set.next())
              {
                  Membre m = new Membre();
                  Date Dateinscri= new Date(0); 
//                  Dateinscri=set.getDate("DateInscri");
                  Date DateNaiss= new Date(0); 
                 // DateNaiss=set.getDate("DateNaissance");
                  
                  m.setId(set.getInt("id")); 
                  m.setNom(set.getString("nom"));
                  
//                  m.setUsername(set.getString("username"));
//                  m.setAdresse(set.getString("Adresse"));
//                  m.setEmail(set.getString("email"));
//                  m.setNumeroTel(set.getLong("numeroTel")) ;
//                  m.setPassword(set.getString("password"));
//                  m.setDateInscri(Dateinscri);
//                  m.setDateNaissance(DateNaiss);
//                  
                  ListMembre.add(m);
              }
      
  
      return ListMembre ; 
    }
    
       public  Membre getMembreById(int id ) throws SQLException
    {
        Statement ste = MyConnection.getInstance().createStatement() ; 
        
        String req = "Select * from membre where id="+id+" ; " ; 
        
       ResultSet set= ste.executeQuery(req) ; 
       Membre m = new Membre(); 
      while (set.next())
              {
                  
//                  Date Dateinscri= new Date(0); 
//                  Dateinscri=set.getDate("Date_Inscri");
//                  Date DateNaiss= new Date(0); 
//                  DateNaiss=set.getDate("DateNaissance");
                  
                  m.setId(set.getInt("id"));
                  m.setNom(set.getString("nom"));
                 //to complete with java 
                  
              }
      
      
      return m ; 
    }
       
      
       public Membre getConnectedMembre()throws SQLException
       {
           return getMembreById(3); 
               
        }
       
       
       
    
    
}
