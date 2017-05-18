<?php
/**
 * Created by PhpStorm.
 * User: k4
 * Date: 30/03/2017
 * Time: 18:59
 */

namespace Pidev\FeedbackBundle\Controller;
use Pidev\UserBundle\Entity\Trajet;
use Symfony\Component\HttpFoundation\Request;
use Pidev\FeedbackBundle\Form\FeedbackType;
use Pidev\UserBundle\Entity\Feedback;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Ob\HighchartsBundle\Highcharts\Highchart;
class FeedbackController extends Controller
{

    public function afficheAction()
    {
        $em = $this->getDoctrine()->getManager();
        $trajet = $em->getRepository('PidevUserBundle:Feedback')->listTrajets();
        return $this->render('PidevFeedbackBundle:Feedback:affiche.html.twig', array('trajet' => $trajet));
    }

    public function listeAction()
    {
        $em = $this->getDoctrine()->getManager();
        $feed = $em->getRepository('PidevUserBundle:Feedback')->listFeedbacks();
        return $this->render('PidevFeedbackBundle:Feedback:listeFeed.html.twig', array('feed' => $feed));
    }

    public function AjoutAction(Request $request, $id)
    {
        $Feedback = new Feedback();
        $Form = $this->createForm(FeedbackType::class, $Feedback);
        $Form->handleRequest($request);

        if ($Form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $trajet = $em->getRepository('PidevUserBundle:Trajet')->find($id);
            $Feedback->setDate(new \DateTime("now"));
            $Feedback->setIdTrajet($trajet);
            $Feedback->setIdMembre($this->getUser());

            $em->persist($Feedback);
            $em->flush();
            return $this->redirectToRoute('aff');
        }

        return $this->render('PidevFeedbackBundle:Feedback:index.html.twig', array('id' => $id, 'form' => $Form->createView()));

    }

    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $feed = $em->getRepository('PidevUserBundle:Feedback')->find($id);

        if ($feed->getIdMembre() == $this->getUser()) {
            $em->remove($feed);
            $em->flush();
            return $this->redirectToRoute('liste');
        } else {
            $this->get('session')->getFlashBag()->add('error', "You can't erase it.");
            return $this->redirectToRoute('liste');
        }

    }

    public function editAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $feed = $em->getRepository('PidevUserBundle:Feedback')->find($id);
        $Form = $this->createForm(FeedbackType::class, $feed);
        $Form->handleRequest($request);
        if ($feed->getIdMembre() == $this->getUser()) {

            if ($Form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $feed->setDate(new \DateTime("now"));
                $em->persist($feed);
                $em->flush();
                return $this->redirectToRoute('liste');
            }
            return $this->render('PidevFeedbackBundle:Feedback:edit.html.twig', array('id' => $id, 'form' => $Form->createView()));


        } else {
            $this->get('session')->getFlashBag()->add('error', "You can't edit it.");
            return $this->redirectToRoute('liste');
        }

    }

    public function chartLineAction()

    {

        $em = $this->getDoctrine()->getManager();

        $feed = $em->getRepository('PidevUserBundle:Feedback')->findAll();

        $tab = array();

        $categories = array();

        foreach ($feed as $classe) {

            array_push($tab, $classe->getRating());

            array_push($categories, $classe->getIdMembre());

        }

// Chart

        $series = array(

            array("name" => "Nb étudiants", "data" => $tab)

        );

        $ob = new Highchart();

        $ob->chart->renderTo('linechart'); // #id du div où afficher le graphe

        $ob->title->text('Ratings');

        $ob->xAxis->title(array('text' => "Classe"));

        $ob->yAxis->title(array('text' => "Nb étudiants"));

        $ob->xAxis->categories($categories);

        $ob->series($series);

        return $this->render('PidevFeedbackBundle:Feedback:affichestat.html.twig',

            array(

                'chart' => $ob

            ));


 }

}