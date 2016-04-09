<?php

/* UsuariosBundle:Cliente:index.html.twig */
class __TwigTemplate_469d2268c2cee6684c2f0c8e17988e6b3ebafb33a6a9755d69b4bc4890f4970e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Cliente:index.html.twig", 1);
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
        $__internal_5a43ef92419eab166e7dc14c919986184c4a855cad69a06749749494e76bec80 = $this->env->getExtension("native_profiler");
        $__internal_5a43ef92419eab166e7dc14c919986184c4a855cad69a06749749494e76bec80->enter($__internal_5a43ef92419eab166e7dc14c919986184c4a855cad69a06749749494e76bec80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:Cliente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a43ef92419eab166e7dc14c919986184c4a855cad69a06749749494e76bec80->leave($__internal_5a43ef92419eab166e7dc14c919986184c4a855cad69a06749749494e76bec80_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c15a4f7811b6f0a796ad5e6f2133a49e3177164af2a52a25186b742adc257304 = $this->env->getExtension("native_profiler");
        $__internal_c15a4f7811b6f0a796ad5e6f2133a49e3177164af2a52a25186b742adc257304->enter($__internal_c15a4f7811b6f0a796ad5e6f2133a49e3177164af2a52a25186b742adc257304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\" style=\"font-weight: bold;\">Clientes <span class=\"glyphicon glyphicon-user\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul style=\"list-style-type: none; padding: 0px;\">
                    <li>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\" class=\"btn btn-lg btn-success\">Registrar Cliente <span class=\"glyphicon glyphicon-floppy-saved\"></span></a>
                    </li>
                </ul>
            </div>

            <div class=\"col-md-9\">
                <form action=\"\" method=\"GET\" class=\"form-inline\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\" style=\"font-weight: bold;\">Cliente</div>
                            <input type=\"number\" class=\"form-control\" placeholder=\"No. de identificacion\" id=\"IdCliente\">
                        </div>
                        ";
        // line 28
        echo "                        <button type=\"submit\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-12\">
                <div class=\"table-responsive\">
                    <table class=\"table table-bordered table-hover table-condensed text-center\">
                        <thead>
                            <tr class=\"active info\">
                                <th>ID</th>
                                <th>NUIP</th>
                                <th>NOMBRE</th>
                                <th>FECHA DE NACIMIENTO</th>
                                <th>PUNTOS ACUMULADOS</th>
                                <th>EMAIL</th>
                                <th>ACCIONES</th>
                            </tr>
                        </thead>
                        <tbody>
                            ";
        // line 50
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 51
            echo "                                <tr>
                                    <td>
                                        <a href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "</a>
                                    </td>
                                    <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nuip", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 57
            if ($this->getAttribute($context["cliente"], "fechaDeNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "fechaDeNacimiento", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                    <td>";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "puntosAcumulados", array()), "html", null, true);
            echo "</td>
                                    <td>";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                                    <td>
                                        <ul style=\"list-style-type: none;\" class=\"list-inline text-center\">
                                            <li>
                                                <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></a>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_c15a4f7811b6f0a796ad5e6f2133a49e3177164af2a52a25186b742adc257304->leave($__internal_c15a4f7811b6f0a796ad5e6f2133a49e3177164af2a52a25186b742adc257304_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  150 => 72,  138 => 66,  132 => 63,  125 => 59,  121 => 58,  115 => 57,  111 => 56,  107 => 55,  100 => 53,  96 => 51,  92 => 50,  68 => 28,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo" style="font-weight: bold;">Clientes <span class="glyphicon glyphicon-user"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <ul style="list-style-type: none; padding: 0px;">*/
/*                     <li>*/
/*                         <a href="{{ path('clientes_new') }}" class="btn btn-lg btn-success">Registrar Cliente <span class="glyphicon glyphicon-floppy-saved"></span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="col-md-9">*/
/*                 <form action="" method="GET" class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon" style="font-weight: bold;">Cliente</div>*/
/*                             <input type="number" class="form-control" placeholder="No. de identificacion" id="IdCliente">*/
/*                         </div>*/
/*                         {#                        <a href="{{ path('clientes_buscar', { 'id': '#IdCliente' }) }}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span> Buscar</a>#}*/
/*                         <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
/*                     </div>*/
/*                 </form>*/
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
/*                                 <th>NUIP</th>*/
/*                                 <th>NOMBRE</th>*/
/*                                 <th>FECHA DE NACIMIENTO</th>*/
/*                                 <th>PUNTOS ACUMULADOS</th>*/
/*                                 <th>EMAIL</th>*/
/*                                 <th>ACCIONES</th>*/
/*                             </tr>*/
/*                         </thead>*/
/*                         <tbody>*/
/*                             {% for cliente in clientes %}*/
/*                                 <tr>*/
/*                                     <td>*/
/*                                         <a href="{{ path('clientes_show', { 'id': cliente.id }) }}">{{ cliente.id }}</a>*/
/*                                     </td>*/
/*                                     <td>{{ cliente.nuip }}</td>*/
/*                                     <td>{{ cliente.nombre }}</td>*/
/*                                     <td>{% if cliente.fechaDeNacimiento %}{{ cliente.fechaDeNacimiento|date('d-m-Y') }}{% endif %}</td>*/
/*                                     <td>{{ cliente.puntosAcumulados }}</td>*/
/*                                     <td>{{ cliente.email }}</td>*/
/*                                     <td>*/
/*                                         <ul style="list-style-type: none;" class="list-inline text-center">*/
/*                                             <li>*/
/*                                                 <a href="{{ path('clientes_edit', { 'id': cliente.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="{{ path('clientes_show', { 'id': cliente.id }) }}" class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></a>*/
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
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
