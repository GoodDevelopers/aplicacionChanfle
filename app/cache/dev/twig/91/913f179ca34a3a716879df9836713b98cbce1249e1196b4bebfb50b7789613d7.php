<?php

/* @Usuarios/cliente/index.html.twig */
class __TwigTemplate_d3ccafd1dd2234043a9c37c12e8cb53c49e8b402a03451c43dad75e551065191 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Usuarios/cliente/index.html.twig", 1);
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
        $__internal_b6fdf9ef60ef9f53678dc5d2976f2637eb64de242cc66c3399918a3d38e99526 = $this->env->getExtension("native_profiler");
        $__internal_b6fdf9ef60ef9f53678dc5d2976f2637eb64de242cc66c3399918a3d38e99526->enter($__internal_b6fdf9ef60ef9f53678dc5d2976f2637eb64de242cc66c3399918a3d38e99526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6fdf9ef60ef9f53678dc5d2976f2637eb64de242cc66c3399918a3d38e99526->leave($__internal_b6fdf9ef60ef9f53678dc5d2976f2637eb64de242cc66c3399918a3d38e99526_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fb54ec861c46f03f57e35361d827d104a1f11cb4a4629000e74ea4dcaed5988 = $this->env->getExtension("native_profiler");
        $__internal_6fb54ec861c46f03f57e35361d827d104a1f11cb4a4629000e74ea4dcaed5988->enter($__internal_6fb54ec861c46f03f57e35361d827d104a1f11cb4a4629000e74ea4dcaed5988_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Clientes <span class=\"glyphicon glyphicon-user\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul>
                    <li>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\" class=\"btn btn-lg btn-success\">Registrar Cliente <span class=\"glyphicon glyphicon-floppy-saved\"></span></a>
                    </li>
                </ul>
            </div>

            <div class=\"col-md-9\">
                <form action=\"\" method=\"GET\" class=\"form-inline\" onsubmit=\"buscar();
                        return false;\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">Cliente</div>
                            <input type=\"number\" class=\"form-control\" placeholder=\"No. de identificacion\" id=\"idCliente\">
                        </div>
                        <button type=\"button\" id=\"btnBuscar\" class=\"btn btn-primary\" onclick=\"buscar();\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"margenTopTablas\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"alert alert-warning alert-dismissible\" role=\"alert\" id=\"bloqueMensaje\" style=\"display: none;\">
                        ";
        // line 39
        echo "                        <p id=\"mensaje\"></p>
                    </div>
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover table-condensed text-center\">
                            <thead>
                                <tr class=\"active info\">
                                    <th>NO.</th>
                                    <th>NUIP</th>
                                    <th>NOMBRE</th>
                                    <th>FECHA DE NACIMIENTO</th>
                                    <th>PUNTOS ACUMULADOS</th>
                                    <th>EMAIL</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody id=\"cuerpoTabla\">
                                ";
        // line 60
        $context["num"] = 0;
        // line 61
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 62
            echo "                                    ";
            $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
            // line 63
            echo "                                    <tr>
                                        <td>
                                            <a href=\"";
            // line 65
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($context["cliente"], "id", array()), "num" => (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "</a>
                                        </td>
                                        <td>";
            // line 67
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nuip", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 69
            if ($this->getAttribute($context["cliente"], "fechaDeNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "fechaDeNacimiento", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 70
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "puntosAcumulados", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 71
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 78
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
        // line 84
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_6fb54ec861c46f03f57e35361d827d104a1f11cb4a4629000e74ea4dcaed5988->leave($__internal_6fb54ec861c46f03f57e35361d827d104a1f11cb4a4629000e74ea4dcaed5988_prof);

    }

    // line 94
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f4bac4135c768e56b4960b390e4cc5ace84e1748262c1ff2931f9555fa62ff0f = $this->env->getExtension("native_profiler");
        $__internal_f4bac4135c768e56b4960b390e4cc5ace84e1748262c1ff2931f9555fa62ff0f->enter($__internal_f4bac4135c768e56b4960b390e4cc5ace84e1748262c1ff2931f9555fa62ff0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 95
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>
        function buscar() {
            var valor = \$('#idCliente').val();
            var btn = \$('#btnBuscar');
            var bloqueMsj = \$('#bloqueMensaje');
            var msj = \$('#mensaje');
            //Esto es cuando no se ingresa ningun dato en el input
            if (valor.trim() == \"\") {
                mensajeError(bloqueMsj, msj);
                btn.blur();
                return;
            }
            \$.ajax({
                url: \"";
        // line 109
        echo $this->env->getExtension('routing')->getPath("buscarCliente");
        echo "\",
                data: ({id: valor}),
                method: 'POST',
                dataType: \"json\",
                //Esto sucede antes que empiece la busqueda
                beforeSend: function () {
                    btn.addClass('disabled');
                    btn.html(\"<span class='fa fa-spinner fa-pulse'></span> Buscando\");
                },
                //Esto es cuando ya hay una respuesta
                success: function (data) {
                    console.log('DATA:');
                    console.log(data);
                    console.log('------');
                    //Esto es cuando no encuentra ningun cliente
                    if (data === -1) {
                        console.log('No encontro nada');
                        mensajeWarning(bloqueMsj, msj);
                    } else {
                        bloqueMsj.css('display', 'none');
                        //Rutas para los botones edit y delete
                        var url1 = \"";
        // line 130
        echo $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => "parametro_cualquiera"));
        echo "\";
                        var url2 = \"";
        // line 131
        echo $this->env->getExtension('routing')->getPath("clientes_show", array("id" => "parametro_cualquiera1"));
        echo "\";
                        url1 = url1.replace('parametro_cualquiera', data['id']);
                        url2 = url2.replace('parametro_cualquiera1', data['id']);
                        //Limpiamos la tabla
                        \$('#cuerpoTabla').empty();
                        //Llenamos la tabla nuevamente
                        \$('#cuerpoTabla').append(llenarTabla(data, url1, url2));
                        bloqueMsj.css('display', 'none');
                    }
                    btn.removeClass('disabled');
                    btn.html(\"<span id='iconoBuscar' class='glyphicon glyphicon-search'></span> Buscar\");
                    btn.blur();
                },
                error: function (jqXHR, estado, error) {
                    console.log('ERROR');
                    console.log(estado);
                    console.log(error);
                    console.log('------');
                }
            });
        }

        function llenarTabla(data, url1, url2) {
            var PersonaProcesar;
            PersonaProcesar =
                    \"<tr>\" +
                    \"<td>\" +
                    \"<a href='\" + url2 + \"'>\" + data['id'] + \"</a>\" +
                    \"</td>\" +
                    \"<td>\" +
                    data['nuip'] +
                    \"</td>\" +
                    \"<td>\" +
                    data['nombre'] +
                    \"</td>\" +
                    \"<td>\" +
                    data['fechaDeNacimiento'] +
                    \"</td>\" +
                    \"<td>\" +
                    data['puntos'] +
                    \"</td>\" +
                    \"<td>\" +
                    data['email'] +
                    \"</td>\" +
                    \"<td>\" +
                    \"<ul style='list-style-type: none;' class='list-inline text-center'>\" +
                    \"<li>\" +
                    \"<a href='\" + url1 + \"' class='btn btn-warning' role='button'>Editar <span class='glyphicon glyphicon-edit'></span></a>\" +
                    \"</li>\" +
                    \"<li>\" +
                    \"<a href='\" + url2 + \"' class='btn btn-danger' role='button'>Eliminar <span class='glyphicon glyphicon-floppy-remove'></span></a>\" +
                    \"</li>\" +
                    \"</ul>\" +
                    \"</td>\" +
                    \"</tr>\"
                    ;
            return PersonaProcesar;
        }

        function mensajeError(bloqueMsj, msj) {
            bloqueMsj.removeClass('alert-warning');
            bloqueMsj.addClass('alert-danger');
            msj.html(\"<span class='glyphicon glyphicon-remove-sign'></span> <strong>Debe</strong> ingresar un dato para realizar la busqueda.\");
            bloqueMsj.css('display', 'block');
            asignarTiempo(bloqueMsj);
        }

        function mensajeWarning(bloqueMsj, msj) {
            bloqueMsj.removeClass('alert-danger');
            bloqueMsj.addClass('alert-warning');
            msj.html(\"<span class='glyphicon glyphicon-remove-sign'></span> <strong>No</strong> se ha encontrado un cliente con el dato ingresado.\");
            bloqueMsj.css('display', 'block');
            asignarTiempo(bloqueMsj);
        }

        function asignarTiempo(elemento) {
            setTimeout(function () {
                elemento.fadeOut(1000);
            }, 3000);
        }

    </script>
";
        
        $__internal_f4bac4135c768e56b4960b390e4cc5ace84e1748262c1ff2931f9555fa62ff0f->leave($__internal_f4bac4135c768e56b4960b390e4cc5ace84e1748262c1ff2931f9555fa62ff0f_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/cliente/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  234 => 131,  230 => 130,  206 => 109,  188 => 95,  182 => 94,  167 => 84,  155 => 78,  149 => 75,  142 => 71,  138 => 70,  132 => 69,  128 => 68,  124 => 67,  117 => 65,  113 => 63,  110 => 62,  105 => 61,  103 => 60,  80 => 39,  54 => 15,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Clientes <span class="glyphicon glyphicon-user"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <ul>*/
/*                     <li>*/
/*                         <a href="{{ path('clientes_new') }}" class="btn btn-lg btn-success">Registrar Cliente <span class="glyphicon glyphicon-floppy-saved"></span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="col-md-9">*/
/*                 <form action="" method="GET" class="form-inline" onsubmit="buscar();*/
/*                         return false;">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon">Cliente</div>*/
/*                             <input type="number" class="form-control" placeholder="No. de identificacion" id="idCliente">*/
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
/*                     <div class="alert alert-warning alert-dismissible" role="alert" id="bloqueMensaje" style="display: none;">*/
/*                         {#                        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>#}*/
/*                         <p id="mensaje"></p>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover table-condensed text-center">*/
/*                             <thead>*/
/*                                 <tr class="active info">*/
/*                                     <th>NO.</th>*/
/*                                     <th>NUIP</th>*/
/*                                     <th>NOMBRE</th>*/
/*                                     <th>FECHA DE NACIMIENTO</th>*/
/*                                     <th>PUNTOS ACUMULADOS</th>*/
/*                                     <th>EMAIL</th>*/
/*                                     <th>ACCIONES</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody id="cuerpoTabla">*/
/*                                 {% set num = 0 %}*/
/*                                 {% for cliente in clientes %}*/
/*                                     {% set num = num + 1 %}*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             <a href="{{ path('clientes_show', { 'id': cliente.id, 'num': num }) }}">{{ num }}</a>*/
/*                                         </td>*/
/*                                         <td>{{ cliente.nuip }}</td>*/
/*                                         <td>{{ cliente.nombre }}</td>*/
/*                                         <td>{% if cliente.fechaDeNacimiento %}{{ cliente.fechaDeNacimiento|date('d-m-Y') }}{% endif %}</td>*/
/*                                         <td>{{ cliente.puntosAcumulados }}</td>*/
/*                                         <td>{{ cliente.email }}</td>*/
/*                                         <td>*/
/*                                             <ul class="list-inline text-center">*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('clientes_edit', { 'id': cliente.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('clientes_show', { 'id': cliente.id }) }}" class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></a>*/
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
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/*         function buscar() {*/
/*             var valor = $('#idCliente').val();*/
/*             var btn = $('#btnBuscar');*/
/*             var bloqueMsj = $('#bloqueMensaje');*/
/*             var msj = $('#mensaje');*/
/*             //Esto es cuando no se ingresa ningun dato en el input*/
/*             if (valor.trim() == "") {*/
/*                 mensajeError(bloqueMsj, msj);*/
/*                 btn.blur();*/
/*                 return;*/
/*             }*/
/*             $.ajax({*/
/*                 url: "{{ path('buscarCliente') }}",*/
/*                 data: ({id: valor}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 //Esto sucede antes que empiece la busqueda*/
/*                 beforeSend: function () {*/
/*                     btn.addClass('disabled');*/
/*                     btn.html("<span class='fa fa-spinner fa-pulse'></span> Buscando");*/
/*                 },*/
/*                 //Esto es cuando ya hay una respuesta*/
/*                 success: function (data) {*/
/*                     console.log('DATA:');*/
/*                     console.log(data);*/
/*                     console.log('------');*/
/*                     //Esto es cuando no encuentra ningun cliente*/
/*                     if (data === -1) {*/
/*                         console.log('No encontro nada');*/
/*                         mensajeWarning(bloqueMsj, msj);*/
/*                     } else {*/
/*                         bloqueMsj.css('display', 'none');*/
/*                         //Rutas para los botones edit y delete*/
/*                         var url1 = "{{path('clientes_edit', {'id':'parametro_cualquiera'})}}";*/
/*                         var url2 = "{{path('clientes_show', {'id': 'parametro_cualquiera1'})}}";*/
/*                         url1 = url1.replace('parametro_cualquiera', data['id']);*/
/*                         url2 = url2.replace('parametro_cualquiera1', data['id']);*/
/*                         //Limpiamos la tabla*/
/*                         $('#cuerpoTabla').empty();*/
/*                         //Llenamos la tabla nuevamente*/
/*                         $('#cuerpoTabla').append(llenarTabla(data, url1, url2));*/
/*                         bloqueMsj.css('display', 'none');*/
/*                     }*/
/*                     btn.removeClass('disabled');*/
/*                     btn.html("<span id='iconoBuscar' class='glyphicon glyphicon-search'></span> Buscar");*/
/*                     btn.blur();*/
/*                 },*/
/*                 error: function (jqXHR, estado, error) {*/
/*                     console.log('ERROR');*/
/*                     console.log(estado);*/
/*                     console.log(error);*/
/*                     console.log('------');*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function llenarTabla(data, url1, url2) {*/
/*             var PersonaProcesar;*/
/*             PersonaProcesar =*/
/*                     "<tr>" +*/
/*                     "<td>" +*/
/*                     "<a href='" + url2 + "'>" + data['id'] + "</a>" +*/
/*                     "</td>" +*/
/*                     "<td>" +*/
/*                     data['nuip'] +*/
/*                     "</td>" +*/
/*                     "<td>" +*/
/*                     data['nombre'] +*/
/*                     "</td>" +*/
/*                     "<td>" +*/
/*                     data['fechaDeNacimiento'] +*/
/*                     "</td>" +*/
/*                     "<td>" +*/
/*                     data['puntos'] +*/
/*                     "</td>" +*/
/*                     "<td>" +*/
/*                     data['email'] +*/
/*                     "</td>" +*/
/*                     "<td>" +*/
/*                     "<ul style='list-style-type: none;' class='list-inline text-center'>" +*/
/*                     "<li>" +*/
/*                     "<a href='" + url1 + "' class='btn btn-warning' role='button'>Editar <span class='glyphicon glyphicon-edit'></span></a>" +*/
/*                     "</li>" +*/
/*                     "<li>" +*/
/*                     "<a href='" + url2 + "' class='btn btn-danger' role='button'>Eliminar <span class='glyphicon glyphicon-floppy-remove'></span></a>" +*/
/*                     "</li>" +*/
/*                     "</ul>" +*/
/*                     "</td>" +*/
/*                     "</tr>"*/
/*                     ;*/
/*             return PersonaProcesar;*/
/*         }*/
/* */
/*         function mensajeError(bloqueMsj, msj) {*/
/*             bloqueMsj.removeClass('alert-warning');*/
/*             bloqueMsj.addClass('alert-danger');*/
/*             msj.html("<span class='glyphicon glyphicon-remove-sign'></span> <strong>Debe</strong> ingresar un dato para realizar la busqueda.");*/
/*             bloqueMsj.css('display', 'block');*/
/*             asignarTiempo(bloqueMsj);*/
/*         }*/
/* */
/*         function mensajeWarning(bloqueMsj, msj) {*/
/*             bloqueMsj.removeClass('alert-danger');*/
/*             bloqueMsj.addClass('alert-warning');*/
/*             msj.html("<span class='glyphicon glyphicon-remove-sign'></span> <strong>No</strong> se ha encontrado un cliente con el dato ingresado.");*/
/*             bloqueMsj.css('display', 'block');*/
/*             asignarTiempo(bloqueMsj);*/
/*         }*/
/* */
/*         function asignarTiempo(elemento) {*/
/*             setTimeout(function () {*/
/*                 elemento.fadeOut(1000);*/
/*             }, 3000);*/
/*         }*/
/* */
/*     </script>*/
/* {% endblock %}*/
/* */
