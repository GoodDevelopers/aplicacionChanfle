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
        $__internal_62699bb96d0695239c68c344dcecd855c749fc98d4b4dfaf76393da703e5ebf6 = $this->env->getExtension("native_profiler");
        $__internal_62699bb96d0695239c68c344dcecd855c749fc98d4b4dfaf76393da703e5ebf6->enter($__internal_62699bb96d0695239c68c344dcecd855c749fc98d4b4dfaf76393da703e5ebf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/show_detalles.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_62699bb96d0695239c68c344dcecd855c749fc98d4b4dfaf76393da703e5ebf6->leave($__internal_62699bb96d0695239c68c344dcecd855c749fc98d4b4dfaf76393da703e5ebf6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_88f14248a894316c8304d97ca6b77e2ab9ebab4de4583a3bdd5b55a49de36149 = $this->env->getExtension("native_profiler");
        $__internal_88f14248a894316c8304d97ca6b77e2ab9ebab4de4583a3bdd5b55a49de36149->enter($__internal_88f14248a894316c8304d97ca6b77e2ab9ebab4de4583a3bdd5b55a49de36149_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_88f14248a894316c8304d97ca6b77e2ab9ebab4de4583a3bdd5b55a49de36149->leave($__internal_88f14248a894316c8304d97ca6b77e2ab9ebab4de4583a3bdd5b55a49de36149_prof);

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
