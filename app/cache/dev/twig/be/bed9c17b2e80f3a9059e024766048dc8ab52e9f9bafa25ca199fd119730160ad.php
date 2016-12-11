<?php

/* base.html.twig */
class __TwigTemplate_8c3f2ecb1766466573e01c19f002be43c91f29804385344da7ad773046c695b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8aed74f3c853a4d441857b69cd6573b3e07c45ee1e0903ef5f464b9fbcb9306b = $this->env->getExtension("native_profiler");
        $__internal_8aed74f3c853a4d441857b69cd6573b3e07c45ee1e0903ef5f464b9fbcb9306b->enter($__internal_8aed74f3c853a4d441857b69cd6573b3e07c45ee1e0903ef5f464b9fbcb9306b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 78
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <nav class=\"navbar navbar-default\">
            <div class=\"container-fluid\">
                <!-- Cabecera -->
                <div class=\"navbar-header\" style=\"margin-right: 15px;\">
                    <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#menu\" aria-expanded=\"false\">
                        <span class=\"sr-only\">Menu</span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                        <span class=\"icon-bar\"></span>
                    </button>
                    <a class=\"navbar-brand\" href=\"#\" style=\"color: black; font-weight: bold;\"><img alt=\"chanfletaqueria\" src=\"";
        // line 91
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/img/logo_20x20.png"), "html", null, true);
        echo "\" style=\"display: inline-block;\"> Chanfletaqueria</a>
                </div>

                <!-- Items -->
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <ul class=\"nav navbar-nav\">
                        <li class=\"dropdown\" id=\"costos\">
                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-line-chart\"></span> Costos <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 100
        echo $this->env->getExtension('routing')->getPath("costo_index");
        echo "\"><span class=\"fa fa-money\"></span> Costos</a></li>
                                <li><a href=\"";
        // line 101
        echo $this->env->getExtension('routing')->getPath("reportes_index");
        echo "\"><span class=\"fa fa-file-pdf-o\"></span> Reportes</a></li>
                            </ul>
                        </li>

                        <li class=\"dropdown\" id=\"inventario\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-archive\"></span> Inventario <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 108
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_index");
        echo "\"><span class=\"icon-ingresoMateria\"></span> Ingresos materia prima</a></li>
                                    ";
        // line 109
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 110
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("materiaprima_index");
            echo "\"><span class=\"icon-listaMateria\"></span> Materia prima</a></li>
                                    <li><a href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("producto_index");
            echo "\"><span class=\"icon-productos\"></span> Productos</a></li>
                                    <li><a href=\"";
            // line 112
            echo $this->env->getExtension('routing')->getPath("proveedores_index");
            echo "\"><span class=\"icon-proveedor\"></span> Proveedores</a></li>
                                    ";
        }
        // line 114
        echo "                            </ul>
                        </li>

                        <li class=\"dropdown\" id=\"registros\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-calendar\"></span> Registros <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 120
        echo $this->env->getExtension('routing')->getPath("caja_index");
        echo "\"><span class=\"glyphicon glyphicon-briefcase\"></span> Cajas</a></li>
                                <li><a href=\"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("turnolaboral_index");
        echo "\"><span class=\"icon-empleado\"></span> Turnos laborales</a></li>
                            </ul>
                        </li>

                        <li class=\"dropdown\" id=\"usuarios\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-users\"></span> Usuarios <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"";
        // line 128
        echo $this->env->getExtension('routing')->getPath("clientes_index");
        echo "\"><span class=\"glyphicon glyphicon-user\"></span> Clientes</a></li>
                                    ";
        // line 129
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 130
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_index");
            echo "\"><span class=\"icon-empleado\"></span> Empleados</a></li>
                                    ";
        }
        // line 132
        echo "                            </ul>
                        </li>

                        <li id=\"ventas\">
                            <a href=\"";
        // line 136
        echo $this->env->getExtension('routing')->getPath("venta_index");
        echo "\"><span class=\"fa fa-shopping-basket\"></span> Ventas</a>
                        </li>

                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                                                <span class=\"icon-empleado\"></span> ";
        // line 144
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo " <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                ";
        // line 147
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 148
            echo "                                    <li><a href=\"#\"><span class=\"fa fa-cogs\"></span> Configuracion</a></li>
                                    ";
        }
        // line 150
        echo "                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 151
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\"><span class=\"glyphicon glyphicon-log-out\"></span> Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        ";
        // line 158
        $this->displayBlock('body', $context, $blocks);
        // line 160
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 169
        echo "    </body>
</html>
";
        
        $__internal_8aed74f3c853a4d441857b69cd6573b3e07c45ee1e0903ef5f464b9fbcb9306b->leave($__internal_8aed74f3c853a4d441857b69cd6573b3e07c45ee1e0903ef5f464b9fbcb9306b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_df191e98e3853af8042a23dd27655d9d3ad35a4be1cffdbaf44eff6e93767163 = $this->env->getExtension("native_profiler");
        $__internal_df191e98e3853af8042a23dd27655d9d3ad35a4be1cffdbaf44eff6e93767163->enter($__internal_df191e98e3853af8042a23dd27655d9d3ad35a4be1cffdbaf44eff6e93767163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_df191e98e3853af8042a23dd27655d9d3ad35a4be1cffdbaf44eff6e93767163->leave($__internal_df191e98e3853af8042a23dd27655d9d3ad35a4be1cffdbaf44eff6e93767163_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_bf676727a838d57d0f05c9f1f3d219c0c3694060322809c82a75a1b0c38db9b8 = $this->env->getExtension("native_profiler");
        $__internal_bf676727a838d57d0f05c9f1f3d219c0c3694060322809c82a75a1b0c38db9b8->enter($__internal_bf676727a838d57d0f05c9f1f3d219c0c3694060322809c82a75a1b0c38db9b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/sweetalert.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap-datepicker.css"), "html", null, true);
        echo "\">

            <style>
                .navbar{
                    margin-bottom: 10px;
                    font-size: 16px;
                }
                .navbar-default{
                    background-color: #f0ad4e;
                    border-color: #eea236;
                }
                .navbar-default:hover{
                    background-color: #ec971f;
                    border-color: #d58512;
                }
                .navbar-default .navbar-toggle .icon-bar {
                    background-color: white;
                }
                .nav .open > a, .nav .open > a:hover, .nav .open > a:focus,
                .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus,
                .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus{
                    background-color: #e26d1e;
                    color: white;
                }

                .navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus{
                    color: white;
                }

                .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{
                    background-color: #e26d1e;
                    color: white;
                }

                .dropdown-menu{
                    font-size: 16px;
                }

                @media (max-width: 767px){
                    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                        color: black;
                    }
                    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
                    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                        color: white;
                        background-color: transparent;
                    }
                }

                /* borde para los items del navbar */
                .navbar-nav > li{
                    border-radius: 5px;
                    border-left: solid 1px #ec971f;
                }
                .navbar-default:hover .navbar-nav > li{
                    border-left: solid 1px #e26d1e;
                }

                /* margen del separador de cerrar sesion */
                .dropdown-menu .divider {
                    margin: 2px;
                }

            </style>
        ";
        
        $__internal_bf676727a838d57d0f05c9f1f3d219c0c3694060322809c82a75a1b0c38db9b8->leave($__internal_bf676727a838d57d0f05c9f1f3d219c0c3694060322809c82a75a1b0c38db9b8_prof);

    }

    // line 158
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7699fffe88d808533add7acfc88e5edfe4441aa5042af8bacb9b8c2001b33ee = $this->env->getExtension("native_profiler");
        $__internal_d7699fffe88d808533add7acfc88e5edfe4441aa5042af8bacb9b8c2001b33ee->enter($__internal_d7699fffe88d808533add7acfc88e5edfe4441aa5042af8bacb9b8c2001b33ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 159
        echo "        ";
        
        $__internal_d7699fffe88d808533add7acfc88e5edfe4441aa5042af8bacb9b8c2001b33ee->leave($__internal_d7699fffe88d808533add7acfc88e5edfe4441aa5042af8bacb9b8c2001b33ee_prof);

    }

    // line 160
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_72f0f90eec6ced173ea5e16f4a4fc4f7b796c5624d906728d31255b9d04a436d = $this->env->getExtension("native_profiler");
        $__internal_72f0f90eec6ced173ea5e16f4a4fc4f7b796c5624d906728d31255b9d04a436d->enter($__internal_72f0f90eec6ced173ea5e16f4a4fc4f7b796c5624d906728d31255b9d04a436d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 161
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 162
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 163
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.validate.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 164
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/additional-methods.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 165
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap-datepicker.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 166
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/sweetalert.min.js"), "html", null, true);
        echo "\"></script>

        ";
        
        $__internal_72f0f90eec6ced173ea5e16f4a4fc4f7b796c5624d906728d31255b9d04a436d->leave($__internal_72f0f90eec6ced173ea5e16f4a4fc4f7b796c5624d906728d31255b9d04a436d_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 166,  339 => 165,  335 => 164,  331 => 163,  327 => 162,  322 => 161,  316 => 160,  309 => 159,  303 => 158,  231 => 13,  227 => 12,  223 => 11,  219 => 10,  215 => 9,  210 => 8,  204 => 7,  192 => 5,  183 => 169,  180 => 160,  178 => 158,  168 => 151,  165 => 150,  161 => 148,  159 => 147,  153 => 144,  142 => 136,  136 => 132,  130 => 130,  128 => 129,  124 => 128,  114 => 121,  110 => 120,  102 => 114,  97 => 112,  93 => 111,  88 => 110,  86 => 109,  82 => 108,  72 => 101,  68 => 100,  56 => 91,  39 => 78,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/style.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/font-awesome.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/otrosIconos.css')}}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/sweetalert.css')}}">*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap-datepicker.css')}}">*/
/* */
/*             <style>*/
/*                 .navbar{*/
/*                     margin-bottom: 10px;*/
/*                     font-size: 16px;*/
/*                 }*/
/*                 .navbar-default{*/
/*                     background-color: #f0ad4e;*/
/*                     border-color: #eea236;*/
/*                 }*/
/*                 .navbar-default:hover{*/
/*                     background-color: #ec971f;*/
/*                     border-color: #d58512;*/
/*                 }*/
/*                 .navbar-default .navbar-toggle .icon-bar {*/
/*                     background-color: white;*/
/*                 }*/
/*                 .nav .open > a, .nav .open > a:hover, .nav .open > a:focus,*/
/*                 .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus,*/
/*                 .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus{*/
/*                     background-color: #e26d1e;*/
/*                     color: white;*/
/*                 }*/
/* */
/*                 .navbar-default .navbar-nav > li > a, .navbar-default .navbar-nav > li > a:hover, .navbar-default .navbar-nav > li > a:focus{*/
/*                     color: white;*/
/*                 }*/
/* */
/*                 .navbar-default .navbar-nav > .active > a, .navbar-default .navbar-nav > .active > a:hover, .navbar-default .navbar-nav > .active > a:focus{*/
/*                     background-color: #e26d1e;*/
/*                     color: white;*/
/*                 }*/
/* */
/*                 .dropdown-menu{*/
/*                     font-size: 16px;*/
/*                 }*/
/* */
/*                 @media (max-width: 767px){*/
/*                     .navbar-default .navbar-nav .open .dropdown-menu > li > a {*/
/*                         color: black;*/
/*                     }*/
/*                     .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,*/
/*                     .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {*/
/*                         color: white;*/
/*                         background-color: transparent;*/
/*                     }*/
/*                 }*/
/* */
/*                 /* borde para los items del navbar *//* */
/*                 .navbar-nav > li{*/
/*                     border-radius: 5px;*/
/*                     border-left: solid 1px #ec971f;*/
/*                 }*/
/*                 .navbar-default:hover .navbar-nav > li{*/
/*                     border-left: solid 1px #e26d1e;*/
/*                 }*/
/* */
/*                 /* margen del separador de cerrar sesion *//* */
/*                 .dropdown-menu .divider {*/
/*                     margin: 2px;*/
/*                 }*/
/* */
/*             </style>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         <nav class="navbar navbar-default">*/
/*             <div class="container-fluid">*/
/*                 <!-- Cabecera -->*/
/*                 <div class="navbar-header" style="margin-right: 15px;">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">*/
/*                         <span class="sr-only">Menu</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="#" style="color: black; font-weight: bold;"><img alt="chanfletaqueria" src="{{ asset('bundles/app/img/logo_20x20.png') }}" style="display: inline-block;"> Chanfletaqueria</a>*/
/*                 </div>*/
/* */
/*                 <!-- Items -->*/
/*                 <div class="collapse navbar-collapse" id="menu">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li class="dropdown" id="costos">*/
/*                             <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-line-chart"></span> Costos <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('costo_index') }}"><span class="fa fa-money"></span> Costos</a></li>*/
/*                                 <li><a href="{{ path('reportes_index') }}"><span class="fa fa-file-pdf-o"></span> Reportes</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li class="dropdown" id="inventario">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-archive"></span> Inventario <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('ingresomateriaprima_index') }}"><span class="icon-ingresoMateria"></span> Ingresos materia prima</a></li>*/
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <li><a href="{{ path('materiaprima_index') }}"><span class="icon-listaMateria"></span> Materia prima</a></li>*/
/*                                     <li><a href="{{ path('producto_index') }}"><span class="icon-productos"></span> Productos</a></li>*/
/*                                     <li><a href="{{ path('proveedores_index') }}"><span class="icon-proveedor"></span> Proveedores</a></li>*/
/*                                     {% endif %}*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li class="dropdown" id="registros">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-calendar"></span> Registros <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('caja_index') }}"><span class="glyphicon glyphicon-briefcase"></span> Cajas</a></li>*/
/*                                 <li><a href="{{ path('turnolaboral_index') }}"><span class="icon-empleado"></span> Turnos laborales</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li class="dropdown" id="usuarios">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-users"></span> Usuarios <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="{{ path('clientes_index') }}"><span class="glyphicon glyphicon-user"></span> Clientes</a></li>*/
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <li><a href="{{ path('UsuariosBundle_empleado_index') }}"><span class="icon-empleado"></span> Empleados</a></li>*/
/*                                     {% endif %}*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li id="ventas">*/
/*                             <a href="{{ path('venta_index') }}"><span class="fa fa-shopping-basket"></span> Ventas</a>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                                                 <span class="icon-empleado"></span> {{ usuario }} <span class="caret"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <li><a href="#"><span class="fa fa-cogs"></span> Configuracion</a></li>*/
/*                                     {% endif %}*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="{{ path('fos_user_security_logout') }}"><span class="glyphicon glyphicon-log-out"></span> Cerrar sesion</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/app/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('bundles/app/js/bootstrap.js') }}"></script>*/
/*             <script src="{{ asset('bundles/app/js/jquery.validate.js') }}"></script>*/
/*             <script src="{{ asset('bundles/app/js/additional-methods.min.js') }}"></script>*/
/*             <script src="{{ asset('bundles/app/js/bootstrap-datepicker.js') }}"></script>*/
/*             <script src="{{ asset('bundles/app/js/sweetalert.min.js') }}"></script>*/
/* */
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
