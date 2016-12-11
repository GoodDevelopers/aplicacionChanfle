<?php

/* venta/show_detalles.html.twig */
class __TwigTemplate_b6b3669889a463c7dbab6b6ba3a57bfe7758b864597af0eccd9a8a59f914c033 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venta/show_detalles.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_89a00dacf316b5779e93444e7c0e6e69c4760ecb3f607b0ec013745ba3c7f3a6 = $this->env->getExtension("native_profiler");
        $__internal_89a00dacf316b5779e93444e7c0e6e69c4760ecb3f607b0ec013745ba3c7f3a6->enter($__internal_89a00dacf316b5779e93444e7c0e6e69c4760ecb3f607b0ec013745ba3c7f3a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/show_detalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_89a00dacf316b5779e93444e7c0e6e69c4760ecb3f607b0ec013745ba3c7f3a6->leave($__internal_89a00dacf316b5779e93444e7c0e6e69c4760ecb3f607b0ec013745ba3c7f3a6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1ce7174886d3a7bfa288ed53fcfb819c937d8cb8dd174e4b589798e45f35d1af = $this->env->getExtension("native_profiler");
        $__internal_1ce7174886d3a7bfa288ed53fcfb819c937d8cb8dd174e4b589798e45f35d1af->enter($__internal_1ce7174886d3a7bfa288ed53fcfb819c937d8cb8dd174e4b589798e45f35d1af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Detalles Venta <span class=\"fa fa-shopping-basket\"></span></h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul>
                    <li>
                        <a href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_new", array("id" => $this->getAttribute((isset($context["venta"]) ? $context["venta"] : $this->getContext($context, "venta")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-lg btn-primary\">Agregar Detalle <span class=\"glyphicon glyphicon-plus-sign\"></span></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class=\"margenTopTablas\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover table-condensed text-center\">
                            <thead>
                                <tr class=\"active info\">
                                    <th>FECHA</th>
                                    <th>PRODUCTO</th>
                                    <th>CANTIDAD</th>
                                    <th>VALOR DETALLE</th>
                                    <th>ACCIONES</th>

                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 35
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalleVentas"]) ? $context["detalleVentas"] : $this->getContext($context, "detalleVentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["detalleVentum"]) {
            // line 36
            echo "                                    <tr>
                                        <td>";
            // line 37
            if ($this->getAttribute($context["detalleVentum"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["detalleVentum"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                        <td><a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_show", array("id" => $this->getAttribute($context["detalleVentum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detalleVentum"], "producto", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 39
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "cantidad", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "valorDetalle", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_edit", array("id" => $this->getAttribute($context["detalleVentum"], "id", array()), "id2" => $this->getAttribute((isset($context["venta"]) ? $context["venta"] : $this->getContext($context, "venta")), "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar Detalle <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_show", array("id" => $this->getAttribute($context["detalleVentum"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Remover Detalle <span class=\"glyphicon glyphicon-minus-sign\"></span></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalleVentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <div class=\"row\">
                <div class=\"col-md-12 text-center\">
                    <a href=\"";
        // line 62
        echo $this->env->getExtension('routing')->getPath("venta_index");
        echo "\" role=\"button\" class=\"btn btn-info\">Lista Ventas <span class=\"glyphicon glyphicon-th-list\"></span></a>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_1ce7174886d3a7bfa288ed53fcfb819c937d8cb8dd174e4b589798e45f35d1af->leave($__internal_1ce7174886d3a7bfa288ed53fcfb819c937d8cb8dd174e4b589798e45f35d1af_prof);

    }

    public function getTemplateName()
    {
        return "venta/show_detalles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 62,  124 => 53,  112 => 47,  106 => 44,  99 => 40,  95 => 39,  89 => 38,  83 => 37,  80 => 36,  76 => 35,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Detalles Venta <span class="fa fa-shopping-basket"></span></h1>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('detalleventa_new',{'id':venta.id}) }}" class="btn btn-lg btn-primary">Agregar Detalle <span class="glyphicon glyphicon-plus-sign"></span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*         <div class="margenTopTablas">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover table-condensed text-center">*/
/*                             <thead>*/
/*                                 <tr class="active info">*/
/*                                     <th>FECHA</th>*/
/*                                     <th>PRODUCTO</th>*/
/*                                     <th>CANTIDAD</th>*/
/*                                     <th>VALOR DETALLE</th>*/
/*                                     <th>ACCIONES</th>*/
/* */
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for detalleVentum in detalleVentas %}*/
/*                                     <tr>*/
/*                                         <td>{% if detalleVentum.fecha %}{{ detalleVentum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                         <td><a href="{{ path('detalleventa_show', { 'id': detalleVentum.id }) }}">{{ detalleVentum.producto.nombre }}</a></td>*/
/*                                         <td>{{ detalleVentum.cantidad }}</td>*/
/*                                         <td>{{ detalleVentum.valorDetalle }}</td>*/
/*                                         <td>*/
/*                                             <ul class="list-inline text-center">*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('detalleventa_edit', { 'id': detalleVentum.id, 'id2': venta.id }) }}" class="btn btn-warning" role="button">Editar Detalle <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('detalleventa_show', { 'id': detalleVentum.id }) }}" class="btn btn-danger" role="button">Remover Detalle <span class="glyphicon glyphicon-minus-sign"></span></a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div>*/
/*             <div class="row">*/
/*                 <div class="col-md-12 text-center">*/
/*                     <a href="{{ path('venta_index') }}" role="button" class="btn btn-info">Lista Ventas <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
