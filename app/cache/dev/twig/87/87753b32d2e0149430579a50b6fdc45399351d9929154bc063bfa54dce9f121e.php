<?php

/* detalleventa/show.html.twig */
class __TwigTemplate_5f5a703c2586b4b73212ef1ed2a4f8027ed4641bc3bbe47b34b085022f4d092f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "detalleventa/show.html.twig", 1);
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
        $__internal_02b95235f5d51f6992db95a2b2a52ae9fd2080612328355c612c7583e74c2c00 = $this->env->getExtension("native_profiler");
        $__internal_02b95235f5d51f6992db95a2b2a52ae9fd2080612328355c612c7583e74c2c00->enter($__internal_02b95235f5d51f6992db95a2b2a52ae9fd2080612328355c612c7583e74c2c00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "detalleventa/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02b95235f5d51f6992db95a2b2a52ae9fd2080612328355c612c7583e74c2c00->leave($__internal_02b95235f5d51f6992db95a2b2a52ae9fd2080612328355c612c7583e74c2c00_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_153d369531057d8a0458fe6c7403c3cdc0af2753948794eacb58a95954f062bb = $this->env->getExtension("native_profiler");
        $__internal_153d369531057d8a0458fe6c7403c3cdc0af2753948794eacb58a95954f062bb->enter($__internal_153d369531057d8a0458fe6c7403c3cdc0af2753948794eacb58a95954f062bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DetalleVenta</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valordetalle</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "valorDetalle", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("detalleventa_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_153d369531057d8a0458fe6c7403c3cdc0af2753948794eacb58a95954f062bb->leave($__internal_153d369531057d8a0458fe6c7403c3cdc0af2753948794eacb58a95954f062bb_prof);

    }

    public function getTemplateName()
    {
        return "detalleventa/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>DetalleVenta</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ detalleVentum.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if detalleVentum.fecha %}{{ detalleVentum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidad</th>*/
/*                 <td>{{ detalleVentum.cantidad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valordetalle</th>*/
/*                 <td>{{ detalleVentum.valorDetalle }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('detalleventa_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
