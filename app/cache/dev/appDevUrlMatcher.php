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

        if (0 === strpos($pathinfo, '/caja')) {
            // caja_index
            if (rtrim($pathinfo, '/') === '/caja') {
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
            if ($pathinfo === '/caja/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_caja_new;
                }

                return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::newAction',  '_route' => 'caja_new',);
            }
            not_caja_new:

            // caja_show
            if (preg_match('#^/caja/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_caja_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_show')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::showAction',));
            }
            not_caja_show:

            // caja_edit
            if (preg_match('#^/caja/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_caja_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_edit')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::editAction',));
            }
            not_caja_edit:

            // caja_delete
            if (preg_match('#^/caja/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_caja_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'caja_delete')), array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::deleteAction',));
            }
            not_caja_delete:

        }

        // jornadaslaborales_default_index
        if ($pathinfo === '/jornadas') {
            return array (  '_controller' => 'JornadasLaboralesBundle\\Controller\\DefaultController::indexAction',  '_route' => 'jornadaslaborales_default_index',);
        }

        if (0 === strpos($pathinfo, '/c')) {
            if (0 === strpos($pathinfo, '/costo')) {
                // costo_index
                if (rtrim($pathinfo, '/') === '/costo') {
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
                if ($pathinfo === '/costo/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_costo_new;
                    }

                    return array (  '_controller' => 'CostosBundle\\Controller\\CostoController::newAction',  '_route' => 'costo_new',);
                }
                not_costo_new:

                // costo_show
                if (preg_match('#^/costo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_costo_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'costo_show')), array (  '_controller' => 'CostosBundle\\Controller\\CostoController::showAction',));
                }
                not_costo_show:

                // costo_edit
                if (preg_match('#^/costo/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_costo_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'costo_edit')), array (  '_controller' => 'CostosBundle\\Controller\\CostoController::editAction',));
                }
                not_costo_edit:

                // costo_delete
                if (preg_match('#^/costo/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'DELETE') {
                        $allow[] = 'DELETE';
                        goto not_costo_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'costo_delete')), array (  '_controller' => 'CostosBundle\\Controller\\CostoController::deleteAction',));
                }
                not_costo_delete:

                // costos_default_index
                if ($pathinfo === '/costos') {
                    return array (  '_controller' => 'CostosBundle\\Controller\\DefaultController::indexAction',  '_route' => 'costos_default_index',);
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

            }

        }

        if (0 === strpos($pathinfo, '/empleado')) {
            // UsuariosBundle_empleado_index
            if (rtrim($pathinfo, '/') === '/empleado') {
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
            if ($pathinfo === '/empleado/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_UsuariosBundle_empleado_new;
                }

                return array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::newAction',  '_route' => 'UsuariosBundle_empleado_new',);
            }
            not_UsuariosBundle_empleado_new:

            // UsuariosBundle_empleado_show
            if (preg_match('#^/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_UsuariosBundle_empleado_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UsuariosBundle_empleado_show')), array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::showAction',));
            }
            not_UsuariosBundle_empleado_show:

            // UsuariosBundle_empleado_edit
            if (preg_match('#^/empleado/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_UsuariosBundle_empleado_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UsuariosBundle_empleado_edit')), array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::editAction',));
            }
            not_UsuariosBundle_empleado_edit:

            // UsuariosBundle_empleado_delete
            if (preg_match('#^/empleado/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_UsuariosBundle_empleado_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'UsuariosBundle_empleado_delete')), array (  '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::deleteAction',));
            }
            not_UsuariosBundle_empleado_delete:

        }

        if (0 === strpos($pathinfo, '/in')) {
            // inventario_default_index
            if ($pathinfo === '/inventario') {
                return array (  '_controller' => 'InventarioBundle\\Controller\\DefaultController::indexAction',  '_route' => 'inventario_default_index',);
            }

            if (0 === strpos($pathinfo, '/ingresomateriaprima')) {
                // ingresomateriaprima_index
                if (rtrim($pathinfo, '/') === '/ingresomateriaprima') {
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
                if ($pathinfo === '/ingresomateriaprima/new') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ingresomateriaprima_new;
                    }

                    return array (  '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::newAction',  '_route' => 'ingresomateriaprima_new',);
                }
                not_ingresomateriaprima_new:

                // ingresomateriaprima_show
                if (preg_match('#^/ingresomateriaprima/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_ingresomateriaprima_show;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingresomateriaprima_show')), array (  '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::showAction',));
                }
                not_ingresomateriaprima_show:

                // ingresomateriaprima_edit
                if (preg_match('#^/ingresomateriaprima/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_ingresomateriaprima_edit;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ingresomateriaprima_edit')), array (  '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::editAction',));
                }
                not_ingresomateriaprima_edit:

                // ingresomateriaprima_delete
                if (preg_match('#^/ingresomateriaprima/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
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

        }

        if (0 === strpos($pathinfo, '/producto')) {
            // producto_index
            if (rtrim($pathinfo, '/') === '/producto') {
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
            if ($pathinfo === '/producto/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_producto_new;
                }

                return array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::newAction',  '_route' => 'producto_new',);
            }
            not_producto_new:

            // producto_show
            if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_producto_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_show')), array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::showAction',));
            }
            not_producto_show:

            // producto_edit
            if (preg_match('#^/producto/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_producto_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_edit')), array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::editAction',));
            }
            not_producto_edit:

            // producto_delete
            if (preg_match('#^/producto/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_producto_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'producto_delete')), array (  '_controller' => 'InventarioBundle\\Controller\\ProductoController::deleteAction',));
            }
            not_producto_delete:

        }

        if (0 === strpos($pathinfo, '/yes')) {
            // yes_index
            if (rtrim($pathinfo, '/') === '/yes') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_yes_index;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'yes_index');
                }

                return array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::indexAction',  '_route' => 'yes_index',);
            }
            not_yes_index:

            // yes_new
            if ($pathinfo === '/yes/new') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_yes_new;
                }

                return array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::newAction',  '_route' => 'yes_new',);
            }
            not_yes_new:

            // yes_show
            if (preg_match('#^/yes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_yes_show;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_show')), array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::showAction',));
            }
            not_yes_show:

            // yes_edit
            if (preg_match('#^/yes/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_yes_edit;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_edit')), array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::editAction',));
            }
            not_yes_edit:

            // yes_delete
            if (preg_match('#^/yes/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                if ($this->context->getMethod() != 'DELETE') {
                    $allow[] = 'DELETE';
                    goto not_yes_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'yes_delete')), array (  '_controller' => 'InventarioBundle\\Controller\\ProveedorController::deleteAction',));
            }
            not_yes_delete:

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

        // ventas_default_index
        if ($pathinfo === '/ventas') {
            return array (  '_controller' => 'VentasBundle\\Controller\\DefaultController::indexAction',  '_route' => 'ventas_default_index',);
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
