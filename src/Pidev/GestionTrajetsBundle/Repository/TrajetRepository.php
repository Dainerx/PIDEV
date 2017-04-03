<?php

/**
 * Created by PhpStorm.
 * User: dainer
 * Date: 29/03/17
 * Time: 11:16 ص
 */

namespace Pidev\GestionTrajetsBundle\Repository;

use Doctrine\ORM\EntityRepository;

class TrajetRepository extends \Doctrine\ORM\EntityRepository
{
    public function listTrajets()
    {
        $query = $this->getEntityManager()
        ->createQuery('SELECT t, v.gamme, v.modele, m.nom FROM PidevGestionTrajetsBundle:Trajet t, PidevGestionTrajetsBundle:Vehicule v, PidevGestionTrajetsBundle:Membre m
                    where t.idVehicule=v.id and t.idMembre=m.id order by t.id desc');
        return $query->getResult();
    }


    public function filterTrajetByLocation($depart,$destination)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT t, v.gamme, v.modele, m.nom FROM PidevGestionTrajetsBundle:Trajet t, PidevGestionTrajetsBundle:Vehicule v, PidevGestionTrajetsBundle:Membre m
                        where t.idVehicule=v.id and t.idMembre=m.id and t.depart=:depart and t.destination=:destination')
            ->setParameter('depart', $depart)
            ->setParameter('destination', $destination);
        return $query->getResult();
    }


    public function filterTrajetByLocationAndSeatsPlusGamme($depart,$destination,$nbrplaces,$gamme)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT t, v.gamme, v.modele, m.nom FROM PidevGestionTrajetsBundle:Trajet t, PidevGestionTrajetsBundle:Vehicule v, PidevGestionTrajetsBundle:Membre m
                        where t.idVehicule=v.id and t.idMembre=m.id and t.depart=:depart and t.destination=:destination and t.nbrplacedispo=:nbrplacedispo and v.gamme=:gamme')
            ->setParameter('depart', $depart)
            ->setParameter('destination', $destination)
            ->setParameter('nbrplacedispo', $nbrplaces)
            ->setParameter('gamme',$gamme);
        return $query->getResult();
    }
}