/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package view;

import modal.*;
import services.*;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextField;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author slim
 */
public class InterfaceConnexionAdminController implements Initializable {
    @FXML
    private TextField LoginTF;
    @FXML
    private PasswordField PasswordTF;
    AdminServices adminService=new AdminServices();

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void goInterfaceCompte(ActionEvent event) {
          Stage stagex = (Stage) LoginTF.getScene().getWindow();
            stagex.close();
        if(adminService.seConnecter(LoginTF.getText(), PasswordTF.getText())==1){
             try {
        FXMLLoader fxmlLoader = new FXMLLoader(getClass().getResource("interfaceAdmin.fxml"));
                Parent root1 = (Parent) fxmlLoader.load();
                Stage stage = new Stage();
                stage.setScene(new Scene(root1));  
                stage.show();
        } catch(Exception e) {
           e.printStackTrace();
          }
        } else{
            Alerte.display("Connexion échouée!", "Veuillez verifier votre login ou mot de passe");
        }
    }
    
}
