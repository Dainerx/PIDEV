<?php

/**
 * Created by PhpStorm.
 * User: dainer
 * Date: 29/03/17
 * Time: 11:16 ص
 */

namespace Pidev\GestionTrajetsBundle\Repository;

use Doctrine\ORM\EntityRepository;

class CitiesRepository extends \Doctrine\ORM\EntityRepository
{
    public function getCities($id)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT ci.city FROM PidevGestionTrajetsBundle:Cities ci where ci.idState=:idState')
            ->setParameter('idState',$id);
        return $query->getResult();
    }

}