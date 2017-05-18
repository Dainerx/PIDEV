/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package modal;

/**
 *
 * @author slim
 */
public class Calendrier {
    private int id;
    private String dateTrajet;
    private String description;
    private String libelle;
    private String lieu;


    public Calendrier(int id, String dateTrajet, String description, String libelle, String lieu) {
        this.id = id;
        this.dateTrajet = dateTrajet;
        this.description = description;
        this.libelle = libelle;
        this.lieu = lieu;
    }

    public Calendrier(String dateTrajet, String description, String libelle, String lieu) {
        this.dateTrajet = dateTrajet;
        this.description = description;
        this.libelle = libelle;
        this.lieu = lieu;
    }
    
    

    public Calendrier(String dateTrajet, String description) {
        this.dateTrajet = dateTrajet;
        this.description = description;
    }

    public String getDateTrajet() {
        return dateTrajet;
    }
    
    public String getLibelle() {
        return libelle;
    }

    public void setLibelle(String libelle) {
        this.libelle = libelle;
    }

    public String getLieu() {
        return lieu;
    }

    public void setLieu(String lieu) {
        this.lieu = lieu;
    }

    public void setDateTrajet(String dateTrajet) {
        this.dateTrajet = dateTrajet;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }
    

    @Override
    public String toString() {
        return "Calendrier{" + "dateTrajet=" + dateTrajet + ", description=" + description + '}';
    }
    
    
}
