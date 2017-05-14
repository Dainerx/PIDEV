<?php

namespace Pidev\UserBundle\Controller;

use FOS\UserBundle\Controller\RegistrationController as BaseController;
use Pidev\UserBundle\Entity\Membre;
use Pidev\UserBundle\Form\RegistrationType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Validator\Constraints\Date;

use FOS\UserBundle\Event\FilterUserResponseEvent;
use FOS\UserBundle\Event\FormEvent;
use FOS\UserBundle\Event\GetResponseUserEvent;
use FOS\UserBundle\Form\Factory\FactoryInterface;
use FOS\UserBundle\FOSUserEvents;
use FOS\UserBundle\Model\UserInterface;
use FOS\UserBundle\Model\UserManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class RegistrationController extends BaseController
{


    public function registerAction(Request $request)
    {
        $form= $this->createForm(RegistrationType::class) ;
        $form->handleRequest($request) ;
        $user = new Membre() ;

        if ($form->isValid())
        {
            $date = new \DateTime();
            $user=$form->getData() ;
            $user->setDateInscri($date) ;
            $user->setPointsFidelite(0) ;


            $user->setEnabled(true);

            $em = $this->getDoctrine()->getManager();
            $em->persist($user);
            $em->flush();
            $this->addFlash('success', 'Welcome ' . $user->getEmail());
            $this->checkEmailAction() ;

            return $this->redirectToRoute('MembreProfileInit') ;
        }

        return $this->render('FOSUserBundle:Registration:register.html.twig', [
            'form' => $form->createView()
        ]);
    }


}