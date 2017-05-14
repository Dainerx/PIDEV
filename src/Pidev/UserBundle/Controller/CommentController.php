<?php

namespace Pidev\UserBundle\Controller;


use Pidev\UserBundle\Entity\CommentaireProfile;
use Pidev\UserBundle\Entity\Profil;
use Pidev\UserBundle\Entity\PublicationProfil;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


class CommentController extends Controller
{


    public function AjoutCommentaireAction(Request $request)

    {   $em=$this->getDoctrine()->getManager() ;

        $com = new CommentaireProfile() ;
        $pub= new PublicationProfil() ;
        $user = $this->get('security.token_storage')->getToken()->getUser();
        $currentUser = $this->get('doctrine.orm.entity_manager')
            ->getRepository('PidevUserBundle:Membre')
            ->find([
                'id' => $user
            ]);

        if ($request->isMethod('POST'))
        {
            $pub=$em->getRepository('PidevUserBundle:PublicationProfil')->find($request->get('Pubid'));
            $com->setDate(new \DateTime('now')) ;
            $com->setContenu($request->get('comment'));
            $com->setIdPublication($pub) ;
            $com->setIdMembre($currentUser);

            $em->persist($com) ;
            $em->flush();

            $msg = "Your Profile has been Created" ;
            $dest = $pub->getIdProfil()->getIdMembre()->getEmail() ;
            $message = \Swift_Message::newInstance()->setSubject("Profile Created")->setFrom($currentUser->getEmail())->setTo($dest)->setBody($msg) ;
            $this->get('mailer')->send($message) ;


        }





      return $this->redirect($request->server->get('HTTP_REFERER').'#'.$pub->getId()) ;
    }

}