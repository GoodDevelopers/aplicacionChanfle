<?php

/* @Inventario/producto/show.html.twig */
class __TwigTemplate_7b24b87807eb80e2b91ca5ead26ece45f7c39e0c0ffb2992ee942575e204b644 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/producto/show.html.twig", 1);
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
        $__internal_d82acca750e722341a339e505df7fa74392a40fa87583a8c363f1105d6cffd49 = $this->env->getExtension("native_profiler");
        $__internal_d82acca750e722341a339e505df7fa74392a40fa87583a8c363f1105d6cffd49->enter($__internal_d82acca750e722341a339e505df7fa74392a40fa87583a8c363f1105d6cffd49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/producto/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d82acca750e722341a339e505df7fa74392a40fa87583a8c363f1105d6cffd49->leave($__internal_d82acca750e722341a339e505df7fa74392a40fa87583a8c363f1105d6cffd49_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_41506d9ed06ade309eed6ed86818433aa01facf95a922fa43a3e7bba9c4a18e0 = $this->env->getExtension("native_profiler");
        $__internal_41506d9ed06ade309eed6ed86818433aa01facf95a922fa43a3e7bba9c4a18e0->enter($__internal_41506d9ed06ade309eed6ed86818433aa01facf95a922fa43a3e7bba9c4a18e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_41506d9ed06ade309eed6ed86818433aa01facf95a922fa43a3e7bba9c4a18e0->leave($__internal_41506d9ed06ade309eed6ed86818433aa01facf95a922fa43a3e7bba9c4a18e0_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/producto/show.html.twig";
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