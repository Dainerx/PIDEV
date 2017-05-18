/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

import java.util.Date;

/**
 *
 * @author Ameni
 */
public class OffreLocation {

    private int id;
    private int idVehicule;
    private float cout;
    private String offre;
    private String marque;
    private String modele;
    private Date date_debut;
    private Date date_fin;

    public OffreLocation(int idVehicule, float cout, String offre, String marque, String modele, Date date_debut, Date date_fin) {

        this.idVehicule = idVehicule;
        this.cout = cout;
        this.offre = offre;
        this.marque = marque;
        this.modele = modele;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
    }

    public OffreLocation(int idVehicule, float cout, String offre, Date date_debut, Date date_fin) {
        this.idVehicule = idVehicule;
        this.cout = cout;
        this.offre = offre;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
    }

    public OffreLocation(int id, int idVehicule, float cout, String offre, String marque, String modele, Date date_debut, Date date_fin) {
        this.id = id;
        this.idVehicule = idVehicule;
        this.cout = cout;
        this.offre = offre;
        this.marque = marque;
        this.modele = modele;
        this.date_debut = date_debut;
        this.date_fin = date_fin;
    }

    public OffreLocation() {
    }

    public int getId() {
        return id;
    }

    public void setId(int id) {
        this.id = id;
    }

    public int getIdVehicule() {
        return idVehicule;
    }

    public void setIdVehicule(int idVehicule) {
        this.idVehicule = idVehicule;
    }

    public float getCout() {
        return cout;
    }

    public void setCout(float cout) {
        this.cout = cout;
    }

    public String getOffre() {
        return offre;
    }

    public void setOffre(String offre) {
        this.offre = offre;
    }

    public String getMarque() {
        return marque;
    }

    public void setMarque(String marque) {
        this.marque = marque;
    }

    public String getModele() {
        return modele;
    }

    public void setModele(String modele) {
        this.modele = modele;
    }

    public Date getDate_debut() {
        return date_debut;
    }

    public void setDate_debut(Date date_debut) {
        this.date_debut = date_debut;
    }

    public Date getDate_fin() {
        return date_fin;
    }

    public void setDate_fin(Date date_fin) {
        this.date_fin = date_fin;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 61 * hash + this.id;
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
        final OffreLocation other = (OffreLocation) obj;
        if (this.id != other.id) {
            return false;
        }
        return true;
    }

    @Override
    public String toString() {
        return "OffreLocation{" + " idVehicule=" + idVehicule + ", cout=" + cout + ", offre=" + offre + ", marque=" + marque + ", modele=" + modele + ", date_debut=" + date_debut + ", date_fin=" + date_fin + '}';
    }

}
