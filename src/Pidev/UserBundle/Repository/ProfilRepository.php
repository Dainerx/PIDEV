<?php

/**
 * Created by PhpStorm.
 * User: xagta1
 * Date: 03/04/2017
 * Time: 14:55
 */
namespace Pidev\UserBundle\Repository ;
use Doctrine\ORM\Mapping as ORM;


class ProfilRepository extends  \Doctrine\ORM\EntityRepository
{

    public function findAllBystring($string){
        return $this->getEntityManager()->createQuery('SELECT u FROM PidevUserBundle:Profil u  
                WHERE u.pseudo LIKE :string')
            ->setParameter('string','%'.$string.'%')
            ->getResult();
    }

}