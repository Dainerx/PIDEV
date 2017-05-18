/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.io.Serializable;
import java.time.LocalDate;
import java.util.Date;


/**
 *
 * @author xagta1
 */

public class Commentaire_Profile{

   
  
    private Integer idCom;
  
    private String texte;
    
    private LocalDate date;
 
    private PublicationProfil idPub;

    public Commentaire_Profile() {
    }

    public Commentaire_Profile(Integer idCom) {
        this.idCom = idCom;
    }

    public Commentaire_Profile(Integer idCom, String texte, LocalDate date, PublicationProfil idPub) {
        this.idCom = idCom;
        this.texte = texte;
        this.date = date;
        this.idPub = idPub;
    }

    public Commentaire_Profile(String texte, LocalDate date, PublicationProfil idPub) {
        this.texte = texte;
        this.date = date;
        this.idPub = idPub;
    }
    
    

    public Integer getIdCom() {
        return idCom;
    }

    public void setIdCom(Integer idCom) {
        this.idCom = idCom;
    }

    public String getTexte() {
        return texte;
    }

    public void setTexte(String texte) {
        this.texte = texte;
    }

    public LocalDate getDate() {
        return date;
    }

    public void setDate(LocalDate date) {
        this.date = date;
    }

    public PublicationProfil getIdPub() {
        return idPub;
    }

    public void setIdPub(PublicationProfil idPub) {
        this.idPub = idPub;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (idCom != null ? idCom.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof Commentaire_Profile)) {
            return false;
        }
        Commentaire_Profile other = (Commentaire_Profile) object;
        if ((this.idCom == null && other.idCom != null) || (this.idCom != null && !this.idCom.equals(other.idCom))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "Modeles.Commentaire[ idCom=" + idCom + " ]";
    }
    
}
