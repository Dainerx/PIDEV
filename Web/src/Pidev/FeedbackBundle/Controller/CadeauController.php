<?php
/**
 * Created by PhpStorm.
 * User: k4
 * Date: 02/04/2017
 * Time: 21:40
 */

namespace Pidev\FeedbackBundle\Controller;
use Pidev\UserBundle\Entity\Cadeau;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class CadeauController extends Controller
{
    public function afficheAction()
    {
        $em=$this->getDoctrine()->getManager();
        $entities= $em->getRepository('PidevUserBundle:Cadeau')->listCadeau($this->getUser());
        var_dump($entities);
        $images = array();
        foreach ($entities as $key => $entity) {

            $images[$key] = base64_encode(stream_get_contents($entity["photo"]));
        }

        return $this->render('PidevFeedbackBundle:Cadeau:affiche.html.twig', array(
            'entities' => $entities,
            'images' => $images,
        ));





    }
}