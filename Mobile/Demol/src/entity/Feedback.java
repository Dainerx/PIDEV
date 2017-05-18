/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

//import java.sql.Date;
import javafx.beans.property.StringProperty;

/**
 *
 * @author k4
 */
public class Feedback {
    int idFeedback;
    Membre membre;
    Trajet trajet;
    String sujet;
    int rating;
    String commentaire;
    String date;
  

    @Override
    public String toString() {
        return "Feedback{" + "idFeedback=" + idFeedback + ", idMembre=" + membre + ", Sujet=" + sujet + ", rating=" + rating + ", commentaire=" + commentaire + ", Date =" + /*date*/ + '}';
    }

    public Feedback(String date) {
        this.date = date;
    }
    
    

    public Feedback(int idFeedback, Membre membre, String sujet, int rating, String commentaire,String date) {
        this.idFeedback = idFeedback;
        this.membre = membre;
        this.sujet = sujet;
        this.rating = rating;
        this.commentaire = commentaire;
        this.date=date;
    }
    
  
   
    public Feedback() {
    }

    public int getIdFeedback() {
        return idFeedback;
    }

    public void setIdFeedback(int idFeedback) {
        this.idFeedback = idFeedback;
    }

    public Membre getMembre() {
        return membre;
    }

    public void setMembre(Membre membre) {
        this.membre = membre;
    }

    public Trajet getTrajet() {
        return trajet;
    }

    public void setTrajet(Trajet trajet) {
        this.trajet = trajet;
    }

   
    public String getSujet() {
        return sujet;
    }

    public void setSujet(String sujet) {
        this.sujet = sujet;
    }

    public Feedback(int idFeedback, String sujet, int rating, String commentaire) {
        this.idFeedback = idFeedback;
        this.sujet = sujet;
        this.rating = rating;
        this.commentaire = commentaire;
    }

   
    public int getRating() {
        return rating;
    }

    public void setRating(int rating) {
        this.rating = rating;
    }

    public String getCommentaire() {
        return commentaire;
    }

    public void setCommentaire(String commentaire) {
        this.commentaire = commentaire;
    }

    public String getDate() {
        return date;
    }

    public void setDate(String date) {
        this.date = date;
    }


    
}
