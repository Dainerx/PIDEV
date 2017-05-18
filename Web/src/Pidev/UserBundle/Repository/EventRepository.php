<?php

/**
 * Created by PhpStorm.
 * User: slim
 * Date: 10/04/2017
 * Time: 14:31
 */

namespace Pidev\UserBundle\Repository;
use Doctrine\ORM\EntityRepository;



class EventRepository extends \Doctrine\ORM\EntityRepository
{
    public function mailEvent($date)
    {
        $query = $this->getEntityManager()
            ->createQuery('SELECT COUNT(t) as result FROM PidevUserBundle:Event t where t.date=:date')
            ->setParameter('date', $date);
        return $query->getResult();
    }
}




