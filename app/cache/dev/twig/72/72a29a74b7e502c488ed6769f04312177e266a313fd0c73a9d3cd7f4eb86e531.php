<?php

/* JornadasLaboralesBundle:Caja:index.html.twig */
class __TwigTemplate_05c9687f01835516177d8f3f6acb16c9e928d1e0a5bfee6b6a56a552944af43f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JornadasLaboralesBundle:Caja:index.html.twig", 1);
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
        $__internal_69c2437dd17f9489ddfa86a96d3aefd0ee6bf04a09294526fc92726b36204a36 = $this->env->getExtension("native_profiler");
        $__internal_69c2437dd17f9489ddfa86a96d3aefd0ee6bf04a09294526fc92726b36204a36->enter($__internal_69c2437dd17f9489ddfa86a96d3aefd0ee6bf04a09294526fc92726b36204a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JornadasLaboralesBundle:Caja:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_69c2437dd17f9489ddfa86a96d3aefd0ee6bf04a09294526fc92726b36204a36->leave($__internal_69c2437dd17f9489ddfa86a96d3aefd0ee6bf04a09294526fc92726b36204a36_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_492b98daa4c6faafed31c8ccdeb5093818efa6d5d88b84a2e533b56dcc70029b = $this->env->getExtension("native_profiler");
        $__internal_492b98daa4c6faafed31c8ccdeb5093818efa6d5d88b84a2e533b56dcc70029b->enter($__internal_492b98daa4c6faafed31c8ccdeb5093818efa6d5d88b84a2e533b56dcc70029b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Caja list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Cajainicial</th>
                <th>Cajainicialjustificacion</th>
                <th>Cajafinal</th>
                <th>Cajafinaljustificacion</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["cajas"]) ? $context["cajas"] : $this->getContext($context, "cajas")));
        foreach ($context['_seq'] as $context["_key"] => $context["caja"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caja_show", array("id" => $this->getAttribute($context["caja"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["caja"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            if ($this->getAttribute($context["caja"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["caja"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["caja"], "cajaInicial", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["caja"], "cajaInicialJustificacion", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["caja"], "cajaFinal", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["caja"], "cajaFinalJustificacion", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caja_show", array("id" => $this->getAttribute($context["caja"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caja_edit", array("id" => $this->getAttribute($context["caja"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['caja'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("caja_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_492b98daa4c6faafed31c8ccdeb5093818efa6d5d88b84a2e533b56dcc70029b->leave($__internal_492b98daa4c6faafed31c8ccdeb5093818efa6d5d88b84a2e533b56dcc70029b_prof);

    }

    public function getTemplateName()
    {
        return "JornadasLaboralesBundle:Caja:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  88 => 26,  84 => 25,  80 => 24,  76 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Caja list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Cajainicial</th>*/
/*                 <th>Cajainicialjustificacion</th>*/
/*                 <th>Cajafinal</th>*/
/*                 <th>Cajafinaljustificacion</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for caja in cajas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('caja_show', { 'id': caja.id }) }}">{{ caja.id }}</a></td>*/
/*                 <td>{% if caja.fecha %}{{ caja.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ caja.cajaInicial }}</td>*/
/*                 <td>{{ caja.cajaInicialJustificacion }}</td>*/
/*                 <td>{{ caja.cajaFinal }}</td>*/
/*                 <td>{{ caja.cajaFinalJustificacion }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('caja_show', { 'id': caja.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('caja_edit', { 'id': caja.id }) }}">edit</a>*/
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
/*             <a href="{{ path('caja_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
