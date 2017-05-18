/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import modal.*;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.Initializable;
import Techniques.CrudCercle; 
import Techniques.CrudMembre;
import java.awt.Choice;
import java.io.IOException;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.fxml.FXML;
import javafx.scene.control.ChoiceBox;
import javafx.scene.control.Label;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.GridPane;
import javafx.scene.layout.VBox;
import javafx.scene.text.Font;
import java.util.List ;
import java.util.Optional;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.stage.Stage;


/**
 * FXML Controller class
 *
 * @author xagta1
 */
public class ListeFollowersController implements Initializable {

    
    
    CrudCercle CC = new CrudCercle(); 
    CrudMembre CM = new CrudMembre(); 
    List<Membre> listFollowers = new ArrayList<>(); 
    Membre Connected  ;
    
    String test ; 
    
    @FXML
    AnchorPane Anch = new AnchorPane();  
    @FXML
    VBox Vb = new VBox() ; 
    @FXML
    GridPane Gp = new GridPane() ; 
    
 
    
    
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        try { 
            Connected=CM.getConnectedMembre() ;
            listFollowers=CC.getFollowersIdByMembre(Connected) ;
        } catch (SQLException ex) {
            Logger.getLogger(ListeFollowersController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
        setTable(Connected, listFollowers);
        
        System.out.println("init=>"+test);
        
        
        
        
        
       
        
       
       
    } 
    
    public GridPane setTable(Membre Connected,List<Membre> listFollowers)
    {
         int i=0 ; 
            int j=0;

            for (Membre listFollower : listFollowers) {
                
                
                Gp.addRow(j,new Label(listFollower.getNom()+"("+listFollower.getLogin()+")"));
               
                Button btnUnfollow = new Button("unfollow") ; 
                Button btnShowProfile = new Button("Show Profile") ; 
                System.out.println("working");
                btnUnfollow.setOnAction(e->{    
                    try {
                        
                                   Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Fenetre de confirmation");
        alert.setHeaderText("Ajout du profile");
        alert.setContentText("Voulez vous confirmer vos informations ? ");

        ButtonType buttonTypeOne = new ButtonType("Oui");
        ButtonType buttonTypeTwo = new ButtonType("Non");
        alert.getButtonTypes().setAll(buttonTypeOne, buttonTypeTwo);

        Optional<ButtonType> result = alert.showAndWait();
        if (result.get() == buttonTypeOne){ 
                
                 CC.unfollow(Connected, listFollower);
                        Gp.getChildren().clear();
                        Gp= setTable(Connected, CC.getFollowersIdByMembre(Connected)) ;
        }
                       
                        
                    } catch (SQLException ex) {
                        Logger.getLogger(ListeFollowersController.class.getName()).log(Level.SEVERE, null, ex);
                    }
                  
                    
                    
                });
                btnShowProfile.setOnAction(e->{
                                    Parent root = null;
                                    Stage stage = new Stage() ; 
                     FXMLLoader loader = new FXMLLoader(getClass().getResource("MembreProfile.fxml"));

                    try {
                        root = loader.load();
                        
                        Scene scene = new Scene(root);
                    MembreProfileController sc = loader.getController();

                    sc.LoadMemberData(listFollower);
                    stage.setScene(scene);

                    stage.show();
                    } catch (IOException ex) {
                        Logger.getLogger(ListeFollowersController.class.getName()).log(Level.SEVERE, null, ex);
                    } catch (SQLException ex) {
                        Logger.getLogger(ListeFollowersController.class.getName()).log(Level.SEVERE, null, ex);
                    }

                    
                
                });
                
                
                
                Gp.add(btnShowProfile,3,j);
                
               
                Gp.add(btnUnfollow, 2, j);
                j++ ; 
            }
            
            return Gp ; 
    }
    
  
    
}
