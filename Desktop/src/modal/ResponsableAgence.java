/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.sql.Date;

/**
 *
 * @author Ameni
 */
public class ResponsableAgence {
    private int id;
    private String username;
    private String password;
    private String email;
    private String nom;
    private Date DateInscri;

    public ResponsableAgence() {
    }

    public ResponsableAgence(String username, String password, String email, String nom) {
        this.username = username;
        this.password = password;
        this.email = email;
        this.nom = nom;
    }

    public ResponsableAgence(int id, String username, String password, String email, String nom, Date DateInscri) {
        this.id = id;
        this.username = username;
        this.password = password;
        this.email = email;
        this.nom = nom;
        this.DateInscri = DateInscri;
    }

    public ResponsableAgence(String username, String password, String email, String nom, Date DateInscri) {
        this.username = username;
        this.password = password;
        this.email = email;
        this.nom = nom;
        this.DateInscri = DateInscri;
    }

    @Override
    public String toString() {
        return "ResponsableAgence{" + "id=" + id + ", username=" + username + ", password=" + password + ", email=" + email + ", nom=" + nom + ", DateInscri=" + DateInscri + '}';
    }
    

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getEmail() {
        return email;
    }

    public void setEmail(String email) {
        this.email = email;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    public Date getDateInscri() {
        return DateInscri;
    }

    public void setDateInscri(Date DateInscri) {
        this.DateInscri = DateInscri;
    }
    
    
    
}
