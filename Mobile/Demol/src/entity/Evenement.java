/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package FeedbackEntity;

import java.util.Date;

/**
 *
 * @author slim
 */
public class Evenement {

  private int id;
  private String libelle;
  private String description;
  private String lieu;
  private String date;

    public Evenement(int id, String libelle, String description, String lieu, String date) {
        this.id = id;
        this.libelle = libelle;
        this.description = description;
        this.lieu = lieu;
        this.date = date;
    }

    public Evenement(String libelle, String description, String lieu, String date) {
        this.libelle = libelle;
        this.description = description;
        this.lieu = lieu;
        this.date = date;
    }

    public Evenement() {
    }
    
  

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getLibelle() {
        return libelle;
    }

    public void setLibelle(String libelle) {
        this.libelle = libelle;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getLieu() {
        return lieu;
    }

    public void setLieu(String lieu) {
        this.lieu = lieu;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }

    @Override
    public String toString() {
        return "Evenement{" + "id=" + id + ", libelle=" + libelle + ", description=" + description + ", lieu=" + lieu + ", date=" + date + '}';
    }
  
  
    
    
}
