<?php

namespace Pidev\GestionTrajetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\GestionTrajetsBundle\Entity\Trajet;
use Pidev\GestionTrajetsBundle\Entity\Vehicule;
use Pidev\GestionTrajetsBundle\Entity\Membre;
use Pidev\GestionTrajetsBundle\Entity\States;
use Pidev\GestionTrajetsBundle\Entity\Cities;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

class GestionTrajetController extends Controller
{
    public function indexAction()
    {
        $em=$this->getDoctrine()->getManager();
        $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->listTrajets();
        return $this->render('@PidevGestionTrajets/GestionTrajets/home.html.twig', array('trajets' => $trajet));
    }

    public function ListTrajetsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->listTrajets();
        return $this->render('@PidevGestionTrajets/GestionTrajets/trajets.html.twig', array('trajets' => $trajet));
    }

    public function RechercheListTrajetsAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        if ($request->isMethod('POST'))
        {
            $depart=$request->get('depart');
            $destination=$request->get('destination');
            $nbrplacedispo=$request->get('nbrplace');
            $gamme=$request->get('gamme');
            $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->filterTrajetByLocation($depart,$destination,$nbrplacedispo,$gamme);
            return $this->render('@PidevGestionTrajets/GestionTrajets/trajetsRecherche.html.twig',array('trajets'=>$trajet));
        }
    }



        public function ShareRideAction(Request $request)
        {
            $em=$this->getDoctrine()->getManager();
            $trajet = new Trajet();
            $vehicule = new Vehicule();
            $membre = new Membre();
            $states=$em->getRepository("PidevGestionTrajetsBundle:States")->findAll();
            $membre=$em->getRepository("PidevGestionTrajetsBundle:Membre")->find(3);

            if ($request->isMethod('POST'))
            {

                $vehicule->setMarque($request->get('company'));
                $vehicule->setModele($request->get('brand'));
                $vehicule->setMatricule($request->get('serial'));
                $vehicule->setGamme($request->get('gamme'));
                $em->persist($vehicule);
                $em->flush();

                $trajet->setDepart($request->get('from'));
                $trajet->setDestination($request->get('to'));
                $trajet->setDescription($request->get('details'));
                $trajet->setCout($request->get('price'));
                $trajet->setNbrplacedispo($request->get('seats'));
                $trajet->setDatedepart(new \DateTime($request->get('date_departure')));
                $trajet->setDatepub(new \DateTime('now'));
                $trajet->setSuivi(false);

                $trajet->setIdMembre($membre);
                $trajet->setIdVehicule($vehicule);

                $em->persist($trajet);
                $em->flush();
/*                return $this->redirectToRoute('trajets');*/
            }
            return $this->render('@PidevGestionTrajets/GestionTrajets/shareride.html.twig', array('states'=>$states));
        }

        public function updateCitiesAction()
        {
            $request = $this->container->get('request');
            $id = $request->query->get('from');
            $em=$this->getDoctrine()->getManager();
            $cities=$em->getRepository("PidevGestionTrajetsBundle:Cities")->findBy(array('idState'=>$id));
            return new Response(json_encode($cities));
        }

}
