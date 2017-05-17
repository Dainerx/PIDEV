/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package view;

import com.itextpdf.text.Chunk;
import java.net.URL;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.ResourceBundle;
import java.util.logging.Level;
import java.util.logging.Logger;
import javafx.beans.value.ChangeListener;
import javafx.beans.value.ObservableValue;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.event.ActionEvent;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.Scene;
import javafx.scene.control.*;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.BorderPane;
import javafx.stage.Stage;

import com.itextpdf.text.Document;
import com.itextpdf.text.DocumentException;
import com.itextpdf.text.Paragraph;
import com.itextpdf.text.Phrase;
import com.itextpdf.text.pdf.PdfPCell;
import com.itextpdf.text.pdf.PdfPTable;
import com.itextpdf.text.pdf.PdfWriter;
import java.io.FileNotFoundException;
import java.io.FileOutputStream;
import java.util.Optional;

import modal.*;
import org.controlsfx.control.*;
import services.*;

/**
 * FXML Controller class
 *
 * @author dainer
 */
public class BackofficeController implements Initializable {

    @FXML
    private TextField marqueV;
    @FXML    
    private TextField modeleV;
    @FXML    
    private TextField matriculeV;
    @FXML    
    private TextField gammeV;
    @FXML    
    private TextField places;
    @FXML    
    private TextField cout;
    @FXML    
    private TextArea description;
    @FXML 
    private ToggleSwitch suivieTB;
    
    
    @FXML 
    private TextField recherche;
    @FXML 
    private TextField rechercheP;
    
    @FXML
    private Button supprimerB;
    @FXML 
    private Button suivieB;
    @FXML 
    private Button passagerB;
    @FXML 
    private TableColumn marque;
    @FXML 
    private TableColumn modele;
    @FXML 
    private TableColumn matricule;
    @FXML 
    private TableColumn gamme;
    @FXML
    private TableView <Vehicule> vehiculesTable;
    
    @FXML
    private TableColumn idColumn;    
    @FXML 
    private TableColumn departColumn;
    @FXML 
    private TableColumn destinationColumn;
    @FXML 
    private TableColumn dateColumn;
    @FXML 
    private TableColumn coutColumn;
    @FXML 
    private TableColumn descriptionColumn;
    @FXML 
    private TableColumn placesColumn;    
    @FXML
    private TableView <Trajet> trajetsTable;
    
    @FXML 
    private TabPane tab;
    @FXML 
    private Tab stat;
    @FXML
    private TextField rechercheV;
    
    
    @FXML 
    private TableColumn trajetidColumnP;
    @FXML 
    private TableColumn departColumnP;
    @FXML 
    private TableColumn destinationColumnP;
    @FXML 
    private TableColumn membreColumnP;
    @FXML 
    private TableColumn telnumero;
    @FXML 
    private TableColumn emailColumnP;
    
    @FXML
    private TableView<Trajet> passagersTable;
    
    @FXML
    private Label emailPersonne;
    @FXML
    private Label telPersonne;
    @FXML
    private Label nomPersonne;
    
    private void setPassagers() throws SQLException
    {
        ServiceTrajet crud = new ServiceTrajet();
        ObservableList<Trajet> data = FXCollections.observableArrayList((Trajet) null);
        ResultSet set = crud.afficherPassager();
        while (set.next())
        {
            Passager passager = new Passager();
            
            Membre membre = passager.getMembre();
            membre.setNom(set.getString("nom"));
            membre.setNumerotel(set.getString("numero_tel"));
            membre.setMail(set.getString("email"));
            
            Trajet trajet = passager.getTrajet();
            trajet.setId(set.getInt("id"));
            trajet.setDestination(set.getString("destination"));
            trajet.setDepart(set.getString("depart"));
            trajet.setMembre(membre);
            //passager.getMembre().setPrenom(set.getString("NumeroTel"));
            data.add(trajet);
        }
        trajetidColumnP.setCellValueFactory(
            new PropertyValueFactory<Trajet,Integer>("id")
        );
        departColumnP.setCellValueFactory(
            new PropertyValueFactory<Trajet,String>("depart")
        );
        destinationColumnP.setCellValueFactory(
            new PropertyValueFactory<Trajet,String>("destination")
        );
        
        
        membreColumnP.setCellValueFactory(
            new PropertyValueFactory<Trajet,String>("nommembre")
        );
        
        telnumero.setCellValueFactory(
            new PropertyValueFactory<Trajet,String>("telmembre")
        );
        
        emailColumnP.setCellValueFactory(
            new PropertyValueFactory<Trajet,String>("mailmembre")
        );
        
        
        
        
        passagersTable.setItems(data);
        
    }

    @FXML
    private void movetoPassagers() throws SQLException 
    {
       tab.getSelectionModel().selectNext();
       tab.getSelectionModel().selectNext();       
    }
 
    
    
    
    private void setTrajets() throws SQLException
    {
        
        ServiceTrajet crud = new ServiceTrajet();
        ObservableList<Trajet> data = FXCollections.observableArrayList((Trajet) null);
        ResultSet set = crud.afficherTrajet();
        while (set.next())
        {
            LocalDate localD = set.getDate("dateDepart").toLocalDate();
            Trajet trajet = new Trajet(set.getString("destination"),set.getString("depart"),localD
                    ,set.getFloat("cout"),set.getString("description"),set.getInt("nbrPlaceDispo"),set.getBoolean("suivi"));
            trajet.setId(set.getInt("id"));
            data.add(trajet);
        }
        
        idColumn.setCellValueFactory(
            new PropertyValueFactory<Trajet,Integer>("id")
        );
        destinationColumn.setCellValueFactory(
            new PropertyValueFactory<Trajet,String>("destination")
        );
        departColumn.setCellValueFactory(
            new PropertyValueFactory<Trajet,String>("depart")
        );
        dateColumn.setCellValueFactory(
            new PropertyValueFactory<Trajet,Date>("dateDepart")
        );
        coutColumn.setCellValueFactory(
            new PropertyValueFactory<Trajet,Float>("cout")
        );
        descriptionColumn.setCellValueFactory(
            new PropertyValueFactory<Trajet,String>("description")
        );
        placesColumn.setCellValueFactory(
            new PropertyValueFactory<Trajet,Integer>("nombrePlaceDispo")
        );        
        trajetsTable.setItems(data);
        
    }    
    
    private void setVoitures() throws SQLException
    {
       ObservableList<Vehicule> data = FXCollections.observableArrayList((Vehicule) null);
       ServiceVehicule crud = new ServiceVehicule();
       ResultSet set = crud.afficherVehicules();
        while (set.next())
        {
            Vehicule vehicule = new Vehicule(set.getString("marque"),set.getString("matricule"),set.getString("modele"),set.getString("gamme"));  
            vehicule.setId(set.getInt("id"));
            data.add(vehicule);
        }
        
        marque.setCellValueFactory(
            new PropertyValueFactory<Vehicule,String>("marque")
        );
        matricule.setCellValueFactory(
            new PropertyValueFactory<Vehicule,String>("matricule")
        );
        modele.setCellValueFactory(
            new PropertyValueFactory<Vehicule,String>("model")
        );
        gamme.setCellValueFactory(
            new PropertyValueFactory<Vehicule,String>("gamme")
        );

        vehiculesTable.setItems(data);
    }
    
    @FXML
    private void launchStat() throws SQLException {
        Stage stage = new Stage();
        Scene scene = new Scene(new BorderPane(null, null, null, null, null), 400, 400);
        stage.setScene(scene);
        Statistiques stat = new Statistiques();
        stat.start(stage);        
    }
    
    @FXML 
    private void extratPDF() throws SQLException, FileNotFoundException, DocumentException {

        /* STEP1 Requete SQL menna tji l data li hachtek bihoum */
        ServiceTrajet service = new ServiceTrajet();
        ResultSet trajets = service.afficherTrajet();
        /* Step2 : objects mta3 iTextPDF */
        Document pdfReport = new Document();
        PdfWriter.getInstance(pdfReport, new FileOutputStream("pdf_PI.pdf"));
        pdfReport.open();            
        // Tableau pdf w 9adeh thebou fihoum men column dans me cas j'ai 
        /*
        0. Trajet ID
        1. Depart
        2. Destinaton
        3. Date Départ
        => 4
        */
        pdfReport.add(new Paragraph("Les trajets proposé par la commaunuté"));
        pdfReport.add( Chunk.NEWLINE );
        pdfReport.add( Chunk.NEWLINE );
        PdfPTable my_report_table = new PdfPTable(4); //4 explained
        //Assna3 table cell
        PdfPCell tableCell;
        //loop through l Resultset mte3ek
        while (trajets.next()) {                
                        String trajetId = "" + trajets.getInt("id");
                        tableCell=new PdfPCell(new Phrase(trajetId));
                        my_report_table.addCell(tableCell);
                        String trajetDepart=trajets.getString("depart");
                        tableCell=new PdfPCell(new Phrase(trajetDepart));
                        my_report_table.addCell(tableCell);
                        String trajetDestination=trajets.getString("destination");
                        tableCell=new PdfPCell(new Phrase(trajetDestination));
                        my_report_table.addCell(tableCell);
                        Date trajetDateB=trajets.getDate("dateDepart");
                        String trajetDate = trajetDateB.toString();
                        tableCell=new PdfPCell(new Phrase(trajetDate));
                        my_report_table.addCell(tableCell);
                        }
        /* Attach report table to PDF */
        pdfReport.add(my_report_table); 
        pdfReport.add( Chunk.NEWLINE );
        pdfReport.add( Chunk.NEWLINE );
        pdfReport.add( Chunk.NEWLINE );
        pdfReport.add( Chunk.NEWLINE );

        pdfReport.add(new Paragraph("-Join My ride"));

        pdfReport.close();
        
        Alert alertReservation = new Alert(Alert.AlertType.INFORMATION);
        alertReservation.setTitle("Extraction en PDF");
        alertReservation.setHeaderText(null);
        alertReservation.setContentText("Rapport a été extrait en succès.\nVous trouvez"
                + "le fichier sous /home/dainer/NetBeansProjects/JavaFXApplication2");
        alertReservation.showAndWait();
    }
    
    @FXML
    private void updateAll () throws SQLException {
        setTrajets();
        setPassagers();
        setVoitures();
    }

 
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        try {
            setPassagers();
        } catch (SQLException ex) {
            Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            setTrajets();
        } catch (SQLException ex) {
            Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
        }
        try {
            setVoitures();
        } catch (SQLException ex) {
            Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
       trajetsTable.getSelectionModel().selectedItemProperty().addListener((obs, oldSelection, newSelection) -> {
       Trajet trajet = trajetsTable.getSelectionModel().getSelectedItem();
       ServiceTrajet crud = new ServiceTrajet();
       places.setText(trajet.getNombrePlaceDispo()+"");
       cout.setText(trajet.getCout()+"");
       description.setText(trajet.getDescription());
       if (trajet.isSuivie())
            suivieTB.setSelected(true);
       else 
           suivieTB.setSelected(false);
       /*if (trajet.isSuivie())
       suivieTB.setSelected(true);
        */
            try {
                ResultSet voiture = crud.afficherUneVehicule(trajet.getId());
                try {
                while (voiture.next())
                {
                    marqueV.setText(voiture.getString("marque"));
                    modeleV.setText(voiture.getString("matricule"));
                    matriculeV.setText(voiture.getString("matricule"));
                    gammeV.setText(voiture.getString("gamme"));
                }    } catch (SQLException ex) {
                Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
            }
            } catch (SQLException ex) {
                Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
            }
            
        //delete action    
        supprimerB.setOnAction(e -> {
        Alert alert = new Alert(Alert.AlertType.CONFIRMATION);
        alert.setTitle("Fenetre de confirmation");
        alert.setHeaderText("Suppression d'un trajet");
        alert.setContentText("Etes vous sures de vouloir supprimer ce trajet?");
        ButtonType buttonTypeOne = new ButtonType("Oui");
        ButtonType buttonTypeTwo = new ButtonType("Non");
        alert.getButtonTypes().setAll(buttonTypeOne, buttonTypeTwo);

        Optional<ButtonType> result = alert.showAndWait();
        if (result.get() == buttonTypeOne){
            ServiceTrajet service = new ServiceTrajet();
                try {
                    service.deleteTrajet(trajet);
                    Alert alertInfo = new Alert(Alert.AlertType.CONFIRMATION);                    
                    alertInfo.setTitle("Information");
                    alertInfo.setHeaderText("Le trajet a été supprimé avec succès.");
                    alertInfo.showAndWait();
                } catch (SQLException ex) {            
                    Alert alertError = new Alert(Alert.AlertType.ERROR);
                    alertError.setTitle("Erreur");
                    alertError.setHeaderText("Une erreur s'est produite lors de la suppresion.");
                    alertError.setContentText("Veuillez vérifier cette opération.");
                    alertError.showAndWait();
                    Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
                } 
        }
            });
    });
       
       
       
       vehiculesTable.getSelectionModel().selectedItemProperty().addListener((obs, oldSelection, newSelection) -> {
       Vehicule vehicule = vehiculesTable.getSelectionModel().getSelectedItem();
       ServiceVehicule crud = new ServiceVehicule();
       ResultSet setV;
            try {
                setV = crud.getConducteurVehicule(vehicule.getId());
                while (setV.next())
                {
                   this.nomPersonne.setText(setV.getString("nom"));
                   this.emailPersonne.setText(setV.getString("email"));
                   this.telPersonne.setText(setV.getString("NumeroTel"));
                }
               
            } catch (SQLException ex) {
                Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
            }
              
    });
       
        recherche.textProperty().addListener(new ChangeListener<String>()  {
            @Override
            public void changed(ObservableValue<? extends String> observable,
                                String oldValue, String newValue) {
                ServiceTrajet crud = new ServiceTrajet();
                List<Trajet> liste = null;
                try {
                    liste = crud.rechercherTrajet(recherche.getText());
                    ObservableList<Trajet> data = FXCollections.observableArrayList(liste);
                    trajetsTable.setItems(data);

                } catch (SQLException ex) {
                    Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        });

        rechercheV.textProperty().addListener(new ChangeListener<String>()  {
            @Override
            public void changed(ObservableValue<? extends String> observable,
                                String oldValue, String newValue) {
                ServiceVehicule crud = new ServiceVehicule();
                List<Vehicule> liste = null;
                try {
                    liste = crud.rechercherVehicule(rechercheV.getText());
                    ObservableList<Vehicule> data = FXCollections.observableArrayList(liste);
                    vehiculesTable.setItems(data);

                } catch (SQLException ex) {
                    Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        });        
    
        
        
        rechercheP.textProperty().addListener(new ChangeListener<String>()  {
            @Override
            public void changed(ObservableValue<? extends String> observable,
                                String oldValue, String newValue) {
                ServiceTrajet crud = new ServiceTrajet();
                List<Trajet> liste = null;
                try {
                    liste = crud.rechercherPassager(rechercheP.getText());
                    ObservableList<Trajet> data = FXCollections.observableArrayList(liste);
                    passagersTable.setItems(data);

                } catch (SQLException ex) {
                    Logger.getLogger(BackofficeController.class.getName()).log(Level.SEVERE, null, ex);
                }
            }
        });        
    
    
    }    
    
}
