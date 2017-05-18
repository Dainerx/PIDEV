<?php
namespace Pidev\VehiculeBundle\Controller;

use Pidev\UserBundle\Entity\Vehicule;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Pidev\VehiculeBundle\Form;


/**
 * Vehicule controller.
 *
 */
class VehiculeController extends Controller
{
    /**
     * Lists all vehicule entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $vehicules = $em->getRepository('PidevUserBundle:Vehicule')->findAll();

        return $this->render('PidevVehiculeBundle:vehicule:index.html.twig', array(
            'vehicules' => $vehicules,
        ));
    }

    /**
     * Creates a new vehicule entity.
     *
     */
    public function newAction(Request $request)
    {
        $vehicule = new Vehicule();
        $form = $this->createForm('Pidev\VehiculeBundle\Form\VehiculeType', $vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($vehicule);
            $em->flush($vehicule);

            return $this->redirectToRoute('vehicule_show', array('id' => $vehicule->getId()));
        }

        return $this->render('PidevVehiculeBundle:vehicule:new.html.twig', array(
            'vehicule' => $vehicule,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a vehicule entity.
     *
     */
    public function showAction(Vehicule $vehicule)
    {
        $deleteForm = $this->createDeleteForm($vehicule);

        return $this->render('PidevVehiculeBundle:vehicule:show.html.twig', array(
            'vehicule' => $vehicule,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing vehicule entity.
     *
     */
    public function editAction(Request $request, Vehicule $vehicule)
    {
        $deleteForm = $this->createDeleteForm($vehicule);
        $editForm = $this->createForm('Pidev\VehiculeBundle\Form\VehiculeType', $vehicule);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('vehicule_index');
        }

        return $this->render('PidevVehiculeBundle:vehicule:edit.html.twig', array(
            'vehicule' => $vehicule,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a vehicule entity.
     *
     */
    public function deleteAction(Request $request, Vehicule $vehicule)
    {
        $form = $this->createDeleteForm($vehicule);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($vehicule);
            $em->flush($vehicule);
        }

        return $this->redirectToRoute('vehicule_index');
    }

    /**
     * Creates a form to delete a vehicule entity.
     *
     * @param Vehicule $vehicule The vehicule entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Vehicule $vehicule)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('vehicule_delete', array('id' => $vehicule->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
?>