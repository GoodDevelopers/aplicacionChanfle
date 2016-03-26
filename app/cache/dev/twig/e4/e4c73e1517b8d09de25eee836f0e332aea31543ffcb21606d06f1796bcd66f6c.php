<?php

/* UsuariosBundle:Cliente:index.html.twig */
class __TwigTemplate_9416d4cd0df71deb4a21541a87e48d5294b7b2b9016022f187b0c7229f1184d9 extends Twig_Template
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
        $__internal_3a14b90c6bbee12dbb622227997521c75afc78d1561dd2f430057cbbc8a23198 = $this->env->getExtension("native_profiler");
        $__internal_3a14b90c6bbee12dbb622227997521c75afc78d1561dd2f430057cbbc8a23198->enter($__internal_3a14b90c6bbee12dbb622227997521c75afc78d1561dd2f430057cbbc8a23198_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:Cliente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a14b90c6bbee12dbb622227997521c75afc78d1561dd2f430057cbbc8a23198->leave($__internal_3a14b90c6bbee12dbb622227997521c75afc78d1561dd2f430057cbbc8a23198_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_92dcb52841b1cf6897cf1ae59778929dd01d4f98f8660b726c819290edecd54f = $this->env->getExtension("native_profiler");
        $__internal_92dcb52841b1cf6897cf1ae59778929dd01d4f98f8660b726c819290edecd54f->enter($__internal_92dcb52841b1cf6897cf1ae59778929dd01d4f98f8660b726c819290edecd54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center\" style=\"font-weight: bold;\">Clientes <span class=\"glyphicon glyphicon-user\"></span></h1>
            </div>
        </div>

        <div class=\"row\" style=\"margin-top: 30px;\">
            <div class=\"col-md-3\">
                <ul style=\"list-style-type: none; padding: 0px;\">
                    <li>
                        <a href=\"";
        // line 16
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\" class=\"btn btn-lg btn-success\">Registrar Cliente <span class=\"glyphicon glyphicon-floppy-saved\"></span></a>
                    </li>
                </ul>
            </div>
                    
            <div class=\"col-md-9\">
                <form action=\"\" class=\"form-inline\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\" style=\"font-weight: bold;\">Cliente</div>
                            <input type=\"number\" class=\"form-control\" placeholder=\"No. de identificacion\">
                        </div>
                        <button class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
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
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "fechaDeNacimiento", array()), "Y-m-d H:i:s"), "html", null, true);
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
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-info\" role=\"button\">Ver <span class=\"glyphicon glyphicon-eye-open\"></span></a>
                                            </li>
                                            <li>
                                                <a href=\"";
            // line 66
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
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
        
        $__internal_92dcb52841b1cf6897cf1ae59778929dd01d4f98f8660b726c819290edecd54f->leave($__internal_92dcb52841b1cf6897cf1ae59778929dd01d4f98f8660b726c819290edecd54f_prof);

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
        return array (  149 => 72,  137 => 66,  131 => 63,  124 => 59,  120 => 58,  114 => 57,  110 => 56,  106 => 55,  99 => 53,  95 => 51,  91 => 50,  54 => 16,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center" style="font-weight: bold;">Clientes <span class="glyphicon glyphicon-user"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row" style="margin-top: 30px;">*/
/*             <div class="col-md-3">*/
/*                 <ul style="list-style-type: none; padding: 0px;">*/
/*                     <li>*/
/*                         <a href="{{ path('clientes_new') }}" class="btn btn-lg btn-success">Registrar Cliente <span class="glyphicon glyphicon-floppy-saved"></span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*                     */
/*             <div class="col-md-9">*/
/*                 <form action="" class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon" style="font-weight: bold;">Cliente</div>*/
/*                             <input type="number" class="form-control" placeholder="No. de identificacion">*/
/*                         </div>*/
/*                         <button class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
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
/*                                     <td>{% if cliente.fechaDeNacimiento %}{{ cliente.fechaDeNacimiento|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                                     <td>{{ cliente.puntosAcumulados }}</td>*/
/*                                     <td>{{ cliente.email }}</td>*/
/*                                     <td>*/
/*                                         <ul style="list-style-type: none;" class="list-inline text-center">*/
/*                                             <li>*/
/*                                                 <a href="{{ path('clientes_show', { 'id': cliente.id }) }}" class="btn btn-info" role="button">Ver <span class="glyphicon glyphicon-eye-open"></span></a>*/
/*                                             </li>*/
/*                                             <li>*/
/*                                                 <a href="{{ path('clientes_edit', { 'id': cliente.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
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
/*     </div>*/
/* {% endblock %}*/
/* */
