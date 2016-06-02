<?php

namespace InventarioBundle\Controller;

use InventarioBundle\Entity\DetalleProducto;
use InventarioBundle\Entity\Producto;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Producto controller.
 *
 * @Route("/productos")
 */
class ProductoController extends Controller {

    /**
     * Lists all Producto entities.
     *
     * @Route("/", name="producto_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request) {
        $session = $request->getSession();
        
        $em = $this->getDoctrine()->getManager();

        $productos = $em->getRepository('InventarioBundle:Producto')->findAll();

        $paginator = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
                $productos, //Query o registros
                $this->get('request')->query->get('page', 1), //Iniciar en la pagina1
                8   //Hasta la 8
        );
        
        return array(
            'pagination' => $pagination,
            'usuario' => $session->get('user'),
            'productos' => $productos,
        );
    }

    /**
     * Creates a new Producto entity.
     *
     * @Route("/new", name="producto_new")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function newAction(Request $request) {
        $session = $request->getSession();
        
        $producto = new Producto();
        $form = $this->createForm('InventarioBundle\Form\ProductoType', $producto);
        $form->handleRequest($request);

        $emMaterias = $this->getDoctrine()->getManager()->getRepository('InventarioBundle:MateriaPrima');

        if ($form->isSubmitted() && $form->isValid()) {
            $producto->setRuta('');
            $emProductos = $this->getDoctrine()->getManager();

            $cantMaterias = $request->get("cantMaterias");

            for ($i = 1; $i <= $cantMaterias; $i++) {
                $detalleProducto = new DetalleProducto();

                $idMateria = $request->get("choiceMateria" . $i);
                if ($idMateria != null) {
                    $materia = $emMaterias->findOneBy(array('id' => $idMateria));
                    $cantidad = $request->get("cantidad" . $i);

                    $detalleProducto->setCantidadNecesaria($cantidad);
                    $detalleProducto->setMateriaPrima($materia);
                    $detalleProducto->setProducto($producto);

                    $producto->addDetallesProducto($detalleProducto);
                }
            }
            $emProductos->persist($producto);
            $emProductos->flush();

            return $this->redirectToRoute('producto_index');
        }

        $materias = $emMaterias->findAllOrderedByNombre();

        return array(
            'usuario' => $session->get('user'),
            'producto' => $producto,
            'materias' => $materias,
            'form' => $form->createView(),
        );
    }

    /**
     * Finds and displays a Producto entity.
     *
     * @Route("/{id}", name="producto_show")
     * @Method("GET")
     * @Template()
     */
    public function showAction(Producto $producto, Request $request) {
        $session = $request->getSession();
        
        $deleteForm = $this->createDeleteForm($producto);

        return array(
            'usuario' => $session->get('user'),
            'producto' => $producto,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Producto entity.
     *
     * @Route("/{id}/edit", name="producto_edit")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function editAction(Request $request, Producto $producto) {
        $session = $request->getSession();
        
        $editForm = $this->createForm('InventarioBundle\Form\ProductoType', $producto);
        $editForm->handleRequest($request);

        $emMaterias = $this->getDoctrine()->getManager()->getRepository('InventarioBundle:MateriaPrima');

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $emProducto = $this->getDoctrine()->getManager();
            $emProducto->remove($producto);
            $emProducto->flush();

            $productos = $producto->getDetallesProducto();
            
            foreach($productos as $detalle){
                $producto->removeDetallesProducto($detalle);
            }

            $cantMaterias = $request->get("cantMaterias");

            for ($i = 1; $i <= $cantMaterias; $i++) {
                $detalleProducto = new DetalleProducto();

                $idMateria = $request->get("choiceMateria" . $i);
                if ($idMateria != null) {
                    $materia = $emMaterias->findOneBy(array('id' => $idMateria));
                    $cantidad = $request->get("cantidad" . $i);

                    $detalleProducto->setCantidadNecesaria($cantidad);
                    $detalleProducto->setMateriaPrima($materia);
                    $detalleProducto->setProducto($producto);

                    $producto->addDetallesProducto($detalleProducto);
                }
            }
            
            $emProducto->persist($producto);
            $emProducto->flush();

            return $this->redirectToRoute('producto_index');
        }

        $materias = $emMaterias->findAllOrderedByNombre();

        return array(
            'usuario' => $session->get('user'),
            'producto' => $producto,
            'materias' => $materias,
            'edit_form' => $editForm->createView(),
        );
    }

    /**
     * Deletes a Producto entity.
     *
     * @Route("/{id}", name="producto_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Producto $producto) {
        $form = $this->createDeleteForm($producto);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($producto);
            $em->flush();
        }

        return $this->redirectToRoute('producto_index');
    }

    /**
     * Creates a form to delete a Producto entity.
     *
     * @param Producto $producto The Producto entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Producto $producto) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('producto_delete', array('id' => $producto->getId())))
                        ->setMethod('DELETE')
                        ->getForm()
        ;
    }

    /**
     *
     *
     * @Route("/buscar/producto", name="buscar_producto")
     * 
     */
    public function buscarProdcuto(Request $request) {
        $nombre = $request->get("nombre_p");
        $em = $this->getDoctrine()->getManager();

        $producto = $em->getRepository('InventarioBundle:Producto')->findOneBy(array("nombre" => $nombre));




        $producto_response = (array('precio' => $producto->getPrecio()));

        $response = new Response(\json_encode($producto_response));
        $response->headers->set('Content-Type', 'application/json');



        return $response;
    }

    /**
     *
     * @Route("/getMaterias", name="getMaterias")
     */
    public function getMaterias(Request $request) {
        $em = $this->getDoctrine()->getManager()->getRepository('InventarioBundle:MateriaPrima');

//        Otra forma de hacer la busqueda ordenada, pero no es la recomendada
//        $materias = $em->findBy(array(), array('nombre' => 'ASC'));

        $materias = $em->findAllOrderedByNombre();  //Metodo creado en el MateriaPirmaRepository

        $materiasResponse = array();

        foreach ($materias as $mat) {
            $materiasResponse[] = array('id' => $mat->getId(), 'nombre' => $mat->getNombre());
        }

//        asort($materiasResponse); //Otra forma de ordenar (averiguar mas sobre esto)

        $response = new Response(\json_encode($materiasResponse));
        $response->headers->set('Content-Type', 'application/json');

        return $response;
    }
    
       /**
     *
     *
     * @Route("/buscar/productos", name="buscar_productos")
     * 
     */
    public function buscarProductos(Request $request) {
        $nombre = $request->get("tipoP");
        $em = $this->getDoctrine()->getManager();

        $tipo = $em->getRepository('InventarioBundle:TipoProducto')->findOneBy(array("nombre" => $nombre));
//        throw new \Exception(count($tipo));
        $productos = $em->getRepository('InventarioBundle:Producto')->findBy(array("tipoProducto" => $tipo->getId()));

        for ($i = 0; $i < count($productos); $i ++){
            $Nombres[$i] = $productos[$i]->getNombre();
        }


        $productos_response = (array('productos' => $Nombres));

        $response = new Response(\json_encode($productos_response));
        $response->headers->set('Content-Type', 'application/json');



        return $response;
    }
    


}
