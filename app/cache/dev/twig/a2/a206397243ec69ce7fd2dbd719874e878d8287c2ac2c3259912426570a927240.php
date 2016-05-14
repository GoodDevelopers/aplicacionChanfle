<?php

/* InventarioBundle:ingresomateriaprima:index.html.twig */
class __TwigTemplate_1ced110c6bd9c68ec109cc8fea002479a3b4bb1f5910dc2621628d5e47dc29c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:ingresomateriaprima:index.html.twig", 1);
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
        $__internal_58facf2815f7c7b89dc651034e41d0d20748d29b8d338c61d5a86afa2f4ab95d = $this->env->getExtension("native_profiler");
        $__internal_58facf2815f7c7b89dc651034e41d0d20748d29b8d338c61d5a86afa2f4ab95d->enter($__internal_58facf2815f7c7b89dc651034e41d0d20748d29b8d338c61d5a86afa2f4ab95d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:ingresomateriaprima:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_58facf2815f7c7b89dc651034e41d0d20748d29b8d338c61d5a86afa2f4ab95d->leave($__internal_58facf2815f7c7b89dc651034e41d0d20748d29b8d338c61d5a86afa2f4ab95d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_66a50b4230a30d40831082fa4ef1108909ee1fd334e1df6c78e5247df68bd3aa = $this->env->getExtension("native_profiler");
        $__internal_66a50b4230a30d40831082fa4ef1108909ee1fd334e1df6c78e5247df68bd3aa->enter($__internal_66a50b4230a30d40831082fa4ef1108909ee1fd334e1df6c78e5247df68bd3aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_66a50b4230a30d40831082fa4ef1108909ee1fd334e1df6c78e5247df68bd3aa->leave($__internal_66a50b4230a30d40831082fa4ef1108909ee1fd334e1df6c78e5247df68bd3aa_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_87d6c24e5cf2383a5dce3cb517849c14dcb2d908ef48c80b70a6a0fe24abef33 = $this->env->getExtension("native_profiler");
        $__internal_87d6c24e5cf2383a5dce3cb517849c14dcb2d908ef48c80b70a6a0fe24abef33->enter($__internal_87d6c24e5cf2383a5dce3cb517849c14dcb2d908ef48c80b70a6a0fe24abef33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_87d6c24e5cf2383a5dce3cb517849c14dcb2d908ef48c80b70a6a0fe24abef33->leave($__internal_87d6c24e5cf2383a5dce3cb517849c14dcb2d908ef48c80b70a6a0fe24abef33_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:ingresomateriaprima:index.html.twig";
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