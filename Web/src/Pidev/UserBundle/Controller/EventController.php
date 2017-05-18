<?php
/**
 * Created by PhpStorm.
 * User: slim
 * Date: 05/04/2017
 * Time: 21:55
 */

namespace Pidev\UserBundle\Controller;


use Pidev\UserBundle\Entity\Event;
use Pidev\UserBundle\Form\eventForm;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\DateTime;

class EventController extends Controller
{

    public function affAction()
    {
        $em = $this->getDoctrine()->getManager();
        $events = $em->getRepository("PidevUserBundle:Event")->findAll();
        $date = new \DateTime('now');
        //uncomment when needed
        /* $this->MailAction();*/
        $count = $em->getRepository("PidevUserBundle:Event")->mailEvent($date);
        return $this->render('PidevUserBundle:FrontOffice:affich.html.twig',array("event"=>$events,'counter'=>$count));
    }

    public function MailAction()
    {
        $text="Bonjour, nous vous rappelons que vous avez un trajet aujourd'hui a Rades ";
        $message = \Swift_Message::newInstance()
            ->setSubject('Share my Ride, Event reminder')
            ->setFrom('karimslim920@gmail.com')
            ->setTo('karim.slim@esprit.tn')
            ->setBody($text);
        $this->get('mailer')->send($message);
    }

    public function delAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("PidevUserBundle:Event")->find($request->get('id'));
        $em->remove($event);
        $em->flush();
        return $this->redirectToRoute('homeuseraff');
    }


    public function updAction(Request $request)
    {

        $em = $this->getDoctrine()->getManager();
        $event = $em->getRepository("PidevUserBundle:Event")->find($request->get('id'));
        $form= $this->createForm(eventForm::class, $event);
        $form->handleRequest($request);

        if($form->isValid()){
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('homeuseraff');
        }

        return $this->render('PidevUserBundle:FrontOffice:modifier.html.twig',array('form'=>$form->createView()));
    }


    public function addAction(Request $request)
    {
        $event = new Event() ;

        $form= $this->createForm(eventForm::class, $event);
        $form->handleRequest($request);
        if($form->isValid()){
            $user=$this->getUser();
            $event->setMembre($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($event);
            $em->flush();
            return $this->redirectToRoute('homeuseraff');
        }

        return $this->render('PidevUserBundle:FrontOffice:ajouter.html.twig',array('form'=>$form->createView()));

    }

    public function rechercherAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $event=$em->getRepository("PidevUserBundle:Event")->findAll();

        if (isset($_POST['rech'])) {
            $date1 = $_POST['debut'];

            $query = $em->createQuery(
                "SELECT e
                 FROM PidevUserBundle:Event e
                 WHERE e.date = '$date1'"
            );
            $event = $query->getResult();
            return $this->render(('PidevUserBundle:FrontOffice:recherche.html.twig'), array(
                'event' => $event,
            ));
        }

        return $this->render(('PidevUserBundle:FrontOffice:recherche.html.twig'), array(
            'event' => $event,
        ));
    }
    public function tempAction(Request $request){
        return $this->render('PidevUserBundle:FrontOffice:layout.html.twig');
    }
    public function CalendarAction()
    {
        $em = $this->getDoctrine()->getManager();


        return $this->render('PidevUserBundle:FrontOffice:calendar.html.twig');
    }



}