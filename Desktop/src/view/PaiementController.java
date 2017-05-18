/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.jfoenix.controls.JFXTextField;
import com.simplify.payments.PaymentsApi;
import com.simplify.payments.PaymentsMap;
import com.simplify.payments.domain.Payment;
import com.simplify.payments.exception.ApiCommunicationException;
import com.simplify.payments.exception.AuthenticationException;
import com.simplify.payments.exception.InvalidRequestException;
import com.simplify.payments.exception.NotAllowedException;
import com.simplify.payments.exception.SystemException;
import java.net.URL;
import java.util.ResourceBundle;
import static javafx.collections.FXCollections.observableArrayList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.geometry.Pos;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ChoiceBox;
import javafx.scene.image.ImageView;
import javafx.scene.input.MouseEvent;
import javafx.util.Duration;
import org.controlsfx.control.Notifications;
import modal.DemandeLocation;

/**
 * FXML Controller class
 *
 * @author Ameni
 */
public class PaiementController implements Initializable {

    @FXML
    private JFXTextField cvc;

    @FXML
    private JFXTextField cartnum;

    @FXML
    private JFXTextField amount;

    @FXML
    private Button confirm;
    @FXML
    private ChoiceBox<Integer> monthexp;
    @FXML
    private ChoiceBox<Integer> yearsexp;
    @FXML
    private ImageView conseil;
    @FXML
    private ImageView cvv;

//******************
    public static DemandeLocation demande = null;
    public static int id_Demande = 0;
    public static float cout = 0;
    // ********  

    /**
     * Initializes the controller class.
     *
     * @param url
     * @param rb
     */
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        monthexp.setItems(observableArrayList(
                1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12));
        monthexp.getSelectionModel().selectFirst();

        yearsexp.setItems(observableArrayList(
                2017, 2018, 2019, 2020, 2021));
        yearsexp.getSelectionModel().selectFirst();
        amount.setText(String.valueOf(cout));
        cvc.setText("123");
        confirm.setOnAction(e -> {

            try {
                PaymentsApi.PUBLIC_KEY = "sbpb_NDZhZTgzZjQtNDkzMy00NTg1LTk3ODctYjgzODdlNmRlNTk0";
                PaymentsApi.PRIVATE_KEY = "2pcFPKyotZX3GFRRbJ/ftZrWtUVuqMD3tv5fW05GBYN5YFFQL0ODSXAOkNtXTToq";
            } catch (Exception ex) {
                System.out.println("key problem");
            }

            Payment payment;
            Alert alert = new Alert(Alert.AlertType.INFORMATION);

            int newexpyear = 0;
            switch (yearsexp.getValue()) {
                case 2017:
                    newexpyear = 17;
                    break;
                case 2018:
                    newexpyear = 18;
                    break;
                case 2019:
                    newexpyear = 19;
                    break;
                case 2020:
                    newexpyear = 20;
                    break;
                case 2021:
                    newexpyear = 21;
                    break;

            }
            System.out.println(newexpyear);

            try {

                payment = Payment.create(new PaymentsMap()
                        .set("currency", "USD")
                        .set("card.cvc", "123")
                        .set("card.expMonth", monthexp.getValue())
                        .set("card.expYear", newexpyear)
                        .set("card.number", "5555555555554444")
                        .set("amount", cout) // In cents e.g. $10.00
                        .set("description", "prod description"));
                System.out.println(cvc.getText());
                System.out.println(monthexp.getValue());
                System.out.println(amount.getText());

                if ("APPROVED".equals(payment.get("paymentStatus"))) {
                    Notifications notificationBuilder = Notifications.create().title("Paiement effectué")
                            .text("paiement effectué avec succée").graphic(null)
                            .hideAfter(Duration.seconds(6))
                            .position(Pos.CENTER).darkStyle();
                    notificationBuilder.showConfirm();

                } else {
                    Notifications notificationBuilder = Notifications.create().title("Erreur !")
                            .text("Probleme de paiement").graphic(null)
                            .hideAfter(Duration.seconds(6))
                            .position(Pos.CENTER).darkStyle();
                    notificationBuilder.showWarning();
                }

                //end of alert 
            } catch (ApiCommunicationException ex) {
                Notifications notificationBuilder = Notifications.create().title("Erreur !")
                        .text("probleme technique").graphic(null)
                        .hideAfter(Duration.seconds(6))
                        .position(Pos.CENTER).darkStyle();
                notificationBuilder.showWarning();

            } catch (AuthenticationException ex) {
                Notifications notificationBuilder = Notifications.create().title("Erreur !")
                        .text("Verifier vos infos").graphic(null)
                        .hideAfter(Duration.seconds(6))
                        .position(Pos.CENTER).darkStyle();
                notificationBuilder.showWarning();
            } catch (InvalidRequestException ex) {
                Notifications notificationBuilder = Notifications.create().title("Erreur !")
                        .text("Verifier vos infos").graphic(null)
                        .hideAfter(Duration.seconds(6))
                        .position(Pos.CENTER).darkStyle();
                notificationBuilder.showWarning();
            } catch (NotAllowedException ex) {
                Notifications notificationBuilder = Notifications.create().title("Erreur !")
                        .text("Verifier vos infos").graphic(null)
                        .hideAfter(Duration.seconds(6))
                        .position(Pos.CENTER).darkStyle();
                notificationBuilder.showWarning();
            } catch (SystemException ex) {
                Notifications notificationBuilder = Notifications.create().title("Erreur !")
                        .text("Verifier vos infos").graphic(null)
                        .hideAfter(Duration.seconds(6))
                        .position(Pos.CENTER).darkStyle();
                notificationBuilder.showWarning();
            }

        });

        // TODO
    }

    @FXML
    void conseil(MouseEvent event) {
        cvv.visibleProperty().set(true);
    }

    @FXML
    void cvc(MouseEvent event) {
        cvv.visibleProperty().set(false);
    }

}
