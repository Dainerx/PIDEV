/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXTextArea;
import com.jfoenix.controls.JFXTextField;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Label;

import javafx.scene.control.Skin;
import javafx.beans.property.*;
import javafx.geometry.Orientation;
import javafx.scene.control.Control;
import impl.org.controlsfx.skin.RatingSkin;
import com.lynden.gmapsfx.GoogleMapView;
import com.lynden.gmapsfx.MapComponentInitializedListener;
import com.lynden.gmapsfx.javascript.event.UIEventType;
import com.lynden.gmapsfx.javascript.object.Animation;
import com.lynden.gmapsfx.javascript.object.GoogleMap;
import com.lynden.gmapsfx.javascript.object.LatLong;
import com.lynden.gmapsfx.javascript.object.MapOptions;
import com.lynden.gmapsfx.javascript.object.MapTypeIdEnum;
import com.lynden.gmapsfx.javascript.object.Marker;
import com.lynden.gmapsfx.javascript.object.MarkerOptions;
import com.lynden.gmapsfx.service.directions.DirectionStatus;
import com.lynden.gmapsfx.service.directions.DirectionsResult;
import com.lynden.gmapsfx.service.directions.DirectionsServiceCallback;
import com.lynden.gmapsfx.util.MarkerImageFactory;
import modal.Feedback;
import modal.Membre;
import modal.Trajet;
import modal.sendMailComfirmation;
import services.CrudCadeau;
import services.CrudEvenement;
import services.CrudFeedback;

import java.awt.image.BufferedImage;
import java.io.BufferedReader;
import java.io.File;
import java.io.FileInputStream;
import java.io.IOException;
import java.io.InputStreamReader;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URI;
import java.net.URL;
import java.nio.file.Files;
import java.nio.file.Paths;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.Locale;
import java.util.Random;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import java.util.stream.Stream;
import javafx.application.Platform;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.embed.swing.SwingFXUtils;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Button;
import javafx.scene.control.CheckBox;
import javafx.scene.control.DatePicker;
import javafx.scene.control.Tab;
import javafx.scene.control.TabPane;
import javafx.scene.control.TableView;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.image.ImageView;
import javafx.scene.image.WritableImage;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.scene.layout.HBox;
import javafx.scene.layout.Pane;
import javafx.scene.text.Text;
import javafx.stage.FileChooser;
import javax.imageio.ImageIO;
import javax.mail.MessagingException;
import javax.swing.JOptionPane;

import netscape.javascript.JSObject;
import org.controlsfx.control.Rating;
import static tray.notification.NotificationType.SUCCESS;
import tray.notification.TrayNotification;

/**
 *
 * @author zeus12
 */
public class FXMLFrontFeedController implements Initializable, MapComponentInitializedListener, DirectionsServiceCallback {

    /**
     * Initializes the controller class.
     */
    protected GoogleMapView mapComponent;
    private GoogleMap map;

    Membre ConnectedMembre;

    @FXML
    private BorderPane map_container;

    int count = 0;
    @FXML
    private TabPane tabParent;
    @FXML
    private Tab tabAjout;
    @FXML
    private TextField id;
    @FXML
    private TextField sujet;
    @FXML
    private TextField rating;
    @FXML
    private TextArea commentaire;
    @FXML
    private DatePicker date;
    @FXML
    private Button buttonAjouter;
    @FXML
    private Tab tabAffichage;
    @FXML
    private TableView<?> affichageFeedback;
    @FXML
    private Button buttonModif;
    @FXML
    private Button buttonSupprimer;
    @FXML
    private TextField idRecherche;
    @FXML
    private Tab tabModifier;
    @FXML
    private TextField idModif;
    @FXML
    private TextField sujetModif;
    @FXML
    private TextField ratingModif;
    @FXML
    private TextArea commentaireModif;
    @FXML
    private DatePicker dateModif;
    @FXML
    private Button buttonEnregistrer;
    @FXML
    private JFXTextArea mail;
    @FXML
    private JFXTextField Destinataire;

    private String idModification;
    @FXML
    private JFXButton buttonPublier;
    @FXML
    private JFXButton buttonTrajetPers;
    @FXML
    private JFXButton buttonConsulterEvenement;
    @FXML
    private JFXButton buttonConsulterCadeau;
    @FXML
    private JFXButton buttonConsulterPoints;
    @FXML
    private Tab tabAccueil;
    @FXML
    private Tab tabLocalisation;
    @FXML
    private Tab tabMail;

    @FXML
    private HBox ratinghbox;

    private Rating rate;
    private Rating rate1;
    @FXML
    private HBox ratinghbox1;
    @FXML
    private TableView<?> TrajetTV;

    private Trajet t;
    private String idTrajet;
    @FXML
    private Label labelMembre;
    @FXML
    private Label LabelSujet;
    @FXML
    private Label labelRating;
    @FXML
    private Label LabelDate;
    @FXML
    private Label LabelCommentaire;
    @FXML
    private Label labelBienvenu;
    @FXML
    private Tab tabEvt;
    @FXML
    private TableView<?> tableEvt;
    @FXML
    private Tab tabCadeau;
    @FXML
    private TableView<?> tableCadeau;
    @FXML
    private Tab tabStat;
    @FXML
    private PieChart statFeed;
    @FXML
    private JFXTextArea villesIntermediairesTA;
    @FXML
    private JFXTextField rechercheEvtTF;
    @FXML
    private JFXTextField rechercheCadTF;

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            // TODO
            stat();
        } catch (SQLException ex) {
            Logger.getLogger(FXMLFrontFeedController.class.getName()).log(Level.SEVERE, null, ex);
        }
        rate = new Rating(5);
        rate.setPartialRating(true);

        rate.setUpdateOnHover(true);

        rating.setText(String.valueOf(rate.getRating()));
        ratinghbox.getChildren().add(rate);
        rating.setText(String.valueOf(rate.getRating()));

        rating.setVisible(false);
        System.out.println(rating.getText());

        rate.ratingProperty().addListener(new ChangeListener<Number>() {
            @Override
            public void changed(ObservableValue<? extends Number> observable,
                    Number oldValue, Number newValue) {
                rating.setText(newValue.toString());
                // System.out.println(newValue);
                String x = rating.getText().substring(0, rating.getText().indexOf("."));
                System.out.println(Integer.parseInt(x));
            }

        });

        rate1 = new Rating(5);
        rate1.setPartialRating(true);

        rate1.setUpdateOnHover(true);

        rating.setText(String.valueOf(rate1.getRating()));
        ratinghbox1.getChildren().add(rate1);
        ratingModif.setText(String.valueOf(rate1.getRating()));

        ratingModif.setVisible(false);
        System.out.println(ratingModif.getText());

        rate1.ratingProperty().addListener(new ChangeListener<Number>() {
            @Override
            public void changed(ObservableValue<? extends Number> observable,
                    Number oldValue, Number newValue) {
                ratingModif.setText(newValue.toString());
                // System.out.println(newValue);
                String x = ratingModif.getText().substring(0, ratingModif.getText().indexOf("."));
                System.out.println(Integer.parseInt(x));
            }

        });

        CrudFeedback cf = new CrudFeedback();

        ResultSet rs;
        try {
            rs = cf.FindMembreConn();
            id.setText(rs.getString("username"));

        } catch (SQLException ex) {
            Logger.getLogger(FXMLFrontFeedController.class.getName()).log(Level.SEVERE, null, ex);
        }

        id.setDisable(true);

        cf.AfficherTableFeedback(affichageFeedback);
        cf.AfficherTrajets(TrajetTV);

        mapComponent = new GoogleMapView(Locale.getDefault().getLanguage(), null);
        mapComponent.addMapInializedListener((MapComponentInitializedListener) this);
        map_container.setCenter(mapComponent);

        id.setVisible(false);
        sujet.setVisible(false);
        rating.setVisible(false);
        date.setVisible(false);
        commentaire.setVisible(false);
        ratinghbox.setVisible(false);
        LabelSujet.setVisible(false);
        labelMembre.setVisible(false);
        LabelDate.setVisible(false);
        labelRating.setVisible(false);
        LabelCommentaire.setVisible(false);
        CrudCadeau cc = new CrudCadeau();
        CrudEvenement ce = new CrudEvenement();

        ce.AfficherTable(tableEvt);

        try {
            ResultSet rss = cf.FindMembreConn();
            ConnectedMembre = new Membre(Integer.parseInt(rss.getString("id")));
            labelBienvenu.setText(rss.getString("username") + "  " + rss.getString("nom"));
            cc.AfficherTableId(tableCadeau, Integer.parseInt(rss.getString("id")));
        } catch (SQLException ex) {
            Logger.getLogger(FXMLFrontFeedController.class.getName()).log(Level.SEVERE, null, ex);
        }

        // controles de saisies fazet alphabet
        sujet.textProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
                if (!newValue.matches("[qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]")) {
                    sujet.setText(newValue.replaceAll("[^qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]", ""));
                }
            }
        });
        commentaire.textProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
                if (!newValue.matches("[qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]")) {
                    commentaire.setText(newValue.replaceAll("[^qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]", ""));
                }
            }
        });

        sujetModif.textProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
                if (!newValue.matches("[qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]")) {
                    sujetModif.setText(newValue.replaceAll("[^qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]", ""));
                }
            }
        });

        commentaireModif.textProperty().addListener(new ChangeListener<String>() {
            @Override
            public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
                if (!newValue.matches("[qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]")) {
                    commentaireModif.setText(newValue.replaceAll("[^qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]", ""));
                }
            }
        });

    }

    @Override
    public void mapInitialized() {
        LatLong center = new LatLong(36.5, 10);

        MapOptions options = new MapOptions();
        options.center(center)
                .mapMarker(true)
                .zoom(7)
                .overviewMapControl(false)
                .panControl(false)
                .rotateControl(false)
                .scaleControl(true)
                .streetViewControl(false)
                .zoomControl(true)
                .mapType(MapTypeIdEnum.TERRAIN)
                .styleString("[{'featureType':'landscape','stylers':[{'saturation':-100},{'lightness':65},{'visibility':'on'}]},{'featureType':'poi','stylers':[{'saturation':-100},{'lightness':51},{'visibility':'simplified'}]},{'featureType':'road.highway','stylers':[{'saturation':-100},{'visibility':'simplified'}]},{\"featureType\":\"road.arterial\",\"stylers\":[{\"saturation\":-100},{\"lightness\":30},{\"visibility\":\"on\"}]},{\"featureType\":\"road.local\",\"stylers\":[{\"saturation\":-100},{\"lightness\":40},{\"visibility\":\"on\"}]},{\"featureType\":\"transit\",\"stylers\":[{\"saturation\":-100},{\"visibility\":\"simplified\"}]},{\"featureType\":\"administrative.province\",\"stylers\":[{\"visibility\":\"off\"}]},{\"featureType\":\"water\",\"elementType\":\"labels\",\"stylers\":[{\"visibility\":\"on\"},{\"lightness\":-25},{\"saturation\":-100}]},{\"featureType\":\"water\",\"elementType\":\"geometry\",\"stylers\":[{\"hue\":\"#ffff00\"},{\"lightness\":-25},{\"saturation\":-97}]}]");

        map = mapComponent.createMap(options, false);

        map.addUIEventHandler(UIEventType.click, (JSObject obj) -> {

            count++;
            LatLong ll = new LatLong((JSObject) obj.getMember("latLng"));
            System.out.println("LatLong: lat: " + ll.getLatitude() + " lng: " + ll.getLongitude());

            MarkerOptions markerOptions = new MarkerOptions();
            LatLong markerLatLong = new LatLong(ll.getLatitude(), ll.getLongitude());
            // LatLong markerLatLong1 = new LatLong(ll.getLatitude(), ll.getLongitude());
            String forrrAdd = "";
            forrrAdd = adressss(ll.getLatitude(), ll.getLongitude());

            //System.out.println(forrrAdd);
            String str = between(forrrAdd, "\"formatted_address\" : \"", "\",         \"geometry\"");
            System.out.println("formatted adres = -->" + str);
            markerOptions.position(markerLatLong)
                    .title("My new Marker")
                    .icon(MarkerImageFactory.createMarkerImage("mymarker.png", "png"))
                    .animation(Animation.DROP)
                    .visible(true);

            final Marker myMarker = new Marker(markerOptions);

            map.addMarker(myMarker);
            villesIntermediairesTA.setText(villesIntermediairesTA.getText() + " , " + str);

        });

    }

    static String between(String value, String a, String b) {
        // Return a substring between the two strings.
        int posA = value.indexOf(a);
        if (posA == -1) {
            return "";
        }
        int posB = value.indexOf(b);
        if (posB == -1) {
            return "";
        }
        int adjustedPosA = posA + a.length();
        if (adjustedPosA >= posB) {
            return "";
        }
        return value.substring(adjustedPosA, posB);
    }

    //reverse geocoding.........................................................................................
    public String adressss(double lat, double ln) {
        try {
            URL url = new URL("http://maps.googleapis.com/maps/api/geocode/json?latlng=" + lat + "," + ln + "&sensor=true");
            // making connection
            HttpURLConnection conn = (HttpURLConnection) url.openConnection();
            conn.setRequestMethod("GET");
            conn.setRequestProperty("Accept", "application/json");
            if (conn.getResponseCode() != 200) {
                throw new RuntimeException("Failed : HTTP error code : "
                        + conn.getResponseCode());
            }
            // Reading data's from url
            BufferedReader br = new BufferedReader(new InputStreamReader(
                    (conn.getInputStream())));

            String output;
            String outt = "";
            System.out.println("Output from Server .... \n");
            while ((output = br.readLine()) != null) {
                //System.out.println(output);
                outt += output;
            }

            return outt;
        } catch (MalformedURLException e) {
            e.printStackTrace();
        } catch (IOException e) {
            e.printStackTrace();
        }
        return null;
    }

    @Override
    public void directionsReceived(DirectionsResult results, DirectionStatus status) {

    }

    @FXML
    private void AjouterFeedback(ActionEvent event) throws SQLException {

        Feedback f = new Feedback();
        CrudFeedback cf = new CrudFeedback();

        if (!sujet.getText().equals("") && !commentaire.getText().equals("") && date.getValue() != null) {
            Trajet t = new Trajet(Integer.parseInt(idTrajet));
            ResultSet rs = cf.FindMembreConn();
            ConnectedMembre = new Membre(Integer.parseInt(rs.getString("id")));

            f.setM(ConnectedMembre);
            f.setT(t);
            f.setSujet(sujet.getText());

            try {
                String x = rating.getText().substring(0, rating.getText().indexOf("."));
                System.out.println(x);
                f.setRating(Integer.parseInt(x));
            } catch (NumberFormatException ex) { // handle your exception

            }

            f.setCommentaire(commentaire.getText());

            f.setDate(Date.valueOf(date.getValue()));

            cf.ajouterFeedback(f);
            TrayNotification tray = new TrayNotification("ajout mrigel", "sahiit ", SUCCESS);
            tray.showAndWait();
        } else {
            JOptionPane.showMessageDialog(null, " Vous devez remplir tous les champs ");

        }

    }

    @FXML
    private void RecupererFeedback(MouseEvent event) {
        System.out.println("in recup");
        CrudFeedback cf = new CrudFeedback();
        System.out.println("in recup2");
        String valeur = affichageFeedback.getSelectionModel().getSelectedItems().get(0).toString();
        // DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        idModification = valeur.substring(1, valeur.indexOf(","));

        System.out.println("in recup3");

    }

    @FXML
    private void ModifierFeedback(ActionEvent event) throws SQLException {

        CrudFeedback cf = new CrudFeedback();

        ResultSet rss = cf.FindMembreConn();

        ResultSet rs = cf.findById(idModification);
        if (Integer.parseInt(rss.getString("id")) == Integer.parseInt(rs.getString("id_membre"))) {
            tabParent.getSelectionModel().select(tabModifier);
            idModif.setText(rss.getString("username"));
            sujetModif.setText(rs.getString("sujet"));

            dateModif.setValue(cf.fromDate(rs.getDate("date")));
            commentaireModif.setText(rs.getString("commentaire"));
        } else {
            System.out.println("ceci n'est pas votre commentaire");
            JOptionPane.showMessageDialog(null, " Vous ne pourvez pas faire des opérations sur ce commentaire ");

        }

    }

    @FXML
    private void SupprimerFeedback(ActionEvent event) throws SQLException {

        CrudFeedback cf = new CrudFeedback();
        ResultSet rss = cf.FindMembreConn();

        ResultSet rs = cf.findById(idModification);
        if (Integer.parseInt(rss.getString("id")) == Integer.parseInt(rs.getString("id_membre"))) {

            cf.supprimerFeedback(idModification);
            cf.AfficherTableFeedback(affichageFeedback);

        } else {
            JOptionPane.showMessageDialog(null, " Vous ne pouvez pas supprimer ce commentaire ");
        }

    }

    @FXML
    private void EnregistrerModif(ActionEvent event) throws SQLException {

        CrudFeedback cf = new CrudFeedback();
        Feedback f = new Feedback();
        f.setIdFeedback(Integer.parseInt(idModification));
        ResultSet rs = cf.FindMembreConn();
        ConnectedMembre = new Membre(Integer.parseInt(rs.getString("id")));

        f.setM(ConnectedMembre);
        f.setSujet(sujetModif.getText());
        f.setCommentaire(commentaireModif.getText());
        LocalDate locald = dateModif.getValue();
        Date date1 = Date.valueOf(locald); // Magic happens here!
        f.setDate(date1);
        try {
            String x = ratingModif.getText().substring(0, ratingModif.getText().indexOf("."));
            System.out.println(x);
            f.setRating(Integer.parseInt(x));
        } catch (NumberFormatException ex) { // handle your exception

        }
        if (!sujet.getText().equals("") && !commentaire.getText().equals("")) {
            cf.modifierFeedback(f);
            tabParent.getSelectionModel().select(tabAffichage);

        } else {
            JOptionPane.showMessageDialog(null, " Vous devez remplir tous les champs ");

        }

    }

    @FXML
    private void RechercherFeedback(KeyEvent event) {
        CrudFeedback cf = new CrudFeedback();

        cf.recherche(affichageFeedback, idRecherche.getText());

    }

    @FXML
    private void EnvoyerMail(ActionEvent event) throws MessagingException {
        sendMailComfirmation sm = new sendMailComfirmation(Destinataire.getText(), mail.getText());

    }

    @FXML
    private void gotoAjoutComm(ActionEvent event) {
        tabParent.getSelectionModel().select(tabAjout);

    }

    @FXML
    private void gotoMap(ActionEvent event) throws SQLException {
        tabParent.getSelectionModel().select(tabLocalisation);
        CrudFeedback cf = new CrudFeedback();
        ResultSet rs = cf.findTrajet(idTrajet);
        villesIntermediairesTA.setText(rs.getString("destination"));

    }

    @FXML
    private void gotoAffficherEvt(ActionEvent event) {
        tabParent.getSelectionModel().select(tabEvt);

    }

    @FXML
    private void gotoAfficherCadeau(ActionEvent event) {
        tabParent.getSelectionModel().select(tabCadeau);

    }

    @FXML
    private void RecupererIdTrajet(MouseEvent event) {

        sujet.setVisible(true);
        id.setVisible(true);
        date.setVisible(true);
        commentaire.setVisible(true);
        ratinghbox.setVisible(true);
        LabelSujet.setVisible(true);
        labelMembre.setVisible(true);
        LabelDate.setVisible(true);
        labelRating.setVisible(true);
        LabelCommentaire.setVisible(true);

        String valeur = TrajetTV.getSelectionModel().getSelectedItems().get(0).toString();
        // DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        idTrajet = valeur.substring(1, valeur.indexOf(","));

    }

    @FXML
    private void gotoAfficherCommentaires(ActionEvent event) {
        tabParent.getSelectionModel().select(tabAffichage);
    }

    @FXML
    private void gotoStat(ActionEvent event) {
        tabParent.getSelectionModel().select(tabStat);

    }

    private void stat() throws SQLException {

        statFeed.getData().clear();

        CrudFeedback U = new CrudFeedback();
        ResultSet rss;
        int note1 = 0;
        int note2 = 0;
        int note3 = 0;
        int note4 = 0;
        int note5 = 0;

        rss = U.getStatRate();
        while (rss.next()) {
            switch (Integer.parseInt(rss.getString("rating"))) {
                case 0:
                    break;
                case 1:
                    note1++;
                    System.out.println("spm::" + note1);
                    break;
                case 2:
                    note2++;
                    System.out.println("ds::" + note2);
                    break;
                case 3:
                    note3++;
                    System.out.println("psm::" + note3);
                    break;
                case 4:
                    note4++;
                    System.out.println("rm::" + note4);
                    break;
                case 5:
                    note5++;
                    System.out.println("5 etoiles::" + note5);
                    break;
            }
        }
        ObservableList<PieChart.Data> pieChartData
                = FXCollections.observableArrayList(
                        new PieChart.Data("une étoile", note1),
                        new PieChart.Data("Deux étoiles", note2),
                        new PieChart.Data("trois etoiles", note3),
                        new PieChart.Data("quatre etoiles", note4),
                        new PieChart.Data("cinq etoiles", note5));
        statFeed.getData().addAll(pieChartData);

        // final PieChart chart = new PieChart(pieChartData);
        //chart.setTitle("Imported Pink");
    }

    @FXML
    private void gotoAccueil(ActionEvent event) {
        tabParent.getSelectionModel().select(tabAccueil);
    }

    @FXML
    private void clearVilles(ActionEvent event) {
        villesIntermediairesTA.setText("");
    }

    @FXML
    private void rechercherEvt(KeyEvent event) {
        CrudEvenement cf = new CrudEvenement();

        cf.recherche(tableEvt, rechercheEvtTF.getText());

    }

    @FXML
    private void rechercherCadeau(KeyEvent event) {
        CrudCadeau cc = new CrudCadeau();
        cc.recherche(tableCadeau, rechercheCadTF.getText());
    }

    @FXML
    private void setDestinationModifiee(ActionEvent event) throws SQLException {
        CrudFeedback cf = new CrudFeedback();
        String valeur = TrajetTV.getSelectionModel().getSelectedItems().get(0).toString();
        // DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        idTrajet = valeur.substring(1, valeur.indexOf(","));
        cf.modifierTrajet(idTrajet, villesIntermediairesTA.getText());

    }

}
