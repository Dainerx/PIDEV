/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.jfoenix.controls.JFXListView;
import com.jfoenix.controls.JFXTextArea;
import java.io.IOException;
import java.net.URISyntaxException;
import java.net.URL;
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
import javafx.scene.control.TextArea;
import javafx.stage.Stage;
import static view.FXMLDocumentController.id_personne_connecté;
import static view.MembreController.jj;
import static view.MembreController.pp;
import modal.Commentaire;
import modal.SmsSender;
import services.CommentaireMembre;
import services.PublicationServices;

/**
 * FXML Controller class
 *
 * @author sahar ghorch
 */
public class Com_membreController implements Initializable {

    /**
     * Initializes the controller class.
     */
    PublicationServices publicationDAO = new PublicationServices();
    
    Commentaire commentaireEntite = new Commentaire();
    CommentaireMembre CommentaireMembre = new CommentaireMembre();
    List< Commentaire> list2 = new ArrayList<Commentaire>();
    List< Commentaire> list3 = new ArrayList<Commentaire>();
    List< Commentaire> list4 = new ArrayList<Commentaire>();
    
    @FXML
    private JFXListView<String> listvmc;
    
    @FXML
    private Button addcom;
    
    @FXML
    private TextArea omprenom;
    
    @FXML
    private JFXTextArea comcont;
    
    @FXML
    void addcom(ActionEvent event) {
        commentaireEntite.setTexte(comcont.getText());
        commentaireEntite.setId_membre_vise(jj);
        commentaireEntite.setId_personne(id_personne_connecté);
        System.out.println(commentaireEntite.getId_membre_vise());
        CommentaireMembre.add(commentaireEntite);
        comcont.setText("");
        SmsSender msg = new SmsSender();
        try {
            msg.send();
        } catch (URISyntaxException ex) {
            Logger.getLogger(Com_membreController.class.getName()).log(Level.SEVERE, null, ex);
        }
        afficherint();
    }

    void afficherint() {
        omprenom.setText(pp);
        list2 = CommentaireMembre.displayAllById11(jj);
        
        ObservableList<String> itemss = FXCollections.observableArrayList();
        
        for (int i = 0; i < list2.size(); i++) {
            
            itemss.add("Le membre:  " + publicationDAO.displayAllUser(list2.get(i).getId_personne()).getNom() + " " + publicationDAO.displayAllUser(list2.get(i).getId_personne()).getPrenom() + " a commenté : "
                    + list2.get(i).getTexte());
        }
        listvmc.setItems(itemss);
    }
     private Button idpre;
      @FXML
    void handleButtonprecedentAction(ActionEvent event) throws IOException {
System.out.println("You clicked me!");
        Parent page = FXMLLoader.load(getClass().getResource("/view/membre.fxml"));
        Scene scene = new Scene(page);
        scene.getStylesheets().add(getClass().getResource("/assets/style.css").toExternalForm());
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
        afficherint();
    }    
    
}
