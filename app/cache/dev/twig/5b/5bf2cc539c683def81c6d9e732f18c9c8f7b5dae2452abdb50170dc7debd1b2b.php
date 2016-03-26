<?php

/* cliente/index.html.twig */
class __TwigTemplate_185c49974492278dec7b3b4be46d49f781461d134c7e52402cf14cade8ef8b0b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/index.html.twig", 1);
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
        $__internal_b8b7b507bf77ebf63c0c06ced43cb5b573d8cbc92e68e50a0a632f82ac082ed6 = $this->env->getExtension("native_profiler");
        $__internal_b8b7b507bf77ebf63c0c06ced43cb5b573d8cbc92e68e50a0a632f82ac082ed6->enter($__internal_b8b7b507bf77ebf63c0c06ced43cb5b573d8cbc92e68e50a0a632f82ac082ed6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8b7b507bf77ebf63c0c06ced43cb5b573d8cbc92e68e50a0a632f82ac082ed6->leave($__internal_b8b7b507bf77ebf63c0c06ced43cb5b573d8cbc92e68e50a0a632f82ac082ed6_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_b0ff65b8d7036c53feaef3f912fe9f400872bd6a1e5bf8f79cd23f5c4307a383 = $this->env->getExtension("native_profiler");
        $__internal_b0ff65b8d7036c53feaef3f912fe9f400872bd6a1e5bf8f79cd23f5c4307a383->enter($__internal_b0ff65b8d7036c53feaef3f912fe9f400872bd6a1e5bf8f79cd23f5c4307a383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Nuip</th>
                <th>Nombre</th>
                <th>Fechadenacimiento</th>
                <th>Puntosacumulados</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 20
            echo "            <tr>
                <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nuip", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 24
            if ($this->getAttribute($context["cliente"], "fechaDeNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "fechaDeNacimiento", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "puntosAcumulados", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 30
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_b0ff65b8d7036c53feaef3f912fe9f400872bd6a1e5bf8f79cd23f5c4307a383->leave($__internal_b0ff65b8d7036c53feaef3f912fe9f400872bd6a1e5bf8f79cd23f5c4307a383_prof);

    }

    public function getTemplateName()
    {
        return "cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 44,  113 => 39,  101 => 33,  95 => 30,  88 => 26,  84 => 25,  78 => 24,  74 => 23,  70 => 22,  64 => 21,  61 => 20,  57 => 19,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Cliente list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Nuip</th>*/
/*                 <th>Nombre</th>*/
/*                 <th>Fechadenacimiento</th>*/
/*                 <th>Puntosacumulados</th>*/
/*                 <th>Email</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for cliente in clientes %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('clientes_show', { 'id': cliente.id }) }}">{{ cliente.id }}</a></td>*/
/*                 <td>{{ cliente.nuip }}</td>*/
/*                 <td>{{ cliente.nombre }}</td>*/
/*                 <td>{% if cliente.fechaDeNacimiento %}{{ cliente.fechaDeNacimiento|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ cliente.puntosAcumulados }}</td>*/
/*                 <td>{{ cliente.email }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('clientes_show', { 'id': cliente.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('clientes_edit', { 'id': cliente.id }) }}">edit</a>*/
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
/*             <a href="{{ path('clientes_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
