<?php

/* @Usuarios/cliente/edit.html.twig */
class __TwigTemplate_0baa1b35da27ef0ef6e86dbe26472a21c35bc9bfb85035528fff4d7607d3116d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Usuarios/cliente/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c9f1c5789fcb84021f35bf83edd909eb3e12908fe315b5b406f79b14b96dc0a9 = $this->env->getExtension("native_profiler");
        $__internal_c9f1c5789fcb84021f35bf83edd909eb3e12908fe315b5b406f79b14b96dc0a9->enter($__internal_c9f1c5789fcb84021f35bf83edd909eb3e12908fe315b5b406f79b14b96dc0a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/cliente/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f1c5789fcb84021f35bf83edd909eb3e12908fe315b5b406f79b14b96dc0a9->leave($__internal_c9f1c5789fcb84021f35bf83edd909eb3e12908fe315b5b406f79b14b96dc0a9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_66054df0fb5f418a30ba4c71da96ef65b9d5548931d3f077f55745f943b3a2b7 = $this->env->getExtension("native_profiler");
        $__internal_66054df0fb5f418a30ba4c71da96ef65b9d5548931d3f077f55745f943b3a2b7->enter($__internal_66054df0fb5f418a30ba4c71da96ef65b9d5548931d3f077f55745f943b3a2b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <h1 class=\"h1 text-center marginTitulo\">Editar Cliente <span class=\"glyphicon glyphicon-user\"></span></h1>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "

                <div class=\"form-group\">
                    ";
        // line 14
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nuip", array()), 'label', array("label" => "No. de identificacion:"));
        echo "
                    ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nuip", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de cedula del cliente")));
        echo "
                </div>
                    <input name=\"idviejo\" id=\"idviejo\" type=\"hidden\" value=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nuip", array()), "html", null, true);
        echo "\">

                <div class=\"form-group\">
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label', array("label" => "Nombre y apellidos:"));
        echo "
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre y apellidos completos del cliente")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaDeNacimiento", array()), 'label', array("label" => "Fecha de nacimiento:"));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaDeNacimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dd/MM/yyyy")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "puntosAcumulados", array()), 'label', array("label" => "Puntos acumulados:"));
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "puntosAcumulados", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label', array("label" => "Email:"));
        echo "
                    ";
        // line 36
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo personal")));
        echo "
                </div>

                <div class=\"form-group text-center\">
                    <button type=\"submit\" class=\"btn btn-lg btn-warning\">Editar <span class=\"glyphicon glyphicon-edit\"></span></button>
                </div>
                ";
        // line 43
        echo "
                ";
        // line 44
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "
                
                <div>
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("clientes_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_66054df0fb5f418a30ba4c71da96ef65b9d5548931d3f077f55745f943b3a2b7->leave($__internal_66054df0fb5f418a30ba4c71da96ef65b9d5548931d3f077f55745f943b3a2b7_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/cliente/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 49,  119 => 44,  116 => 43,  107 => 36,  103 => 35,  96 => 31,  92 => 30,  85 => 26,  81 => 25,  74 => 21,  70 => 20,  64 => 17,  59 => 15,  55 => 14,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h1 class="h1 text-center marginTitulo">Editar Cliente <span class="glyphicon glyphicon-user"></span></h1>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-4 col-sm-offset-4">*/
/*                 {{ form_start(edit_form) }}*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.nuip, 'No. de identificacion:')}}*/
/*                     {{ form_widget(edit_form.nuip, {'attr':{'class' : 'form-control', 'placeholder' : 'Numero de cedula del cliente'}})}}*/
/*                 </div>*/
/*                     <input name="idviejo" id="idviejo" type="hidden" value="{{ cliente.nuip }}">*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.nombre, 'Nombre y apellidos:')}}*/
/*                     {{ form_widget(edit_form.nombre, {'attr':{'class' : 'form-control', 'placeholder' : 'Nombre y apellidos completos del cliente'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.fechaDeNacimiento, 'Fecha de nacimiento:')}}*/
/*                     {{ form_widget(edit_form.fechaDeNacimiento, {'attr':{'class' : 'form-control', 'placeholder' : 'dd/MM/yyyy'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.puntosAcumulados, 'Puntos acumulados:')}}*/
/*                     {{ form_widget(edit_form.puntosAcumulados, {'attr':{'class' : 'form-control'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.email, 'Email:')}}*/
/*                     {{ form_widget(edit_form.email, {'attr':{'class' : 'form-control', 'placeholder' : 'Correo personal'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group text-center">*/
/*                     <button type="submit" class="btn btn-lg btn-warning">Editar <span class="glyphicon glyphicon-edit"></span></button>*/
/*                 </div>*/
/*                 {#            <input type="submit" value="Edit" />#}*/
/* */
/*                 {{ form_end(edit_form) }}*/
/*                 */
/*                 <div>*/
/*                     <ul class="list-inline text-center">*/
/*                         <li>*/
/*                             <a href="{{ path('clientes_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* */
/* {% endblock %}*/
/* */
