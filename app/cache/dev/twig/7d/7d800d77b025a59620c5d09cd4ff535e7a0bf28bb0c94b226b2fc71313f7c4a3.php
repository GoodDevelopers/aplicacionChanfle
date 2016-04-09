<?php

/* CostosBundle:Costo:index.html.twig */
class __TwigTemplate_4da1ac9f4b96da65aeae7584f19710b8ff3c7b6a978d53e1b9e4c4a5ca933107 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CostosBundle:Costo:index.html.twig", 1);
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
        $__internal_4cbf8506968983c692797e43a6da5d98309352c6bbffeb1b653e4f865478db79 = $this->env->getExtension("native_profiler");
        $__internal_4cbf8506968983c692797e43a6da5d98309352c6bbffeb1b653e4f865478db79->enter($__internal_4cbf8506968983c692797e43a6da5d98309352c6bbffeb1b653e4f865478db79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CostosBundle:Costo:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4cbf8506968983c692797e43a6da5d98309352c6bbffeb1b653e4f865478db79->leave($__internal_4cbf8506968983c692797e43a6da5d98309352c6bbffeb1b653e4f865478db79_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cae12f3aebc5545a6ae5ced1e7ccf70421684b8e063f7668adfb560ccd4db28 = $this->env->getExtension("native_profiler");
        $__internal_9cae12f3aebc5545a6ae5ced1e7ccf70421684b8e063f7668adfb560ccd4db28->enter($__internal_9cae12f3aebc5545a6ae5ced1e7ccf70421684b8e063f7668adfb560ccd4db28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Costo list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Tipocosto</th>
                <th>Valor</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["costos"]) ? $context["costos"] : $this->getContext($context, "costos")));
        foreach ($context['_seq'] as $context["_key"] => $context["costo"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("costo_show", array("id" => $this->getAttribute($context["costo"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["costo"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["costo"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["costo"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["costo"], "tipoCosto", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["costo"], "valor", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("costo_show", array("id" => $this->getAttribute($context["costo"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                        <li>
                            <a href=\"";
            // line 29
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("costo_edit", array("id" => $this->getAttribute($context["costo"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['costo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 40
        echo $this->env->getExtension('routing')->getPath("costo_new");
        echo "\">Create a new entry</a>
        </li>
    </ul>
";
        
        $__internal_9cae12f3aebc5545a6ae5ced1e7ccf70421684b8e063f7668adfb560ccd4db28->leave($__internal_9cae12f3aebc5545a6ae5ced1e7ccf70421684b8e063f7668adfb560ccd4db28_prof);

    }

    public function getTemplateName()
    {
        return "CostosBundle:Costo:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 40,  103 => 35,  91 => 29,  85 => 26,  78 => 22,  74 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Costo list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Tipocosto</th>*/
/*                 <th>Valor</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for costo in costos %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('costo_show', { 'id': costo.id }) }}">{{ costo.id }}</a></td>*/
/*                 <td>{% if costo.fecha %}{{ costo.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ costo.tipoCosto }}</td>*/
/*                 <td>{{ costo.valor }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('costo_show', { 'id': costo.id }) }}">show</a>*/
/*                         </li>*/
/*                         <li>*/
/*                             <a href="{{ path('costo_edit', { 'id': costo.id }) }}">edit</a>*/
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
/*             <a href="{{ path('costo_new') }}">Create a new entry</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */