<?php

namespace Pidev\ForumBundle\Controller;

use Pidev\UserBundle\Entity\Commentaire;
use Pidev\UserBundle\Entity\PublicationForum;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;



/**
 * Publicationforum controller.
 *
 */
class PublicationForumController extends Controller
{
    /**
     * Lists all publicationForum entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publicationForums = $em->getRepository('PidevUserBundle:PublicationForum')->findAll();


        return $this->render('PidevForumBundle:publicationforum:index.html.twig', array(
            'publicationForums' => $publicationForums,
        ));
    }


    public function covoiturageAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publicationForums = $em->getRepository('PidevUserBundle:PublicationForum')->findByType('covoiturage');

        return $this->render('PidevForumBundle:publicationforum:covoiturage.html.twig', array(
            'publicationForums' => $publicationForums,
        ));
    }

    public function locationAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publicationForums = $em->getRepository('PidevUserBundle:PublicationForum')->findByType('location');

        return $this->render('PidevForumBundle:publicationforum:location.html.twig', array(
            'publicationForums' => $publicationForums,
        ));
    }

    public function partenariatAction()
    {
        $em = $this->getDoctrine()->getManager();

        $publicationForums = $em->getRepository('PidevUserBundle:PublicationForum')->findByType("partenariat");

        return $this->render('PidevForumBundle:publicationforum:partenariat.html.twig', array(
            'publicationForums' => $publicationForums,
        ));
    }

    /**
     * Creates a new publicationForum entity.
     *
     */
    public function newAction(Request $request)
    {
        $publicationForum = new Publicationforum();
        $form = $this->createForm('Pidev\ForumBundle\Form\PublicationForumType', $publicationForum);
        $form->handleRequest($request);
        $user=$this->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
            $publicationForum->setIdPersonne($user);
            $em = $this->getDoctrine()->getManager();
            $em->persist($publicationForum);
            $em->flush();

            return $this->redirectToRoute('forum_show', array('id' => $publicationForum->getIdPub()));
        }

        return $this->render('@PidevForum/publicationforum/new.html.twig', array(
            'publicationForum' => $publicationForum,
            'form' => $form->createView(),
            'id_user'=>$user
        ));
    }

    /**
     * Finds and displays a publicationForum entity.
     *
     */
    public function showAction(PublicationForum $publicationForum)
    {
        $em = $this->getDoctrine()->getManager();

        $commentaire = $em->getRepository('PidevUserBundle:Commentaire')->findByIdPub($publicationForum->getIdPub());
        $deleteForm = $this->createDeleteForm($publicationForum);
        $user=$this->getUser();
        $comm = new Commentaire();
        $form = $this->createForm('Pidev\ForumBundle\Form\CommentaireType', $comm);
            return $this->render('@PidevForum/publicationforum/show.html.twig', array(

                'publicationForum' => $publicationForum,
                'commentaire' => $commentaire,
                'delete_form' => $deleteForm->createView(),
                'form' => $form->createView(),
                'id_user'=>$user,
            ));
        }


    /**
     * Displays a form to edit an existing publicationForum entity.
     *
     */
    public function editAction(Request $request, PublicationForum $publicationForum)
    {
        $deleteForm = $this->createDeleteForm($publicationForum);
        $editForm = $this->createForm('Pidev\ForumBundle\Form\PublicationForumType', $publicationForum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('forum_show', array('id' => $publicationForum->getIdPub()));
        }

        return $this->render('@PidevForum/publicationforum/edit.html.twig', array(
            'publicationForum' => $publicationForum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a publicationForum entity.
     *
     */
    public function deleteAction(Request $request, PublicationForum $publicationForum)
    {
        $form = $this->createDeleteForm($publicationForum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($publicationForum);
            $em->flush($publicationForum);
        }

        return $this->redirectToRoute('forum_index');
    }

    /**
     * Creates a form to delete a publicationForum entity.
     *
     * @param PublicationForum $publicationForum The publicationForum entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(PublicationForum $publicationForum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('forum_delete', array('id' => $publicationForum->getIdPub())))
            ->setMethod('DELETE')
            ->getForm();
    }


    public function notercovAction($note, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $publicationForums = $em->getRepository('PidevUserBundle:PublicationForum')->findByType('covoiturage');
        foreach ($publicationForums as $pf) {
            if ($pf->getIdPub() == $id) {
                $nbrNote = $pf->getNbrNote() + 1;
                $n = ($note + ($pf->getNote() * $pf->getNbrNote())) / ($nbrNote);
                echo $nbrNote;
                echo $note;
                $pf->setNbrNote($nbrNote);
                $pf->setNote($n);

                $em->persist($pf);
                $em->flush();
                return $this->render('PidevForumBundle:publicationforum:covoiturage.html.twig', array(
                    'publicationForums' => $publicationForums,
                ));
            }
        }
    }

    public function noterlocAction($notee, $idd)
    {
        $em = $this->getDoctrine()->getManager();
        $publicationForums = $em->getRepository('PidevUserBundle:PublicationForum')->findByType('location');
        foreach ($publicationForums as $pff) {
            if ($pff->getIdPub() == $idd) {
                $nbrNotee = $pff->getNbrNote() + 1;
                $nn = ($notee + ($pff->getNote() * $pff->getNbrNote())) / ($nbrNotee);
                echo $nbrNotee;
                echo $notee;
                $pff->setNbrNote($nbrNotee);
                $pff->setNote($nn);

                $em->persist($pff);
                $em->flush();
                return $this->render('PidevForumBundle:publicationforum:location.html.twig', array(
                    'publicationForums' => $publicationForums,
                ));
            }
        }
    }

    public function noterpartAction($note, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $publicationForums = $em->getRepository('PidevUserBundle:PublicationForum')->findByType('partenariat');
        foreach ($publicationForums as $pf) {
            if ($pf->getIdPub() == $id) {
                $nbrNote = $pf->getNbrNote() + 1;
                $n = ($note + ($pf->getNote() * $pf->getNbrNote())) / ($nbrNote);
                echo $nbrNote;
                echo $note;
                $pf->setNbrNote($nbrNote);
                $pf->setNote($n);

                $em->persist($pf);
                $em->flush();
                return $this->render('PidevForumBundle:publicationforum:partenariat.html.twig', array(
                    'publicationForums' => $publicationForums,
                ));
            }
        }


    }
    public function signalerAction(Request $request)
    {
        $id = $request->get('id');
        $em = $this->getDoctrine()->getManager();
        $publicationForums = $em->getRepository('PidevUserBundle:PublicationForum')->findByType('covoiturage');



        foreach ($publicationForums as $pf) {
            if ($pf->getIdPub() == $id) {
                if (($signe = $pf->getSigne())< 2)
                {
                $signe = $pf->getSigne() + 1;
                echo $signe;
                $pf->setSigne($signe);
                $em->persist($pf);
                $em->flush();
                    return $this->render('PidevForumBundle:publicationforum:covoiturage.html.twig', array(
                        'publicationForums' => $publicationForums
                    ));
                }
                else
                {

                        $em->remove($pf);
                        $em->flush($pf);
                    return $this->render('PidevForumBundle:publicationforum:signe.html.twig', array(
                        'publicationForums' => $publicationForums
                    ));
                }



            }

        }
    }

}
