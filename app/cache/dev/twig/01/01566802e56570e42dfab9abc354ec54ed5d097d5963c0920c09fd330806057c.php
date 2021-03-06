<?php

/* :venta:index.html.twig */
class __TwigTemplate_b22e536c18af6b3772413008813f95fd8189ee57494c839dbd22bc8790c87e8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":venta:index.html.twig", 1);
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
        $__internal_525538f85f963499c4565c7b81a0cd8f369b9cf0aa0605224ef44428c2494a25 = $this->env->getExtension("native_profiler");
        $__internal_525538f85f963499c4565c7b81a0cd8f369b9cf0aa0605224ef44428c2494a25->enter($__internal_525538f85f963499c4565c7b81a0cd8f369b9cf0aa0605224ef44428c2494a25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venta:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_525538f85f963499c4565c7b81a0cd8f369b9cf0aa0605224ef44428c2494a25->leave($__internal_525538f85f963499c4565c7b81a0cd8f369b9cf0aa0605224ef44428c2494a25_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ed5934496dbe69770cc01461bdbca68a7b5f631928194bd6f3e81f769b5881c = $this->env->getExtension("native_profiler");
        $__internal_4ed5934496dbe69770cc01461bdbca68a7b5f631928194bd6f3e81f769b5881c->enter($__internal_4ed5934496dbe69770cc01461bdbca68a7b5f631928194bd6f3e81f769b5881c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Venta list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Valortotal</th>
                <th>Tipoventa</th>
                <th>Puntosventa</th>
                <th>Mesa</th>
                <th>Personaspormesa</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 20
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ventas"]) ? $context["ventas"] : $this->getContext($context, "ventas")));
        foreach ($context['_seq'] as $context["_key"] => $context["ventum"]) {
            // line 21
            echo "            <tr>
                <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_show", array("id" => $this->getAttribute($context["ventum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 23
            if ($this->getAttribute($context["ventum"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ventum"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "valorTotal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "tipoVenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "puntosVenta", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "mesa", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "personasPorMesa", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_show", array("id" => $this->getAttribute($context["ventum"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 35
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_edit", array("id" => $this->getAttribute($context["ventum"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_detalles", array("id" => $this->getAttribute($context["ventum"], "id", array()))), "html", null, true);
            echo "\">detalles</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("venta_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_4ed5934496dbe69770cc01461bdbca68a7b5f631928194bd6f3e81f769b5881c->leave($__internal_4ed5934496dbe69770cc01461bdbca68a7b5f631928194bd6f3e81f769b5881c_prof);

    }

    public function getTemplateName()
    {
        return ":venta:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 49,  124 => 44,  112 => 38,  106 => 35,  100 => 32,  93 => 28,  89 => 27,  85 => 26,  81 => 25,  77 => 24,  71 => 23,  65 => 22,  62 => 21,  58 => 20,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Venta list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Valortotal</th>*/
/*                 <th>Tipoventa</th>*/
/*                 <th>Puntosventa</th>*/
/*                 <th>Mesa</th>*/
/*                 <th>Personaspormesa</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for ventum in ventas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('venta_show', { 'id': ventum.id }) }}">{{ ventum.id }}</a></td>*/
/*                 <td>{% if ventum.fecha %}{{ ventum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ ventum.valorTotal }}</td>*/
/*                 <td>{{ ventum.tipoVenta }}</td>*/
/*                 <td>{{ ventum.puntosVenta }}</td>*/
/*                 <td>{{ ventum.mesa }}</td>*/
/*                 <td>{{ ventum.personasPorMesa }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('venta_show', { 'id': ventum.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('venta_edit', { 'id': ventum.id }) }}">edit</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('venta_detalles', { 'id': ventum.id }) }}">detalles</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('venta_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
