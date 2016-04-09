<?php

namespace VentasBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/ventas")
     */
    public function indexAction()
    {
        return $this->render('VentasBundle:Default:index.html.twig');
    }
}
