<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
                }

            }

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        if (0 === strpos($pathinfo, '/registros')) {
            // caja_index
            if (rtrim($pathinfo, '/') === '/registros') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_caja_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'caja_index');
                }

                return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::indexAction',  '_route' => 'caja_index',);
            }
            not_caja_index:

            // caja_new
            if ($pathinfo === '/registros/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_caja_new;
                }

                return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::newAction',  '_route' => 'caja_new',);
            }
            not_caja_new:

            // validar_fecha
            if ($pathinfo === '/registros/validarFecha') {
                return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::validarfecha',  '_route' => 'validar_fecha',);
            }

            // caja_show
            if (preg_match('#^/registros/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_caja_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_show')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::showAction',));
            }
            not_caja_show:

            // caja_edit
            if (preg_match('#^/registros/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_caja_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_edit')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::editAction',));
            }
            not_caja_edit:

            // caja_delete
            if (preg_match('#^/registros/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_caja_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_delete')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::deleteAction',));
            }
            not_caja_delete:

        }

        if (0 === strpos($pathinfo, '/cargos')) {
            // cargo_index
            if (rtrim($pathinfo, '/') === '/cargos') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cargo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'cargo_index');
                }

                return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CargoController::indexAction',  '_route' => 'cargo_index',);
            }
            not_cargo_index:

            // cargo_new
            if ($pathinfo === '/cargos/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cargo_new;
                }

                return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CargoController::newAction',  '_route' => 'cargo_new',);
            }
            not_cargo_new:

            // cargo_show
            if (preg_match('#^/cargos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_cargo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_show')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CargoController::showAction',));
            }
            not_cargo_show:

            // cargo_edit
            if (preg_match('#^/cargos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_cargo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_edit')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CargoController::editAction',));
            }
            not_cargo_edit:

            // cargo_delete
            if (preg_match('#^/cargos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_cargo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'cargo_delete')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CargoController::deleteAction',));
            }
            not_cargo_delete:

        }

        // jornadaslaborales_default_index
        if ($pathinfo === '/jornadas') {
            return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jornadaslaborales_default_index',);
        }

        if (0 === strpos($pathinfo, '/turnolaboral')) {
            // turnolaboral_index
            if (rtrim($pathinfo, '/') === '/turnolaboral') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_turnolaboral_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'turnolaboral_index');
                }

                return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\TurnoLaboralController::indexAction',  '_route' => 'turnolaboral_index',);
            }
            not_turnolaboral_index:

            // turnolaboral_new
            if ($pathinfo === '/turnolaboral/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_turnolaboral_new;
                }

                return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\TurnoLaboralController::newAction',  '_route' => 'turnolaboral_new',);
            }
            not_turnolaboral_new:

            // turnolaboral_show
            if (preg_match('#^/turnolaboral/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_turnolaboral_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'turnolaboral_show')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\TurnoLaboralController::showAction',));
            }
            not_turnolaboral_show:

            // turnolaboral_edit
            if (preg_match('#^/turnolaboral/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_turnolaboral_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'turnolaboral_edit')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\TurnoLaboralController::editAction',));
            }
            not_turnolaboral_edit:

            // turnolaboral_delete
            if (preg_match('#^/turnolaboral/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_turnolaboral_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'turnolaboral_delete')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\TurnoLaboralController::deleteAction',));
            }
            not_turnolaboral_delete:

        }

        if (0 === strpos($pathinfo, '/costos')) {
            // costo_index
            if (rtrim($pathinfo, '/') === '/costos') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_costo_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'costo_index');
                }

                return array (  '_controller' => 'CostosBundle\\Controller\\CostoController::indexAction',  '_route' => 'costo_index',);
            }
            not_costo_index:

            // costo_new
            if ($pathinfo === '/costos/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_costo_new;
                }

                return array (  '_controller' => 'CostosBundle\\Controller\\CostoController::newAction',  '_route' => 'costo_new',);
            }
            not_costo_new:

            // costo_show
            if (preg_match('#^/costos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_costo_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'costo_show')), array (  '_controller' => 'CostosBundle\\Controller\\CostoController::showAction',));
            }
            not_costo_show:

            // costo_edit
            if (preg_match('#^/costos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_costo_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'costo_edit')), array (  '_controller' => 'CostosBundle\\Controller\\CostoController::editAction',));
            }
            not_costo_edit:

            // costo_delete
            if (preg_match('#^/costos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_costo_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'costo_delete')), array (  '_controller' => 'CostosBundle\\Controller\\CostoController::deleteAction',));
            }
            not_costo_delete:

        }

        if (0 === strpos($pathinfo, '/reportes')) {
            // reportes_index
            if (rtrim($pathinfo, '/') === '/reportes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_reportes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'reportes_index');
                }

                return array (  '_controller' => 'CostosBundle\\Controller\\ReporteController::indexAction',  '_route' => 'reportes_index',);
            }
            not_reportes_index:

            if (0 === strpos($pathinfo, '/reportes/p')) {
                if (0 === strpos($pathinfo, '/reportes/pdf')) {
                    // reporte_utilidad
                    if ($pathinfo === '/reportes/pdf/utilidad') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_reporte_utilidad;
                        }

                        return array (  '_controller' => 'CostosBundle\\Controller\\ReporteController::utilidadAction',  '_route' => 'reporte_utilidad',);
                    }
                    not_reporte_utilidad:

                    // reporte_ventas
                    if ($pathinfo === '/reportes/pdf/ventas') {
                        if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                            goto not_reporte_ventas;
                        }

                        return array (  '_controller' => 'CostosBundle\\Controller\\ReporteController::ventasAction',  '_route' => 'reporte_ventas',);
                    }
                    not_reporte_ventas:

                }

                // reportes_prueba
                if ($pathinfo === '/reportes/prueba') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_reportes_prueba;
                    }

                    return array (  '_controller' => 'CostosBundle\\Controller\\ReporteController::pruebaAction',  '_route' => 'reportes_prueba',);
                }
                not_reportes_prueba:

            }

        }

        if (0 === strpos($pathinfo, '/clientes')) {
            // clientes_index
            if (rtrim($pathinfo, '/') === '/clientes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_clientes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'clientes_index');
                }

                return array (  '_controller' => 'UsuariosBundle\\Controller\\ClienteController::indexAction',  '_route' => 'clientes_index',);
            }
            not_clientes_index:

            // clientes_new
            if ($pathinfo === '/clientes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_clientes_new;
                }

                return array (  '_controller' => 'UsuariosBundle\\Controller\\ClienteController::newAction',  '_route' => 'clientes_new',);
            }
            not_clientes_new:

            // clientes_show
            if (preg_match('#^/clientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_clientes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientes_show')), array (  '_controller' => 'UsuariosBundle\\Controller\\ClienteController::showAction',));
            }
            not_clientes_show:

            // clientes_edit
            if (preg_match('#^/clientes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_clientes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientes_edit')), array (  '_controller' => 'UsuariosBundle\\Controller\\ClienteController::editAction',));
            }
            not_clientes_edit:

            // clientes_delete
            if (preg_match('#^/clientes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_clientes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'clientes_delete')), array (  '_controller' => 'UsuariosBundle\\Controller\\ClienteController::deleteAction',));
            }
            not_clientes_delete:

            // buscarCliente
            if ($pathinfo === '/clientes/buscarNuip') {
                return array (  '_controller' => 'UsuariosBundle\\Controller\\ClienteController::buscarAction',  '_route' => 'buscarCliente',);
            }

            // generarPdf
            if ($pathinfo === '/clientes/generar/pdf') {
                return array (  '_controller' => 'UsuariosBundle\\Controller\\ClienteController::pdfAction',  '_route' => 'generarPdf',);
            }

            // validar_cliente
            if ($pathinfo === '/clientes/ValidarCliente') {
                return array (  '_controller' => 'UsuariosBundle\\Controller\\ClienteController::validarCliente',  '_route' => 'validar_cliente',);
            }

        }

        if (0 === strpos($pathinfo, '/empleados')) {
            // UsuariosBundle_empleado_index
            if (rtrim($pathinfo, '/') === '/empleados') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_UsuariosBundle_empleado_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'UsuariosBundle_empleado_index');
                }

                return array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::indexAction',  '_route' => 'UsuariosBundle_empleado_index',);
            }
            not_UsuariosBundle_empleado_index:

            // UsuariosBundle_empleado_new
            if ($pathinfo === '/empleados/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_UsuariosBundle_empleado_new;
                }

                return array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::newAction',  '_route' => 'UsuariosBundle_empleado_new',);
            }
            not_UsuariosBundle_empleado_new:

            // UsuariosBundle_empleado_show
            if (preg_match('#^/empleados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_UsuariosBundle_empleado_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UsuariosBundle_empleado_show')), array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::showAction',));
            }
            not_UsuariosBundle_empleado_show:

            // UsuariosBundle_empleado_edit
            if (preg_match('#^/empleados/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_UsuariosBundle_empleado_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UsuariosBundle_empleado_edit')), array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::editAction',));
            }
            not_UsuariosBundle_empleado_edit:

            // UsuariosBundle_empleado_delete
            if (preg_match('#^/empleados/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_UsuariosBundle_empleado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UsuariosBundle_empleado_delete')), array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::deleteAction',));
            }
            not_UsuariosBundle_empleado_delete:

            // validar_empleado
            if ($pathinfo === '/empleados/validarEmpleado') {
                return array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::validarEmpleado',  '_route' => 'validar_empleado',);
            }

        }

        if (0 === strpos($pathinfo, '/in')) {
            // inventario_default_index
            if ($pathinfo === '/inventario') {
                return array (  '_controller' => 'InventarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'inventario_default_index',);
            }

            if (0 === strpos($pathinfo, '/ingresosmateriaprima')) {
                // ingresomateriaprima_index
                if (rtrim($pathinfo, '/') === '/ingresosmateriaprima') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ingresomateriaprima_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ingresomateriaprima_index');
                    }

                    return array (  '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::indexAction',  '_route' => 'ingresomateriaprima_index',);
                }
                not_ingresomateriaprima_index:

                // ingresomateriaprima_new
                if ($pathinfo === '/ingresosmateriaprima/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ingresomateriaprima_new;
                    }

                    return array (  '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::newAction',  '_route' => 'ingresomateriaprima_new',);
                }
                not_ingresomateriaprima_new:

                // ingresomateriaprima_show
                if (preg_match('#^/ingresosmateriaprima/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ingresomateriaprima_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingresomateriaprima_show')), array (  '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::showAction',));
                }
                not_ingresomateriaprima_show:

                // ingresomateriaprima_edit
                if (preg_match('#^/ingresosmateriaprima/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ingresomateriaprima_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingresomateriaprima_edit')), array (  '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::editAction',));
                }
                not_ingresomateriaprima_edit:

                // ingresomateriaprima_delete
                if (preg_match('#^/ingresosmateriaprima/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_ingresomateriaprima_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingresomateriaprima_delete')), array (  '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::deleteAction',));
                }
                not_ingresomateriaprima_delete:

            }

        }

        if (0 === strpos($pathinfo, '/materiaprima')) {
            // materiaprima_index
            if (rtrim($pathinfo, '/') === '/materiaprima') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_materiaprima_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'materiaprima_index');
                }

                return array (  '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::indexAction',  '_route' => 'materiaprima_index',);
            }
            not_materiaprima_index:

            // materiaprima_new
            if ($pathinfo === '/materiaprima/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_materiaprima_new;
                }

                return array (  '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::newAction',  '_route' => 'materiaprima_new',);
            }
            not_materiaprima_new:

            // materiaprima_show
            if (preg_match('#^/materiaprima/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_materiaprima_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiaprima_show')), array (  '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::showAction',));
            }
            not_materiaprima_show:

            // materiaprima_edit
            if (preg_match('#^/materiaprima/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_materiaprima_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiaprima_edit')), array (  '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::editAction',));
            }
            not_materiaprima_edit:

            // materiaprima_delete
            if (preg_match('#^/materiaprima/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_materiaprima_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'materiaprima_delete')), array (  '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::deleteAction',));
            }
            not_materiaprima_delete:

            // buscarMateria
            if ($pathinfo === '/materiaprima/buscarMateria') {
                return array (  '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::buscarAction',  '_route' => 'buscarMateria',);
            }

        }

        if (0 === strpos($pathinfo, '/pro')) {
            if (0 === strpos($pathinfo, '/productos')) {
                // producto_index
                if (rtrim($pathinfo, '/') === '/productos') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'producto_index');
                    }

                    return array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::indexAction',  '_route' => 'producto_index',);
                }
                not_producto_index:

                // producto_new
                if ($pathinfo === '/productos/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_producto_new;
                    }

                    return array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::newAction',  '_route' => 'producto_new',);
                }
                not_producto_new:

                // producto_show
                if (preg_match('#^/productos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_producto_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_show')), array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::showAction',));
                }
                not_producto_show:

                // producto_edit
                if (preg_match('#^/productos/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_producto_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::editAction',));
                }
                not_producto_edit:

                // producto_delete
                if (preg_match('#^/productos/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_producto_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::deleteAction',));
                }
                not_producto_delete:

                // buscar_producto
                if ($pathinfo === '/productos/buscar/producto') {
                    return array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::buscarProdcuto',  '_route' => 'buscar_producto',);
                }

                // getMaterias
                if ($pathinfo === '/productos/getMaterias') {
                    return array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::getMaterias',  '_route' => 'getMaterias',);
                }

                // buscar_productos
                if ($pathinfo === '/productos/buscar/productos') {
                    return array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::buscarProductos',  '_route' => 'buscar_productos',);
                }

            }

            if (0 === strpos($pathinfo, '/proveedores')) {
                // proveedores_index
                if (rtrim($pathinfo, '/') === '/proveedores') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_proveedores_index;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'proveedores_index');
                    }

                    return array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::indexAction',  '_route' => 'proveedores_index',);
                }
                not_proveedores_index:

                // proveedores_new
                if ($pathinfo === '/proveedores/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_proveedores_new;
                    }

                    return array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::newAction',  '_route' => 'proveedores_new',);
                }
                not_proveedores_new:

                // proveedores_show
                if (preg_match('#^/proveedores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_proveedores_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_show')), array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::showAction',));
                }
                not_proveedores_show:

                // proveedores_edit
                if (preg_match('#^/proveedores/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_proveedores_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_edit')), array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::editAction',));
                }
                not_proveedores_edit:

                // proveedores_delete
                if (preg_match('#^/proveedores/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_proveedores_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'proveedores_delete')), array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::deleteAction',));
                }
                not_proveedores_delete:

                // validar_proveedor
                if ($pathinfo === '/proveedores/ValidarProveedor') {
                    return array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::validarProveedor',  '_route' => 'validar_proveedor',);
                }

            }

        }

        if (0 === strpos($pathinfo, '/tipoproducto')) {
            // tipoproducto_index
            if (rtrim($pathinfo, '/') === '/tipoproducto') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipoproducto_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'tipoproducto_index');
                }

                return array (  '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::indexAction',  '_route' => 'tipoproducto_index',);
            }
            not_tipoproducto_index:

            // tipoproducto_new
            if ($pathinfo === '/tipoproducto/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipoproducto_new;
                }

                return array (  '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::newAction',  '_route' => 'tipoproducto_new',);
            }
            not_tipoproducto_new:

            // tipoproducto_show
            if (preg_match('#^/tipoproducto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_tipoproducto_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoproducto_show')), array (  '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::showAction',));
            }
            not_tipoproducto_show:

            // tipoproducto_edit
            if (preg_match('#^/tipoproducto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_tipoproducto_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoproducto_edit')), array (  '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::editAction',));
            }
            not_tipoproducto_edit:

            // tipoproducto_delete
            if (preg_match('#^/tipoproducto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_tipoproducto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'tipoproducto_delete')), array (  '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::deleteAction',));
            }
            not_tipoproducto_delete:

        }

        if (0 === strpos($pathinfo, '/detalleventa')) {
            // detalleventa_new
            if (preg_match('#^/detalleventa(?P<id>[^/]++)/new$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_detalleventa_new;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detalleventa_new')), array (  '_controller' => 'VentasBundle\\Controller\\DetalleVentaController::newAction',));
            }
            not_detalleventa_new:

            // detalleventa_show
            if (preg_match('#^/detalleventa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_detalleventa_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detalleventa_show')), array (  '_controller' => 'VentasBundle\\Controller\\DetalleVentaController::showAction',));
            }
            not_detalleventa_show:

            // detalleventa_edit
            if (preg_match('#^/detalleventa/(?P<id>[^/]++)/(?P<id2>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_detalleventa_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detalleventa_edit')), array (  '_controller' => 'VentasBundle\\Controller\\DetalleVentaController::editAction',));
            }
            not_detalleventa_edit:

            // detalleventa_delete
            if (preg_match('#^/detalleventa/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_detalleventa_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'detalleventa_delete')), array (  '_controller' => 'VentasBundle\\Controller\\DetalleVentaController::deleteAction',));
            }
            not_detalleventa_delete:

        }

        if (0 === strpos($pathinfo, '/ventas')) {
            // venta_index
            if (rtrim($pathinfo, '/') === '/ventas') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_venta_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'venta_index');
                }

                return array (  '_controller' => 'VentasBundle\\Controller\\VentaController::indexAction',  '_route' => 'venta_index',);
            }
            not_venta_index:

            // venta_new
            if ($pathinfo === '/ventas/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_venta_new;
                }

                return array (  '_controller' => 'VentasBundle\\Controller\\VentaController::newAction',  '_route' => 'venta_new',);
            }
            not_venta_new:

            // venta_show
            if (preg_match('#^/ventas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_venta_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_show')), array (  '_controller' => 'VentasBundle\\Controller\\VentaController::showAction',));
            }
            not_venta_show:

            // venta_edit
            if (preg_match('#^/ventas/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_venta_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_edit')), array (  '_controller' => 'VentasBundle\\Controller\\VentaController::editAction',));
            }
            not_venta_edit:

            // venta_delete
            if (preg_match('#^/ventas/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_venta_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_delete')), array (  '_controller' => 'VentasBundle\\Controller\\VentaController::deleteAction',));
            }
            not_venta_delete:

            // buscar_cliente_venta
            if ($pathinfo === '/ventas/buscarCliente') {
                return array (  '_controller' => 'VentasBundle\\Controller\\VentaController::buscarCliente',  '_route' => 'buscar_cliente_venta',);
            }

            // venta_detalles
            if (preg_match('#^/ventas/(?P<id>[^/]++)/mostrarDetalles$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_venta_detalles;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'venta_detalles')), array (  '_controller' => 'VentasBundle\\Controller\\VentaController::mostrarDetalles',));
            }
            not_venta_detalles:

        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'HEAD'));
                goto not_homepage;
            }

            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }
        not_homepage:

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
