/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package View;

import java.io.IOException;
import java.net.URL;
import java.sql.Date;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.time.LocalDate;
import java.util.ArrayList;
import java.util.List;
import java.util.Optional;
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
import javafx.scene.control.Alert.AlertType;
import javafx.scene.control.cell.PropertyValueFactory;
import javafx.scene.layout.BorderPane;
import javafx.scene.web.WebEngine;
import javafx.scene.web.WebView;
import javafx.stage.Stage;

import modal.*;
import services.*;

import org.controlsfx.dialog.*;
import org.controlsfx.control.*;
import org.controlsfx.validation.*;


/**
 *
 * @author dainer
 */
public class AjouterTrajetController implements Initializable {
    
    @FXML
    private Label label;
    @FXML
    private Label label1;
    @FXML
    private Button button;
    @FXML
    private TextField marqueV;
    @FXML
    private TextField modeleV;
    @FXML
    private TextField matriculeV;
    @FXML
    private ChoiceBox<String> gammeV;
    
    
    @FXML
    private TextField searcharea;
  
    
    @FXML
    private ComboBox <String> departTG;
    @FXML
    private ComboBox <String> destinationTG;    
    @FXML
    private ComboBox <String> departT;
    @FXML
    private ComboBox <String> destinationT;
    
    @FXML
    private DatePicker datedepartT;
    @FXML
    private TextField coutT;
    @FXML
    private TextArea descriT;
    @FXML
    private TextField placesT;
    @FXML
    private CheckBox secureT; 
    @FXML 
    private TableColumn marque;
    @FXML 
    private TableColumn modele;
    @FXML 
    private TableColumn matricule;
    @FXML 
    private TableColumn gamme;
    @FXML
    private TableView vehiculesTable;
    
    @FXML 
    private TabPane tab; 
   
    
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
    private WebView map;
    
    @FXML
    private Button retourSuivant;
    
    @FXML
    private TextField recherche;
    
    public AjouterTrajetController(){
    }
    
    /*
    @FXML
    private void ajouterVoiture(ActionEvent event) throws SQLException {
        Vehicule vehicule = new Vehicule (marqueV.getText(),matriculeV.getText()
                ,modeleV.getText(),gammeV.getValue());
        CrudVehicule crud = new CrudVehicule();
        crud.ajouterVehicule(vehicule);  
        try {
            setVoitures();
        } catch (SQLException ex) {
            Logger.getLogger(AjouterTrajetController.class.getName()).log(Level.SEVERE, null, ex);
        }
    }
    */
    
    @FXML
    private void ajouterTrajet(ActionEvent event) throws SQLException, IOException {
        if (marqueV.getText().isEmpty() || matriculeV.getText().isEmpty() || modeleV.getText().isEmpty() 
                || gammeV.getValue().isEmpty() || destinationTG.getValue().isEmpty() || departTG.getValue().isEmpty() || coutT.getText().isEmpty()
                || placesT.getText().isEmpty()) {
            Alert alert = new Alert(AlertType.ERROR);
            alert.setTitle("Erreur");
            alert.setHeaderText("Une erreur s'est produite lors de l'ajout.");
            alert.setContentText("Vous devez remplir tous les champs!");
            alert.showAndWait();        
            return;
        }
        
        if (!((placesT.getText().matches("[0-9]+")) && (coutT.getText().matches("[0-9]+"))))
        {
            Alert alert = new Alert(AlertType.ERROR);
            alert.setTitle("Erreur");
            alert.setHeaderText("Une erreur s'est produite lors de l'ajout.");
            alert.setContentText("Les champs de coût et nombre de places\n doivent être des chiffres.");
            alert.showAndWait();        
            return;
        }

        Vehicule vehicule = new Vehicule (marqueV.getText(),matriculeV.getText()
                ,modeleV.getText(),gammeV.getValue());
        ServiceVehicule crud = new ServiceVehicule();
        Membre membre = new Membre(1, "Ben Ghorbel", "Oussama", "dainer", "21541010", "oussema.benghorbel@esprit.tn");
        
        int places = Integer.parseInt(placesT.getText());
        float cout = Float.parseFloat(coutT.getText());
        Trajet trajet = new Trajet(destinationT.getValue(), departT.getValue(), datedepartT.getValue(), cout
                , descriT.getText(), places, secureT.isSelected(), vehicule);
        ServiceTrajet crudt = new ServiceTrajet();
        crudt.ajoutTrajet(trajet, vehicule, crud, membre);
        
        Alert alert = new Alert(AlertType.INFORMATION);
        alert.setTitle("Ajout Trajet");
        alert.setHeaderText(null);
        alert.setContentText("Votre trajet a été ajouté!\nJoin my ride vous informera si \nun membre reservera une place dans ce trajet.");
        alert.showAndWait(); 
                
        
        Stage stage = (Stage) descriT.getScene().getWindow();        
        stage.close();
        Scene scene = new Scene(new BorderPane(null, null, null, null, null), 400, 400);
        stage.setScene(scene);
        Trajets traj = new Trajets();
        traj.start(stage);
        

    }
    
    @FXML
    public void retourAcceuil(ActionEvent event) throws SQLException, IOException
    {
        Alert alert = new Alert(AlertType.CONFIRMATION);
       alert.setTitle("Fenetre de confirmation");
       alert.setHeaderText("Retour au acceuil");
       alert.setContentText("Voulez vous tout annuler et retourner au acceuil?");

       Optional<ButtonType> result = alert.showAndWait();
       if (result.get() == ButtonType.OK){
            Stage stage = (Stage) descriT.getScene().getWindow();        
            stage.close();
            Scene scene = new Scene(new BorderPane(null, null, null, null, null), 400, 400);
            stage.setScene(scene);
            Trajets traj = new Trajets();
            traj.start(stage);
       }    
    }    
    
    @FXML
    private void retour() throws SQLException
    {
        tab.getSelectionModel().selectPrevious();
    }
    
    
    @FXML
    private void suivant() throws SQLException
    {
        tab.getSelectionModel().selectNext();
    }
    
    @FXML
    private void setmap() throws SQLException
    {
        WebEngine webEngine = map.getEngine();
        webEngine.load("https://www.google.com/maps/dir/"+this.departT.getValue()+"/"
                + ""+ this.destinationT.getValue() +"/");
    }
    
    
    
    @FXML
    private void supprimerTrajet (ActionEvent event) throws SQLException
    {
        Trajet trajet = trajetsTable.getSelectionModel().getSelectedItem();
        ServiceTrajet crud = new ServiceTrajet();
        crud.deleteTrajet(trajet);
        System.out.println(trajet);
        System.out.println(trajet.getId());
    }
    
    
    private List getVehicules() throws SQLException{
        ServiceVehicule crud = new ServiceVehicule();
        List <Vehicule> container = new ArrayList<>();
        ResultSet set = crud.afficherVehicules();
        while (set.next())
        {
            Vehicule vehicule = new Vehicule(set.getString("marque"),set.getString("matricule"),set.getString("modele"),set.getString("gamme"));
            vehicule.setId(set.getInt("id"));
            container.add(vehicule);
        }
        return container;
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
    
    /*
    private void setVoitures() throws SQLException
    {
       ObservableList<Vehicule> data = FXCollections.observableArrayList((Vehicule) null);
       CrudVehicule crud = new CrudVehicule();
       ResultSet set = crud.afficherVehicules();
        while (set.next())
        {
            Vehicule vehicule = new Vehicule(set.getString("marque"),set.getString("matricule"),set.getString("modele"),set.getString("gamme"));  
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
*/
    
    private void setComboboxDepartTG() throws SQLException{
        
        List<String> list = new ArrayList<>();
        ServiceTrajet crud = new ServiceTrajet();
        ResultSet set = crud.afficherStates();
        while (set.next())
        {
            list.add(set.getString("state"));
        }
        ObservableList<String> obList = FXCollections.observableList(list);
        departTG.setItems(obList);
        destinationTG.setItems(obList);
        departTG.getSelectionModel().selectFirst();
        destinationTG.getSelectionModel().selectFirst();
        setDepart();
        setDestination();
    }    
    
    @FXML
    private void setDepart() throws SQLException {
        List<String> list = new ArrayList<>();
        ServiceTrajet crud = new ServiceTrajet();
        ResultSet ids = crud.getIdState(departTG.getValue());
        int id=0;
        while(ids.next())
        {
            id=ids.getInt("id");
        }
        ResultSet cities = crud.afficherCities(id);
        while(cities.next())
        {
            list.add(cities.getString("city"));        
        }
        ObservableList<String> obList = FXCollections.observableList(list);
        departT.setItems(obList);
    }

    @FXML
    private void setDestination() throws SQLException {
        List<String> list = new ArrayList<>();
        ServiceTrajet crud = new ServiceTrajet();
        ResultSet ids = crud.getIdState(destinationTG.getValue());
        int id=0;
        while(ids.next())
        {
            id=ids.getInt("id");
        }
        ResultSet cities = crud.afficherCities(id);
        while(cities.next())
        {
            list.add(cities.getString("city"));        
        }
        ObservableList<String> obList = FXCollections.observableList(list);
        destinationT.setItems(obList);
    }


    
    private void setComboboxVoiture(){
        List<String> list = new ArrayList<>();
        list.add("Economique");
        list.add("Moyenne");
        list.add("Luxe");
        ObservableList<String> obList = FXCollections.observableList(list);
        gammeV.setItems(obList);
        gammeV.getSelectionModel().selectFirst();
    }
    
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        
        try {
            setComboboxDepartTG();
        } catch (SQLException ex) {
            Logger.getLogger(AjouterTrajetController.class.getName()).log(Level.SEVERE, null, ex);
        }
        setComboboxVoiture();        
        
        try {
            setTrajets();
        } catch (SQLException ex) {
            Logger.getLogger(AjouterTrajetController.class.getName()).log(Level.SEVERE, null, ex);
        }
        
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
   }    
    
}
