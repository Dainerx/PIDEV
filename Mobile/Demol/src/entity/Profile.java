/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

/**
 *
 * @author xagta1
 */
public class Profile {
    
    private int id ; 
    private String photo ; 
    private String description ; 
    private String phonenumber ; 
    private String pseudo ; 
    
    private Membre idMembre ; 

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public String getPhoto() {
        return photo;
    }

    public void setPhoto(String photo) {
        this.photo = photo;
    }

    public String getDescription() {
        return description;
    }

    public void setDescription(String description) {
        this.description = description;
    }

    public String getPhonenumber() {
        return phonenumber;
    }

    public void setPhonenumber(String phonenumber) {
        this.phonenumber = phonenumber;
    }

    public String getPseudo() {
        return pseudo;
    }

    public void setPseudo(String pseudo) {
        this.pseudo = pseudo;
    }

    public Membre getIdMembre() {
        return idMembre;
    }

    public void setIdMembre(Membre idMembre) {
        this.idMembre = idMembre;
    }

    @Override
    public String toString() {
        return "Profile{" + "id=" + id + ", photo=" + photo + ", description=" + description + ", phonenumber=" + phonenumber + ", pseudo=" + pseudo + ", idMembre=" + idMembre + '}';
    }
    
    
    
    
}
