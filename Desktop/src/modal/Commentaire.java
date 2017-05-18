/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.sql.Date;

/**
 *
 * @author sahar ghorch
 */
public class Commentaire {

    int id_com;
    int id_pub;
    int id_personne;
    String texte;
    Date date;
    int id_membre_vise;

    public int getId_membre_vise() {
        return id_membre_vise;
    }

    public void setId_membre_vise(int id_membre_vise) {
        this.id_membre_vise = id_membre_vise;
    }

    public Commentaire(int id_com, int id_personne, String texte, Date date, int id_membre_vise) {
        this.id_com = id_com;
        this.id_personne = id_personne;
        this.texte = texte;
        this.date = date;
        this.id_membre_vise = id_membre_vise;
    }

    public Commentaire(int id_personne, String texte, int id_membre_vise) {
        this.id_personne = id_personne;
        this.texte = texte;

        this.id_membre_vise = id_membre_vise;
    }

    public Commentaire() {
    }

    public Commentaire(int id_pub, int id_personne, String titre) {
        this.id_pub = id_pub;
        this.id_personne = id_personne;
        this.texte = texte;
    }

    public Commentaire(int id_com, int id_pub, int id_personne, String titre, Date date) {
        this.id_com = id_com;
        this.id_pub = id_pub;
        this.id_personne = id_personne;
        this.texte = texte;
        this.date = date;
    }

    public Commentaire(int id_pub, int id_personne, String titre, Date date) {
        this.id_pub = id_pub;
        this.id_personne = id_personne;
        this.texte = texte;
        this.date = date;
    }

    public int getId_com() {
        return id_com;
    }

    public void setId_com(int id_com) {
        this.id_com = id_com;
    }

    public int getId_pub() {
        return id_pub;
    }

    public void setId_pub(int id_pub) {
        this.id_pub = id_pub;
    }

    public int getId_personne() {
        return id_personne;
    }

    public void setId_personne(int id_personne) {
        this.id_personne = id_personne;
    }

    public String getTexte() {
        return texte;
    }

    public void setTexte(String texte) {
        this.texte = texte;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    @Override
    public String toString() {
        return "Commentaire{" + ", id_personne=" + id_personne + ", texte=" + texte + "}";
    }

}
