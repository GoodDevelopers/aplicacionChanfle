<?php

namespace CostosBundle\Controller;

use CostosBundle\Entity\TipoCosto;
use DateTime;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use VentasBundle\Entity\TipoVenta;

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
     * @Route("/pdf/utilidad", name="reporte_utilidad")
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
        $fijosYvariables = 0;
        $produccion = 0;
        $totalCostos = 0;

        $cantGastosOpe = 0;
        $gastosOperacionales = 0;
        $salarios = 10;
        $totalGastosOpe = 0;

        $cantGastosNoOpe = 0;
        $totalGastosNoOpe = 0;

        $fechaInicial = "";
        $fechaFinal = "";

        $debug;

        switch ($criterio) {
            case "Dia":
                $fechaInicial = $_POST['fechaUtilidad'];
                $fechaFinal = $fechaInicial . " 23:59:59";

                $fechaInicial = date_create($fechaInicial);
                $fechaFinal = date_create($fechaFinal);
                break;
            case "Semana":
                $fechaFinal = date('j-m-Y');
                $fechaInicial = strtotime('-1 week', strtotime($fechaFinal));
                $fechaInicial = date('j-m-Y', $fechaInicial);

                $fechaInicial = date_create($fechaInicial);
                $fechaFinal = date_create($fechaFinal . " 23:59:59");

                break;

            case "Mes":
                $fechaFinal = date('j-m-Y');
                $fechaInicial = strtotime('-1 month', strtotime($fechaFinal));
                $fechaInicial = date('j-m-Y', $fechaInicial);

                $fechaInicial = date_create($fechaInicial);
                $fechaFinal = date_create($fechaFinal . " 23:59:59");
                break;

            case "Año":
                $fechaFinal = date('j-m-Y');
                $fechaInicial = strtotime('-1 year', strtotime($fechaFinal));
                $fechaInicial = date('j-m-Y', $fechaInicial);

                $fechaInicial = date_create($fechaInicial);
                $fechaFinal = date_create($fechaFinal . " 23:59:59");
                break;

            default:
                break;
        }

//        echo "inicial: " . date_format($fechaInicial, 'd-m-Y');
//        echo " / final: " . date_format($fechaFinal, 'd-m-Y');

        $ventas = $em->getRepository('VentasBundle:Venta')->findVentasIntervalo($fechaInicial,
                $fechaFinal);

        $debug = count($ventas);

        foreach ($ventas as $venta) {
            $cantidadVentas += 1;
            
            if ($venta->getTipoVenta() == TipoVenta::NORMAL || $venta->getTipoVenta() == TipoVenta::DOMICILIO) {
                $totalVentas += $venta->getValorTotal();
            }

            $detallesVenta = $venta->getDetalles();
            foreach ($detallesVenta as $detalleVenta) {
                $producto = $detalleVenta->getProducto();
                $detallesProducto = $producto->getDetallesProducto();
                $nom = $producto->getNombre();
//                echo "<br>----------<br>nombre Producto: $nom / <br>";
//                    echo 'Cantidad detalles: ' . count($detallesProducto) . '<br>';
                foreach ($detallesProducto as $detalleProducto) {
                    $cantidadNece = $detalleProducto->getCantidadNecesaria();
                    $precio = $detalleProducto->getMateriaPrima()->getPrecio();
                    $unidadMedida = $detalleProducto->getMateriaPrima()->getUnidadDeMedida();
                    $idMate = $detalleProducto->getMateriaPrima()->getId();
                    $nomMate = $detalleProducto->getMateriaPrima()->getNombre();
//                    echo "\t\t<br> Materia: $nomMate / unidad: $unidadMedida / cantNece: $cantidadNece <br> ";
                    $valorSumar = 0;

                    switch ($unidadMedida) {
                        case "libra":
                            $valorLibra = floatval(floatval($precio) / 453.592);
                            $valorSumar = round(floatval($valorLibra * $cantidadNece),
                                    3, PHP_ROUND_HALF_UP);
//                            echo "\t\t Valor a sumar: $valorSumar";
                            break;
                        case "kilo":
                            $valorKilo = ($precio / 1000);
                            $valorSumar = floatval($valorKilo * $cantidadNece);
//                            echo "\t\t Valor a sumar: $valorSumar";
                            break;
                        case "litro":
                            $valorLitro = ($precio / 1000);
                            $valorSumar = floatval($valorLitro * $cantidadNece);
//                            echo "\t\t Valor a sumar: $valorSumar";
                            break;
                        case "unidad":
                            $valorSumar = floatval($precio * $cantidadNece);
//                            echo "\t\t Valor a sumar: $valorSumar";
                            break;
                        case "gramo":
                            $valorSumar = floatval($precio * $cantidadNece);
//                            echo "\t\t Valor a sumar: $valorSumar";
                            break;
                        default:
                            break;
                    }
                    $p = ($valorSumar * $detalleVenta->getCantidad());
                    $produccion += ($valorSumar * $detalleVenta->getCantidad());

//                    echo "\t\t-- Valor a sumar Ultimo: $p <br>";
                }
            }
        }

//        echo "<br><br><strong>Total: $produccion</strong>";

        $costos = $em->getRepository('CostosBundle:Costo')->findCostosIntervalo($fechaInicial,
                $fechaFinal);
        foreach ($costos as $costo) {
            if ($costo->getTipoCosto() == TipoCosto::Fijo || $costo->getTipoCosto() == TipoCosto::Variable) {
                $cantidadCostos += 1;
                $fijosYvariables += $costo->getValor();
            } else if ($costo->getTipoCosto() == TipoCosto::Operacional) {
                $cantGastosOpe += 1;
                $gastosOperacionales += $costo->getValor();
            } else if ($costo->getTipoCosto() == TipoCosto::NoOperacional) {
                $cantGastosNoOpe += 1;
                $totalGastosNoOpe += $costo->getValor();
            }
        }


        $totalGastosOpe = $salarios + $gastosOperacionales;
        $totalCostos = $produccion + $fijosYvariables;

        $utilidadBruta = $totalVentas - $totalCostos;
        $utilidadOpe = $utilidadBruta - $totalGastosOpe;
        $utilidadNeta = $utilidadOpe - $totalGastosNoOpe;

        $fecha = new DateTime("now");

        $html = $this->renderView('CostosBundle:reporte:utilidad.html.twig',
                array(
//            'clientes' => $clientes
            'tipo' => 'Utilidad',
            'fecha' => $fecha->format('d/m/Y H:i:s'),
            'fechaInicial' => $fechaInicial->format('d/m/Y'),
            'fechaFinal' => $fechaFinal->format('d/m/Y'),
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
            'fijosYvariables' => $fijosYvariables,
            'gastosOperacionales' => $gastosOperacionales
        ));

//        echo "<h1>" . $debug . "</h1>"; //El Debug, solo es para ver cosas que mandaba

        return new Response(
                $this->get('knp_snappy.pdf')->getOutputFromHtml($html), 200,
                array(
            'Content-Type' => 'application/pdf',
            'Content-Disposition' => 'attachment; filename="Informe de utilidad.pdf"'
        ));

        //Para ver los echos
//        return $this->render('email.html.twig');
        //Para las pruebas con $Debug
//        return array(
//            'tipo' => 'Utilidad',
//            'fecha' => $fecha->format('d-m-Y H:i:s'),
//            'fechaInicial' => $fechaInicial->format('d/m/Y'),
//            'fechaFinal' => $fechaFinal->format('d/m/Y'),
//            'periodo' => $criterio,
//            'usuario' => $session->get('user'),
//            'cantVentas' => $cantidadVentas,
//            'totalVentas' => $totalVentas,
//            'cantCostos' => $cantidadCostos,
//            'produccion' => $produccion,
//            'totalCostos' => $totalCostos,
//            'utilidadBruta' => $utilidadBruta,
//            'cantOperacionales' => $cantGastosOpe,
//            'salarios' => $salarios,
//            'totalGastosOpe' => $totalGastosOpe,
//            'utilidadOpe' => $utilidadOpe,
//            'cantGastosNoOpe' => $cantGastosNoOpe,
//            'totalGastosNoOpe' => $totalGastosNoOpe,
//            'utilidadNeta' => $utilidadNeta,
//            'fijosYvariables' => $fijosYvariables,
//            'gastosOperacionales' => $gastosOperacionales,
//        );
    }

    /**
     * @Route("/pdf/ventas", name="reporte_ventas")
     * @Method({"GET", "POST"})
     * @Template()
     */
    public function ventasAction(Request $request) {
        $productos = array();
        $producto = array();
        
        $producto['nombre'] = 'Tacos mixtos';
        $producto['cantidad'] = 3;
        $producto['produccion'] = 30000;
        $producto['ventas'] = 90000;
        $producto['utilidad'] = 60000;
        
        array_push($productos, $producto);
        
        return array(
            'tipo' => 'Ventas',
            'fecha' => '17/10/2016',
            'fechaInicial' => '17/10/2016',
            'fechaFinal' => '17/10/2016',
            'periodo' => 'dia',
            'usuario' => 'Hola',
            'productos' => $productos,
        );
    }
    
    /**
     * Lists all Costo entities.
     *
     * @Route("/prueba", name="reportes_prueba")
     * @Method("GET")
     */
    public function pruebaAction() {
//        return $this->render('CostosBundle:reporte:index.html.twig');
        return $this->render('email.html.twig');
    }

}
