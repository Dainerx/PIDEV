/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package Techniques;

import modal.Commentaire_Profile;
import modal.Membre;
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

/**
 *
 * @author xagta1
 */
public class CrudCommentaire {
    
    public int addCommentaire(Commentaire_Profile Com) throws SQLException {
    
         String req = "INSERT INTO `commentaire_profile`( `id_publication`, `contenu`, `date`) VALUES (?,?,?) " ; 
         
         PreparedStatement preparedStatement = MyConnection.getInstance().prepareStatement(req) ; 
         
         preparedStatement.setInt(1, Com.getIdPub().getId());
         preparedStatement.setString(2,Com.getTexte());
         preparedStatement.setString(3,Com.getDate().toString());
         
        return preparedStatement.executeUpdate() ; 

    } 
    
    public  List<Commentaire_Profile> getCommentairePerPub(PublicationProfil Pp) throws SQLException
    {
        Statement ste = MyConnection.getInstance().createStatement() ; 
        
        String req = "Select * from commentaire_profile where id_publication="+Pp.getId()+" " ; 
        
       ResultSet set= ste.executeQuery(req) ; 
        
          List<Commentaire_Profile> ListCommentaire = new ArrayList<>() ; 
      while (set.next())
              {
                  Commentaire_Profile com = new Commentaire_Profile();
                 
                  
                 LocalDate Datepubcom=set.getDate("date").toLocalDate(); 
                  
                  com.setDate(Datepubcom);
                  com.setIdCom(set.getInt("id_com")); 
                  com.setIdPub(Pp);
                  com.setTexte(set.getString("contenu"));
                  
                  ListCommentaire.add(com);
              }
      
  
      return ListCommentaire ; 
    }
    
//    public List<Commentaire> getAllCommentaires() throws SQLException 
//    {
//        
//        CrudPublicationProfile CP = new CrudPublicationProfile(); 
//        
//         Statement ste = MyConnection.getInstance().createStatement() ; 
//        
//        String req = "Select * from commentaire_profile  " ; 
//        
//       ResultSet set= ste.executeQuery(req) ; 
//        
//          List<Commentaire> ListCommentaire = new ArrayList<>() ; 
//      while (set.next())
//              {
//                  Commentaire com = new Commentaire();
//                 
//                  Date Datepubcom= new Date(0); 
//                  Datepubcom=set.getDate("date");
//                  
//                  com.setDate(Datepubcom);
//                  com.setIdCom(set.getInt("id")); 
//                  com.setIdPub(CP.);
//                  com.setTexte(set.getString("contenu"));
//                  
//                  ListCommentaire.add(com);
//              }
//      
//  
//      return ListCommentaire ; 
//    }
    
}
