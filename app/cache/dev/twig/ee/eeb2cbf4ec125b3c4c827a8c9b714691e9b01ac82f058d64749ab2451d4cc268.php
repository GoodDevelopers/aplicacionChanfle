<?php

/* @App/Default/index.html.twig */
class __TwigTemplate_a48e94af185464cf51885eb882bc4f20bb32b94bb6ee61f0941acff9cc24299f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@App/Default/index.html.twig", 1);
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
        $__internal_24b959acb6da2927d44b4381f6058294037e20218430c0f7c43736ee6195b602 = $this->env->getExtension("native_profiler");
        $__internal_24b959acb6da2927d44b4381f6058294037e20218430c0f7c43736ee6195b602->enter($__internal_24b959acb6da2927d44b4381f6058294037e20218430c0f7c43736ee6195b602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@App/Default/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24b959acb6da2927d44b4381f6058294037e20218430c0f7c43736ee6195b602->leave($__internal_24b959acb6da2927d44b4381f6058294037e20218430c0f7c43736ee6195b602_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_9db44a3fc5a770c1756b66c2a8b82291047c5cf61da9b002151369892962cd9c = $this->env->getExtension("native_profiler");
        $__internal_9db44a3fc5a770c1756b66c2a8b82291047c5cf61da9b002151369892962cd9c->enter($__internal_9db44a3fc5a770c1756b66c2a8b82291047c5cf61da9b002151369892962cd9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Homepage";
        
        $__internal_9db44a3fc5a770c1756b66c2a8b82291047c5cf61da9b002151369892962cd9c->leave($__internal_9db44a3fc5a770c1756b66c2a8b82291047c5cf61da9b002151369892962cd9c_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e6b67cae1f1728942b67e08c37dfcb7604f0fbb4b30815da35b2e5cc30ad3a84 = $this->env->getExtension("native_profiler");
        $__internal_e6b67cae1f1728942b67e08c37dfcb7604f0fbb4b30815da35b2e5cc30ad3a84->enter($__internal_e6b67cae1f1728942b67e08c37dfcb7604f0fbb4b30815da35b2e5cc30ad3a84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_e6b67cae1f1728942b67e08c37dfcb7604f0fbb4b30815da35b2e5cc30ad3a84->leave($__internal_e6b67cae1f1728942b67e08c37dfcb7604f0fbb4b30815da35b2e5cc30ad3a84_prof);

    }

    // line 34
    public function block_body($context, array $blocks = array())
    {
        $__internal_63d4bf5f3ed31af680ee6261fd2f686e649fef8f6af3a881b90eada78c55aa64 = $this->env->getExtension("native_profiler");
        $__internal_63d4bf5f3ed31af680ee6261fd2f686e649fef8f6af3a881b90eada78c55aa64->enter($__internal_63d4bf5f3ed31af680ee6261fd2f686e649fef8f6af3a881b90eada78c55aa64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_63d4bf5f3ed31af680ee6261fd2f686e649fef8f6af3a881b90eada78c55aa64->leave($__internal_63d4bf5f3ed31af680ee6261fd2f686e649fef8f6af3a881b90eada78c55aa64_prof);

    }

    // line 123
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a01a03b5f16727dd8c7fabb588fc44acf46fabaf0975b267c43cd2f09310e8e0 = $this->env->getExtension("native_profiler");
        $__internal_a01a03b5f16727dd8c7fabb588fc44acf46fabaf0975b267c43cd2f09310e8e0->enter($__internal_a01a03b5f16727dd8c7fabb588fc44acf46fabaf0975b267c43cd2f09310e8e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_a01a03b5f16727dd8c7fabb588fc44acf46fabaf0975b267c43cd2f09310e8e0->leave($__internal_a01a03b5f16727dd8c7fabb588fc44acf46fabaf0975b267c43cd2f09310e8e0_prof);

    }

    public function getTemplateName()
    {
        return "@App/Default/index.html.twig";
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
