/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.jfoenix.controls.JFXButton;
import java.io.IOException;
import java.net.URL;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.input.MouseEvent;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Optional;
import java.util.Properties;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.layout.AnchorPane;
import javafx.util.Callback;
import services.ServiceDemandeLocation;
import assets.MyConnection;
import javafx.collections.FXCollections;
import javafx.geometry.Pos;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.stage.Stage;
import javafx.util.Duration;
import javax.mail.BodyPart;
import javax.mail.Message;
import javax.mail.MessagingException;
import javax.mail.Multipart;
import javax.mail.Session;
import javax.mail.Transport;
import javax.mail.internet.InternetAddress;
import javax.mail.internet.MimeBodyPart;
import javax.mail.internet.MimeMessage;
import javax.mail.internet.MimeMultipart;
import org.controlsfx.control.Notifications;
import modal.DemandeLocation;

public class EspaceResponsableController implements Initializable {

    @FXML
    private AnchorPane backgroundPane;

    @FXML
    private JFXButton GestionLocation;
    @FXML
    private Button btn;

    @FXML
    private AnchorPane CoprsProjet;

    @FXML
    private TableView tableDemande;

    @FXML
    private TableColumn locataire;

    @FXML
    private TableColumn voiture;
    @FXML
    private TableColumn confirm;
    @FXML
    private TableColumn accept;

    @FXML
    private TableColumn dd;

    @FXML
    private TableColumn df;

    @FXML
    private TableColumn etat;

    @FXML
    private TableColumn decision;

    @FXML
    private ImageView close;

    @FXML
    private ImageView reduce;

//////////
    private ObservableList<DemandeLocation> data;
    private MyConnection dc;
    // ChoiceBox cb = new ChoiceBox(FXCollections.observableArrayList(
    //  "En Attente", "Acceptée", "Refusée"));

    private ServiceDemandeLocation serviceDemandeLocation = new ServiceDemandeLocation();

    /**
     * Initializes the controller class.
     *
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO

        dc = new MyConnection();
        try {
            loadDataFromDB();
        } catch (SQLException ex) {
            Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    private void loadDataFromDB() throws SQLException {
        Connection conn = dc.etablirConnection();

        data = FXCollections.observableArrayList();
        ResultSet rs = conn.createStatement().executeQuery("SELECT * FROM demande_location");
        while (rs.next()) {
            data.add(new DemandeLocation(rs.getInt(1), rs.getString(3), rs.getString(4), rs.getDate(5), rs.getDate(6), rs.getString(7)));
        }

        voiture.setCellValueFactory(new PropertyValueFactory<>("nom_location"));
        locataire.setCellValueFactory(new PropertyValueFactory<>("nom_membre"));
        dd.setCellValueFactory(new PropertyValueFactory<>("date_debut"));
        df.setCellValueFactory(new PropertyValueFactory<>("date_fin"));
        etat.setCellValueFactory(new PropertyValueFactory<>("etat"));
        
        Callback<TableColumn<DemandeLocation, String>, TableCell<DemandeLocation, String>> cellFactoryS
                = //
                new Callback<TableColumn<DemandeLocation, String>, TableCell<DemandeLocation, String>>() {
            @Override
            public TableCell call(final TableColumn<DemandeLocation, String> param) {
                final TableCell<DemandeLocation, String> cell = new TableCell<DemandeLocation, String>() {

                    final Button btn = new Button("Supprimer");

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else {
                            btn.setOnAction((ActionEvent event) -> {

                                Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
                                alert.setTitle("Supression");
                                alert.setHeaderText("confirmation de suppression");
                                alert.setContentText("voulez vous vraiment supprimer la demande de location?");
                                Optional<ButtonType> result = alert.showAndWait();

                                if (result.get() == ButtonType.OK) {

                                    System.out.println(getTableView().getItems().get(getIndex()).getId() + "------");

                                    serviceDemandeLocation.deleteDemandeLocation(getTableView().getItems().get(getIndex()).getId());

                                    alert = new Alert(Alert.AlertType.INFORMATION);
                                    alert.setTitle("Information Dialog");
                                    alert.setHeaderText(null);
                                    alert.setContentText("demande de location supprimée");

                                }
                                try {
                                    loadDataFromDB();
                                } catch (SQLException ex) {
                                    Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
                                }
                            });
                            setGraphic(btn);
                            setText(null);
                        }
                    }
                };
                return cell;
            }
        };

        Callback<TableColumn<DemandeLocation, String>, TableCell<DemandeLocation, String>> cellFactory
                = //
                new Callback<TableColumn<DemandeLocation, String>, TableCell<DemandeLocation, String>>() {
            @Override
            public TableCell call(final TableColumn<DemandeLocation, String> param) {
                final TableCell<DemandeLocation, String> cell = new TableCell<DemandeLocation, String>() {

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        //DemandeLocation aa = getTableView().getItems().get(getIndex());
                        Button btn = new Button("Refuser");

                        String s1 = "Refusée";
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else {
                            btn.setOnAction((ActionEvent event) -> {

                                Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
                                alert.setTitle("Confirmation");
                                alert.setHeaderText("confirmation de Refus");
                                alert.setContentText("voulez vous vraiment envoyer un mail de Refus au locataire?");
                                Optional<ButtonType> result = alert.showAndWait();

                                if (result.get() == ButtonType.OK) {

                                    DemandeLocation a = getTableView().getItems().get(getIndex());
                                    System.out.println(btn.getText());
                                    serviceDemandeLocation.ModifierDemandeLocation1(a, s1);
                                    etat.setCellValueFactory(new PropertyValueFactory<>("etat"));
                                    try {
                                        loadDataFromDB();
                                    } catch (SQLException ex) {
                                        Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
                                    }
                                    // Recipient's email ID needs to be mentioned.
                                    String to = "ameni.benrhouma@esprit.tn";

                                    // Sender's email ID needs to be mentioned
                                    String from = "ameni.benrhouma@esprit.com";

                                    final String username = "ameni.benrhouma@esprit.tn";
                                    final String password = "";

                                    // Assuming you are sending email through relay.jangosmtp.net
                                    String host = "smtp.gmail.com";

                                    Properties props = new Properties();
                                    props.put("mail.smtp.auth", "true");
                                    props.put("mail.smtp.starttls.enable", "true");
                                    props.put("mail.smtp.host", host);
                                    props.put("mail.smtp.port", "587");

                                    // Get the Session object.
                                    Session session = Session.getInstance(props, new javax.mail.Authenticator() {
                                        protected javax.mail.PasswordAuthentication getPasswordAuthentication() {
                                            return new javax.mail.PasswordAuthentication(username, password);
                                        }
                                    });

                                    try {
                                        // Create a default MimeMessage object.
                                        Message message = new MimeMessage(session);

                                        // Set From: header field of the header.
                                        message.setFrom(new InternetAddress(from));

                                        // Set To: header field of the header.
                                        message.setRecipients(Message.RecipientType.TO,
                                                InternetAddress.parse(to));

                                        // Set Subject: header field
                                        message.setSubject("Demande de location Refusée");

                                        // Create the message part
                                        BodyPart messageBodyPart = new MimeBodyPart();

                                        // Create a multipar message
                                        Multipart multipart = new MimeMultipart();

                                        // Set text message part
                                        multipart.addBodyPart(messageBodyPart);
                                        messageBodyPart.setText("Nous sommes desolés, votre demande de location est refusée");
                                        messageBodyPart.setHeader("Content-Type", "text/plain; charset=\"us-ascii\"; name=\"mail.txt\"");

                                        // Part two is attachment
                                        message.setText("ok");

                                        // Send the complete message parts
                                        message.setContent(multipart);

                                        // Send message
                                        Transport.send(message);

                                        System.out.println("Sent message successfully....");

                                    } catch (MessagingException e) {
                                        throw new RuntimeException(e);
                                    }

                                    alert = new Alert(Alert.AlertType.INFORMATION);
                                    alert.setTitle("Information");
                                    alert.setHeaderText(null);
                                    alert.setContentText("votre Mail est envoyé avec succées");

                                }

                                tableDemande.setItems(null);
                                tableDemande.setItems(data);
                                tableDemande.refresh();

                            });
                            setGraphic(btn);
                            setText(null);

                        }
                    }
                };
                return cell;
            }
        };
        Callback<TableColumn<DemandeLocation, String>, TableCell<DemandeLocation, String>> cellFactoryA
                = //
                new Callback<TableColumn<DemandeLocation, String>, TableCell<DemandeLocation, String>>() {
            @Override
            public TableCell call(final TableColumn<DemandeLocation, String> param) {
                final TableCell<DemandeLocation, String> cell = new TableCell<DemandeLocation, String>() {

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        Button btn = new Button("Accepter");
                        String s1 = "Acceptée";
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else {
                            btn.setOnAction((ActionEvent event) -> {
                                Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
                                alert.setTitle("Confirmation");
                                alert.setHeaderText("confirmation d'acceptation");
                                alert.setContentText("voulez vous vraiment envoyer un mail de confirmation au locataire?");
                                Optional<ButtonType> result = alert.showAndWait();

                                if (result.get() == ButtonType.OK) {

                                    DemandeLocation a = getTableView().getItems().get(getIndex());
                                    System.out.println(btn.getText());
                                    serviceDemandeLocation.ModifierDemandeLocation1(a, s1);
                                    etat.setCellValueFactory(new PropertyValueFactory<>("etat"));
                                    try {
                                        loadDataFromDB();
                                    } catch (SQLException ex) {
                                        Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
                                    }
                                    // Recipient's email ID needs to be mentioned.
                                    String to = "ameni.benrhouma@esprit.tn";

                                    // Sender's email ID needs to be mentioned
                                    String from = "ameni.benrhouma@esprit.com";

                                    final String username = "ameni.benrhouma@esprit.tn";
                                    final String password = "";

                                    // Assuming you are sending email through relay.jangosmtp.net
                                    String host = "smtp.gmail.com";

                                    Properties props = new Properties();
                                    props.put("mail.smtp.auth", "true");
                                    props.put("mail.smtp.starttls.enable", "true");
                                    props.put("mail.smtp.host", host);
                                    props.put("mail.smtp.port", "587");

                                    // Get the Session object.
                                    Session session = Session.getInstance(props, new javax.mail.Authenticator() {
                                        protected javax.mail.PasswordAuthentication getPasswordAuthentication() {
                                            return new javax.mail.PasswordAuthentication(username, password);
                                        }
                                    });

                                    try {
                                        // Create a default MimeMessage object.
                                        Message message = new MimeMessage(session);

                                        // Set From: header field of the header.
                                        message.setFrom(new InternetAddress(from));

                                        // Set To: header field of the header.
                                        message.setRecipients(Message.RecipientType.TO,
                                                InternetAddress.parse(to));

                                        // Set Subject: header field
                                        message.setSubject("Reservation effectué");

                                        // Create the message part
                                        BodyPart messageBodyPart = new MimeBodyPart();

                                        // Create a multipar message
                                        Multipart multipart = new MimeMultipart();

                                        // Set text message part
                                        multipart.addBodyPart(messageBodyPart);
                                        messageBodyPart.setText("votre demande de location est accepté , vous pouvez confirmer votre reservation"
                                                + "en payant dans dans le site, sinon vous pouvez nous joindre dans notre agence :) ");
                                        messageBodyPart.setHeader("Content-Type", "text/plain; charset=\"us-ascii\"; name=\"mail.txt\"");

                                        // Part two is attachment
                                        message.setText("okk");

                                        // Send the complete message parts
                                        message.setContent(multipart);

                                        // Send message
                                        Transport.send(message);

                                        System.out.println("Sent message successfully....");

                                    } catch (MessagingException e) {
                                        throw new RuntimeException(e);
                                    }

                                    alert = new Alert(Alert.AlertType.INFORMATION);
                                    alert.setTitle("Information");
                                    alert.setHeaderText(null);
                                    alert.setContentText("votre Mail de confirmation est envoyé avec succées");

                                }

                                tableDemande.setItems(null);
                                tableDemande.setItems(data);
                                tableDemande.refresh();

                            });
                            setGraphic(btn);
                            setText(null);

                        }
                    }
                };
                return cell;
            }
        };
        accept.setCellFactory(cellFactoryA);
        confirm.setCellFactory(cellFactory);
        decision.setCellFactory(cellFactoryS);
        tableDemande.setItems(null);
        tableDemande.setItems(data);

    }

    @FXML
    void GestonLocation(ActionEvent event) throws IOException {
        Parent page = FXMLLoader.load(getClass().getResource("/view/LocationResponsable.fxml"));
        Scene scene = new Scene(page);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();

    }

    @FXML
    void closeAction(MouseEvent event) {
        Stage stage = (Stage) close.getScene().getWindow();
        stage.close();
    }

    @FXML
    void reduceAction(MouseEvent event) {
        Stage stage = (Stage) reduce.getScene().getWindow();
        stage.close();
    }



}
