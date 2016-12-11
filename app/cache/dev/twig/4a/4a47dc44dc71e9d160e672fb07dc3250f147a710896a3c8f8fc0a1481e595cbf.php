<?php

/* venta/index.html.twig */
class __TwigTemplate_6c64f5bb9e08761b30b2736a4eaa7667fb794afb1e9e104588dde137396f84c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venta/index.html.twig", 1);
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
        $__internal_ef98dd2368371d45bcff2ae9c6240270f14b7b33e857d669e09348274701e01a = $this->env->getExtension("native_profiler");
        $__internal_ef98dd2368371d45bcff2ae9c6240270f14b7b33e857d669e09348274701e01a->enter($__internal_ef98dd2368371d45bcff2ae9c6240270f14b7b33e857d669e09348274701e01a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ef98dd2368371d45bcff2ae9c6240270f14b7b33e857d669e09348274701e01a->leave($__internal_ef98dd2368371d45bcff2ae9c6240270f14b7b33e857d669e09348274701e01a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5398943bcb52759099ce7ec6c601a719de72cf48ff1bd0fad174b5fe968878c0 = $this->env->getExtension("native_profiler");
        $__internal_5398943bcb52759099ce7ec6c601a719de72cf48ff1bd0fad174b5fe968878c0->enter($__internal_5398943bcb52759099ce7ec6c601a719de72cf48ff1bd0fad174b5fe968878c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Ventas <span class=\"fa fa-shopping-basket\"></span></h1>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"col-md-3\">
                <a href=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("venta_new");
        echo "\" class=\"btn btn-lg btn-success\">Registrar Venta  <span class=\"glyphicon glyphicon-floppy-saved\"></span></a>
            </div>

            <div class=\"col-md-1\" style=\"padding: 0px;\">
                <div id=\"bloqueTotal\">
                    <div class=\"form-group\">
                        <label for=\"total\" style=\"display: inline-block;\">Total: </label>
                        <input id=\"total\" name=\"total\" class=\"form-control\" disabled=\"disabled\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "\" style=\"display: inline-block; width: 50%;\">
                    </div>
                </div>
            </div>

            <div class=\"col-md-1 text-center\">
                ";
        // line 26
        echo "            </div> 

            <div class=\"col-md-7 text-right\">
                <form action=\"\" method=\"GET\" class=\"form-inline\" onsubmit=\"buscar();
                        return false;\">
                    <div class=\"form-group\">
                        <select class=\"form-control\" id=\"criterio\">
                            <option value=\"\">Seleccione el criterio de búsqueda</option>
                            <option value=\"fecha\">Fecha de la venta</option>
                            <option value=\"mesa\">Mesa</option>
                            <option value=\"nuipCliente\">No. de identificacion del cliente</option>
                            <option value=\"nomCliente\">Nombre o apellido del cliente</option>
                            <option value=\"tipo\">Tipo de venta</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">Dato</div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Dato para la búsqueda\" id=\"dato\">
                        </div>
                        <button type=\"button\" id=\"btnBuscar\" class=\"btn btn-primary\" onclick=\"buscar();\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"margenTopTablas\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"table-responsive\">
                        <table  class=\"table table-bordered table-hover table-condensed text-center\">
                            <thead>
                                <tr class=\"active info\">
                                    <th>CLIENTE</th>
                                    <th>FECHA</th>
                                    <th>TIPO VENTA</th>
                                    <th>PUNTOS VENTA</th>
                                    <th>MESA</th>
                                    <th>PERSONAS MESA</th>
                                    <th>VALOR TOTAL</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody id=\"cuerpoTabla\">
                                ";
        // line 70
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["ventum"]) {
            // line 71
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_show", array("id" => $this->getAttribute($context["ventum"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["ventum"], "cliente", array()), "nombre", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 73
            if ($this->getAttribute($context["ventum"], "fecha", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["ventum"], "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 74
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "tipoVenta", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 75
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "puntosVenta", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 76
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "mesa", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "personasPorMesa", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($context["ventum"], "valorTotal", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_detalles", array("id" => $this->getAttribute($context["ventum"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\">Detalles <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_show", array("id" => $this->getAttribute($context["ventum"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ventum'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"paginacion col-md-12 text-center\" id=\"paginador\">
                ";
        // line 100
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>

    </div>
";
        
        $__internal_5398943bcb52759099ce7ec6c601a719de72cf48ff1bd0fad174b5fe968878c0->leave($__internal_5398943bcb52759099ce7ec6c601a719de72cf48ff1bd0fad174b5fe968878c0_prof);

    }

    public function getTemplateName()
    {
        return "venta/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  186 => 100,  175 => 91,  163 => 85,  157 => 82,  150 => 78,  146 => 77,  142 => 76,  138 => 75,  134 => 74,  128 => 73,  122 => 72,  119 => 71,  115 => 70,  69 => 26,  60 => 19,  50 => 12,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Ventas <span class="fa fa-shopping-basket"></span></h1>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <a href="{{ path('venta_new') }}" class="btn btn-lg btn-success">Registrar Venta  <span class="glyphicon glyphicon-floppy-saved"></span></a>*/
/*             </div>*/
/* */
/*             <div class="col-md-1" style="padding: 0px;">*/
/*                 <div id="bloqueTotal">*/
/*                     <div class="form-group">*/
/*                         <label for="total" style="display: inline-block;">Total: </label>*/
/*                         <input id="total" name="total" class="form-control" disabled="disabled" value="{{ pagination.getTotalItemCount }}" style="display: inline-block; width: 50%;">*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="col-md-1 text-center">*/
/*                 {#                Aqui va el boton de reporte#}*/
/*             </div> */
/* */
/*             <div class="col-md-7 text-right">*/
/*                 <form action="" method="GET" class="form-inline" onsubmit="buscar();*/
/*                         return false;">*/
/*                     <div class="form-group">*/
/*                         <select class="form-control" id="criterio">*/
/*                             <option value="">Seleccione el criterio de búsqueda</option>*/
/*                             <option value="fecha">Fecha de la venta</option>*/
/*                             <option value="mesa">Mesa</option>*/
/*                             <option value="nuipCliente">No. de identificacion del cliente</option>*/
/*                             <option value="nomCliente">Nombre o apellido del cliente</option>*/
/*                             <option value="tipo">Tipo de venta</option>*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon">Dato</div>*/
/*                             <input type="text" class="form-control" placeholder="Dato para la búsqueda" id="dato">*/
/*                         </div>*/
/*                         <button type="button" id="btnBuscar" class="btn btn-primary" onclick="buscar();"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="margenTopTablas">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="table-responsive">*/
/*                         <table  class="table table-bordered table-hover table-condensed text-center">*/
/*                             <thead>*/
/*                                 <tr class="active info">*/
/*                                     <th>CLIENTE</th>*/
/*                                     <th>FECHA</th>*/
/*                                     <th>TIPO VENTA</th>*/
/*                                     <th>PUNTOS VENTA</th>*/
/*                                     <th>MESA</th>*/
/*                                     <th>PERSONAS MESA</th>*/
/*                                     <th>VALOR TOTAL</th>*/
/*                                     <th>ACCIONES</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody id="cuerpoTabla">*/
/*                                 {% for ventum in pagination %}*/
/*                                     <tr>*/
/*                                         <td><a href="{{ path('venta_show', { 'id': ventum.id }) }}">{{ ventum.cliente.nombre }}</a></td>*/
/*                                         <td>{% if ventum.fecha %}{{ ventum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                         <td>{{ ventum.tipoVenta }}</td>*/
/*                                         <td>{{ ventum.puntosVenta }}</td>*/
/*                                         <td>{{ ventum.mesa }}</td>*/
/*                                         <td>{{ ventum.personasPorMesa }}</td>*/
/*                                         <td>{{ ventum.valorTotal }}</td>*/
/*                                         <td>*/
/*                                             <ul class="list-inline text-center">*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('venta_detalles', { 'id': ventum.id }) }}" class="btn btn-warning">Detalles <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('venta_show', { 'id': ventum.id }) }}" class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></a>*/
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
/*         <div class="row">*/
/*             <div class="paginacion col-md-12 text-center" id="paginador">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
