<?php

/* @Inventario/tipoproducto/show.html.twig */
class __TwigTemplate_74ea0540896d26edad3f7ccf039abfe902b3467fb8e98fec30c10391c382d21d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/tipoproducto/show.html.twig", 1);
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
        $__internal_2638d6c225849ad0684c25d37e19a25f6f9a6027dffb285d2a41149a8d3a2467 = $this->env->getExtension("native_profiler");
        $__internal_2638d6c225849ad0684c25d37e19a25f6f9a6027dffb285d2a41149a8d3a2467->enter($__internal_2638d6c225849ad0684c25d37e19a25f6f9a6027dffb285d2a41149a8d3a2467_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/tipoproducto/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2638d6c225849ad0684c25d37e19a25f6f9a6027dffb285d2a41149a8d3a2467->leave($__internal_2638d6c225849ad0684c25d37e19a25f6f9a6027dffb285d2a41149a8d3a2467_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_aaffe90e4664f68a2c09a25fa21c5f666e284164f7a7195a837b2d9922e6b579 = $this->env->getExtension("native_profiler");
        $__internal_aaffe90e4664f68a2c09a25fa21c5f666e284164f7a7195a837b2d9922e6b579->enter($__internal_aaffe90e4664f68a2c09a25fa21c5f666e284164f7a7195a837b2d9922e6b579_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TipoProducto</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoProducto"]) ? $context["tipoProducto"] : $this->getContext($context, "tipoProducto")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["tipoProducto"]) ? $context["tipoProducto"] : $this->getContext($context, "tipoProducto")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 21
        echo $this->env->getExtension('routing')->getPath("tipoproducto_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 24
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoproducto_edit", array("id" => $this->getAttribute((isset($context["tipoProducto"]) ? $context["tipoProducto"] : $this->getContext($context, "tipoProducto")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 27
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 29
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_aaffe90e4664f68a2c09a25fa21c5f666e284164f7a7195a837b2d9922e6b579->leave($__internal_aaffe90e4664f68a2c09a25fa21c5f666e284164f7a7195a837b2d9922e6b579_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/tipoproducto/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  82 => 29,  77 => 27,  71 => 24,  65 => 21,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TipoProducto</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ tipoProducto.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ tipoProducto.nombre }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipoproducto_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('tipoproducto_edit', { 'id': tipoProducto.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */