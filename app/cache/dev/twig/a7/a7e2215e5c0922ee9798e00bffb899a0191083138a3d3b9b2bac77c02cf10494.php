<?php

/* @Inventario/tipoproducto/index.html.twig */
class __TwigTemplate_f2c6c2134719cc9a871eaef25b23aa65a3e7737ab2417250963fa302853d8348 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/tipoproducto/index.html.twig", 1);
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
        $__internal_32494e0b3565d8240606f26f32cd6ee1de060903eb4cca133d6aeb554e764526 = $this->env->getExtension("native_profiler");
        $__internal_32494e0b3565d8240606f26f32cd6ee1de060903eb4cca133d6aeb554e764526->enter($__internal_32494e0b3565d8240606f26f32cd6ee1de060903eb4cca133d6aeb554e764526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/tipoproducto/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32494e0b3565d8240606f26f32cd6ee1de060903eb4cca133d6aeb554e764526->leave($__internal_32494e0b3565d8240606f26f32cd6ee1de060903eb4cca133d6aeb554e764526_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_24f78cac350aae1898e889cd033ad22148c1d501fa516259d1874c61a01ff130 = $this->env->getExtension("native_profiler");
        $__internal_24f78cac350aae1898e889cd033ad22148c1d501fa516259d1874c61a01ff130->enter($__internal_24f78cac350aae1898e889cd033ad22148c1d501fa516259d1874c61a01ff130_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TipoProducto list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipoProductos"]) ? $context["tipoProductos"] : $this->getContext($context, "tipoProductos")));
        foreach ($context['_seq'] as $context["_key"] => $context["tipoProducto"]) {
            // line 16
            echo "            <tr>
                <td><a href=\"";
            // line 17
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoproducto_show", array("id" => $this->getAttribute($context["tipoProducto"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoProducto"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($context["tipoProducto"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoproducto_show", array("id" => $this->getAttribute($context["tipoProducto"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("tipoproducto_edit", array("id" => $this->getAttribute($context["tipoProducto"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tipoProducto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 31
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 36
        echo $this->env->getExtension('routing')->getPath("tipoproducto_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_24f78cac350aae1898e889cd033ad22148c1d501fa516259d1874c61a01ff130->leave($__internal_24f78cac350aae1898e889cd033ad22148c1d501fa516259d1874c61a01ff130_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/tipoproducto/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 36,  91 => 31,  79 => 25,  73 => 22,  66 => 18,  60 => 17,  57 => 16,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>TipoProducto list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for tipoProducto in tipoProductos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('tipoproducto_show', { 'id': tipoProducto.id }) }}">{{ tipoProducto.id }}</a></td>*/
/*                 <td>{{ tipoProducto.nombre }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('tipoproducto_show', { 'id': tipoProducto.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('tipoproducto_edit', { 'id': tipoProducto.id }) }}">edit</a>*/
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
/*             <a href="{{ path('tipoproducto_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
