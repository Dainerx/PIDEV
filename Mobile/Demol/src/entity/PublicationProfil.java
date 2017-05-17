/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity ; 


import java.util.Date;

/**
 *
 * @author xagta1
 */

public class PublicationProfil {

   
    private Integer id;
   
    private Date date;

    private String contenu;
   
    private String picpath;
   
    
    private Profile idProfil;

    public PublicationProfil() {
    }

    public PublicationProfil(Integer id) {
        this.id = id;
    }

    public PublicationProfil(Integer id, Date date, String contenu, String picpath) {
        this.id = id;
        this.date = date;
        this.contenu = contenu;
        this.picpath = picpath;
    }

    public PublicationProfil(Date date, String contenu, String picpath, Profile idProfil) {
        this.date = date;
        this.contenu = contenu;
        this.picpath = picpath;
        this.idProfil = idProfil;
    }
    
    

    public Integer getId() {
        return id;
    }

    public void setId(Integer id) {
        this.id = id;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public String getPicpath() {
        return picpath;
    }

    public void setPicpath(String picpath) {
        this.picpath = picpath;
    }

  

    public Profile getIdProfil() {
        return idProfil;
    }

    public void setIdProfil(Profile idProfil) {
        this.idProfil = idProfil;
    }

    @Override
    public int hashCode() {
        int hash = 0;
        hash += (id != null ? id.hashCode() : 0);
        return hash;
    }

    @Override
    public boolean equals(Object object) {
        // TODO: Warning - this method won't work in the case the id fields are not set
        if (!(object instanceof PublicationProfil)) {
            return false;
        }
        PublicationProfil other = (PublicationProfil) object;
        if ((this.id == null && other.id != null) || (this.id != null && !this.id.equals(other.id))) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "PublicationProfil{" + "id=" + id + ", date=" + date + ", contenu=" + contenu + ", picpath=" + picpath + ", idProfil=" + idProfil + '}';
    }

   
    
}
