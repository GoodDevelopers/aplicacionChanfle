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
     * @Template()
     */
    public function indexAction(Request $request) {
        return array(
            'usuario' => $this->buscarLogin(),
        );
    }

    public function buscarLogin() {
        $nuip = $this->getUser();
        $em = $this->getDoctrine()->getManager();
        //Esto se debe cambiar por buscar en los empleados, no en los clientes
        $usuario = $em->getRepository('UsuariosBundle:Cliente')->findOneBy(array('nuip' => $nuip->getUsername()));
        if ($usuario == null) {
            return $nuip;
        } else {
            return $usuario->getNombre();
        }
    }

}
