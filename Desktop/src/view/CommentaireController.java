/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import modal.Commentaire_Profile;
import modal.PublicationProfil;
import Techniques.CrudCommentaire;
import Techniques.CrudMembre;
import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXTextArea;
import java.net.URL;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;

import javax.mail.* ; 
import javax.mail.internet.*;  



/**
 * FXML Controller class
 *
 * @author xagta1
 */
public class CommentaireController implements Initializable {

    @FXML
    private JFXTextArea TapedComment;
    @FXML
    private JFXButton btnAddComment;
    @FXML
    private VBox Comments;
    
    CrudCommentaire CrudCom = new CrudCommentaire() ; 
    CrudMembre Crudm = new CrudMembre() ; 
    
    List<Commentaire_Profile> ComsList = new ArrayList<>() ; 
    

    @Override
    public void initialize(URL location, ResourceBundle resources) {

            
            
    }
    
    
   public void LoadComments(PublicationProfil pp ) throws SQLException
   {
       ComsList=CrudCom.getCommentairePerPub(pp);
       
       ComsList.stream().sorted((d1,d2)->d1.getDate().compareTo(d2.getDate())).forEach(e->{
       HBox box = new HBox() ; 
           Label username = new Label(pp.getIdProfil().getIdMembre().getNom()+"   "); 
           username.setStyle("-fx-text-color:blue ; ");
           Label TextLabel = new Label(e.getTexte()) ; 
          box.setStyle("-fx-background-color: #FFFFFF;-fx-border-color: #000000 ; ");
           box.getChildren().add(username); 
           box.getChildren().add(TextLabel); 
           
       Comments.getChildren().add(box); 
   });
       
       btnAddComment.setOnAction(e->{
                 LocalDate date = LocalDate.now() ; 
                Commentaire_Profile com = new Commentaire_Profile(TapedComment.getText(),date,pp) ; 
                
                
                
           try { 
               CrudCom.addCommentaire(com) ;
           sendEmail(com);
              
           } catch (SQLException ex) {
               Logger.getLogger(CommentaireController.class.getName()).log(Level.SEVERE, null, ex);
           }
            
            });
   }
   
     public void sendEmail(Commentaire_Profile cm) throws SQLException
    {
       
        String email=cm.getIdPub().getIdProfil().getIdMembre().getMail() ; 
        String host="smtp.gmail.com";  
        final String user="dainerxx.21@gmail.com";//change accordingly  
        final String password="21541010oOdi@iedzszs";//change accordingly  

        String to=email;  

         //Get the session object  
       
         
         Properties properties = new Properties();

properties.setProperty("mail.smtp.auth", "true");
properties.setProperty("mail.smtp.starttls.enable", "true");
properties.setProperty("mail.smtp.host", "smtp.gmail.com");
properties.setProperty("mail.smtp.port", "587");
properties.setProperty("mail.smtp.user", user);
properties.setProperty("mail.smtp.password", password);

         Session session = Session.getDefaultInstance(properties,  
          new javax.mail.Authenticator() {  
            @Override
            protected PasswordAuthentication getPasswordAuthentication() {  
          return new PasswordAuthentication(user,password);  
            }  
          });  
  
        //Compose the message  
         try {  
          MimeMessage message = new MimeMessage(session);  
          message.setFrom(new InternetAddress(user));  
          message.addRecipient(Message.RecipientType.TO,new InternetAddress(to));  
          message.setSubject(Crudm.getConnectedMembre().getNom()+"a commenté votre publication");  
          message.setText(cm.getIdPub().getIdProfil().getIdMembre().getNom()+",\n\n" + Crudm.getConnectedMembre().getNom() + " a commenté votre publication ");  

         //send the message 
         Transport transport = session.getTransport("smtp");
               transport.connect(null, user,password);
          transport.send(message);  

          System.out.println("message sent successfully...");  

          } catch (MessagingException e) {e.printStackTrace();}       

    }
    
}
