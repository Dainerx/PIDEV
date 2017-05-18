/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import services.CommentaireServices;
import services.PublicationServices;
import modal.Commentaire;
import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXListView;
import com.jfoenix.controls.JFXTextArea;
import static view.Forum_locationController.j1;
import static view.Forum_locationController.p1;
import static view.Forum_locationController.test1;
import static view.Forum_partenariatController.j2;
import static view.Forum_partenariatController.p2;
import static view.Forum_partenariatController.test2;
import static view.Page2Controller.j;
import static view.Page2Controller.p;
import static view.Page2Controller.test;
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
import javafx.scene.control.TextArea;
import javafx.stage.Stage;
import static view.FXMLDocumentController.id_personne_connecté;
import static view.FXMLDocumentController.verif;

/**
 * FXML Controller class
 *
 * @author sahar ghorch
 */
public class InterfaceCommentaireController implements Initializable {

    /**
     * Initializes the controller class.
     */
    PublicationServices publicationDAO = new PublicationServices();
    @FXML
    private Button pre;
    @FXML
    JFXListView<String> listvcom1;
    Commentaire commentaireEntite = new Commentaire();
    CommentaireServices CommentaireDAO = new CommentaireServices();
    List< Commentaire> list2 = new ArrayList<Commentaire>(); // liste des com cov
    List< Commentaire> list3 = new ArrayList<Commentaire>();// liste des com loc
    List< Commentaire> list4 = new ArrayList<Commentaire>();// liste des com part
    @FXML
    private TextArea idcomment;
    
    @FXML
    private Button idaddcom;

    @FXML
    void handleButtonprecedentAction(ActionEvent event) throws IOException {
        System.out.println("You clicked me!");
        if (verif == 1) {
            Parent page = FXMLLoader.load(getClass().getResource("/view/page2.fxml"));
            Scene scene = new Scene(page);
            scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.hide();
            stage.setScene(scene);
            stage.show();
        }
        if (verif == 2) {
            Parent page = FXMLLoader.load(getClass().getResource("/view/forum_location.fxml"));
            Scene scene = new Scene(page);
            scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.hide();
            stage.setScene(scene);
            stage.show();
            
        }
        if (verif == 3) {
            Parent page = FXMLLoader.load(getClass().getResource("/view/forum_partenariat.fxml"));
            Scene scene = new Scene(page);
            scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.hide();
            stage.setScene(scene);
            stage.show();
        }
        
    }

    @FXML
    void addcomm(ActionEvent event) throws IOException {
        if (verif == 1) {
            commentaireEntite.setTexte(idcomment.getText());
            commentaireEntite.setId_pub(j);
            commentaireEntite.setId_personne(id_personne_connecté);
            
            CommentaireDAO.add(commentaireEntite);
            
            affichageinterface();            
        }
        if (verif == 2) {
            commentaireEntite.setTexte(idcomment.getText());
            commentaireEntite.setId_pub(j1);
            commentaireEntite.setId_personne(id_personne_connecté);
            
            CommentaireDAO.add(commentaireEntite);
            affichageinterface();            
        }
        if (verif == 3) {
            commentaireEntite.setTexte(idcomment.getText());
            commentaireEntite.setId_pub(j2);
            commentaireEntite.setId_personne(id_personne_connecté);
            
            CommentaireDAO.add(commentaireEntite);
            affichageinterface();            
        }
        idcomment.setText("");
    }

    public void affichageinterface() {
        if (verif == 1) {
            //  System.out.println(p1);
            ObservableList<String> items = FXCollections.observableArrayList();
            
            items.add(p);
            
            listvcom.setItems(items);
            //  System.out.println(j);
            
            list2 = CommentaireDAO.displayAllById(j);
            
            ObservableList<String> itemss = FXCollections.observableArrayList();
            
            for (int i = 0; i < list2.size(); i++) {
//                    System.out.println(list2.get(i).getContenu());
                
                itemss.add("Le membre:  " + publicationDAO.displayAllUser(list2.get(i).getId_personne()).getNom() + " a commenté : "
                        + list2.get(i).getTexte());
            }
            listvcom1.setItems(itemss);
        }        
        if (verif == 2) {
            System.out.println(p1);
            ObservableList<String> items = FXCollections.observableArrayList();
            
            items.add(p1);
            
            listvcom.setItems(items);
            System.out.println(j1);
            
            list3 = CommentaireDAO.displayAllById(j1);
            
            ObservableList<String> itemss = FXCollections.observableArrayList();
            
            for (int i = 0; i < list3.size(); i++) {
//                    System.out.println(list2.get(i).getContenu());
                
                itemss.add("Le membre:  " + publicationDAO.displayAllUser(list3.get(i).getId_personne()).getNom()  + " a commenté : "
                        + list3.get(i).getTexte());
            }
            listvcom1.setItems(itemss);
        }        
        if (verif == 3) {
            System.out.println(p2);
            ObservableList<String> itemsss = FXCollections.observableArrayList();
            
            itemsss.add(p2);
            
            listvcom.setItems(itemsss);
            System.out.println(j2);
            
            list4 = CommentaireDAO.displayAllById(j2);
            System.out.println(list4);
            
            ObservableList<String> itemss = FXCollections.observableArrayList();
            
            for (int i = 0; i < list4.size(); i++) {
//                    System.out.println(list2.get(i).getContenu());
                
                itemss.add("Le membre:  " + publicationDAO.displayAllUser(list4.get(i).getId_personne()).getNom() + " a commenté : "
                        + list4.get(i).getTexte());
            }
            listvcom1.setItems(itemss);
        }        
    }
    @FXML
    private ListView<String> listvcom;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        affichageinterface();
        
    }    
    
}
