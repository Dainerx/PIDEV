/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package entity;

import java.util.Date;

/**
 *
 * @author dainer
 */
public class Trajet {
    private int id;
    private String destination;
    private String depart;
    private String datedepart;
    private String datepub;
    private float cout;
    private String description;
    private int nbrplacedispo;
    private boolean suivie;
    private Vehicule vehciule;
    private User user;

        public Trajet(String destination, String depart, String dateDepart, String datepub, float cout, String description, 
        int nombrePlaceDispo, boolean suivie) {
        this.destination = destination;
        this.depart = depart;
        this.datedepart = dateDepart;
        this.datepub=datepub;
        this.cout = cout;
        this.description = description;
        this.nbrplacedispo = nombrePlaceDispo;
        this.suivie = suivie;
    }    

    public Trajet()
    {
        
    }
    public int getId()
    {
        return this.id;
    }

    public void setId(int id)
    {
        this.id = id;
    }

    public String getDestination()
    {
        return this.destination;
    }

    public void setDestination(String destination)
    {
        this.destination = destination;
    }

    public String getDepart()
    {
        return this.depart;
    }

    public void setDepart(String depart)
    {
        this.depart = depart;
    }

    public String getDatedepart()
    {
        return this.datedepart;
    }

    public void setDatedepart(String datedepart)
    {
        this.datedepart = datedepart;
    }

    public float getCout()
    {
        return this.cout;
    }

    public void setCout(float cout)
    {
        this.cout = cout;
    }

    public String getDescription()
    {
        return this.description;
    }

    public void setDescription(String description)
    {
        this.description = description;
    }

    public int getNbrplacedispo()
    {
        return this.nbrplacedispo;
    }

    public void setNbrplacedispo(int nbrplacedispo)
    {
        this.nbrplacedispo = nbrplacedispo;
    }

    public boolean isSuivi()
    {
        return this.suivie;
    }

    public void setSuivi(boolean suivi)
    {
        this.suivie = suivi;
    }

    public String getDatepub()
    {
        return this.datepub;
    }

    public void setDatepub(String datepub)
    {
        this.datepub = datepub;
    }

    public Vehicule getVehciule() {
        return vehciule;
    }

    public void setVehciule(Vehicule vehciule) {
        this.vehciule = vehciule;
    }

    public User getUser() {
        return user;
    }

    public void setUser(User user) {
        this.user = user;
    }
    
    

    @Override
    public String toString() {
        return "Trajet{" + "id=" + id + ", destination=" + destination + ", depart=" + depart + ", datedepart=" + datedepart + ", datepub=" + datepub + ", cout=" + cout + ", description=" + description + ", nbrplacedispo=" + nbrplacedispo + ", suivie=" + suivie + '}';
    }
    

}
