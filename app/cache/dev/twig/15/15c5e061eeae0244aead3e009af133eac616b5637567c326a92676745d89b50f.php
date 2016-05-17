<?php

/* @Inventario/materiaprima/show.html.twig */
class __TwigTemplate_5155924b2c7cfe16398468b08770db368c8aff3ab0a8c115ab2e5dde9cc21b4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/materiaprima/show.html.twig", 1);
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
        $__internal_f383667282d027d4e32e3043aca52e94cbb78b4628d05a4207911abc180f7642 = $this->env->getExtension("native_profiler");
        $__internal_f383667282d027d4e32e3043aca52e94cbb78b4628d05a4207911abc180f7642->enter($__internal_f383667282d027d4e32e3043aca52e94cbb78b4628d05a4207911abc180f7642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/materiaprima/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f383667282d027d4e32e3043aca52e94cbb78b4628d05a4207911abc180f7642->leave($__internal_f383667282d027d4e32e3043aca52e94cbb78b4628d05a4207911abc180f7642_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d39cf94f66e4d83e4c15300eeb958dc7fd6ade623cc92aa75d32809c51175f76 = $this->env->getExtension("native_profiler");
        $__internal_d39cf94f66e4d83e4c15300eeb958dc7fd6ade623cc92aa75d32809c51175f76->enter($__internal_d39cf94f66e4d83e4c15300eeb958dc7fd6ade623cc92aa75d32809c51175f76_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MateriaPrima</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiaPrima"]) ? $context["materiaPrima"] : $this->getContext($context, "materiaPrima")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiaPrima"]) ? $context["materiaPrima"] : $this->getContext($context, "materiaPrima")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Unidaddemedida</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiaPrima"]) ? $context["materiaPrima"] : $this->getContext($context, "materiaPrima")), "unidadDeMedida", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiaPrima"]) ? $context["materiaPrima"] : $this->getContext($context, "materiaPrima")), "cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiaPrima"]) ? $context["materiaPrima"] : $this->getContext($context, "materiaPrima")), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Stockminimo</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["materiaPrima"]) ? $context["materiaPrima"] : $this->getContext($context, "materiaPrima")), "stockMinimo", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 37
        echo $this->env->getExtension('routing')->getPath("materiaprima_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiaprima_edit", array("id" => $this->getAttribute((isset($context["materiaPrima"]) ? $context["materiaPrima"] : $this->getContext($context, "materiaPrima")), "id", array()))), "html", null, true);
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
        
        $__internal_d39cf94f66e4d83e4c15300eeb958dc7fd6ade623cc92aa75d32809c51175f76->leave($__internal_d39cf94f66e4d83e4c15300eeb958dc7fd6ade623cc92aa75d32809c51175f76_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/materiaprima/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 45,  105 => 43,  99 => 40,  93 => 37,  83 => 30,  76 => 26,  69 => 22,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>MateriaPrima</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ materiaPrima.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ materiaPrima.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Unidaddemedida</th>*/
/*                 <td>{{ materiaPrima.unidadDeMedida }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidad</th>*/
/*                 <td>{{ materiaPrima.cantidad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Precio</th>*/
/*                 <td>{{ materiaPrima.precio }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Stockminimo</th>*/
/*                 <td>{{ materiaPrima.stockMinimo }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('materiaprima_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('materiaprima_edit', { 'id': materiaPrima.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
