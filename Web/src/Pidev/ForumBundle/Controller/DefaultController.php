<?php

namespace Pidev\ForumBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevForumBundle:Default:index.html.twig');
    }
}
