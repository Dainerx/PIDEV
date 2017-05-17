package view;

import java.io.IOException;
import java.sql.*;
import java.time.LocalDate;
import java.util.List;
import java.util.Random;
import java.util.logging.Level;
import java.util.logging.Logger;

import org.controlsfx.glyphfont.FontAwesome;


import javafx.application.Application;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.stage.Stage;
import javafx.application.Application;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.EventType;
import javafx.fxml.FXMLLoader;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.ScrollPane;
import javafx.scene.control.Separator;
import javafx.scene.control.TextField;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.VBox;
import javafx.stage.Stage;
import modal.Trajet;



import services.*;


public class Trajets extends Application {
        ResultSet trajetsSearch = null;
        ResultSet trajets = null;
        VBox content;
        int statusLoop = 0;
        
        private void search(ServiceTrajet crud, TextField rechercheField, Button rechercheButton, Button addButton) throws SQLException, IOException
        {
        content.getChildren().clear();
        trajets = crud.rechercherTrajetAcceuil(rechercheField.getText());
        content.getChildren().clear();
        content.getChildren().add(rechercheField);
        content.getChildren().add(rechercheButton);        
        
        Button allButton = new Button("Tous les trajets");
        allButton.setStyle("-fx-background-color: #8DC6D6; -fx-text-fill: white; "
                + "-fx-graphic: url('/assets/list.png');"
                                + "-fx-font-weight: bold;"
                +"-fx-border-width: 1px;" + "-fx-border-color: black;");
        allButton.setPrefWidth(1500);
        content.getChildren().add(allButton);
        allButton.setOnAction(e -> {
            try {
                getAll(crud, rechercheField, rechercheButton, addButton);
            } catch (SQLException ex) {
                Logger.getLogger(Trajets.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
        
        
        
        
        
        Button addButton1 = new Button("Proposer un trajet!");
        addButton.setPrefWidth(1500);
        /*
        if (!(trajetsSearch==null))
            trajets=trajetsSearch;
        */
            try {
            while (trajets.next())
            {
                LocalDate localD = trajets.getDate("dateDepart").toLocalDate();
                Trajet trajet = new Trajet(trajets.getString("destination"),trajets.getString("depart"),localD
                ,trajets.getFloat("cout"),trajets.getString("description"),trajets.getInt("nbrPlaceDispo"),trajets.getBoolean("suivi"));
                trajet.setId(trajets.getInt("id"));
                AnchorPane anchorPane = new AnchorPane();
                anchorPane.setPrefSize(statusLoop, statusLoop);
                anchorPane.setPrefHeight(183.0);
                anchorPane.setPrefWidth(1500.0);
                Label label0 = new Label();
                Label label1 = new Label(trajet.getDepart() + " -> " + trajet.getDestination());
                Label label2 = new Label ("Par Oussama Ben Ghorbel");
                Label label3 = new Label ("Le " + trajet.getDateDepart());
                Label label4 = new Label (trajet.getNombrePlaceDispo()+"");
                Label label5 = new Label (trajet.getCout() + "Dt");
                Label label6 = new Label ("0");            
                //ImageView img = new ImageView("");
                Separator separtor = new Separator();
                Separator separator1 = new Separator();
                Button button1 = new Button("Consulter ce trajet");
                Button button2 = new Button("Contacter ce membre");
                 //labe1
                label1.setLayoutX(450.0);
                label1.setLayoutY(22.0);
                label1.setPrefHeight(15.0);
                label1.setPrefWidth(300.0);
                label1.setStyle("-fx-font-weight: bold");
                Image image1 = new Image(getClass().getResourceAsStream("/assets/location.png"));
                label1.setGraphic(new ImageView(image1));                

                anchorPane.getChildren().add(label1);
                //label2
                label2.setLayoutX(450.0);
                label2.setLayoutY(56.0);
                label2.setPrefHeight(28.0);
                label2.setPrefWidth(300.0);
                label2.setStyle("-fx-font-weight: bold");
                Image image2 = new Image(getClass().getResourceAsStream("/assets/user.png"));
                label2.setGraphic(new ImageView(image2));                

                //label2.setText("Par Oussama Ben Ghorbel");
                anchorPane.getChildren().add(label2);

                //label3 
                label3.setLayoutX(450.0);
                label3.setLayoutY(91.0);
                label3.setPrefHeight(28.0);
                label3.setPrefWidth(300.0);
                label3.setStyle("-fx-font-weight: bold");
                Image image3 = new Image(getClass().getResourceAsStream("/assets/date.png"));
                label3.setGraphic(new ImageView(image3));                                
                //label3.setText("Le 12/12/2012");
                anchorPane.getChildren().add(label3);

                //label4
                
                label4.setLayoutX(850.0);
                label4.setLayoutY(15.0);
                label4.setPrefHeight(15.0);
                label4.setPrefWidth(71.0);
                label4.setStyle("-fx-font-weight: bold");
                Image image4 = new Image(getClass().getResourceAsStream("/assets/places.png"));
                label4.setGraphic(new ImageView(image4));                
                //label4.setText("Place:2");
                anchorPane.getChildren().add(label4);

                //label5
                label5.setLayoutX(850.0);
                label5.setLayoutY(75.0);
                label5.setPrefHeight(15.0);
                label5.setPrefWidth(150.0); 
                label5.setStyle("-fx-font-weight: bold");
                Image image5 = new Image(getClass().getResourceAsStream("/assets/cout.png"));
                label5.setGraphic(new ImageView(image5));
                anchorPane.getChildren().add(label5);

                //Separtor
                separtor.setLayoutX(0.0);
                separtor.setLayoutY(137.0);
                separtor.setPrefHeight(8.0);
                separtor.setPrefWidth(1500.0);
                separtor.setStyle("-fx-font-weight: bold");
                anchorPane.getChildren().add(separtor);

                //Separtor1
                separator1.setLayoutX(0.0);
                separator1.setLayoutY(173.0);
                separator1.setPrefHeight(8.0);
                separator1.setPrefWidth(1500.0);
                separator1.setStyle("-fx-font-weight: bold");
                anchorPane.getChildren().add(separator1);
                //button1
                button1.setLayoutX(450.0);
                button1.setLayoutY(147.0);
                button1.setPrefHeight(25.0);
                button1.setPrefWidth(200.0);
                anchorPane.getChildren().add(button1);
                button1.setStyle("-fx-background-color: #32BEA6; -fx-text-fill: white;"
                        + "-fx-font-weight: bold;"
                +"-fx-border-width: 1px;" + "-fx-border-color: black;");

                //button2
                button2.setLayoutX(850.0);
                button2.setLayoutY(146.0);
                button2.setPrefHeight(25.0);
                button2.setPrefWidth(200.0);
                button2.setStyle("-fx-background-color: #32BEA6; -fx-text-fill: white;"
                        + "-fx-font-weight: bold;"
                +"-fx-border-width: 1px;" + "-fx-border-color: black;");
                anchorPane.getChildren().add(button2);
                Label label = new Label();
                AnchorPane.setLeftAnchor(label, 5.0);
                AnchorPane.setTopAnchor(label, 5.0);
                anchorPane.getChildren().addAll(label);
                anchorPane.setStyle("-fx-background-image: url('/assets/appground.jpg')");

                content.getChildren().add(anchorPane);
                button1.setOnAction(e -> {
                    Stage stage1 = (Stage) button1.getScene().getWindow();
                    stage1.close();
                    Stage stage = new Stage();
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("Trajet.fxml"));

                    Parent root1;
                    try {
                        root1 = loader.load();
                        Scene scene = new Scene(root1);
                        scene.getStylesheets().add("assets/trajet.css");
                        TrajetController controller = loader.getController();
                        controller.initData(trajet);
                        stage.setScene(scene);
                        stage.setTitle("Trajet Détails - Join My Ride");        
                        stage.show();

                    } catch (IOException ex) {
                        Logger.getLogger(Trajets.class.getName()).log(Level.SEVERE, null, ex);
                    }
                });
            } } catch (SQLException ex) {            
                Logger.getLogger(Trajets.class.getName()).log(Level.SEVERE, null, ex);
            }            
        }
        
        private void getAll(ServiceTrajet crud, TextField rechercheField, Button rechercheButton, Button addButton) throws SQLException
        {
            content.getChildren().clear();
            trajets = crud.rechercherTrajetAcceuil(rechercheField.getText());
            content.getChildren().clear();
            content.getChildren().add(rechercheField);
            content.getChildren().add(rechercheButton);        
            while (trajets.next())
            {
                LocalDate localD = trajets.getDate("dateDepart").toLocalDate();
                Trajet trajet = new Trajet(trajets.getString("destination"),trajets.getString("depart"),localD
                ,trajets.getFloat("cout"),trajets.getString("description"),trajets.getInt("nbrPlaceDispo"),trajets.getBoolean("suivi"));
                trajet.setId(trajets.getInt("id"));
                AnchorPane anchorPane = new AnchorPane();
                anchorPane.setPrefSize(statusLoop, statusLoop);
                anchorPane.setPrefHeight(183.0);
                anchorPane.setPrefWidth(1500.0);
                Label label0 = new Label();
                Label label1 = new Label(trajet.getDepart() + " -> " + trajet.getDestination());
                Label label2 = new Label ("Par Oussama Ben Ghorbel");
                Label label3 = new Label ("Le " + trajet.getDateDepart());
                Label label4 = new Label (trajet.getNombrePlaceDispo()+"");
                Label label5 = new Label (trajet.getCout() + "Dt");
                Label label6 = new Label ("0");            
                //ImageView img = new ImageView("");
                Separator separtor = new Separator();
                Separator separator1 = new Separator();
                Button button1 = new Button("Consulter ce trajet");
                Button button2 = new Button("Contacter ce membre");
                 //labe1
                label1.setLayoutX(450.0);
                label1.setLayoutY(22.0);
                label1.setPrefHeight(15.0);
                label1.setPrefWidth(300.0);
                label1.setStyle("-fx-font-weight: bold");
                Image image1 = new Image(getClass().getResourceAsStream("/assets/location.png"));
                label1.setGraphic(new ImageView(image1));                

                anchorPane.getChildren().add(label1);
                //label2
                label2.setLayoutX(450.0);
                label2.setLayoutY(56.0);
                label2.setPrefHeight(28.0);
                label2.setPrefWidth(300.0);
                label2.setStyle("-fx-font-weight: bold");
                Image image2 = new Image(getClass().getResourceAsStream("/assets/user.png"));
                label2.setGraphic(new ImageView(image2));                

                //label2.setText("Par Oussama Ben Ghorbel");
                anchorPane.getChildren().add(label2);

                //label3 
                label3.setLayoutX(450.0);
                label3.setLayoutY(91.0);
                label3.setPrefHeight(28.0);
                label3.setPrefWidth(300.0);
                label3.setStyle("-fx-font-weight: bold");
                Image image3 = new Image(getClass().getResourceAsStream("/assets/date.png"));
                label3.setGraphic(new ImageView(image3));                                
                //label3.setText("Le 12/12/2012");
                anchorPane.getChildren().add(label3);

                //label4
                
                label4.setLayoutX(850.0);
                label4.setLayoutY(15.0);
                label4.setPrefHeight(15.0);
                label4.setPrefWidth(71.0);
                label4.setStyle("-fx-font-weight: bold");
                Image image4 = new Image(getClass().getResourceAsStream("/assets/places.png"));
                label4.setGraphic(new ImageView(image4));                
                //label4.setText("Place:2");
                anchorPane.getChildren().add(label4);

                //label5
                label5.setLayoutX(850.0);
                label5.setLayoutY(75.0);
                label5.setPrefHeight(15.0);
                label5.setPrefWidth(150.0); 
                label5.setStyle("-fx-font-weight: bold");
                Image image5 = new Image(getClass().getResourceAsStream("/assets/cout.png"));
                label5.setGraphic(new ImageView(image5));
                anchorPane.getChildren().add(label5);

                //Separtor
                separtor.setLayoutX(0.0);
                separtor.setLayoutY(137.0);
                separtor.setPrefHeight(8.0);
                separtor.setPrefWidth(1500.0);
                separtor.setStyle("-fx-font-weight: bold");
                anchorPane.getChildren().add(separtor);

                //Separtor1
                separator1.setLayoutX(0.0);
                separator1.setLayoutY(173.0);
                separator1.setPrefHeight(8.0);
                separator1.setPrefWidth(1500.0);
                separator1.setStyle("-fx-font-weight: bold");
                anchorPane.getChildren().add(separator1);
                //button1
                button1.setLayoutX(450.0);
                button1.setLayoutY(147.0);
                button1.setPrefHeight(25.0);
                button1.setPrefWidth(200.0);
                anchorPane.getChildren().add(button1);
                button1.setStyle("-fx-background-color: #32BEA6; -fx-text-fill: white;"
                        + "-fx-font-weight: bold;"
                +"-fx-border-width: 1px;" + "-fx-border-color: black;");

                //button2
                button2.setLayoutX(850.0);
                button2.setLayoutY(146.0);
                button2.setPrefHeight(25.0);
                button2.setPrefWidth(200.0);
                button2.setStyle("-fx-background-color: #32BEA6; -fx-text-fill: white;"
                        + "-fx-font-weight: bold;"
                +"-fx-border-width: 1px;" + "-fx-border-color: black;");
                anchorPane.getChildren().add(button2);
                Label label = new Label();
                AnchorPane.setLeftAnchor(label, 5.0);
                AnchorPane.setTopAnchor(label, 5.0);
                anchorPane.getChildren().addAll(label);
                anchorPane.setStyle("-fx-background-image: url('/assets/appground.jpg')");

                content.getChildren().add(anchorPane);
                button1.setOnAction(e -> {
                    Stage stage1 = (Stage) button1.getScene().getWindow();
                    stage1.close();
                    Stage stage = new Stage();
                    FXMLLoader loader = new FXMLLoader(getClass().getResource("Trajet.fxml"));

                    Parent root1;
                    try {
                        root1 = loader.load();
                        Scene scene = new Scene(root1);
                        scene.getStylesheets().add("assets/trajet.css");
                        TrajetController controller = loader.getController();
                        controller.initData(trajet);
                        stage.setScene(scene);
                        stage.setTitle("Trajet Détails - Join My Ride");        
                        stage.show();

                    } catch (IOException ex) {
                        Logger.getLogger(Trajets.class.getName()).log(Level.SEVERE, null, ex);
                    }
                });
            }
        }

    @Override
    public void start(Stage primaryStage) throws SQLException, IOException {
        
        ServiceTrajet crud = new ServiceTrajet();
        trajets = crud.afficherTrajet();        
        
        final Random rng = new Random();
        content = new VBox(5);
        content.setStyle("-fx-background-image: url('/assets/appground.jpg')");
        ScrollPane scroller = new ScrollPane(content);
        scroller.setFitToWidth(true);
        TextField rechercheField = new TextField();
        Button rechercheButton = new Button("Rechercher un trajet!"); 
        rechercheButton.setPrefWidth(1500);
        content.getChildren().add(rechercheField);
        content.getChildren().add(rechercheButton);  
        rechercheButton.setStyle("-fx-background-color: #8DC6D6; -fx-text-fill: white; "
                + "-fx-graphic: url('/assets/search.png'); -fx-font-weight: bold; -fx-border-width: 1px; -fx-border-color: black;"
        );
        
        Button addButton = new Button("Proposer un trajet!");
        addButton.setPrefWidth(1500);
        addButton.setStyle("-fx-background-color: #FF6600; -fx-text-fill: white;"
                + "-fx-graphic: url('/assets/add.png'); -fx-font-weight: bold; -fx-border-width: 1px; -fx-border-color: black;");
        
        getAll(crud, rechercheField, rechercheButton, addButton);
        
        rechercheButton.setOnAction(e -> {
            try {
                search(crud, rechercheField, rechercheButton, addButton);
            } catch (SQLException | IOException ex) {
                Logger.getLogger(Trajets.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
               
        Scene scene = new Scene(new BorderPane(scroller, null, null, addButton, null), 400, 400);
        primaryStage.setScene(scene);
        primaryStage.setTitle("Les trajets - Join My Ride");        
        primaryStage.show();
        
        addButton.setOnAction(e -> {
            try {
                Stage stage1 = (Stage) addButton.getScene().getWindow();
                stage1.close();
                Parent root = FXMLLoader.load(getClass().getResource("AjouterTrajet.fxml"));
                Scene scene1 = new Scene(root,563D,758D);
                scene1.getStylesheets().add("assets/ajouterTrajet.css");
                /*scene1.getWindow().setWidth(563);
                scene1.getWindow().setHeight(758);*/  
                Stage stage = new Stage();
                stage.setScene(scene1);
                stage.setTitle("Proposer un trajet - Join My Ride");        
                stage.show();
            } catch (IOException ex) {
                Logger.getLogger(Trajets.class.getName()).log(Level.SEVERE, null, ex);
            }
        });

    }

    public static void main(String[] args) {
        launch(args);
    }
}
