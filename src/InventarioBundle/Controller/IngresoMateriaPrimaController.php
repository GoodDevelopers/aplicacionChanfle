<?php

namespace InventarioBundle\Controller;

use InventarioBundle\Entity\IngresoMateriaPrima;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use InventarioBundle\Entity\MateriaPrima;

/**
 * IngresoMateriaPrima controller.
 *
 * @Route("/ingresosmateriaprima")
 */
class IngresoMateriaPrimaController extends Controller {

    /**
     * Lists all IngresoMateriaPrima entities.
     *
     * @Route("/", name="ingresomateriaprima_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request) {
        $session = $request->getSession();
        
        $em = $this->getDoctrine()->getManager();

        $ingresoMateriaPrimas = $em->getRepository('InventarioBundle:IngresoMateriaPrima')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $ingresoMateriaPrimas, //Query o registros
                $this->get('request')->query->get('page', 1), //Iniciar en la pagina1
                7   //Hasta la 8
        );
        
        return array(
            'pagination' => $pagination,
            'usuario' => $session->get('user'),
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
        $session = $request->getSession();
        
        $ingresoMateriaPrima = new IngresoMateriaPrima();
        $form = $this->createForm('InventarioBundle\Form\IngresoMateriaPrimaType', $ingresoMateriaPrima);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            
            $ingresoMateriaPrima->setEmpleado($this->getEmpleadoLogueado());
            $ingresoMateriaPrima->setFecha(new \DateTime());
            
            $valor = $_POST['ingreso_materia_prima']['valor'];
            $cantidad = $_POST['ingreso_materia_prima']['cantidad'];
            
            $valorPorUnidad = floatval($valor / $cantidad);
            
            $materia = $em->getRepository('InventarioBundle:MateriaPrima')->findOneBy(array("id" => $ingresoMateriaPrima->getMateriaPrima()));
            $nuevacantidad = $materia->getCantidad() + $ingresoMateriaPrima->getCantidad();
            $materia->setCantidad($nuevacantidad);
            $materia->setPrecio(floatval($valorPorUnidad));
            
            $em->persist($ingresoMateriaPrima);
            $em->persist($materia);
            $em->flush();

            return $this->redirectToRoute('ingresomateriaprima_show', array('id' => $ingresoMateriaPrima->getId()));
        }

        return array(
            'usuario' => $session->get('user'),
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
    public function showAction(IngresoMateriaPrima $ingresoMateriaPrima, Request $request) {
        $session = $request->getSession();
        
        $deleteForm = $this->createDeleteForm($ingresoMateriaPrima);

        return array(
            'usuario' => $session->get('user'),
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
        $session = $request->getSession();
        
        $deleteForm = $this->createDeleteForm($ingresoMateriaPrima);
        $editForm = $this->createForm('InventarioBundle\Form\IngresoMateriaPrimaType', $ingresoMateriaPrima);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            
            $idMateriaPrima = $_POST['idMateria'];
            
            $em = $this->getDoctrine()->getManager();

            $materiaPrima = $em->getRepository('InventarioBundle:MateriaPrima')->findOneBy(array('id' => $idMateriaPrima));
            
            $ingresoMateriaPrima->setMateriaPrima($materiaPrima);
            
            $valor = $ingresoMateriaPrima->getValor();
            $cantidad = $ingresoMateriaPrima->getCantidad();
            
            $valorUnitario = floatval($valor / $cantidad);
            
            $materiaPrima->setPrecio(floatval($valorUnitario));
            
            $em->persist($materiaPrima);
            $em->persist($ingresoMateriaPrima);
            $em->flush();

            return $this->redirectToRoute('ingresomateriaprima_edit', array('id' => $ingresoMateriaPrima->getId()));
        }

        return array(
            'usuario' => $session->get('user'),
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
