/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import modal.Profile;
import modal.PublicationProfil;
import Techniques.CrudMembre;
import Techniques.CrudPublicationProfile;
import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXTextArea;
import com.jfoenix.controls.JFXTextField;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import java.sql.Date ; 
import java.sql.SQLException;
import java.time.Instant;
import java.time.LocalDate;
import java.util.logging.Level;
import java.util.logging.Logger;
import services.ImageTools ; 
import java.io.File;
import java.io.IOException;
import java.nio.file.Files;
import java.nio.file.Path;
import java.nio.file.Paths;
import static java.nio.file.StandardCopyOption.* ; 
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;





public class AjoutPublicationController implements Initializable {

    @FXML
    private JFXTextField PicPath;

    @FXML
    private JFXButton btnAjout;
     String path ; 

    @FXML
    private JFXTextArea ContenuePub;
    
    CrudPublicationProfile CPP = new CrudPublicationProfile() ;
    CrudMembre CM = new CrudMembre() ; 
    @FXML
    private JFXButton UploadBtn;
    
    
        Path finale ; 
    @Override
    public void initialize(URL url, ResourceBundle rb) {
    
        
       
        
    }    
    
    
    public void setProfile (Profile pr) throws SQLException
    {
        
        
        UploadBtn.setOnAction(e->{
        ImageTools It = new ImageTools() ; 
        path="" ; 
        
            try {
                path= It.LoadImagePath(); 
            
                File f = new File(path); 
                
                
                Process p = Runtime.getRuntime().exec("cmd /c copy "+f.getPath()+" c:\\xampp\\htdocs\\pidev\\");
                
                path="http://localhost/pidev/"+f.getName() ;
                                System.out.println(path);

                                Alert AlertAjoutPublication = new Alert(AlertType.INFORMATION);
        AlertAjoutPublication.setTitle("Ajout Trajet");
        AlertAjoutPublication.setHeaderText(null);
        AlertAjoutPublication.setContentText("Vous avez ajouté une publication");
        AlertAjoutPublication.showAndWait();


        
                        } catch (IOException ex) {
                Logger.getLogger(AjoutPublicationController.class.getName()).log(Level.SEVERE, null, ex);
            }
           
        PicPath.setText(path) ; 
        PicPath.disableProperty().setValue(Boolean.TRUE);
        });
        
        
         btnAjout.setOnAction(e->{
            
            
            LocalDate date = LocalDate.now() ; 
            
            System.out.println(pr);
            PublicationProfil PP = new PublicationProfil(date,ContenuePub.getText(),PicPath.getText(), pr); 
             try { 
                 CPP.addProfilePub(PP) ;
             } catch (SQLException ex) {
                 Logger.getLogger(AjoutPublicationController.class.getName()).log(Level.SEVERE, null, ex);
             }
        });
        
        
       
    }
}

