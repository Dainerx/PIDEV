/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

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
import modal.sendMailComfirmation;
import services.CrudFeedback;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXComboBox;
import com.jfoenix.controls.JFXDatePicker;
import com.jfoenix.controls.JFXTextArea;
import com.jfoenix.controls.JFXTextField;
import com.lynden.gmapsfx.GoogleMapView;
import com.lynden.gmapsfx.MapComponentInitializedListener;
import com.lynden.gmapsfx.javascript.event.UIEventType;
import com.lynden.gmapsfx.javascript.object.Animation;
import com.lynden.gmapsfx.javascript.object.LatLong;
import com.lynden.gmapsfx.javascript.object.MapOptions;
import com.lynden.gmapsfx.javascript.object.MapTypeIdEnum;
import com.lynden.gmapsfx.javascript.object.Marker;
import com.lynden.gmapsfx.javascript.object.MarkerOptions;
import com.lynden.gmapsfx.service.directions.DirectionStatus;
import com.lynden.gmapsfx.service.directions.DirectionsResult;
import com.lynden.gmapsfx.util.MarkerImageFactory;
import modal.Cadeau;
import modal.Evenement;
import modal.Feedback;
import modal.Membre;
import services.CrudCadeau;
import services.CrudEvenement;
import services.CrudFeedback;
import java.awt.image.BufferedImage;
import java.io.BufferedReader;
import java.io.ByteArrayInputStream;
import java.io.File;
import java.io.FileInputStream;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.io.IOException;
import java.io.InputStream;
import java.io.InputStreamReader;
import java.io.OutputStream;
import java.net.HttpURLConnection;
import java.net.MalformedURLException;
import java.net.URL;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.Locale;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.embed.swing.SwingFXUtils;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Point3D;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Tab;
import javafx.scene.control.TabPane;
import javafx.scene.control.TableView;
import javafx.scene.image.Image;
import javafx.scene.image.ImageView;
import javafx.scene.image.WritableImage;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.scene.layout.BorderPane;
import javafx.stage.FileChooser;
import javafx.stage.Window;
import javax.imageio.ImageIO;
import javax.mail.MessagingException;
import javax.swing.JOptionPane;
import netscape.javascript.JSObject;

/**
 * FXML Controller class
 *
 * @author k4
 */
public class FXMLBackController implements Initializable, MapComponentInitializedListener, DirectionsServiceCallback {

    /**
     * Initializes the controller class.
     */
    protected GoogleMapView mapComponent;
    private GoogleMap map;
    
    int count = 0;
    
    private FileChooser fileChooser;
    private File file;
    private Image image;
    private FileInputStream fis;
    private int length;
    int img2;
    FileInputStream fis2;
    int img3;
    FileInputStream fis3;
    
    @FXML
    private JFXButton supprimerFeedback;
    @FXML
    private TableView<?> affichageTable;
    @FXML
    private JFXTextField idRecherche;
    
    private String idModification;
    private String idCadeauPhoto;
    @FXML
    private Tab gestionFeedTab;
    @FXML
    private Tab gestionEvtTab;
    @FXML
    private JFXTextField libelleEvtTF;
    @FXML
    private JFXDatePicker dateEvtPick;
    @FXML
    private JFXTextArea descriptionEvtTA;
    @FXML
    private JFXButton buttonAjouterEvt;
    @FXML
    private TableView<?> afficherEvtTV;
    @FXML
    private JFXTextField searchEvtTF;
    @FXML
    private JFXTextField lieuEvtTF;
    @FXML
    private Tab TabLieu;
    @FXML
    private BorderPane map_container;
    @FXML
    private TabPane tabParent;
    @FXML
    private JFXButton buttonModifEvt;
    @FXML
    private Tab TabCadeau;
    @FXML
    private JFXTextField libelleCadeauTF;
    @FXML
    private ImageView displayCadeauIV;
    @FXML
    private AnchorPane owner;
    @FXML
    private JFXTextField photoTF;
    @FXML
    private Tab tabHistoriqueCadeau;
    @FXML
    private TableView<?> affichageCadeauxTV;
    @FXML
    private ImageView imageviewDetailsCadeau;
    @FXML
    private JFXTextField libelleDetTF;
    @FXML
    private JFXTextField membreDetTF;
    private JFXTextField membreCadeauModifTF;
    @FXML
    private JFXTextField libelleCadeauModifTF;
    @FXML
    private JFXTextField photoModifTF;
    @FXML
    private ImageView displayCadeauIV1;
    @FXML
    private Tab tabModifCad;
    private Membre m = new Membre(1, "Ghliss", "khaoula", "loulou", "loulou", "khaoula.ghliss@esprit.tn");
    @FXML
    private JFXComboBox<String> CBmembreCadeau;
    @FXML
    private JFXTextArea mailTA;
    @FXML
    private JFXTextField DestinataireTF;
    @FXML
    private Tab tabMail;
    @FXML
    private JFXComboBox<String> CBmembreEdit;
    @FXML
    private PieChart statFeed;
    @FXML
    private Tab tabAccueil;
    @FXML
    private JFXButton gotoStat;
    @FXML
    private Tab tabStat;

    /**
     * Initializes the controller class.
     */
    @FXML
    private void recupererId(MouseEvent event) {
        
        System.out.println("in recup");
        CrudFeedback cf = new CrudFeedback();
        System.out.println("in recup2");
        String valeur = affichageTable.getSelectionModel().getSelectedItems().get(0).toString();
        // DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        idModification = valeur.substring(1, valeur.indexOf(","));
        
        System.out.println("in recup3");
        
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        CrudFeedback cf = new CrudFeedback();
        cf.AfficherTableFeedback(affichageTable);
        
        photoTF.setEditable(false);
        
        CrudEvenement ce = new CrudEvenement();
        ce.AfficherTable(afficherEvtTV);
        
        CrudCadeau cc = new CrudCadeau();
        cc.AfficherTable(affichageCadeauxTV);
        
        mapComponent = new GoogleMapView(Locale.getDefault().getLanguage(), null);
        mapComponent.addMapInializedListener((MapComponentInitializedListener) this);
        map_container.setCenter(mapComponent);
        
        //
        try {
            ObservableList<String> row = FXCollections.observableArrayList();
            
            ResultSet rss = cc.FindMembres();
            while (rss.next()) {
                //preparation de ligne
                row.add(rss.getString("username"));
                System.out.println("Row [1] added " + row);
            }
            CBmembreCadeau.setItems(FXCollections.observableArrayList(row));
            
        } catch (SQLException ex) {
        }
        try {
            stat();
        } catch (SQLException ex) {
            Logger.getLogger(FXMLBackController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
          libelleEvtTF.textProperty().addListener(new ChangeListener<String>() {
        @Override
        public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
            if (!newValue.matches("[qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]")) {
                libelleEvtTF.setText(newValue.replaceAll("[^qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]", ""));
            }
        }
    });
          
        
          
              libelleCadeauModifTF.textProperty().addListener(new ChangeListener<String>() {
        @Override
        public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
            if (!newValue.matches("[qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]")) {
                libelleCadeauModifTF.setText(newValue.replaceAll("[^qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]", ""));
            }
        }
    });
                    libelleCadeauTF.textProperty().addListener(new ChangeListener<String>() {
        @Override
        public void changed(ObservableValue<? extends String> observable, String oldValue, String newValue) {
            if (!newValue.matches("[qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]")) {
                libelleCadeauTF.setText(newValue.replaceAll("[^qwertyuiopasdfghjklzxcvbnmQWERTYUIOPASDFGHJKLZXCVBNMèéòàùìêîûç]", ""));
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
            lieuEvtTF.setText(str);
            tabParent.getSelectionModel().select(gestionEvtTab);
            
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
    private void rechercher(KeyEvent event) {
        CrudFeedback cf = new CrudFeedback();
        
        cf.recherche(affichageTable, idRecherche.getText());
    }
    
    @FXML
    private void supprimerFeedback(ActionEvent event) {
        
        CrudFeedback cf = new CrudFeedback();
        
        cf.supprimerFeedback(idModification);
        cf.AfficherTableFeedback(affichageTable);
        
    }
    
    @FXML
    private void AjouterEvt(ActionEvent event) {
        CrudEvenement ce = new CrudEvenement();
        Evenement e = new Evenement();
        e.setLibelle(libelleEvtTF.getText());
        e.setDescription(descriptionEvtTA.getText());
        e.setLieu(lieuEvtTF.getText());
       
        if (!libelleEvtTF.getText().equals("") && !descriptionEvtTA.getText().equals("") && !lieuEvtTF.getText().equals("") && dateEvtPick.getValue() != null) {
           
            if (Date.valueOf(dateEvtPick.getValue()).compareTo(new Date(System.currentTimeMillis())) > 0) {
            System.out.println("date Valide");
            e.setDate(Date.valueOf(dateEvtPick.getValue()));
             ce.ajouterEvenement(e);
            ce.AfficherTable(afficherEvtTV);

        } else {
            JOptionPane.showMessageDialog(null, " la date doit etre ulterieure a la date actuelle ");
        }
            
        } else {
            
            JOptionPane.showMessageDialog(null, " Vous devez remplir tous les champs ");
            
        }


    }
    
    @FXML
    private void gotoMap(MouseEvent event) {
        tabParent.getSelectionModel().select(TabLieu);
        
    }
    
    @FXML
    private void recupererIdEvt(MouseEvent event) {
        
        CrudEvenement ce = new CrudEvenement();
        String valeur = afficherEvtTV.getSelectionModel().getSelectedItems().get(0).toString();
        // DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        idModification = valeur.substring(1, valeur.indexOf(","));        
        
    }
    
    @FXML
    private void supprimerEvt(ActionEvent event) {
        
        CrudEvenement ce = new CrudEvenement();
        ce.supprimerEvenement(idModification);
        // afficherEvtTV.getColumns().clear();
        ce.AfficherTable(afficherEvtTV);
        
    }
    
    @FXML
    private void modifierEvt(ActionEvent event) throws SQLException {
        
        CrudEvenement ce = new CrudEvenement();
        
        ResultSet rs = ce.findById(idModification);
        
        libelleEvtTF.setText(rs.getString("libelle"));
        lieuEvtTF.setText(rs.getString("lieu"));
        descriptionEvtTA.setText(rs.getString("description"));
        dateEvtPick.setValue(ce.fromDate(rs.getDate("date")));
        
    }
    
    @FXML
    private void NouvelEvt(ActionEvent event) {
        libelleEvtTF.setText("");
        lieuEvtTF.setText("");
        descriptionEvtTA.setText("");
        dateEvtPick.setValue(LocalDate.now());
    }
    
    @FXML
    private void enregistrerModifEvt(ActionEvent event) throws SQLException {
        CrudEvenement ce = new CrudEvenement();
        Evenement e = new Evenement();
        e.setLibelle(libelleEvtTF.getText());
        e.setDescription(descriptionEvtTA.getText());
        e.setLieu(lieuEvtTF.getText());
        
        e.setDate(Date.valueOf(dateEvtPick.getValue()));
        
        
        if (!libelleEvtTF.getText().equals("") && !descriptionEvtTA.getText().equals("") && !lieuEvtTF.getText().equals("") && dateEvtPick.getValue() != null){
           
             if (Date.valueOf(dateEvtPick.getValue()).compareTo(new Date(System.currentTimeMillis())) > 0) {
            System.out.println("date Valide");
            e.setDate(Date.valueOf(dateEvtPick.getValue()));
        ce.modifierEvenement(e);
            ce.AfficherTable(afficherEvtTV);

        } else {
            JOptionPane.showMessageDialog(null, " la date doit etre ulterieure a la date actuelle ");
        }
            
        } else {
            
            JOptionPane.showMessageDialog(null, " Vous devez remplir tous les champs ");
            
        }
        
        
        
        
    }
    
    @FXML
    private void browsePhoto(ActionEvent event) throws IOException {
        
        fileChooser = new FileChooser();
        
        file = fileChooser.showOpenDialog(null);
        if (file != null) {
            photoTF.setText(file.getAbsolutePath());
            BufferedImage bufferedImage = ImageIO.read(file);
            WritableImage image = SwingFXUtils.toFXImage(bufferedImage, null);
            displayCadeauIV.setImage(image);
            File image2 = new File(photoTF.getText());
            
            fis2 = new FileInputStream(image2);
            img2 = (int) image2.length();
            
        } else {
            System.out.println("choose correctly");
        }
        
    }
    
    @FXML
    private void AffecterCadeau(ActionEvent event) throws FileNotFoundException, IOException, SQLException {
        CrudCadeau cc = new CrudCadeau();
        ResultSet rs = cc.FindMembresId(CBmembreCadeau.getValue());
        m = new Membre(Integer.parseInt(rs.getString("id")));
        Cadeau c = new Cadeau(m, libelleCadeauTF.getText());
        if (!libelleCadeauTF.getText().equals("") && !photoTF.getText().equals("")){
            cc.ajouterCadeau(c, fis2, img2);
            cc.modifierPoints(rs.getString("id"));
         } else {
            
            JOptionPane.showMessageDialog(null, " Vous devez remplir tous les champs ");
            
        }   
            
        System.out.println("hey");
        
        System.out.println("in affect");
        
    }
    
    @FXML
    private void ConsulterCadeaux(ActionEvent event) {
        
        tabParent.getSelectionModel().select(tabHistoriqueCadeau);
        
    }
    
    @FXML
    private void AfficherDetailCadeau(MouseEvent event) throws SQLException, FileNotFoundException, IOException {
        CrudCadeau ce = new CrudCadeau();
        String valeur = affichageCadeauxTV.getSelectionModel().getSelectedItems().get(0).toString();
        // DateTimeFormatter formatter = DateTimeFormatter.ofPattern("dd-MM-yyyy");
        idCadeauPhoto = valeur.substring(1, valeur.indexOf(","));        
        
        ResultSet rs = ce.findById(idCadeauPhoto);
        InputStream is = rs.getBinaryStream("photo");
        OutputStream os = new FileOutputStream(new File("photo.jpg"));
        byte[] content = new byte[1024];
        int size = 0;
        while ((size = is.read(content)) != -1) {
            os.write(content, 0, size);
        }
        os.close();
        is.close();
        
        Image img = new Image("file:photo.jpg", 100, 150, true, true);
        
        imageviewDetailsCadeau.setImage(img);
        
        libelleDetTF.setText(rs.getString("libelle"));
        membreDetTF.setText(rs.getString("id_membre"));

        //libelleEvtTF.setText(rs.getString("libelle"));
    }
    
    @FXML
    private void ModifierCadeau(ActionEvent event) throws SQLException {
        CrudCadeau cc = new CrudCadeau();
        try {
            ObservableList<String> row = FXCollections.observableArrayList();
            
            ResultSet rss = cc.FindMembres();
            while (rss.next()) {
                //preparation de ligne
                row.add(rss.getString("username"));
                System.out.println("Row [1] added " + row);
            }
            CBmembreEdit.setItems(FXCollections.observableArrayList(row));
            
        } catch (SQLException ex) {
        }
        
        
        
        
        ResultSet rs = cc.findById(idCadeauPhoto);

        
        libelleCadeauModifTF.setText(rs.getString("libelle"));
        photoModifTF.setText(rs.getString("photo"));
        tabParent.getSelectionModel().select(tabModifCad);
        
    }
    
    @FXML
    private void enregistrerModifCadeau(ActionEvent event) throws SQLException {
        CrudCadeau ce = new CrudCadeau();
        Cadeau c = new Cadeau();
        //  c.setId_membre(Integer.parseInt(membreCadeauModifTF.getText()));
        c.setLibelle(libelleCadeauModifTF.getText());
        c.setId(Integer.parseInt(idCadeauPhoto));
        ResultSet rs = ce.FindMembresId(CBmembreEdit.getValue());
        
        if (!libelleCadeauModifTF.getText().equals("") &&!photoModifTF.getText().equals("")){
            m = new Membre(Integer.parseInt(rs.getString("id")));
        c.setM(m);
        ce.ModifierCadeau(c, fis3, img3);
         } else {
            
            JOptionPane.showMessageDialog(null, " Vous devez remplir tous les champs ");
            
        }   
        
        tabParent.getSelectionModel().select(tabHistoriqueCadeau);
        affichageCadeauxTV.getItems().clear();
        ce.AfficherTable(affichageCadeauxTV);
        
    }
    
    @FXML
    private void browsePhoto2(ActionEvent event) throws FileNotFoundException, IOException {
        
        fileChooser = new FileChooser();
        
        file = fileChooser.showOpenDialog(null);
        if (file != null) {
            photoModifTF.setText(file.getAbsolutePath());
            BufferedImage bufferedImage = ImageIO.read(file);
            WritableImage image = SwingFXUtils.toFXImage(bufferedImage, null);
            displayCadeauIV.setImage(image);
            File image2 = new File(photoModifTF.getText());
            
            fis3 = new FileInputStream(image2);
            img3 = (int) image2.length();
            
        } else {
            System.out.println("choose correctly");
        }
        
    }
    
    @FXML
    private void supprimerCadeau(ActionEvent event) {
        CrudCadeau cf = new CrudCadeau();
        
        cf.supprimerCadeay(idCadeauPhoto);
        cf.AfficherTable(affichageCadeauxTV);
        
    }
    
    @FXML
    private void EnvoyerMailCadeau(ActionEvent event) throws SQLException {
        
        tabParent.getSelectionModel().select(tabMail);
        CrudCadeau cc = new CrudCadeau();
        ResultSet rs = cc.FindMembresId(CBmembreCadeau.getValue());
        DestinataireTF.setText("to : " + rs.getString("email"));
        mailTA.setText("Félicitation " + rs.getString("username") + " " + rs.getString("nom") + " vous avez un cadeau ");
    }
    
    @FXML
    private void EnvoyerMail(ActionEvent event) throws MessagingException, SQLException {
        CrudCadeau cc = new CrudCadeau();
        
        ResultSet rs = cc.FindMembresId(CBmembreCadeau.getValue());
        
        sendMailComfirmation sm = new sendMailComfirmation("khaoula.ghliss@esprit.tn", mailTA.getText());
        
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
    private void gotoFeed(ActionEvent event) {
                tabParent.getSelectionModel().select(gestionFeedTab);

    }

    @FXML
    private void gotoEvt(ActionEvent event) {
                tabParent.getSelectionModel().select(gestionEvtTab);

    }

    @FXML
    private void gotoLieu(ActionEvent event) {
                tabParent.getSelectionModel().select(TabLieu);

    }

    @FXML
    private void gotoCadeau(ActionEvent event) {
                tabParent.getSelectionModel().select(TabCadeau);

    }

    @FXML
    private void gotoHistorique(ActionEvent event) {
                tabParent.getSelectionModel().select(tabHistoriqueCadeau);

    }

    @FXML
    private void gotoCadeauEdit(ActionEvent event) {
                tabParent.getSelectionModel().select(tabModifCad);

    }

    @FXML
    private void gotoMailCadeau(ActionEvent event) {
                tabParent.getSelectionModel().select(tabMail);

    }

    @FXML
    private void gotoStat(ActionEvent event) {
                tabParent.getSelectionModel().select(tabStat);

    }

    @FXML
    private void rechercherEvt(KeyEvent event) {
        CrudEvenement cf = new CrudEvenement();
        
        cf.recherche(afficherEvtTV,searchEvtTF.getText());
    }
    
}
