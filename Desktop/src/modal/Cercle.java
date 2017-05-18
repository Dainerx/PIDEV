/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package modal;

import java.util.Objects;

/**
 *
 * @author xagta1
 */

public class Cercle  {

   
   
    private Integer idCercle;
    
    private Membre follower;
  
    private Membre followed;

    public Cercle() {
    }

    public Cercle(Membre followed, Membre followers) {
        this.followed = followed;
        this.follower = followers;
    }
    

    public Cercle(Integer idCercle) {
        this.idCercle = idCercle;
    }

    public Integer getIdCercle() {
        return idCercle;
    }

    public void setIdCercle(Integer idCercle) {
        this.idCercle = idCercle;
    }

    public Membre getFollowed() {
        return followed;
    }

    public void setFollowed(Membre idMembre) {
        this.followed = idMembre;
    }

    public Membre getFollower() {
        return follower;
    }

    @Override
    public int hashCode() {
        int hash = 7;
        hash = 11 * hash + Objects.hashCode(this.idCercle);
        hash = 11 * hash + Objects.hashCode(this.followed);
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
        final Cercle other = (Cercle) obj;
        if (!Objects.equals(this.idCercle, other.idCercle)) {
            return false;
        }
        if (!Objects.equals(this.followed, other.followed)) {
            return false;
        }
        return true;
    }

    public void setFollower(Membre follower) {
        this.follower = follower;
    }

    @Override
    public String toString() {
        return "Cercle{" + "idMembre=" + followed + ", followers=" + follower.getLogin()+ '}';
    }

   
}
