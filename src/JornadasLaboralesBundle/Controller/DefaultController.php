<?php

namespace JornadasLaboralesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/jornadas")
     */
    public function indexAction()
    {
        return $this->render('JornadasLaboralesBundle:Default:index.html.twig');
    }
}
