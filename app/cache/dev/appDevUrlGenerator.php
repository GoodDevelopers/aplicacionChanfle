<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appDevUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        '_wdt' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:toolbarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_wdt',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_home' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:homeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_bar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchBarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/search_bar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_purge' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:purgeAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/purge',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_info' => array (  0 =>   array (    0 => 'about',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:infoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'about',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler/info',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_phpinfo' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/_profiler/phpinfo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_search_results' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:searchResultsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/search/results',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.profiler:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_router' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.router:panelAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/router',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_profiler_exception_css' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'web_profiler.controller.exception:cssAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/exception.css',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    2 =>     array (      0 => 'text',      1 => '/_profiler',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        '_twig_error_test' => array (  0 =>   array (    0 => 'code',    1 => '_format',  ),  1 =>   array (    '_controller' => 'twig.controller.preview_error:previewErrorPageAction',    '_format' => 'html',  ),  2 =>   array (    'code' => '\\d+',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => '_format',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '\\d+',      3 => 'code',    ),    2 =>     array (      0 => 'text',      1 => '/_error',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caja_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/caja/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caja_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/caja/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caja_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/caja',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caja_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/caja',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'caja_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'JornadasLaboralesBundle\\Controller\\CajaController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/caja',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'jornadaslaborales_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'JornadasLaboralesBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/jornadas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'costo_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CostosBundle\\Controller\\CostoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/costo/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'costo_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CostosBundle\\Controller\\CostoController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/costo/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'costo_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CostosBundle\\Controller\\CostoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/costo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'costo_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CostosBundle\\Controller\\CostoController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/costo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'costo_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CostosBundle\\Controller\\CostoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/costo',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'costos_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CostosBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/costos',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\ClienteController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\ClienteController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\ClienteController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/clientes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\ClienteController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/clientes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'clientes_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\ClienteController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/clientes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'buscarCliente' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\ClienteController::buscarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/clientes/buscarNuip',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UsuariosBundle_empleado_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empleado/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UsuariosBundle_empleado_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/empleado/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UsuariosBundle_empleado_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UsuariosBundle_empleado_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UsuariosBundle_empleado_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'UsuariosBundle\\Controller\\EmpleadoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/empleado',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'inventario_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/inventario',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ingresomateriaprima_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ingresomateriaprima/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ingresomateriaprima_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ingresomateriaprima/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ingresomateriaprima_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ingresomateriaprima',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ingresomateriaprima_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/ingresomateriaprima',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ingresomateriaprima_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\IngresoMateriaPrimaController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ingresomateriaprima',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'materiaprima_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/materiaprima/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'materiaprima_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/materiaprima/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'materiaprima_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/materiaprima',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'materiaprima_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/materiaprima',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'materiaprima_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\MateriaPrimaController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/materiaprima',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'producto_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProductoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/producto/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'producto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProductoController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/producto/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'producto_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProductoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/producto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'producto_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProductoController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/producto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'producto_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProductoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/producto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProveedorController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/yes/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProveedorController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/yes/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProveedorController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/yes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProveedorController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/yes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'yes_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\ProveedorController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/yes',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoproducto_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tipoproducto/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoproducto_new' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::newAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/tipoproducto/new',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoproducto_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tipoproducto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoproducto_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/edit',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/tipoproducto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'tipoproducto_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'InventarioBundle\\Controller\\TipoProductoController::deleteAction',  ),  2 =>   array (    '_method' => 'DELETE',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/tipoproducto',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ventas_default_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'VentasBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ventas',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_login' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_check' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/login_check',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_security_logout' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/logout',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_profile_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_register' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirm' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/register/confirm',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_registration_confirmed' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/register/confirmed',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_request' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/request',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_send_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  ),  2 =>   array (    '_method' => 'POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/send-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_check_email' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  ),  2 =>   array (    '_method' => 'GET',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/resetting/check-email',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_resetting_reset' => array (  0 =>   array (    0 => 'token',  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'token',    ),    1 =>     array (      0 => 'text',      1 => '/resetting/reset',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'fos_user_change_password' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  ),  2 =>   array (    '_method' => 'GET|POST',  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/profile/change-password',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
