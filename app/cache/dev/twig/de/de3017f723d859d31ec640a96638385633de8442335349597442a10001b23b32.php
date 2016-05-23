<?php

/* @Inventario/materiaprima/index.html.twig */
class __TwigTemplate_235ae24404a27f0aebb1ed992ca96eee5cdbfcebe089f57cc136dcd28692daf7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/materiaprima/index.html.twig", 1);
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
        $__internal_ef08b03c8b001c242fbe08dc92ecbc3f5b936239edf7cb6112c3d9959ffb6594 = $this->env->getExtension("native_profiler");
        $__internal_ef08b03c8b001c242fbe08dc92ecbc3f5b936239edf7cb6112c3d9959ffb6594->enter($__internal_ef08b03c8b001c242fbe08dc92ecbc3f5b936239edf7cb6112c3d9959ffb6594_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/materiaprima/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef08b03c8b001c242fbe08dc92ecbc3f5b936239edf7cb6112c3d9959ffb6594->leave($__internal_ef08b03c8b001c242fbe08dc92ecbc3f5b936239edf7cb6112c3d9959ffb6594_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d128030ea3c81bb9a77fea5c70f027a20591c3405caa7a47fa2afc70b60231e7 = $this->env->getExtension("native_profiler");
        $__internal_d128030ea3c81bb9a77fea5c70f027a20591c3405caa7a47fa2afc70b60231e7->enter($__internal_d128030ea3c81bb9a77fea5c70f027a20591c3405caa7a47fa2afc70b60231e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MateriaPrima list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Unidaddemedida</th>
                <th>Cantidad</th>
                <th>Precio</th>
                <th>Stockminimo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materiaPrimas"]) ? $context["materiaPrimas"] : $this->getContext($context, "materiaPrimas")));
        foreach ($context['_seq'] as $context["_key"] => $context["materiaPrima"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiaprima_show", array("id" => $this->getAttribute($context["materiaPrima"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiaPrima"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiaPrima"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiaPrima"], "unidadDeMedida", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiaPrima"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiaPrima"], "precio", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["materiaPrima"], "stockMinimo", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiaprima_show", array("id" => $this->getAttribute($context["materiaPrima"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("materiaprima_edit", array("id" => $this->getAttribute($context["materiaPrima"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materiaPrima'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("materiaprima_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_d128030ea3c81bb9a77fea5c70f027a20591c3405caa7a47fa2afc70b60231e7->leave($__internal_d128030ea3c81bb9a77fea5c70f027a20591c3405caa7a47fa2afc70b60231e7_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/materiaprima/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 44,  111 => 39,  99 => 33,  93 => 30,  86 => 26,  82 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>MateriaPrima list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Unidaddemedida</th>*/
/*                 <th>Cantidad</th>*/
/*                 <th>Precio</th>*/
/*                 <th>Stockminimo</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for materiaPrima in materiaPrimas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('materiaprima_show', { 'id': materiaPrima.id }) }}">{{ materiaPrima.id }}</a></td>*/
/*                 <td>{{ materiaPrima.nombre }}</td>*/
/*                 <td>{{ materiaPrima.unidadDeMedida }}</td>*/
/*                 <td>{{ materiaPrima.cantidad }}</td>*/
/*                 <td>{{ materiaPrima.precio }}</td>*/
/*                 <td>{{ materiaPrima.stockMinimo }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('materiaprima_show', { 'id': materiaPrima.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('materiaprima_edit', { 'id': materiaPrima.id }) }}">edit</a>*/
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
/*             <a href="{{ path('materiaprima_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
