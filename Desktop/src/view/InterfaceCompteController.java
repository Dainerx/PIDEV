/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package view;

import modal.*;
import services.*;
import static java.awt.SystemColor.window;
import java.net.URL;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.event.Event;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Label;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author slim
 */
public class InterfaceCompteController implements Initializable {
    @FXML
    private TextField chercherTF;
    @FXML
    private Label labelNom;
    @FXML
    private Label labelPrenom;
    @FXML
    private Label labelLogin;
    @FXML
    private Label labelMotPasse;
    @FXML
    private Label labelMail;
    @FXML
    private Label labelAdresse;
    
    private Label labelDate;
    UserServices  usr=new UserServices();
    Parent root=new Parent() {};
    Scene scene;
 
    @FXML
    private TableView <Trajet> trajetsTable;

    @FXML
    private TableColumn departColumn;
    @FXML
    private TableColumn destinationColumn;
    @FXML
    private TableColumn dateColumn;
    
    int id=1;
    @FXML
    private Label labelTel;
    @FXML
    private DatePicker dateTrajet;
    @FXML
    private Label dateTrajetLabel;
    @FXML
    private TextArea descriptionTF;
    @FXML
    private TableView <Calendrier> calendrierTable;
    @FXML
    private TableColumn dateTrajetColumn;
    @FXML
    private TableColumn descriptionTrajetColumn;

   
  
       @Override
    public void initialize(URL url, ResourceBundle rb) {
    }

    @FXML
    private void ChercherMembre(ActionEvent event) {
    }

    @FXML
    private void seDeconnecter(ActionEvent event) {
         try {
            Stage stagex = (Stage) chercherTF.getScene().getWindow();
            stagex.close();
        usr.seDeconnecter();
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
    private void modifierNom(ActionEvent event) {
         try {
           
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceModifNom.fxml"));
                 root = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root));  
                stage.show();
        } catch(Exception e) {
           e.printStackTrace();
          }
        
        
    }

    @FXML
    private void modifierPrenom(ActionEvent event) {
         try {
           
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceModifPrenom.fxml"));
                 root = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root));  
                stage.show();
        } catch(Exception e) {
           e.printStackTrace();
          }
    }

    @FXML
    private void modifierMotPasse(ActionEvent event) {
         try {
           
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceModifMotPasse.fxml"));
                 root = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root));  
                stage.show();
        } catch(Exception e) {
           e.printStackTrace();
          }
    }

    @FXML
    private void modifierAdresse(ActionEvent event) {
         try {
           
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceModifAdresse.fxml"));
                 root = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root));  
                stage.show();
        } catch(Exception e) {
           e.printStackTrace();
          }
    }
     @FXML
    private void modifierTel(ActionEvent event) {
            try {
           
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceModifTel.fxml"));
                 root = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root));  
                stage.show();
        } catch(Exception e) {
           e.printStackTrace();
          }
    }

    @FXML
    private void DesactiverCompte(Event event) {
        if(desactiverCompte()==true){
          String loginCo=usr.getLoginConnecte();
          usr.supprimerMembre(loginCo);
          Stage stagex = (Stage) chercherTF.getScene().getWindow();
            stagex.close();
          Alerte.display("Desactivation reussie", "Votre compte a été desactivé");
           try {
         FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceAccueil.fxml"));
                 root = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root));  
                stage.show();
        } catch(Exception e) {
           e.printStackTrace();
          }
          
        }
    }
     private boolean desactiverCompte(){
        boolean resul=ConfirmDesactivation.display("Desactivation Compte","Etes vous sure de vouloir desactiver votre compte ?");
        return resul;
        
    } 

    @FXML
    private void AfficherInformation(Event event) throws SQLException {
        String LoginCo=usr.getLoginConnecte();
        Membre u= usr.DetailsMembre(LoginCo);
        System.out.println(LoginCo);
        System.out.println(u);
      
        labelNom.setText(u.getNom());
        labelPrenom.setText(u.getPrenom());
        labelLogin.setText(u.getLogin());
        labelMotPasse.setText("*****");
        labelMail.setText(u.getMail());
        labelAdresse.setText(u.getAdresse());
        labelTel.setText(u.getNumerotel());
        
        System.out.println(u);
        
       
    }

    @FXML
    private void AfficherHistorique() throws SQLException {
    ServiceTrajet crud = new ServiceTrajet(); 
    ObservableList<Trajet> data = FXCollections.observableArrayList((Trajet) null);
    ResultSet set = crud.AfficherTrajet(id);
    while (set.next()) { 
    LocalDate localD = set.getDate("dateDepart").toLocalDate(); 
    Trajet trajet = new Trajet(set.getString("destination"),set.getString("depart"),localD
                    ,set.getFloat("cout"),set.getString("description"),set.getInt("nbrPlaceDispo"),set.getBoolean("suivi"));
            trajet.setId(set.getInt("id"));
    data.add(trajet); 
    }
 
    destinationColumn.setCellValueFactory( new PropertyValueFactory<Trajet,String>("destination") ); 
    departColumn.setCellValueFactory( new PropertyValueFactory<Trajet,String>("depart") ); 
    dateColumn.setCellValueFactory( new PropertyValueFactory<Trajet,Date>("dateDepart") ); 
    trajetsTable.setItems(data); 

    }

    @FXML
    private void afficherDate(MouseEvent event) {
        int dateYear=(dateTrajet.getValue().getYear());
        int dateMounth=(dateTrajet.getValue().getMonthValue());
        int dateDay=(dateTrajet.getValue().getDayOfMonth());
        dateTrajetLabel.setText(Integer.toString(dateDay)+"-"+Integer.toString(dateMounth)+"-"+Integer.toString(dateYear));
    }

    @FXML
    private void ajouterTrajet(ActionEvent event) throws SQLException {
        ServiceCalendrier crudCalendrier=new ServiceCalendrier();
        String dateTrajet=dateTrajetLabel.getText();
        String description=descriptionTF.getText();
        
        Calendrier calendrier=new Calendrier(dateTrajet, description);
        crudCalendrier.ajouterEvennement(calendrier);
        // 
        ObservableList<Calendrier> data = FXCollections.observableArrayList((Calendrier) null);
    ResultSet set = crudCalendrier.AfficherEvennement(id);
    while (set.next()) { 
    
    Calendrier c = new Calendrier(set.getString("date"),set.getString("description"));
    data.add(c); 
    }
 
    dateTrajetColumn.setCellValueFactory( new PropertyValueFactory<Calendrier,String>("dateTrajet") ); 
    descriptionTrajetColumn.setCellValueFactory( new PropertyValueFactory<Calendrier,String>("description") ); 
     
    calendrierTable.setItems(data); 
        
    }

    @FXML
    private void AfficherCalendrier(Event event) throws SQLException {
        ServiceCalendrier crud = new ServiceCalendrier(); 
    ObservableList<Calendrier> data = FXCollections.observableArrayList((Calendrier) null);
    ResultSet set = crud.AfficherEvennement(id);
    while (set.next()) { 
    
    Calendrier calendrier = new Calendrier(set.getString("date"),set.getString("description"));
    data.add(calendrier); 
    }
 
    dateTrajetColumn.setCellValueFactory( new PropertyValueFactory<Calendrier,String>("dateTrajet") ); 
    descriptionTrajetColumn.setCellValueFactory( new PropertyValueFactory<Calendrier,String>("description") ); 
     
    calendrierTable.setItems(data); 
    }

    @FXML
    private void supprimerTrajet(MouseEvent event) {
       dateTrajetColumn.getCellData(calendrierTable.getSelectionModel().getFocusedIndex());
       descriptionTrajetColumn.getCellData(calendrierTable.getSelectionModel().getFocusedIndex());
    }

    @FXML
    private void deleteTrajet(ActionEvent event) throws SQLException {
    ServiceCalendrier crud= new ServiceCalendrier();
    crud.supprimerEvennement((String) descriptionTrajetColumn.getCellData(calendrierTable.getSelectionModel().getFocusedIndex()));
    ObservableList<Calendrier> data = FXCollections.observableArrayList((Calendrier) null);
    ResultSet set = crud.AfficherEvennement(id);
    while (set.next()) { 
    
    Calendrier calendrier = new Calendrier(set.getString("date"),set.getString("description"));
    data.add(calendrier); 
    }
 
    dateTrajetColumn.setCellValueFactory( new PropertyValueFactory<Calendrier,String>("dateTrajet") ); 
    descriptionTrajetColumn.setCellValueFactory( new PropertyValueFactory<Calendrier,String>("description") ); 
     
    calendrierTable.setItems(data); 
    }

 

   

 
     
    
}
