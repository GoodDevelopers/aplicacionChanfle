<?php

/* InventarioBundle:tipoproducto:show.html.twig */
class __TwigTemplate_daef43245192bdb9513030b926576e5601c982de34ddf28662b70df7d724c0fc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:tipoproducto:show.html.twig", 1);
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
        $__internal_ac817c4afbe6152fbbff98c15d85163ac68d1e072f55f094bc6f93d0f40d9f39 = $this->env->getExtension("native_profiler");
        $__internal_ac817c4afbe6152fbbff98c15d85163ac68d1e072f55f094bc6f93d0f40d9f39->enter($__internal_ac817c4afbe6152fbbff98c15d85163ac68d1e072f55f094bc6f93d0f40d9f39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:tipoproducto:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ac817c4afbe6152fbbff98c15d85163ac68d1e072f55f094bc6f93d0f40d9f39->leave($__internal_ac817c4afbe6152fbbff98c15d85163ac68d1e072f55f094bc6f93d0f40d9f39_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ad192f8670c36ef6f7b7d5e9c96e8d59790b02c8dfcd1c4e14c7b26f91f945b7 = $this->env->getExtension("native_profiler");
        $__internal_ad192f8670c36ef6f7b7d5e9c96e8d59790b02c8dfcd1c4e14c7b26f91f945b7->enter($__internal_ad192f8670c36ef6f7b7d5e9c96e8d59790b02c8dfcd1c4e14c7b26f91f945b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_ad192f8670c36ef6f7b7d5e9c96e8d59790b02c8dfcd1c4e14c7b26f91f945b7->leave($__internal_ad192f8670c36ef6f7b7d5e9c96e8d59790b02c8dfcd1c4e14c7b26f91f945b7_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:tipoproducto:show.html.twig";
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