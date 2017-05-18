<?php
/**
 * Created by PhpStorm.
 * User: k4
 * Date: 08/04/2017
 * Time: 15:05
 */

namespace Pidev\FeedbackBundle\Controller;
use Pidev\UserBundle\Entity\Cadeau;
use Pidev\UserBundle\Entity\Evenement;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Ob\HighchartsBundle\Highcharts\Highchart;

use Swift_Message;


class BackofficeController extends Controller
{
    public function indexAction()
    {
        return $this->render('PidevFeedbackBundle:Backoffice:index.html.twig');
    }
    public function eventaffAction()
    {
        $em=$this->getDoctrine()->getManager();
        $event= $em->getRepository('PidevUserBundle:Evenement')->findAll();
        return $this->render('PidevFeedbackBundle:Backoffice:affiche.html.twig',array('event'=>$event));
    }
    public function cadeauBackAction()
    {

        $em=$this->getDoctrine()->getManager();

        $entities= $em->getRepository('PidevUserBundle:Cadeau')->listCadeauback();
        $membre= $em->getRepository('PidevUserBundle:Cadeau')->listMembreCadeauback();
        $images = array();
        foreach ($entities as $key => $entity) {

            $images[$key] = base64_encode(stream_get_contents($entity["photo"]));
        }


        return $this->render('PidevFeedbackBundle:Backoffice:cadeau.html.twig', array(
            'entities' => $entities,
            'images' => $images,
            'membre' => $membre,
        ));

    }
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ev = $em->getRepository('PidevUserBundle:Evenement')->find($id);


            $em->remove($ev);
            $em->flush();
            return $this->redirectToRoute('EventBack');


    }
    public function addevAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $ev = new Evenement();


            $dateNow = new \DateTime();
            $dateev =new \DateTime($request->request->get('date'));
            $dateev->format("d/m/y");
            $dateNow->format("d/m/y");
            if($dateev < $dateNow ){
                return new JsonResponse(array('status'=>'failed'));

            }else{
                $ev->setLibelle($request->request->get('libelle'));
                $ev->setLieu($request->request->get('lieu'));
                $ev->setDescription($request->request->get('description'));
                $ev->setDate(new \DateTime($request->request->get('date')));
                $em->persist($ev);
                $em->flush();

            }
        return new JsonResponse(array('status'=>'success'));


    }
    public function editEvAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $ev = $em->getRepository('PidevUserBundle:Evenement')->find($request->request->get('id'));
        if ($request->isXmlHttpRequest()) {
            $ev->setLibelle($request->request->get('libelle'));
            $ev->setLieu($request->request->get('lieu'));
            $ev->setDescription($request->request->get('description'));
            $ev->setDate(new \DateTime($request->request->get('date')));
            $em->persist($ev);
            $em->flush();
            return new JsonResponse(array('status'=>'success'));
        }
        return new JsonResponse(array('status'=>'failed'));
    }

    public function addcadAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {

            $img =substr($request->request->get("photo"),0,12);
            $path = 'C:/Users/k4/Desktop/Khaoula/'.$request->request->get("photo");

            $data = file_get_contents($path);
            $base64 = $data;
            $em = $this->getDoctrine()->getManager();
            $cad = new Cadeau();
            $mem = $em->getRepository('PidevUserBundle:Membre')->find($request->request->get("membre"));
            $cad->setPhoto($base64);
            $cad->setIdMembre($mem);
            $cad->setLibelle($request->request->get("libelle"));
            $em->persist($cad);
            $em->flush();
            $this->MailAction();
            return new JsonResponse(array('status' => 'success'));
        }
        return new JsonResponse(array('status' => 'failed'));
    }

    public function feedBackAction()
    {
        $request = $this->get('request_stack')->getCurrentRequest();
        $em = $this->getDoctrine()->getManager();
        $feed = $em->getRepository('PidevUserBundle:Feedback')->listFeedbacks();
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $feed, $request->query->get('page', 1)/* page number */, 5/* limit per page */);
        //return $this->render('VoitureBundle:Front:affichage_res.html.twig', array('res' => $modele));

        return $this->render('PidevFeedbackBundle:Backoffice:feedback.html.twig', array('pagination' => $pagination));

    }

    public function deleteFeedAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ev = $em->getRepository('PidevUserBundle:Feedback')->find($id);


        $em->remove($ev);
        $em->flush();
        return $this->redirectToRoute('FeedbackBack');


    }
    public function deleteCadAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $ev = $em->getRepository('PidevUserBundle:Cadeau')->find($id);


        $em->remove($ev);
        $em->flush();
        return $this->redirectToRoute('cadeauBack');


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

        $ob->title->text('Nombre des étudiants par niveau');

        $ob->xAxis->title(array('text' => "Classe"));

        $ob->yAxis->title(array('text' => "Nb étudiants"));

        $ob->xAxis->categories($categories);

        $ob->series($series);

        return $this->render('PidevFeedbackBundle:Backoffice:stat.html.twig',

            array(

                'chart' => $ob

            ));


    }
    public function index2Action() {
        return $this->render('PidevFeedbackBundle:Backoffice:mail.html.twig', array());
    }

    public function MailAction()
    {


        $message = \Swift_Message::newInstance()
            ->setSubject('notification cadeau')
            ->setFrom('hamadihawari@gmail.com')
            ->setTo('khaoula.ghliss@esprit.tn')
            ->setBody(
                'You Have a gift From Join My Ride'
            )
        ;
        $this->get('mailer')->send($message);



        return $this->redirectToRoute('cadeauBack');
    }

    public function chartPieAction(){
        $em = $this->getDoctrine()->getManager();
        $rate1 = $em->getRepository('PidevUserBundle:Feedback')->NbIdeesType(1);
        $rate2 = $em->getRepository('PidevUserBundle:Feedback')->NbIdeesType(2);
        $rate3 = $em->getRepository('PidevUserBundle:Feedback')->NbIdeesType(3);
        $rate4 = $em->getRepository('PidevUserBundle:Feedback')->NbIdeesType(4);
        $rate5 = $em->getRepository('PidevUserBundle:Feedback')->NbIdeesType(5);

        $ob = new Highchart();

        $ob->chart->renderTo('piechart');

        $ob->title->text('Les statistiques sur Rates');

        $ob->plotOptions->pie(array(

            'allowPointSelect' => true,

            'cursor' => 'pointer',

            'dataLabels' => array('enabled' => false),

            'showInLegend' => true

        ));

        $data = array(

            array('1', intval( $rate1)),

            array('2', intval( $rate2)),

            array('3',intval( $rate3)),

            array('4',intval($rate4)),

            array('5', intval($rate5)),



        );

        $ob->series(array(array('type' => 'pie','name' => 'Nombre de voitures ', 'data' => $data)));

        return $this->render('@PidevFeedback/Backoffice/stat.html.twig', array(

            'chart' => $ob

        ));

    }

//$data = file_get_contents($_FILES['name_of_control']['tmp_name']);
}