/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.time.LocalDate;

/**
 *
 * @author dainer
 */
public class Trajet {
    private int id; 
    private String destination;
    private String depart;
    private LocalDate dateDepart;
    private float cout;
    private String description;
    private int nombrePlaceDispo;
    private boolean suivie;
    private Vehicule vehicule;
    private Membre membre;
    
    
    //attributs for table view passagers:
    private String nommembre;
    private String telmembre;
    private String mailmembre;
    
    public Trajet(String destination, String depart, LocalDate dateDepart, float cout, String description, 
            int nombrePlaceDispo, boolean suivie, Vehicule vehicule, Membre membre) {
        this.destination = destination;
        this.depart = depart;
        this.dateDepart = dateDepart;
        this.cout = cout;
        this.description = description;
        this.nombrePlaceDispo = nombrePlaceDispo;
        this.suivie = suivie;
        this.vehicule = vehicule;
    }
    
    
    public Trajet(String destination, String depart, LocalDate dateDepart, float cout, String description, 
        int nombrePlaceDispo, boolean suivie, Vehicule vehicule) {
        this.destination = destination;
        this.depart = depart;
        this.dateDepart = dateDepart;
        this.cout = cout;
        this.description = description;
        this.nombrePlaceDispo = nombrePlaceDispo;
        this.suivie = suivie;
        this.vehicule = vehicule;
    }

    public Trajet(String destination, String depart, LocalDate dateDepart, float cout, String description, 
        int nombrePlaceDispo, boolean suivie) {
        this.destination = destination;
        this.depart = depart;
        this.dateDepart = dateDepart;
        this.cout = cout;
        this.description = description;
        this.nombrePlaceDispo = nombrePlaceDispo;
        this.suivie = suivie;
    }    

    public Trajet()
    {
        
    }
    
    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }
    public String getDestination() {
        return destination;
    }

    public void setDestination(String destination) {
        this.destination = destination;
    }

    public String getDepart() {
        return depart;
    }

    public void setDepart(String depart) {
        this.depart = depart;
    }

    public LocalDate getDateDepart() {
        return dateDepart;
    }

    public void setDateDepart(LocalDate dateDepart) {
        this.dateDepart = dateDepart;
    }

    public float getCout() {
        return cout;
    }

    public void setCout(float cout) {
        this.cout = cout;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getNombrePlaceDispo() {
        return nombrePlaceDispo;
    }

    public void setNombrePlaceDispo(int nombrePlaceDispo) {
        this.nombrePlaceDispo = nombrePlaceDispo;
    }

    public boolean isSuivie() {
        return suivie;
    }

    public void setSuivie(boolean suivie) {
        this.suivie = suivie;
    }
    
    public Vehicule getVehicule() {
        return vehicule;
    }

    public void setVehicule(Vehicule vehicule) {
        this.vehicule = vehicule;
    }
    
    
    public Membre getMembre() {
        return membre;
    }

    public void setMembre(Membre membre) {
        this.membre = membre;
    }
    
    public String getNommembre()
    {
        this.nommembre = this.membre.getNom();
        return this.nommembre;
    }
    
    public String getTelmembre()
    {
        this.telmembre = this.membre.getNumerotel();
        return this.telmembre;   
    }
    
    public String getMailmembre()
    {
        this.mailmembre = this.membre.getMail();
        return this.mailmembre;
    }


    @Override
    public String toString() {
        return "Trajet{" + "id=" + id + ", destination=" + destination + ", depart=" + depart + ", dateDepart=" + dateDepart + ", cout=" + cout + ", description=" + description + ", nombrePlaceDispo=" + nombrePlaceDispo + ", suivie=" + suivie + ", vehicule=" + vehicule + '}';
    }
   
    
}
