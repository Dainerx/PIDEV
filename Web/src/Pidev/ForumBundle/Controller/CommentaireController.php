<?php

namespace Pidev\ForumBundle\Controller;

use Pidev\UserBundle\Entity\Commentaire;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use  Pidev\ForumBundle\Form\CommentaireType;
use Pidev\UserBundle\Entity\PublicationForum;


/**
 * Commentaire controller.
 *
 */
class CommentaireController extends Controller
{
    /**
     * Lists all commentaire entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $commentaires = $em->getRepository('PidevUserBundle:Commentaire')->findAll();

        return $this->render('PidevForumBundle:commentaire:index.html.twig', array(
            'commentaires' => $commentaires,
        ));
    }

    /**
     * Creates a new commentaire entity.
     *
     */
    public function newAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();
        $commentaire = new Commentaire();
        $idpubc = $em->getRepository('Pidev\UserBundle\Entity\PublicationForum')->find($id);
        $form = $this->createForm('Pidev\ForumBundle\Form\CommentaireType', $commentaire);
        $form->handleRequest($request);
        $user=$this->getUser();

        if ($form->isSubmitted() && $form->isValid()) {
            $commentaire->setIdMembre($user);
            $commentaire->setIdPub($idpubc);
            $em = $this->getDoctrine()->getManager();
            $em->persist($commentaire);
            $em->flush($commentaire);

            return $this->redirectToRoute('forum_show', array('id' => $id));
        }

        return $this->render('PidevForumBundle:commentaire:new.html.twig', array(
            'commentaire' => $commentaire,
            'form' => $form->createView(),
            'id_user'=>$user
        ));
    }

    /**
     * Finds and displays a commentaire entity.
     *
     */
    public function showAction(Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
        $user=$this->getUser();
        return $this->render('PidevForumBundle:commentaire:show.html.twig', array(
            'commentaire' => $commentaire,
            'delete_form' => $deleteForm->createView(),
            'id_user'=>$user
        ));
    }

    /**
     * Displays a form to edit an existing commentaire entity.
     *
     */
    public function editAction(Request $request,Commentaire $commentaire)
    {
        $deleteForm = $this->createDeleteForm($commentaire);
        $editForm = $this->createForm('Pidev\ForumBundle\Form\CommentaireType', $commentaire);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

        }

        return $this->render('PidevForumBundle:commentaire:edit.html.twig', array(
            'commentaire' => $commentaire,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a commentaire entity.
     *
     */
    public function deleteAction(Request $request, Commentaire $commentaire)
    {
        $form = $this->createDeleteForm($commentaire);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($commentaire);
            $em->flush($commentaire);
        }

        return $this->redirectToRoute('commentaire_edit', array('id' => $commentaire->getIdCom()));
    }

    /**
     * Creates a form to delete a commentaire entity.
     *
     * @param Commentaire $commentaire The commentaire entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Commentaire $commentaire)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('commentaire_delete', array('id' => $commentaire->getIdCom())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
