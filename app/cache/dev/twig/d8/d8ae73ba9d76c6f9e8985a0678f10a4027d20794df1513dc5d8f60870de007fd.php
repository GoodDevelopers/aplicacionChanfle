<?php

/* :detalleventa:index.html.twig */
class __TwigTemplate_794471f50bd2979be61f2aeeb127897edfd566ebbe56c550892db05cb5e5334c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":detalleventa:index.html.twig", 1);
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
        $__internal_8030a18c883583569d73e51cc2634729b952e674f3921784e5f716664293eb0d = $this->env->getExtension("native_profiler");
        $__internal_8030a18c883583569d73e51cc2634729b952e674f3921784e5f716664293eb0d->enter($__internal_8030a18c883583569d73e51cc2634729b952e674f3921784e5f716664293eb0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":detalleventa:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8030a18c883583569d73e51cc2634729b952e674f3921784e5f716664293eb0d->leave($__internal_8030a18c883583569d73e51cc2634729b952e674f3921784e5f716664293eb0d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8b4ca3cdb2f14ade016496618652771fd84ada81733e28a664fddfef613271ff = $this->env->getExtension("native_profiler");
        $__internal_8b4ca3cdb2f14ade016496618652771fd84ada81733e28a664fddfef613271ff->enter($__internal_8b4ca3cdb2f14ade016496618652771fd84ada81733e28a664fddfef613271ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>DetalleVenta list</h1>

    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Fecha</th>
                <th>Cantidad</th>
                <th>Valordetalle</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["detalleVentas"]) ? $context["detalleVentas"] : $this->getContext($context, "detalleVentas")));
        foreach ($context['_seq'] as $context["_key"] => $context["detalleVentum"]) {
            // line 18
            echo "            <tr>
                <td><a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_show", array("id" => $this->getAttribute($context["detalleVentum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "id", array()), "html", null, true);
            echo "</a></td>
                <td>";
            // line 20
            if ($this->getAttribute($context["detalleVentum"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["detalleVentum"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                <td>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "cantidad", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalleVentum"], "valorDetalle", array()), "html", null, true);
            echo "</td>
                <td>
                    <ul>
                        <li>
                            <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("detalleventa_show", array("id" => $this->getAttribute($context["detalleVentum"], "id", array()))), "html", null, true);
            echo "\">show</a>
                        </li>
                    </ul>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalleVentum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>

    
";
        
        $__internal_8b4ca3cdb2f14ade016496618652771fd84ada81733e28a664fddfef613271ff->leave($__internal_8b4ca3cdb2f14ade016496618652771fd84ada81733e28a664fddfef613271ff_prof);

    }

    public function getTemplateName()
    {
        return ":detalleventa:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 32,  85 => 26,  78 => 22,  74 => 21,  68 => 20,  62 => 19,  59 => 18,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>DetalleVenta list</h1>*/
/* */
/*     <table>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Id</th>*/
/*                 <th>Fecha</th>*/
/*                 <th>Cantidad</th>*/
/*                 <th>Valordetalle</th>*/
/*                 <th>Actions</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for detalleVentum in detalleVentas %}*/
/*             <tr>*/
/*                 <td><a href="{{ path('detalleventa_show', { 'id': detalleVentum.id }) }}">{{ detalleVentum.id }}</a></td>*/
/*                 <td>{% if detalleVentum.fecha %}{{ detalleVentum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                 <td>{{ detalleVentum.cantidad }}</td>*/
/*                 <td>{{ detalleVentum.valorDetalle }}</td>*/
/*                 <td>*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('detalleventa_show', { 'id': detalleVentum.id }) }}">show</a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/* */
/*     */
/* {% endblock %}*/
/* */
