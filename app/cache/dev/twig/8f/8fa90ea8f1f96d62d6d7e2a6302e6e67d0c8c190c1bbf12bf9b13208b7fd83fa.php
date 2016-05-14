<?php

/* InventarioBundle:producto:index.html.twig */
class __TwigTemplate_357de399af516492124d1200071d326e0eb388f2b4408c5adc2202e510dc1c0f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:producto:index.html.twig", 1);
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
        $__internal_98bf04ff6bee0656d12261a90e61b153e2e0803f096d062d01d9eb4079d18866 = $this->env->getExtension("native_profiler");
        $__internal_98bf04ff6bee0656d12261a90e61b153e2e0803f096d062d01d9eb4079d18866->enter($__internal_98bf04ff6bee0656d12261a90e61b153e2e0803f096d062d01d9eb4079d18866_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:producto:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98bf04ff6bee0656d12261a90e61b153e2e0803f096d062d01d9eb4079d18866->leave($__internal_98bf04ff6bee0656d12261a90e61b153e2e0803f096d062d01d9eb4079d18866_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_851489c270c55ff6b94a436c6b0c16c34cd484f690e8b2206c092b1f2652fc16 = $this->env->getExtension("native_profiler");
        $__internal_851489c270c55ff6b94a436c6b0c16c34cd484f690e8b2206c092b1f2652fc16->enter($__internal_851489c270c55ff6b94a436c6b0c16c34cd484f690e8b2206c092b1f2652fc16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Producto list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Precio</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 17
            echo "            <tr>
                <td><a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 38
        echo $this->env->getExtension('routing')->getPath("producto_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_851489c270c55ff6b94a436c6b0c16c34cd484f690e8b2206c092b1f2652fc16->leave($__internal_851489c270c55ff6b94a436c6b0c16c34cd484f690e8b2206c092b1f2652fc16_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:producto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 38,  96 => 33,  84 => 27,  78 => 24,  71 => 20,  67 => 19,  61 => 18,  58 => 17,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Producto list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Precio</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for producto in productos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('producto_show', { 'id': producto.id }) }}">{{ producto.id }}</a></td>*/
/*                 <td>{{ producto.nombre }}</td>*/
/*                 <td>{{ producto.precio }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('producto_show', { 'id': producto.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('producto_edit', { 'id': producto.id }) }}">edit</a>*/
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
/*             <a href="{{ path('producto_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
