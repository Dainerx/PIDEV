/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package view;


import javafx.application.Application;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.layout.StackPane;
import javafx.scene.layout.VBox;
import javafx.stage.Modality;
import javafx.stage.Stage;


public class Alerte {
    
    public static void display(String title,String message){
        Stage window=new Stage();
        window.initModality(Modality.APPLICATION_MODAL);
        window.setTitle(title);
        window.setMaxWidth(400);
        window.setWidth(400);
        window.setHeight(300);
        Label label=new Label(message);
        Button closeButton=new Button("close");
        closeButton.setOnAction(e-> window.close());
        VBox layout=new VBox(10);
        layout.getChildren().addAll(label,closeButton);
        layout.setAlignment(Pos.CENTER);
        Scene scene=new Scene(layout);
        window.setScene(scene);
        window.showAndWait();
    }
    
}
