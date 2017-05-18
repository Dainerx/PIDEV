/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import services.PublicationServices;
import services.UserServices;
import modal.Publication;
import modal.User;
import com.jfoenix.controls.JFXTextArea;
import static view.FXMLDocumentController.i;

import java.io.IOException;
import java.net.URL;
import java.sql.SQLException;
import static java.time.Clock.system;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
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
import javafx.scene.control.Label;
import javafx.scene.control.ListView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import static view.FXMLDocumentController.id_personne_connecté;
import modal.SendMail;

/**
 * FXML Controller class
 *
 * @author sahar ghorch
 */
public class Page2Controller implements Initializable {
    
    @FXML
    private TextArea titrepublication;
    
    @FXML
    private Button publier;
    @FXML
    private TextArea publication;
    @FXML    
    private TextArea affichage;
    
    @FXML
    ListView<String> listv;
    public static String p;
    public static int i;
    public static int j;
    
    Publication publicationEntite = new Publication();
    PublicationServices publicationDAO = new PublicationServices();
    
    ObservableList<String> list = FXCollections.observableArrayList();
    List< Publication> list2 = new ArrayList<Publication>(); // liste des pub
    List< Integer> list6 = new ArrayList< Integer>(); // liste des id pub
    List< Integer> listIdPersonne = new ArrayList< Integer>();
    
    @FXML
    private Button afficherpub;
    public static int test;
    @FXML
    private Button buttonsuppr;
    public static int testpersonne;

    @FXML
    void ActionSuppr(ActionEvent event) {
        
        i = listv.getSelectionModel().getSelectedIndex();
       
        testpersonne = listIdPersonne.get(i);
        
        if (testpersonne == id_personne_connecté) {
            publicationDAO.deletebyid(list6.get(i));
        }
        affichagepublications();
    }

    @FXML
    void listv_clicked(MouseEvent event) {
        i = listv.getSelectionModel().getSelectedIndex();
        
        testpersonne = listIdPersonne.get(i);
        if (testpersonne == id_personne_connecté) {
            buttonsuppr.setDisable(false);
        } else {
            buttonsuppr.setDisable(true);
            
        }
    }

    @FXML
    void afficherpub(ActionEvent event) throws IOException {
        test = 1;
        p = listv.getSelectionModel().getSelectedItem();
        i = listv.getSelectionModel().getSelectedIndex();
        j = list6.get(i);
        // System.out.println(listv.getSelectionModel().getSelectedItem());
        //  System.out.println("You clicked me!");
        Parent page = FXMLLoader.load(getClass().getResource("/view/interfaceCommentaire.fxml"));
        Scene scene = new Scene(page);
        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
    }
    
    @FXML
    void handleButtonloclocAction(ActionEvent event) {
        
        publicationEntite.setType("covoiturage");
        publicationEntite.setId_personne(id_personne_connecté);
        publicationEntite.setTitre(titrepublication.getText());
        publicationEntite.setContenu(publication.getText());
        publicationDAO.add(publicationEntite);
        titrepublication.setText("");
        publication.setText("");
        affichagepublications();
        System.out.println("Ajout avec succes ");
        User A = new User();
        PublicationServices pub = new PublicationServices();
        A = pub.findById(publicationEntite.getId_personne());
        SendMail sm = new SendMail(A.getMail(), "Notification", "Votre publication est ajoutée avec succés");
        System.out.println(A.getMail());
    }
    
    public void affichagepublications() {
        buttonsuppr.setDisable(true);
     
        list2 = publicationDAO.displayAllCovoiturage();
     
        ObservableList<String> items = FXCollections.observableArrayList();
        
        for (int i = 0; i < list2.size(); i++) {
//                    System.out.println(list2.get(i).getContenu());
            listIdPersonne.add(list2.get(i).getId_personne());
            list6.add(list2.get(i).getId_pub());
            items.add("Le membre:  " + publicationDAO.displayAllUser(list2.get(i).getId_personne()).getNom() + " a publié: \n"
                    + list2.get(i).getContenu());
        }
        listv.setItems(items);
      //  System.out.println(list6);
        // affichage.setText(list.toString());
        
      //  System.out.println(listv);
        //  affichage.setText(list.toString());
        
    }
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

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // buttonsuppr.setDisable(false);
        // buttonsuppr.setDisable(true);

        affichagepublications();
    }    
    
}
