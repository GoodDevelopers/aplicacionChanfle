<?php

/* UsuariosBundle:Cliente:new.html.twig */
class __TwigTemplate_916d153f8db838fc4e567ca5593cb79e05680405ccbe9f2bea2c77d582659e7d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Cliente:new.html.twig", 1);
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
        $__internal_8267bf129b5f703542d38d044aa112cbda39607a1316c618f25b3affb1092f15 = $this->env->getExtension("native_profiler");
        $__internal_8267bf129b5f703542d38d044aa112cbda39607a1316c618f25b3affb1092f15->enter($__internal_8267bf129b5f703542d38d044aa112cbda39607a1316c618f25b3affb1092f15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:Cliente:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8267bf129b5f703542d38d044aa112cbda39607a1316c618f25b3affb1092f15->leave($__internal_8267bf129b5f703542d38d044aa112cbda39607a1316c618f25b3affb1092f15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2998ca4528f575bd79bb2d3678e7dcca658484ebeb9a51ca0c9496ea2b9fc682 = $this->env->getExtension("native_profiler");
        $__internal_2998ca4528f575bd79bb2d3678e7dcca658484ebeb9a51ca0c9496ea2b9fc682->enter($__internal_2998ca4528f575bd79bb2d3678e7dcca658484ebeb9a51ca0c9496ea2b9fc682_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">

        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center\" style=\"font-weight: bold;\">Registrar Cliente <span class=\"glyphicon glyphicon-user\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-4 col-md-offset-4\" style=\"margin-top: 30px;\">
                ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
                <div class=\"row\">
                    <div class=\"form-group\">
                        ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nuip", array()), 'label', array("label" => "Numero de identificacion:"));
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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre y apellidos completos del cliente")));
        echo "
                    </div>
                </div>
                ";
        // line 27
        echo "                <input type=\"submit\" value=\"Create\" />
                ";
        // line 28
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
            </div>
        </div>

        <ul>
            <li>
                <a href=\"";
        // line 34
        echo $this->env->getExtension('routing')->getPath("clientes_index");
        echo "\">Back to the list</a>
            </li>
        </ul>
    </div>
";
        
        $__internal_2998ca4528f575bd79bb2d3678e7dcca658484ebeb9a51ca0c9496ea2b9fc682->leave($__internal_2998ca4528f575bd79bb2d3678e7dcca658484ebeb9a51ca0c9496ea2b9fc682_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Cliente:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 34,  82 => 28,  79 => 27,  73 => 23,  69 => 22,  62 => 18,  58 => 17,  52 => 14,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center" style="font-weight: bold;">Registrar Cliente <span class="glyphicon glyphicon-user"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-4 col-md-offset-4" style="margin-top: 30px;">*/
/*                 {{ form_start(form) }}*/
/*                 <div class="row">*/
/*                     <div class="form-group">*/
/*                         {{ form_label(form.nuip, 'Numero de identificacion:')}}*/
/*                         {{ form_widget(form.nuip, {'attr':{'class' : 'form-control', 'placeholder' : 'Numero de cedula del cliente'}})}}*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         {{ form_label(form.nombre, 'Nombre y apellidos:')}}*/
/*                         {{ form_widget(form.nombre, {'attr':{'class' : 'form-control', 'placeholder' : 'Nombre y apellidos completos del cliente'}})}}*/
/*                     </div>*/
/*                 </div>*/
/*                 {#                {{ form_widget(form) }}#}*/
/*                 <input type="submit" value="Create" />*/
/*                 {{ form_end(form) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <ul>*/
/*             <li>*/
/*                 <a href="{{ path('clientes_index') }}">Back to the list</a>*/
/*             </li>*/
/*         </ul>*/
/*     </div>*/
/* {% endblock %}*/
/* */
