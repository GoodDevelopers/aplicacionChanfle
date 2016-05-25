<?php

/* :detalleventa:show.html.twig */
class __TwigTemplate_540182823df2864f9d0a47f0813ba7f76284b292b2bbc690065c9dd3de674738 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":detalleventa:show.html.twig", 1);
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
        $__internal_469e82ae08fb74d450fc3063d237943246781541b18c81caf4a97bda80e1f885 = $this->env->getExtension("native_profiler");
        $__internal_469e82ae08fb74d450fc3063d237943246781541b18c81caf4a97bda80e1f885->enter($__internal_469e82ae08fb74d450fc3063d237943246781541b18c81caf4a97bda80e1f885_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":detalleventa:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_469e82ae08fb74d450fc3063d237943246781541b18c81caf4a97bda80e1f885->leave($__internal_469e82ae08fb74d450fc3063d237943246781541b18c81caf4a97bda80e1f885_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_68ea80554aa35512c41bf62c278f9941da6f8b795950f8348c5059b07274fe92 = $this->env->getExtension("native_profiler");
        $__internal_68ea80554aa35512c41bf62c278f9941da6f8b795950f8348c5059b07274fe92->enter($__internal_68ea80554aa35512c41bf62c278f9941da6f8b795950f8348c5059b07274fe92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DetalleVenta</h1>

    <table>
        <tbody>
            <tr>
                <th>Id</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "id", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Fecha</th>
                <td>";
        // line 14
        if ($this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
            </tr>
            <tr>
                <th>Cantidad</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "cantidad", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Valordetalle</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["detalleVentum"]) ? $context["detalleVentum"] : $this->getContext($context, "detalleVentum")), "valorDetalle", array()), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

    <ul>
        <li>
            <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("detalleventa_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_68ea80554aa35512c41bf62c278f9941da6f8b795950f8348c5059b07274fe92->leave($__internal_68ea80554aa35512c41bf62c278f9941da6f8b795950f8348c5059b07274fe92_prof);

    }

    public function getTemplateName()
    {
        return ":detalleventa:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 29,  71 => 22,  64 => 18,  55 => 14,  48 => 10,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>DetalleVenta</h1>*/
/* */
/*     <table>*/
/*         <tbody>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <td>{{ detalleVentum.id }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Fecha</th>*/
/*                 <td>{% if detalleVentum.fecha %}{{ detalleVentum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Cantidad</th>*/
/*                 <td>{{ detalleVentum.cantidad }}</td>*/
/*             </tr>*/
/*             <tr>*/
/*                 <th>Valordetalle</th>*/
/*                 <td>{{ detalleVentum.valorDetalle }}</td>*/
/*             </tr>*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('detalleventa_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
