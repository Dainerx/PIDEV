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
        ->createQuery('SELECT t, v.gamme, v.modele, v.matricule, m.nom FROM PidevGestionTrajetsBundle:Trajet t, PidevGestionTrajetsBundle:Vehicule v, PidevGestionTrajetsBundle:Membre m
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


    public function filterTrajetByLocationAndSeatsPlusGamme($depart,$destination,$nbrplaces,$gamme,$high,$low)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT t, v.gamme, v.modele, m.nom FROM PidevGestionTrajetsBundle:Trajet t, PidevGestionTrajetsBundle:Vehicule v, PidevGestionTrajetsBundle:Membre m
                        where t.idVehicule=v.id and t.idMembre=m.id and t.depart=:depart and t.destination=:destination and t.nbrplacedispo=:nbrplacedispo and v.gamme=:gamme
                         and t.cout<:high and t.cout>:low')
            ->setParameter('depart', $depart)
            ->setParameter('destination', $destination)
            ->setParameter('nbrplacedispo', $nbrplaces)
            ->setParameter('gamme',$gamme)
            ->setParameter('high',$high)
            ->setParameter('low',$low);
        return $query->getResult();
    }

    public function getResultsCookies($depart,$destination)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT COUNT(t) AS  results
                FROM  PidevGestionTrajetsBundle:Trajet t
                WHERE  t.depart=:depart
                AND  t.destination=:destination
              ')
            ->setParameter('depart', $depart)
            ->setParameter('destination', $destination);
        return $query->getResult();
    }

    public function getStatsDataShared()
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT COUNT(t) AS  total FROM PidevGestionTrajetsBundle:Trajet t');
        return $query->getResult();
    }

    public function getStatsDataBooked()
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT COUNT(t) AS  totalRide FROM PidevGestionTrajetsBundle:Passager t');
        return $query->getResult();
    }
    //solution for multi search
/*GROUP BY DATE_FORMAT(t.dateDepart,%Y%m)*/
    /*SELECT * FROM `trajet` WHERE `destination` like '%' 'Arianna' '%' and `depart` like '%' 'Arianna' '%' and `nbrPlaceDispo` like '%' '' '%'*/
}