<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_8eaaeb4e5c3b9091fa66139c482ea004f0d608f4c1f18a95dd9e97d6f59b9dd8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9f44fd5151adf74403f3f984c328d541151a2c014955b638eb9712c66695978f = $this->env->getExtension("native_profiler");
        $__internal_9f44fd5151adf74403f3f984c328d541151a2c014955b638eb9712c66695978f->enter($__internal_9f44fd5151adf74403f3f984c328d541151a2c014955b638eb9712c66695978f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9f44fd5151adf74403f3f984c328d541151a2c014955b638eb9712c66695978f->leave($__internal_9f44fd5151adf74403f3f984c328d541151a2c014955b638eb9712c66695978f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c4aa0ebd1508edc99b5fd04c2b1dc8ef189427c967a252f6c3e80bdbabb8f791 = $this->env->getExtension("native_profiler");
        $__internal_c4aa0ebd1508edc99b5fd04c2b1dc8ef189427c967a252f6c3e80bdbabb8f791->enter($__internal_c4aa0ebd1508edc99b5fd04c2b1dc8ef189427c967a252f6c3e80bdbabb8f791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
    <style>
        h1, h2{
            color: black;
            font-weight: bold;
        }
        a{
            text-decoration: none;
            color: black;
        }
        a:hover{
            text-decoration: none;
            color: #ec971f;
        }
        .tabla{
            padding: 0px;
            border: solid;
            border-radius: 10px;
            border-style: double;
            background-color: #e7d8c5;
            box-shadow: 0.5em 0.5em 0.5em;
        }
        .col-sm-5 {
            margin-bottom: 10px;
        }
        .btn{
            margin-bottom: 20px;
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

    </style>
";
        
        $__internal_c4aa0ebd1508edc99b5fd04c2b1dc8ef189427c967a252f6c3e80bdbabb8f791->leave($__internal_c4aa0ebd1508edc99b5fd04c2b1dc8ef189427c967a252f6c3e80bdbabb8f791_prof);

    }

    // line 64
    public function block_body($context, array $blocks = array())
    {
        $__internal_69c5f8a265319e15615931e481f5303cc633d0a820272309359ca955db89986b = $this->env->getExtension("native_profiler");
        $__internal_69c5f8a265319e15615931e481f5303cc633d0a820272309359ca955db89986b->enter($__internal_69c5f8a265319e15615931e481f5303cc633d0a820272309359ca955db89986b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 65
        echo "    ";
        // line 79
        echo "    <nav class=\"navbar navbar-default\">
        <div class=\"container-fluid\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#menu\" aria-expanded=\"false\">
                    <span class=\"sr-only\">Menu</span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                    <span class=\"icon-bar\"></span>
                </button>
                <a class=\"navbar-brand\" href=\"#\" style=\"color: black; font-weight: bold;\"><span class=\"glyphicon glyphicon-home\"></span> Inicio</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse\" id=\"menu\">
                <ul class=\"nav navbar-nav navbar-right\">
                    <li class=\"dropdown\" style=\"font-size: 16px;\">
                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\" role=\"button\" aria-haspopup=\"true\" aria-expanded=\"false\" style=\"color: white;\">
                            <span class=\"icon-empleado\"></span> ";
        // line 97
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo " <span class=\"caret\"></span>
                        </a>
                        <ul class=\"dropdown-menu\">
                            <li><a href=\"#\">Perfil</a></li>
                            <li><a href=\"#\">Opcion</a></li>
                            <li><a href=\"#\">Opcion</a></li>
                            <li role=\"separator\" class=\"divider\"></li>
                            <li><a href=\"#\">Cerrar sesion</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>

    <div class=\"container\" style=\"margin-top: 30px;\">
        <div class=\"row center-block text-center\" style=\"margin-bottom: 20px;\">
            <h1><span class=\"glyphicon glyphicon-th-large\"></span> Modulos</h1>
        </div>
        <div class=\"row center-block\">
            <div class=\"col-sm-1\">
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2><span class=\"fa fa-money\"></span> Costos</h2>
                    <a href=\"#\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2><span class=\"fa fa-archive\"></span> Inventario</h2>
                    <a href=\"#\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-1\">
            </div>
        </div>
        <div class=\"row center-block\">
            <div class=\"col-sm-1\">
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2><span class=\"fa fa-calendar\"></span> Cajas</h2>
                    <a href=\"#\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2><span class=\"glyphicon glyphicon-user\"></span> Clientes</h2>
                    <a href=\"";
        // line 152
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"";
        // line 153
        echo $this->env->getExtension('routing')->getPath("clientes_index");
        echo "\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-1\">
            </div>
        </div>
        <div class=\"row center-block\">
            <div class=\"col-sm-1\">
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2><span class=\"fa fa-shopping-basket\"></span> Ventas</h2>
                    <a href=\"#\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2><span class=\"fa fa-cogs\"></span> Configuraciones</h2>
                    <a href=\"#\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-1\">
            </div>
        </div>
    </div>
";
        
        $__internal_69c5f8a265319e15615931e481f5303cc633d0a820272309359ca955db89986b->leave($__internal_69c5f8a265319e15615931e481f5303cc633d0a820272309359ca955db89986b_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_392c4458875412f5d6d5274eee44b763b4050739ecc14a8073442faab3a91c45 = $this->env->getExtension("native_profiler");
        $__internal_392c4458875412f5d6d5274eee44b763b4050739ecc14a8073442faab3a91c45->enter($__internal_392c4458875412f5d6d5274eee44b763b4050739ecc14a8073442faab3a91c45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        console.log('";
        // line 187
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo "');
    </script>
";
        
        $__internal_392c4458875412f5d6d5274eee44b763b4050739ecc14a8073442faab3a91c45->leave($__internal_392c4458875412f5d6d5274eee44b763b4050739ecc14a8073442faab3a91c45_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  252 => 187,  246 => 185,  240 => 184,  202 => 153,  198 => 152,  140 => 97,  120 => 79,  118 => 65,  112 => 64,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/otrosIconos.css')}}">*/
/*     <style>*/
/*         h1, h2{*/
/*             color: black;*/
/*             font-weight: bold;*/
/*         }*/
/*         a{*/
/*             text-decoration: none;*/
/*             color: black;*/
/*         }*/
/*         a:hover{*/
/*             text-decoration: none;*/
/*             color: #ec971f;*/
/*         }*/
/*         .tabla{*/
/*             padding: 0px;*/
/*             border: solid;*/
/*             border-radius: 10px;*/
/*             border-style: double;*/
/*             background-color: #e7d8c5;*/
/*             box-shadow: 0.5em 0.5em 0.5em;*/
/*         }*/
/*         .col-sm-5 {*/
/*             margin-bottom: 10px;*/
/*         }*/
/*         .btn{*/
/*             margin-bottom: 20px;*/
/*         }*/
/*         .navbar-default{*/
/*             background-color: #f0ad4e;*/
/*             border-color: #eea236;*/
/*         }*/
/*         .navbar-default:hover{*/
/*             background-color: #ec971f;*/
/*             border-color: #d58512;*/
/*         }*/
/*         .navbar-default .navbar-toggle .icon-bar {*/
/*             background-color: white;*/
/*         }*/
/*         .nav .open > a, .nav .open > a:hover, .nav .open > a:focus,*/
/*         .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus,*/
/*         .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus{*/
/*             background-color: #e26d1e;*/
/*         }*/
/* */
/*         @media (max-width: 767px){*/
/*             .navbar-default .navbar-nav .open .dropdown-menu > li > a {*/
/*                 color: black;*/
/*             }*/
/*             .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,*/
/*             .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {*/
/*                 color: white;*/
/*                 background-color: transparent;*/
/*             }*/
/*         }*/
/* */
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {#<header class="btn-warning">*/
/*         <div class="container-fluid">*/
/*             <div class="row">*/
/*                 <div class="col-sm-2">*/
/*                 </div>*/
/*                 <div class="col-sm-8 text-center">*/
/*                     <h4><span class="glyphicon glyphicon-home"></span></h4>*/
/*                 </div>*/
/*                 <div class="col-sm-2 text-right" >*/
/*                     <a href="#" style="text-decoration: none; color: white;"><h4><span class="icon-empleado"></span> Usuario</h4></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </header>#}*/
/*     <nav class="navbar navbar-default">*/
/*         <div class="container-fluid">*/
/*             <!-- Brand and toggle get grouped for better mobile display -->*/
/*             <div class="navbar-header">*/
/*                 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">*/
/*                     <span class="sr-only">Menu</span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                     <span class="icon-bar"></span>*/
/*                 </button>*/
/*                 <a class="navbar-brand" href="#" style="color: black; font-weight: bold;"><span class="glyphicon glyphicon-home"></span> Inicio</a>*/
/*             </div>*/
/* */
/*             <!-- Collect the nav links, forms, and other content for toggling -->*/
/*             <div class="collapse navbar-collapse" id="menu">*/
/*                 <ul class="nav navbar-nav navbar-right">*/
/*                     <li class="dropdown" style="font-size: 16px;">*/
/*                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">*/
/*                             <span class="icon-empleado"></span> {{ usuario }} <span class="caret"></span>*/
/*                         </a>*/
/*                         <ul class="dropdown-menu">*/
/*                             <li><a href="#">Perfil</a></li>*/
/*                             <li><a href="#">Opcion</a></li>*/
/*                             <li><a href="#">Opcion</a></li>*/
/*                             <li role="separator" class="divider"></li>*/
/*                             <li><a href="#">Cerrar sesion</a></li>*/
/*                         </ul>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div><!-- /.navbar-collapse -->*/
/*         </div><!-- /.container-fluid -->*/
/*     </nav>*/
/* */
/*     <div class="container" style="margin-top: 30px;">*/
/*         <div class="row center-block text-center" style="margin-bottom: 20px;">*/
/*             <h1><span class="glyphicon glyphicon-th-large"></span> Modulos</h1>*/
/*         </div>*/
/*         <div class="row center-block">*/
/*             <div class="col-sm-1">*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2><span class="fa fa-money"></span> Costos</h2>*/
/*                     <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2><span class="fa fa-archive"></span> Inventario</h2>*/
/*                     <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-1">*/
/*             </div>*/
/*         </div>*/
/*         <div class="row center-block">*/
/*             <div class="col-sm-1">*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2><span class="fa fa-calendar"></span> Cajas</h2>*/
/*                     <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2><span class="glyphicon glyphicon-user"></span> Clientes</h2>*/
/*                     <a href="{{ path('clientes_new') }}" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="{{ path('clientes_index') }}" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-1">*/
/*             </div>*/
/*         </div>*/
/*         <div class="row center-block">*/
/*             <div class="col-sm-1">*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2><span class="fa fa-shopping-basket"></span> Ventas</h2>*/
/*                     <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2><span class="fa fa-cogs"></span> Configuraciones</h2>*/
/*                     <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-1">*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         console.log('{{ usuario }}');*/
/*     </script>*/
/* {% endblock %}*/
/*     */
/* */
/* */
