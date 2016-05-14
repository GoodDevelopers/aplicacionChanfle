<?php

/* :venta:show_detalles.html.twig */
class __TwigTemplate_c031e652f91a3cfcb36a667c4fe3b44080259f6cd1421d6fac1a588b9ed89ebc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":venta:show_detalles.html.twig", 1);
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
        $__internal_ccd338f6ee1bb45605a52174fcd8cb51ae085a5c19a4dc8fd88a0cdf516acdd0 = $this->env->getExtension("native_profiler");
        $__internal_ccd338f6ee1bb45605a52174fcd8cb51ae085a5c19a4dc8fd88a0cdf516acdd0->enter($__internal_ccd338f6ee1bb45605a52174fcd8cb51ae085a5c19a4dc8fd88a0cdf516acdd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venta:show_detalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ccd338f6ee1bb45605a52174fcd8cb51ae085a5c19a4dc8fd88a0cdf516acdd0->leave($__internal_ccd338f6ee1bb45605a52174fcd8cb51ae085a5c19a4dc8fd88a0cdf516acdd0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_09aa60304df9e3b330b7fcfd93c470af9ed5c2b6c72e683e5b4c873b3c293b51 = $this->env->getExtension("native_profiler");
        $__internal_09aa60304df9e3b330b7fcfd93c470af9ed5c2b6c72e683e5b4c873b3c293b51->enter($__internal_09aa60304df9e3b330b7fcfd93c470af9ed5c2b6c72e683e5b4c873b3c293b51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_09aa60304df9e3b330b7fcfd93c470af9ed5c2b6c72e683e5b4c873b3c293b51->leave($__internal_09aa60304df9e3b330b7fcfd93c470af9ed5c2b6c72e683e5b4c873b3c293b51_prof);

    }

    public function getTemplateName()
    {
        return ":venta:show_detalles.html.twig";
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
