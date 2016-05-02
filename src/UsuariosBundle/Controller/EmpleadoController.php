<?php

namespace UsuariosBundle\Controller;

use AppBundle\Entity\RolesUsuarios;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use UsuariosBundle\Entity\Empleado;

/**
 * Empleado controller.
 *
 * @Route("/empleados")
 */
class EmpleadoController extends Controller {

    /**
     * Lists all Empleado entities.
     *
     * @Route("/", name="UsuariosBundle_empleado_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request) {
        $session = $request->getSession();
        
        $em = $this->getDoctrine()->getManager();

        $empleados = $em->getRepository('UsuariosBundle:Empleado')->findAll();

        return array(
            'usuario' => $session->get('user'),
            'empleados' => $empleados,
        );
    }

    /**
     * Creates a new Empleado entity.
     *
     * @Route("/new", name="UsuariosBundle_empleado_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $session = $request->getSession();
        
        $empleado = new Empleado();
        $form = $this->createForm('UsuariosBundle\Form\EmpleadoType', $empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($empleado);
            $em->flush();

            //Verificamos si el checkbox esta seleccionado para crear o no el usuario en el fos_user
            $crearCuenta = $_POST['empleado'];  //empleado es el nombre del array que contiene todos los campos de la view
            if (array_values($crearCuenta)[3] == 1) {   //y la 3 posicion es la del checkbox; 1 significa que se envio
//                echo "<h1>Checkeado</h1>";
                $fosUserManager = $this->container->get('fos_user.user_manager');
                $user = $fosUserManager->createUser();
                $user->setUsername($empleado->getNuip());
                $user->setPlainPassword($empleado->getNuip());
                $user->setEmail("null" . $empleado->getNuip() ."@correo.com");
                $user->setEmailCanonical("null". $empleado->getNuip() ."@correo.com");
                $user->setEnabled(true);
                //Revisamos si esta chequeado los privilegios de admin
                $admin = $_POST['checkAdmin'];  //checkAdmin es el id del checkbox
                if ($admin == 1) {  //1 significa que esta chequeado
                    $user->setRoles(array(RolesUsuarios::RolAdmin));
                } else {
                    $user->setRoles(array(RolesUsuarios::RolEmpleado));
                }
                $fosUserManager->updateUser($user);
            }

            return $this->redirectToRoute('UsuariosBundle_empleado_show', array('id' => $empleado->getId()));
        }

        return array(
            'usuario' => $session->get('user'),
            'empleado' => $empleado,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Empleado entity.
     *
     * @Route("/{id}", name="UsuariosBundle_empleado_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Empleado $empleado, Request $request) {
        $session = $request->getSession();
        
        $deleteForm = $this->createDeleteForm($empleado);

        return array(
            'usuario' => $session->get('user'),
            'empleado' => $empleado,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Empleado entity.
     *
     * @Route("/{id}/edit", name="UsuariosBundle_empleado_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, Empleado $empleado) {
        $session = $request->getSession();
        
        $deleteForm = $this->createDeleteForm($empleado);
        $editForm = $this->createForm('UsuariosBundle\Form\EmpleadoType', $empleado);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($empleado);
            $em->flush();

            return $this->redirectToRoute('UsuariosBundle_empleado_edit', array('id' => $empleado->getId()));
        }

        return array(
            'usuario' => $session->get('user'),
            'empleado' => $empleado,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Empleado entity.
     *
     * @Route("/{id}", name="UsuariosBundle_empleado_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Empleado $empleado) {
        $form = $this->createDeleteForm($empleado);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($empleado);
            $em->flush();
        }

        return $this->redirectToRoute('UsuariosBundle_empleado_index');
    }

    /**
     * Creates a form to delete a Empleado entity.
     *
     * @param Empleado $empleado The Empleado entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Empleado $empleado) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('UsuariosBundle_empleado_delete', array('id' => $empleado->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
