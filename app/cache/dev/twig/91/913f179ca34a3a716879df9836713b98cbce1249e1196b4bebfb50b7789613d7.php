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
        $__internal_3079050478d920d919991bdef4dc0872952aadcca435586ed084598dc9764de2 = $this->env->getExtension("native_profiler");
        $__internal_3079050478d920d919991bdef4dc0872952aadcca435586ed084598dc9764de2->enter($__internal_3079050478d920d919991bdef4dc0872952aadcca435586ed084598dc9764de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/cliente/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3079050478d920d919991bdef4dc0872952aadcca435586ed084598dc9764de2->leave($__internal_3079050478d920d919991bdef4dc0872952aadcca435586ed084598dc9764de2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fa8327a4ab7fe8cd667f8f7efbe3f36bf070f296c00341333d7a5f7c7f07485 = $this->env->getExtension("native_profiler");
        $__internal_7fa8327a4ab7fe8cd667f8f7efbe3f36bf070f296c00341333d7a5f7c7f07485->enter($__internal_7fa8327a4ab7fe8cd667f8f7efbe3f36bf070f296c00341333d7a5f7c7f07485_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo "                        <span id=\"mensaje\"><strong>No</strong> se ha encontrado un cliente con el dato ingresado.</span>
                    </div>
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
                            <tbody id=\"cuerpoTabla\">
                                ";
        // line 60
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["clientes"]) ? $context["clientes"] : $this->getContext($context, "clientes")));
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 61
            echo "                                    <tr>
                                        <td>
                                            <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_show", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "id", array()), "html", null, true);
            echo "</a>
                                        </td>
                                        <td>";
            // line 65
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nuip", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 66
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 67
            if ($this->getAttribute($context["cliente"], "fechaDeNacimiento", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["cliente"], "fechaDeNacimiento", array()), "d-m-Y"), "html", null, true);
            }
            echo "</td>
                                        <td>";
            // line 68
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "puntosAcumulados", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 69
            echo twig_escape_filter($this->env, $this->getAttribute($context["cliente"], "email", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"";
            // line 73
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute($context["cliente"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 76
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
        // line 82
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_7fa8327a4ab7fe8cd667f8f7efbe3f36bf070f296c00341333d7a5f7c7f07485->leave($__internal_7fa8327a4ab7fe8cd667f8f7efbe3f36bf070f296c00341333d7a5f7c7f07485_prof);

    }

    // line 92
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2123d822deb8b2658bf5d3d3e3bc56a300a93f78f3ea2336d9fda0b0607267d1 = $this->env->getExtension("native_profiler");
        $__internal_2123d822deb8b2658bf5d3d3e3bc56a300a93f78f3ea2336d9fda0b0607267d1->enter($__internal_2123d822deb8b2658bf5d3d3e3bc56a300a93f78f3ea2336d9fda0b0607267d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 93
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
        // line 107
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
        // line 128
        echo $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => "parametro_cualquiera"));
        echo "\";
                        var url2 = \"";
        // line 129
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
            msj.html(\"<strong>Debe</strong> ingresar un dato para realizar la busqueda.\");
            bloqueMsj.css('display', 'block');
            asignarTiempo(bloqueMsj);
        }

        function mensajeWarning(bloqueMsj, msj) {
            bloqueMsj.removeClass('alert-danger');
            bloqueMsj.addClass('alert-warning');
            msj.html(\"<strong>No</strong> se ha encontrado un cliente con el dato ingresado.\");
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
        
        $__internal_2123d822deb8b2658bf5d3d3e3bc56a300a93f78f3ea2336d9fda0b0607267d1->leave($__internal_2123d822deb8b2658bf5d3d3e3bc56a300a93f78f3ea2336d9fda0b0607267d1_prof);

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
        return array (  228 => 129,  224 => 128,  200 => 107,  182 => 93,  176 => 92,  161 => 82,  149 => 76,  143 => 73,  136 => 69,  132 => 68,  126 => 67,  122 => 66,  118 => 65,  111 => 63,  107 => 61,  103 => 60,  80 => 39,  54 => 15,  41 => 4,  35 => 3,  11 => 1,);
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
/*                         <span id="mensaje"><strong>No</strong> se ha encontrado un cliente con el dato ingresado.</span>*/
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
/*                                     <th>ID</th>*/
/*                                     <th>NUIP</th>*/
/*                                     <th>NOMBRE</th>*/
/*                                     <th>FECHA DE NACIMIENTO</th>*/
/*                                     <th>PUNTOS ACUMULADOS</th>*/
/*                                     <th>EMAIL</th>*/
/*                                     <th>ACCIONES</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody id="cuerpoTabla">*/
/*                                 {% for cliente in clientes %}*/
/*                                     <tr>*/
/*                                         <td>*/
/*                                             <a href="{{ path('clientes_show', { 'id': cliente.id }) }}">{{ cliente.id }}</a>*/
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
/*             msj.html("<strong>Debe</strong> ingresar un dato para realizar la busqueda.");*/
/*             bloqueMsj.css('display', 'block');*/
/*             asignarTiempo(bloqueMsj);*/
/*         }*/
/* */
/*         function mensajeWarning(bloqueMsj, msj) {*/
/*             bloqueMsj.removeClass('alert-danger');*/
/*             bloqueMsj.addClass('alert-warning');*/
/*             msj.html("<strong>No</strong> se ha encontrado un cliente con el dato ingresado.");*/
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
