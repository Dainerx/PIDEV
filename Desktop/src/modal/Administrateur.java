/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

package edu.covoiturage.models;

/**
 *
 * @author slim
 */
public class Administrateur {
    private int id;
    private String username;
    private String password;
    private String mail;
    private String nom;

    public Administrateur(String username, String password, String mail, String nom) {
        this.username = username;
        this.password = password;
        this.mail = mail;
        this.nom = nom;
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

    public String getMail() {
        return mail;
    }

    public void setMail(String mail) {
        this.mail = mail;
    }

    public String getNom() {
        return nom;
    }

    public void setNom(String nom) {
        this.nom = nom;
    }

    @Override
    public String toString() {
        return "Administrateur{" + "username=" + username + ", password=" + password + ", mail=" + mail + ", nom=" + nom + '}';
    }
    
    
}
