/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.jfoenix.controls.JFXButton;
import com.jfoenix.controls.JFXTextField;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.Optional;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.chart.PieChart;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ButtonType;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.TextField;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.input.KeyEvent;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javafx.util.Callback;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;
import modal.Location;
import modal.Vehicule;
import services.ServiceLocation;
import assets.MyConnection;

/**
 * FXML Controller class
 *
 * @author Ameni
 */
public class LocationResponsable implements Initializable {

    @FXML
    private AnchorPane backgroundPane;
    @FXML
    private JFXButton EspaceResponsable;
    @FXML
    private AnchorPane CoprsProjet;
    @FXML
    private TableView tabLocation;
    @FXML
    private TableColumn id_location;
    @FXML
    private TableColumn cout;
    @FXML
    private TableColumn disponibilite;
    @FXML
    private TableColumn marque;
    @FXML
    private TableColumn modele;

    @FXML
    private TableColumn supprimerColumn;
    @FXML
    private AnchorPane zone_statisque_medecin;
    @FXML
    private PieChart graph_stat_medecin;

    @FXML
    private Button ajLocation;

    @FXML
    private Button modifLocation;
    @FXML
    private Hyperlink clear;
    @FXML
    private JFXTextField labelVehicule;

    @FXML
    private JFXTextField labelCout;

    @FXML
    private JFXTextField labelDispo;

    @FXML
    private JFXTextField labelMarque;

    @FXML
    private JFXTextField labelModele;

    private AnchorPane CoprsProjet1;
    @FXML
    private ImageView close;
    @FXML
    private ImageView reduce;
    @FXML
    private TableColumn ModifierColumn;
    @FXML
    private TableView tabVehicule;

    @FXML
    private TableColumn matColumn;

    @FXML
    private TableColumn marColumn;

    @FXML
    private TableColumn modColumn;

    @FXML
    private TableColumn selectColumn;

    private ObservableList<Vehicule> data2;
    private ObservableList<Location> data;
    private MyConnection dc;

    private ServiceLocation servicelocation = new ServiceLocation();
    private static int i = 0;

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
            loadDataFromDB2();
        } catch (SQLException ex) {
            Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            loadDataFromDB();
        } catch (SQLException ex) {
            Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }

    }

    private void loadDataFromDB() throws SQLException {
        Connection conn = dc.etablirConnection();

        data = FXCollections.observableArrayList();
        ResultSet rs = conn.createStatement().executeQuery("SELECT * FROM `offre_location`");
        while (rs.next()) {
            data.add(new Location(rs.getInt(1), rs.getFloat(3), rs.getString(4), rs.getString(5), rs.getString(6)));
        }

        // id_location.setCellValueFactory(new PropertyValueFactory<>("id"));
        cout.setCellValueFactory(new PropertyValueFactory<>("cout"));
        disponibilite.setCellValueFactory(new PropertyValueFactory<>("offre"));
        marque.setCellValueFactory(new PropertyValueFactory<>("marque"));
        modele.setCellValueFactory(new PropertyValueFactory<>("modele"));

        Callback<TableColumn<Location, String>, TableCell<Location, String>> cellFactory
                = //
                new Callback<TableColumn<Location, String>, TableCell<Location, String>>() {
            @Override
            public TableCell call(final TableColumn<Location, String> param) {
                final TableCell<Location, String> cell = new TableCell<Location, String>() {

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
                                alert.setTitle("Confirmation de supression");
                                alert.setHeaderText("Supression");
                                alert.setContentText("voulez vous vraiment supprimer l'offre?");
                                Optional<ButtonType> result = alert.showAndWait();

                                if (result.get() == ButtonType.OK) {

                                    System.out.println(getTableView().getItems().get(getIndex()).getId() + "------");

                                    servicelocation.deleteLocation(getTableView().getItems().get(getIndex()).getId());
                                    Notifications notificationBuilder = Notifications.create().title("Information")
                                            .text("offre de location supprimé ").graphic(null)
                                            .hideAfter(Duration.seconds(6))
                                            .position(Pos.CENTER).darkStyle();
                                    notificationBuilder.showWarning();
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

        Callback<TableColumn<Location, String>, TableCell<Location, String>> cellFactoryModif
                = //
                new Callback<TableColumn<Location, String>, TableCell<Location, String>>() {
            @Override
            public TableCell call(final TableColumn<Location, String> param) {
                final TableCell<Location, String> cell = new TableCell<Location, String>() {

                    final Button btn = new Button("Modifier");

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else {
                            btn.setOnAction((ActionEvent event) -> {
                                i = (getTableView().getItems().get(getIndex()).getId());
                                labelCout.setText(String.valueOf(getTableView().getItems().get(getIndex()).getCout()));
                                labelDispo.setText(getTableView().getItems().get(getIndex()).getOffre());
                                labelMarque.setText(getTableView().getItems().get(getIndex()).getMarque());
                                labelModele.setText(getTableView().getItems().get(getIndex()).getModele());
                            });
                            setGraphic(btn);
                            setText(null);
                        }
                    }
                };
                return cell;
            }
        };

        ModifierColumn.setCellFactory(cellFactoryModif);
        supprimerColumn.setCellFactory(cellFactory);
        tabLocation.setItems(null);
        tabLocation.setItems(data);

    }

    @FXML
    private void EspaceResponsable(ActionEvent event) throws IOException {
        Parent page = FXMLLoader.load(getClass().getResource("/view/EspaceResponsable.fxml"));
        Scene scene = new Scene(page);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();

    }

    @FXML
    private void mofidierAnnonce1(MouseEvent event) {
    }
    private Location localtionv = new Location();

    @FXML
    private void ajouterLocation(ActionEvent event) {

        if (labelVehicule.getText().isEmpty()) {

            Notifications notificationBuilder = Notifications.create().title("Erreur")
                    .text("svp selectionner un vehicule de liste au dessous !").graphic(null)
                    .hideAfter(Duration.seconds(6))
                    .position(Pos.CENTER).darkStyle();
            notificationBuilder.showWarning();
        } else if ((labelCout.getText().isEmpty()) || (labelDispo.getText().isEmpty())) {

            Notifications notificationBuilder = Notifications.create().title("Erreur")
                    .text("veuillez remplir tout les champs svp !").graphic(null)
                    .hideAfter(Duration.seconds(6))
                    .position(Pos.CENTER).darkStyle();
            notificationBuilder.showWarning();
        } else {
           
            localtionv.setIdVehicule(Integer.parseInt(labelVehicule.getText()));
            localtionv.setCout(Float.valueOf(labelCout.getText()));
            localtionv.setOffre(labelDispo.getText());
            localtionv.setMarque(labelMarque.getText());
            localtionv.setModele(labelModele.getText());
            localtionv.setDate_debut(null);
            localtionv.setDate_fin(null);

            servicelocation.insertLocation(localtionv);

            labelDispo.setText("");
            // labelAgence.setText(null);
            labelVehicule.setText(null);
            labelCout.setText(null);
            labelMarque.setText("");
            labelModele.setText("");
            try {
                loadDataFromDB();
                Notifications notificationBuilder = Notifications.create().title("Succés d'Ajout :D !!")
                        .text("sauvegardé dans la base de donnée").graphic(null)
                        .hideAfter(Duration.seconds(8))
                        .position(Pos.BASELINE_RIGHT);
                notificationBuilder.darkStyle();
                notificationBuilder.showInformation();
            } catch (SQLException ex) {
                Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
            }
            //Image img= new Image("/tn/esprit/covoiturage/utils/car1.png");
        }
    }

    @FXML
    private void updateLocation(ActionEvent event) {
        if (labelMarque.getText().isEmpty()) {

            Notifications notificationBuilder = Notifications.create().title("Erreur")
                    .text("svp selectionner un offre à modifier !").graphic(null)
                    .hideAfter(Duration.seconds(6))
                    .position(Pos.CENTER).darkStyle();
            notificationBuilder.showWarning();
        } else {

            System.out.println("eyyyyyyyyyyyyyye");

            final Location a = new Location();
            System.out.println(i + "&&&&&&&&");
            a.setId(i);

            a.setCout(Float.valueOf(labelCout.getText()));
            a.setOffre(labelDispo.getText());
            a.setMarque(labelMarque.getText());
            a.setModele(labelModele.getText());

            servicelocation.ModifierLocation(a);

            System.out.println("modification effectuée  ");

            labelDispo.setText("");
            //labelAgence.setText(null);
            labelVehicule.setText(null);
            labelCout.setText(null);
            labelMarque.setText("");
            labelModele.setText("");
            Notifications notificationBuilder = Notifications.create().title("modification avec succées !!")
                    .text("Bien modifié dans la base de donnée :)").graphic(null)
                    .hideAfter(Duration.seconds(8))
                    .position(Pos.BASELINE_RIGHT);
            notificationBuilder.darkStyle();
            notificationBuilder.showInformation();
        }
        try {
            loadDataFromDB();
        } catch (SQLException ex) {
            Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }
    }

    @FXML
    private void clear(ActionEvent event) {
        labelDispo.setText("");
    
        labelVehicule.setText(null);
        labelCout.setText(null);
        labelMarque.setText("");
        labelModele.setText("");
    }

    @FXML
    private void rechercherannonce(KeyEvent event) {
    }

    @FXML
    private void closeAction(MouseEvent event) {
        Stage stage = (Stage) close.getScene().getWindow();
        stage.close();
    }

    @FXML
    private void reduceAction(MouseEvent event) {
    }

    private void loadDataFromDB2() throws SQLException {
        Connection conn = dc.etablirConnection();
        data2 = FXCollections.observableArrayList();
        ResultSet ps = conn.createStatement().executeQuery("SELECT * FROM `vehicule`");
        while (ps.next()) {
            data2.add(new Vehicule(ps.getInt(1), ps.getString(2), ps.getString(3), ps.getString(4), ps.getString(5)));
        }

        marColumn.setCellValueFactory(new PropertyValueFactory<>("matricule"));
        matColumn.setCellValueFactory(new PropertyValueFactory<>("marque"));
        modColumn.setCellValueFactory(new PropertyValueFactory<>("model"));

        Callback<TableColumn<Vehicule, String>, TableCell<Vehicule, String>> cellFactoryModif
                = //
                new Callback<TableColumn<Vehicule, String>, TableCell<Vehicule, String>>() {
            @Override
            public TableCell call(final TableColumn<Vehicule, String> param) {
                final TableCell<Vehicule, String> cell = new TableCell<Vehicule, String>() {

                    final Button btn = new Button("Selectionner");

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else {
                            btn.setOnAction((ActionEvent event) -> {
                                i = (getTableView().getItems().get(getIndex()).getId());

                                labelMarque.setText(getTableView().getItems().get(getIndex()).getMarque());
                                labelModele.setText(getTableView().getItems().get(getIndex()).getModel());
                                labelVehicule.setText(String.valueOf(getTableView().getItems().get(getIndex()).getId()));
                            });
                            setGraphic(btn);
                            setText(null);
                        }
                    }
                };
                return cell;
            }
        };

        selectColumn.setCellFactory(cellFactoryModif);

        tabVehicule.setItems(null);
        tabVehicule.setItems(data2);

    }

}
