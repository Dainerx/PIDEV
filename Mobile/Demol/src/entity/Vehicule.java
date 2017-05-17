/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

/**
 *
 * @author dainer
 */
public class Vehicule {
    private int id;
    private String marque;
    private String modele;
    private String matricule;
    private String gamme;

    public Vehicule(int id, String marque, String modele, String matricule, String gamme) {
        this.id=id;
        this.marque = marque;
        this.modele = modele;
        this.matricule = matricule;
        this.gamme = gamme;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
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

    public String getMatricule() {
        return matricule;
    }

    public void setMatricule(String matricule) {
        this.matricule = matricule;
    }

    public String getGamme() {
        return gamme;
    }

    public void setGamme(String gamme) {
        this.gamme = gamme;
    }
    
    
    
}
