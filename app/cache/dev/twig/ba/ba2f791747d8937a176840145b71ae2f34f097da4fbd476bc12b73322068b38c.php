<?php

/* @JornadasLaborales/caja/index.html.twig */
class __TwigTemplate_9e6fe5131470a153f8637bf932290c10fa99165e8ab8558a25222e2176fd43c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JornadasLaborales/caja/index.html.twig", 1);
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
        $__internal_7e21dc19bf194230c6fd1957297b5bc3e6ebc703c98eabb10edd0e4ed81cb50a = $this->env->getExtension("native_profiler");
        $__internal_7e21dc19bf194230c6fd1957297b5bc3e6ebc703c98eabb10edd0e4ed81cb50a->enter($__internal_7e21dc19bf194230c6fd1957297b5bc3e6ebc703c98eabb10edd0e4ed81cb50a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JornadasLaborales/caja/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e21dc19bf194230c6fd1957297b5bc3e6ebc703c98eabb10edd0e4ed81cb50a->leave($__internal_7e21dc19bf194230c6fd1957297b5bc3e6ebc703c98eabb10edd0e4ed81cb50a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f7b0f63a581a52c19e51f845cc17d66e74da275436050eb770b13ddaf9f5bc0 = $this->env->getExtension("native_profiler");
        $__internal_7f7b0f63a581a52c19e51f845cc17d66e74da275436050eb770b13ddaf9f5bc0->enter($__internal_7f7b0f63a581a52c19e51f845cc17d66e74da275436050eb770b13ddaf9f5bc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f7b0f63a581a52c19e51f845cc17d66e74da275436050eb770b13ddaf9f5bc0->leave($__internal_7f7b0f63a581a52c19e51f845cc17d66e74da275436050eb770b13ddaf9f5bc0_prof);

    }

    public function getTemplateName()
    {
        return "@JornadasLaborales/caja/index.html.twig";
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
