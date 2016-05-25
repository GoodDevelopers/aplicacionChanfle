<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_8adb4c883269b5d892122414161451e7793578465a43a01671d5bc8d64ec34c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "AppBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
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
        $__internal_4c00a43b57078a7f5b4387cbf8afcc65cd675ccb677c6230da0b64ee41fb79bc = $this->env->getExtension("native_profiler");
        $__internal_4c00a43b57078a7f5b4387cbf8afcc65cd675ccb677c6230da0b64ee41fb79bc->enter($__internal_4c00a43b57078a7f5b4387cbf8afcc65cd675ccb677c6230da0b64ee41fb79bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c00a43b57078a7f5b4387cbf8afcc65cd675ccb677c6230da0b64ee41fb79bc->leave($__internal_4c00a43b57078a7f5b4387cbf8afcc65cd675ccb677c6230da0b64ee41fb79bc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d1959e52435779ff40c336b8e3f4c7819023e5d3cdc02817408c5ffc84f10f76 = $this->env->getExtension("native_profiler");
        $__internal_d1959e52435779ff40c336b8e3f4c7819023e5d3cdc02817408c5ffc84f10f76->enter($__internal_d1959e52435779ff40c336b8e3f4c7819023e5d3cdc02817408c5ffc84f10f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage";
        
        $__internal_d1959e52435779ff40c336b8e3f4c7819023e5d3cdc02817408c5ffc84f10f76->leave($__internal_d1959e52435779ff40c336b8e3f4c7819023e5d3cdc02817408c5ffc84f10f76_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_a9b412630e7d169ab7b2669e5e102a3297a6426f2af5ec55dd2a61e15caa37df = $this->env->getExtension("native_profiler");
        $__internal_a9b412630e7d169ab7b2669e5e102a3297a6426f2af5ec55dd2a61e15caa37df->enter($__internal_a9b412630e7d169ab7b2669e5e102a3297a6426f2af5ec55dd2a61e15caa37df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        ";
        // line 12
        echo "        ";
        // line 16
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
        
        $__internal_a9b412630e7d169ab7b2669e5e102a3297a6426f2af5ec55dd2a61e15caa37df->leave($__internal_a9b412630e7d169ab7b2669e5e102a3297a6426f2af5ec55dd2a61e15caa37df_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_837a41e7509eec0f858942978e85a0b852f3be0ff270d471bcd5f9480911ff31 = $this->env->getExtension("native_profiler");
        $__internal_837a41e7509eec0f858942978e85a0b852f3be0ff270d471bcd5f9480911ff31->enter($__internal_837a41e7509eec0f858942978e85a0b852f3be0ff270d471bcd5f9480911ff31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 35
        echo "    ";
        // line 49
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
        // line 91
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\" class=\"btn btn-success\" role=\"button\"><span class=\"glyphicon glyphicon-plus-sign\"></span> Registrar</a>
                    <a href=\"";
        // line 92
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
        
        $__internal_837a41e7509eec0f858942978e85a0b852f3be0ff270d471bcd5f9480911ff31->leave($__internal_837a41e7509eec0f858942978e85a0b852f3be0ff270d471bcd5f9480911ff31_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_17aaaaa288caa2e4b66eb7be4d5e627b011d528b2ce2c46e0dedbffc585206f2 = $this->env->getExtension("native_profiler");
        $__internal_17aaaaa288caa2e4b66eb7be4d5e627b011d528b2ce2c46e0dedbffc585206f2->enter($__internal_17aaaaa288caa2e4b66eb7be4d5e627b011d528b2ce2c46e0dedbffc585206f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 124
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        console.log('";
        // line 126
        echo twig_escape_filter($this->env, (isset($context["usuario"]) ? $context["usuario"] : $this->getContext($context, "usuario")), "html", null, true);
        echo "');
    </script>
";
        
        $__internal_17aaaaa288caa2e4b66eb7be4d5e627b011d528b2ce2c46e0dedbffc585206f2->leave($__internal_17aaaaa288caa2e4b66eb7be4d5e627b011d528b2ce2c46e0dedbffc585206f2_prof);

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
        return array (  192 => 126,  186 => 124,  180 => 123,  142 => 92,  138 => 91,  94 => 49,  92 => 35,  86 => 34,  63 => 16,  61 => 12,  55 => 6,  49 => 5,  37 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block title %}Homepage{% endblock %}*/
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
