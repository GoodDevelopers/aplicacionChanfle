<?php

namespace CostosBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
    public function indexAction() {
        return array();
    }

    /**
     * @Route("/pdf/utilidad", name="reportes_utilidad")
     * @Method("POST")
     */
    public function reporteUtilidad() {
        $criterio = $_POST['choiceUtilidad'];
        $dia = "";
        if ($criterio == "dia") {
            $dia = $_POST['fechaUtilidad'];
        }
//        echo "criterio: $criterio / dia: $dia";

        $fechaFinal = date('Y-m-j');
        $fechaInicial = strtotime('-1 month', strtotime($fechaFinal));
        $fechaInicial = date('Y-m-j', $fechaInicial);

//        echo "fechaInicial: $fechaInicial -/- fechaFinla: $fechaFinal";

        $em = $this->getDoctrine()->getManager();
        $ventas = $em->getRepository('VentasBundle:Venta')->findVentasMes($fechaInicial, $fechaFinal);
        if (count($ventas) == 0) {
            echo "Holis";
        }else{
            $total = count($ventas);
            echo "total: $total";
        }
        foreach ($ventas as $venta) {
            $valor = $venta->getValorTotal();
            echo "nombre: $valor";
        }
    }

}
