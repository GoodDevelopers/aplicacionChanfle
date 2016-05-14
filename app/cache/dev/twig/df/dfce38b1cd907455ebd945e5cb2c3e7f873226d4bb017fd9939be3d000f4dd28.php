<?php

/* venta/show_detalles.html.twig */
class __TwigTemplate_515ca5a290b0a3f186a25df9553368ad26ecd3221bff9f93ee90e4c674acee4d extends Twig_Template
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
        $__internal_a82dc1d14d5fcf2ee879ee48e7a4532aeba8583e639f7efdd61c86dfb948b230 = $this->env->getExtension("native_profiler");
        $__internal_a82dc1d14d5fcf2ee879ee48e7a4532aeba8583e639f7efdd61c86dfb948b230->enter($__internal_a82dc1d14d5fcf2ee879ee48e7a4532aeba8583e639f7efdd61c86dfb948b230_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/show_detalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a82dc1d14d5fcf2ee879ee48e7a4532aeba8583e639f7efdd61c86dfb948b230->leave($__internal_a82dc1d14d5fcf2ee879ee48e7a4532aeba8583e639f7efdd61c86dfb948b230_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4e2613b7e821a935af666898226de2fd5d837b759feffbfbc51477357942243 = $this->env->getExtension("native_profiler");
        $__internal_d4e2613b7e821a935af666898226de2fd5d837b759feffbfbc51477357942243->enter($__internal_d4e2613b7e821a935af666898226de2fd5d837b759feffbfbc51477357942243_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "  <h1>DetalleVenta list</h1>

    <table class=\"table table-striped\">
        <thead >
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Producto</th>
                <th>Cantidad</th>
                <th>Valordetalle</th>
              
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalleVentas"]) ? $context["detalleVentas"] : $this->getContext($context, "detalleVentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["detalleVentum"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_show", array("id" => $this->getAttribute($context["detalleVentum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            if ($this->getAttribute($context["detalleVentum"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["detalleVentum"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td> ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["detalleVentum"], "producto", array()), "nombre", array()), "html", null, true);
            echo " </td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "valorDetalle", array()), "html", null, true);
            echo "</td>

            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalleVentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "        </tbody>
    </table>

    <ul>
        <li>
           
        </li>
    </ul>
";
        
        $__internal_d4e2613b7e821a935af666898226de2fd5d837b759feffbfbc51477357942243->leave($__internal_d4e2613b7e821a935af666898226de2fd5d837b759feffbfbc51477357942243_prof);

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
        return array (  93 => 28,  83 => 24,  79 => 23,  75 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*   <h1>DetalleVenta list</h1>*/
/* */
/*     <table class="table table-striped">*/
/*         <thead >*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Producto</th>*/
/*                 <th>Cantidad</th>*/
/*                 <th>Valordetalle</th>*/
/*               */
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for detalleVentum in detalleVentas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('detalleventa_show', { 'id': detalleVentum.id }) }}">{{ detalleVentum.id }}</a></td>*/
/*                 <td>{% if detalleVentum.fecha %}{{ detalleVentum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td> {{detalleVentum.producto.nombre}} </td>*/
/*                 <td>{{ detalleVentum.cantidad }}</td>*/
/*                 <td>{{ detalleVentum.valorDetalle }}</td>*/
/* */
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*            */
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
