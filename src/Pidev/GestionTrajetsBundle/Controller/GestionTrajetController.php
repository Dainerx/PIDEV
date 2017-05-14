<?php

namespace Pidev\GestionTrajetsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Pidev\GestionTrajetsBundle\Entity\Trajet;
use Pidev\GestionTrajetsBundle\Entity\Vehicule;
use Pidev\GestionTrajetsBundle\Entity\Membre;
use Pidev\GestionTrajetsBundle\Entity\States;
use Pidev\GestionTrajetsBundle\Entity\Cities;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Date;

class GestionTrajetController extends Controller
{
    public function indexAction()
    {
        $membre = $this->container->get('security.token_storage')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->listTrajets();
        $cities=$em->getRepository("PidevGestionTrajetsBundle:Cities")->findAll();
        return $this->render('@PidevGestionTrajets/GestionTrajets/home.html.twig', array('trajets' => $trajet,'cities' => $cities,'currentuser'=>$membre));
    }

    public function ListTrajetsAction()
    {
        $membre = $this->container->get('security.token_storage')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->listTrajets();
        $cities=$em->getRepository("PidevGestionTrajetsBundle:Cities")->findAll();
        return $this->render('@PidevGestionTrajets/GestionTrajets/trajets.html.twig', array('trajets' => $trajet,'cities' => $cities,'currentuser'=>$membre));
    }


/*    public function ListTrajetsMobileAction()
    {
        $membre = $this->container->get('security.token_storage')->getToken()->getUser();
        $em=$this->getDoctrine()->getManager();
        $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->findAll();
        return new JsonResponse(array('trajets'=>$trajet));
    }*/


    public function RechercheListTrajetsAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        if ($request->isMethod('POST'))
        {
            $depart=$request->get('depart');
            $destination=$request->get('destination');
            if (empty($request->get('nbrplace')))
            {
                $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->filterTrajetByLocation($depart,$destination);
                return $this->render('@PidevGestionTrajets/GestionTrajets/trajetsRecherche.html.twig',array('trajets'=>$trajet));
            }
            else
            {
                $nbrplacedispo=$request->get('nbrplace');
                $gamme=$request->get('gamme');
                $high=$request->get('high');
                $low=$request->get('low');
                $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->filterTrajetByLocationAndSeatsPlusGamme($depart,$destination,$nbrplacedispo,$gamme,$high,$low);
                return $this->render('@PidevGestionTrajets/GestionTrajets/trajetsRecherche.html.twig',array('trajets'=>$trajet,'high'=>$high,'low'=>$low));
            }
        }
    }

    public function ShareRideAction(Request $request)
    {
        $em=$this->getDoctrine()->getManager();
        $trajet = new Trajet();
        $vehicule = new Vehicule();
        $membre = new Membre();
        $membre = $this->container->get('security.token_storage')->getToken()->getUser();
        $states=$em->getRepository("PidevGestionTrajetsBundle:States")->findAll();
        $vehicules=$em->getRepository("PidevGestionTrajetsBundle:Vehicule")->listVoitures($membre);

        if ($request->isMethod('POST'))
        {

            $vehicule->setMarque($request->get('company'));
            $vehicule->setModele($request->get('brand'));
            $vehicule->setMatricule($request->get('serial'));
            $vehicule->setGamme($request->get('gamme'));
            $em->persist($vehicule);
            $em->flush();

            $trajet->setDepart($request->get('fromC'));
            $trajet->setDestination($request->get('toC'));
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
            return $this->redirectToRoute('trajets');
        }
        return $this->render('@PidevGestionTrajets/GestionTrajets/shareride.html.twig', array('states'=>$states,'vehicules'=>$vehicules));
    }

    function updateCitiesAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $id = $request->request->get('state');
            $em = $this->getDoctrine()->getManager();
            $cities=$em->getRepository("PidevGestionTrajetsBundle:Cities")->getCities($id);
            return new JsonResponse($cities);
        }
        return new JsonResponse(array('status'=>'failed'));
    }

    function backofficeTrajetsAction()
    {
        $em=$this->getDoctrine()->getManager();
        $trajet=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->listTrajets();
        $statShared=$em->getRepository("PidevGestionTrajetsBundle:Trajet")->getStatsDataShared();
        $statBooked=$em->getRepository("PidevGestionTrajetsBundle:Passager")->getStatsDataBooked();
        return $this->render('@PidevGestionTrajets/BackOffice/trajets.html.twig', array('trajets'=>$trajet,'statShared'=>$statShared,'statBooked'=>$statBooked));
    }

    function DeleteAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $id = $request->request->get('idTrajet');
            $em = $this->getDoctrine()->getManager();
            $modele = $em->getRepository('PidevGestionTrajetsBundle:Trajet')->find($id);
            $em->remove($modele);
            $em->flush();
            return new JsonResponse(array('status'=>'success'));
        }
        return new JsonResponse(array('status'=>'failed'));
    }

    function getVehiculeAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $id = $request->request->get('vehicule');
            $em = $this->getDoctrine()->getManager();
            $vehicule = $em->getRepository('PidevGestionTrajetsBundle:Vehicule')->getVehicule($id);
            return new JsonResponse($vehicule);
        }
        return new JsonResponse(array('status'=>'failed'));
    }

    function cookieRedirectAction(Request $request)
    {
        if ($request->isXmlHttpRequest()) {
            $start = $request->request->get('start');
            $end = $request->request->get('end');
            $em = $this->getDoctrine()->getManager();
            $result = $em->getRepository('PidevGestionTrajetsBundle:Trajet')->getResultsCookies($end,$start);
            return new JsonResponse($result);
        }
        return new JsonResponse(array('status'=>'failed'));
    }
}
