<?php

/* venta/new.html.twig */
class __TwigTemplate_f891700a856f3cc2b5e18bdba1e47fa28c414fdd91f803cd423d4d5046be8e35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venta/new.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
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
        $__internal_d95f868aed23b3eea9cb40db1d1bf1af4594ad4c4e6f96db1b6542f26bfc0917 = $this->env->getExtension("native_profiler");
        $__internal_d95f868aed23b3eea9cb40db1d1bf1af4594ad4c4e6f96db1b6542f26bfc0917->enter($__internal_d95f868aed23b3eea9cb40db1d1bf1af4594ad4c4e6f96db1b6542f26bfc0917_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d95f868aed23b3eea9cb40db1d1bf1af4594ad4c4e6f96db1b6542f26bfc0917->leave($__internal_d95f868aed23b3eea9cb40db1d1bf1af4594ad4c4e6f96db1b6542f26bfc0917_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b026df4de74701db9c46748bcb514b988d135cdfb3111088880aa24ad1211304 = $this->env->getExtension("native_profiler");
        $__internal_b026df4de74701db9c46748bcb514b988d135cdfb3111088880aa24ad1211304->enter($__internal_b026df4de74701db9c46748bcb514b988d135cdfb3111088880aa24ad1211304_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ventas/css/EstiloVentas.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_b026df4de74701db9c46748bcb514b988d135cdfb3111088880aa24ad1211304->leave($__internal_b026df4de74701db9c46748bcb514b988d135cdfb3111088880aa24ad1211304_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c45eabe52a199b2dccd1168bfacd58605d0aa43da71faf81fe817812b599d354 = $this->env->getExtension("native_profiler");
        $__internal_c45eabe52a199b2dccd1168bfacd58605d0aa43da71faf81fe817812b599d354->enter($__internal_c45eabe52a199b2dccd1168bfacd58605d0aa43da71faf81fe817812b599d354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    <div id=\"div_title\" class=\"panel-primary\"><h1>Nueva Venta</h1></div>

 

    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

    ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label');
        echo "
    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "form-group", "placeholder" => "Identificacion Cliente")));
        echo "
    <input  type=\"button\" id=\"boton_buscar_cliente\" value=\"Buscar\" onclick=\"buscarCliente();\" class=\"btn-success\"/>
    <label>Cliente:</label>  <input type=\"text\" id=\"Nombre_cliente\" placeholder=\"Nombre Cliente\" disabled=\"true\"/>
    <label>Puntos Acumulados:</label><input type=\"text\" id=\"Puntos_cliente\" placeholder=\"Puntos Acumulados\" disabled=\"true\"/>


    <div class=\"form-control\"> 

        ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mesa", array()), 'label');
        echo "
        ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mesa", array()), 'widget', array("attr" => array("class" => "form-group", "placeholder" => "Mesa")));
        echo "
        ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personasPorMesa", array()), 'label');
        echo "
        ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personasPorMesa", array()), 'widget', array("attr" => array("class" => "form-group", "Placeholder" => "Personas Por Mesa")));
        echo "

        ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoVenta", array()), 'label');
        echo "
        ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoVenta", array()), 'widget', array("attr" => array("class" => "form-group", "placeholder" => "Tipo de Venta")));
        echo "

    </div>

";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalles", array()), 'widget');
        echo "
    <div class=\"form-control\">
        <label>Nombre Producto:</label><input type=\"text\" placeholder=\"Nombre Producto\" id=\"NombreProducto\"/>
        <button type=\"button\" onclick=\"buscarProducto();\">Buscar Producto</button>
        <label>Precio:</label> <input type=\"number\" placeholder=\"Precio\" id=\"PrecioProducto\" disabled=\"true\"/>
        <label>Cantidad:</label><input type=\"number\" placeholder=\"Cantidad\" id=\"CantidadProducto\"/>
        <button class=\"btn-success\" type=\"button\" onclick=\"Agregar();\">Agregar Producto</button>

    </div>

    <ul id=\"productos\" class=\"detalles\" data-prototype=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalles", array()), "vars", array()), "prototype", array()), "producto", array()), "nombre", array()), 'widget'));
        echo "\" ></ul>
    <ul id=\"cantidades\" class=\"detalles\" data-prototype=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalles", array()), "vars", array()), "prototype", array()), "cantidad", array()), 'widget'));
        echo "\" ></ul>

    <table class=\"table\" id=\"Tabla_Productos\" name=\"TablaProductos\">
        <thead>
            <tr>
                <th>NOMBRE PRODUCTO</th>
                <th>VALOR UNITARIO</th>
                <th>CANTIDAD</th>
                <th>ACCIONES</th>

            </tr>
        </thead>
        <tbody id=\"CuerpoTabla\"></tbody>
    </table>



    <div class=\"form-control\"> 
        ";
        // line 64
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorTotal", array()), 'label');
        echo "
        ";
        // line 65
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorTotal", array()), 'widget', array("attr" => array("class" => "form-group", "value" => "0")));
        echo "
        ";
        // line 66
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosVenta", array()), 'label');
        echo "
        ";
        // line 67
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosVenta", array()), 'widget', array("attr" => array("class" => "form-group", "value" => "0")));
        echo "
    </div>


    <div class=\"form-control\"><button  class=\"btn-success\" type=\"submit\"> Aceptar </button>
        <button class=\"btn-info\"> <a class=\"EnlaceBoton\" href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("venta_index");
        echo "\">Regresar</a></button></div>  


    ";
        // line 75
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "


";
        
        $__internal_c45eabe52a199b2dccd1168bfacd58605d0aa43da71faf81fe817812b599d354->leave($__internal_c45eabe52a199b2dccd1168bfacd58605d0aa43da71faf81fe817812b599d354_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_99a959df2b0a74498e2dae60a30fe4d2e6d99bad928fad2d264d271326982e3e = $this->env->getExtension("native_profiler");
        $__internal_99a959df2b0a74498e2dae60a30fe4d2e6d99bad928fad2d264d271326982e3e->enter($__internal_99a959df2b0a74498e2dae60a30fe4d2e6d99bad928fad2d264d271326982e3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
    ";
        // line 80
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">

        var Productos = [];
        var Cantidades = [];
        var Precio = [];
        var total = 0;
        var NumeroP = \$('#productos').length;
        var NumeroC = \$('#cantidades').length;
        var numeroProducto = 1;


        function buscarCliente() {

            var id = \$('#venta_cliente').val();

            \$.ajax({
                url: \"";
        // line 98
        echo $this->env->getExtension('routing')->getPath("buscar_cliente_venta");
        echo "\",
                data: ({id: id}),
                method: 'POST',
                dataType: \"json\",
                success: function (data) {
                    if (data == null) {
                        alert('datos no encontrados');
                    } else {

                        \$('#Nombre_cliente').val(data[\"nombre\"]);
                        \$('#Puntos_cliente').val(data[\"Puntos\"]);
                        \$('#venta_type2_mesa').focus();


                    }
                }
            });

        }

        function buscarProducto() {

            var nombre = \$(\"#NombreProducto\").val();

            \$.ajax({
                url: \"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("buscar_producto");
        echo "\",
                data: ({nombre_p: nombre}),
                method: 'POST',
                dataType: \"json\",
                success: function (data) {
                    if (data == null) {
                        alert('datos no encontrados');
                    } else {
                        \$(\"#PrecioProducto\").val(data[\"precio\"]);
                        \$(\"#CantidadProducto\").focus();
                    }
                }
            });
        }

        function Agregar() {

            var nombreProducto = \$('#NombreProducto').val();
            var cantidad = \$('#CantidadProducto').val();
            var precio = \$('#PrecioProducto').val(); 
            var ListaProductos = \$('#productos');
            var ListaCantidades = \$('#cantidades');   
            
            var NumeroSerie = \"\" + nombreProducto + numeroProducto;
            \$('#CuerpoTabla').append(agregarProductoTabla(NumeroSerie,nombreProducto, precio, cantidad));
            total = \$('#venta_valorTotal').val();
            total = parseInt(total) + parseInt(precio) * parseInt(cantidad);
            \$('#venta_valorTotal').val(total);
            \$('#NombreProducto').val(\"\");
            \$('#PrecioProducto').val(\"\");
            \$('#CantidadProducto').val(\"\");
            \$('#NombreProducto').focus();
            ListaProductos.data('prototype', '<input class=\"hidden\" type=\"text\" id=\"'+ NumeroSerie +'\" name=\"venta[detalles][__name__][producto][nombre]\" value=\"' + nombreProducto + '\"/>');
            ListaCantidades.data('prototype', '<input class=\"hidden\" type=\"text\" id=\"venta_type2_detalles___name___cantidad\" name=\"venta[detalles][__name__][cantidad]\" value=\"' + cantidad + '\"/>');
            var prototype = ListaProductos.data('prototype');
            var prototype2 = ListaCantidades.data('prototype');
            var newform = prototype.replace(/__name__/g, NumeroP);
            var newform2 = prototype2.replace(/__name__/g, NumeroC);

            NumeroP++;
            NumeroC++;
            var NewLi = \$('<li class=\"hidden\"></li>').append(newform);
            var NewLi2 = \$('<li class=\"hidden\"></li>').append(newform2);
            NewLi.appendTo(ListaProductos);
            NewLi2.appendTo(ListaCantidades);
         
            Cantidades[NumeroSerie] = cantidad;
            Precio[NumeroSerie] = precio;
            numeroProducto ++;
        
         
         }

        function agregarProductoTabla(nombreS,nombre, precioUnitario, cantidad) {
            Productos =
                    \"<tr id=\" + 'producto' + nombreS + \">\" +
                    \"<td>\" + nombre + \"</td>\" +
                    \"<td>\" + precioUnitario + \"</td>\" +
                    \"<td>\" + cantidad + \"</td>\" +
                    \"<td>\" + \"<button id=\" + nombreS + \" type='button' onclick='quitarTablaProducto(this.id);'>ELIMINAR</button>\" + \"</td>\" +
                    \"</tr>\";
            return Productos;
        }

        function quitarTablaProducto(clicked_id) {
            var id = clicked_id;
            \$('#producto' + id).remove();
            \$('#productos :input[id=' + id + ']').remove();

            var valorActual = \$('#venta_valorTotal').val();
            \$(\"#venta_valorTotal\").val(valorActual - Precio[id] * Cantidades[id]);
            \$(\"#CantidadProducto\").focus();
        }



    </script>

";
        
        $__internal_99a959df2b0a74498e2dae60a30fe4d2e6d99bad928fad2d264d271326982e3e->leave($__internal_99a959df2b0a74498e2dae60a30fe4d2e6d99bad928fad2d264d271326982e3e_prof);

    }

    public function getTemplateName()
    {
        return "venta/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  249 => 123,  221 => 98,  200 => 80,  192 => 79,  181 => 75,  175 => 72,  167 => 67,  163 => 66,  159 => 65,  155 => 64,  134 => 46,  130 => 45,  117 => 35,  110 => 31,  106 => 30,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  78 => 17,  74 => 16,  69 => 14,  63 => 10,  57 => 9,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/* */
/*     <link rel="stylesheet" href="{{ asset('bundles/ventas/css/EstiloVentas.css') }}" />*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div id="div_title" class="panel-primary"><h1>Nueva Venta</h1></div>*/
/* */
/*  */
/* */
/*     {{ form_start(form)}}*/
/* */
/*     {{form_label(form.cliente)}}*/
/*     {{form_widget(form.cliente , {'attr':{'class': 'form-group', 'placeholder':'Identificacion Cliente'}})}}*/
/*     <input  type="button" id="boton_buscar_cliente" value="Buscar" onclick="buscarCliente();" class="btn-success"/>*/
/*     <label>Cliente:</label>  <input type="text" id="Nombre_cliente" placeholder="Nombre Cliente" disabled="true"/>*/
/*     <label>Puntos Acumulados:</label><input type="text" id="Puntos_cliente" placeholder="Puntos Acumulados" disabled="true"/>*/
/* */
/* */
/*     <div class="form-control"> */
/* */
/*         {{form_label(form.mesa)}}*/
/*         {{form_widget(form.mesa,{'attr':{'class': 'form-group', 'placeholder':'Mesa'}})}}*/
/*         {{form_label(form.personasPorMesa)}}*/
/*         {{form_widget(form.personasPorMesa,{'attr':{'class': 'form-group', 'Placeholder':'Personas Por Mesa'}})}}*/
/* */
/*         {{form_label(form.tipoVenta)}}*/
/*         {{form_widget(form.tipoVenta,{'attr':{'class':'form-group', 'placeholder':'Tipo de Venta'}})}}*/
/* */
/*     </div>*/
/* */
/* {{ form_widget(form.detalles)}}*/
/*     <div class="form-control">*/
/*         <label>Nombre Producto:</label><input type="text" placeholder="Nombre Producto" id="NombreProducto"/>*/
/*         <button type="button" onclick="buscarProducto();">Buscar Producto</button>*/
/*         <label>Precio:</label> <input type="number" placeholder="Precio" id="PrecioProducto" disabled="true"/>*/
/*         <label>Cantidad:</label><input type="number" placeholder="Cantidad" id="CantidadProducto"/>*/
/*         <button class="btn-success" type="button" onclick="Agregar();">Agregar Producto</button>*/
/* */
/*     </div>*/
/* */
/*     <ul id="productos" class="detalles" data-prototype="{{ form_widget(form.detalles.vars.prototype.producto.nombre)|e}}" ></ul>*/
/*     <ul id="cantidades" class="detalles" data-prototype="{{ form_widget(form.detalles.vars.prototype.cantidad)|e}}" ></ul>*/
/* */
/*     <table class="table" id="Tabla_Productos" name="TablaProductos">*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>NOMBRE PRODUCTO</th>*/
/*                 <th>VALOR UNITARIO</th>*/
/*                 <th>CANTIDAD</th>*/
/*                 <th>ACCIONES</th>*/
/* */
/*             </tr>*/
/*         </thead>*/
/*         <tbody id="CuerpoTabla"></tbody>*/
/*     </table>*/
/* */
/* */
/* */
/*     <div class="form-control"> */
/*         {{form_label(form.valorTotal)}}*/
/*         {{form_widget(form.valorTotal,{'attr':{'class': 'form-group', 'value':'0'}})}}*/
/*         {{form_label(form.puntosVenta)}}*/
/*         {{form_widget(form.puntosVenta,{'attr':{'class': 'form-group', 'value':'0'}})}}*/
/*     </div>*/
/* */
/* */
/*     <div class="form-control"><button  class="btn-success" type="submit"> Aceptar </button>*/
/*         <button class="btn-info"> <a class="EnlaceBoton" href="{{ path('venta_index') }}">Regresar</a></button></div>  */
/* */
/* */
/*     {{form_end(form)}}*/
/* */
/* */
/* {% endblock %}*/
/* {% block javascripts %}    */
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/* */
/*         var Productos = [];*/
/*         var Cantidades = [];*/
/*         var Precio = [];*/
/*         var total = 0;*/
/*         var NumeroP = $('#productos').length;*/
/*         var NumeroC = $('#cantidades').length;*/
/*         var numeroProducto = 1;*/
/* */
/* */
/*         function buscarCliente() {*/
/* */
/*             var id = $('#venta_cliente').val();*/
/* */
/*             $.ajax({*/
/*                 url: "{{ path('buscar_cliente_venta') }}",*/
/*                 data: ({id: id}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 success: function (data) {*/
/*                     if (data == null) {*/
/*                         alert('datos no encontrados');*/
/*                     } else {*/
/* */
/*                         $('#Nombre_cliente').val(data["nombre"]);*/
/*                         $('#Puntos_cliente').val(data["Puntos"]);*/
/*                         $('#venta_type2_mesa').focus();*/
/* */
/* */
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*         }*/
/* */
/*         function buscarProducto() {*/
/* */
/*             var nombre = $("#NombreProducto").val();*/
/* */
/*             $.ajax({*/
/*                 url: "{{path('buscar_producto')}}",*/
/*                 data: ({nombre_p: nombre}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 success: function (data) {*/
/*                     if (data == null) {*/
/*                         alert('datos no encontrados');*/
/*                     } else {*/
/*                         $("#PrecioProducto").val(data["precio"]);*/
/*                         $("#CantidadProducto").focus();*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function Agregar() {*/
/* */
/*             var nombreProducto = $('#NombreProducto').val();*/
/*             var cantidad = $('#CantidadProducto').val();*/
/*             var precio = $('#PrecioProducto').val(); */
/*             var ListaProductos = $('#productos');*/
/*             var ListaCantidades = $('#cantidades');   */
/*             */
/*             var NumeroSerie = "" + nombreProducto + numeroProducto;*/
/*             $('#CuerpoTabla').append(agregarProductoTabla(NumeroSerie,nombreProducto, precio, cantidad));*/
/*             total = $('#venta_valorTotal').val();*/
/*             total = parseInt(total) + parseInt(precio) * parseInt(cantidad);*/
/*             $('#venta_valorTotal').val(total);*/
/*             $('#NombreProducto').val("");*/
/*             $('#PrecioProducto').val("");*/
/*             $('#CantidadProducto').val("");*/
/*             $('#NombreProducto').focus();*/
/*             ListaProductos.data('prototype', '<input class="hidden" type="text" id="'+ NumeroSerie +'" name="venta[detalles][__name__][producto][nombre]" value="' + nombreProducto + '"/>');*/
/*             ListaCantidades.data('prototype', '<input class="hidden" type="text" id="venta_type2_detalles___name___cantidad" name="venta[detalles][__name__][cantidad]" value="' + cantidad + '"/>');*/
/*             var prototype = ListaProductos.data('prototype');*/
/*             var prototype2 = ListaCantidades.data('prototype');*/
/*             var newform = prototype.replace(/__name__/g, NumeroP);*/
/*             var newform2 = prototype2.replace(/__name__/g, NumeroC);*/
/* */
/*             NumeroP++;*/
/*             NumeroC++;*/
/*             var NewLi = $('<li class="hidden"></li>').append(newform);*/
/*             var NewLi2 = $('<li class="hidden"></li>').append(newform2);*/
/*             NewLi.appendTo(ListaProductos);*/
/*             NewLi2.appendTo(ListaCantidades);*/
/*          */
/*             Cantidades[NumeroSerie] = cantidad;*/
/*             Precio[NumeroSerie] = precio;*/
/*             numeroProducto ++;*/
/*         */
/*          */
/*          }*/
/* */
/*         function agregarProductoTabla(nombreS,nombre, precioUnitario, cantidad) {*/
/*             Productos =*/
/*                     "<tr id=" + 'producto' + nombreS + ">" +*/
/*                     "<td>" + nombre + "</td>" +*/
/*                     "<td>" + precioUnitario + "</td>" +*/
/*                     "<td>" + cantidad + "</td>" +*/
/*                     "<td>" + "<button id=" + nombreS + " type='button' onclick='quitarTablaProducto(this.id);'>ELIMINAR</button>" + "</td>" +*/
/*                     "</tr>";*/
/*             return Productos;*/
/*         }*/
/* */
/*         function quitarTablaProducto(clicked_id) {*/
/*             var id = clicked_id;*/
/*             $('#producto' + id).remove();*/
/*             $('#productos :input[id=' + id + ']').remove();*/
/* */
/*             var valorActual = $('#venta_valorTotal').val();*/
/*             $("#venta_valorTotal").val(valorActual - Precio[id] * Cantidades[id]);*/
/*             $("#CantidadProducto").focus();*/
/*         }*/
/* */
/* */
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
