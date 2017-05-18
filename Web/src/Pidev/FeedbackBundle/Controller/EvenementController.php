<?php
/**
 * Created by PhpStorm.
 * User: k4
 * Date: 02/04/2017
 * Time: 20:48
 */

namespace Pidev\FeedbackBundle\Controller;

use Pidev\UserBundle\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
class EvenementController extends Controller
{
    public function afficheAction()
    {
        $em=$this->getDoctrine()->getManager();
        $event= $em->getRepository('PidevUserBundle:Evenement')->findAll();
        return $this->render('PidevFeedbackBundle:Evenement:affiche.html.twig',array('event'=>$event));
    }
    public function rechercherAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository('PidevUserBundle:Evenement')->findAll();
        if($request->isMethod('POST')  )
            {


                $event=$em->getRepository('PidevUserBundle:Evenement')->RechercheEven($request->get('libelle'),$request->get('description'),$request->get('lieu'));

            return $this->render('PidevFeedbackBundle:Evenement:recherche.html.twig',array('event'=>$event));

        }

            return $this->render('PidevFeedbackBundle:Evenement:recherche.html.twig',array('event'=>$event));


    }
}