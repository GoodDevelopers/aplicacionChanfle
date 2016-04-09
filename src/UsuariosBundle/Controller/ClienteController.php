<?php

namespace UsuariosBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use UsuariosBundle\Entity\Cliente;

/**
 * Cliente controller.
 *
 * @Route("/clientes")
 */
class ClienteController extends Controller {

    /**
     * Lists all Cliente entities.
     *
     * @Route("/", name="clientes_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $clientes = $em->getRepository('UsuariosBundle:Cliente')->findAll();

        return array(
            'clientes' => $clientes,
        );
    }

    /**
     * Creates a new Cliente entity.
     *
     * @Route("/new", name="clientes_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $cliente = new Cliente();
        $form = $this->createForm('UsuariosBundle\Form\ClienteType', $cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();

            $fosUserManager = $this->container->get('fos_user.user_manager');
            $user = $fosUserManager->createUser();
            $user->setUsername($cliente->getNuip());
            $user->setPlainPassword($cliente->getNuip());
            $user->setEmail($cliente->getEmail());
            $user->setEmailCanonical($cliente->getEmail());
            $user->setEnabled(true);

            $user->setRoles(array($user::ROLE_DEFAULT));
            $fosUserManager->updateUser($user);

            $em->flush();

            return $this->redirectToRoute('clientes_show', array('id' => $cliente->getId()));
        }

        return array(
            'cliente' => $cliente,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Cliente entity.
     *
     * @Route("/{id}", name="clientes_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Cliente $cliente) {
        $deleteForm = $this->createDeleteForm($cliente);

        return array(
            'cliente' => $cliente,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cliente entity.
     *
     * @Route("/{id}/edit", name="clientes_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, Cliente $cliente) {
        $deleteForm = $this->createDeleteForm($cliente);
        $editForm = $this->createForm('UsuariosBundle\Form\ClienteType', $cliente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($cliente);
            $em->flush();

            return $this->redirectToRoute('clientes_index');
        }

        return array(
            'cliente' => $cliente,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Cliente entity.
     *
     * @Route("/{id}", name="clientes_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Cliente $cliente) {
        $form = $this->createDeleteForm($cliente);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($cliente);
            $em->flush();

//            $fosUserManager = $this->container->get('fos_user.user_manager');
//            $fosUserManager->
        }

        return $this->redirectToRoute('clientes_index');
    }

    /**
     * Creates a form to delete a Cliente entity.
     *
     * @param Cliente $cliente The Cliente entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Cliente $cliente) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('clientes_delete', array('id' => $cliente->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     *
     * @Route("/buscarNuip", name="buscarCliente")
     */
    public function buscarAction(Request $request) {
        //Esto como que esta malo xD
        if (!$request->isXmlHttpRequest()) {
            throw new \Exception($id);
        }

        $id = $request->get('id');

        $em = $this->getDoctrine()->getManager();

        $cliente = $em->getRepository('UsuariosBundle:Cliente')->findOneBy(array('nuip' => $id));

        if ($cliente === null) {
            $response = new Response(-1);
            return $response;
        } else {

            $clienteResponse = (array("id" => $cliente->getId(), "nuip" => $cliente->getNuip(), "nombre" => $cliente->getNombre(),
                "fechaDeNacimiento" => $cliente->getFechaDeNacimiento(), "puntos" => $cliente->getPuntosAcumulados(),
                "email" => $cliente->getEmail()));

            $response = new Response(\json_encode($clienteResponse));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    }

}
