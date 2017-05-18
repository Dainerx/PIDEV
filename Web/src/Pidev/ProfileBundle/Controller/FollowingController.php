<?php

namespace Pidev\UserBundle\Controller;

use Pidev\UserBundle\Entity\Following;
use Pidev\UserBundle\Entity\Membre;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class FollowingController extends Controller
{
    public function FollowAction($id)
    {
        $em= $this->getDoctrine()->getManager() ;
        $Follow = new Following() ;
        $tofollow = new Membre() ;

        $tofollow= $this->get('doctrine.orm.entity_manager')->getRepository('PidevUserBundle:Membre')->findOneBy(array('id'=>$id));
        $follwoer = $this->get('security.token_storage')->getToken()->getUser();

        $Follow->setFollower($follwoer) ;
        $Follow->setFollowed($tofollow) ;

        $em->persist($Follow);
        $em->flush() ;


        return $this->redirectToRoute('Profile',array('id'=>$id)) ;
       // return new Response('<pre>'.var_export($Follow).'</pre>') ;

    }

    public function UnfollowAction($id)
    {
        $em= $this->getDoctrine()->getManager() ;
        $Follow = new Following() ;
        $tofollow = new Membre() ;

        $tofollow= $this->get('doctrine.orm.entity_manager')->getRepository('PidevUserBundle:Membre')->findOneBy(array('id'=>$id));
        $follwoer = $this->get('security.token_storage')->getToken()->getUser();

        $Follow=$em->getRepository('PidevUserBundle:Following')->findOneBy(array('Follower'=>$follwoer,'Followed'=>$tofollow)) ;
        $em->remove($Follow) ;
        $em->flush() ;

        return $this->redirectToRoute('Profile',array('id'=>$id)) ;
    }
}
