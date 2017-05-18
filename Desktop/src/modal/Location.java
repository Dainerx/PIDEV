/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.sql.Date;

/**
 *
 * @author Ameni
 */
public class Location {
    private int id;
    private int idVehicule;
    private float cout;
    private String offre;
    private String marque;
    private String modele;
    private Date date_debut;
    private Date date_fin;
   
    public Location(int id, float cout, String offre, String marque, String modele) {
        this.id = id;
        this.cout = cout;
        this.offre = offre;
        this.marque = marque;
        this.modele = modele;
    }

    public Location(int id, float cout, String marque, String modele) {
        this.id = id;
        this.cout = cout;
        this.marque = marque;
        this.modele = modele;
    }

    public Location(int id, int idVehicule, float cout, String offre, String marque, String modele, Date date_debut, Date date_fin) {
        this.id = id;
        this.idVehicule = idVehicule;
        this.cout = cout;
        this.offre = offre;
        this.marque = marque;
        this.modele = modele;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
    }
    
    



    public Location(int id, int idVehicule, float cout, String offre, String marque, String modele) {
        this.id = id;
        this.idVehicule = idVehicule;
        this.cout = cout;
        this.offre = offre;
        this.marque = marque;
        this.modele = modele;
    }

    
    public Location(float cout, String offre, String marque, String modele) {
        this.cout = cout;
        this.offre = offre;
        this.marque = marque;
        this.modele = modele;
    }

    @Override
    public String toString() {
        return "Location{" + "id=" + id + ", idVehicule=" + idVehicule + ", cout=" + cout + ", offre=" + offre + ", marque=" + marque + ", modele=" + modele + '}';
    }
    

    
    
    public Location() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Date getDate_debut() {
        return date_debut;
    }

    public void setDate_debut(Date date_debut) {
        this.date_debut = date_debut;
    }

    public Date getDate_fin() {
        return date_fin;
    }

    public void setDate_fin(Date date_fin) {
        this.date_fin = date_fin;
    }



    public int getIdVehicule() {
        return idVehicule;
    }

    public void setIdVehicule(int idVehicule) {
        this.idVehicule = idVehicule;
    }

    public float getCout() {
        return cout;
    }

    public void setCout(float cout) {
        this.cout = cout;
    }

    public String getOffre() {
        return offre;
    }

    public void setOffre(String offre) {
        this.offre = offre;
    }

    

    public String getMarque() {
        return marque;
    }

    public void setMarque(String marque) {
        this.marque = marque;
    }

    public String getModele() {
        return modele;
    }

    public void setModele(String modele) {
        this.modele = modele;
    }




}
