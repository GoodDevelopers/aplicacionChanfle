<?php

/* detalleventa/index.html.twig */
class __TwigTemplate_71079c4e983d4f0e550527a333b83760f63ed6d6caed4299a0f15227311b57b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "detalleventa/index.html.twig", 1);
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
        $__internal_fab968406f835af24399d6dbd36fc59711347c898175ebaa20cafc45519e1860 = $this->env->getExtension("native_profiler");
        $__internal_fab968406f835af24399d6dbd36fc59711347c898175ebaa20cafc45519e1860->enter($__internal_fab968406f835af24399d6dbd36fc59711347c898175ebaa20cafc45519e1860_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "detalleventa/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fab968406f835af24399d6dbd36fc59711347c898175ebaa20cafc45519e1860->leave($__internal_fab968406f835af24399d6dbd36fc59711347c898175ebaa20cafc45519e1860_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4be9b40c60446a2caaa6f4b7169513f86ac0bac5f0284b429c1784ee0324f047 = $this->env->getExtension("native_profiler");
        $__internal_4be9b40c60446a2caaa6f4b7169513f86ac0bac5f0284b429c1784ee0324f047->enter($__internal_4be9b40c60446a2caaa6f4b7169513f86ac0bac5f0284b429c1784ee0324f047_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DetalleVenta list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Valordetalle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalleVentas"]) ? $context["detalleVentas"] : $this->getContext($context, "detalleVentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["detalleVentum"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_show", array("id" => $this->getAttribute($context["detalleVentum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["detalleVentum"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["detalleVentum"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "valorDetalle", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_show", array("id" => $this->getAttribute($context["detalleVentum"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalleVentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    
";
        
        $__internal_4be9b40c60446a2caaa6f4b7169513f86ac0bac5f0284b429c1784ee0324f047->leave($__internal_4be9b40c60446a2caaa6f4b7169513f86ac0bac5f0284b429c1784ee0324f047_prof);

    }

    public function getTemplateName()
    {
        return "detalleventa/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  85 => 26,  78 => 22,  74 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>DetalleVenta list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Cantidad</th>*/
/*                 <th>Valordetalle</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for detalleVentum in detalleVentas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('detalleventa_show', { 'id': detalleVentum.id }) }}">{{ detalleVentum.id }}</a></td>*/
/*                 <td>{% if detalleVentum.fecha %}{{ detalleVentum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ detalleVentum.cantidad }}</td>*/
/*                 <td>{{ detalleVentum.valorDetalle }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('detalleventa_show', { 'id': detalleVentum.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
