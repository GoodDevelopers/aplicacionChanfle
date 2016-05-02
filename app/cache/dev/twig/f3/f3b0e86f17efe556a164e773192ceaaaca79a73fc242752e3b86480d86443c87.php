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
        $__internal_880e6520129ede7809ab70fbda048d6134511741c28e90b184c9214b89b4e19d = $this->env->getExtension("native_profiler");
        $__internal_880e6520129ede7809ab70fbda048d6134511741c28e90b184c9214b89b4e19d->enter($__internal_880e6520129ede7809ab70fbda048d6134511741c28e90b184c9214b89b4e19d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_880e6520129ede7809ab70fbda048d6134511741c28e90b184c9214b89b4e19d->leave($__internal_880e6520129ede7809ab70fbda048d6134511741c28e90b184c9214b89b4e19d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_62462b87747786827775d5391d8b63384c276d6fec2f516ea8264262034949c5 = $this->env->getExtension("native_profiler");
        $__internal_62462b87747786827775d5391d8b63384c276d6fec2f516ea8264262034949c5->enter($__internal_62462b87747786827775d5391d8b63384c276d6fec2f516ea8264262034949c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        ";
        // line 10
        echo "        ";
        // line 14
        echo "        .tabla{
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

    </style>
";
        
        $__internal_62462b87747786827775d5391d8b63384c276d6fec2f516ea8264262034949c5->leave($__internal_62462b87747786827775d5391d8b63384c276d6fec2f516ea8264262034949c5_prof);

    }

    // line 32
    public function block_body($context, array $blocks = array())
    {
        $__internal_63cd9d08ccfb5cb59ba929e8f5b5f45118a64676359ffe6abf35da3cadb85c51 = $this->env->getExtension("native_profiler");
        $__internal_63cd9d08ccfb5cb59ba929e8f5b5f45118a64676359ffe6abf35da3cadb85c51->enter($__internal_63cd9d08ccfb5cb59ba929e8f5b5f45118a64676359ffe6abf35da3cadb85c51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    ";
        // line 47
        echo "    

    <div class=\"container\" style=\"margin-top: 30px;\">
        <div class=\"row center-block text-center\" style=\"margin-bottom: 20px;\">
            <h1 class=\"h1\"><span class=\"glyphicon glyphicon-th-large\"></span> Modulos</h1>
        </div>
        <div class=\"row center-block\">
            <div class=\"col-sm-1\">
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2 class=\"h2\"><span class=\"fa fa-money\"></span> Costos</h2>
                    <a href=\"#\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2 class=\"h2\"><span class=\"fa fa-archive\"></span> Inventario</h2>
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
                    <h2 class=\"h2\"><span class=\"fa fa-calendar\"></span> Cajas</h2>
                    <a href=\"#\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2 class=\"h2\"><span class=\"glyphicon glyphicon-user\"></span> Clientes</h2>
                    <a href=\"";
        // line 89
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"";
        // line 90
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
                    <h2 class=\"h2\"><span class=\"fa fa-shopping-basket\"></span> Ventas</h2>
                    <a href=\"#\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"\" class=\"btn btn-info\" role=\"button\"><span class=\"glyphicon glyphicon-search\"></span> Consultar</a>
                    <a href=\"#\" class=\"btn btn-danger\" role=\"button\"><span class=\"glyphicon glyphicon-minus-sign\"></span> Eliminar</a>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"tabla col-sm-12 text-center\">
                    <h2 class=\"h2\"><span class=\"fa fa-cogs\"></span> Configuraciones</h2>
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
        
        $__internal_63cd9d08ccfb5cb59ba929e8f5b5f45118a64676359ffe6abf35da3cadb85c51->leave($__internal_63cd9d08ccfb5cb59ba929e8f5b5f45118a64676359ffe6abf35da3cadb85c51_prof);

    }

    // line 121
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0e31c3df062bc57d3d5458d19247226969104dbd02b6a6266721f07d2f3c61df = $this->env->getExtension("native_profiler");
        $__internal_0e31c3df062bc57d3d5458d19247226969104dbd02b6a6266721f07d2f3c61df->enter($__internal_0e31c3df062bc57d3d5458d19247226969104dbd02b6a6266721f07d2f3c61df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 122
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        console.log('";
        // line 124
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo "');
    </script>
";
        
        $__internal_0e31c3df062bc57d3d5458d19247226969104dbd02b6a6266721f07d2f3c61df->leave($__internal_0e31c3df062bc57d3d5458d19247226969104dbd02b6a6266721f07d2f3c61df_prof);

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
        return array (  179 => 124,  173 => 122,  167 => 121,  129 => 90,  125 => 89,  81 => 47,  79 => 33,  73 => 32,  50 => 14,  48 => 10,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         {#a{*/
/*             text-decoration: none;*/
/*             color: black;*/
/*         }#}*/
/*         {#a:hover{*/
/*             text-decoration: none;*/
/*             color: #ec971f;*/
/*         }#}*/
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
/*     */
/* */
/*     <div class="container" style="margin-top: 30px;">*/
/*         <div class="row center-block text-center" style="margin-bottom: 20px;">*/
/*             <h1 class="h1"><span class="glyphicon glyphicon-th-large"></span> Modulos</h1>*/
/*         </div>*/
/*         <div class="row center-block">*/
/*             <div class="col-sm-1">*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2 class="h2"><span class="fa fa-money"></span> Costos</h2>*/
/*                     <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2 class="h2"><span class="fa fa-archive"></span> Inventario</h2>*/
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
/*                     <h2 class="h2"><span class="fa fa-calendar"></span> Cajas</h2>*/
/*                     <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2 class="h2"><span class="glyphicon glyphicon-user"></span> Clientes</h2>*/
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
/*                     <h2 class="h2"><span class="fa fa-shopping-basket"></span> Ventas</h2>*/
/*                     <a href="#" class="btn btn-success" role="button"><span class="glyphicon glyphicon-plus-sign"></span> Registrar</a>*/
/*                     <a href="" class="btn btn-info" role="button"><span class="glyphicon glyphicon-search"></span> Consultar</a>*/
/*                     <a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-minus-sign"></span> Eliminar</a>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="col-sm-5">*/
/*                 <div class="tabla col-sm-12 text-center">*/
/*                     <h2 class="h2"><span class="fa fa-cogs"></span> Configuraciones</h2>*/
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
