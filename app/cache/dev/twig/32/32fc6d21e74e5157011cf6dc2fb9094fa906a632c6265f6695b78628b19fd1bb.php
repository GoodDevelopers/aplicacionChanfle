<?php

/* InventarioBundle:IngresoMateriaPrima:index.html.twig */
class __TwigTemplate_03ee07667025c5f008b1816f3e6970c2ed0a6fd4488cde960ae637392c9cac97 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:IngresoMateriaPrima:index.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_13927170a0607c42a98784504eac11d44621a89b027b2ae14673ffbf4feed678 = $this->env->getExtension("native_profiler");
        $__internal_13927170a0607c42a98784504eac11d44621a89b027b2ae14673ffbf4feed678->enter($__internal_13927170a0607c42a98784504eac11d44621a89b027b2ae14673ffbf4feed678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:IngresoMateriaPrima:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13927170a0607c42a98784504eac11d44621a89b027b2ae14673ffbf4feed678->leave($__internal_13927170a0607c42a98784504eac11d44621a89b027b2ae14673ffbf4feed678_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8503c36fb4acd7df9b083623393c1e08d42feea58c6c3f988b6adc982e4e6840 = $this->env->getExtension("native_profiler");
        $__internal_8503c36fb4acd7df9b083623393c1e08d42feea58c6c3f988b6adc982e4e6840->enter($__internal_8503c36fb4acd7df9b083623393c1e08d42feea58c6c3f988b6adc982e4e6840_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_8503c36fb4acd7df9b083623393c1e08d42feea58c6c3f988b6adc982e4e6840->leave($__internal_8503c36fb4acd7df9b083623393c1e08d42feea58c6c3f988b6adc982e4e6840_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e9805e5ea3a14d91e5c2e2d727d9808ad223191d494ee2cd2221e85c37aa97c = $this->env->getExtension("native_profiler");
        $__internal_1e9805e5ea3a14d91e5c2e2d727d9808ad223191d494ee2cd2221e85c37aa97c->enter($__internal_1e9805e5ea3a14d91e5c2e2d727d9808ad223191d494ee2cd2221e85c37aa97c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Ingresos Materia Prima <span class=\"icon-listaIngresosMateria\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover table-condensed text-center\">
                        <thead>
                            <tr class=\"active info\">
                                <th>ID</th>
                                <th>MATERIA PRIMA</th>
                                <th>FECHA</th>
                                <th>CANTIDAD</th>
                                <th>VALOR UNT.</th>
                                <th>VALOR TOTAL</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody id=\"cuerpoTabla\">
                            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingresoMateriaPrimas"]) ? $context["ingresoMateriaPrimas"] : $this->getContext($context, "ingresoMateriaPrimas")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingresoMateriaPrima"]) {
            // line 33
            echo "                                <tr>
                                    <td><a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingresomateriaprima_show", array("id" => $this->getAttribute($context["ingresoMateriaPrima"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingresoMateriaPrima"], "id", array()), "html", null, true);
            echo "</a></td>
                                    <td>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ingresoMateriaPrima"], "materiaPrima", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 36
            if ($this->getAttribute($context["ingresoMateriaPrima"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ingresoMateriaPrima"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingresoMateriaPrima"], "cantidad", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ingresoMateriaPrima"], "materiaPrima", array()), "unidadDeMedida", array()), "html", null, true);
            echo "s</td>
                                    <td>";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingresoMateriaPrima"], "valor", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 39
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ingresoMateriaPrima"], "valor", array()) * $this->getAttribute($context["ingresoMateriaPrima"], "cantidad", array())), "html", null, true);
            echo "</td>
                                    <td>
                                        <ul class=\"list-inline text-center\">
                                            <li>
                                                <a href=\"";
            // line 43
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingresomateriaprima_edit", array("id" => $this->getAttribute($context["ingresoMateriaPrima"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingresomateriaprima_show", array("id" => $this->getAttribute($context["ingresoMateriaPrima"], "id", array()))), "html", null, true);
            echo "\"class=\"btn btn-danger\" role=\"button\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingresoMateriaPrima'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <ul>
            <li>
                <a href=\"";
        // line 60
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_new");
        echo "\">Create a new entry</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_1e9805e5ea3a14d91e5c2e2d727d9808ad223191d494ee2cd2221e85c37aa97c->leave($__internal_1e9805e5ea3a14d91e5c2e2d727d9808ad223191d494ee2cd2221e85c37aa97c_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:IngresoMateriaPrima:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 60,  144 => 52,  132 => 46,  126 => 43,  119 => 39,  115 => 38,  109 => 37,  103 => 36,  99 => 35,  93 => 34,  90 => 33,  86 => 32,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/otrosIconos.css')}}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Ingresos Materia Prima <span class="icon-listaIngresosMateria"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <div class="table-responsive">*/
/*                     <table class="table table-bordered table-hover table-condensed text-center">*/
/*                         <thead>*/
/*                             <tr class="active info">*/
/*                                 <th>ID</th>*/
/*                                 <th>MATERIA PRIMA</th>*/
/*                                 <th>FECHA</th>*/
/*                                 <th>CANTIDAD</th>*/
/*                                 <th>VALOR UNT.</th>*/
/*                                 <th>VALOR TOTAL</th>*/
/*                                 <th>ACCIONES</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody id="cuerpoTabla">*/
/*                             {% for ingresoMateriaPrima in ingresoMateriaPrimas %}*/
/*                                 <tr>*/
/*                                     <td><a href="{{ path('ingresomateriaprima_show', { 'id': ingresoMateriaPrima.id }) }}">{{ ingresoMateriaPrima.id }}</a></td>*/
/*                                     <td>{{ ingresoMateriaPrima.materiaPrima.nombre }}</td>*/
/*                                     <td>{% if ingresoMateriaPrima.fecha %}{{ ingresoMateriaPrima.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                     <td>{{ ingresoMateriaPrima.cantidad }} {{ ingresoMateriaPrima.materiaPrima.unidadDeMedida }}s</td>*/
/*                                     <td>{{ ingresoMateriaPrima.valor }}</td>*/
/*                                     <td>{{ ingresoMateriaPrima.valor * ingresoMateriaPrima.cantidad}}</td>*/
/*                                     <td>*/
/*                                         <ul class="list-inline text-center">*/
/*                                             <li>*/
/*                                                 <a href="{{ path('ingresomateriaprima_edit', { 'id': ingresoMateriaPrima.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="{{ path('ingresomateriaprima_show', { 'id': ingresoMateriaPrima.id }) }}"class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></a>*/
/*                                             </li>*/
/*                                         </ul>*/
/*                                     </td>*/
/*                                 </tr>*/
/*                             {% endfor %}*/
/*                         </tbody>*/
/*                     </table>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('ingresomateriaprima_new') }}">Create a new entry</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
