<?php

/* UsuariosBundle:empleado:new.html.twig */
class __TwigTemplate_69a23542ae9c075f40430eba9e1113b45a69873c0050e1274a77469914c93478 extends Twig_Template
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
        $__internal_6feba34cb285ac9d14a633df38eb8d844c50f7e5107d5b87cb5c6270ab1c1d09 = $this->env->getExtension("native_profiler");
        $__internal_6feba34cb285ac9d14a633df38eb8d844c50f7e5107d5b87cb5c6270ab1c1d09->enter($__internal_6feba34cb285ac9d14a633df38eb8d844c50f7e5107d5b87cb5c6270ab1c1d09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:empleado:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6feba34cb285ac9d14a633df38eb8d844c50f7e5107d5b87cb5c6270ab1c1d09->leave($__internal_6feba34cb285ac9d14a633df38eb8d844c50f7e5107d5b87cb5c6270ab1c1d09_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_c0c995a9a8ecd7d3e4201808f3b0c8ec7973ca79f22fda3a9c08114f599d63f8 = $this->env->getExtension("native_profiler");
        $__internal_c0c995a9a8ecd7d3e4201808f3b0c8ec7973ca79f22fda3a9c08114f599d63f8->enter($__internal_c0c995a9a8ecd7d3e4201808f3b0c8ec7973ca79f22fda3a9c08114f599d63f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/usuarios/css/bootstrap-toggle.css"), "html", null, true);
        echo "\">
";
        
        $__internal_c0c995a9a8ecd7d3e4201808f3b0c8ec7973ca79f22fda3a9c08114f599d63f8->leave($__internal_c0c995a9a8ecd7d3e4201808f3b0c8ec7973ca79f22fda3a9c08114f599d63f8_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_6aabac673d0ce55be649e640073ffbd3d8c523fe0aaa2d3efc0b1104edcb3ef1 = $this->env->getExtension("native_profiler");
        $__internal_6aabac673d0ce55be649e640073ffbd3d8c523fe0aaa2d3efc0b1104edcb3ef1->enter($__internal_6aabac673d0ce55be649e640073ffbd3d8c523fe0aaa2d3efc0b1104edcb3ef1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6aabac673d0ce55be649e640073ffbd3d8c523fe0aaa2d3efc0b1104edcb3ef1->leave($__internal_6aabac673d0ce55be649e640073ffbd3d8c523fe0aaa2d3efc0b1104edcb3ef1_prof);

    }

    // line 70
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1f1125fddbe158c752412334835f645e3dfc20c19700757fc5e128669c5ab95e = $this->env->getExtension("native_profiler");
        $__internal_1f1125fddbe158c752412334835f645e3dfc20c19700757fc5e128669c5ab95e->enter($__internal_1f1125fddbe158c752412334835f645e3dfc20c19700757fc5e128669c5ab95e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_1f1125fddbe158c752412334835f645e3dfc20c19700757fc5e128669c5ab95e->leave($__internal_1f1125fddbe158c752412334835f645e3dfc20c19700757fc5e128669c5ab95e_prof);

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
