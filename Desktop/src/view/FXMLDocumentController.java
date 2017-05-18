/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

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
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.stage.Stage;

/**
 *
 * @author sahar ghorch
 */
public class FXMLDocumentController implements Initializable {

    public static int i = 2;
    public static int id_personne_connecté = 4;
    public static int verif = 0;
    @FXML
    private Label label;
    @FXML
    private Button button_covoiturage;

    @FXML
    private Button button_location;

    @FXML
    private Button button_partenariat;
    @FXML
    private Button membre;

    @FXML
    void actionmembre(ActionEvent event) throws IOException {
        System.out.println("rabi yostorrrrr");
        Parent page = FXMLLoader.load(getClass().getResource("/view/membre.fxml"));
        Scene scene = new Scene(page);
        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();

    }

    @FXML
    private void handleButtonAction(ActionEvent event) throws IOException {
        System.out.println("You clicked me!");
        Parent page = FXMLLoader.load(getClass().getResource("/view/page2.fxml"));
        Scene scene = new Scene(page);
        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
        verif = 1;
    }

    @FXML
    void handleButton1Action(ActionEvent event) throws IOException {
        System.out.println("You !");
        Parent page = FXMLLoader.load(getClass().getResource("/view/forum_location.fxml"));
        Scene scene = new Scene(page);
        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
        verif = 2;
    }

    @FXML
    void handleButton2Action(ActionEvent event) throws IOException {
        System.out.println("You !");
        Parent page = FXMLLoader.load(getClass().getResource("/view/forum_partenariat.fxml"));
        Scene scene = new Scene(page);
        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
        verif = 3;
    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

}
