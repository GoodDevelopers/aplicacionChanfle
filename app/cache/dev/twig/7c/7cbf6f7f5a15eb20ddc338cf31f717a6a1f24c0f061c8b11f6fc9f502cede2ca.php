<?php

/* @JornadasLaborales/caja/show.html.twig */
class __TwigTemplate_c4a493a20e85e1671598c2fd24065ccebb758e35a614b8f8924e7d89a80c1356 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JornadasLaborales/caja/show.html.twig", 1);
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
        $__internal_d5fab973765efeb26c374ca1c02865c4af1106c6086a19e953b97249157c88b5 = $this->env->getExtension("native_profiler");
        $__internal_d5fab973765efeb26c374ca1c02865c4af1106c6086a19e953b97249157c88b5->enter($__internal_d5fab973765efeb26c374ca1c02865c4af1106c6086a19e953b97249157c88b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JornadasLaborales/caja/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5fab973765efeb26c374ca1c02865c4af1106c6086a19e953b97249157c88b5->leave($__internal_d5fab973765efeb26c374ca1c02865c4af1106c6086a19e953b97249157c88b5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5f1024ff877b2974b6bf33546658d2eb7336565e247db13866d2469be06424fe = $this->env->getExtension("native_profiler");
        $__internal_5f1024ff877b2974b6bf33546658d2eb7336565e247db13866d2469be06424fe->enter($__internal_5f1024ff877b2974b6bf33546658d2eb7336565e247db13866d2469be06424fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Caja</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caja"]) ? $context["caja"] : $this->getContext($context, "caja")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["caja"]) ? $context["caja"] : $this->getContext($context, "caja")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["caja"]) ? $context["caja"] : $this->getContext($context, "caja")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Cajainicial</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caja"]) ? $context["caja"] : $this->getContext($context, "caja")), "cajaInicial", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cajainicialjustificacion</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caja"]) ? $context["caja"] : $this->getContext($context, "caja")), "cajaInicialJustificacion", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cajafinal</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caja"]) ? $context["caja"] : $this->getContext($context, "caja")), "cajaFinal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cajafinaljustificacion</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["caja"]) ? $context["caja"] : $this->getContext($context, "caja")), "cajaFinalJustificacion", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("caja_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("caja_edit", array("id" => $this->getAttribute((isset($context["caja"]) ? $context["caja"] : $this->getContext($context, "caja")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 45
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5f1024ff877b2974b6bf33546658d2eb7336565e247db13866d2469be06424fe->leave($__internal_5f1024ff877b2974b6bf33546658d2eb7336565e247db13866d2469be06424fe_prof);

    }

    public function getTemplateName()
    {
        return "@JornadasLaborales/caja/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  112 => 45,  107 => 43,  101 => 40,  95 => 37,  85 => 30,  78 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Caja</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ caja.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if caja.fecha %}{{ caja.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cajainicial</th>*/
/*                 <td>{{ caja.cajaInicial }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cajainicialjustificacion</th>*/
/*                 <td>{{ caja.cajaInicialJustificacion }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cajafinal</th>*/
/*                 <td>{{ caja.cajaFinal }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cajafinaljustificacion</th>*/
/*                 <td>{{ caja.cajaFinalJustificacion }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('caja_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('caja_edit', { 'id': caja.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
