/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package iservices;

import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.List;
import modal.Membre;
import modal.Passager;
import modal.Trajet;
import modal.Vehicule;
import services.ServiceVehicule;

/**
 *
 * @author dainer
 */
public interface InterfaceTrajet {
    public void ajoutTrajet(Trajet trajet, Vehicule vehicule, ServiceVehicule crud, Membre membre) throws SQLException;
    public void updateTrajet(Trajet trajet) throws SQLException;
    public ResultSet afficherTrajet() throws SQLException;       
    public void deleteTrajet(Trajet trajet) throws SQLException;
    public void ReserverTrajet(Passager passager) throws SQLException;
    public ResultSet afficherStates() throws SQLException;       
    public ResultSet afficherCities(int id) throws SQLException;  
    public ResultSet afficherPassager() throws SQLException; 
    public List <Trajet> rechercherPassager(String entry) throws SQLException;
    public ResultSet afficherUneVehicule(int id) throws SQLException;
    public ResultSet afficherChaffeur(int id) throws SQLException;
    public List <Trajet> rechercherTrajet (String entry) throws SQLException;        
    public ResultSet rechercherTrajetAcceuil (String entry) throws SQLException;
    public String getEmailConducteur(int id) throws SQLException;  
    public String getPhoneConducteur(int id) throws SQLException; 
    public ResultSet getStats() throws SQLException;        
}
