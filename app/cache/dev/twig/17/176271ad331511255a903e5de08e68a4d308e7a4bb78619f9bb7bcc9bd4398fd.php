<?php

/* UsuariosBundle:cliente:index.html.twig */
class __TwigTemplate_cc08a89d60a7631dafb53e9c07e0a957e50ce11a5ba7e2edaa07156d6a7c30e5 extends Twig_Template
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
        $__internal_9087af35150a88154a3df1878891c0b3e9150275f3e607810b34a97b5c5f3208 = $this->env->getExtension("native_profiler");
        $__internal_9087af35150a88154a3df1878891c0b3e9150275f3e607810b34a97b5c5f3208->enter($__internal_9087af35150a88154a3df1878891c0b3e9150275f3e607810b34a97b5c5f3208_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:cliente:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9087af35150a88154a3df1878891c0b3e9150275f3e607810b34a97b5c5f3208->leave($__internal_9087af35150a88154a3df1878891c0b3e9150275f3e607810b34a97b5c5f3208_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1e838b6889474008cb606a9f2a801d0c932c49ed0ec10a002f9e25f2de939cfc = $this->env->getExtension("native_profiler");
        $__internal_1e838b6889474008cb606a9f2a801d0c932c49ed0ec10a002f9e25f2de939cfc->enter($__internal_1e838b6889474008cb606a9f2a801d0c932c49ed0ec10a002f9e25f2de939cfc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Clientes <span class=\"glyphicon glyphicon-user\"></span></h1>
            </div>
        </div>

        <div class=\"row\">

            <div class=\"col-md-3\">
                <a href=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("clientes_new");
        echo "\" class=\"btn btn-lg btn-success\">Registrar Cliente <span class=\"glyphicon glyphicon-floppy-saved\"></span></a>
            </div>

            <div class=\"col-md-1\" style=\"padding: 0px;\">
                <div id=\"bloqueTotal\">
                    <div class=\"form-group\">
                        <label for=\"total\" style=\"display: inline-block;\">Total: </label>
                        <input id=\"total\" name=\"total\" class=\"form-control\" disabled=\"disabled\" value=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "\" style=\"display: inline-block; width: 50%;\">
                    </div>
                </div>
            </div>
            <div class=\"col-md-1 text-center\">
                <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("generarPdf");
        echo "\" class=\"btn btn-default\"><span class=\"fa fa-file-pdf-o\" style=\"color: red;\"></span> Reporte</a>
            </div>

            <div class=\"col-md-7 text-right\">
                <form action=\"\" method=\"GET\" class=\"form-inline\" onsubmit=\"buscar();
                        return false;\">
                    <div class=\"form-group\">
                        <select class=\"form-control\" id=\"criterio\">
                            <option value=\"\">Seleccione el criterio de busqueda</option>
                            <option value=\"email\">Email</option>
                            <option value=\"nombre\">Nombre o apellido</option>
                            <option value=\"nuip\">Número de identificacion</option>
                        </select>
                    </div>
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">Dato</div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Dato para la busqueda\" id=\"dato\">
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
        // line 56
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
        // line 76
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 77
            echo "                                    <tr>
                                        <td><a href=\"";
            // line 78
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nuip", array()), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 80
            if ($this->getAttribute($context["cliente"], "fechaDeNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "fechaDeNacimiento", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 81
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "puntosAcumulados", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"";
            // line 86
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 89
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
        // line 95
        echo "                            </tbody>
                        </table
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\">
            <div class=\"paginacion col-md-12 text-center\" id=\"paginador\">
                ";
        // line 103
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_1e838b6889474008cb606a9f2a801d0c932c49ed0ec10a002f9e25f2de939cfc->leave($__internal_1e838b6889474008cb606a9f2a801d0c932c49ed0ec10a002f9e25f2de939cfc_prof);

    }

    // line 110
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_905e4ef1d84c51e65e16114c2cba79fcdba9d99bd93f99fc2a2bdc350a1c9838 = $this->env->getExtension("native_profiler");
        $__internal_905e4ef1d84c51e65e16114c2cba79fcdba9d99bd93f99fc2a2bdc350a1c9838->enter($__internal_905e4ef1d84c51e65e16114c2cba79fcdba9d99bd93f99fc2a2bdc350a1c9838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 111
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        \$(document).on('ready', inicio());

        function inicio() {
            \$('#usuarios').addClass('active');
            \$(\"#criterio\").change(function () {
                var elemento = \$('#dato');
                switch (\$(\"#criterio\").val()) {
                    case \"nombre\":
                        elemento.attr('type', 'text');
                        elemento.attr('placeholder', 'Nombre completo');
                        break;
                    case \"nuip\":
                        elemento.attr('type', 'number');
                        elemento.attr('placeholder', 'No. de identificacion');
                        break;
                    case \"email\":
                        elemento.attr('type', 'email');
                        elemento.attr('placeholder', 'Email');
                        break;
                    default:
                        break;
                }
            });
        }

        function buscar() {
            var valor = \$('#dato').val();
            var btn = \$('#btnBuscar');
            var bloqueMsj = \$('#bloqueMensaje');
            var elementoMensaje = \$('#mensaje');
            var criterio = \$('#criterio').val();
            //Cuando no selecciona ningun criterio de busqueda
            if (criterio == \"\") {
                mensajeError(bloqueMsj, elementoMensaje, \"seleccionar un criterio de busqueda.\");
                btn.blur();
                return;
            }
            //Esto es cuando no se ingresa ningun dato en el input
            if (valor.trim() == \"\") {
                mensajeError(bloqueMsj, elementoMensaje, \"ingresar un dato para realizar la busqueda.\");
                btn.blur();
                return;
            }
            \$.ajax({
                url: \"";
        // line 158
        echo $this->env->getExtension('routing')->getPath("buscarCliente");
        echo "\",
                data: ({dato: valor, criterio: criterio}),
                method: 'POST',
                dataType: \"json\",
                //Esto sucede antes que empiece la busqueda
                beforeSend: function () {
                    btn.addClass('disabled');
                    btn.html(\"<span class='fa fa-spinner fa-pulse'></span> Buscando\");
                    console.log('valor: ' + valor);
                },
                //Esto es cuando ya hay una respuesta
                success: function (data) {
                    console.log('DATA:');
                    console.log(data);
                    console.log('------');
                    //Esto es cuando no encuentra ningun cliente
                    if (data === -1) {
                        console.log('No encontro nada');
                        mensajeWarning(bloqueMsj, elementoMensaje);
                    } else {
                        \$(\"#paginador\").css('display', 'none');
                        bloqueMsj.css('display', 'none');
                        //Rutas para los botones edit y delete
                        var url1 = \"";
        // line 181
        echo $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => "parametro_cualquiera"));
        echo "\";
                        var url2 = \"";
        // line 182
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

        function mensajeError(bloqueMsj, elementoMensaje, mensaje) {
            bloqueMsj.removeClass('alert-warning');
            bloqueMsj.addClass('alert-danger');
            elementoMensaje.html(\"<span class='glyphicon glyphicon-remove-sign'></span> <strong>Debe</strong> \" + mensaje);
            bloqueMsj.css('display', 'block');
            asignarTiempo(bloqueMsj);
        }

        function mensajeWarning(bloqueMsj, elementoMensaje) {
            bloqueMsj.removeClass('alert-danger');
            bloqueMsj.addClass('alert-warning');
            elementoMensaje.html(\"<span class='glyphicon glyphicon-exclamation-sign'></span> <strong>No</strong> se ha encontrado un cliente con el dato ingresado.\");
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
        
        $__internal_905e4ef1d84c51e65e16114c2cba79fcdba9d99bd93f99fc2a2bdc350a1c9838->leave($__internal_905e4ef1d84c51e65e16114c2cba79fcdba9d99bd93f99fc2a2bdc350a1c9838_prof);

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
        return array (  287 => 182,  283 => 181,  257 => 158,  206 => 111,  200 => 110,  187 => 103,  177 => 95,  165 => 89,  159 => 86,  152 => 82,  148 => 81,  142 => 80,  138 => 79,  132 => 78,  129 => 77,  125 => 76,  103 => 56,  71 => 26,  63 => 21,  53 => 14,  41 => 4,  35 => 3,  11 => 1,);
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
/* */
/*             <div class="col-md-3">*/
/*                 <a href="{{ path('clientes_new') }}" class="btn btn-lg btn-success">Registrar Cliente <span class="glyphicon glyphicon-floppy-saved"></span></a>*/
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
/*             <div class="col-md-1 text-center">*/
/*                 <a href="{{ path('generarPdf') }}" class="btn btn-default"><span class="fa fa-file-pdf-o" style="color: red;"></span> Reporte</a>*/
/*             </div>*/
/* */
/*             <div class="col-md-7 text-right">*/
/*                 <form action="" method="GET" class="form-inline" onsubmit="buscar();*/
/*                         return false;">*/
/*                     <div class="form-group">*/
/*                         <select class="form-control" id="criterio">*/
/*                             <option value="">Seleccione el criterio de busqueda</option>*/
/*                             <option value="email">Email</option>*/
/*                             <option value="nombre">Nombre o apellido</option>*/
/*                             <option value="nuip">Número de identificacion</option>*/
/*                         </select>*/
/*                     </div>*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon">Dato</div>*/
/*                             <input type="text" class="form-control" placeholder="Dato para la busqueda" id="dato">*/
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
/*                                     <th>NUIP</th>*/
/*                                     <th>NOMBRE</th>*/
/*                                     <th>FECHA DE NACIMIENTO</th>*/
/*                                     <th>PUNTOS ACUMULADOS</th>*/
/*                                     <th>EMAIL</th>*/
/*                                     <th>ACCIONES</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody id="cuerpoTabla">*/
/*                                 {% for cliente in pagination %}*/
/*                                     <tr>*/
/*                                         <td><a href="{{ path('clientes_show', { 'id': cliente.id }) }}">{{ cliente.nuip }}</a></td>*/
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
/*                         </table*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="paginacion col-md-12 text-center" id="paginador">*/
/*                 {{ knp_pagination_render(pagination) }}*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/* */
/*         $(document).on('ready', inicio());*/
/* */
/*         function inicio() {*/
/*             $('#usuarios').addClass('active');*/
/*             $("#criterio").change(function () {*/
/*                 var elemento = $('#dato');*/
/*                 switch ($("#criterio").val()) {*/
/*                     case "nombre":*/
/*                         elemento.attr('type', 'text');*/
/*                         elemento.attr('placeholder', 'Nombre completo');*/
/*                         break;*/
/*                     case "nuip":*/
/*                         elemento.attr('type', 'number');*/
/*                         elemento.attr('placeholder', 'No. de identificacion');*/
/*                         break;*/
/*                     case "email":*/
/*                         elemento.attr('type', 'email');*/
/*                         elemento.attr('placeholder', 'Email');*/
/*                         break;*/
/*                     default:*/
/*                         break;*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function buscar() {*/
/*             var valor = $('#dato').val();*/
/*             var btn = $('#btnBuscar');*/
/*             var bloqueMsj = $('#bloqueMensaje');*/
/*             var elementoMensaje = $('#mensaje');*/
/*             var criterio = $('#criterio').val();*/
/*             //Cuando no selecciona ningun criterio de busqueda*/
/*             if (criterio == "") {*/
/*                 mensajeError(bloqueMsj, elementoMensaje, "seleccionar un criterio de busqueda.");*/
/*                 btn.blur();*/
/*                 return;*/
/*             }*/
/*             //Esto es cuando no se ingresa ningun dato en el input*/
/*             if (valor.trim() == "") {*/
/*                 mensajeError(bloqueMsj, elementoMensaje, "ingresar un dato para realizar la busqueda.");*/
/*                 btn.blur();*/
/*                 return;*/
/*             }*/
/*             $.ajax({*/
/*                 url: "{{ path('buscarCliente') }}",*/
/*                 data: ({dato: valor, criterio: criterio}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 //Esto sucede antes que empiece la busqueda*/
/*                 beforeSend: function () {*/
/*                     btn.addClass('disabled');*/
/*                     btn.html("<span class='fa fa-spinner fa-pulse'></span> Buscando");*/
/*                     console.log('valor: ' + valor);*/
/*                 },*/
/*                 //Esto es cuando ya hay una respuesta*/
/*                 success: function (data) {*/
/*                     console.log('DATA:');*/
/*                     console.log(data);*/
/*                     console.log('------');*/
/*                     //Esto es cuando no encuentra ningun cliente*/
/*                     if (data === -1) {*/
/*                         console.log('No encontro nada');*/
/*                         mensajeWarning(bloqueMsj, elementoMensaje);*/
/*                     } else {*/
/*                         $("#paginador").css('display', 'none');*/
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
/*         function mensajeError(bloqueMsj, elementoMensaje, mensaje) {*/
/*             bloqueMsj.removeClass('alert-warning');*/
/*             bloqueMsj.addClass('alert-danger');*/
/*             elementoMensaje.html("<span class='glyphicon glyphicon-remove-sign'></span> <strong>Debe</strong> " + mensaje);*/
/*             bloqueMsj.css('display', 'block');*/
/*             asignarTiempo(bloqueMsj);*/
/*         }*/
/* */
/*         function mensajeWarning(bloqueMsj, elementoMensaje) {*/
/*             bloqueMsj.removeClass('alert-danger');*/
/*             bloqueMsj.addClass('alert-warning');*/
/*             elementoMensaje.html("<span class='glyphicon glyphicon-exclamation-sign'></span> <strong>No</strong> se ha encontrado un cliente con el dato ingresado.");*/
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
