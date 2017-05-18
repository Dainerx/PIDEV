/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package view;

import modal.*;
import services.*;
import java.net.URL;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Properties;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.stage.Stage;
import javax.mail.Message;
import javax.mail.PasswordAuthentication;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;

/**
 * FXML Controller class
 *
 * @author slim
 */
public class InterfaceAdminController implements Initializable {
    @FXML
    private TableView<Membre> membreTable;
    AdminServices adminService=new AdminServices();
     Parent root=new Parent() {};
    Scene scene;
    @FXML
    private TableColumn loginColumn;
    @FXML
    private TableColumn nomColumn;
    @FXML
    private TableColumn prenomColumn;
    @FXML
    private TableColumn mailColumn;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
  
    }    

    @FXML
    private void SupprimerMembre(ActionEvent event) throws SQLException {
    AdminServices crud= new AdminServices();
    crud.supprimerMembre((String) loginColumn.getCellData(membreTable.getSelectionModel().getFocusedIndex()));
    ObservableList<Membre> data = FXCollections.observableArrayList((Membre) null);
    ResultSet set = crud.AfficherMembre();
       Properties props = new Properties();
		props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.starttls.enable", "true");
		props.put("mail.smtp.host", "smtp.gmail.com");
		props.put("mail.smtp.port", "587");

		Session session = Session.getInstance(props,
		  new javax.mail.Authenticator() {
			protected PasswordAuthentication getPasswordAuthentication() {
				return new PasswordAuthentication("karim.slim@esprit.tn", "kusturica");
			}
		  });

		try {

			Message message = new MimeMessage(session);
			message.setFrom(new InternetAddress("karim.slim@esprit.tn"));
                        String mail=((String) mailColumn.getCellData(membreTable.getSelectionModel().getFocusedIndex()));
			message.setRecipients(Message.RecipientType.TO,
			InternetAddress.parse(mail));
			message.setSubject("Suppression Compte!");
			message.setText("Salut Monsieur "+((String) prenomColumn.getCellData(membreTable.getSelectionModel().getFocusedIndex()))+" "+((String) nomColumn.getCellData(membreTable.getSelectionModel().getFocusedIndex()))+".\n\n Suite a vos activités nuisibles, /n on vous a desactivé votre compte!! ");
                        
			Transport.send(message);
                }catch (Exception e){
                }
   while (set.next()) { 
    
   Membre membre;
          
   membre = new Membre(set.getString("nom"), set.getString("prenom"),set.getString("username"), set.getString("password"), set.getString("email"), set.getString("adresse"));
           
    
   data.add(membre); 
    }
 
    loginColumn.setCellValueFactory( new PropertyValueFactory<Membre,String>("login") ); 
    nomColumn.setCellValueFactory( new PropertyValueFactory<Membre,String>("nom") );
    prenomColumn.setCellValueFactory( new PropertyValueFactory<Membre,String>("prenom") ); 
    mailColumn.setCellValueFactory( new PropertyValueFactory<Membre,String>("mail") ); 
     
    membreTable.setItems(data); 
    }

    @FXML
    private void AvertirMembre(ActionEvent event) {
           Properties props = new Properties();
		props.put("mail.smtp.auth", "true");
		props.put("mail.smtp.starttls.enable", "true");
		props.put("mail.smtp.host", "smtp.gmail.com");
		props.put("mail.smtp.port", "587");

		Session session = Session.getInstance(props,
		  new javax.mail.Authenticator() {
			protected PasswordAuthentication getPasswordAuthentication() {
				return new PasswordAuthentication("karim.slim@esprit.tn", "kusturica");
			}
		  });

		try {

			Message message = new MimeMessage(session);
			message.setFrom(new InternetAddress("karim.slim@esprit.tn"));
                        String mail=((String) mailColumn.getCellData(membreTable.getSelectionModel().getFocusedIndex()));
			message.setRecipients(Message.RecipientType.TO,
			InternetAddress.parse(mail));
			message.setSubject("Avertissement!!");
			message.setText("Salut Monsieur "+((String) prenomColumn.getCellData(membreTable.getSelectionModel().getFocusedIndex()))+" "+((String) nomColumn.getCellData(membreTable.getSelectionModel().getFocusedIndex()))+".\n\n Suite a vos activités nuisibles, /n on vous averti cette fois de respecter les conditions generales!! ");
                        
			Transport.send(message);
                }catch (Exception e){
                }
    }

    @FXML
    private void SuspendreMembre(ActionEvent event) {
    }

    @FXML
    private void seDeconnecter(ActionEvent event) {
         try {
            Stage stagex = (Stage) membreTable.getScene().getWindow();
            stagex.close();
        adminService.seDeconnecter();
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceAccueil.fxml"));
                 root = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root));  
                stage.show();
        } catch(Exception e) {
           e.printStackTrace();
          }
    }

    @FXML
    private void AfficherMembre(ActionEvent event) throws SQLException {
             AdminServices crud = new AdminServices(); 
    ObservableList<Membre> data = FXCollections.observableArrayList((Membre) null);
    ResultSet set = crud.AfficherMembre();
    while (set.next()) { 
    
   Membre membre;
          
   membre = new Membre(set.getString("nom"), set.getString("prenom"),set.getString("username"), set.getString("password"), set.getString("email"), set.getString("adresse"));
           
    
   data.add(membre); 
    }
 
    loginColumn.setCellValueFactory( new PropertyValueFactory<Membre,String>("login") ); 
    nomColumn.setCellValueFactory( new PropertyValueFactory<Membre,String>("nom") );
    prenomColumn.setCellValueFactory( new PropertyValueFactory<Membre,String>("prenom") ); 
    mailColumn.setCellValueFactory( new PropertyValueFactory<Membre,String>("mail") ); 
     
    membreTable.setItems(data); 
    }
    
}
