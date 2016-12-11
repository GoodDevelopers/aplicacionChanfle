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
        $__internal_77febd7b02a90649c611ccc2aba7d7221527ee5421d0f8c225d4f2275b66f79d = $this->env->getExtension("native_profiler");
        $__internal_77febd7b02a90649c611ccc2aba7d7221527ee5421d0f8c225d4f2275b66f79d->enter($__internal_77febd7b02a90649c611ccc2aba7d7221527ee5421d0f8c225d4f2275b66f79d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_77febd7b02a90649c611ccc2aba7d7221527ee5421d0f8c225d4f2275b66f79d->leave($__internal_77febd7b02a90649c611ccc2aba7d7221527ee5421d0f8c225d4f2275b66f79d_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29327e55655bf26d7cb8eb1f8f944a7f122eae86d186e89e9a08705c3964f4c5 = $this->env->getExtension("native_profiler");
        $__internal_29327e55655bf26d7cb8eb1f8f944a7f122eae86d186e89e9a08705c3964f4c5->enter($__internal_29327e55655bf26d7cb8eb1f8f944a7f122eae86d186e89e9a08705c3964f4c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .form-group{
            margin-right: 15px;
        }
        .form-inline{
            margin-bottom: 15px;
        }
        .h4{
            font-weight: bold;
        }
        .form-inline > .form-group > .total{
            font-weight: bold;
            width: 100px;
        }

        .form-inline > .form-group > .mesas{
            width: 90px;
        }

        .tamTotales{
            font-size: 16px;
        }
    </style>
";
        
        $__internal_29327e55655bf26d7cb8eb1f8f944a7f122eae86d186e89e9a08705c3964f4c5->leave($__internal_29327e55655bf26d7cb8eb1f8f944a7f122eae86d186e89e9a08705c3964f4c5_prof);

    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
        $__internal_e8b1bd3cea0eacc9b68156e4f18540fccce28090ad87a8efa164ba08e451df9c = $this->env->getExtension("native_profiler");
        $__internal_e8b1bd3cea0eacc9b68156e4f18540fccce28090ad87a8efa164ba08e451df9c->enter($__internal_e8b1bd3cea0eacc9b68156e4f18540fccce28090ad87a8efa164ba08e451df9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 31
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Registrar Venta <span class=\"fa fa-shopping-basket\"></span></h1>
            </div>
        </div>

        ";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"form-inline text-center\">
                <div class=\"form-group\"> 
                    ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mesa", array()), 'label');
        echo "
                    ";
        // line 44
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "mesa", array()), 'widget', array("attr" => array("class" => "mesas form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 47
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personasPorMesa", array()), 'label');
        echo "
                    ";
        // line 48
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "personasPorMesa", array()), 'widget', array("attr" => array("class" => "mesas form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoVenta", array()), 'label');
        echo "
                    ";
        // line 52
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoVenta", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Tipo de Venta")));
        echo "
                </div>
            </div>

            <div>
                <h4 class=\"h4\">Cliente:</h4>
            </div>
            <div class=\"form-inline text-center\">
                <div class=\"form-group\">
                    ";
        // line 61
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'label');
        echo "

                    <input type=\"number\" id=\"identificacion_cliente\" placeholder=\"Identificacion del Cliente\" class=\"form-control\" />

                    <button  type=\"button\" id=\"boton_buscar_cliente\" onclick=\"buscarCliente();\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                </div>
                <div class=\"form-group\">
                    <label for=\"Nombre_cliente\">Cliente:</label>
                    ";
        // line 69
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "cliente", array()), 'widget', array("attr" => array("class" => "form-control hidden", "placeholder" => "Nombre cliente")));
        echo "
                    <input type=\"text\" id=\"Nombre_cliente\" placeholder=\"Nombre del Cliente\" class=\"form-control\" disabled=\"true\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"Puntos_cliente\">Puntos Acumulados:</label>
                    <input type=\"text\" id=\"Puntos_cliente\" placeholder=\"Puntos Acumulados\" class=\"form-control\" disabled=\"true\"/>
                </div>
            </div>

            ";
        // line 78
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalles", array()), 'widget');
        echo "

            <div>
                <h4 class=\"h4\">Productos:</h4>
            </div>
            <div class=\"form-inline text-center\">
                <div class=\"form-group\">
                    <select id=\"TipoProductos\" name=\"thelist\" class=\"form-control\">
                        <option>Seleccione el Tipo</option>
                        ";
        // line 87
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tipos"]) ? $context["tipos"] : $this->getContext($context, "tipos")));
        foreach ($context['_seq'] as $context["_key"] => $context["Tipo"]) {
            // line 88
            echo "                            <option>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["Tipo"], "nombre", array()), "html", null, true);
            echo "</option>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['Tipo'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "                    </select>
                </div>

                ";
        // line 94
        echo "                <div class=\"form-group\">
                    <select id=\"ListaProductosC\" class=\"form-control\" disabled=\"true\">
                        <option>Seleccione un Producto</option>
                    </select>
                    <button type=\"button\" id=\"btnBuscarProducto\" class=\"btn btn-primary\" onclick=\"buscarProducto();\"> <span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                </div>

                <div class=\"form-group\">
                    <label for=\"PrecioProducto\">Valor Unit:</label>
                    <input type=\"number\" class=\"form-control\" placeholder=\"Valor Unitario\" id=\"PrecioProducto\" disabled=\"true\" style=\"width: 125px;\"/>
                </div>
                <div class=\"form-group\">
                    <label for=\"CantidadProducto\">Cantidad:</label>
                    <input type=\"number\" class=\"form-control\" placeholder=\"Cantidad\" id=\"CantidadProducto\" style=\"width: 100px;\"/>
                    <button class=\"btn btn-success\" type=\"button\" onclick=\"agregarProductoLogica();\">Agregar <span class=\"glyphicon glyphicon-plus-sign\"></span></button>
                </div>
            </div>
        </div>
        <ul id=\"productos\" class=\"detalles\" data-prototype=\"";
        // line 112
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalles", array()), "vars", array()), "prototype", array()), "producto", array()), "nombre", array()), 'widget'));
        echo "\" ></ul>
        <ul id=\"cantidades\" class=\"detalles\" data-prototype=\"";
        // line 113
        echo twig_escape_filter($this->env, $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "detalles", array()), "vars", array()), "prototype", array()), "cantidad", array()), 'widget'));
        echo "\" ></ul>

        <div class=\"row\">
            <table class=\"table table-bordered table-hover table-condensed text-center\" id=\"Tabla_Productos\">
                <thead>
                    <tr class=\"active info\">
                        <th>NOMBRE PRODUCTO</th>
                        <th>VALOR UNITARIO</th>
                        <th>CANTIDAD</th>
                        <th>VALOR TOTAL</th>
                        <th>ACCION</th>
                    </tr>
                </thead>
                <tbody id=\"CuerpoTabla\"></tbody>
            </table>
        </div>

        <div class=\"row\">
            <div class=\"form-inline text-center\">
                <div class=\"form-group\"> 
                    ";
        // line 133
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorTotal", array()), 'label');
        echo "
                    ";
        // line 134
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "valorTotal", array()), 'widget', array("attr" => array("class" => "total tamTotales form-control", "value" => "0", "readonly" => "true")));
        echo "
                </div>
                <div class=\"form-group\"> 
                    ";
        // line 137
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosVenta", array()), 'label');
        echo "
                    ";
        // line 138
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosVenta", array()), 'widget', array("attr" => array("class" => "total tamTotales form-control", "value" => "0", "readonly" => "true")));
        echo "
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"text-center\">
                <div class=\"form-group\">
                    <button  class=\"btn btn-lg btn-success\" type=\"submit\"> Registrar <span class=\"glyphicon glyphicon-floppy-saved\"></span></button>
                </div>
                <div class=\"form-group\">
                    <a class=\"btn btn-info\" role=\"button\" href=\"";
        // line 149
        echo $this->env->getExtension('routing')->getPath("venta_index");
        echo "\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                </div>
            </div>
        </div>
    </div>

    ";
        // line 155
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

";
        
        $__internal_e8b1bd3cea0eacc9b68156e4f18540fccce28090ad87a8efa164ba08e451df9c->leave($__internal_e8b1bd3cea0eacc9b68156e4f18540fccce28090ad87a8efa164ba08e451df9c_prof);

    }

    // line 158
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e19f2475e465afee233e04ab3c0415a79cd8db6ae29ce9722ed0499da8bbcf75 = $this->env->getExtension("native_profiler");
        $__internal_e19f2475e465afee233e04ab3c0415a79cd8db6ae29ce9722ed0499da8bbcf75->enter($__internal_e19f2475e465afee233e04ab3c0415a79cd8db6ae29ce9722ed0499da8bbcf75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        echo "    
    ";
        // line 159
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

            var id = \$('#identificacion_cliente').val();
            if (id == '') {
                swal({title: \"Identificacion no ingresada\", text: \"Debes ingresar un numero de identificacion\", type: \"error\", ButtonClass: \"error\", confirmButtonText: \"OK\"});
            } else {
                var btnBuscar = \$('#boton_buscar_cliente');
                \$.ajax({
                    url: \"";
        // line 184
        echo $this->env->getExtension('routing')->getPath("buscar_cliente_venta");
        echo "\",
                    data: ({id: id}),
                    method: 'POST',
                    dataType: \"json\",
                    beforeSend: function (data) {
                        btnBuscar.text('Buscando');
                    },
                    success: function (data) {
                        btnBuscar.text('Buscar');
                        btnBuscar.blur();
                        if (data === -1) {
                            swal({title: \"Cliente no encontrado\", text: \"El cliente no existe\", type: \"info\", confirmButtonText: \"OK\"});
                        } else {
                            \$('#venta_cliente').val(data[\"id\"]);
                            \$('#Nombre_cliente').val(data[\"nombre\"]);
                            \$('#Puntos_cliente').val(data[\"Puntos\"]);
                            \$('#TipoProductos').focus();
                        }
                    }
                });

            }
        }

        function buscarProducto() {

            var nombre = \$(\"#ListaProductosC\").val();
            var btnBuscar = \$('#btnBuscarProducto');
            \$.ajax({
                url: \"";
        // line 213
        echo $this->env->getExtension('routing')->getPath("buscar_cliente_venta");
        echo "\",
                data: ({id: id}),
                method: 'POST',
                dataType: \"json\",
                beforeSend: function (data) {
                    btnBuscar.text('Buscando');
                },
                success: function (data) {
                    btnBuscar.text('Buscar');
                    btnBuscar.blur();
                    if (data === -1) {
                        swal({title: \"Cliente no encontrado\", text: \"El cliente no existe\", type: \"info\", confirmButtonText: \"OK\"});
                    } else {
                        \$(\"#PrecioProducto\").val(data[\"precio\"]);
                        \$(\"#CantidadProducto\").focus();
                    }
                }
            });
        }



        function agregarProductoLogica() {

            var nombreProducto = \$('#ListaProductosC').val();
            var cantidad = \$('#CantidadProducto').val();
            if (cantidad == '') {
                swal({title: \"Cantidad no ingresada\", text: \"Debes ingresar una cantidad primero\", type: \"error\", confirmButtonText: \"OK\"});
            } else {
                var precio = \$('#PrecioProducto').val();
                var valorTotal = precio * cantidad;
                //obtiene las listas ocultas de productos y cantidades
                var ListaProductos = \$('#productos');
                var ListaCantidades = \$('#cantidades');
                //se crea la identificacion que tendra cada producto y campo
                var NumeroSerie = \"\" + nombreProducto + numeroProducto;
                //se agrega la nueva fila a la tabla
                \$('#CuerpoTabla').append(agregarProductoTabla(NumeroSerie, nombreProducto, precio, cantidad, valorTotal));
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
                ListaProductos.data('prototype', '<input class=\"hidden\" type=\"text\" id=\"' + NumeroSerie + '\" name=\"venta[detalles][__name__][producto][nombre]\" value=\"' + nombreProducto + '\"/>');
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
                numeroProducto++;
            }



        }

        function agregarProductoTabla(nombreS, nombre, precioUnitario, cantidad, valorTotal) {
            Productos =
                    \"<tr id=\" + 'producto' + nombreS + \">\" +
                    \"<td>\" + nombre + \"</td>\" +
                    \"<td>\" + precioUnitario + \"</td>\" +
                    \"<td>\" + cantidad + \"</td>\" +
                    \"<td>\" + valorTotal + \"</td>\" +
                    \"<td>\" + \"<button id=\" + nombreS + \" type='button' class='btn btn-danger' onclick='quitarTablaProducto(this.id);'>Remover <span class='glyphicon glyphicon-minus-sign'></span></button>\" + \"</td>\" +
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


        \$('#TipoProductos').on('change', function () {
            var tipo = \$('#TipoProductos').val();

            \$('#PrecioProducto').val(\"\");
            \$('#CantidadProducto').val(\"\");
            \$('#ListaProductosC').empty();
            buscarProductos(tipo);

        });


        function buscarProductos(tipo) {
            var listaProductosC = \$('#ListaProductosC');
            \$.ajax({
                url: \"";
        // line 326
        echo $this->env->getExtension('routing')->getPath("buscar_productos");
        echo "\",
                data: ({tipoP: tipo}),
                method: 'POST',
                dataType: \"json\",
                beforeSend: function () {
                    var primerOpt = \"<option>Cargando Productos</option>\";
                    listaProductosC.append(primerOpt);
                    listaProductosC.attr('disabled', true);
                },
                success: function (data) {
                    if (data == null) {
                        alert('datos no encontrados');
                    } else {
                        var nombres = data[\"productos\"];
                        nombres.sort();
                        listaProductosC.empty();
                        var primerOpt = \"<option>Seleccione un Producto</option>\";
                        listaProductosC.append(primerOpt);
                        for (var i = 0; i < nombres.length; i++) {
                            var newop = \"<option>\" + nombres[i] + \"</option>\";
                            listaProductosC.append(newop);
                            listaProductosC.attr('disabled', false);
                        }

                    }
                }
            });

        }

        function buscarProducto() {
            var nombre = \$(\"#ListaProductosC\").val();
            var btnBuscar = \$('#btnBuscarProducto');
            \$.ajax({
                url: \"";
        // line 360
        echo $this->env->getExtension('routing')->getPath("buscar_producto");
        echo "\",
                data: ({nombre_p: nombre}),
                method: 'POST',
                dataType: \"json\",
                beforeSend: function (data) {
                    btnBuscar.text('Buscando');
                },
                success: function (data) {
                    btnBuscar.text('Buscar');
                    btnBuscar.blur();
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

            var nombreProducto = \$('#ListaProductosC').val();
            var cantidad = \$('#CantidadProducto').val();
            if (cantidad == '') {
                swal({title: \"Cantidad no ingresada\", text: \"Debes ingresar una cantidad primero\", type: \"error\", confirmButtonText: \"OK\"});
            } else {
                var precio = \$('#PrecioProducto').val();
                var valorTotal = precio * cantidad;
                //obtiene las listas ocultas de productos y cantidades
                var ListaProductos = \$('#productos');
                var ListaCantidades = \$('#cantidades');
                //se crea la identificacion que tendra cada producto y campo
                var NumeroSerie = \"\" + nombreProducto + numeroProducto;
                //se agrega la nueva fila a la tabla
                \$('#CuerpoTabla').append(agregarProductoTabla(NumeroSerie, nombreProducto, precio, cantidad, valorTotal));
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
                ListaProductos.data('prototype', '<input class=\"hidden\" type=\"text\" id=\"' + NumeroSerie + '\" name=\"venta[detalles][__name__][producto][nombre]\" value=\"' + nombreProducto + '\"/>');
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
                numeroProducto++;
            }



        }

        function agregarProductoTabla(nombreS, nombre, precioUnitario, cantidad, valorTotal) {
            Productos =
                    \"<tr id=\" + 'producto' + nombreS + \">\" +
                    \"<td>\" + nombre + \"</td>\" +
                    \"<td>\" + precioUnitario + \"</td>\" +
                    \"<td>\" + cantidad + \"</td>\" +
                    \"<td>\" + valorTotal + \"</td>\" +
                    \"<td>\" + \"<button id=\" + nombreS + \" type='button' class='btn btn-danger' onclick='quitarTablaProducto(this.id);'>Remover <span class='glyphicon glyphicon-minus-sign'></span></button>\" + \"</td>\" +
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


        \$('#TipoProductos').on('change', function () {
            var tipo = \$('#TipoProductos').val();

            \$('#PrecioProducto').val(\"\");
            \$('#CantidadProducto').val(\"\");
            \$('#ListaProductosC').empty();
            buscarProductos(tipo);

        });


        function buscarProductos(tipo) {
            var listaProductosC = \$('#ListaProductosC');
            \$.ajax({
                url: \"";
        // line 472
        echo $this->env->getExtension('routing')->getPath("buscar_productos");
        echo "\",
                data: ({tipoP: tipo}),
                method: 'POST',
                dataType: \"json\",
                beforeSend: function () {
                    var primerOpt = \"<option>Cargando Productos</option>\";
                    listaProductosC.append(primerOpt);
                    listaProductosC.attr('disabled', true);
                },
                success: function (data) {
                    if (data == null) {
                        alert('datos no encontrados');
                    } else {
                        var nombres = data[\"productos\"];
                        nombres.sort();
                        listaProductosC.empty();
                        var primerOpt = \"<option>Seleccione un Producto</option>\";
                        listaProductosC.append(primerOpt);
                        for (var i = 0; i < nombres.length; i++) {
                            var newop = \"<option>\" + nombres[i] + \"</option>\";
                            listaProductosC.append(newop);
                            listaProductosC.attr('disabled', false);
                        }

                    }
                }
            });
        }

    </script>

";
        
        $__internal_e19f2475e465afee233e04ab3c0415a79cd8db6ae29ce9722ed0499da8bbcf75->leave($__internal_e19f2475e465afee233e04ab3c0415a79cd8db6ae29ce9722ed0499da8bbcf75_prof);

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
        return array (  617 => 472,  502 => 360,  465 => 326,  349 => 213,  317 => 184,  289 => 159,  281 => 158,  271 => 155,  262 => 149,  248 => 138,  244 => 137,  238 => 134,  234 => 133,  211 => 113,  207 => 112,  187 => 94,  182 => 90,  173 => 88,  169 => 87,  157 => 78,  145 => 69,  134 => 61,  122 => 52,  118 => 51,  112 => 48,  108 => 47,  102 => 44,  98 => 43,  90 => 38,  81 => 31,  75 => 30,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{parent()}}*/
/*     <style>*/
/*         .form-group{*/
/*             margin-right: 15px;*/
/*         }*/
/*         .form-inline{*/
/*             margin-bottom: 15px;*/
/*         }*/
/*         .h4{*/
/*             font-weight: bold;*/
/*         }*/
/*         .form-inline > .form-group > .total{*/
/*             font-weight: bold;*/
/*             width: 100px;*/
/*         }*/
/* */
/*         .form-inline > .form-group > .mesas{*/
/*             width: 90px;*/
/*         }*/
/* */
/*         .tamTotales{*/
/*             font-size: 16px;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Registrar Venta <span class="fa fa-shopping-basket"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {{ form_start(form)}}*/
/* */
/*         <div class="row">*/
/*             <div class="form-inline text-center">*/
/*                 <div class="form-group"> */
/*                     {{form_label(form.mesa)}}*/
/*                     {{form_widget(form.mesa,{'attr':{'class': 'mesas form-control'}})}}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{form_label(form.personasPorMesa)}}*/
/*                     {{form_widget(form.personasPorMesa,{'attr':{'class': 'mesas form-control'}})}}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{form_label(form.tipoVenta)}}*/
/*                     {{form_widget(form.tipoVenta,{'attr':{'class':'form-control', 'placeholder':'Tipo de Venta'}})}}*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div>*/
/*                 <h4 class="h4">Cliente:</h4>*/
/*             </div>*/
/*             <div class="form-inline text-center">*/
/*                 <div class="form-group">*/
/*                     {{form_label(form.cliente)}}*/
/* */
/*                     <input type="number" id="identificacion_cliente" placeholder="Identificacion del Cliente" class="form-control" />*/
/* */
/*                     <button  type="button" id="boton_buscar_cliente" onclick="buscarCliente();" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="Nombre_cliente">Cliente:</label>*/
/*                     {{form_widget(form.cliente , {'attr':{'class': 'form-control hidden', 'placeholder':'Nombre cliente'}})}}*/
/*                     <input type="text" id="Nombre_cliente" placeholder="Nombre del Cliente" class="form-control" disabled="true"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="Puntos_cliente">Puntos Acumulados:</label>*/
/*                     <input type="text" id="Puntos_cliente" placeholder="Puntos Acumulados" class="form-control" disabled="true"/>*/
/*                 </div>*/
/*             </div>*/
/* */
/*             {{ form_widget(form.detalles)}}*/
/* */
/*             <div>*/
/*                 <h4 class="h4">Productos:</h4>*/
/*             </div>*/
/*             <div class="form-inline text-center">*/
/*                 <div class="form-group">*/
/*                     <select id="TipoProductos" name="thelist" class="form-control">*/
/*                         <option>Seleccione el Tipo</option>*/
/*                         {% for Tipo in tipos %}*/
/*                             <option>{{Tipo.nombre}}</option>*/
/*                         {% endfor %}*/
/*                     </select>*/
/*                 </div>*/
/* */
/*                 {#               <label>Nombre Producto:</label><input type="text" placeholder="Nombre Producto" id="NombreProducto"/>#}*/
/*                 <div class="form-group">*/
/*                     <select id="ListaProductosC" class="form-control" disabled="true">*/
/*                         <option>Seleccione un Producto</option>*/
/*                     </select>*/
/*                     <button type="button" id="btnBuscarProducto" class="btn btn-primary" onclick="buscarProducto();"> <span class="glyphicon glyphicon-search"></span> Buscar</button>*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <label for="PrecioProducto">Valor Unit:</label>*/
/*                     <input type="number" class="form-control" placeholder="Valor Unitario" id="PrecioProducto" disabled="true" style="width: 125px;"/>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <label for="CantidadProducto">Cantidad:</label>*/
/*                     <input type="number" class="form-control" placeholder="Cantidad" id="CantidadProducto" style="width: 100px;"/>*/
/*                     <button class="btn btn-success" type="button" onclick="agregarProductoLogica();">Agregar <span class="glyphicon glyphicon-plus-sign"></span></button>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <ul id="productos" class="detalles" data-prototype="{{ form_widget(form.detalles.vars.prototype.producto.nombre)|e}}" ></ul>*/
/*         <ul id="cantidades" class="detalles" data-prototype="{{ form_widget(form.detalles.vars.prototype.cantidad)|e}}" ></ul>*/
/* */
/*         <div class="row">*/
/*             <table class="table table-bordered table-hover table-condensed text-center" id="Tabla_Productos">*/
/*                 <thead>*/
/*                     <tr class="active info">*/
/*                         <th>NOMBRE PRODUCTO</th>*/
/*                         <th>VALOR UNITARIO</th>*/
/*                         <th>CANTIDAD</th>*/
/*                         <th>VALOR TOTAL</th>*/
/*                         <th>ACCION</th>*/
/*                     </tr>*/
/*                 </thead>*/
/*                 <tbody id="CuerpoTabla"></tbody>*/
/*             </table>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="form-inline text-center">*/
/*                 <div class="form-group"> */
/*                     {{form_label(form.valorTotal)}}*/
/*                     {{form_widget(form.valorTotal,{'attr':{'class': 'total tamTotales form-control', 'value':'0', 'readonly' : 'true'}})}}*/
/*                 </div>*/
/*                 <div class="form-group"> */
/*                     {{form_label(form.puntosVenta)}}*/
/*                     {{form_widget(form.puntosVenta,{'attr':{'class': 'total tamTotales form-control', 'value':'0', 'readonly' : 'true'}})}}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="text-center">*/
/*                 <div class="form-group">*/
/*                     <button  class="btn btn-lg btn-success" type="submit"> Registrar <span class="glyphicon glyphicon-floppy-saved"></span></button>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     <a class="btn btn-info" role="button" href="{{ path('venta_index') }}">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/*     {{form_end(form)}}*/
/* */
/* {% endblock %}*/
/* {% block javascripts %}    */
/*     {{ parent() }}*/
/* */
/*     <script type="text/javascript">*/
/* */
/* //variables que se usan durante todo el proceso de ventas*/
/* // arrays asociativos que guardan los productos y cantidades agregados, se usan para recuperar rapidamente los datos y obtenerlos*/
/*         var Productos = [];*/
/*         var Cantidades = [];*/
/*         var Precio = [];*/
/*         var total = 0;*/
/*         //numero de productos y cantidades que se han agregado*/
/*         var NumeroP = $('#productos').length;*/
/*         var NumeroC = $('#cantidades').length;*/
/*         //numero que sirve para crear el id de serie de los procutos*/
/*         var numeroProducto = 1;*/
/* */
/* */
/*         function buscarCliente() {*/
/* */
/*             var id = $('#identificacion_cliente').val();*/
/*             if (id == '') {*/
/*                 swal({title: "Identificacion no ingresada", text: "Debes ingresar un numero de identificacion", type: "error", ButtonClass: "error", confirmButtonText: "OK"});*/
/*             } else {*/
/*                 var btnBuscar = $('#boton_buscar_cliente');*/
/*                 $.ajax({*/
/*                     url: "{{ path('buscar_cliente_venta') }}",*/
/*                     data: ({id: id}),*/
/*                     method: 'POST',*/
/*                     dataType: "json",*/
/*                     beforeSend: function (data) {*/
/*                         btnBuscar.text('Buscando');*/
/*                     },*/
/*                     success: function (data) {*/
/*                         btnBuscar.text('Buscar');*/
/*                         btnBuscar.blur();*/
/*                         if (data === -1) {*/
/*                             swal({title: "Cliente no encontrado", text: "El cliente no existe", type: "info", confirmButtonText: "OK"});*/
/*                         } else {*/
/*                             $('#venta_cliente').val(data["id"]);*/
/*                             $('#Nombre_cliente').val(data["nombre"]);*/
/*                             $('#Puntos_cliente').val(data["Puntos"]);*/
/*                             $('#TipoProductos').focus();*/
/*                         }*/
/*                     }*/
/*                 });*/
/* */
/*             }*/
/*         }*/
/* */
/*         function buscarProducto() {*/
/* */
/*             var nombre = $("#ListaProductosC").val();*/
/*             var btnBuscar = $('#btnBuscarProducto');*/
/*             $.ajax({*/
/*                 url: "{{ path('buscar_cliente_venta') }}",*/
/*                 data: ({id: id}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 beforeSend: function (data) {*/
/*                     btnBuscar.text('Buscando');*/
/*                 },*/
/*                 success: function (data) {*/
/*                     btnBuscar.text('Buscar');*/
/*                     btnBuscar.blur();*/
/*                     if (data === -1) {*/
/*                         swal({title: "Cliente no encontrado", text: "El cliente no existe", type: "info", confirmButtonText: "OK"});*/
/*                     } else {*/
/*                         $("#PrecioProducto").val(data["precio"]);*/
/*                         $("#CantidadProducto").focus();*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/* */
/* */
/*         function agregarProductoLogica() {*/
/* */
/*             var nombreProducto = $('#ListaProductosC').val();*/
/*             var cantidad = $('#CantidadProducto').val();*/
/*             if (cantidad == '') {*/
/*                 swal({title: "Cantidad no ingresada", text: "Debes ingresar una cantidad primero", type: "error", confirmButtonText: "OK"});*/
/*             } else {*/
/*                 var precio = $('#PrecioProducto').val();*/
/*                 var valorTotal = precio * cantidad;*/
/*                 //obtiene las listas ocultas de productos y cantidades*/
/*                 var ListaProductos = $('#productos');*/
/*                 var ListaCantidades = $('#cantidades');*/
/*                 //se crea la identificacion que tendra cada producto y campo*/
/*                 var NumeroSerie = "" + nombreProducto + numeroProducto;*/
/*                 //se agrega la nueva fila a la tabla*/
/*                 $('#CuerpoTabla').append(agregarProductoTabla(NumeroSerie, nombreProducto, precio, cantidad, valorTotal));*/
/*                 //se suma el valor de los productos añadidos*/
/*                 total = $('#venta_valorTotal').val();*/
/*                 total = parseInt(total) + parseInt(precio) * parseInt(cantidad);*/
/*                 $('#venta_valorTotal').val(total);*/
/*                 //se limpian los campos*/
/*                 $('#NombreProducto').val("");*/
/*                 $('#PrecioProducto').val("");*/
/*                 $('#CantidadProducto').val("");*/
/*                 $('#NombreProducto').focus();*/
/*                 //se asigna el nuevo protoype,numero de serie y valor que tendra el campo*/
/*                 ListaProductos.data('prototype', '<input class="hidden" type="text" id="' + NumeroSerie + '" name="venta[detalles][__name__][producto][nombre]" value="' + nombreProducto + '"/>');*/
/*                 ListaCantidades.data('prototype', '<input class="hidden" type="text" id="venta_type2_detalles___name___cantidad" name="venta[detalles][__name__][cantidad]" value="' + cantidad + '"/>');*/
/*                 //se obtiene el prototipo creado y se reemplazan las claves "name" con el indice */
/*                 var prototype = ListaProductos.data('prototype');*/
/*                 var prototype2 = ListaCantidades.data('prototype');*/
/*                 var newform = prototype.replace(/__name__/g, NumeroP);*/
/*                 var newform2 = prototype2.replace(/__name__/g, NumeroC);*/
/* */
/*                 NumeroP++;*/
/*                 NumeroC++;*/
/*                 //se asigna los campos creados a las listas ocultas de cantidades y productos*/
/*                 var NewLi = $('<li class="hidden"></li>').append(newform);*/
/*                 var NewLi2 = $('<li class="hidden"></li>').append(newform2);*/
/*                 NewLi.appendTo(ListaProductos);*/
/*                 NewLi2.appendTo(ListaCantidades);*/
/*                 //se guardan las cantidades con los identificadores de cada producto     */
/*                 Cantidades[NumeroSerie] = cantidad;*/
/*                 Precio[NumeroSerie] = precio;*/
/*                 numeroProducto++;*/
/*             }*/
/* */
/* */
/* */
/*         }*/
/* */
/*         function agregarProductoTabla(nombreS, nombre, precioUnitario, cantidad, valorTotal) {*/
/*             Productos =*/
/*                     "<tr id=" + 'producto' + nombreS + ">" +*/
/*                     "<td>" + nombre + "</td>" +*/
/*                     "<td>" + precioUnitario + "</td>" +*/
/*                     "<td>" + cantidad + "</td>" +*/
/*                     "<td>" + valorTotal + "</td>" +*/
/*                     "<td>" + "<button id=" + nombreS + " type='button' class='btn btn-danger' onclick='quitarTablaProducto(this.id);'>Remover <span class='glyphicon glyphicon-minus-sign'></span></button>" + "</td>" +*/
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
/*         $('#TipoProductos').on('change', function () {*/
/*             var tipo = $('#TipoProductos').val();*/
/* */
/*             $('#PrecioProducto').val("");*/
/*             $('#CantidadProducto').val("");*/
/*             $('#ListaProductosC').empty();*/
/*             buscarProductos(tipo);*/
/* */
/*         });*/
/* */
/* */
/*         function buscarProductos(tipo) {*/
/*             var listaProductosC = $('#ListaProductosC');*/
/*             $.ajax({*/
/*                 url: "{{path('buscar_productos')}}",*/
/*                 data: ({tipoP: tipo}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 beforeSend: function () {*/
/*                     var primerOpt = "<option>Cargando Productos</option>";*/
/*                     listaProductosC.append(primerOpt);*/
/*                     listaProductosC.attr('disabled', true);*/
/*                 },*/
/*                 success: function (data) {*/
/*                     if (data == null) {*/
/*                         alert('datos no encontrados');*/
/*                     } else {*/
/*                         var nombres = data["productos"];*/
/*                         nombres.sort();*/
/*                         listaProductosC.empty();*/
/*                         var primerOpt = "<option>Seleccione un Producto</option>";*/
/*                         listaProductosC.append(primerOpt);*/
/*                         for (var i = 0; i < nombres.length; i++) {*/
/*                             var newop = "<option>" + nombres[i] + "</option>";*/
/*                             listaProductosC.append(newop);*/
/*                             listaProductosC.attr('disabled', false);*/
/*                         }*/
/* */
/*                     }*/
/*                 }*/
/*             });*/
/* */
/*         }*/
/* */
/*         function buscarProducto() {*/
/*             var nombre = $("#ListaProductosC").val();*/
/*             var btnBuscar = $('#btnBuscarProducto');*/
/*             $.ajax({*/
/*                 url: "{{path('buscar_producto')}}",*/
/*                 data: ({nombre_p: nombre}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 beforeSend: function (data) {*/
/*                     btnBuscar.text('Buscando');*/
/*                 },*/
/*                 success: function (data) {*/
/*                     btnBuscar.text('Buscar');*/
/*                     btnBuscar.blur();*/
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
/* */
/*         function agregarProductoLogica() {*/
/* */
/*             var nombreProducto = $('#ListaProductosC').val();*/
/*             var cantidad = $('#CantidadProducto').val();*/
/*             if (cantidad == '') {*/
/*                 swal({title: "Cantidad no ingresada", text: "Debes ingresar una cantidad primero", type: "error", confirmButtonText: "OK"});*/
/*             } else {*/
/*                 var precio = $('#PrecioProducto').val();*/
/*                 var valorTotal = precio * cantidad;*/
/*                 //obtiene las listas ocultas de productos y cantidades*/
/*                 var ListaProductos = $('#productos');*/
/*                 var ListaCantidades = $('#cantidades');*/
/*                 //se crea la identificacion que tendra cada producto y campo*/
/*                 var NumeroSerie = "" + nombreProducto + numeroProducto;*/
/*                 //se agrega la nueva fila a la tabla*/
/*                 $('#CuerpoTabla').append(agregarProductoTabla(NumeroSerie, nombreProducto, precio, cantidad, valorTotal));*/
/*                 //se suma el valor de los productos añadidos*/
/*                 total = $('#venta_valorTotal').val();*/
/*                 total = parseInt(total) + parseInt(precio) * parseInt(cantidad);*/
/*                 $('#venta_valorTotal').val(total);*/
/*                 //se limpian los campos*/
/*                 $('#NombreProducto').val("");*/
/*                 $('#PrecioProducto').val("");*/
/*                 $('#CantidadProducto').val("");*/
/*                 $('#NombreProducto').focus();*/
/*                 //se asigna el nuevo protoype,numero de serie y valor que tendra el campo*/
/*                 ListaProductos.data('prototype', '<input class="hidden" type="text" id="' + NumeroSerie + '" name="venta[detalles][__name__][producto][nombre]" value="' + nombreProducto + '"/>');*/
/*                 ListaCantidades.data('prototype', '<input class="hidden" type="text" id="venta_type2_detalles___name___cantidad" name="venta[detalles][__name__][cantidad]" value="' + cantidad + '"/>');*/
/*                 //se obtiene el prototipo creado y se reemplazan las claves "name" con el indice */
/*                 var prototype = ListaProductos.data('prototype');*/
/*                 var prototype2 = ListaCantidades.data('prototype');*/
/*                 var newform = prototype.replace(/__name__/g, NumeroP);*/
/*                 var newform2 = prototype2.replace(/__name__/g, NumeroC);*/
/* */
/*                 NumeroP++;*/
/*                 NumeroC++;*/
/*                 //se asigna los campos creados a las listas ocultas de cantidades y productos*/
/*                 var NewLi = $('<li class="hidden"></li>').append(newform);*/
/*                 var NewLi2 = $('<li class="hidden"></li>').append(newform2);*/
/*                 NewLi.appendTo(ListaProductos);*/
/*                 NewLi2.appendTo(ListaCantidades);*/
/*                 //se guardan las cantidades con los identificadores de cada producto     */
/*                 Cantidades[NumeroSerie] = cantidad;*/
/*                 Precio[NumeroSerie] = precio;*/
/*                 numeroProducto++;*/
/*             }*/
/* */
/* */
/* */
/*         }*/
/* */
/*         function agregarProductoTabla(nombreS, nombre, precioUnitario, cantidad, valorTotal) {*/
/*             Productos =*/
/*                     "<tr id=" + 'producto' + nombreS + ">" +*/
/*                     "<td>" + nombre + "</td>" +*/
/*                     "<td>" + precioUnitario + "</td>" +*/
/*                     "<td>" + cantidad + "</td>" +*/
/*                     "<td>" + valorTotal + "</td>" +*/
/*                     "<td>" + "<button id=" + nombreS + " type='button' class='btn btn-danger' onclick='quitarTablaProducto(this.id);'>Remover <span class='glyphicon glyphicon-minus-sign'></span></button>" + "</td>" +*/
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
/*         $('#TipoProductos').on('change', function () {*/
/*             var tipo = $('#TipoProductos').val();*/
/* */
/*             $('#PrecioProducto').val("");*/
/*             $('#CantidadProducto').val("");*/
/*             $('#ListaProductosC').empty();*/
/*             buscarProductos(tipo);*/
/* */
/*         });*/
/* */
/* */
/*         function buscarProductos(tipo) {*/
/*             var listaProductosC = $('#ListaProductosC');*/
/*             $.ajax({*/
/*                 url: "{{path('buscar_productos')}}",*/
/*                 data: ({tipoP: tipo}),*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 beforeSend: function () {*/
/*                     var primerOpt = "<option>Cargando Productos</option>";*/
/*                     listaProductosC.append(primerOpt);*/
/*                     listaProductosC.attr('disabled', true);*/
/*                 },*/
/*                 success: function (data) {*/
/*                     if (data == null) {*/
/*                         alert('datos no encontrados');*/
/*                     } else {*/
/*                         var nombres = data["productos"];*/
/*                         nombres.sort();*/
/*                         listaProductosC.empty();*/
/*                         var primerOpt = "<option>Seleccione un Producto</option>";*/
/*                         listaProductosC.append(primerOpt);*/
/*                         for (var i = 0; i < nombres.length; i++) {*/
/*                             var newop = "<option>" + nombres[i] + "</option>";*/
/*                             listaProductosC.append(newop);*/
/*                             listaProductosC.attr('disabled', false);*/
/*                         }*/
/* */
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*     </script>*/
/* */
/* {% endblock %}*/
/* */
