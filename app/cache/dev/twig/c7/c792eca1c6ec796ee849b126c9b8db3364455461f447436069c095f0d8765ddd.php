<?php

/* InventarioBundle:IngresoMateriaPrima:show.html.twig */
class __TwigTemplate_fae76a6b6a6ed06a124e273b4cd92ba932c00d06479d4ec7cc8d8477f67d9a55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:IngresoMateriaPrima:show.html.twig", 1);
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
        $__internal_187341b85e56152f4b3cea0d237338bfab7ddef1fd84101659edc656ba48471a = $this->env->getExtension("native_profiler");
        $__internal_187341b85e56152f4b3cea0d237338bfab7ddef1fd84101659edc656ba48471a->enter($__internal_187341b85e56152f4b3cea0d237338bfab7ddef1fd84101659edc656ba48471a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:IngresoMateriaPrima:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_187341b85e56152f4b3cea0d237338bfab7ddef1fd84101659edc656ba48471a->leave($__internal_187341b85e56152f4b3cea0d237338bfab7ddef1fd84101659edc656ba48471a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f0c4e43664d9b016e87d2e37d7e2976763b91828967e12f735a6ae4b201eb360 = $this->env->getExtension("native_profiler");
        $__internal_f0c4e43664d9b016e87d2e37d7e2976763b91828967e12f735a6ae4b201eb360->enter($__internal_f0c4e43664d9b016e87d2e37d7e2976763b91828967e12f735a6ae4b201eb360_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>IngresoMateriaPrima</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valor</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "valor", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingresomateriaprima_edit", array("id" => $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 35
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 37
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_f0c4e43664d9b016e87d2e37d7e2976763b91828967e12f735a6ae4b201eb360->leave($__internal_f0c4e43664d9b016e87d2e37d7e2976763b91828967e12f735a6ae4b201eb360_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:IngresoMateriaPrima:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 37,  93 => 35,  87 => 32,  81 => 29,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>IngresoMateriaPrima</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ ingresoMateriaPrima.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if ingresoMateriaPrima.fecha %}{{ ingresoMateriaPrima.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidad</th>*/
/*                 <td>{{ ingresoMateriaPrima.cantidad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valor</th>*/
/*                 <td>{{ ingresoMateriaPrima.valor }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ingresomateriaprima_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('ingresomateriaprima_edit', { 'id': ingresoMateriaPrima.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
