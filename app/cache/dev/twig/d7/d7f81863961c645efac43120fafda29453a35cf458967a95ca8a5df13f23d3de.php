<?php

/* @Inventario/ingresomateriaprima/index.html.twig */
class __TwigTemplate_49bb91339c78e2051b91034fbda9d9704ff412a6fef7de895368aee949400fb6 extends Twig_Template
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
        $__internal_d4a0757b975cb1326a3a21f867705c3f9a8df99dcb832bfa1add1a593cec463b = $this->env->getExtension("native_profiler");
        $__internal_d4a0757b975cb1326a3a21f867705c3f9a8df99dcb832bfa1add1a593cec463b->enter($__internal_d4a0757b975cb1326a3a21f867705c3f9a8df99dcb832bfa1add1a593cec463b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/ingresomateriaprima/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4a0757b975cb1326a3a21f867705c3f9a8df99dcb832bfa1add1a593cec463b->leave($__internal_d4a0757b975cb1326a3a21f867705c3f9a8df99dcb832bfa1add1a593cec463b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_39161937881f29bec5b9a693d47ddff56920e9e873aed954d641d4aed6ba6c5f = $this->env->getExtension("native_profiler");
        $__internal_39161937881f29bec5b9a693d47ddff56920e9e873aed954d641d4aed6ba6c5f->enter($__internal_39161937881f29bec5b9a693d47ddff56920e9e873aed954d641d4aed6ba6c5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_39161937881f29bec5b9a693d47ddff56920e9e873aed954d641d4aed6ba6c5f->leave($__internal_39161937881f29bec5b9a693d47ddff56920e9e873aed954d641d4aed6ba6c5f_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_f08ac91e3dbe4530d6a09a4eb43d7034a1a5b3a4c67dfe5c24a6cd1adbaae81e = $this->env->getExtension("native_profiler");
        $__internal_f08ac91e3dbe4530d6a09a4eb43d7034a1a5b3a4c67dfe5c24a6cd1adbaae81e->enter($__internal_f08ac91e3dbe4530d6a09a4eb43d7034a1a5b3a4c67dfe5c24a6cd1adbaae81e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Ingresos Materia Prima <span class=\"icon-listaIngresosMateria\"></span></h1>
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
        
        $__internal_f08ac91e3dbe4530d6a09a4eb43d7034a1a5b3a4c67dfe5c24a6cd1adbaae81e->leave($__internal_f08ac91e3dbe4530d6a09a4eb43d7034a1a5b3a4c67dfe5c24a6cd1adbaae81e_prof);

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
/*                 <h1 class="h1 text-center marginTitulo">Ingresos Materia Prima <span class="icon-listaIngresosMateria"></span></h1>*/
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