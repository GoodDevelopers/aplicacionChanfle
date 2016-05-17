<?php

/* UsuariosBundle:empleado:new.html.twig */
class __TwigTemplate_446037880fc6eb97564d18043a443826a28ea29808de52cf29fa8892aef6bd4c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:empleado:new.html.twig", 1);
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
        $__internal_484ee9e37e097162da27501eafe1cfadc359dee0b21871e010ce5821daf1d7e0 = $this->env->getExtension("native_profiler");
        $__internal_484ee9e37e097162da27501eafe1cfadc359dee0b21871e010ce5821daf1d7e0->enter($__internal_484ee9e37e097162da27501eafe1cfadc359dee0b21871e010ce5821daf1d7e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:empleado:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_484ee9e37e097162da27501eafe1cfadc359dee0b21871e010ce5821daf1d7e0->leave($__internal_484ee9e37e097162da27501eafe1cfadc359dee0b21871e010ce5821daf1d7e0_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_32aec79ea5a8701ce87e746b39daf83b0a960270e6aa2680945af81cc411c37a = $this->env->getExtension("native_profiler");
        $__internal_32aec79ea5a8701ce87e746b39daf83b0a960270e6aa2680945af81cc411c37a->enter($__internal_32aec79ea5a8701ce87e746b39daf83b0a960270e6aa2680945af81cc411c37a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/css/bootstrap-toggle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_32aec79ea5a8701ce87e746b39daf83b0a960270e6aa2680945af81cc411c37a->leave($__internal_32aec79ea5a8701ce87e746b39daf83b0a960270e6aa2680945af81cc411c37a_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_13ec58c8dcb60f1f559eabc0526bfe4b887f27864356ec13b96db9adf946d7af = $this->env->getExtension("native_profiler");
        $__internal_13ec58c8dcb60f1f559eabc0526bfe4b887f27864356ec13b96db9adf946d7af->enter($__internal_13ec58c8dcb60f1f559eabc0526bfe4b887f27864356ec13b96db9adf946d7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Registrar Empleado <span class=\"icon-empleado\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">

                ";
        // line 19
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nuip", array()), 'label', array("label" => "No. de identificacion:"));
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nuip", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de cedula del cliente")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label" => "Nombre y apellidos:"));
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre y apellidos completos del cliente")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'label', array("label" => "Telefono:"));
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "telefono", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Telefono fijo o celular")));
        echo "
                </div>

                <div class=\"form-group\">
                    <div class=\"checkbox\">
                        <label>
                            ";
        // line 39
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "esUsuario", array()), 'widget', array("attr" => array("type" => "checkbox")));
        echo " <strong>Crear cuenta para loguearse en el sistema</strong>
                        </label>
                    </div>
                </div>

                <div class=\"form-group\" style=\"display: none;\" id=\"bloqueCheckAdmin\">
                    <label class=\"checkbox2-inline\">
                        <input type=\"checkbox2\" data-toggle=\"toggle\" id=\"checkAdmin\" name=\"checkAdmin\" value=\"0\">
                        Privilegios de administrador
                    </label>
                </div>

                ";
        // line 52
        echo "                <div class=\"form-group text-center\">
                    ";
        // line 54
        echo "                    <button type=\"submit\" class=\"btn btn-lg btn-success\">Registrar <span class=\"glyphicon glyphicon-floppy-saved\"></span></button>
                </div>
                ";
        // line 56
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                <div class=\"form-group text-center\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 61
        echo $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_13ec58c8dcb60f1f559eabc0526bfe4b887f27864356ec13b96db9adf946d7af->leave($__internal_13ec58c8dcb60f1f559eabc0526bfe4b887f27864356ec13b96db9adf946d7af_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bdc0509b518e203e7c46814f30d91a7cb40d31bfbfe04e91920289dc82917889 = $this->env->getExtension("native_profiler");
        $__internal_bdc0509b518e203e7c46814f30d91a7cb40d31bfbfe04e91920289dc82917889->enter($__internal_bdc0509b518e203e7c46814f30d91a7cb40d31bfbfe04e91920289dc82917889_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 71
        echo "    ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    <script src=\"";
        // line 72
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/js/bootstrap-toggle.js"), "html", null, true);
        echo "\"></script>
    <script>
        /* Esta funcion es para mostrar el check de admin */
        \$(function () {
            \$('#empleado_esUsuario').click(function () {
                if (\$(this).is(':checked')) {
                    \$('#checkAdmin').bootstrapToggle('off');
                    \$('#bloqueCheckAdmin').css('display', 'block');
                } else {
                    \$('#bloqueCheckAdmin').css('display', 'none');
                }
                \$('#checkAdmin').attr('value', 0);
            });
        });
        /* Esta funcion es para ponerle el valor al checkAdmin cuando este seleccionado, para que el 
         controlador lo interprete y sepa que rol ponerle */
        \$(function () {
            \$('#checkAdmin').change(function () {
                if (\$(this).prop('checked')) {
                    \$('#checkAdmin').attr('value', 1);
                } else {
                    \$('#checkAdmin').attr('value', 0);
                }
            });
        });
    </script>
";
        
        $__internal_bdc0509b518e203e7c46814f30d91a7cb40d31bfbfe04e91920289dc82917889->leave($__internal_bdc0509b518e203e7c46814f30d91a7cb40d31bfbfe04e91920289dc82917889_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:empleado:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  171 => 72,  166 => 71,  160 => 70,  145 => 61,  137 => 56,  133 => 54,  130 => 52,  115 => 39,  106 => 33,  102 => 32,  95 => 28,  91 => 27,  84 => 23,  80 => 22,  74 => 19,  62 => 9,  56 => 8,  47 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/usuarios/css/bootstrap-toggle.css')}}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Registrar Empleado <span class="icon-empleado"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-4 col-sm-offset-4">*/
/* */
/*                 {{ form_start(form) }}*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.nuip, 'No. de identificacion:')}}*/
/*                     {{ form_widget(form.nuip, {'attr':{'class' : 'form-control', 'placeholder' : 'Numero de cedula del cliente'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.nombre, 'Nombre y apellidos:')}}*/
/*                     {{ form_widget(form.nombre, {'attr':{'class' : 'form-control', 'placeholder' : 'Nombre y apellidos completos del cliente'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.telefono, 'Telefono:')}}*/
/*                     {{ form_widget(form.telefono, {'attr':{'class' : 'form-control', 'placeholder' : 'Telefono fijo o celular'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     <div class="checkbox">*/
/*                         <label>*/
/*                             {{ form_widget(form.esUsuario, {'attr':{'type' : 'checkbox'}}) }} <strong>Crear cuenta para loguearse en el sistema</strong>*/
/*                         </label>*/
/*                     </div>*/
/*                 </div>*/
/* */
/*                 <div class="form-group" style="display: none;" id="bloqueCheckAdmin">*/
/*                     <label class="checkbox2-inline">*/
/*                         <input type="checkbox2" data-toggle="toggle" id="checkAdmin" name="checkAdmin" value="0">*/
/*                         Privilegios de administrador*/
/*                     </label>*/
/*                 </div>*/
/* */
/*                 {#                {{ form_widget(form) }}#}*/
/*                 <div class="form-group text-center">*/
/*                     {#                    <input type="submit" value="Create" />#}*/
/*                     <button type="submit" class="btn btn-lg btn-success">Registrar <span class="glyphicon glyphicon-floppy-saved"></span></button>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
/* */
/*                 <div class="form-group text-center">*/
/*                     <ul>*/
/*                         <li>*/
/*                             <a href="{{ path('UsuariosBundle_empleado_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
/* {% block javascripts %}*/
/*     {{ parent() }}*/
/*     <script src="{{ asset('bundles/usuarios/js/bootstrap-toggle.js') }}"></script>*/
/*     <script>*/
/*         /* Esta funcion es para mostrar el check de admin *//* */
/*         $(function () {*/
/*             $('#empleado_esUsuario').click(function () {*/
/*                 if ($(this).is(':checked')) {*/
/*                     $('#checkAdmin').bootstrapToggle('off');*/
/*                     $('#bloqueCheckAdmin').css('display', 'block');*/
/*                 } else {*/
/*                     $('#bloqueCheckAdmin').css('display', 'none');*/
/*                 }*/
/*                 $('#checkAdmin').attr('value', 0);*/
/*             });*/
/*         });*/
/*         /* Esta funcion es para ponerle el valor al checkAdmin cuando este seleccionado, para que el */
/*          controlador lo interprete y sepa que rol ponerle *//* */
/*         $(function () {*/
/*             $('#checkAdmin').change(function () {*/
/*                 if ($(this).prop('checked')) {*/
/*                     $('#checkAdmin').attr('value', 1);*/
/*                 } else {*/
/*                     $('#checkAdmin').attr('value', 0);*/
/*                 }*/
/*             });*/
/*         });*/
/*     </script>*/
/* {% endblock %}*/
/* */
