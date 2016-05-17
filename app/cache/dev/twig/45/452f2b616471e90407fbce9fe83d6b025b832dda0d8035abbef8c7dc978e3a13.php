<?php

/* :venta:show.html.twig */
class __TwigTemplate_b4eb717c97b986cb3cec0e7f6876c45b6e77f58ca0dbbde8125a30a1327a0c94 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":venta:show.html.twig", 1);
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
        $__internal_6661480cf426d22869057dcac08ef1b6c01979f1f0d8b2d82076374fe46be8ee = $this->env->getExtension("native_profiler");
        $__internal_6661480cf426d22869057dcac08ef1b6c01979f1f0d8b2d82076374fe46be8ee->enter($__internal_6661480cf426d22869057dcac08ef1b6c01979f1f0d8b2d82076374fe46be8ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venta:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6661480cf426d22869057dcac08ef1b6c01979f1f0d8b2d82076374fe46be8ee->leave($__internal_6661480cf426d22869057dcac08ef1b6c01979f1f0d8b2d82076374fe46be8ee_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e37eed7c69b275a03c748508335c5ad0bf948fd8d2fbcb20f783b6c23b89a078 = $this->env->getExtension("native_profiler");
        $__internal_e37eed7c69b275a03c748508335c5ad0bf948fd8d2fbcb20f783b6c23b89a078->enter($__internal_e37eed7c69b275a03c748508335c5ad0bf948fd8d2fbcb20f783b6c23b89a078_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Venta</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Valortotal</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "valorTotal", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Tipoventa</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "tipoVenta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Puntosventa</th>
                <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "puntosVenta", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Mesa</th>
                <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "mesa", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Personaspormesa</th>
                <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "personasPorMesa", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 41
        echo $this->env->getExtension('routing')->getPath("venta_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            <a href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_edit", array("id" => $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "id", array()))), "html", null, true);
        echo "\">Edit</a>
        </li>
        <li>
            ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_e37eed7c69b275a03c748508335c5ad0bf948fd8d2fbcb20f783b6c23b89a078->leave($__internal_e37eed7c69b275a03c748508335c5ad0bf948fd8d2fbcb20f783b6c23b89a078_prof);

    }

    public function getTemplateName()
    {
        return ":venta:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  119 => 49,  114 => 47,  108 => 44,  102 => 41,  92 => 34,  85 => 30,  78 => 26,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Venta</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ ventum.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if ventum.fecha %}{{ ventum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valortotal</th>*/
/*                 <td>{{ ventum.valorTotal }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Tipoventa</th>*/
/*                 <td>{{ ventum.tipoVenta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Puntosventa</th>*/
/*                 <td>{{ ventum.puntosVenta }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Mesa</th>*/
/*                 <td>{{ ventum.mesa }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Personaspormesa</th>*/
/*                 <td>{{ ventum.personasPorMesa }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('venta_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             <a href="{{ path('venta_edit', { 'id': ventum.id }) }}">Edit</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
