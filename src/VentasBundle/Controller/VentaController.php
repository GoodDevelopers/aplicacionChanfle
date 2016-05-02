<?php

namespace VentasBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use VentasBundle\Entity\DetalleVenta;
use VentasBundle\Entity\Venta;
use VentasBundle\Form\VentaType;
use InventarioBundle\Entity\Producto;
use Doctrine\Common\Collections\ArrayCollection;
use UsuariosBundle\Entity\Cliente;

/**
 * Venta controller.
 *
 * @Route("/venta")
 */
class VentaController extends Controller
{
    /**
     * Lists all Venta entities.
     *
     * @Route("/", name="venta_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $ventas = $em->getRepository('VentasBundle:Venta')->findAll();

        return $this->render('venta/index.html.twig', array(
            'ventas' => $ventas,
        ));
    }

    /**
     * Creates a new Venta entity.
     *
     * @Route("/new", name="venta_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $ventum = new Venta();
        $fecha = new \DateTime("now");
        $form = $this->createForm(new ventaType());
        $form->handleRequest($request);
        
     if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();
            $detalles = ($data['detalles']);
            $ventum->setFecha($fecha);
            $ventum->setCliente($this->getCliente($data['cliente']));
            $ventum->setEmpleado($this->getEmpleadoLogueado());
            $ventum->setMesa($data['mesa']);
            $ventum->setPersonasPorMesa($data['personasPorMesa']);
            $ventum->setValorTotal($data['valorTotal']);
            $ventum->setPuntosVenta($data['puntosVenta']);
            $ventum->setTipoVenta($data['tipoVenta']);
            $em = $this->getDoctrine()->getManager();
            for ( $i = 1; $i <= count($detalles) ;$i++){
                $detalle2 = new DetalleVenta();
                $producto =$em->getRepository('InventarioBundle:Producto')->findOneBy(array('nombre' => $detalles[$i]['producto']['nombre']));
                if($producto == null){
                    
                }else{
                $detalle2->setProducto($producto);
                $detalle2->setFecha($ventum->getFecha());
                $detalle2->setCantidad($detalles[$i]['cantidad']);
                $detalle2->setVenta($ventum);
                $detalle2->setValorDetalle();
                $ventum->addDetalle($detalle2);
                }
              

            }
            $em->persist($ventum);
            $em->flush();



            return $this->redirectToRoute('venta_show', array('id' => $ventum->getId()));
        }

        return $this->render('venta/new.html.twig', array(
                    'ventum' => $ventum,
                    'fecha' => $fecha,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Venta entity.
     *
     * @Route("/{id}", name="venta_show")
     * @Method("GET")
     */
    public function showAction(Venta $ventum)
    {
        $deleteForm = $this->createDeleteForm($ventum);

        return $this->render('venta/show.html.twig', array(
            'ventum' => $ventum,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Venta entity.
     *
     * @Route("/{id}/edit", name="venta_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Venta $ventum)
    {
        $deleteForm = $this->createDeleteForm($ventum);
        $editForm = $this->createForm('VentasBundle\Form\VentaType', $ventum);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($ventum);
            $em->flush();

            return $this->redirectToRoute('venta_edit', array('id' => $ventum->getId()));
        }

        return $this->render('venta/edit.html.twig', array(
            'ventum' => $ventum,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Venta entity.
     *
     * @Route("/{id}", name="venta_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Venta $ventum)
    {
        $form = $this->createDeleteForm($ventum);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ventum);
            $em->flush();
        }

        return $this->redirectToRoute('venta_index');
    }

    /**
     * Creates a form to delete a Venta entity.
     *
     * @param Venta $ventum The Venta entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Venta $ventum)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('venta_delete', array('id' => $ventum->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    
     public function getEmpleadoLogueado() {
        $em = $this->getDoctrine()->getManager();
        $usuario = $em->getRepository('UsuariosBundle:Empleado')->findOneBy(array('id' => "1"));
        return $usuario;
    }

    /**
     *
     *
     * @Route("/buscarCliente", name="buscar_cliente_venta")
     * 
     */
    public function buscarCliente(Request $request) {

        if (!$request->isXmlHttpRequest()) {
            throw new \Exception($id);
        }
        $id = $request->get("id");

        $em = $this->getDoctrine()->getManager();
        $cliente = $em->getRepository('UsuariosBundle:Cliente')->findOneBy(array('nuip' => $id));
       
         
        $cliente_response = ( array("id" => $cliente->getId(), "nombre" => $cliente->getNombre(), "Puntos" => $cliente->getPuntosAcumulados()));

        $response = new Response(\json_encode($cliente_response));
        $response->headers->set('Content-Type', 'application/json');

       
        return $response;
    }

    /**
     * Lists all DetalleVenta entities.
     *
     * @Route("/{id}/mostrarDetalles", name="venta_detalles")
     * @Method("GET")
     */
    public function mostrarDetalles($id)
    {
     
        $em = $this->getDoctrine()->getManager();

        $detalleVentas = $em->getRepository('VentasBundle:DetalleVenta')->findBy(array('venta' =>  $id ));

        return $this->render('venta/show_detalles.html.twig', array(
            'detalleVentas' => $detalleVentas,
        ));
    }
    
   
  public function getCliente($nombre){
      
      $cliente = new Cliente;
      $em = $this->getDoctrine()->getManager();
      
      $cliente = $em->getRepository('UsuariosBundle:Cliente')->findoneBy(array('nuip'=> $nombre));
      
      return $cliente;
      
  }
}
