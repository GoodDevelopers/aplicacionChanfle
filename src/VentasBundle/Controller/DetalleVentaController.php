<?php

namespace VentasBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use VentasBundle\Entity\DetalleVenta;

/**
 * DetalleVenta controller.
 *
 * @Route("/detalleventa")
 */
class DetalleVentaController extends Controller
{
    /**
     * Lists all DetalleVenta entities.
     *
     * @Route("/", name="detalleventa_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $detalleVentas = $em->getRepository('VentasBundle:DetalleVenta')->findAll();

        return $this->render('detalleventa/index.html.twig', array(
            'detalleVentas' => $detalleVentas,
        ));
    }

    /**
     * Finds and displays a DetalleVenta entity.
     *
     * @Route("/{id}", name="detalleventa_show")
     * @Method("GET")
     */
    public function showAction(DetalleVenta $detalleVentum)
    {

        return $this->render('detalleventa/show.html.twig', array(
            'detalleVentum' => $detalleVentum,
        ));
    }
}
