<?php

namespace Pidev\VehiculeBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevVehiculeBundle:Default:index.html.twig');
    }
}
