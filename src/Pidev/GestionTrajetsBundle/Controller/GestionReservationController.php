<?php

namespace Pidev\GestionTrajetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\GestionTrajetsBundle\Entity\Trajet;
use Pidev\GestionTrajetsBundle\Entity\Passager;
use Pidev\GestionTrajetsBundle\Entity\Membre;
use Pidev\GestionTrajetsBundle\Entity\States;
use Pidev\GestionTrajetsBundle\Entity\Cities;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Date;

class GestionReservationController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('', array('name' => $name));
    }


    public function bookAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $passager = new Passager();

        if ($request->isXmlHttpRequest()) {
            $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->find($request->get('idTrajet'));
            $trajet->setNbrplacedispo($trajet->getNbrplacedispo()-1);
            $em->persist($trajet);
            $em->flush();


            //fix this to dynamic
            $membre=$em->getRepository("PidevGestionTrajetsBundle:Membre")->find(2);
            $passager->setIdTrajet($trajet);
            $passager->setIdMembre($membre);
            $em->persist($passager);
            $em->flush();



            $this->MailAction($membre,$trajet);
            $this->SmsAction($membre, $trajet);
            return new JsonResponse(array('status'=>'success'));
        }
    }


    //this works perfect
    public function SmsAction($membre,$trajet)
    {
        //returns an instance of Vresh\TwilioBundle\Service\TwilioWrapper
        $twilio = $this->get('twilio.api');
        $text = "Hi " .$trajet->getIdMembre()->getNom(). ", ". $membre->getNom() ." has booked a seat in your ride share from " . $trajet->getDepart() . " to " . $trajet->getDestination();

        $message = $twilio->account->messages->sendMessage(
            '+16572422389', // From a Twilio number in your account
            '+21620795937', // Text any number
            $text
        );

/*        //get an instance of \Service_Twilio
        $otherInstance = $twilio->createInstance('BBBB', 'CCCCC');
        return new Response($message->sid);*/
    }



    public function MailAction($membre,$trajet)
    {
        $text = "Hi " .$trajet->getIdMembre()->getNom(). ", ". $membre->getNom() ." has booked a seat in your ride share from " . $trajet->getDepart() . " to " . $trajet->getDestination();
        $message = \Swift_Message::newInstance()
            ->setSubject('Share my Ride, seat booked')
            ->setFrom('dainerxx.21@gmail.com')
            ->setTo($trajet->getIdMembre()->getEmail())
            ->setBody($text);

        $this->get('mailer')->send($message);
    }


}
