<?php

/* UsuariosBundle:empleado:index.html.twig */
class __TwigTemplate_c973debab5b874819a56a0464b084bb489c3a651a53d3d8967a6f1bc63e58917 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:empleado:index.html.twig", 1);
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
        $__internal_32242ceecd8cbefd5839f94d1b205b9dd774f715694d091bcb639241e73bd1f5 = $this->env->getExtension("native_profiler");
        $__internal_32242ceecd8cbefd5839f94d1b205b9dd774f715694d091bcb639241e73bd1f5->enter($__internal_32242ceecd8cbefd5839f94d1b205b9dd774f715694d091bcb639241e73bd1f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:empleado:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_32242ceecd8cbefd5839f94d1b205b9dd774f715694d091bcb639241e73bd1f5->leave($__internal_32242ceecd8cbefd5839f94d1b205b9dd774f715694d091bcb639241e73bd1f5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d60625c2b096351c0b2839e4a70a73522497eb60acf25741c13e0b5bd8f402d3 = $this->env->getExtension("native_profiler");
        $__internal_d60625c2b096351c0b2839e4a70a73522497eb60acf25741c13e0b5bd8f402d3->enter($__internal_d60625c2b096351c0b2839e4a70a73522497eb60acf25741c13e0b5bd8f402d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Empleados <span class=\"icon-empleado\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul>
                    <li>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_new");
        echo "\" class=\"btn btn-lg btn-success\">Registrar Empleado <span class=\"glyphicon glyphicon-floppy-saved\"></span></a>
                    </li>
                </ul>
            </div>

            <div class=\"col-md-9\">
                <form action=\"\" method=\"GET\" class=\"form-inline\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">Empleado</div>
                            <input type=\"number\" class=\"form-control\" placeholder=\"No. de identificacion\" id=\"idCliente\">
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
                                    <th>NUIP</th>
                                    <th>NOMBRE</th>
                                    <th>TELEFONO</th>
                                    <th>¿CON LOGIN?</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody>
                                ";
        // line 49
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["empleados"]) ? $context["empleados"] : $this->getContext($context, "empleados")));
        foreach ($context['_seq'] as $context["_key"] => $context["empleado"]) {
            // line 50
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 51
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "id", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 52
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nuip", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 53
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["empleado"], "telefono", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 55
            if ($this->getAttribute($context["empleado"], "esUsuario", array())) {
                echo "Yes";
            } else {
                echo "No";
            }
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"";
            // line 59
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_edit", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_show", array("id" => $this->getAttribute($context["empleado"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['empleado'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_d60625c2b096351c0b2839e4a70a73522497eb60acf25741c13e0b5bd8f402d3->leave($__internal_d60625c2b096351c0b2839e4a70a73522497eb60acf25741c13e0b5bd8f402d3_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:empleado:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 68,  132 => 62,  126 => 59,  115 => 55,  111 => 54,  107 => 53,  103 => 52,  97 => 51,  94 => 50,  90 => 49,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Empleados <span class="icon-empleado"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('UsuariosBundle_empleado_new') }}" class="btn btn-lg btn-success">Registrar Empleado <span class="glyphicon glyphicon-floppy-saved"></span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="col-md-9">*/
/*                 <form action="" method="GET" class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon">Empleado</div>*/
/*                             <input type="number" class="form-control" placeholder="No. de identificacion" id="idCliente">*/
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
/*                                     <th>NUIP</th>*/
/*                                     <th>NOMBRE</th>*/
/*                                     <th>TELEFONO</th>*/
/*                                     <th>¿CON LOGIN?</th>*/
/*                                     <th>ACCIONES</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody>*/
/*                                 {% for empleado in empleados %}*/
/*                                     <tr>*/
/*                                         <td><a href="{{ path('UsuariosBundle_empleado_show', { 'id': empleado.id }) }}">{{ empleado.id }}</a></td>*/
/*                                         <td>{{ empleado.nuip }}</td>*/
/*                                         <td>{{ empleado.nombre }}</td>*/
/*                                         <td>{{ empleado.telefono }}</td>*/
/*                                         <td>{% if empleado.esUsuario %}Yes{% else %}No{% endif %}</td>*/
/*                                         <td>*/
/*                                             <ul class="list-inline text-center">*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('UsuariosBundle_empleado_edit', { 'id': empleado.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('UsuariosBundle_empleado_show', { 'id': empleado.id }) }}" class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/* */
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
