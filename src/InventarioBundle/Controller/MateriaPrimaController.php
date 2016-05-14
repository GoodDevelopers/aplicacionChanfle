<?php

namespace InventarioBundle\Controller;

use InventarioBundle\Entity\MateriaPrima;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * MateriaPrima controller.
 *
 * @Route("/materiaprima")
 */
class MateriaPrimaController extends Controller {

    /**
     * Lists all MateriaPrima entities.
     *
     * @Route("/", name="materiaprima_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $materiaPrimas = $em->getRepository('InventarioBundle:MateriaPrima')->findAll();

        return array(
            'materiaPrimas' => $materiaPrimas,
        );
    }

    /**
     * Creates a new MateriaPrima entity.
     *
     * @Route("/new", name="materiaprima_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $materiaPrima = new MateriaPrima();
        $form = $this->createForm('InventarioBundle\Form\MateriaPrimaType', $materiaPrima);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($materiaPrima);
            $em->flush();

            return $this->redirectToRoute('materiaprima_show', array('id' => $materiaPrima->getId()));
        }

        return array(
            'materiaPrima' => $materiaPrima,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a MateriaPrima entity.
     *
     * @Route("/{id}", name="materiaprima_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(MateriaPrima $materiaPrima) {
        $deleteForm = $this->createDeleteForm($materiaPrima);

        return array(
            'materiaPrima' => $materiaPrima,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing MateriaPrima entity.
     *
     * @Route("/{id}/edit", name="materiaprima_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, MateriaPrima $materiaPrima) {
        $deleteForm = $this->createDeleteForm($materiaPrima);
        $editForm = $this->createForm('InventarioBundle\Form\MateriaPrimaType', $materiaPrima);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($materiaPrima);
            $em->flush();

            return $this->redirectToRoute('materiaprima_edit', array('id' => $materiaPrima->getId()));
        }

        return array(
            'materiaPrima' => $materiaPrima,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a MateriaPrima entity.
     *
     * @Route("/{id}", name="materiaprima_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, MateriaPrima $materiaPrima) {
        $form = $this->createDeleteForm($materiaPrima);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($materiaPrima);
            $em->flush();
        }

        return $this->redirectToRoute('materiaprima_index');
    }

    /**
     * Creates a form to delete a MateriaPrima entity.
     *
     * @param MateriaPrima $materiaPrima The MateriaPrima entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(MateriaPrima $materiaPrima) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('materiaprima_delete', array('id' => $materiaPrima->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     *
     * @Route("/buscarMateria", name="buscarMateria")
     */
    public function buscarAction(Request $request) {
        //Esto como que esta malo xD
        if (!$request->isXmlHttpRequest()) {
            throw new \Exception($id);
        }

        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();

        $materia = $em->getRepository('InventarioBundle:MateriaPrima')->findOneBy(array('id' => $id));

        if ($materia === null) {
            $response = new Response(-1);
            return $response;
        } else {
            $materiaResponse = (array("id" => $materia->getId(), "nombre" => $materia->getNombre(),
                "unidadDeMedida" => $materia->getUnidadDeMedida()));
            $response = new Response(\json_encode($materiaResponse));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    }

}
