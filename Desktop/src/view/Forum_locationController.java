/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import services.PublicationServices;
import modal.Publication;
import com.jfoenix.controls.JFXButton;
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
import javafx.scene.input.MouseEvent;
import javafx.stage.Stage;
import static view.FXMLDocumentController.id_personne_connecté;
import modal.SendMail;
import modal.User;

/**
 * FXML Controller class
 *
 * @author sahar ghorch
 */
public class Forum_locationController implements Initializable {

    @FXML
    private TextArea publicationloc;
    @FXML
    private TextArea titrepublicationloc;
    
    @FXML
    ListView<String> listvv;
    
    @FXML
    private Button publier;
    Publication publicationEntite = new Publication();
    PublicationServices publicationDAO = new PublicationServices();
    ObservableList<String> list1 = FXCollections.observableArrayList();
    List< Publication> list3 = new ArrayList<Publication>(); // liste des pub
    List< Integer> list7 = new ArrayList< Integer>();  //liste des id pub
    @FXML
    private Button butsup;
    List< Integer> listIdPersonne = new ArrayList< Integer>();
    public static int testpersonne;

    @FXML
    void ActionSupprimer(ActionEvent event) {
        
        i1 = listvv.getSelectionModel().getSelectedIndex();
        
        testpersonne = listIdPersonne.get(i1);
        if (testpersonne == id_personne_connecté) {
            publicationDAO.deletebyid(list7.get(i1));
        }
        afficherint();
    }
    
    @FXML
    void handleButtonpublocAction(ActionEvent event) {
        publicationEntite.setType("location");
        publicationEntite.setId_personne(id_personne_connecté);
        publicationEntite.setTitre(titrepublicationloc.getText());
        publicationEntite.setContenu(publicationloc.getText());
        publicationDAO.add(publicationEntite);
        System.out.println("Ajout avec succes ");
        titrepublicationloc.setText("");
        publicationloc.setText("");
        afficherint();
        User A = new User();
        PublicationServices pub = new PublicationServices();
        A = pub.findById(publicationEntite.getId_personne());
        SendMail sm = new SendMail(A.getMail(), "Notification", "Votre publication est ajoutée avec succés");
        System.out.println(A.getMail());
        
    }

    @FXML
    void listview_clicked(MouseEvent event) {
        i1 = listvv.getSelectionModel().getSelectedIndex();
        
        testpersonne = listIdPersonne.get(i1);
        if (testpersonne == id_personne_connecté) {
            butsup.setDisable(false);
        } else {
            butsup.setDisable(true);
            
        }
    }
    @FXML
    private Button idpre;
    
    @FXML
    private Button affpubloc;
    
    public static String p1; // contenu de la ligne selectionnée
    public static int i1; // index de la ligne selectionnée
    public static int j1; // id pub de la ligne selectionnée

    public static int test1;

    @FXML
    void actionaffpubloc(ActionEvent event) throws IOException {
        test1 = 1;
        p1 = listvv.getSelectionModel().getSelectedItem();
        //System.out.println(p1);
        i1 = listvv.getSelectionModel().getSelectedIndex();
        // System.out.println(i1);
        j1 = list7.get(i1);

        // System.out.println("bbb"+listvv.getSelectionModel().getSelectedItem());
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

    public void afficherint() {
        System.out.println("test");
        
        list3 = publicationDAO.displayAllLocation();
        
        ObservableList<String> items = FXCollections.observableArrayList();
        
        for (int i = 0; i < list3.size(); i++) {
            listIdPersonne.add(list3.get(i).getId_personne());

//                    System.out.println(list2.get(i).getContenu());
            list7.add(list3.get(i).getId_pub());
            items.add("Le membre:  " + publicationDAO.displayAllUser(list3.get(i).getId_personne()).getNom()  + " a publier ce truc: \n"
                    + list3.get(i).getContenu());
        }
        listvv.setItems(items);
        
    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {

        // affichage.setText(list.toString());
        butsup.setDisable(true);
        afficherint();

        //  affichage.setText(list.toString());
    }    
    
}
