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
}

