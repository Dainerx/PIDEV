/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

import java.util.Date;

/**
 *
 * @author Ameni
 */
public class DemandeLocation {

    private int id;
    private int id_membre;
    private String nom_membre;
    private String nom_location;
    private Date date_debut;
    private Date date_fin;
    private String etat;
    private float cout;

    public DemandeLocation() {
    }

    public DemandeLocation(int id, int id_membre, String nom_membre, String nom_location, Date date_debut, Date date_fin, String etat, float cout) {
        this.id = id;
        this.id_membre = id_membre;
        this.nom_membre = nom_membre;
        this.nom_location = nom_location;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.etat = etat;
        this.cout = cout;
    }

    public DemandeLocation(int id, String nom_membre, String nom_location, Date date_debut, Date date_fin, String etat, float cout) {
        this.id = id;
        this.nom_membre = nom_membre;
        this.nom_location = nom_location;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.etat = etat;
        this.cout = cout;
    }

    public DemandeLocation(int id, String nom_membre, String nom_location, Date date_debut, Date date_fin, String etat) {
        this.id = id;
        this.nom_membre = nom_membre;
        this.nom_location = nom_location;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.etat = etat;
    }

    public DemandeLocation(String nom_membre, String nom_location, Date date_debut, Date date_fin, String etat) {
        this.nom_membre = nom_membre;
        this.nom_location = nom_location;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.etat = etat;
    }

    public DemandeLocation(String nom_membre, String nom_location, Date date_debut, Date date_fin, String etat, float cout) {
        this.nom_membre = nom_membre;
        this.nom_location = nom_location;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
        this.etat = etat;
        this.cout = cout;
    }

    @Override
    public String toString() {
        return "DemandeLocation{" + "id=" + id + ", nom_membre=" + nom_membre + ", nom_location=" + nom_location + ", date_debut=" + date_debut + ", date_fin=" + date_fin + ", etat=" + etat + ", cout=" + cout + '}';
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getId_membre() {
        return id_membre;
    }

    public void setId_membre(int id_membre) {
        this.id_membre = id_membre;
    }

    public String getNom_membre() {
        return nom_membre;
    }

    public void setNom_membre(String nom_membre) {
        this.nom_membre = nom_membre;
    }

    public String getNom_location() {
        return nom_location;
    }

    public void setNom_location(String nom_location) {
        this.nom_location = nom_location;
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

    public String getEtat() {
        return etat;
    }

    public void setEtat(String etat) {
        this.etat = etat;
    }

    public float getCout() {
        return cout;
    }

    public void setCout(float cout) {
        this.cout = cout;
    }

}
