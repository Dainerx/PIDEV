/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.jfoenix.controls.JFXButton;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.sql.ResultSet;
import java.sql.SQLException;
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
import javafx.scene.control.TableCell;
import javafx.scene.control.TableColumn;
import javafx.scene.control.TableView;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javafx.util.Callback;
import modal.DemandeLocation;
import services.ServiceDemandeLocation;
import assets.MyConnection;

/**
 * FXML Controller class
 *
 * @author Ameni
 */
public class DemandeEnvoyeeController implements Initializable {

    @FXML
    private AnchorPane backgroundPane;
    @FXML
    private JFXButton EspaceUtilisateur;
    @FXML
    private AnchorPane CoprsProjet;
    @FXML
    private TableView tableDemande;
    @FXML
    private TableColumn voiture;
    @FXML
    private TableColumn dd;
    @FXML
    private TableColumn df;
    @FXML
    private TableColumn etat;
    @FXML
    private TableColumn payer;
    @FXML
    private TableColumn cout;
    @FXML
    private ImageView close;
    @FXML
    private ImageView reduce;

    private ObservableList<DemandeLocation> data;
    private MyConnection dc;

    private ServiceDemandeLocation ServiceDemandeLocation = new ServiceDemandeLocation();

    /**
     * Initializes the controller class.
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
            data.add(new DemandeLocation(rs.getInt(1), rs.getString(3), rs.getString(4), rs.getDate(5), rs.getDate(6), rs.getString(7), rs.getFloat(8)));
        }

        voiture.setCellValueFactory(new PropertyValueFactory<>("nom_location"));
        cout.setCellValueFactory(new PropertyValueFactory<>("cout"));
        dd.setCellValueFactory(new PropertyValueFactory<>("date_debut"));
        df.setCellValueFactory(new PropertyValueFactory<>("date_fin"));
        etat.setCellValueFactory(new PropertyValueFactory<>("etat"));

        Callback<TableColumn<DemandeLocation, String>, TableCell<DemandeLocation, String>> cellFactoryS
                = //
                new Callback<TableColumn<DemandeLocation, String>, TableCell<DemandeLocation, String>>() {
            @Override
            public TableCell call(final TableColumn<DemandeLocation, String> param) {
                final TableCell<DemandeLocation, String> cell = new TableCell<DemandeLocation, String>() {

                    final Button btn = new Button("Payer");

                    @Override
                    public void updateItem(String item, boolean empty) {
                        super.updateItem(item, empty);
                        if (empty) {
                            setGraphic(null);
                            setText(null);
                        } else if ((getTableView().getItems().get(getIndex()).getEtat()).equals("Acceptée")) {
                            btn.setOnAction((ActionEvent event) -> {

                                /* try {*/
                                Stage primaryStage = new Stage();

                                FXMLLoader loader = new FXMLLoader(this.getClass().getResource("/view/paiement.fxml"));
                                PaiementController controller = new PaiementController();
                                loader.<DemandeLocation>getController();
                                controller.id_Demande = getTableView().getItems().get(getIndex()).getId();
                                controller.cout = getTableView().getItems().get(getIndex()).getCout();
                                controller.demande = getTableView().getItems().get(getIndex());
                                Parent parent;
                                try {
                                    parent = loader.load();
                                    Scene scene = new Scene(parent);
                                    primaryStage.setScene(scene);

                                    primaryStage.show();
                                } catch (IOException ex) {
                                    System.out.println("pbleeeeemeeeee !! warniiingggg passage");
                                }

                                System.out.println(getTableView().getItems().get(getIndex()).getId());

                            });
                            setGraphic(btn);
                            setText(null);
                        }
                    }
                };
                return cell;
            }
        };

        payer.setCellFactory(cellFactoryS);
        tableDemande.setItems(null);
        tableDemande.setItems(data);

    }

    @FXML
    private void EspaceUtilisateur(ActionEvent event) throws IOException {
        Parent page = FXMLLoader.load(getClass().getResource("/view/EspaceUtilisateur.fxml"));
        Scene scene = new Scene(page);
        Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
        stage.hide();
        stage.setScene(scene);
        stage.show();
    }

    @FXML
    private void closeAction(MouseEvent event) {
        Stage stage = (Stage) close.getScene().getWindow();
        stage.close();
    }

    @FXML
    private void reduceAction(MouseEvent event) {
    }

}
