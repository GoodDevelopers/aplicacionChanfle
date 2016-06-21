<?php

namespace JornadasLaboralesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JornadasLaboralesBundle\Entity\TurnoLaboral;
use JornadasLaboralesBundle\Form\TurnoLaboralType;
use DateTime;

/**
 * TurnoLaboral controller.
 *
 * @Route("/turnolaboral")
 */
class TurnoLaboralController extends Controller {

    /**
     * Lists all TurnoLaboral entities.
     *
     * @Route("/", name="turnolaboral_index")
     * @Method("GET")
     */
    public function indexAction(Request $request) {
        $session = $request->getSession();

        $em = $this->getDoctrine()->getManager();

        $turnoLaborals = $em->getRepository('JornadasLaboralesBundle:TurnoLaboral')->findAll();

        // Añadimos el paginador
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $turnoLaborals, //Query o registros
                $this->get('request')->query->get('page', 1), //Iniciar en la pagina1
                8   //Hasta la 8
        );

        return $this->render('turnolaboral/index.html.twig', array(
                    'pagination' => $pagination,
                    'usuario' => $session->get('user'),
                    'turnoLaborals' => $turnoLaborals,
        ));
    }

    /**
     * Creates a new TurnoLaboral entity.
     *
     * @Route("/new", name="turnolaboral_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request) {
        $session = $request->getSession();

        $turnoLaboral = new TurnoLaboral();
        $form = $this->createForm('JornadasLaboralesBundle\Form\TurnoLaboralType', $turnoLaboral);
        $form->handleRequest($request);
        $date = new DateTime('now');
//        $fecha = date_format($date, 'Y-m-d');
//        throw new \Exception($fecha);
        $em = $this->getDoctrine()->getManager();

        $caja = $em->getRepository('JornadasLaboralesBundle:Caja')->findoneBy(array("fecha" => $date));
        if ($form->isSubmitted() && $form->isValid()) {
            $em->persist($turnoLaboral);
            $em->flush();

            return $this->redirectToRoute('turnolaboral_show', array('id' => $turnoLaboral->getId()));
        }

        return $this->render('turnolaboral/new.html.twig', array(
                    'usuario' => $session->get('user'),
                    'caja' => $caja,
                    'turnoLaboral' => $turnoLaboral,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a TurnoLaboral entity.
     *
     * @Route("/{id}", name="turnolaboral_show")
     * @Method("GET")
     */
    public function showAction(TurnoLaboral $turnoLaboral, Request $request) {
        $session = $request->getSession();

        $deleteForm = $this->createDeleteForm($turnoLaboral);

        return $this->render('turnolaboral/show.html.twig', array(
                    'usuario' => $session->get('user'),
                    'turnoLaboral' => $turnoLaboral,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing TurnoLaboral entity.
     *
     * @Route("/{id}/edit", name="turnolaboral_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TurnoLaboral $turnoLaboral) {
        $session = $request->getSession();

        $deleteForm = $this->createDeleteForm($turnoLaboral);
        $editForm = $this->createForm('JornadasLaboralesBundle\Form\TurnoLaboralType', $turnoLaboral);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($turnoLaboral);
            $em->flush();

            return $this->redirectToRoute('turnolaboral_edit', array('id' => $turnoLaboral->getId()));
        }

        return $this->render('turnolaboral/edit.html.twig', array(
                    'usuario' => $session->get('user'),
                    'turnoLaboral' => $turnoLaboral,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a TurnoLaboral entity.
     *
     * @Route("/{id}", name="turnolaboral_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TurnoLaboral $turnoLaboral) {
        $form = $this->createDeleteForm($turnoLaboral);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($turnoLaboral);
            $em->flush();
        }

        return $this->redirectToRoute('turnolaboral_index');
    }

    /**
     * Creates a form to delete a TurnoLaboral entity.
     *
     * @param TurnoLaboral $turnoLaboral The TurnoLaboral entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TurnoLaboral $turnoLaboral) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('turnolaboral_delete', array('id' => $turnoLaboral->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
