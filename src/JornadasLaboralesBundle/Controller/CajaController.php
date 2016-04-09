<?php

namespace JornadasLaboralesBundle\Controller;

use JornadasLaboralesBundle\Entity\Caja;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Caja controller.
 *
 * @Route("/caja")
 */
class CajaController extends Controller {

    /**
     * Lists all Caja entities.
     *
     * @Route("/", name="caja_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $cajas = $em->getRepository('JornadasLaboralesBundle:Caja')->findAll();

        return array(
            'cajas' => $cajas,
        );
    }

    /**
     * Creates a new Caja entity.
     *
     * @Route("/new", name="caja_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $caja = new Caja();
        $form = $this->createForm('JornadasLaboralesBundle\Form\CajaType', $caja);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($caja);
            $em->flush();

            return $this->redirectToRoute('caja_show', array('id' => $caja->getId()));
        }

        return array(
            'caja' => $caja,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Caja entity.
     *
     * @Route("/{id}", name="caja_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Caja $caja) {
        $deleteForm = $this->createDeleteForm($caja);

        return array(
            'caja' => $caja,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Caja entity.
     *
     * @Route("/{id}/edit", name="caja_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, Caja $caja) {
        $deleteForm = $this->createDeleteForm($caja);
        $editForm = $this->createForm('JornadasLaboralesBundle\Form\CajaType', $caja);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($caja);
            $em->flush();

            return $this->redirectToRoute('caja_edit', array('id' => $caja->getId()));
        }

        return array(
            'caja' => $caja,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Caja entity.
     *
     * @Route("/{id}", name="caja_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Caja $caja) {
        $form = $this->createDeleteForm($caja);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($caja);
            $em->flush();
        }

        return $this->redirectToRoute('caja_index');
    }

    /**
     * Creates a form to delete a Caja entity.
     *
     * @param Caja $caja The Caja entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Caja $caja) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('caja_delete', array('id' => $caja->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
