/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

/**
 *
 * @author Ameni
 */
public class Agence {
    private int id;
    private String nom;
    private String logo;

    public Agence() {
    }

    public Agence(String nom, String logo) {
        this.nom = nom;
        this.logo = logo;
    }
    

    public Agence(int id, String nom, String logo) {
        this.id = id;
        this.nom = nom;
        this.logo = logo;
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public String getLogo() {
        return logo;
    }

    public void setLogo(String logo) {
        this.logo = logo;
    }

    @Override
    public String toString() {
        return "Agence{" + "id=" + id + ", nom=" + nom + ", logo=" + logo + '}';
    }
    
    
}
