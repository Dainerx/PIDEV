/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import java.io.IOException;
import java.net.URL;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.control.ListView;
import javafx.stage.Stage;
import modal.User;
import services.PublicationServices;

/**
 * FXML Controller class
 *
 * @author sahar ghorch
 */
public class MembreController implements Initializable {

    PublicationServices publicationDAO = new PublicationServices();

    ObservableList<String> list = FXCollections.observableArrayList();
    List< User> list2 = new ArrayList<User>(); // liste des personnes
    List< Integer> list6 = new ArrayList< Integer>(); // liste des id pers
    public static String pp;
    public static int ii;
    public static int jj;
    @FXML
    private ListView<String> listvmembre;
    @FXML
    private Button commentermembre;
     @FXML
    private Button idpre;
      @FXML
    void handleButtonprecedentAction(ActionEvent event) throws IOException {
System.out.println("You clicked me!");
        Parent page = FXMLLoader.load(getClass().getResource("/view/FXMLDocument.fxml"));
        Scene scene = new Scene(page);
        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
    }

    @FXML
    void commentermembre(ActionEvent event) throws IOException {

        pp = listvmembre.getSelectionModel().getSelectedItem();
        ii = listvmembre.getSelectionModel().getSelectedIndex();
        jj = list6.get(ii);

        Parent page = FXMLLoader.load(getClass().getResource("/view/com_membre.fxml"));
        Scene scene = new Scene(page);
        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
    }

    /**
     * Initializes the controller class.
     */
    public void affichagemembre() {

        list2 = publicationDAO.displayAllUser1();

        ObservableList<String> items = FXCollections.observableArrayList();

        for (int i = 0; i < list2.size(); i++) {
//                  
            list6.add(list2.get(i).getId_membre());
            items.add("Le membre:  " + list2.get(i).getNom());

        }
        listvmembre.setItems(items);

    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        affichagemembre();
    }

}
