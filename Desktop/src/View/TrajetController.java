/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package View;

import java.io.IOException;
import java.net.URL;
import javafx.fxml.FXMLLoader;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;


import java.util.Properties;  
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonBar.ButtonData;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import javax.mail.*;  
import javax.mail.internet.*;  




import modal.*;
import services.*;

import org.controlsfx.control.*;

/**
 * FXML Controller class
 *
 * @author dainer
 */
public class TrajetController implements Initializable {
    @FXML
    private TextArea description;
    @FXML
    private ToggleSwitch suivie;
    @FXML
    private Label places;
    @FXML
    private Label cout;
    @FXML
    private WebView maps;
    
    private Trajet trajet;
    
    private Scene scene;
    
    @FXML
    private Label gammeV;
    @FXML
    private Label marqueV;
    @FXML
    private Label matriculeV;
    @FXML
    private Label modeleV;    
    @FXML
    private Label chaffeurV;
    @FXML
    private Label tel;
    @FXML
    private Label email;
    
    @FXML 
    private Button retoursuivant;
    
    @FXML
    public void reserverTrajet() throws SQLException, IOException {
        //Integer nbr = (Integer) Integer.parseInt(places.getText());
        if (this.trajet.getNombrePlaceDispo()<=0)
        {
            Alert alert = new Alert(AlertType.ERROR);
            alert.setTitle("Erreur");
            alert.setHeaderText("Une erreur s'est produite lors de la réservation.");
            alert.setContentText("Ce trajet est complet!");
            alert.showAndWait();        
            return;
        }
        Alert alert = new Alert(AlertType.CONFIRMATION);
        alert.setTitle("Fenetre de confirmation");
        alert.setHeaderText("Réservation du trajet");
        alert.setContentText("Etes vous sures de vouloir réserver\n une place dans ce trajet?");

        ButtonType buttonTypeOne = new ButtonType("Oui");
        ButtonType buttonTypeTwo = new ButtonType("Non");
        alert.getButtonTypes().setAll(buttonTypeOne, buttonTypeTwo);

        Optional<ButtonType> result = alert.showAndWait();
        if (result.get() == buttonTypeOne){
        Membre membre = new Membre(2,"Ben foulena", "Foulen", "foulenx", "azerty", "foulen@gmail.com");
        
        ServiceTrajet crud = new ServiceTrajet();
        Passager passager = new Passager(this.trajet, membre);
        crud.ReserverTrajet(passager);
        ServiceSMS SMS = new ServiceSMS();
        String phone=crud.getPhoneConducteur(this.trajet.getId());
        String fullname = membre.getPrenom() + " " + membre.getNom();
        sendEmail(fullname, this.trajet.getDateDepart(), this.trajet.getDepart(), this.trajet.getDestination());
        String message = this.chaffeurV.getText()+",\n\n" + fullname + " a réservé une palce dans votre trajet proposé le " + this.trajet.getDateDepart() +" allant de " 
                  + this.trajet.getDepart() + " vers " + this.trajet.getDestination() + "\n\nMerci d'utiliser notre application.\n-Join My Ride";
        SMS.sendSMS(phone, message);
        Alert alertReservation = new Alert(AlertType.INFORMATION);
        alertReservation.setTitle("Ajout Trajet");
        alertReservation.setHeaderText(null);
        alertReservation.setContentText("Vous avez réservé une place dans ce trajet.");
        alertReservation.showAndWait(); 
        Stage stage = (Stage) email.getScene().getWindow();        
        stage.close();
        Scene scene1 = new Scene(new BorderPane(null, null, null, null, null), 400, 400);
        stage.setScene(scene1);
        Trajets traj = new Trajets();
        traj.start(stage);

        } else if (result.get() == buttonTypeTwo) {
            System.out.println("User refused");
        }
            
    }
    

    @FXML
    public void retourAcceuil(ActionEvent event) throws SQLException, IOException
    {
            Stage stage = (Stage) this.chaffeurV.getScene().getWindow();        
            stage.close();
            Scene scene = new Scene(new BorderPane(null, null, null, null, null), 400, 400);
            stage.setScene(scene);
            Trajets traj = new Trajets();
            traj.start(stage); 
    }
    
    public void setTrajet(Trajet trajet)
    {
        this.trajet=trajet;
    }
    
    public void sendEmail(String nom, LocalDate date, String depart, String destination) throws SQLException
    {
        ServiceTrajet crud = new ServiceTrajet();
        //String emailTo=crud.getEmailConducteur(this.trajet.getId());
        String emailTo = "oussema.benghorbel@esprit.tn";
        String host="localhost";  
        final String user="dainerxx.21@gmail.com";  
        final String password="21541010oOdi@iedzszs";

        String to=emailTo;  

         //Get the session object  
         Properties props = new Properties();  
         props.put("mail.smtp.host",host);  
         props.put("mail.smtp.auth", "true");  

         Session session = Session.getDefaultInstance(props,  
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
          message.setSubject("Notification de covoiturage");  
          message.setText("Oussama,\n\n" + nom + " a réservé une palce dans votre trajet proposé le " + date +" allant de " 
                  + depart + " vers " + destination + "\n\nMerci d'utiliser notre application.\n-Join My Ride");  

         //send the message  
          Transport.send(message);  

          System.out.println("message sent successfully...");  

          } catch (MessagingException e) {e.printStackTrace();}       

    }
    
 
    @FXML
    private void rechercherModele() {
        //https://www.google.tn/search?q
        VBox contentSearch = new VBox(5);
        AnchorPane anchor = new AnchorPane(contentSearch);
        WebView modelesSearch = new WebView();
        WebEngine webEngine = modelesSearch.getEngine();
        String url = "https://www.google.tn/search?q="+this.marqueV.getText() 
                + " " + this.modeleV.getText();
        webEngine.load(url);     
        modelesSearch.setPrefSize(1350, 950);
        contentSearch.getChildren().add(modelesSearch);
        Scene sceneSearch = new Scene(new BorderPane(anchor, null, null, null, null), 1500, 1500);
        Stage stagesearch = new Stage();
        stagesearch.setScene(sceneSearch);
        stagesearch.setTitle("Recherche de voiture - Join My Ride");
        stagesearch.show();

    }
    private boolean confirmerReservation(){
        boolean result=ConfirmBox.display("Réservation","Etes vous sures de vouloir réserver \n une place dans ce trajet?");
        return result;
    }    
    public void initData(Trajet trajet) {
        this.trajet = trajet;
        description.setText(trajet.getDescription());
        places.setText(places.getText()+ " " + trajet.getNombrePlaceDispo());
        cout.setText(cout.getText() + " " + trajet.getCout() + " Dt");
        if (trajet.isSuivie())
            suivie.setSelected(true);
        else
            suivie.setSelected(false);
        
        suivie.setDisable(true);
        
        WebEngine webEngine = maps.getEngine();
        webEngine.load("https://www.google.com/maps/dir/"+this.trajet.getDepart()+"/"
                + ""+ this.trajet.getDestination() +"/");
        ServiceTrajet crud = new ServiceTrajet(); //inst
        try {
            ResultSet voiture = crud.afficherUneVehicule(this.trajet.getId());
            while (voiture.next())
            {
                marqueV.setText(voiture.getString("marque"));
                modeleV.setText(voiture.getString("modele")); 
                matriculeV.setText(voiture.getString("matricule"));
                gammeV.setText(voiture.getString("gamme"));
            }
        } catch (SQLException ex) {
            Logger.getLogger(TrajetController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
         try {
            ResultSet voiture = crud.afficherChaffeur(this.trajet.getId());
            while (voiture.next())
            {
                chaffeurV.setText(voiture.getString("nom"));
                tel.setText(voiture.getString("NumeroTel"));
                email.setText(voiture.getString("email"));
            }
        } catch (SQLException ex) {
            Logger.getLogger(TrajetController.class.getName()).log(Level.SEVERE, null, ex);
        }
    
    }

    
    public void setScene(Scene scene) { 
        this.scene = scene; 
        System.out.println("yay!");
    }

    /**
     * Initializes the controller class.
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
            
        
        TextField yourTextField = new TextField();
        yourTextField.focusedProperty().addListener((ObservableValue<? extends Boolean> arg0, Boolean oldPropertyValue, Boolean newPropertyValue) -> {
        if (newPropertyValue)
        {
            System.out.println("Textfield on focus");
        }
        else
        {
            System.out.println("Textfield out focus");
        }  });
    }    
    
}
