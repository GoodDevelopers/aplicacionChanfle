<?php

namespace UsuariosBundle\Controller;

use AppBundle\Entity\RolesUsuarios;
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
     * @Method("GET")$session = $request->getSession();
     * @Template()
     */
    public function indexAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository('UsuariosBundle:Cliente')->findAllOrderedByPuntos();

        

        //Mandar correo
//        $message = \Swift_Message::newInstance()
//                ->setSubject('Asunto')
//                ->setFrom('goodevelopers@gmail.com')
//                ->setTo('arias-a@hotmail.com')
//                ->setBody(
//                $this->renderView(
//                        'email.html.twig', array('titulo' => "HOLIS")
//                ), 'text/html'
//                )
//        ;
//        $this->get('mailer')->send($message);
        // Añadimos el paginador
        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $clientes, //Query o registros
                $this->get('request')->query->get('page', 1), //Iniciar en la pagina1
                7   //Hasta la 8
        );

        return array(
            'usuario' => $session->get('user'),
            'pagination' => $pagination,
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
        $session = $request->getSession();

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

            $user->setRoles(array(RolesUsuarios::RolCliente));
            $fosUserManager->updateUser($user);

            $em->flush();

            return $this->redirectToRoute('clientes_index');
        }

        return array(
            'usuario' => $session->get('user'),
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
    public function showAction(Cliente $cliente, Request $request) {
        $session = $request->getSession();

        $deleteForm = $this->createDeleteForm($cliente);

        return array(
            'usuario' => $session->get('user'),
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
        $session = $request->getSession();

        $editForm = $this->createForm('UsuariosBundle\Form\ClienteType', $cliente);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();

            //Este es username del cliente antes de ser editado
            $idViejo = $_POST['idviejo'];

            $fosUserManager = $this->container->get('fos_user.user_manager');
            //Obtenemos el usuario ya existente para modificarlo
            $user = $fosUserManager->findUserByUsername($idViejo);

            $user->setUsername($cliente->getNuip());
            $user->setPlainPassword($cliente->getNuip());
            $user->setEmail($cliente->getEmail());
            $user->setEmailCanonical($cliente->getEmail());

            $fosUserManager->updateUser($user);
            $em->persist($cliente);
            $em->flush();

            return $this->redirectToRoute('clientes_index');
        }

        return array(
            'usuario' => $session->get('user'),
            'cliente' => $cliente,
            'edit_form' => $editForm->createView(),
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


            $fosUserManager = $this->container->get('fos_user.user_manager');
            $user = $fosUserManager->findUserByUsername($cliente->getNuip());
            $fosUserManager->deleteUser($user);
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
            throw new \Exception($dato);
        }

        $dato = $request->get('dato');
        $criterio = $request->get('criterio');

        $em = $this->getDoctrine()->getManager();

        $cliente = $em->getRepository('UsuariosBundle:Cliente')->findOneBy(array("$criterio" => $dato));

        if ($cliente === null) {
            $response = new Response(-1);
            return $response;
        } else {

            $clienteResponse = (array("id" => $cliente->getId(), "nuip" => $cliente->getNuip(), "nombre" => $cliente->getNombre(),
                "fechaDeNacimiento" => $cliente->getFechaDeNacimiento()->format('d-m-Y'), "puntos" => $cliente->getPuntosAcumulados(),
                "email" => $cliente->getEmail()));

            $response = new Response(\json_encode($clienteResponse));
            $response->headers->set('Content-Type', 'application/json');

            return $response;
        }
    }

    /**
     * @Route("/generar/pdf", name="generarPdf")
     */
    public function pdfAction() {
        $em = $this->getDoctrine()->getManager();
        $clientes = $em->getRepository('UsuariosBundle:Cliente')->findAllOrderedByPuntos();

//        return array('clientes' => $clientes);
        $html = $this->renderView('UsuariosBundle:cliente:pdf.html.twig', array(
            'clientes' => $clientes
        ));

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html, array(
                    'orientation' => 'landscape',
                )), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="InformeClientes.pdf"'
        ));
    }

}
