<?php

namespace JornadasLaboralesBundle\Controller;

use DateTime;
use JornadasLaboralesBundle\Entity\Caja;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Caja controller.
 *
 * @Route("/registros")
 */
class CajaController extends Controller {

    /**
     * Lists all Caja entities.
     *
     * @Route("/", name="caja_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request) {
        $session = $request->getSession();
        //Creamos la variable usuario
        $usuario = $this->buscarLogin();
        $session->set('user', $usuario);
        
        $em = $this->getDoctrine()->getManager();

        $cajas = $em->getRepository('JornadasLaboralesBundle:Caja')->findAll();

        // Añadimos el paginador
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $cajas, //Query o registros
                $this->get('request')->query->get('page', 1), //Iniciar en la pagina1
                8   //Hasta la 8
        );
        
        return array(
            'pagination' => $pagination,
            'usuario' => $session->get('user'),
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
        $session = $request->getSession();
        
        $caja = new Caja();
        $form = $this->createForm('JornadasLaboralesBundle\Form\CajaType', $caja);
        $form->handleRequest($request);

        $Date = new DateTime("now");
        $fecha = $Date->format('Y-m-d');
        if ($form->isSubmitted() && $form->isValid()) {
            $caja->setFecha($Date);
            $em = $this->getDoctrine()->getManager();
            $em->persist($caja);
            $em->flush();

            return $this->redirectToRoute('caja_show', array('id' => $caja->getId()));
        }

        return array(
            'usuario' => $session->get('user'),
            'fecha' => $fecha,
            'caja' => $caja,
            'form' => $form->createView(),
        );
    }
    
        /**
     *
     *
     * @Route("/validarFecha", name="validar_fecha")
     * 
     */
    public function validarfecha(Request $request) {

        $date = new DateTime("now");
//        $fecha = $date->format('Y-m-d');
        $em = $this->getDoctrine()->getManager();
        $caja = $em->getRepository('JornadasLaboralesBundle:Caja')->findOneBy(array('fecha' => $date));
        if ($caja == null) {
            $data = true;
        } else {
            $data = false;
        }



//        $resultado = ( array("resultado" => $data));
//
        $response = new Response(\json_encode($data));
//        $response->headers->set('Content-Type', 'application/json');
//
//       
        return $response;
    }

    /**
     * Finds and displays a Caja entity.
     *
     * @Route("/{id}", name="caja_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Caja $caja, Request $request) {
        $session = $request->getSession();
        
        $deleteForm = $this->createDeleteForm($caja);

        return array(
            'usuario' => $session->get('user'),
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
        $session = $request->getSession();
        
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
            'usuario' => $session->get('user'),
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
    
    public function buscarLogin() {
        $nuip = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        //Esto se debe cambiar por buscar en los empleados, no en los clientes
        $usuario = $em->getRepository('UsuariosBundle:Empleado')->findOneBy(array('nuip' => $nuip->getUsername()));
        if ($usuario == null) {
            return $nuip;
        } else {
            return $usuario->getNombre();
        }
    }

}
