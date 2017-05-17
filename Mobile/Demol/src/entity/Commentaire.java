package entity;

import java.util.Date;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 *
 * @author xagta1
 */

public class Commentaire{

   
  
    private Integer idCom;
  
    private String texte;
    
    private Date date;
 
    private PublicationProfil idPub;
    
    private Membre idMembre ; 

   
    
    
    

    public Membre getIdMembre() {
        return idMembre;
    }

    public void setIdMembre(Membre idMembre) {
        this.idMembre = idMembre;
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

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
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
        if (!(object instanceof Commentaire)) {
            return false;
        }
        Commentaire other = (Commentaire) object;
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
