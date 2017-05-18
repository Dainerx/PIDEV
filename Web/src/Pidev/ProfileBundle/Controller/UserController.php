<?php

namespace Pidev\UserBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class UserController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevUserBundle:Default:index.html.twig');
    }
    public function  AdminAction()
    {
        return $this->render('PidevUserBundle:BackOffice:index.html.twig') ;
    }
}
