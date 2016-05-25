<?php

namespace JornadasLaboralesBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JornadasLaboralesBundle\Entity\Cargo;
use JornadasLaboralesBundle\Form\CargoType;

/**
 * Cargo controller.
 *
 * @Route("/cargo")
 */
class CargoController extends Controller
{
    /**
     * Lists all Cargo entities.
     *
     * @Route("/", name="cargo_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $cargos = $em->getRepository('JornadasLaboralesBundle:Cargo')->findAll();

        return $this->render('cargo/index.html.twig', array(
            'cargos' => $cargos,
        ));
    }

    /**
     * Creates a new Cargo entity.
     *
     * @Route("/new", name="cargo_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $cargo = new Cargo();
        $form = $this->createForm('JornadasLaboralesBundle\Form\CargoType', $cargo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cargo);
            $em->flush();

            return $this->redirectToRoute('cargo_show', array('id' => $cargo->getId()));
        }

        return $this->render('cargo/new.html.twig', array(
            'cargo' => $cargo,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Cargo entity.
     *
     * @Route("/{id}", name="cargo_show")
     * @Method("GET")
     */
    public function showAction(Cargo $cargo)
    {
        $deleteForm = $this->createDeleteForm($cargo);

        return $this->render('cargo/show.html.twig', array(
            'cargo' => $cargo,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Cargo entity.
     *
     * @Route("/{id}/edit", name="cargo_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Cargo $cargo)
    {
        $deleteForm = $this->createDeleteForm($cargo);
        $editForm = $this->createForm('JornadasLaboralesBundle\Form\CargoType', $cargo);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cargo);
            $em->flush();

            return $this->redirectToRoute('cargo_edit', array('id' => $cargo->getId()));
        }

        return $this->render('cargo/edit.html.twig', array(
            'cargo' => $cargo,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Cargo entity.
     *
     * @Route("/{id}", name="cargo_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cargo $cargo)
    {
        $form = $this->createDeleteForm($cargo);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cargo);
            $em->flush();
        }

        return $this->redirectToRoute('yes_index');
    }

    /**
     * Creates a form to delete a Cargo entity.
     *
     * @param Cargo $cargo The Cargo entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cargo $cargo)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('cargo_delete', array('id' => $cargo->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
