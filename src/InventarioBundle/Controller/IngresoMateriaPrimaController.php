<?php

namespace InventarioBundle\Controller;

use InventarioBundle\Entity\IngresoMateriaPrima;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * IngresoMateriaPrima controller.
 *
 * @Route("/ingresomateriaprima")
 */
class IngresoMateriaPrimaController extends Controller {

    /**
     * Lists all IngresoMateriaPrima entities.
     *
     * @Route("/", name="ingresomateriaprima_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $ingresoMateriaPrimas = $em->getRepository('InventarioBundle:IngresoMateriaPrima')->findAll();

        return array(
            'ingresoMateriaPrimas' => $ingresoMateriaPrimas,
        );
    }

    /**
     * Creates a new IngresoMateriaPrima entity.
     *
     * @Route("/new", name="ingresomateriaprima_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $ingresoMateriaPrima = new IngresoMateriaPrima();
        $form = $this->createForm('InventarioBundle\Form\IngresoMateriaPrimaType', $ingresoMateriaPrima);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $ingresoMateriaPrima->setEmpleado($this->getEmpleadoLogueado());
            $ingresoMateriaPrima->setFecha(new \DateTime());
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingresoMateriaPrima);
            $em->flush();

            return $this->redirectToRoute('ingresomateriaprima_show', array('id' => $ingresoMateriaPrima->getId()));
        }

        return array(
            'ingresoMateriaPrima' => $ingresoMateriaPrima,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a IngresoMateriaPrima entity.
     *
     * @Route("/{id}", name="ingresomateriaprima_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(IngresoMateriaPrima $ingresoMateriaPrima) {
        $deleteForm = $this->createDeleteForm($ingresoMateriaPrima);

        return array(
            'ingresoMateriaPrima' => $ingresoMateriaPrima,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing IngresoMateriaPrima entity.
     *
     * @Route("/{id}/edit", name="ingresomateriaprima_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, IngresoMateriaPrima $ingresoMateriaPrima) {
        $deleteForm = $this->createDeleteForm($ingresoMateriaPrima);
        $editForm = $this->createForm('InventarioBundle\Form\IngresoMateriaPrimaType', $ingresoMateriaPrima);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ingresoMateriaPrima);
            $em->flush();

            return $this->redirectToRoute('ingresomateriaprima_edit', array('id' => $ingresoMateriaPrima->getId()));
        }

        return array(
            'ingresoMateriaPrima' => $ingresoMateriaPrima,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a IngresoMateriaPrima entity.
     *
     * @Route("/{id}", name="ingresomateriaprima_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, IngresoMateriaPrima $ingresoMateriaPrima) {
        $form = $this->createDeleteForm($ingresoMateriaPrima);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ingresoMateriaPrima);
            $em->flush();
        }

        return $this->redirectToRoute('ingresomateriaprima_index');
    }

    /**
     * Creates a form to delete a IngresoMateriaPrima entity.
     *
     * @param IngresoMateriaPrima $ingresoMateriaPrima The IngresoMateriaPrima entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(IngresoMateriaPrima $ingresoMateriaPrima) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('ingresomateriaprima_delete', array('id' => $ingresoMateriaPrima->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }
    
    public function getEmpleadoLogueado() {
        $nuip = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuariosBundle:Empleado')->findOneBy(array('nuip' => $nuip->getUsername()));
        if ($usuario == null) {
            return $nuip;
        } else {
            return $usuario;
        }
    }

}
