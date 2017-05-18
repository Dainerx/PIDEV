/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.io.FileInputStream;

/**
 *
 * @author k4
 */
public class Cadeau {
    int id;
    Membre m;
    String libelle;
    FileInputStream photo;

    public Cadeau() {
    }

    public Cadeau(Membre m, String libelle) {
        this.m = m;
        this.libelle = libelle;
    }

    public Cadeau(Membre m, String libelle, FileInputStream photo) {
        this.m = m;
        this.libelle = libelle;
        this.photo = photo;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public Membre getM() {
        return m;
    }

    public void setM(Membre m) {
        this.m = m;
    }

   

    public String getLibelle() {
        return libelle;
    }

    public void setLibelle(String libelle) {
        this.libelle = libelle;
    }

    public FileInputStream getPhoto() {
        return photo;
    }

    public void setPhoto(FileInputStream photo) {
        this.photo = photo;
    }

    @Override
    public String toString() {
        return "Cadeau{" + "id=" + id + ", Membre=" + m + ", libelle=" + libelle + ", photo=" + photo + '}';
    }
    
    
    
}
