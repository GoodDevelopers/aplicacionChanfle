<?php

/* @Usuarios/cliente/new.html.twig */
class __TwigTemplate_84a30d2c6478ee768c2ffb0321a10c84ad6efefa34d7ce1e46a2fe4c32e48f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Usuarios/cliente/new.html.twig", 1);
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
        $__internal_3a05900999160a961bc4ff6edad2919d432ba509e06e4d1e2e3282de607f34ec = $this->env->getExtension("native_profiler");
        $__internal_3a05900999160a961bc4ff6edad2919d432ba509e06e4d1e2e3282de607f34ec->enter($__internal_3a05900999160a961bc4ff6edad2919d432ba509e06e4d1e2e3282de607f34ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3a05900999160a961bc4ff6edad2919d432ba509e06e4d1e2e3282de607f34ec->leave($__internal_3a05900999160a961bc4ff6edad2919d432ba509e06e4d1e2e3282de607f34ec_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5e51c55305d4776443fe46ab64b720c39d88c4321ae82e4ab276aa9a5df4a6e0 = $this->env->getExtension("native_profiler");
        $__internal_5e51c55305d4776443fe46ab64b720c39d88c4321ae82e4ab276aa9a5df4a6e0->enter($__internal_5e51c55305d4776443fe46ab64b720c39d88c4321ae82e4ab276aa9a5df4a6e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Registrar Cliente <span class=\"glyphicon glyphicon-user\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">

                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "

                <div class=\"form-group\">
                    ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nuip", array()), 'label', array("label" => "No. de identificacion:"));
        echo "
                    ";
        // line 18
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nuip", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Numero de cedula del cliente")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'label', array("label" => "Nombre y apellidos:"));
        echo "
                    ";
        // line 23
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre y apellidos completos del cliente", "maxlength" => "45")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaDeNacimiento", array()), 'label', array("label" => "Fecha de nacimiento:"));
        echo "
                    ";
        // line 28
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fechaDeNacimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dd/MM/yyyy", "format" => "dd-MM-yyyy")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 32
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosAcumulados", array()), 'label', array("label" => "Puntos acumulados:"));
        echo "
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "puntosAcumulados", array()), 'widget', array("attr" => array("class" => "form-control", "value" => 0)));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'label', array("label" => "Email:"));
        echo "
                    ";
        // line 38
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo personal")));
        echo "
                </div>

                ";
        // line 42
        echo "
                <div class=\"form-group text-center\">
                    ";
        // line 45
        echo "                    <button type=\"submit\" class=\"btn btn-lg btn-success\">Registrar <span class=\"glyphicon glyphicon-floppy-saved\"></span></button>
                </div>
                ";
        // line 47
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

                <div class=\"form-group text-center\">
                    <ul>
                        <li>
                            <a href=\"";
        // line 52
        echo $this->env->getExtension('routing')->getPath("clientes_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

";
        
        $__internal_5e51c55305d4776443fe46ab64b720c39d88c4321ae82e4ab276aa9a5df4a6e0->leave($__internal_5e51c55305d4776443fe46ab64b720c39d88c4321ae82e4ab276aa9a5df4a6e0_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/cliente/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 52,  120 => 47,  116 => 45,  112 => 42,  106 => 38,  102 => 37,  95 => 33,  91 => 32,  84 => 28,  80 => 27,  73 => 23,  69 => 22,  62 => 18,  58 => 17,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Registrar Cliente <span class="glyphicon glyphicon-user"></span></h1>*/
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
/*                     {{ form_widget(form.nombre, {'attr':{'class' : 'form-control', 'placeholder' : 'Nombre y apellidos completos del cliente', 'maxlength' : '45'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.fechaDeNacimiento, 'Fecha de nacimiento:')}}*/
/*                     {{ form_widget(form.fechaDeNacimiento, {'attr':{'class' : 'form-control', 'placeholder' : 'dd/MM/yyyy', 'format' : 'dd-MM-yyyy'}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.puntosAcumulados, 'Puntos acumulados:')}}*/
/*                     {{ form_widget(form.puntosAcumulados, {'attr':{'class' : 'form-control', 'value' : 0}})}}*/
/*                 </div>*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(form.email, 'Email:')}}*/
/*                     {{ form_widget(form.email, {'attr':{'class' : 'form-control', 'placeholder' : 'Correo personal'}})}}*/
/*                 </div>*/
/* */
/*                 {#                {{ form_widget(form) }}#}*/
/* */
/*                 <div class="form-group text-center">*/
/*                     {#                    <input type="submit" value="Registrar" class="btn btn-lg btn-success"/>#}*/
/*                     <button type="submit" class="btn btn-lg btn-success">Registrar <span class="glyphicon glyphicon-floppy-saved"></span></button>*/
/*                 </div>*/
/*                 {{ form_end(form) }}*/
/* */
/*                 <div class="form-group text-center">*/
/*                     <ul>*/
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
