<?php

/* InventarioBundle:producto:show.html.twig */
class __TwigTemplate_7ec4927b9e8817d3c4b7749a45df057a635ea2047a750682c6e1c26ee5dc59da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:producto:show.html.twig", 1);
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
        $__internal_b40d983bc6b8edf6cf98cfd58084af859cf21ea293491b2a3ee1066bd8092f5b = $this->env->getExtension("native_profiler");
        $__internal_b40d983bc6b8edf6cf98cfd58084af859cf21ea293491b2a3ee1066bd8092f5b->enter($__internal_b40d983bc6b8edf6cf98cfd58084af859cf21ea293491b2a3ee1066bd8092f5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:producto:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b40d983bc6b8edf6cf98cfd58084af859cf21ea293491b2a3ee1066bd8092f5b->leave($__internal_b40d983bc6b8edf6cf98cfd58084af859cf21ea293491b2a3ee1066bd8092f5b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5fa35592236eec775b44a79604cee2fc3baa9262794889dacb4b79a438f8592f = $this->env->getExtension("native_profiler");
        $__internal_5fa35592236eec775b44a79604cee2fc3baa9262794889dacb4b79a438f8592f->enter($__internal_5fa35592236eec775b44a79604cee2fc3baa9262794889dacb4b79a438f8592f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Producto</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Nombre</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Precio</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precio", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("producto_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 33
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_5fa35592236eec775b44a79604cee2fc3baa9262794889dacb4b79a438f8592f->leave($__internal_5fa35592236eec775b44a79604cee2fc3baa9262794889dacb4b79a438f8592f_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:producto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 33,  84 => 31,  78 => 28,  72 => 25,  62 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Producto</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ producto.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Nombre</th>*/
/*                 <td>{{ producto.nombre }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Precio</th>*/
/*                 <td>{{ producto.precio }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('producto_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('producto_edit', { 'id': producto.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
