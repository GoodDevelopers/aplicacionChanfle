<?php

/* @Usuarios/cliente/edit.html.twig */
class __TwigTemplate_f5f0fc18e14bc3b394a9ee0093c6e29413f454a875e4c30a9d4b434288535b3b extends Twig_Template
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
        $__internal_3e198088ccbb09b81d865275faa16feeba8452fcf752f77cc988d6eab092a197 = $this->env->getExtension("native_profiler");
        $__internal_3e198088ccbb09b81d865275faa16feeba8452fcf752f77cc988d6eab092a197->enter($__internal_3e198088ccbb09b81d865275faa16feeba8452fcf752f77cc988d6eab092a197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/cliente/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e198088ccbb09b81d865275faa16feeba8452fcf752f77cc988d6eab092a197->leave($__internal_3e198088ccbb09b81d865275faa16feeba8452fcf752f77cc988d6eab092a197_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2e11c26e904d3d5d7a487c2613af0256310b6a4bafbe5fcbf252f807c78f3013 = $this->env->getExtension("native_profiler");
        $__internal_2e11c26e904d3d5d7a487c2613af0256310b6a4bafbe5fcbf252f807c78f3013->enter($__internal_2e11c26e904d3d5d7a487c2613af0256310b6a4bafbe5fcbf252f807c78f3013_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <h1 class=\"h1 text-center marginTitulo\">Editar cliente <span class=\"glyphicon glyphicon-user\"></span></h1>
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

                <div class=\"form-group\">
                    ";
        // line 19
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'label', array("label" => "Nombre y apellidos:"));
        echo "
                    ";
        // line 20
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "nombre", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Nombre y apellidos completos del cliente")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 24
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaDeNacimiento", array()), 'label', array("label" => "Fecha de nacimiento:"));
        echo "
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "fechaDeNacimiento", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "dd/MM/yyyy")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "puntosAcumulados", array()), 'label', array("label" => "Puntos acumulados:"));
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "puntosAcumulados", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>

                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'label', array("label" => "Email:"));
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "email", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Correo personal")));
        echo "
                </div>

                <div class=\"form-group text-center\">
                    <button type=\"submit\" class=\"btn btn-lg btn-warning active\">Editar <span class=\"glyphicon glyphicon-edit\"></span></button>
                </div>
                ";
        // line 42
        echo "
                ";
        // line 43
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                <ul class=\"list-inline text-center\">
                    <li>
                        <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("clientes_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                    </li>
                    <li>
                        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        ";
        // line 52
        echo "                        <button type=\"submit\" class=\"btn btn-danger\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></button>
                            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </li>
                </ul>
            </div>
        </div>
    </div>
                            
";
        
        $__internal_2e11c26e904d3d5d7a487c2613af0256310b6a4bafbe5fcbf252f807c78f3013->leave($__internal_2e11c26e904d3d5d7a487c2613af0256310b6a4bafbe5fcbf252f807c78f3013_prof);

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
        return array (  135 => 53,  132 => 52,  128 => 50,  122 => 47,  115 => 43,  112 => 42,  103 => 35,  99 => 34,  92 => 30,  88 => 29,  81 => 25,  77 => 24,  70 => 20,  66 => 19,  59 => 15,  55 => 14,  49 => 11,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <h1 class="h1 text-center marginTitulo">Editar cliente <span class="glyphicon glyphicon-user"></span></h1>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-sm-4 col-sm-offset-4">*/
/* */
/*                 {{ form_start(edit_form) }}*/
/* */
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.nuip, 'No. de identificacion:')}}*/
/*                     {{ form_widget(edit_form.nuip, {'attr':{'class' : 'form-control', 'placeholder' : 'Numero de cedula del cliente'}})}}*/
/*                 </div>*/
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
/*                     <button type="submit" class="btn btn-lg btn-warning active">Editar <span class="glyphicon glyphicon-edit"></span></button>*/
/*                 </div>*/
/*                 {#            <input type="submit" value="Edit" />#}*/
/* */
/*                 {{ form_end(edit_form) }}*/
/* */
/*                 <ul class="list-inline text-center">*/
/*                     <li>*/
/*                         <a href="{{ path('clientes_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         {{ form_start(delete_form) }}*/
/*                         {#                    <input type="submit" value="Delete">#}*/
/*                         <button type="submit" class="btn btn-danger">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></button>*/
/*                             {{ form_end(delete_form) }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*                             */
/* {% endblock %}*/
/* */