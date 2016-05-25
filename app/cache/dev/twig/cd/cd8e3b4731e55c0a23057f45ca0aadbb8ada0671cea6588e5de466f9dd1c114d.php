<?php

/* InventarioBundle:materiaprima:index.html.twig */
class __TwigTemplate_afe30ac867b3519a1d0d3465ccc37e72566e2887234b90ebd8dcba556d71f5d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:materiaprima:index.html.twig", 1);
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
        $__internal_78f697896ef3399a53e729a2ac436caaeb46bf36da57f9311bc3de200e4bd23b = $this->env->getExtension("native_profiler");
        $__internal_78f697896ef3399a53e729a2ac436caaeb46bf36da57f9311bc3de200e4bd23b->enter($__internal_78f697896ef3399a53e729a2ac436caaeb46bf36da57f9311bc3de200e4bd23b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:materiaprima:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78f697896ef3399a53e729a2ac436caaeb46bf36da57f9311bc3de200e4bd23b->leave($__internal_78f697896ef3399a53e729a2ac436caaeb46bf36da57f9311bc3de200e4bd23b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aaf060dc05e83358c0c67bb2dce32c9b8992ff0949a9f53efe6582b865b5bdd = $this->env->getExtension("native_profiler");
        $__internal_6aaf060dc05e83358c0c67bb2dce32c9b8992ff0949a9f53efe6582b865b5bdd->enter($__internal_6aaf060dc05e83358c0c67bb2dce32c9b8992ff0949a9f53efe6582b865b5bdd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6aaf060dc05e83358c0c67bb2dce32c9b8992ff0949a9f53efe6582b865b5bdd->leave($__internal_6aaf060dc05e83358c0c67bb2dce32c9b8992ff0949a9f53efe6582b865b5bdd_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:materiaprima:index.html.twig";
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
