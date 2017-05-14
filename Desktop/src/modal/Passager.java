/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

/**
 *
 * @author dainer
 */
public class Passager {
    private Trajet trajet;
    private Membre membre;

    public Passager(Trajet trajet, Membre membre) {
        this.trajet = trajet;
        this.membre = membre;
    }

    public Passager() {
        trajet = new Trajet();
        membre = new Membre();
    }
    
    public Trajet getTrajet() {
        return trajet;
    }

    public void setTrajet(Trajet trajet) {
        this.trajet = trajet;
    }

    public Membre getMembre() {
        return membre;
    }

    public void setMembre(Membre membre) {
        this.membre = membre;
    }

    @Override
    public String toString() {
        return "Passager{" + "trajet=" + trajet + ", membre=" + membre + '}';
    }
    
    
    
}
