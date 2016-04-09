<?php

/* UsuariosBundle:cliente:index.html.twig */
class __TwigTemplate_72d2c74b52385217808e57924fa22e28eb43f9b1170422a729879f4ec0fd0aaa extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:cliente:index.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b386be3484747d83391518cd52555e03c1c7efaf69d3be7ec674dc1d927a3930 = $this->env->getExtension("native_profiler");
        $__internal_b386be3484747d83391518cd52555e03c1c7efaf69d3be7ec674dc1d927a3930->enter($__internal_b386be3484747d83391518cd52555e03c1c7efaf69d3be7ec674dc1d927a3930_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:cliente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b386be3484747d83391518cd52555e03c1c7efaf69d3be7ec674dc1d927a3930->leave($__internal_b386be3484747d83391518cd52555e03c1c7efaf69d3be7ec674dc1d927a3930_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_089b34ca0169369795fc988b002130134bbd4b64f2cb2668046961e2b056bcc4 = $this->env->getExtension("native_profiler");
        $__internal_089b34ca0169369795fc988b002130134bbd4b64f2cb2668046961e2b056bcc4->enter($__internal_089b34ca0169369795fc988b002130134bbd4b64f2cb2668046961e2b056bcc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                <form action=\"\" method=\"POST\" class=\"form-inline\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\" style=\"font-weight: bold;\">Cliente</div>
                            <input type=\"number\" class=\"form-control\" placeholder=\"No. de identificacion\" id=\"idCliente\">
                        </div>
                        ";
        // line 28
        echo "                        <button type=\"submit\" class=\"btn btn-primary\" onclick=\"buscar()\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
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
        
        $__internal_089b34ca0169369795fc988b002130134bbd4b64f2cb2668046961e2b056bcc4->leave($__internal_089b34ca0169369795fc988b002130134bbd4b64f2cb2668046961e2b056bcc4_prof);

    }

    // line 81
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_be3681ec5077cd185e048dc14db83d95b7bf25c1f174b997bb4712194f299be9 = $this->env->getExtension("native_profiler");
        $__internal_be3681ec5077cd185e048dc14db83d95b7bf25c1f174b997bb4712194f299be9->enter($__internal_be3681ec5077cd185e048dc14db83d95b7bf25c1f174b997bb4712194f299be9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 82
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function buscar() {
            var valor = \$('#idCliente').val();
            alert(valor);
            \$.ajax({
                url: \"";
        // line 88
        echo $this->env->getExtension('routing')->getPath("clientes_buscar");
        echo "\",
                data: ({id: valor}),
                method: 'POST',
                dataType: \"json\",
                success: function (data) {
                    if (data === null) {
                        alert(\"No se ha encontrado Datos\");
                    }
                    console.log(data);
                },
                error: function (jqXHR, estado, error) {
                    console.log(estado);
                    console.log(error);
                }
            });
        }
    </script>
";
        
        $__internal_be3681ec5077cd185e048dc14db83d95b7bf25c1f174b997bb4712194f299be9->leave($__internal_be3681ec5077cd185e048dc14db83d95b7bf25c1f174b997bb4712194f299be9_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:cliente:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 88,  171 => 82,  165 => 81,  151 => 72,  139 => 66,  133 => 63,  126 => 59,  122 => 58,  116 => 57,  112 => 56,  108 => 55,  101 => 53,  97 => 51,  93 => 50,  69 => 28,  54 => 15,  41 => 4,  35 => 3,  11 => 1,);
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
/*                 <form action="" method="POST" class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon" style="font-weight: bold;">Cliente</div>*/
/*                             <input type="number" class="form-control" placeholder="No. de identificacion" id="idCliente">*/
/*                         </div>*/
/*                         {#                        <a href="{{ path('clientes_buscar', { 'id': '#IdCliente' }) }}" class="btn btn-primary" role="button"><span class="glyphicon glyphicon-search"></span> Buscar</a>#}*/
/*                         <button type="submit" class="btn btn-primary" onclick="buscar()"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
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
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         function buscar() {*/
/*             var valor = $('#idCliente').val();*/
/*             alert(valor);*/
/*             $.ajax({*/
/*                 url: "{{ path('clientes_buscar') }}",*/
/*                 data: ({id: valor}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 success: function (data) {*/
/*                     if (data === null) {*/
/*                         alert("No se ha encontrado Datos");*/
/*                     }*/
/*                     console.log(data);*/
/*                 },*/
/*                 error: function (jqXHR, estado, error) {*/
/*                     console.log(estado);*/
/*                     console.log(error);*/
/*                 }*/
/*             });*/
/*         }*/
/*     </script>*/
/* {% endblock %}*/
/* */