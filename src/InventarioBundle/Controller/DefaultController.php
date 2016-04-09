<?php

namespace InventarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/inventario")
     */
    public function indexAction()
    {
        return $this->render('InventarioBundle:Default:index.html.twig');
    }
}
