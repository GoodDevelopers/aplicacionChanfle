<?php

/* InventarioBundle:proveedor:index.html.twig */
class __TwigTemplate_f175a2926e58f5a43aa7854f7bc3baa0f8c590ed77d0f25001a37f721f48b130 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:proveedor:index.html.twig", 1);
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
        $__internal_32417cc453d058ac01b6118981020e8440553efe12a7fbe3cd949e1dd289c5cd = $this->env->getExtension("native_profiler");
        $__internal_32417cc453d058ac01b6118981020e8440553efe12a7fbe3cd949e1dd289c5cd->enter($__internal_32417cc453d058ac01b6118981020e8440553efe12a7fbe3cd949e1dd289c5cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:proveedor:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32417cc453d058ac01b6118981020e8440553efe12a7fbe3cd949e1dd289c5cd->leave($__internal_32417cc453d058ac01b6118981020e8440553efe12a7fbe3cd949e1dd289c5cd_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e770808426fbeaf23addefec4a1dfd721e7f51e94314ae9509d7467abb98270 = $this->env->getExtension("native_profiler");
        $__internal_2e770808426fbeaf23addefec4a1dfd721e7f51e94314ae9509d7467abb98270->enter($__internal_2e770808426fbeaf23addefec4a1dfd721e7f51e94314ae9509d7467abb98270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proveedor list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nit</th>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Correo</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["proveedors"]) ? $context["proveedors"] : $this->getContext($context, "proveedors")));
        foreach ($context['_seq'] as $context["_key"] => $context["proveedor"]) {
            // line 19
            echo "            <tr>
                <td><a href=\"";
            // line 20
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_show", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "nit", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "telefono", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["proveedor"], "correo", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_show", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("yes_edit", array("id" => $this->getAttribute($context["proveedor"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['proveedor'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 37
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 42
        echo $this->env->getExtension('routing')->getPath("yes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_2e770808426fbeaf23addefec4a1dfd721e7f51e94314ae9509d7467abb98270->leave($__internal_2e770808426fbeaf23addefec4a1dfd721e7f51e94314ae9509d7467abb98270_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:proveedor:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 42,  106 => 37,  94 => 31,  88 => 28,  81 => 24,  77 => 23,  73 => 22,  69 => 21,  63 => 20,  60 => 19,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Proveedor list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nit</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Telefono</th>*/
/*                 <th>Correo</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for proveedor in proveedors %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('yes_show', { 'id': proveedor.id }) }}">{{ proveedor.id }}</a></td>*/
/*                 <td>{{ proveedor.nit }}</td>*/
/*                 <td>{{ proveedor.nombre }}</td>*/
/*                 <td>{{ proveedor.telefono }}</td>*/
/*                 <td>{{ proveedor.correo }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('yes_show', { 'id': proveedor.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('yes_edit', { 'id': proveedor.id }) }}">edit</a>*/
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
/*             <a href="{{ path('yes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
