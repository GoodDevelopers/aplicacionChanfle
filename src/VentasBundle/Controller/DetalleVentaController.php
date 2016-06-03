<?php

namespace VentasBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use VentasBundle\Entity\DetalleVenta;
use VentasBundle\Form\DetalleVentaType2;

/**
 * DetalleVenta controller.
 *
 * @Route("/detalleventa")
 */
class DetalleVentaController extends Controller {
//    /**
//     * Lists all DetalleVenta entities.
//     *
//     * @Route("/", name="detalleventa_index")
//     * @Method("GET")
//     */
//    public function indexAction()
//    {
//        $em = $this->getDoctrine()->getManager();
//
//        $detalleVentas = $em->getRepository('VentasBundle:DetalleVenta')->findAll();
//
//        return $this->render('detalleventa/index.html.twig', array(
//            'detalleVentas' => $detalleVentas,
//        ));
//    }

    /**
     * Creates a new DetalleVenta entity.
     *
     * @Route("{id}/new", name="detalleventa_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request, $id) {
        $session = $request->getSession();

        $detalleVentum = new DetalleVenta();
        $form = $this->createForm(new DetalleVentaType2());
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $venta = $em->getRepository('VentasBundle:Venta')->findOneBy(array('id' => $id));
        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $cantidad = $data["cantidad"];
            $producto = $data["producto"];
            $detalleVentum->setCantidad($cantidad);
            $detalleVentum->setProducto($producto);
            $detalleVentum->setValorDetalle();
            $valorDetalle = $detalleVentum->getValorDetalle();
            $detalleVentum->setFecha($venta->getFecha());
            $detalleVentum->setVenta($venta);
            $venta->addDetalle($detalleVentum);
            $valorAntes = $venta->getValorTotal();
            $valorNuevo = $valorAntes + $valorDetalle;
            $venta->setValorTotal($valorNuevo);
            $em = $this->getDoctrine()->getManager();
            $em->persist($venta);
            $em->flush();

            return $this->redirectToRoute('venta_detalles', array('id' => $venta->getId()));
        }

        return $this->render('detalleventa/new.html.twig', array(
                    'usuario' => $session->get('user'),
                    'venta' => $venta,
                    'detalleVentum' => $detalleVentum,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a DetalleVenta entity.
     *
     * @Route("/{id}", name="detalleventa_show")
     * @Method("GET")
     */
    public function showAction(DetalleVenta $detalleVentum, Request $request) {
        $session = $request->getSession();

        $deleteForm = $this->createDeleteForm($detalleVentum);
        $em = $this->getDoctrine()->getManager();
        $venta = $em->getRepository('VentasBundle:Venta')->findOneBy(array('id' => $detalleVentum->getId()));
        return $this->render('detalleventa/show.html.twig', array(
                    'usuario' => $session->get('user'),
                    'venta' => $venta,
                    'detalleVentum' => $detalleVentum,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing DetalleVenta entity.
     *
     * @Route("/{id}/{id2}/edit", name="detalleventa_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, DetalleVenta $detalleVentum, $id2) {
        $session = $request->getSession();

        $deleteForm = $this->createDeleteForm($detalleVentum);
        $editForm = $this->createForm(new DetalleVentaType2());
        $editForm->handleRequest($request);
        $valorDetalleV = $detalleVentum->getValorDetalle();
        $em = $this->getDoctrine()->getManager();
        $venta = $em->getRepository('VentasBundle:Venta')->findOneBy(array('id' => $id2));
        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $venta->removeDetalle($detalleVentum);
            $data = $editForm->getData();
            $producto = $data["producto"];
            $cantidad = $data["cantidad"];
            $detalleVentum->setCantidad($cantidad);
            $detalleVentum->setProducto($producto);
            $detalleVentum->setValorDetalle();
            $detalleVentum->setFecha($venta->getFecha());
            $valorAntes = $venta->getValorTotal();
            $valorNuevo = $valorAntes + $detalleVentum->getValorDetalle() - $valorDetalleV;
            $venta->setValorTotal($valorNuevo);
            $venta->addDetalle($detalleVentum);
            $em->persist($venta);
            $em->flush();

            return $this->redirectToRoute('venta_detalles', array('id' => $venta->getId()));
        }

        return $this->render('detalleventa/edit.html.twig', array(
                    'usuario' => $session->get('user'),
                    'venta' => $venta,
                    'detalleVentum' => $detalleVentum,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a DetalleVenta entity.
     *
     * @Route("/{id}", name="detalleventa_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, DetalleVenta $detalleVentum) {
        $form = $this->createDeleteForm($detalleVentum);
        $form->handleRequest($request);
        $em = $this->getDoctrine()->getManager();
        $venta = $em->getRepository('VentasBundle:Venta')->findOneBy(array('id' => $detalleVentum->getVenta()->getId()));
        $valorRestar = $detalleVentum->getValorDetalle();
        if ($form->isSubmitted() && $form->isValid()) {
            $valor = $venta->getValorTotal();
            $valorNuevo = $valor - $valorRestar;
            $venta->removeDetalle($detalleVentum);
            $venta->setValorTotal($valorNuevo);
            $em->remove($detalleVentum);
            $em->persist($venta);
            $em->flush();
        }

        return $this->redirectToRoute('venta_detalles', array('id' => $venta->getId()));
    }

    /**
     * Creates a form to delete a DetalleVenta entity.
     *
     * @param DetalleVenta $detalleVentum The DetalleVenta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(DetalleVenta $detalleVentum) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('detalleventa_delete', array('id' => $detalleVentum->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

}
