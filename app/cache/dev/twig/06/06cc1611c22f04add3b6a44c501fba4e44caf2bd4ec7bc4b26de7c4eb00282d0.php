<?php

/* @Costos/costo/show.html.twig */
class __TwigTemplate_be4c735c4f68e235838b70dc17726f5c2f155ba7b27051134a65a2b1c80db648 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Costos/costo/show.html.twig", 1);
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
        $__internal_2634614952f841b5e103b53cbcd2b532cf085ef0ed64c0686a5e65f92c1f0fd2 = $this->env->getExtension("native_profiler");
        $__internal_2634614952f841b5e103b53cbcd2b532cf085ef0ed64c0686a5e65f92c1f0fd2->enter($__internal_2634614952f841b5e103b53cbcd2b532cf085ef0ed64c0686a5e65f92c1f0fd2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Costos/costo/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2634614952f841b5e103b53cbcd2b532cf085ef0ed64c0686a5e65f92c1f0fd2->leave($__internal_2634614952f841b5e103b53cbcd2b532cf085ef0ed64c0686a5e65f92c1f0fd2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8c9429e69742c964aed387322bd6e21eaed1b974c5232d60f024712e5e4f4378 = $this->env->getExtension("native_profiler");
        $__internal_8c9429e69742c964aed387322bd6e21eaed1b974c5232d60f024712e5e4f4378->enter($__internal_8c9429e69742c964aed387322bd6e21eaed1b974c5232d60f024712e5e4f4378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Costo</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["costo"]) ? $context["costo"] : $this->getContext($context, "costo")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["costo"]) ? $context["costo"] : $this->getContext($context, "costo")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["costo"]) ? $context["costo"] : $this->getContext($context, "costo")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Tipocosto</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["costo"]) ? $context["costo"] : $this->getContext($context, "costo")), "tipoCosto", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valor</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["costo"]) ? $context["costo"] : $this->getContext($context, "costo")), "valor", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("costo_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("costo_edit", array("id" => $this->getAttribute((isset($context["costo"]) ? $context["costo"] : $this->getContext($context, "costo")), "id", array()))), "html", null, true);
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
        
        $__internal_8c9429e69742c964aed387322bd6e21eaed1b974c5232d60f024712e5e4f4378->leave($__internal_8c9429e69742c964aed387322bd6e21eaed1b974c5232d60f024712e5e4f4378_prof);

    }

    public function getTemplateName()
    {
        return "@Costos/costo/show.html.twig";
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
/*     <h1>Costo</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ costo.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if costo.fecha %}{{ costo.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipocosto</th>*/
/*                 <td>{{ costo.tipoCosto }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valor</th>*/
/*                 <td>{{ costo.valor }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('costo_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('costo_edit', { 'id': costo.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
