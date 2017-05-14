<?php

namespace Pidev\GestionTrajetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevGestionTrajetsBundle:Default:index.html.twig');
    }
    public function  AdminAction()
    {
        return $this->render('PidevGestionTrajetsBundle:BackOffice:index.html.twig') ;
    }

    public function testAction()
    {
        $user = $this->container->get('security.token_storage')->getToken()->getUser();
        $id=$user->getId();
        return $this->render("@PidevGestionTrajets/GestionTrajets/test.html.twig", array('id'=>$id));
    }
}

