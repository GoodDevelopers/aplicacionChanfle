<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/", name="homepage")
     * @Method("GET")
     */
    public function indexAction(Request $request) {
        //Creamos una variable de sesion con el nombre del usuario logueado para usarlo en todas las vistas y controladores
//        $session = $request->getSession();
//        $usuario = $this->buscarLogin();
//        $session->set('user', $usuario);
        
        return $this->redirectToRoute('fos_user_security_login');
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
