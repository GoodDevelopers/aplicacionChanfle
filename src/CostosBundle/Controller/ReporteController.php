<?php

namespace CostosBundle\Controller;

use CostosBundle\Entity\TipoCosto;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Reporte controller.
 *
 * @Route("/reportes")
 */
class ReporteController extends Controller {

    /**
     * Lists all Costo entities.
     *
     * @Route("/", name="reportes_index")
     * @Method("GET")
     * @Template()
     */
    public function indexAction(Request $request) {

        $session = $request->getSession();

        return array(
            'usuario' => $session->get('user'),
        );
    }

    /**
     * @Route("/pdf/utilidad", name="reportes_utilidad")
     * @Method("POST")
     * @Template()
     */
    public function utilidadAction(Request $request) {
        $session = $request->getSession();
        $em = $this->getDoctrine()->getManager();

        $criterio = $_POST['choiceUtilidad'];

        $cantidadVentas = 0;
        $totalVentas = 0;

        $cantidadCostos = 0;
        $produccion = 0;
        $totalCostos = 0;

        $cantGastosOpe = 0;
        $salarios = 0;
        $totalGastosOpe = 0;

        $cantGastosNoOpe = 0;
        $totalGastosNoOpe = 0;

        $dia = "";
        if ($criterio == "Dia") {
            $dia = $_POST['fechaUtilidad'];
            $dia = date_create($dia);

            $ventas = $em->getRepository('VentasBundle:Venta')->findBy(array('fecha' => $dia));

            foreach ($ventas as $venta) {
                $cantidadVentas += 1;
                $totalVentas += $venta->getValorTotal();

                $detallesVenta = $venta->getDetalles();
                foreach ($detallesVenta as $detalleVenta) {
                    $producto = $detalleVenta->getProducto();
                    $detallesProducto = $producto->getDetallesProducto();
                    $nom = $producto->getNombre();
                    echo "nombre: $nom / ";
                    foreach ($detallesProducto as $detalleProducto) {
                        $cantidadNece = $detalleProducto->getCantidadNecesaria();
                        $precio = $detalleProducto->getMateriaPrima()->getPrecio();
                        $unidadMedida = $detalleProducto->getMateriaPrima()->getUnidadDeMedida();
                        $idMate = $detalleProducto->getMateriaPrima()->getId();
                        echo "</br>id: $idMate / unidad: $unidadMedida / ";
                        $valorSumar = 0;

                        switch ($unidadMedida) {
                            case "libra":
                                $valorLibra = floatval(floatval($precio) / 453.592);
                                $valorSumar = floatval($valorLibra * $cantidadNece);
                                break;
                            case "kilo":
                                $valorKilo = ($precio / 1000);
                                $valorSumar = floatval($valorKilo * $cantidadNece);
                                break;
                            case "litro":
                                $valorLitro = ($precio / 1000);
                                $valorSumar = floatval($valorLitro * $cantidadNece);
                                break;
                            case "unidad":
                                $valorSumar = floatval($precio * $cantidadNece);
                                echo "entro / $valorSumar</br>";
                                break;
                            case "gramo":
                                $valorSumar = floatval($precio * $cantidadNece);
                                echo "entro / $valorSumar</br>";
                                break;
                            default:
                                break;
                        }

                        $produccion += $valorSumar;
                    }
                }
            }

            $costos = $em->getRepository('CostosBundle:Costo')->findBy(array('fecha' => $dia));
            foreach ($costos as $costo) {
                if ($costo->getTipoCosto() == TipoCosto::Fijo || $costo->getTipoCosto() == TipoCosto::Variable) {
                    $cantidadCostos += 1;
                    $totalCostos += $costo->getValor();
                } else if ($costo->getTipoCosto() == TipoCosto::Operacional) {
                    $cantGastosOpe += 1;
                    $totalGastosOpe += $costo->getValor();
                } else if ($costo->getTipoCosto() == TipoCosto::NoOperacional) {
                    $cantGastosNoOpe += 1;
                    $totalGastosNoOpe += $costo->getValor();
                }
            }
        }

        if ($criterio == "Mes") {
            $fechaFinal = date('Y-m-j');
            $fechaInicial = strtotime('-1 month', strtotime($fechaFinal));
            $fechaInicial = date('Y-m-j', $fechaInicial);


            $ventas = $em->getRepository('VentasBundle:Venta')->findVentasMes($fechaInicial, $fechaFinal);
            foreach ($ventas as $venta) {
                $cantidadVentas += 1;
                $totalVentas += $venta->getValorTotal();

                $detallesVenta = $venta->getDetalles();
                foreach ($detallesVenta as $detalleVenta) {
                    $producto = $detalleVenta->getProducto();
                    $detallesProducto = $producto->getDetallesProducto();
                    foreach ($detallesProducto as $detalleProducto) {
                        $cantidadNece = $detalleProducto->getCantidadNecesaria();
                        $precio = $detalleProducto->getMateriaPrima()->getPrecio();
                        $unidadMedida = $detalleProducto->getMateriaPrima()->getUnidadDeMedida();

                        $valorSumar = 0;

                        switch ($unidadMedida) {
                            case "libra":
                                $valorLibra = floatval(floatval($precio) / 453.592);
                                $valorSumar = floatval($valorLibra * $cantidadNece);
                                break;
                            case "kilo":
                                $valorKilo = ($precio / 1000);
                                $valorSumar = floatval($valorKilo * $cantidadNece);
                                break;
                            case "litro":
                                $valorLitro = ($precio / 1000);
                                $valorSumar = floatval($valorLitro * $cantidadNece);
                                break;
                            case "unidad":
                                $valorSumar = floatval($precio * $cantidadNece);
                                break;
                            case "gramo":
                                $valorSumar = floatval($precio * $cantidadNece);
                                break;
                            default:
                                break;
                        }

                        $produccion += $valorSumar;
                    }
                }
            }

            $costos = $em->getRepository('CostosBundle:Costo')->findCostosMes($fechaInicial, $fechaFinal);
            foreach ($costos as $costo) {
                if ($costo->getTipoCosto() == TipoCosto::Fijo || $costo->getTipoCosto() == TipoCosto::Variable) {
                    $cantidadCostos += 1;
                    $totalCostos += $costo->getValor();
                } else if ($costo->getTipoCosto() == TipoCosto::Operacional) {
                    $cantGastosOpe += 1;
                    $totalGastosOpe += $costo->getValor();
                } else if ($costo->getTipoCosto() == TipoCosto::NoOperacional) {
                    $cantGastosNoOpe += 1;
                    $totalGastosNoOpe += $costo->getValor();
                }
            }
        }

        $totalGastosOpe += $salarios;
        $totalCostos += $produccion;

        $utilidadBruta = $totalVentas - $totalCostos;
        $utilidadOpe = $utilidadBruta - $totalGastosOpe;
        $utilidadNeta = $utilidadOpe - $totalGastosNoOpe;

        $fecha = new \DateTime("now");

        $html = $this->renderView('CostosBundle:reporte:utilidad.html.twig', array(
//            'clientes' => $clientes
            'tipo' => 'Utilidad',
            'fecha' => $fecha->format('d-m-Y H:i:s'),
            'periodo' => $criterio,
            'usuario' => $session->get('user'),
            'cantVentas' => $cantidadVentas,
            'totalVentas' => $totalVentas,
            'cantCostos' => $cantidadCostos,
            'produccion' => $produccion,
            'totalCostos' => $totalCostos,
            'utilidadBruta' => $utilidadBruta,
            'cantOperacionales' => $cantGastosOpe,
            'salarios' => $salarios,
            'totalGastosOpe' => $totalGastosOpe,
            'utilidadOpe' => $utilidadOpe,
            'cantGastosNoOpe' => $cantGastosNoOpe,
            'totalGastosNoOpe' => $totalGastosNoOpe,
            'utilidadNeta' => $utilidadNeta,
        ));

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200, array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="InformeClientes.pdf"'
        ));
//        return array(
//            'tipo' => 'Utilidad',
//            'periodo' => $criterio,
//            'usuario' => $session->get('user'),
//        );
    }

    /**
     * Lists all Costo entities.
     *
     * @Route("/prueba", name="reportes_prueba")
     * @Method("GET")
     */
    public function pruebaAction() {
//        return $this->render('CosotosBundle:reporte:index.html.twig');
        return $this->render('baseReportes.html.twig');
    }

}
