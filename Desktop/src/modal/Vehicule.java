/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

/**
 *
 * @author dainer
 */
public class Vehicule {

    protected int id;
    protected String marque;
    protected String matricule;
    protected String modele;
    protected String gamme;

    public Vehicule(int id, String matricule, String marque, String model, String gamme) {
        this.id = id;
        this.matricule = matricule;
        this.marque = marque;
        this.modele = model;
        this.gamme = gamme;
    }

    public Vehicule(String matricule, String marque, String model) {
        this.matricule = matricule;
        this.marque = marque;
        this.modele = model;
    }

    public Vehicule() {

    }

    public Vehicule(String marque, String matricule, String model, String gamme) {
        this.marque = marque;
        this.matricule = matricule;
        this.modele = model;
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

    public String getMatricule() {
        return matricule;
    }

    public void setMatricule(String matricule) {
        this.matricule = matricule;
    }

    public String getModel() {
        return modele;
    }

    public void setModel(String model) {
        this.modele = model;
    }

    public String getGamme() {
        return gamme;
    }

    public void setGamme(String gamme) {
        this.gamme = gamme;
    }

    @Override
    public String toString() {
        return "Vehicule{" + "marque=" + marque + ", matricule=" + matricule + ", model=" + modele + ", gamme=" + gamme + '}';
    }

}
