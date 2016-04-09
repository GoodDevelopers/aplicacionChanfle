<?php

namespace InventarioBundle\Controller;

use InventarioBundle\Entity\TipoProducto;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * TipoProducto controller.
 *
 * @Route("/tipoproducto")
 */
class TipoProductoController extends Controller {

    /**
     * Lists all TipoProducto entities.
     *
     * @Route("/", name="tipoproducto_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $tipoProductos = $em->getRepository('InventarioBundle:TipoProducto')->findAll();

        return array(
            'tipoProductos' => $tipoProductos,
        );
    }

    /**
     * Creates a new TipoProducto entity.
     *
     * @Route("/new", name="tipoproducto_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $tipoProducto = new TipoProducto();
        $form = $this->createForm('InventarioBundle\Form\TipoProductoType', $tipoProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoProducto);
            $em->flush();

            return $this->redirectToRoute('tipoproducto_show', array('id' => $tipoProducto->getId()));
        }

        return array(
            'tipoProducto' => $tipoProducto,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a TipoProducto entity.
     *
     * @Route("/{id}", name="tipoproducto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(TipoProducto $tipoProducto) {
        $deleteForm = $this->createDeleteForm($tipoProducto);

        return array(
            'tipoProducto' => $tipoProducto,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing TipoProducto entity.
     *
     * @Route("/{id}/edit", name="tipoproducto_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, TipoProducto $tipoProducto) {
        $deleteForm = $this->createDeleteForm($tipoProducto);
        $editForm = $this->createForm('InventarioBundle\Form\TipoProductoType', $tipoProducto);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tipoProducto);
            $em->flush();

            return $this->redirectToRoute('tipoproducto_edit', array('id' => $tipoProducto->getId()));
        }

        return array(
            'tipoProducto' => $tipoProducto,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a TipoProducto entity.
     *
     * @Route("/{id}", name="tipoproducto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TipoProducto $tipoProducto) {
        $form = $this->createDeleteForm($tipoProducto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tipoProducto);
            $em->flush();
        }

        return $this->redirectToRoute('tipoproducto_index');
    }

    /**
     * Creates a form to delete a TipoProducto entity.
     *
     * @param TipoProducto $tipoProducto The TipoProducto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TipoProducto $tipoProducto) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('tipoproducto_delete', array('id' => $tipoProducto->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
