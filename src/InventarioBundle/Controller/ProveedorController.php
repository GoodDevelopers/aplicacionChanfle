<?php

namespace InventarioBundle\Controller;

use InventarioBundle\Entity\Proveedor;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Proveedor controller.
 *
 * @Route("/proveedores")
 */
class ProveedorController extends Controller {

    /**
     * Lists all Proveedor entities.
     *
     * @Route("/", name="proveedores_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $proveedors = $em->getRepository('InventarioBundle:Proveedor')->findAll();

        return array(
            'proveedors' => $proveedors,
        );
    }

    /**
     * Creates a new Proveedor entity.
     *
     * @Route("/new", name="proveedores_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $proveedor = new Proveedor();
        $form = $this->createForm('InventarioBundle\Form\ProveedorType', $proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proveedor);
            $em->flush();

            return $this->redirectToRoute('proveedores_show', array('id' => $proveedor->getId()));
        }

        return array(
            'proveedor' => $proveedor,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Proveedor entity.
     *
     * @Route("/{id}", name="proveedores_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Proveedor $proveedor) {
        $deleteForm = $this->createDeleteForm($proveedor);

        return array(
            'proveedor' => $proveedor,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Proveedor entity.
     *
     * @Route("/{id}/edit", name="proveedores_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, Proveedor $proveedor) {
        $deleteForm = $this->createDeleteForm($proveedor);
        $editForm = $this->createForm('InventarioBundle\Form\ProveedorType', $proveedor);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($proveedor);
            $em->flush();

            return $this->redirectToRoute('proveedores_edit', array('id' => $proveedor->getId()));
        }

        return array(
            'proveedor' => $proveedor,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Proveedor entity.
     *
     * @Route("/{id}", name="proveedores_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Proveedor $proveedor) {
        $form = $this->createDeleteForm($proveedor);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($proveedor);
            $em->flush();
        }

        return $this->redirectToRoute('proveedores_index');
    }

    /**
     * Creates a form to delete a Proveedor entity.
     *
     * @param Proveedor $proveedor The Proveedor entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Proveedor $proveedor) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('proveedores_delete', array('id' => $proveedor->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }
    
     /**
     *
     * @Route("/ValidarProveedor", name="validar_proveedor")
     */
    public function validarProveedor(Request $request) {


        $nit = $request->get('nit');

        $em = $this->getDoctrine()->getManager();

        $proveedor = $em->getRepository('InventarioBundle:Proveedor')->findOneBy(array('nit' => $nit));

        if ($proveedor == null) {
            $data = true;
        } else {
            $data = false;
        }
        $response = new Response(\json_encode($data));
         return $response;
    }

}
