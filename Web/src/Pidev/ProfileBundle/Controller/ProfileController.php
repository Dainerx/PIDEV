<?php

namespace Pidev\UserBundle\Controller;

use Pidev\UserBundle\Entity\Membre;
use Pidev\UserBundle\Entity\Profil;
use Pidev\UserBundle\Entity\PublicationProfil;
use Pidev\UserBundle\Form\ProfilType;
use Pidev\UserBundle\Form\PublicationProfilType;
use Pidev\UserBundle\PidevUserBundle;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Pidev\UserBundle\Repository ;

class ProfileController extends Controller
{
    public function initAction()
    {
        $profile = new Profil();
        $em=$this->getDoctrine()->getManager() ;
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $form= $this->createForm(ProfilType::class) ;

        $currentUser = $this->get('doctrine.orm.entity_manager')
            ->getRepository('PidevUserBundle:Membre')
            ->find([
                'id' => $user
            ]);
        $profile=$em->getRepository('PidevUserBundle:Profil')->findOneBy(array('idMembre'=>$user));



        if ($profile != null)

       {
           $id=$currentUser->getId() ;

            return $this->redirectToRoute('Profile',array('id'=>$id)) ;

        } else {

          //$this->get('fos_user.security.login_manager')->logInUser('main', $user) ;
            return $this->redirectToRoute('MembreProfileAdd');
           // return $this->render('PidevUserBundle:Front:ProfileMembre.html.twig', array('profile' => $profile,'form'=>$form->createView()));
        }


    }

    public function newProfileAction(Request $request)
    {
        $profile = new Profil();
        $form= $this->createForm(ProfilType::class) ;
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $currentUser = $this->get('doctrine.orm.entity_manager')
            ->getRepository('PidevUserBundle:Membre')
            ->find([
                'id' => $user
            ]);

        $form->handleRequest($request) ;

        $em = $this->getDoctrine()->getManager();

        if ($form->isSubmitted()) {


            $profile=$form->getData() ;
            $profile->setIdMembre($currentUser);
            $em->persist($profile);
            $em->flush();

            $msg = "Your Profile has been Created" ;

            $message = \Swift_Message::newInstance()->setSubject("Profile Created")->setFrom("xagta@hotmail.com")->setTo($user->getEmail())->setBody($msg) ;
            $this->get('mailer')->send($message) ;

          return  $this->redirectToRoute('Profile',array('id'=>$currentUser->getId()));
        }
//return new Response(var_dump($currentUser));
    return $this->render('PidevUserBundle:Front:ProfileMembre.html.twig', array('user' => $user, 'profile' => $profile,'form' => $form->createView()));

    }


    public function ListProfilesAction()
    {
        $em = $this->getDoctrine()->getManager();
        $profiles = $this->get('doctrine.orm.entity_manager')->getRepository('PidevUserBundle:Profil')->findAll();
        return $this->render('PidevUserBundle:Front:ListMembres.html.twig', array('profiles' => $profiles));
    }

    public function RechercheProfileAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        if ($request->isMethod('POST')) {
            $profiles = $em->getRepository('PidevUserBundle:Profil')->findAllBystring($request->get('tosearch'));
            return $this->render('PidevUserBundle:Front:ListMembres.html.twig', array('profiles' => $profiles));
        } else {
            return new Response('no memebres found') ;
        }
    }

    public function Affiche1ProfileAction($id,Request $request)
    {

        $current = new Membre() ;
        $em=$this->getDoctrine()->getManager();
        $user=$em->getRepository('PidevUserBundle:Membre')->findOneBy(array('id'=>$id)) ;
        $current=$this->get('security.token_storage')->getToken()->getUser() ;
        $follow = $em->getRepository('PidevUserBundle:Following')->findOneBy(array('Followed'=>$user,'Follower'=>$current)) ;

        $my=false ;



        $profile=$em->getRepository('PidevUserBundle:Profil')->findOneBy(array('idMembre'=>$user));
        $pubs=$em->getRepository('PidevUserBundle:PublicationProfil')->findBy(array('idProfil'=>$profile),array('id'=>'DESC'));
        $test=$this->getDoctrine()->getRepository('PidevUserBundle:CommentaireProfile')->findAll();

        $form= $this->createForm(PublicationProfilType::class) ;
        if ($user==$current)
        {
            $my=true ;

            $form->handleRequest($request) ;

            if($form->isSubmitted())
            {
                $date = new \DateTime();
                $newPub = new PublicationProfil() ;
                $newPub=$form->getData() ;

                $newPub->setDate($date);
                $newPub->setIdProfil($profile) ;

                $em->persist($newPub);
                $em->flush() ;
            }




        }


        return $this->render('PidevUserBundle:Front:Profile.html.twig',array('Profile'=>$profile ,'Pubs'=>$pubs,'Coms'=>$test,'current'=>$current,'follow'=>$follow,'formPub'=>$form->createView(),'my'=>$my)) ;
    }


}