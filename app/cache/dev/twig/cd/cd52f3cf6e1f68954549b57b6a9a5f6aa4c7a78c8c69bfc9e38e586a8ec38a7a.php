<?php

/* venta/new.html.twig */
class __TwigTemplate_1864af20dcc9b60b9fa51e41748b663697de0e7743678de1f365ae4e4495dd33 extends Twig_Template
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
        $__internal_7ac3c0d3b9f21ebc6a617b1c96c5871be557c4cab3c19aaa65e071a9e3caf795 = $this->env->getExtension("native_profiler");
        $__internal_7ac3c0d3b9f21ebc6a617b1c96c5871be557c4cab3c19aaa65e071a9e3caf795->enter($__internal_7ac3c0d3b9f21ebc6a617b1c96c5871be557c4cab3c19aaa65e071a9e3caf795_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7ac3c0d3b9f21ebc6a617b1c96c5871be557c4cab3c19aaa65e071a9e3caf795->leave($__internal_7ac3c0d3b9f21ebc6a617b1c96c5871be557c4cab3c19aaa65e071a9e3caf795_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_8af60ae31f6dc4c479b55b299cc5720e080c7d50815dff51a543eab21606aff4 = $this->env->getExtension("native_profiler");
        $__internal_8af60ae31f6dc4c479b55b299cc5720e080c7d50815dff51a543eab21606aff4->enter($__internal_8af60ae31f6dc4c479b55b299cc5720e080c7d50815dff51a543eab21606aff4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "

    <link rel=\"stylesheet\" href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/ventas/css/EstiloVentas.css"), "html", null, true);
        echo "\" />
";
        
        $__internal_8af60ae31f6dc4c479b55b299cc5720e080c7d50815dff51a543eab21606aff4->leave($__internal_8af60ae31f6dc4c479b55b299cc5720e080c7d50815dff51a543eab21606aff4_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_22e13aac8cfcf0d37c4e4b0fd2630901fa545f43c5f3390b659a393f4ec97fde = $this->env->getExtension("native_profiler");
        $__internal_22e13aac8cfcf0d37c4e4b0fd2630901fa545f43c5f3390b659a393f4ec97fde->enter($__internal_22e13aac8cfcf0d37c4e4b0fd2630901fa545f43c5f3390b659a393f4ec97fde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        <button class=\"btn-success\" type=\"button\" onclick=\"agregarProductoLogica();\">Agregar Producto</button>

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
        
        $__internal_22e13aac8cfcf0d37c4e4b0fd2630901fa545f43c5f3390b659a393f4ec97fde->leave($__internal_22e13aac8cfcf0d37c4e4b0fd2630901fa545f43c5f3390b659a393f4ec97fde_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6759067568294321bac2f7108cea660c9ee0b1e59efac639de3d0d379762b93f = $this->env->getExtension("native_profiler");
        $__internal_6759067568294321bac2f7108cea660c9ee0b1e59efac639de3d0d379762b93f->enter($__internal_6759067568294321bac2f7108cea660c9ee0b1e59efac639de3d0d379762b93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
    ";
        // line 80
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

    <script type=\"text/javascript\">
//variables que se usan durante todo el proceso de ventas
// arrays asociativos que guardan los productos y cantidades agregados, se usan para recuperar rapidamente los datos y obtenerlos
        var Productos = [];
        var Cantidades = [];
        var Precio = [];
        var total = 0;
 //numero de productos y cantidades que se han agregado
        var NumeroP = \$('#productos').length;
        var NumeroC = \$('#cantidades').length;
 //numero que sirve para crear el id de serie de los procutos
        var numeroProducto = 1;


        function buscarCliente() {

            var id = \$('#venta_cliente').val();

            \$.ajax({
                url: \"";
        // line 101
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
        // line 126
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

        function agregarProductoLogica() {

            var nombreProducto = \$('#NombreProducto').val();
            var cantidad = \$('#CantidadProducto').val();
            var precio = \$('#PrecioProducto').val();
            //obtiene las listas ocultas de productos y cantidades
            var ListaProductos = \$('#productos');
            var ListaCantidades = \$('#cantidades');   
            //se crea la identificacion que tendra cada producto y campo
            var NumeroSerie = \"\" + nombreProducto + numeroProducto;
            //se agrega la nueva fila a la tabla
            \$('#CuerpoTabla').append(agregarProductoTabla(NumeroSerie,nombreProducto, precio, cantidad));
            //se suma el valor de los productos añadidos
            total = \$('#venta_valorTotal').val();
            total = parseInt(total) + parseInt(precio) * parseInt(cantidad);
            \$('#venta_valorTotal').val(total);
            //se limpian los campos
            \$('#NombreProducto').val(\"\");
            \$('#PrecioProducto').val(\"\");
            \$('#CantidadProducto').val(\"\");
            \$('#NombreProducto').focus();
            //se asigna el nuevo protoype,numero de serie y valor que tendra el campo
            ListaProductos.data('prototype', '<input class=\"hidden\" type=\"text\" id=\"'+ NumeroSerie +'\" name=\"venta[detalles][__name__][producto][nombre]\" value=\"' + nombreProducto + '\"/>');
            ListaCantidades.data('prototype', '<input class=\"hidden\" type=\"text\" id=\"venta_type2_detalles___name___cantidad\" name=\"venta[detalles][__name__][cantidad]\" value=\"' + cantidad + '\"/>');
            //se obtiene el prototipo creado y se reemplazan las claves \"name\" con el indice 
            var prototype = ListaProductos.data('prototype');
            var prototype2 = ListaCantidades.data('prototype');
            var newform = prototype.replace(/__name__/g, NumeroP);
            var newform2 = prototype2.replace(/__name__/g, NumeroC);

            NumeroP++;
            NumeroC++;
            //se asigna los campos creados a las listas ocultas de cantidades y productos
            var NewLi = \$('<li class=\"hidden\"></li>').append(newform);
            var NewLi2 = \$('<li class=\"hidden\"></li>').append(newform2);
            NewLi.appendTo(ListaProductos);
            NewLi2.appendTo(ListaCantidades);
            //se guardan las cantidades con los identificadores de cada producto     
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
            //se obtiene el id del boton presionado, que es igual al campo y a la fila que se va a remover
            var id = clicked_id;
            //removiendpo fila
            \$('#producto' + id).remove();
            //removiendo campo con el id
            \$('#productos :input[id=' + id + ']').remove();
            // se resta las cantidades de los productos eliminados, seleccionandolo del array que ayuda a recuperar datos
            var valorActual = \$('#venta_valorTotal').val();
            \$(\"#venta_valorTotal\").val(valorActual - Precio[id] * Cantidades[id]);
            \$(\"#CantidadProducto\").focus();
        }



    </script>

";
        
        $__internal_6759067568294321bac2f7108cea660c9ee0b1e59efac639de3d0d379762b93f->leave($__internal_6759067568294321bac2f7108cea660c9ee0b1e59efac639de3d0d379762b93f_prof);

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
        return array (  252 => 126,  224 => 101,  200 => 80,  192 => 79,  181 => 75,  175 => 72,  167 => 67,  163 => 66,  159 => 65,  155 => 64,  134 => 46,  130 => 45,  117 => 35,  110 => 31,  106 => 30,  101 => 28,  97 => 27,  93 => 26,  89 => 25,  78 => 17,  74 => 16,  69 => 14,  63 => 10,  57 => 9,  48 => 6,  42 => 4,  36 => 3,  11 => 1,);
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
/*         <button class="btn-success" type="button" onclick="agregarProductoLogica();">Agregar Producto</button>*/
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
/* //variables que se usan durante todo el proceso de ventas*/
/* // arrays asociativos que guardan los productos y cantidades agregados, se usan para recuperar rapidamente los datos y obtenerlos*/
/*         var Productos = [];*/
/*         var Cantidades = [];*/
/*         var Precio = [];*/
/*         var total = 0;*/
/*  //numero de productos y cantidades que se han agregado*/
/*         var NumeroP = $('#productos').length;*/
/*         var NumeroC = $('#cantidades').length;*/
/*  //numero que sirve para crear el id de serie de los procutos*/
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
/*         function agregarProductoLogica() {*/
/* */
/*             var nombreProducto = $('#NombreProducto').val();*/
/*             var cantidad = $('#CantidadProducto').val();*/
/*             var precio = $('#PrecioProducto').val();*/
/*             //obtiene las listas ocultas de productos y cantidades*/
/*             var ListaProductos = $('#productos');*/
/*             var ListaCantidades = $('#cantidades');   */
/*             //se crea la identificacion que tendra cada producto y campo*/
/*             var NumeroSerie = "" + nombreProducto + numeroProducto;*/
/*             //se agrega la nueva fila a la tabla*/
/*             $('#CuerpoTabla').append(agregarProductoTabla(NumeroSerie,nombreProducto, precio, cantidad));*/
/*             //se suma el valor de los productos añadidos*/
/*             total = $('#venta_valorTotal').val();*/
/*             total = parseInt(total) + parseInt(precio) * parseInt(cantidad);*/
/*             $('#venta_valorTotal').val(total);*/
/*             //se limpian los campos*/
/*             $('#NombreProducto').val("");*/
/*             $('#PrecioProducto').val("");*/
/*             $('#CantidadProducto').val("");*/
/*             $('#NombreProducto').focus();*/
/*             //se asigna el nuevo protoype,numero de serie y valor que tendra el campo*/
/*             ListaProductos.data('prototype', '<input class="hidden" type="text" id="'+ NumeroSerie +'" name="venta[detalles][__name__][producto][nombre]" value="' + nombreProducto + '"/>');*/
/*             ListaCantidades.data('prototype', '<input class="hidden" type="text" id="venta_type2_detalles___name___cantidad" name="venta[detalles][__name__][cantidad]" value="' + cantidad + '"/>');*/
/*             //se obtiene el prototipo creado y se reemplazan las claves "name" con el indice */
/*             var prototype = ListaProductos.data('prototype');*/
/*             var prototype2 = ListaCantidades.data('prototype');*/
/*             var newform = prototype.replace(/__name__/g, NumeroP);*/
/*             var newform2 = prototype2.replace(/__name__/g, NumeroC);*/
/* */
/*             NumeroP++;*/
/*             NumeroC++;*/
/*             //se asigna los campos creados a las listas ocultas de cantidades y productos*/
/*             var NewLi = $('<li class="hidden"></li>').append(newform);*/
/*             var NewLi2 = $('<li class="hidden"></li>').append(newform2);*/
/*             NewLi.appendTo(ListaProductos);*/
/*             NewLi2.appendTo(ListaCantidades);*/
/*             //se guardan las cantidades con los identificadores de cada producto     */
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
/*             //se obtiene el id del boton presionado, que es igual al campo y a la fila que se va a remover*/
/*             var id = clicked_id;*/
/*             //removiendpo fila*/
/*             $('#producto' + id).remove();*/
/*             //removiendo campo con el id*/
/*             $('#productos :input[id=' + id + ']').remove();*/
/*             // se resta las cantidades de los productos eliminados, seleccionandolo del array que ayuda a recuperar datos*/
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
