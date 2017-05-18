/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import modal.*; 
import Techniques.CrudCercle;
import Techniques.CrudCommentaire;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import Techniques.CrudMembre;
import Techniques.CrudProfile;
import Techniques.CrudPublicationProfile;
import com.jfoenix.controls.JFXButton;
import java.awt.event.KeyEvent;
import java.io.File;
import java.io.IOException;
import java.lang.reflect.Member;
import java.sql.SQLException;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.sql.*;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;
import java.util.stream.Collectors;
import javafx.event.ActionEvent;
import javafx.event.EventHandler;
import javafx.fxml.FXMLLoader;
import javafx.geometry.Orientation;
import javafx.geometry.Pos;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Separator;
import javafx.scene.image.Image;
import javafx.scene.layout.Background;
import javafx.scene.layout.Border;
import javafx.scene.layout.HBox;
import javafx.scene.layout.VBox;
import javafx.scene.media.Media;
import javafx.scene.media.MediaPlayer;
import javafx.scene.media.MediaView;
import javafx.stage.Stage;
import modal.Membre;
import modal.Profile;
import org.controlsfx.control.textfield.TextFields;

/**
 * FXML Controller class
 *
 * @author xagta1
 */
public class MembreProfileController implements Initializable {

    CrudMembre Crud = new CrudMembre();
    CrudProfile CrudP = new CrudProfile();
    CrudPublicationProfile CrudPP = new CrudPublicationProfile();
    CrudCercle CrudC = new CrudCercle() ; 
    CrudCommentaire CrudComs = new CrudCommentaire() ; 
    
    Image img2;
    Membre current ; 
    Membre m2;

    Parent root = null;

    @FXML
    TextField searchBox;
    @FXML
    Button SearchButton;
    @FXML
    ImageView photoProfile;
    @FXML
    Label username;
    @FXML
    Label Description;
    @FXML
    Label Intro;
    @FXML
    VBox PubContainer;
    @FXML
    private HBox panelbox;
    boolean added=false ;

    

    public Membre SearchMembre(String Motcle) throws SQLException {
        try {

            Membre m1 = Crud.getMembreList().stream().filter(m -> m.getNom().matches(".*" + Motcle + ".*")).findFirst().get();
            return m1;
        } catch (Exception e) {
            return null;
        }

    }

    public Profile getProf(Membre M1) throws SQLException {
        Profile P = new Profile();

        try {
           // CrudP.getProfiles().forEach(System.out::println);
            P = CrudP.getProfiles().stream().filter(p -> p.getIdMembre().equals(M1)).findFirst().get();

        } catch (Exception e) {

        }
        return P;
    }

    public void CreatePubs(Profile pr) throws SQLException {
        CrudPP.getPubsListPerProfile(pr).forEach((PublicationProfil pub) -> {
            Label contenu = new Label(pub.getContenu());
            contenu.setStyle("-fx-start-margin:20;");
            ImageView photo = new ImageView();
            HBox box = new HBox();
            if (!pub.getPicpath().isEmpty()) {
               
                photo.setImage(new Image("http://127.0.0.1/Pidev02/web/images/uploads/pubs/"+pub.getPicpath()));
                photo.setFitHeight(150);
                photo.setFitWidth(150);
                box.getChildren().add(photo);
            } 
            Button Commentsbtn = new Button("Afficher Commentaires"); 
            Commentsbtn.setOnAction(e->{
                Stage stage = new Stage() ; 
               FXMLLoader loader = new FXMLLoader(getClass().getResource("Commentaire.fxml"));

                try {
                    root = loader.load();
                     Scene scene = new Scene(root);
                    CommentaireController cc = loader.getController();
                     cc.LoadComments(pub);
                    stage.setScene(scene);

                    stage.show();
                } catch (IOException ex) {
                    Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
                } catch (SQLException ex) {
                    Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
                }

                   
            });

            box.setStyle("-fx-background-color: #FFFFFF;-fx-border-color: #000000 ; ");
            box.getChildren().add(contenu);
            box.getChildren().add(Commentsbtn); 

            PubContainer.getChildren().add(box);
            PubContainer.getChildren().add(new Separator(Orientation.HORIZONTAL));

        });
    }

    public void initSearchAction() throws SQLException {

        TextFields.bindAutoCompletion(searchBox, Crud.getMembreList().stream().map(m -> m.getNom()).collect(Collectors.toList()));
        SearchButton.setOnAction((ActionEvent event) -> {
            try {
                Membre m1 = SearchMembre(searchBox.getText());

                LoadMemberData(m1);

            } catch (SQLException ex) {
                Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
            }
        });
    }

    void Hideall() {

        photoProfile.setVisible(false);

        username.setVisible(false);

        Description.setVisible(false);

        Intro.setVisible(false);

        PubContainer.setVisible(false);
    }

    void Showall() {

        photoProfile.setVisible(true);

        username.setVisible(true);

        Description.setVisible(true);

        Intro.setVisible(true);

        PubContainer.setVisible(true);
    }

    public void LoadMemberData(Membre m) throws SQLException {
//        System.out.println("LoadMemberData==>" + m);
        current=Crud.getConnectedMembre() ; 
        if (m != null) {
            Showall();
            Profile pr = getProf(m);
            try {
                if (m.equals(Crud.getConnectedMembre())) {
                    

                    Button addPub = new Button("ajouter publication");
                    addPub.setId("addButton");
                    addPub.setOnAction(e -> {
                        
                        Stage stage = new Stage();
                        FXMLLoader loader = new FXMLLoader(getClass().getResource("AjoutPublication.fxml"));
                       

                       
                        try {
                            root = loader.load();
                             AjoutPublicationController APC = loader.getController();
//                            System.out.println("this==>"+pr);
                            APC.setProfile(pr);
                        } catch (IOException ex) {
                            Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
                        } catch (SQLException ex) {
                            Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
                        }
                        

                        Scene scene = new Scene(root);

                        stage.setScene(scene);

                        stage.show();

                    });
                    if(panelbox.getChildren().stream().noneMatch(e->e.getId().equals("addButton"))) 
                            {
                                panelbox.getChildren().add(addPub);
                         
                            }
                         
                            
                            

                }
                else 
                { //current != profile
                             panelbox.getChildren().removeIf(e->e.getId().matches("addButton")); 
                             JFXButton btnfollow = new JFXButton("follow"); 

                             JFXButton btnunfollow = new JFXButton("Unfollow"); 
                       btnunfollow.setStyle("-fx-padding: 0.7em 0.57em;-fx-font-size: 14px;-jfx-button-type: RAISED;-fx-background-color: rgb(77,102,204);-fx-pref-width: 200;-fx-text-fill: WHITE;");
                       btnunfollow.setOnAction(e->{
                            try {
                                
                                
                                           Alert alert = new Alert(AlertType.CONFIRMATION);
                                alert.setTitle("Fenetre de confirmation");
                                alert.setHeaderText("unfollow member");
                                alert.setContentText("voulez vous ne plus suivre "+m.getNom()+" ?");

                                ButtonType buttonTypeOne = new ButtonType("Oui");
                                ButtonType buttonTypeTwo = new ButtonType("Non");
                                alert.getButtonTypes().setAll(buttonTypeOne, buttonTypeTwo);

                                Optional<ButtonType> result = alert.showAndWait();
                                if (result.get() == buttonTypeOne) {
                                    CrudC.unfollow(m, current);
                                    panelbox.getChildren().remove(btnunfollow);
                                    panelbox.getChildren().add(btnfollow);
        }
                                
                            } catch (SQLException ex) {
                                Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
                            }
                       });
                        
                       btnfollow.setStyle("-fx-padding: 0.7em 0.57em;-fx-font-size: 14px;-jfx-button-type: RAISED;-fx-background-color: rgb(77,102,204);-fx-pref-width: 200;-fx-text-fill: WHITE;");
                       btnfollow.setOnAction(e->{
                            try {
                                CrudC.addFollower(m, current);
                                panelbox.getChildren().remove(btnfollow) ;
                                panelbox.getChildren().add(btnunfollow); 
                            } catch (SQLException ex) {
                                Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
                            }
                       });
                             
                    if (CrudC.isfollowed(current, m)) //show unfollow
                    {
                        System.out.println(CrudC.isfollowed(current, m)+"<== followed");
                        
                       panelbox.getChildren().add(btnfollow) ; 
                        
                    }
                    else 
                    {
                       
                       panelbox.getChildren().add(btnfollow) ; 
                    }
                    
                }

                photoProfile.setImage(new Image("http://127.0.0.1/Pidev02/web/images/uploads/pubs/"+pr.getPhoto()));
                Description.setText(pr.getDescription());
                Intro.setText(pr.getPhonenumber());
                PubContainer.getChildren().clear();
                CreatePubs(pr);

            } catch (SQLException ex) {
                Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
            }
            username.setText(m.getNom());
            username.setVisible(true);

        } else {
            Hideall();
        }

    }

    @Override
    public void initialize(URL url, ResourceBundle rb) {

        Hideall();

        try {
            initSearchAction();
        } catch (SQLException ex) {
            Logger.getLogger(MembreProfileController.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

}
