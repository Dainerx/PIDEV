/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package com.mycompany.entite;

import java.util.Date;



/**
 *
 * @author sahar ghorch
 */
public class Publication {

    int id_pub;
    int iduser;
    String titre;
    String contenu;
    Date date;
    String picpath;
    String videopath;
    String type;

  

    public Publication() {
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public Publication(int id_pub, int iduser, String titre, String contenu, Date date, String picpath, String videopath, String type) {
        this.id_pub = id_pub;
        this.iduser = iduser;
        this.titre = titre;
        this.contenu = contenu;
        this.date = date;
        this.picpath = picpath;
        this.videopath = videopath;
        this.type = type;
    }

    public int getIduser() {
        return iduser;
    }

    public void setIduser(int iduser) {
        this.iduser = iduser;
    }

    
    public int getId_pub() {
        return id_pub;
    }

    public void setId_pub(int id_pub) {
        this.id_pub = id_pub;
    }

   

    public String getTitre() {
        return titre;
    }

    public void setTitre(String titre) {
        this.titre = titre;
    }

    public String getContenu() {
        return contenu;
    }

    public void setContenu(String contenu) {
        this.contenu = contenu;
    }

    public Date getDate() {
        return date;
    }

    public void setDate(Date date) {
        this.date = date;
    }

    public String getPicpath() {
        return picpath;
    }

    public void setPicpath(String picpath) {
        this.picpath = picpath;
    }

    public String getVideopath() {
        return videopath;
    }

    public void setVideopath(String videopath) {
        this.videopath = videopath;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    @Override
    public String toString() {
        return "Publication{" + "id_pub=" + id_pub + ", iduser=" + iduser + ", titre=" + titre + ", contenu=" + contenu + ", date=" + date + ", picpath=" + picpath + ", videopath=" + videopath + ", type=" + type + '}';
    }

   

}
