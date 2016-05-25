<?php

/* @Inventario/ingresomateriaprima/index.html.twig */
class __TwigTemplate_52c33b07e4a18b54c165e3c24c168a33308c907bc0bc2034faed666ea548583e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/ingresomateriaprima/index.html.twig", 1);
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
        $__internal_1ad8cc3cbcce1506b052bbcc31eb08549a070e566e069dfe9173ba6ebf49da55 = $this->env->getExtension("native_profiler");
        $__internal_1ad8cc3cbcce1506b052bbcc31eb08549a070e566e069dfe9173ba6ebf49da55->enter($__internal_1ad8cc3cbcce1506b052bbcc31eb08549a070e566e069dfe9173ba6ebf49da55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/ingresomateriaprima/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ad8cc3cbcce1506b052bbcc31eb08549a070e566e069dfe9173ba6ebf49da55->leave($__internal_1ad8cc3cbcce1506b052bbcc31eb08549a070e566e069dfe9173ba6ebf49da55_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0b47f9568e9a1feded78fae294e5d0e0611387256f5d879cc49275684de9dba5 = $this->env->getExtension("native_profiler");
        $__internal_0b47f9568e9a1feded78fae294e5d0e0611387256f5d879cc49275684de9dba5->enter($__internal_0b47f9568e9a1feded78fae294e5d0e0611387256f5d879cc49275684de9dba5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_0b47f9568e9a1feded78fae294e5d0e0611387256f5d879cc49275684de9dba5->leave($__internal_0b47f9568e9a1feded78fae294e5d0e0611387256f5d879cc49275684de9dba5_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_124a30d629e64110a015904eaa860017df27218f75fe87fcbf2407fa15ead931 = $this->env->getExtension("native_profiler");
        $__internal_124a30d629e64110a015904eaa860017df27218f75fe87fcbf2407fa15ead931->enter($__internal_124a30d629e64110a015904eaa860017df27218f75fe87fcbf2407fa15ead931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Ingresos Materia Prima <span class=\"icon-ingresoMateria\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul style=\"list-style-type: none; padding: 0px;\">
                    <li>
                        <a href=\"";
        // line 20
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_new");
        echo "\" class=\"btn btn-lg btn-success\">Registrar ingreso <span class=\"glyphicon glyphicon-floppy-saved\"></span></a>
                    </li>
                </ul>
            </div>
                    
            <div class=\"col-md-9\">
                <form action=\"\" method=\"GET\" class=\"form-inline\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">Materia prima</div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Nombre materia prima\" id=\"nomMateria\">
                        </div>
                        <button type=\"button\" id=\"btnBuscar\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"margenTopTablas\">
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
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["ingresoMateriaPrimas"]) ? $context["ingresoMateriaPrimas"] : $this->getContext($context, "ingresoMateriaPrimas")));
        foreach ($context['_seq'] as $context["_key"] => $context["ingresoMateriaPrima"]) {
            // line 56
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 57
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingresomateriaprima_show", array("id" => $this->getAttribute($context["ingresoMateriaPrima"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingresoMateriaPrima"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ingresoMateriaPrima"], "materiaPrima", array()), "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 59
            if ($this->getAttribute($context["ingresoMateriaPrima"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ingresoMateriaPrima"], "fecha", array()), "d-m-Y H:i:s"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingresoMateriaPrima"], "cantidad", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ingresoMateriaPrima"], "materiaPrima", array()), "unidadDeMedida", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["ingresoMateriaPrima"], "valor", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 62
            echo twig_escape_filter($this->env, ($this->getAttribute($context["ingresoMateriaPrima"], "valor", array()) * $this->getAttribute($context["ingresoMateriaPrima"], "cantidad", array())), "html", null, true);
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingresomateriaprima_edit", array("id" => $this->getAttribute($context["ingresoMateriaPrima"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 69
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingresomateriaprima_show", array("id" => $this->getAttribute($context["ingresoMateriaPrima"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ingresoMateriaPrima'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_124a30d629e64110a015904eaa860017df27218f75fe87fcbf2407fa15ead931->leave($__internal_124a30d629e64110a015904eaa860017df27218f75fe87fcbf2407fa15ead931_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/ingresomateriaprima/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  170 => 75,  158 => 69,  152 => 66,  145 => 62,  141 => 61,  135 => 60,  129 => 59,  125 => 58,  119 => 57,  116 => 56,  112 => 55,  74 => 20,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*                 <h1 class="h1 text-center marginTitulo">Ingresos Materia Prima <span class="icon-ingresoMateria"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <ul style="list-style-type: none; padding: 0px;">*/
/*                     <li>*/
/*                         <a href="{{ path('ingresomateriaprima_new') }}" class="btn btn-lg btn-success">Registrar ingreso <span class="glyphicon glyphicon-floppy-saved"></span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*                     */
/*             <div class="col-md-9">*/
/*                 <form action="" method="GET" class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon">Materia prima</div>*/
/*                             <input type="text" class="form-control" placeholder="Nombre materia prima" id="nomMateria">*/
/*                         </div>*/
/*                         <button type="button" id="btnBuscar" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="margenTopTablas">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover table-condensed text-center">*/
/*                             <thead>*/
/*                                 <tr class="active info">*/
/*                                     <th>ID</th>*/
/*                                     <th>MATERIA PRIMA</th>*/
/*                                     <th>FECHA</th>*/
/*                                     <th>CANTIDAD</th>*/
/*                                     <th>VALOR UNT.</th>*/
/*                                     <th>VALOR TOTAL</th>*/
/*                                     <th>ACCIONES</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody id="cuerpoTabla">*/
/*                                 {% for ingresoMateriaPrima in ingresoMateriaPrimas %}*/
/*                                     <tr>*/
/*                                         <td><a href="{{ path('ingresomateriaprima_show', { 'id': ingresoMateriaPrima.id }) }}">{{ ingresoMateriaPrima.id }}</a></td>*/
/*                                         <td>{{ ingresoMateriaPrima.materiaPrima.nombre }}</td>*/
/*                                         <td>{% if ingresoMateriaPrima.fecha %}{{ ingresoMateriaPrima.fecha|date('d-m-Y H:i:s') }}{% endif %}</td>*/
/*                                         <td>{{ ingresoMateriaPrima.cantidad }} {{ ingresoMateriaPrima.materiaPrima.unidadDeMedida }}</td>*/
/*                                         <td>{{ ingresoMateriaPrima.valor }}</td>*/
/*                                         <td>{{ ingresoMateriaPrima.valor * ingresoMateriaPrima.cantidad}}</td>*/
/*                                         <td>*/
/*                                             <ul class="list-inline text-center">*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('ingresomateriaprima_edit', { 'id': ingresoMateriaPrima.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('ingresomateriaprima_show', { 'id': ingresoMateriaPrima.id }) }}" class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
