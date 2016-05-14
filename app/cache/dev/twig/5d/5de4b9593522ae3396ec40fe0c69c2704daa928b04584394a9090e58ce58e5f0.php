<?php

/* @Costos/costo/index.html.twig */
class __TwigTemplate_f73f9b8c97202f79ebea07ce0d66b78f50c90f5daa6de5bc6f7854b628f3e609 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Costos/costo/index.html.twig", 1);
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
        $__internal_b7f922c815c685c0d42bacf4d5f6c9569526996869b49cff1670ee0a6a97d7a9 = $this->env->getExtension("native_profiler");
        $__internal_b7f922c815c685c0d42bacf4d5f6c9569526996869b49cff1670ee0a6a97d7a9->enter($__internal_b7f922c815c685c0d42bacf4d5f6c9569526996869b49cff1670ee0a6a97d7a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Costos/costo/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f922c815c685c0d42bacf4d5f6c9569526996869b49cff1670ee0a6a97d7a9->leave($__internal_b7f922c815c685c0d42bacf4d5f6c9569526996869b49cff1670ee0a6a97d7a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c7b942028ac8a26f8709f6f951232bb5490269ac57b27cd8318301a2a15d9451 = $this->env->getExtension("native_profiler");
        $__internal_c7b942028ac8a26f8709f6f951232bb5490269ac57b27cd8318301a2a15d9451->enter($__internal_c7b942028ac8a26f8709f6f951232bb5490269ac57b27cd8318301a2a15d9451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_c7b942028ac8a26f8709f6f951232bb5490269ac57b27cd8318301a2a15d9451->leave($__internal_c7b942028ac8a26f8709f6f951232bb5490269ac57b27cd8318301a2a15d9451_prof);

    }

    public function getTemplateName()
    {
        return "@Costos/costo/index.html.twig";
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
