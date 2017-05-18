/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import java.io.File;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.control.Button;
import javafx.stage.FileChooser;
import javafx.stage.Stage;
import javafx.stage.Window;
import services.ImageTools; 
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import Techniques.CrudProfile; 
import modal.Profile;
import Techniques.CrudMembre;
import modal.Membre ;
import java.sql.SQLException;
import java.util.Optional;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;

/**
 * FXML Controller class
 *
 * @author xagta1
 */
public class ProfileFromulaireController implements Initializable {

    /**
     * Initializes the controller class.
     */
    
    CrudProfile CP = new CrudProfile() ; 
    CrudMembre CM = new CrudMembre() ; 
    Membre M ; 
    Stage stage ; 
    
    
   @FXML 
   Button btn = new Button("load") ; 
   
   @FXML
   Button confirm = new Button(); 
   @FXML
   TextField Pseudo = new TextField() ;
   @FXML
   TextArea Description= new TextArea() ;
   
   
   ImageTools IT = new ImageTools(); 
   
   Image img ; 
   
   String path ; 

    public ProfileFromulaireController() {
        try {
            this.M = CM.getConnectedMembre();
        } catch (SQLException ex) {
            Logger.getLogger(ProfileFromulaireController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
     
  
    
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        
        
        btn.setOnAction(e->{
             try { 
           path = getImage() ;
                 System.out.println(path);
           
       } catch (IOException ex) {
           Logger.getLogger(ProfileFromulaireController.class.getName()).log(Level.SEVERE, null, ex);
       }
            
        });
        confirm.setOnAction(e->{
          if(Pseudo.getText()!=null && path!=null && Description.getText()!=null)
          {
             String phonenumber = null ;
              
              Alert alert = new Alert(AlertType.CONFIRMATION);
              alert.setTitle("Fenetre de confirmation");
              alert.setHeaderText("Ajout du profile");
              alert.setContentText("Voulez vous confirmer vos informations ? ");
              ButtonType buttonTypeOne = new ButtonType("Oui");
              ButtonType buttonTypeTwo = new ButtonType("Non");
              alert.getButtonTypes().setAll(buttonTypeOne, buttonTypeTwo);
              Optional<ButtonType> result = alert.showAndWait();
              if (result.get() == buttonTypeOne){
                  Profile Pr;
                  Pr = new Profile(0,M, Pseudo.getText(), path,Description.getText(),phonenumber);
                  
                  try {
                      if (CP.addProfile(Pr)==1)
                      {
                          System.out.println("done");
                      }
                  } catch (SQLException ex) {
                      Logger.getLogger(ProfileFromulaireController.class.getName()).log(Level.SEVERE, null, ex);
                  }
              } 
              
          }
            
            
        });
      
         
    }    
    
    public String getImage() throws IOException
    {
         ImageTools It = new ImageTools() ; 
        path="" ; 

                path= It.LoadImagePath(); 
            
                File f = new File(path); 
                
                
                Process p = Runtime.getRuntime().exec("cmd /c copy "+f.getPath()+" c:\\xampp\\htdocs\\pidev\\");
                
                path="http://localhost/pidev/"+f.getName() ;
                
                return path ; 
    }
    
    
    
}
