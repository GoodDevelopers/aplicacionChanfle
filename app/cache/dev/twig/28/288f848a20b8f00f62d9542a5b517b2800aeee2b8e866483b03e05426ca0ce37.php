<?php

/* ::base.html.twig */
class __TwigTemplate_2a5445cd4c70d1e61cdcb9b5a6ef54199d8e5baadcf6b83314cd85aa0a7119e9 extends Twig_Template
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
        $__internal_4e535807ab6cbcc700a8aec1f07243726a2be9fc8db7fed6b068f4c8fb2c74f5 = $this->env->getExtension("native_profiler");
        $__internal_4e535807ab6cbcc700a8aec1f07243726a2be9fc8db7fed6b068f4c8fb2c74f5->enter($__internal_4e535807ab6cbcc700a8aec1f07243726a2be9fc8db7fed6b068f4c8fb2c74f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 75
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
                    <a class=\"navbar-brand\" href=\"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("homepage");
        echo "\" style=\"color: black; font-weight: bold;\"><img alt=\"chanfletaqueria\" src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/img/logo_20x20.png"), "html", null, true);
        echo "\" style=\"display: inline-block;\"> Chanfletaqueria</a>
                </div>

                <!-- Items -->
                <div class=\"collapse navbar-collapse\" id=\"menu\">
                    <ul class=\"nav navbar-nav\">
                        <li id=\"costos\">
                            <a href=\"#\"><span class=\"fa fa-line-chart\"></span> Costos</a>
                        </li>

                        <li class=\"dropdown\" id=\"inventario\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-archive\"></span> Inventario <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"><span class=\"icon-ingresoMateria\"></span> Ingresos materia prima</a></li>
                                ";
        // line 102
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 103
            echo "                                <li><a href=\"#\"><span class=\"icon-listaMateria\"></span> Materia prima</a></li>
                                <li><a href=\"#\"><span class=\"icon-productos\"></span> Productos</a></li>
                                <li><a href=\"#\"><span class=\"icon-productos\"></span> Proveedores</a></li>
                                ";
        }
        // line 107
        echo "                            </ul>
                        </li>

                        <li class=\"dropdown\" id=\"registros\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-calendar\"></span> Registros <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"><span class=\"fa fa-money\"></span> Cajas</a></li>
                                <li><a href=\"#\"><span class=\"icon-empleado\"></span> Turnos laborales</a></li>
                            </ul>
                        </li>

                        <li class=\"dropdown\" id=\"usuarios\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\"><span class=\"fa fa-users\"></span> Usuarios <span class=\"caret\"></span></a>
                            <ul class=\"dropdown-menu\">
                                <li><a href=\"#\"><span class=\"glyphicon glyphicon-user\"></span> Clientes</a></li>
                                ";
        // line 122
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 123
            echo "                                <li><a href=\"#\"><span class=\"icon-empleado\"></span> Empleados</a></li>
                                ";
        }
        // line 125
        echo "                            </ul>
                        </li>

                        <li id=\"ventas\">
                            <a href=\"#\"><span class=\"fa fa-shopping-basket\"></span> Ventas</a>
                        </li>

                    </ul>

                    <ul class=\"nav navbar-nav navbar-right\">
                        <li class=\"dropdown\">
                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                <span class=\"icon-empleado\"></span> ";
        // line 137
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo " <span class=\"caret\"></span>
                            </a>
                            <ul class=\"dropdown-menu\">
                                    ";
        // line 140
        if ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 141
            echo "                                    <li><a href=\"#\">Configuracion</a></li>
                                    ";
        }
        // line 143
        echo "                                <li><a href=\"#\">Perfil</a></li>
                                <li role=\"separator\" class=\"divider\"></li>
                                <li><a href=\"";
        // line 145
        echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
        echo "\">Cerrar sesion</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        ";
        // line 152
        $this->displayBlock('body', $context, $blocks);
        // line 154
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 158
        echo "    </body>
</html>
";
        
        $__internal_4e535807ab6cbcc700a8aec1f07243726a2be9fc8db7fed6b068f4c8fb2c74f5->leave($__internal_4e535807ab6cbcc700a8aec1f07243726a2be9fc8db7fed6b068f4c8fb2c74f5_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1efd4ba4c787d7ba20affabca6a8b17abb7345e32ed03bc52d0d816065046a0 = $this->env->getExtension("native_profiler");
        $__internal_d1efd4ba4c787d7ba20affabca6a8b17abb7345e32ed03bc52d0d816065046a0->enter($__internal_d1efd4ba4c787d7ba20affabca6a8b17abb7345e32ed03bc52d0d816065046a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_d1efd4ba4c787d7ba20affabca6a8b17abb7345e32ed03bc52d0d816065046a0->leave($__internal_d1efd4ba4c787d7ba20affabca6a8b17abb7345e32ed03bc52d0d816065046a0_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_cd0245daecc67290263e3706d4f7762cfd4e3a83d9e425b23e94c875a3b78115 = $this->env->getExtension("native_profiler");
        $__internal_cd0245daecc67290263e3706d4f7762cfd4e3a83d9e425b23e94c875a3b78115->enter($__internal_cd0245daecc67290263e3706d4f7762cfd4e3a83d9e425b23e94c875a3b78115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_cd0245daecc67290263e3706d4f7762cfd4e3a83d9e425b23e94c875a3b78115->leave($__internal_cd0245daecc67290263e3706d4f7762cfd4e3a83d9e425b23e94c875a3b78115_prof);

    }

    // line 152
    public function block_body($context, array $blocks = array())
    {
        $__internal_b1877168421b98bf6597e74a460bce38931ef9b54f37b8df5d4bd146bc7effcf = $this->env->getExtension("native_profiler");
        $__internal_b1877168421b98bf6597e74a460bce38931ef9b54f37b8df5d4bd146bc7effcf->enter($__internal_b1877168421b98bf6597e74a460bce38931ef9b54f37b8df5d4bd146bc7effcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 153
        echo "        ";
        
        $__internal_b1877168421b98bf6597e74a460bce38931ef9b54f37b8df5d4bd146bc7effcf->leave($__internal_b1877168421b98bf6597e74a460bce38931ef9b54f37b8df5d4bd146bc7effcf_prof);

    }

    // line 154
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_840a9d23fc5eaa4734e297ba1b305341564f09462d144a3b8b779a8f9955fb80 = $this->env->getExtension("native_profiler");
        $__internal_840a9d23fc5eaa4734e297ba1b305341564f09462d144a3b8b779a8f9955fb80->enter($__internal_840a9d23fc5eaa4734e297ba1b305341564f09462d144a3b8b779a8f9955fb80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 155
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_840a9d23fc5eaa4734e297ba1b305341564f09462d144a3b8b779a8f9955fb80->leave($__internal_840a9d23fc5eaa4734e297ba1b305341564f09462d144a3b8b779a8f9955fb80_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  286 => 156,  281 => 155,  275 => 154,  268 => 153,  262 => 152,  191 => 11,  187 => 10,  183 => 9,  178 => 8,  172 => 7,  160 => 5,  151 => 158,  148 => 154,  146 => 152,  136 => 145,  132 => 143,  128 => 141,  126 => 140,  120 => 137,  106 => 125,  102 => 123,  100 => 122,  83 => 107,  77 => 103,  75 => 102,  56 => 88,  39 => 75,  37 => 7,  32 => 5,  26 => 1,);
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
/*                     <a class="navbar-brand" href="{{ path('homepage') }}" style="color: black; font-weight: bold;"><img alt="chanfletaqueria" src="{{ asset('bundles/app/img/logo_20x20.png') }}" style="display: inline-block;"> Chanfletaqueria</a>*/
/*                 </div>*/
/* */
/*                 <!-- Items -->*/
/*                 <div class="collapse navbar-collapse" id="menu">*/
/*                     <ul class="nav navbar-nav">*/
/*                         <li id="costos">*/
/*                             <a href="#"><span class="fa fa-line-chart"></span> Costos</a>*/
/*                         </li>*/
/* */
/*                         <li class="dropdown" id="inventario">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-archive"></span> Inventario <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#"><span class="icon-ingresoMateria"></span> Ingresos materia prima</a></li>*/
/*                                 {% if is_granted('ROLE_ADMIN') %}*/
/*                                 <li><a href="#"><span class="icon-listaMateria"></span> Materia prima</a></li>*/
/*                                 <li><a href="#"><span class="icon-productos"></span> Productos</a></li>*/
/*                                 <li><a href="#"><span class="icon-productos"></span> Proveedores</a></li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li class="dropdown" id="registros">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-calendar"></span> Registros <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#"><span class="fa fa-money"></span> Cajas</a></li>*/
/*                                 <li><a href="#"><span class="icon-empleado"></span> Turnos laborales</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li class="dropdown" id="usuarios">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="fa fa-users"></span> Usuarios <span class="caret"></span></a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#"><span class="glyphicon glyphicon-user"></span> Clientes</a></li>*/
/*                                 {% if is_granted('ROLE_ADMIN') %}*/
/*                                 <li><a href="#"><span class="icon-empleado"></span> Empleados</a></li>*/
/*                                 {% endif %}*/
/*                             </ul>*/
/*                         </li>*/
/* */
/*                         <li id="ventas">*/
/*                             <a href="#"><span class="fa fa-shopping-basket"></span> Ventas</a>*/
/*                         </li>*/
/* */
/*                     </ul>*/
/* */
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="dropdown">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">*/
/*                                 <span class="icon-empleado"></span> {{ usuario }} <span class="caret"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                     {% if is_granted('ROLE_ADMIN') %}*/
/*                                     <li><a href="#">Configuracion</a></li>*/
/*                                     {% endif %}*/
/*                                 <li><a href="#">Perfil</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="{{ path('fos_user_security_logout') }}">Cerrar sesion</a></li>*/
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
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
