/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package view;

import modal.*;
import services.*;
import java.io.IOException;
import static java.lang.ProcessBuilder.Redirect.to;
import javax.mail.PasswordAuthentication;
import java.net.URL;
import java.util.Properties;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeMessage;
import static jdk.nashorn.internal.objects.NativeJava.to;
/**
 * FXML Controller class
 *
 * @author slim
 */
public class InterfaceInscriptionController implements Initializable {
    @FXML
    private TextField nomTF;
    @FXML
    private TextField prenomTF;
    @FXML
    private TextField loginTF;
    @FXML
    private TextField passwordTF;
    @FXML
    private TextField mailTF;
    @FXML
    private TextField adresseTF;
    @FXML
    private TextField NumTelTF;
    @FXML
    private DatePicker dateNaiss;
      @FXML
    private Label dateNaissLabel;
       Parent root=new Parent() {};
    Scene scene;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
       
    }    

    @FXML
    private void sinscrire(ActionEvent event) throws IOException {
        UserServices usr=new UserServices();
        Membre u=new Membre();
        u.setNom(nomTF.getText());
        u.setPrenom(prenomTF.getText());
        u.setLogin(loginTF.getText());
        u.setMotPasse(passwordTF.getText());
        u.setMail(mailTF.getText());
        u.setAdresse(adresseTF.getText());
        
         String dateNaiss=dateNaissLabel.getText();
         u.setDateNaiss(dateNaiss);
        
        
        u.setNumerotel(NumTelTF.getText());
        
        if(usr.Sinscrire(u)){
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
			message.setRecipients(Message.RecipientType.TO,
			InternetAddress.parse(mailTF.getText()));
			message.setSubject("Bienvnue dans notre application");
			message.setText("Salut Monsieur "+prenomTF.getText()+" "+nomTF.getText()+".\n\n Vous etes le bienvenue dans notre application desktop ");
                        
			Transport.send(message);
                }catch (Exception e){
                }


            Alerte.display("Inscription terminée", "Felicitation! Vous etes inscrit."
                    + "Un mail vous a été envoyé ");
                 Stage stagex = (Stage) nomTF.getScene().getWindow();
                 stagex.close();
                 FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceAccueil.fxml"));
                 root = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root));  
                
                stage.show();
        
         
            
            
        }
        
    }

//        private void afficherDateNaiss(MouseEvent event) {
//        int dateYear=(dateNaiss.getValue().getYear());
//        int dateMounth=(dateNaiss.getValue().getMonthValue());
//        int dateDay=(dateNaiss.getValue().getDayOfMonth());
//        dateNaissLabel.setText(Integer.toString(dateDay)+"-"+Integer.toString(dateMounth)+"-"+Integer.toString(dateYear));
//    }

    @FXML
    private void seConnecter(ActionEvent event) {
               try {
           Stage stagex = (Stage) nomTF.getScene().getWindow();
                 stagex.close();
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
    private void afficheDateNaiss(MouseEvent event) {
       
  
        int dateYear=(dateNaiss.getValue().getYear());
        int dateMounth=(dateNaiss.getValue().getMonthValue());
        int dateDay=(dateNaiss.getValue().getDayOfMonth());
        dateNaissLabel.setText(Integer.toString(dateDay)+"-"+Integer.toString(dateMounth)+"-"+Integer.toString(dateYear));
    
    }

    
}
