/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.sql.Date;
import javafx.beans.property.StringProperty;

/**
 *
 * @author k4
 */
public class Feedback {
    int idFeedback;

    Membre m;
    
    String sujet;
    int rating;
    String commentaire;
    Date date;
    Trajet t;
  

    @Override
    public String toString() {
        return "Feedback{" + "idFeedback=" + idFeedback + ", Membre=" + m + ", Sujet=" + sujet + ", rating=" + rating + ", commentaire=" + commentaire + ", Date =" + date + '}';
    }
    
    

    public Feedback(int idFeedback,Membre m, String sujet, int rating, String commentaire,Date date,Trajet t) {
        this.idFeedback = idFeedback;
        this.m = m;
        this.sujet = sujet;
        this.rating = rating;
        this.commentaire = commentaire;
        this.date=date;
        this.t = t;

    }
    
  
   
    public Feedback() {
    }

    public int getIdFeedback() {
        return idFeedback;
    }

    public void setIdFeedback(int idFeedback) {
        this.idFeedback = idFeedback;
    }

    public Membre getM() {
        return m;
    }

    public void setM(Membre m) {
        this.m = m;
    }

   

    public String getSujet() {
        return sujet;
    }

    public void setSujet(String sujet) {
        this.sujet = sujet;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
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

    public Trajet getT() {
        return t;
    }

    public void setT(Trajet t) {
        this.t = t;
    }


    
}
