/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.jfoenix.controls.JFXButton;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;

/**
 * FXML Controller class
 *
 * @author Ameni
 */
public class AcceuilController implements Initializable {

    @FXML
    private AnchorPane backgroundPane;
    @FXML
    private AnchorPane CoprsProjet;
    @FXML
    private JFXButton utilisateur;
    @FXML
    private JFXButton responsable;
    @FXML
    private AnchorPane CoprsProjet1;
    @FXML
    private ImageView reduce;
    @FXML
    private ImageView close;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }    

    @FXML
    private void Uti(ActionEvent event) throws IOException {
        Parent page = FXMLLoader.load(getClass().getResource("/view/EspaceUtilisateur.fxml"));
      
        Scene scene = new Scene(page);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();

    }

    @FXML
    private void RES(ActionEvent event) throws IOException {
        Parent page = FXMLLoader.load(getClass().getResource("/view/Authentification.fxml"));
        Scene scene = new Scene(page);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();

    }
    @FXML
    private void closeAction(MouseEvent event) {
        Stage stage = (Stage) close.getScene().getWindow();
        stage.close();
    }

    @FXML
    private void reduceAction(MouseEvent event) {
    }
    
}
