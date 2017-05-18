/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import java.sql.Connection;
import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import javafx.stage.StageStyle;
import java.sql.Connection;

/**
 *
 * @author sahar ghorch
 */
public class Main extends Application {

    @Override
    public void start(Stage stage) throws Exception {
        //Sahar Main
//        Parent root = FXMLLoader.load(getClass().getResource("/view/FXMLDocument.fxml"));
//
//        Scene scene = new Scene(root);
//        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
//
//        stage.setResizable(false);
//        stage.setScene(scene);
//        //stage.initStyle(StageStyle.TRANSPARENT);
//        stage.show();

        //Karim Main
//        stage.getIcons().add(new javafx.scene.image.Image("/assets/carIcon.png"));
//        Parent root = FXMLLoader.load(getClass().getResource("/view/interfaceAccueil.fxml"));
//        stage.setTitle("Covoiturage");
//        stage.setScene(new Scene(root, 600, 450));
//        stage.setResizable(false);
//        stage.show();

        //Ameni Main
        Parent root = FXMLLoader.load(getClass().getResource("/view/Acceuil.fxml"));
        Scene scene = new Scene(root);
        stage.setScene(scene);
        stage.show();

    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {

        launch(args);

    }

}
