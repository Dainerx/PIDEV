/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.util.List;
import java.util.Objects;

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
    private List<PublicationProfil> publicationProfilList;

    
    private Membre idMembre ; 

    public Profile() {
    }
    
    

    public Profile(String photo, String description, String phonenumber, String pseudo, Membre idMembre) {
        this.photo = photo;
        this.description = description;
        this.phonenumber = phonenumber;
        this.pseudo = pseudo;
        this.idMembre = idMembre;
    }

    public Profile(int id, Membre idMembre, String photo, String description, String phonenumber, String pseudo) {
        this.id = id;
        this.photo = photo;
        this.description = description;
        this.phonenumber = phonenumber;
        this.pseudo = pseudo;
        this.idMembre = idMembre;
    }

   
    

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

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 47 * hash + this.id;
        hash = 47 * hash + Objects.hashCode(this.idMembre);
        return hash;
    }

    @Override
    public boolean equals(Object obj) {
        if (this == obj) {
            return true;
        }
        if (obj == null) {
            return false;
        }
        if (getClass() != obj.getClass()) {
            return false;
        }
        final Profile other = (Profile) obj;
        if (this.id != other.id) {
            return false;
        }
        if (!Objects.equals(this.idMembre, other.idMembre)) {
            return false;
        }
        return true;
    }
    
    
    
    
}
