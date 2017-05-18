/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.Date;
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
import javafx.scene.control.DatePicker;
import javafx.scene.control.Hyperlink;
import javafx.scene.control.Label;
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javafx.util.Callback;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;
import modal.Location;
import services.ServiceDemandeLocation;
import services.ServiceLocation;
import assets.MyConnection;
import modal.DemandeLocation;

/**
 * FXML Controller class
 *
 * @author Ameni
 */
public class EspaceUtilisateurController implements Initializable {

    @FXML
    private AnchorPane backgroundPane;
    @FXML
    private AnchorPane CoprsProjet;
    @FXML
    private TableView tabLocation;
    @FXML
    private TableColumn id_location;
    @FXML
    private TableColumn cout;
    @FXML
    private TableColumn marque;
    @FXML
    private TableColumn modele;
    @FXML
    private TableColumn dd;
    @FXML
    private TableColumn df;
    @FXML
    private TableColumn envoyerD;
    @FXML
    private AnchorPane zone_statisque_medecin;
    @FXML
    private PieChart graph_stat_medecin;
    @FXML
    private AnchorPane CoprsProjet1;
    @FXML
    private ImageView close;
    @FXML
    private ImageView reduce;
    @FXML
    private Hyperlink dEnvoye;

    @FXML
    private Button ajLocation;

    @FXML
    private Label labelOffre;
    @FXML
    private Label labelCout;
    @FXML
    private DatePicker dd1;

    @FXML
    private DatePicker df1;

    /**
     * Initializes the controller class.
     */
    private ObservableList<Location> data;
    private MyConnection dc;
    private ServiceLocation servicelocation = new ServiceLocation();
    private ServiceDemandeLocation servicedemandelocation = new ServiceDemandeLocation();

    @Override
    public void initialize(URL url, ResourceBundle rb) {
        dc = new MyConnection();
        try {
            loadDataFromDB();
        } catch (SQLException ex) {
            Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }
        // TODO
    }

    @FXML
    void ajLocation(ActionEvent event) {
        final DemandeLocation a = new DemandeLocation();

        a.setDate_debut((Date.valueOf(dd1.getValue())));
        a.setDate_fin(Date.valueOf(df1.getValue()));
        a.setNom_location(labelOffre.getText());
        a.setCout(Float.parseFloat(labelCout.getText()));
        servicedemandelocation.insertDemandeLocation(a);

        try {
            loadDataFromDB();
        } catch (SQLException ex) {
            Logger.getLogger(LocationResponsable.class.getName()).log(Level.SEVERE, null, ex);
        }
        labelCout.setText("");
        labelOffre.setText("");
        dd1.setValue(null);
        df1.setValue(null);
        Notifications notificationBuilder = Notifications.create().title("Demande Location")
                .text("Votre Demande a été envoyé !! Vous aller recevoir un mail le plutot possible :D").graphic(null)
                .hideAfter(Duration.seconds(8))
                .position(Pos.BASELINE_RIGHT);
        notificationBuilder.darkStyle();
        notificationBuilder.showInformation();

    }

    private void loadDataFromDB() throws SQLException {
        Connection conn = dc.etablirConnection();

        data = FXCollections.observableArrayList();
        ResultSet rs = conn.createStatement().executeQuery("SELECT * FROM `offre_location`");
        while (rs.next()) {
            data.add(new Location(rs.getInt(1), rs.getFloat(3), rs.getString(4), rs.getString(5), rs.getString(6)));
        }

        id_location.setCellValueFactory(new PropertyValueFactory<>("offre"));
        cout.setCellValueFactory(new PropertyValueFactory<>("cout"));

        marque.setCellValueFactory(new PropertyValueFactory<>("marque"));
        modele.setCellValueFactory(new PropertyValueFactory<>("modele"));

        Callback<TableColumn<Location, String>, TableCell<Location, String>> cellFactory
                = //
                new Callback<TableColumn<Location, String>, TableCell<Location, String>>() {
            @Override
            public TableCell call(final TableColumn<Location, String> param) {
                final TableCell<Location, String> cell = new TableCell<Location, String>() {

                    final Button btn = new Button("Reserver");

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else {
                            btn.setOnAction((ActionEvent event) -> {
                                labelOffre.setText(String.valueOf(getTableView().getItems().get(getIndex()).getOffre()));
                                labelCout.setText(String.valueOf(getTableView().getItems().get(getIndex()).getCout()));
                            });
                            setGraphic(btn);
                            setText(null);
                        }
                    }
                };
                return cell;
            }
        };

        envoyerD.setCellFactory(cellFactory);
        tabLocation.setItems(null);
        tabLocation.setItems(data);

    }

    @FXML
    private void closeAction(MouseEvent event) {
        Stage stage = (Stage) close.getScene().getWindow();
        stage.close();
    }

    @FXML
    private void reduceAction(MouseEvent event) {
    }

    @FXML
    void dEnvoye(ActionEvent event) throws IOException {
        Parent page = FXMLLoader.load(getClass().getResource("/view/DemandeEnvoyee.fxml"));
        Scene scene = new Scene(page);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
    }

}
