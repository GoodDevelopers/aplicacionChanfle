<?php

/* InventarioBundle:producto:edit.html.twig */
class __TwigTemplate_9888bfda2f5213bbff6fff54c74552a42dc8774a14566624d7b1aaa6eef68fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:producto:edit.html.twig", 1);
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
        $__internal_c504bde982529218ee244ac02d488334a0000e84447f5f38c7431337e506eea0 = $this->env->getExtension("native_profiler");
        $__internal_c504bde982529218ee244ac02d488334a0000e84447f5f38c7431337e506eea0->enter($__internal_c504bde982529218ee244ac02d488334a0000e84447f5f38c7431337e506eea0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:producto:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c504bde982529218ee244ac02d488334a0000e84447f5f38c7431337e506eea0->leave($__internal_c504bde982529218ee244ac02d488334a0000e84447f5f38c7431337e506eea0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1a40c545bc43e8c7dcff954710c33fb483801cfdc21492eda21044d099c8e747 = $this->env->getExtension("native_profiler");
        $__internal_1a40c545bc43e8c7dcff954710c33fb483801cfdc21492eda21044d099c8e747->enter($__internal_1a40c545bc43e8c7dcff954710c33fb483801cfdc21492eda21044d099c8e747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_1a40c545bc43e8c7dcff954710c33fb483801cfdc21492eda21044d099c8e747->leave($__internal_1a40c545bc43e8c7dcff954710c33fb483801cfdc21492eda21044d099c8e747_prof);

    }

    // line 18
    public function block_body($context, array $blocks = array())
    {
        $__internal_92dcfff8c947d4bf6b9e109d160c4b2b17eee474d9daec5f0304be0087b7b43b = $this->env->getExtension("native_profiler");
        $__internal_92dcfff8c947d4bf6b9e109d160c4b2b17eee474d9daec5f0304be0087b7b43b->enter($__internal_92dcfff8c947d4bf6b9e109d160c4b2b17eee474d9daec5f0304be0087b7b43b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 19
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 marginTitulo text-center\">Editar Producto <span class=\"icon-productos\"></span></h1>
            </div>
        </div>

        ";
        // line 26
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

        <div class=\"row\">
            <div class=\"col-md-10 col-md-offset-1\">
                ";
        // line 31
        echo "                <div class=\"row\">
                    <div class=\"form-inline text-center\">
                        <div class=\"form-group\">
                            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label');
        echo "
                            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "precio", array()), 'label');
        echo "
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "precio", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                        <div class=\"form-group\">
                            ";
        // line 42
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoProducto", array()), 'label');
        echo "
                            ";
        // line 43
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "tipoProducto", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"form-inline text-center\">
                        <div class=\"form-group\">
                            ";
        // line 50
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'label');
        echo "
                            ";
        // line 51
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "descripcion", array()), 'widget', array("attr" => array("class" => "form-control", "rows" => "2", "cols" => "103", "placeholder" => "Ingrese la descripcion del producto, la cual sera mostrada en la pagina web")));
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
        // line 63
        echo "                </div>
                <div class=\"col-md-9\">
                    <div class=\"text-right\">
                        ";
        // line 67
        echo "                        <ul class=\"list-inline text-center\" style=\"display: inline-block\">
                            <li>
                                <button type=\"submit\" class=\"btn btn-lg btn-warning\">Editar <span class=\"glyphicon glyphicon-edit\"></span></button>
                            </li>
                            <li>
                                <a href=\"";
        // line 72
        echo $this->env->getExtension('routing')->getPath("producto_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        ";
        // line 80
        echo "
        <div class=\"row\" style=\"margin-top: 20px;\">
            <div class=\"col-md-12\">
                <div class=\"row\" id=\"itemsMaterias\">
                    ";
        // line 84
        $context["num"] = 0;
        // line 85
        echo "                    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "detallesProducto", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["detalle"]) {
            // line 86
            echo "                        ";
            $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
            // line 87
            echo "                        <div class=\"form-inline text-center\" id=\"";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\">
                            <div class=\"form-group\">
                                <label for=\"choiceMateria";
            // line 89
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\">Materia Prima:</label>
                                <select id=\"choiceMateria";
            // line 90
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\" name=\"choiceMateria";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\" required=\"required\" class=\"form-control\">
                                    <option value=\"\">Seleccione una opcion</option>
                                    ";
            // line 92
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["materias"]) ? $context["materias"] : $this->getContext($context, "materias")));
            foreach ($context['_seq'] as $context["_key"] => $context["materia"]) {
                // line 93
                echo "                                        ";
                if (($this->getAttribute($this->getAttribute($context["detalle"], "materiaPrima", array()), "id", array()) == $this->getAttribute($context["materia"], "id", array()))) {
                    // line 94
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "id", array()), "html", null, true);
                    echo "\" selected=\"selected\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "nombre", array()), "html", null, true);
                    echo "</option>
                                        ";
                } else {
                    // line 96
                    echo "                                            <option value=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "id", array()), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["materia"], "nombre", array()), "html", null, true);
                    echo "</option>
                                        ";
                }
                // line 98
                echo "                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['materia'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 99
            echo "                                </select>
                            </div>
                            <div class=\"form-group\">
                                <label for=\"cantidad";
            // line 102
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\">Cantidad:</label>
                                <input type=\"number\" id=\"cantidad";
            // line 103
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\" name=\"cantidad";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\" class=\"form-control\" required=\"required\" value=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["detalle"], "cantidadNecesaria", array()), "html", null, true);
            echo "\">
                            </div>
                            <div class=\"form-group\">
                                <button type=\"button\" role=\"button\" class=\"btn btn-danger\" id=\"quitar";
            // line 106
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\" name=\"quitar";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "\" onclick=\"quitar(this.id);\">Quitar <span class=\"glyphicon glyphicon-minus-sign\"></span></button>
                            </div>
                        </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['detalle'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 110
        echo "                </div>
            </div>
            <input type=\"hidden\" id=\"cantMaterias\" name=\"cantMaterias\" value=\"";
        // line 112
        echo twig_escape_filter($this->env, twig_length_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "detallesProducto", array())), "html", null, true);
        echo "\">
        </div>

        ";
        // line 115
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "



    </div>
";
        
        $__internal_92dcfff8c947d4bf6b9e109d160c4b2b17eee474d9daec5f0304be0087b7b43b->leave($__internal_92dcfff8c947d4bf6b9e109d160c4b2b17eee474d9daec5f0304be0087b7b43b_prof);

    }

    // line 122
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3897bb05af23de5672bcf94b0f1b245e5ee12d5e238ab28103cd2d1860cd637e = $this->env->getExtension("native_profiler");
        $__internal_3897bb05af23de5672bcf94b0f1b245e5ee12d5e238ab28103cd2d1860cd637e->enter($__internal_3897bb05af23de5672bcf94b0f1b245e5ee12d5e238ab28103cd2d1860cd637e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 123
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script>

        \$(document).on('ready', inicio());

        function inicio() {
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
        // line 141
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
        // line 142
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

        function quitar(idQuitar) {
            var id = \"\" + idQuitar;
            id = id.substr(6, id.length);
            \$('#' + id).remove();
        }

    </script>
";
        
        $__internal_3897bb05af23de5672bcf94b0f1b245e5ee12d5e238ab28103cd2d1860cd637e->leave($__internal_3897bb05af23de5672bcf94b0f1b245e5ee12d5e238ab28103cd2d1860cd637e_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:producto:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  321 => 142,  308 => 141,  286 => 123,  280 => 122,  267 => 115,  261 => 112,  257 => 110,  245 => 106,  235 => 103,  231 => 102,  226 => 99,  220 => 98,  212 => 96,  204 => 94,  201 => 93,  197 => 92,  190 => 90,  186 => 89,  180 => 87,  177 => 86,  172 => 85,  170 => 84,  164 => 80,  154 => 72,  147 => 67,  142 => 63,  128 => 51,  124 => 50,  114 => 43,  110 => 42,  104 => 39,  100 => 38,  94 => 35,  90 => 34,  85 => 31,  78 => 26,  69 => 19,  63 => 18,  42 => 4,  36 => 3,  11 => 1,);
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
/*                 <h1 class="h1 marginTitulo text-center">Editar Producto <span class="icon-productos"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {{ form_start(edit_form) }}*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-10 col-md-offset-1">*/
/*                 {#                {{ form_widget(form) }}#}*/
/*                 <div class="row">*/
/*                     <div class="form-inline text-center">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.nombre) }}*/
/*                             {{ form_widget(edit_form.nombre, {'attr':{'class' : 'form-control'}}) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.precio) }}*/
/*                             {{ form_widget(edit_form.precio, {'attr':{'class' : 'form-control'}}) }}*/
/*                         </div>*/
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.tipoProducto) }}*/
/*                             {{ form_widget(edit_form.tipoProducto, {'attr':{'class' : 'form-control'}}) }}*/
/*                         </div>*/
/*                     </div>*/
/*                 </div>*/
/*                 <div class="row">*/
/*                     <div class="form-inline text-center">*/
/*                         <div class="form-group">*/
/*                             {{ form_label(edit_form.descripcion) }}*/
/*                             {{ form_widget(edit_form.descripcion, {'attr':{'class' : 'form-control', 'rows' : '2', 'cols' : '103', 'placeholder' : 'Ingrese la descripcion del producto, la cual sera mostrada en la pagina web' }}) }}*/
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
/*                         <ul class="list-inline text-center" style="display: inline-block">*/
/*                             <li>*/
/*                                 <button type="submit" class="btn btn-lg btn-warning">Editar <span class="glyphicon glyphicon-edit"></span></button>*/
/*                             </li>*/
/*                             <li>*/
/*                                 <a href="{{ path('producto_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                             </li>*/
/*                         </ul>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*         {#        {{ form_widget(edit_form) }}#}*/
/* */
/*         <div class="row" style="margin-top: 20px;">*/
/*             <div class="col-md-12">*/
/*                 <div class="row" id="itemsMaterias">*/
/*                     {% set num = 0 %}*/
/*                     {% for detalle in producto.detallesProducto %}*/
/*                         {% set num = num + 1 %}*/
/*                         <div class="form-inline text-center" id="{{ num }}">*/
/*                             <div class="form-group">*/
/*                                 <label for="choiceMateria{{ num }}">Materia Prima:</label>*/
/*                                 <select id="choiceMateria{{ num }}" name="choiceMateria{{ num }}" required="required" class="form-control">*/
/*                                     <option value="">Seleccione una opcion</option>*/
/*                                     {% for materia in materias %}*/
/*                                         {% if detalle.materiaPrima.id == materia.id %}*/
/*                                             <option value="{{ materia.id }}" selected="selected">{{ materia.nombre }}</option>*/
/*                                         {% else %}*/
/*                                             <option value="{{ materia.id }}">{{ materia.nombre }}</option>*/
/*                                         {% endif %}*/
/*                                     {% endfor %}*/
/*                                 </select>*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <label for="cantidad{{ num }}">Cantidad:</label>*/
/*                                 <input type="number" id="cantidad{{ num }}" name="cantidad{{ num }}" class="form-control" required="required" value="{{ detalle.cantidadNecesaria }}">*/
/*                             </div>*/
/*                             <div class="form-group">*/
/*                                 <button type="button" role="button" class="btn btn-danger" id="quitar{{ num }}" name="quitar{{ num }}" onclick="quitar(this.id);">Quitar <span class="glyphicon glyphicon-minus-sign"></span></button>*/
/*                             </div>*/
/*                         </div>*/
/*                     {% endfor %}*/
/*                 </div>*/
/*             </div>*/
/*             <input type="hidden" id="cantMaterias" name="cantMaterias" value="{{ producto.detallesProducto|length }}">*/
/*         </div>*/
/* */
/*         {{ form_end(edit_form) }}*/
/* */
/* */
/* */
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
/*         function quitar(idQuitar) {*/
/*             var id = "" + idQuitar;*/
/*             id = id.substr(6, id.length);*/
/*             $('#' + id).remove();*/
/*         }*/
/* */
/*     </script>*/
/* {% endblock %}*/
