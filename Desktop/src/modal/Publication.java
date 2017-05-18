/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.sql.Date;

/**
 *
 * @author sahar ghorch
 */
public class Publication {

    int id_pub;
    int id_personne;
    String titre;
    String contenu;
    Date date;
    String picpath;
    String videopath;
    String type;

    public Publication(int id_personne, String titre, String contenu) {
        this.id_personne = id_personne;
        this.titre = titre;
        this.contenu = contenu;
    }

    public Publication(int id_personne, String titre, String contenu, Date date) {
        this.id_personne = id_personne;
        this.titre = titre;
        this.contenu = contenu;
        this.date = date;
    }

    public Publication(int id_pub, int id_personne, String titre, String contenu, Date date) {
        this.id_pub = id_pub;
        this.id_personne = id_personne;
        this.titre = titre;
        this.contenu = contenu;
        this.date = date;
    }

    public Publication(int id_pub, int id_personne, String titre, String contenu, Date date, String picpath, String videopath) {
        this.id_pub = id_pub;
        this.id_personne = id_personne;
        this.titre = titre;
        this.contenu = contenu;
        this.date = date;
        this.picpath = picpath;
        this.videopath = videopath;
    }

    public Publication(int id_pub, int id_personne, String titre, String contenu, Date date, String picpath, String videopath, String type) {
        this.id_pub = id_pub;
        this.id_personne = id_personne;
        this.titre = titre;
        this.contenu = contenu;
        this.date = date;
        this.picpath = picpath;
        this.videopath = videopath;
        this.type = type;
    }

    public Publication() {
        // throw new UnsupportedOperationException("Not supported yet."); //To change body of generated methods, choose Tools | Templates.
    }

    public int getId_pub() {
        return id_pub;
    }

    public void setId_pub(int id_pub) {
        this.id_pub = id_pub;
    }

    public int getId_personne() {
        return id_personne;
    }

    public void setId_personne(int id_personne) {
        this.id_personne = id_personne;
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
        return "Publication{" + "id_pub=" + id_pub + ", id_personne=" + id_personne + ", titre=" + titre + "," + " contenu=" + contenu + ", date=" + date + ", picpath=" + picpath + ", videopath=" + videopath + ", type=" + type + '}';
    }

}
