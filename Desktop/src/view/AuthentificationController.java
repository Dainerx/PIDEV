/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.jfoenix.controls.JFXPasswordField;
import com.jfoenix.controls.JFXTextField;
import java.io.IOException;
import java.net.URL;
import java.sql.Connection;
import java.util.ResourceBundle;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.FXMLLoader;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.Node;
import javafx.scene.Parent;
import javafx.scene.Scene;
import javafx.scene.control.Button;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.AnchorPane;
import javafx.stage.Stage;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;
import modal.ResponsableAgence;
import services.ServiceResponsableAgence;
import assets.MyConnection;

/**
 * FXML Controller class
 *
 * @author Ameni
 */
public class AuthentificationController implements Initializable {

    @FXML
    private JFXPasswordField password;

    @FXML
    private JFXTextField username;

    @FXML
    private Button signIn;
    @FXML
    private AnchorPane backgroundPane;

    @FXML
    private AnchorPane CoprsProjet;

    @FXML
    private ImageView reduce;

    @FXML
    private ImageView close;

    /**
     * Initializes the controller class.
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        // TODO
    }

    @FXML
    private void signIn(ActionEvent event) throws IOException {

        Connection conn = MyConnection.getInstance();
        ResponsableAgence a = null;
        ServiceResponsableAgence sp = new ServiceResponsableAgence();
        a = sp.getByUsername(username.getText(), password.getText());
        if (username.getText().isEmpty()) {
            Notifications notificationBuilder = Notifications.create().title("Saisie incorrecte !!")
                    .text("svp saisissez votre username!").graphic(null)
                    .hideAfter(Duration.seconds(6))
                    .position(Pos.CENTER).darkStyle();
            notificationBuilder.showError();
        } else if (password.getText().isEmpty()) {
            Notifications notificationBuilder = Notifications.create().title("Saisie incorrecte !!")
                    .text("svp saisissez votre password!").graphic(null)
                    .hideAfter(Duration.seconds(6))
                    .position(Pos.CENTER).darkStyle();
            notificationBuilder.showError();
        } else if (a == null) {
            Notifications notificationBuilder = Notifications.create().title("Saisie incorrecte !!")
                    .text("Verifier votre username et password !").graphic(null)
                    .hideAfter(Duration.seconds(6))
                    .position(Pos.CENTER).darkStyle();

            notificationBuilder.showError();

        } else {

            Parent page = FXMLLoader.load(getClass().getResource("/view/LocationResponsable.fxml"));
            Scene scene = new Scene(page);
            Stage stage = (Stage) ((Node) event.getSource()).getScene().getWindow();
            stage.hide();
            stage.setScene(scene);
            stage.show();

        }
    }

    @FXML
    private void closeAction(MouseEvent event) {
        Stage stage = (Stage) close.getScene().getWindow();
        stage.close();
    }

}
