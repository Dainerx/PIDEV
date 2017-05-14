<?php
/**
 * Created by PhpStorm.
 * User: dainer
 * Date: 09/04/17
 * Time: 03:52 م
 */

namespace Pidev\GestionTrajetsBundle\Repository;

use Doctrine\ORM\EntityRepository;


class VehiculesRespository extends \Doctrine\ORM\EntityRepository
{
    public function listVoitures($id)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT v.id, v.modele, v.matricule FROM PidevGestionTrajetsBundle:Trajet t, PidevGestionTrajetsBundle:Vehicule v, PidevGestionTrajetsBundle:Membre m
                    where t.idVehicule=v.id and t.idMembre=m.id and m.id=:id')
            ->setParameter('id',$id);
        return $query->getResult();
    }

    public function getVehicule($id)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT v.id, v.marque, v.modele, v.matricule, v.gamme FROM PidevGestionTrajetsBundle:Vehicule v where v.id=:id')
            ->setParameter('id',$id);
        return $query->getResult();
    }

}