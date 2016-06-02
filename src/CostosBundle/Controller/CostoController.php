<?php

namespace CostosBundle\Controller;

use CostosBundle\Entity\Costo;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Costo controller.
 *
 * @Route("/costos")
 */
class CostoController extends Controller {

    /**
     * Lists all Costo entities.
     *
     * @Route("/", name="costo_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();

        $session = $request->getSession();

        $costos = $em->getRepository('CostosBundle:Costo')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $costos, //Query o registros
                $this->get('request')->query->get('page', 1), //Iniciar en la pagina1
                8   //Hasta la 8
        );

        return array(
            'pagination' => $pagination,
            'usuario' => $session->get('user'),
            'costos' => $costos,
        );
    }

    /**
     * Creates a new Costo entity.
     *
     * @Route("/new", name="costo_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $session = $request->getSession();

        $costo = new Costo();
        $form = $this->createForm('CostosBundle\Form\CostoType', $costo);
        $form->handleRequest($request);
        $Date = new \DateTime("now");
        $fecha = $Date->format('d/m/y');

        if ($form->isSubmitted() && $form->isValid()) {
            $costo->setFecha($Date);
            $costo->setEmpleado($this->getEmpleadoLogueado());
            $em = $this->getDoctrine()->getManager();
            $em->persist($costo);
            $em->flush();

            return $this->redirectToRoute('costo_show', array('id' => $costo->getId()));
        }

        return array(
            'usuario' => $session->get('user'),
            'fecha' => $fecha,
            'costo' => $costo,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Costo entity.
     *
     * @Route("/{id}", name="costo_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Costo $costo, Request $request) {
        $session = $request->getSession();

        $deleteForm = $this->createDeleteForm($costo);

        return array(
            'usuario' => $session->get('user'),
            'costo' => $costo,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Costo entity.
     *
     * @Route("/{id}/edit", name="costo_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, Costo $costo) {
        $session = $request->getSession();

        $deleteForm = $this->createDeleteForm($costo);
        $editForm = $this->createForm('CostosBundle\Form\CostoType', $costo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($costo);
            $em->flush();

            return $this->redirectToRoute('costo_edit', array('id' => $costo->getId()));
        }

        return array(
            'usuario' => 'user',
            'costo' => $costo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Costo entity.
     *
     * @Route("/{id}", name="costo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Costo $costo) {
        $form = $this->createDeleteForm($costo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($costo);
            $em->flush();
        }

        return $this->redirectToRoute('costo_index');
    }

    /**
     * Creates a form to delete a Costo entity.
     *
     * @param Costo $costo The Costo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Costo $costo) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('costo_delete', array('id' => $costo->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    private function getEmpleadoLogueado() {
        $nuip = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        //Esto se debe cambiar por buscar en los empleados, no en los clientes
        $usuario = $em->getRepository('UsuariosBundle:Empleado')->findOneBy(array('nuip' => $nuip->getUsername()));
        
        return $usuario;
    }

}
