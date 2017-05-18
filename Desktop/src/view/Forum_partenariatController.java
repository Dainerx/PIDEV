/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import services.PublicationServices;
import modal.Publication;
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
public class Forum_partenariatController implements Initializable {

    @FXML
    private Button idpre;
    @FXML
    ListView<String> listvvv;
    public static String p2; // contenu de la ligne selectionnée
    public static int i2; // index de la ligne selectionnée
    public static int j2; // id de pub de la ligne selectionnée
    @FXML
    private Button publier;
    @FXML
    private TextArea publicationpart;
    @FXML
    private TextArea titrepublicationpart;
    Publication publicationEntite = new Publication();
    PublicationServices publicationDAO = new PublicationServices();
    ObservableList<String> listpart = FXCollections.observableArrayList();
    List< Publication> list2part = new ArrayList<Publication>(); // liste des pub
    List< Integer> list6part = new ArrayList< Integer>(); // liste des id pub
    List< Integer> listIdPersonne_part = new ArrayList< Integer>();
    @FXML
    private Button affpubpart;
    public static int test2;
    public static int testpersonne_part;
    @FXML
    private Button bsup;

    @FXML
    void ActionSupri(ActionEvent event) {
        i2 = listvvv.getSelectionModel().getSelectedIndex();
        System.out.println(i2);
        testpersonne_part = listIdPersonne_part.get(i2);
        
        if (testpersonne_part == id_personne_connecté) {
            publicationDAO.deletebyid(list6part.get(i2));
        }
        affint();
    }

    @FXML
    void listvpart_Clicked(MouseEvent event) {
        i2 = listvvv.getSelectionModel().getSelectedIndex();
        
        testpersonne_part = listIdPersonne_part.get(i2);
        if (testpersonne_part == id_personne_connecté) {
            bsup.setDisable(false);
        } else {
            bsup.setDisable(true);
            
        }
    }

    @FXML
    void Actionaffpubpart(ActionEvent event) throws IOException {
        test2 = 1;
        p2 = listvvv.getSelectionModel().getSelectedItem();
        // System.out.println(p2);
        i2 = listvvv.getSelectionModel().getSelectedIndex();
        // System.out.println(i2);
        j2 = list6part.get(i2);
        
        System.out.println(listvvv.getSelectionModel().getSelectedItem());
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
    void handleButtonpartlocAction(ActionEvent event) {
        
        publicationEntite.setType("partenariat");
        publicationEntite.setId_personne(id_personne_connecté);
        publicationEntite.setTitre(titrepublicationpart.getText());
        publicationEntite.setContenu(publicationpart.getText());
        publicationDAO.add(publicationEntite);
        titrepublicationpart.setText("");
        publicationpart.setText("");
        affint();
        System.out.println("Ajout avec succes ");
        User A = new User();
        PublicationServices pub = new PublicationServices();
        A = pub.findById(publicationEntite.getId_personne());
        SendMail sm = new SendMail(A.getMail(), "Notification", "Votre publication est ajoutée avec succés");
        System.out.println(A.getMail());
        
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

    public void affint() {
        System.out.println("test");
        
        list2part = publicationDAO.displayAllPartenariat();
        
        ObservableList<String> items = FXCollections.observableArrayList();
        
        for (int i = 0; i < list2part.size(); i++) {
            listIdPersonne_part.add(list2part.get(i).getId_personne());
//                    System.out.println(list2.get(i).getContenu());
            list6part.add(list2part.get(i).getId_pub());
            items.add("Le membre:  " + publicationDAO.displayAllUser(list2part.get(i).getId_personne()).getNom()  + " a publier ce truc: \n"
                    + list2part.get(i).getContenu());
        }
        listvvv.setItems(items);
        
        System.out.println(listpart);
    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        bsup.setDisable(true);
        affint();
        //  affichage.setText(list.toString());
    }    
    
}
