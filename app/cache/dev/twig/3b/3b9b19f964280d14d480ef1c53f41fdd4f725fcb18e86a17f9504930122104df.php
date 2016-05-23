<?php

/* InventarioBundle:producto:new.html.twig */
class __TwigTemplate_da0a48e8ffe229794607c38960cfd24f1e367076f643332c1b3ee6b4e8a88297 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:producto:new.html.twig", 1);
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
        $__internal_27b3696eabe92d175af5838f8c45985888216cc9f3fdbff52c051b39e71d3a62 = $this->env->getExtension("native_profiler");
        $__internal_27b3696eabe92d175af5838f8c45985888216cc9f3fdbff52c051b39e71d3a62->enter($__internal_27b3696eabe92d175af5838f8c45985888216cc9f3fdbff52c051b39e71d3a62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:producto:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_27b3696eabe92d175af5838f8c45985888216cc9f3fdbff52c051b39e71d3a62->leave($__internal_27b3696eabe92d175af5838f8c45985888216cc9f3fdbff52c051b39e71d3a62_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_16e249eaa39325af8899ed93dde062bc9dc5b010e90f2023e429a6c60c07dd04 = $this->env->getExtension("native_profiler");
        $__internal_16e249eaa39325af8899ed93dde062bc9dc5b010e90f2023e429a6c60c07dd04->enter($__internal_16e249eaa39325af8899ed93dde062bc9dc5b010e90f2023e429a6c60c07dd04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <style>
        .form-group{
            margin-right: 15px;
        }
        .form-inline{
            margin-bottom: 20px;
        }
        textarea {
            resize: none;
        }
    </style>
";
        
        $__internal_16e249eaa39325af8899ed93dde062bc9dc5b010e90f2023e429a6c60c07dd04->leave($__internal_16e249eaa39325af8899ed93dde062bc9dc5b010e90f2023e429a6c60c07dd04_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_1f2eeb7789c8df331ef8eebe580663ccd0c51ce664c61cba2f31d2be5f79edec = $this->env->getExtension("native_profiler");
        $__internal_1f2eeb7789c8df331ef8eebe580663ccd0c51ce664c61cba2f31d2be5f79edec->enter($__internal_1f2eeb7789c8df331ef8eebe580663ccd0c51ce664c61cba2f31d2be5f79edec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 marginTitulo text-center\">Registrar Producto <span class=\"icon-productos\"></span></h1>
            </div>
        </div>

        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                ";
        // line 30
        echo "                <div class=\"row\">
                    <div class=\"form-inline text-center\">
                        <div class=\"form-group\">
                            ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label');
        echo "
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'label');
        echo "
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "precio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 41
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoProducto", array()), 'label');
        echo "
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "tipoProducto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-inline text-center\">
                        <div class=\"form-group\">
                            ";
        // line 49
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'label');
        echo "
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "2", "cols" => "103", "placeholder" => "Ingrese la descripcion del producto, la cual sera mostrada en la pagina web")));
        echo "
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-8 col-md-offset-2\">
                <div class=\"col-md-3\">
                    <button type=\"button\" role=\"button\" class=\"btn btn-primary\" onclick=\"agregarItemMateria()\">Agregar Materia Prima <span class=\"glyphicon glyphicon-plus-sign\"></span></button>
                        ";
        // line 62
        echo "                </div>
                <div class=\"col-md-9\">
                    <div class=\"text-right\">
                        ";
        // line 66
        echo "                        <button type=\"submit\" class=\"btn btn-lg btn-success\">Registrar <span class=\"glyphicon glyphicon-floppy-saved\"></span></button>


                        <ul class=\"list-inline\" style=\"display: inline-block\">
                            <li>
                                <a href=\"";
        // line 71
        echo $this->env->getExtension('routing')->getPath("producto_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-md-12\">
                <div class=\"row\" id=\"itemsMaterias\">
                    <div class=\"form-inline text-center\" id=\"1\">
                        <div class=\"form-group\">
                            <label for=\"choiceMateria1\">Materia Prima:</label>
                            <select id=\"choiceMateria1\" name=\"choiceMateria1\" required=\"required\" class=\"form-control\">
                                <option value=\"\" selected=\"selected\">Seleccione una opcion</option>
                                ";
        // line 86
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materias"]) ? $context["materias"] : $this->getContext($context, "materias")));
        foreach ($context['_seq'] as $context["_key"] => $context["materia"]) {
            // line 87
            echo "                                    <option value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "nombre", array()), "html", null, true);
            echo "</option>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "                            </select>
                        </div>
                        <div class=\"form-group\">
                            <label for=\"cantidad1\">Cantidad:</label>
                            <input type=\"number\" id=\"cantidad1\" name=\"cantidad1\" class=\"form-control\" required=\"required\">
                        </div>
                        <div class=\"form-group\">
                            <button type=\"button\" role=\"button\" class=\"btn btn-danger\" id=\"quitar1\" name=\"quitar1\" onclick=\"quitar(this.id);\">Quitar <span class=\"glyphicon glyphicon-minus-sign\"></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <input type=\"hidden\" id=\"cantMaterias\" name=\"cantMaterias\" value=\"1\">
        </div>
        ";
        // line 103
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>
";
        
        $__internal_1f2eeb7789c8df331ef8eebe580663ccd0c51ce664c61cba2f31d2be5f79edec->leave($__internal_1f2eeb7789c8df331ef8eebe580663ccd0c51ce664c61cba2f31d2be5f79edec_prof);

    }

    // line 107
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_19bec50eefa118a635816dbb7fa7982f8cde77f270c3c792c33febc0fdfc2378 = $this->env->getExtension("native_profiler");
        $__internal_19bec50eefa118a635816dbb7fa7982f8cde77f270c3c792c33febc0fdfc2378->enter($__internal_19bec50eefa118a635816dbb7fa7982f8cde77f270c3c792c33febc0fdfc2378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 108
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        \$(document).on('ready', inicio());

        function inicio() {
        }

        //Funcion vieja (no usada)
        function llenarMaterias() {
            var choice = \$('#choiceMateria');
            var opcionDefault = \$('#opcionDefault');
            \$.ajax({
                url: \"";
        // line 121
        echo $this->env->getExtension('routing')->getPath("getMaterias");
        echo "\",
                method: 'POST',
                dataType: \"json\",
                beforeSend: function () {
                    choice.prop('disabled', 'disabled');
                    opcionDefault.text('Cargando...');
                },
                success: function (data) {
                    console.log('DATA:');
                    console.log(data);
                    console.log('------');
                    if (data === -1) {
                        console.log('No encontro nada');
                    } else {
                        var html = \"\";
                        for (var i = 0; i < data.length; i++) {
                            html = html + \"<option value='\" + data[i]['id'] + \"'>\" + data[i]['nombre'] + \"</option>\";
                        }
                        choice.append(html);
                        opcionDefault.text('Seleccione una opcion');
                        choice.prop('disabled', false);
                    }
                }
            });
        }

        function agregarItemMateria() {
            var items = \$('#itemsMaterias');
            var campoOculto = \$('#cantMaterias');
            var cant = (parseInt(campoOculto.val()) + 1);
            var nuevoItem =
                    \"<div class='form-inline text-center' id='\" + cant + \"'>\" +
                    \"<div class='form-group'>\" +
                    \"<label for='choiceMateria\" + cant + \"'>Materia Prima:&nbsp;</label>\" +
                    \"<select id='choiceMateria\" + cant + \"' name='choiceMateria\" + cant + \"' required='required' class='form-control'>\" +
                    \"<option value='' selected='selected'>Seleccione una opcion</option>\";
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["materias"]) ? $context["materias"] : $this->getContext($context, "materias")));
        foreach ($context['_seq'] as $context["_key"] => $context["materia"]) {
            echo " nuevoItem += \"<option value='";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "id", array()), "html", null, true);
            echo "'>";
            echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "nombre", array()), "html", null, true);
            echo "</option>\";";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materia'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 158
        echo "            nuevoItem +=
                    \"</select>\" +
                    \"</div>\" +
                    \"<div class='form-group'>\" +
                    \"<label for='cantidad\" + cant + \"'>&nbsp;Cantidad:&nbsp;</label>\" +
                    \"<input type='number' id='cantidad\" + cant + \"' name='cantidad\" + cant + \"' class='form-control' required='required'>\" +
                    \"</div>\" +
                    \"<div class='form-group'>\" +
                    \"<span>&nbsp;</span>\" +
                    \"<button type='button' role='button' class='btn btn-danger' id='quitar\" + cant + \"' name='quitar\" + cant + \"' onclick='quitar(this.id);'>Quitar <span class='glyphicon glyphicon-minus-sign'></span></button>\" +
                    \"<span>&nbsp;</span>\" +
                    \"</div>\" +
                    \"</div>\";
            items.append(nuevoItem);
            campoOculto.val(cant);
        }

        function quitar(idQuitar){
            var id = \"\" + idQuitar;
            id = id.substr(6, id.length);
            \$('#' + id).remove();
        }

    </script>
";
        
        $__internal_19bec50eefa118a635816dbb7fa7982f8cde77f270c3c792c33febc0fdfc2378->leave($__internal_19bec50eefa118a635816dbb7fa7982f8cde77f270c3c792c33febc0fdfc2378_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:producto:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  287 => 158,  274 => 157,  235 => 121,  218 => 108,  212 => 107,  202 => 103,  186 => 89,  175 => 87,  171 => 86,  153 => 71,  146 => 66,  141 => 62,  127 => 50,  123 => 49,  113 => 42,  109 => 41,  103 => 38,  99 => 37,  93 => 34,  89 => 33,  84 => 30,  78 => 26,  69 => 19,  63 => 18,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <style>*/
/*         .form-group{*/
/*             margin-right: 15px;*/
/*         }*/
/*         .form-inline{*/
/*             margin-bottom: 20px;*/
/*         }*/
/*         textarea {*/
/*             resize: none;*/
/*         }*/
/*     </style>*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 marginTitulo text-center">Registrar Producto <span class="icon-productos"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {{ form_start(form) }}*/
/*         <div class="row">*/
/*             <div class="col-md-10 col-md-offset-1">*/
/*                 {#                {{ form_widget(form) }}#}*/
/*                 <div class="row">*/
/*                     <div class="form-inline text-center">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.nombre) }}*/
/*                             {{ form_widget(form.nombre, {'attr':{'class' : 'form-control'}}) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.precio) }}*/
/*                             {{ form_widget(form.precio, {'attr':{'class' : 'form-control'}}) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.tipoProducto) }}*/
/*                             {{ form_widget(form.tipoProducto, {'attr':{'class' : 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="form-inline text-center">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(form.descripcion) }}*/
/*                             {{ form_widget(form.descripcion, {'attr':{'class' : 'form-control', 'rows' : '2', 'cols' : '103', 'placeholder' : 'Ingrese la descripcion del producto, la cual sera mostrada en la pagina web' }}) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-8 col-md-offset-2">*/
/*                 <div class="col-md-3">*/
/*                     <button type="button" role="button" class="btn btn-primary" onclick="agregarItemMateria()">Agregar Materia Prima <span class="glyphicon glyphicon-plus-sign"></span></button>*/
/*                         {#                <button type="button" role="button" class="btn btn-danger">Quitar <span class="glyphicon glyphicon-minus-sign"></span></button>#}*/
/*                 </div>*/
/*                 <div class="col-md-9">*/
/*                     <div class="text-right">*/
/*                         {#                <input type="submit" value="Registrar" />#}*/
/*                         <button type="submit" class="btn btn-lg btn-success">Registrar <span class="glyphicon glyphicon-floppy-saved"></span></button>*/
/* */
/* */
/*                         <ul class="list-inline" style="display: inline-block">*/
/*                             <li>*/
/*                                 <a href="{{ path('producto_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row" style="margin-top: 20px;">*/
/*             <div class="col-md-12">*/
/*                 <div class="row" id="itemsMaterias">*/
/*                     <div class="form-inline text-center" id="1">*/
/*                         <div class="form-group">*/
/*                             <label for="choiceMateria1">Materia Prima:</label>*/
/*                             <select id="choiceMateria1" name="choiceMateria1" required="required" class="form-control">*/
/*                                 <option value="" selected="selected">Seleccione una opcion</option>*/
/*                                 {% for materia in materias %}*/
/*                                     <option value="{{ materia.id }}">{{ materia.nombre }}</option>*/
/*                                 {% endfor %}*/
/*                             </select>*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <label for="cantidad1">Cantidad:</label>*/
/*                             <input type="number" id="cantidad1" name="cantidad1" class="form-control" required="required">*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             <button type="button" role="button" class="btn btn-danger" id="quitar1" name="quitar1" onclick="quitar(this.id);">Quitar <span class="glyphicon glyphicon-minus-sign"></span></button>*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*             <input type="hidden" id="cantMaterias" name="cantMaterias" value="1">*/
/*         </div>*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script>*/
/* */
/*         $(document).on('ready', inicio());*/
/* */
/*         function inicio() {*/
/*         }*/
/* */
/*         //Funcion vieja (no usada)*/
/*         function llenarMaterias() {*/
/*             var choice = $('#choiceMateria');*/
/*             var opcionDefault = $('#opcionDefault');*/
/*             $.ajax({*/
/*                 url: "{{ path('getMaterias') }}",*/
/*                 method: 'POST',*/
/*                 dataType: "json",*/
/*                 beforeSend: function () {*/
/*                     choice.prop('disabled', 'disabled');*/
/*                     opcionDefault.text('Cargando...');*/
/*                 },*/
/*                 success: function (data) {*/
/*                     console.log('DATA:');*/
/*                     console.log(data);*/
/*                     console.log('------');*/
/*                     if (data === -1) {*/
/*                         console.log('No encontro nada');*/
/*                     } else {*/
/*                         var html = "";*/
/*                         for (var i = 0; i < data.length; i++) {*/
/*                             html = html + "<option value='" + data[i]['id'] + "'>" + data[i]['nombre'] + "</option>";*/
/*                         }*/
/*                         choice.append(html);*/
/*                         opcionDefault.text('Seleccione una opcion');*/
/*                         choice.prop('disabled', false);*/
/*                     }*/
/*                 }*/
/*             });*/
/*         }*/
/* */
/*         function agregarItemMateria() {*/
/*             var items = $('#itemsMaterias');*/
/*             var campoOculto = $('#cantMaterias');*/
/*             var cant = (parseInt(campoOculto.val()) + 1);*/
/*             var nuevoItem =*/
/*                     "<div class='form-inline text-center' id='" + cant + "'>" +*/
/*                     "<div class='form-group'>" +*/
/*                     "<label for='choiceMateria" + cant + "'>Materia Prima:&nbsp;</label>" +*/
/*                     "<select id='choiceMateria" + cant + "' name='choiceMateria" + cant + "' required='required' class='form-control'>" +*/
/*                     "<option value='' selected='selected'>Seleccione una opcion</option>";*/
/*             {% for materia in materias %} nuevoItem += "<option value='{{ materia.id }}'>{{ materia.nombre }}</option>";{% endfor %}*/
/*             nuevoItem +=*/
/*                     "</select>" +*/
/*                     "</div>" +*/
/*                     "<div class='form-group'>" +*/
/*                     "<label for='cantidad" + cant + "'>&nbsp;Cantidad:&nbsp;</label>" +*/
/*                     "<input type='number' id='cantidad" + cant + "' name='cantidad" + cant + "' class='form-control' required='required'>" +*/
/*                     "</div>" +*/
/*                     "<div class='form-group'>" +*/
/*                     "<span>&nbsp;</span>" +*/
/*                     "<button type='button' role='button' class='btn btn-danger' id='quitar" + cant + "' name='quitar" + cant + "' onclick='quitar(this.id);'>Quitar <span class='glyphicon glyphicon-minus-sign'></span></button>" +*/
/*                     "<span>&nbsp;</span>" +*/
/*                     "</div>" +*/
/*                     "</div>";*/
/*             items.append(nuevoItem);*/
/*             campoOculto.val(cant);*/
/*         }*/
/* */
/*         function quitar(idQuitar){*/
/*             var id = "" + idQuitar;*/
/*             id = id.substr(6, id.length);*/
/*             $('#' + id).remove();*/
/*         }*/
/* */
/*     </script>*/
/* {% endblock %}*/
