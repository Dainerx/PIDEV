/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

/**
 *
 * @author k4
 */
public class Membre {
    private int id;
    private String nom;
    private String prenom;
    private String login;
    private String motPasse;
    private String numerotel;
    private String mail;
    
    public Membre(int id,String nom, String prenom, String login, String motPasse, String mail) {
        this.id = id;
        this.nom = nom;
        this.prenom = prenom;
        this.login = login;
        this.motPasse = motPasse;
        this.mail = mail;
    }  
    public Membre(int id)
    {
        this.id=id;
    }
    
    public Membre(String nom, String prenom, String login, String motPasse, String mail) {
        this.nom = nom;
        this.prenom = prenom;
        this.login = login;
        this.motPasse = motPasse;
        this.mail = mail;
    }
    
    public Membre()
    {
        
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
    public String getPrenom() {
        return prenom;
    }
    public void setPrenom(String prenom) {
        this.prenom = prenom;
    }
    public String getLogin() {
        return login;
    }
    public void setLogin(String login) {
        this.login = login;
    }
    public String getMotPasse() {
        return motPasse;
    }
    public void setMotPasse(String motPasse) {
        this.motPasse = motPasse;
    }
    public String getMail() {
        return mail;
    }
    public void setMail(String mail) {
        this.mail = mail;
    }
    public String getNumerotel() {
        return numerotel;
    }
    public void setNumerotel(String numerotel) {
        this.numerotel = numerotel;
    }
    
    @Override
    public String toString() {
        return "Membre{" +"id = "+id+ ", nom=" + nom + ", prenom=" + prenom + ", login=" + login + ", motPasse=" + motPasse + ", mail=" + mail + '}';
    }
    
    
    
}