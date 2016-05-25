<?php

/* @Usuarios/cliente/show.html.twig */
class __TwigTemplate_7ef3f7085f7072be94d0263384c6a98d0a6056cc29ef6f4919155dd463ec632b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Usuarios/cliente/show.html.twig", 1);
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
        $__internal_2ec17f2f8dd186cc436140da260818973a5fda4cfa9de9ea1ff05daf7caa5f24 = $this->env->getExtension("native_profiler");
        $__internal_2ec17f2f8dd186cc436140da260818973a5fda4cfa9de9ea1ff05daf7caa5f24->enter($__internal_2ec17f2f8dd186cc436140da260818973a5fda4cfa9de9ea1ff05daf7caa5f24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/cliente/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2ec17f2f8dd186cc436140da260818973a5fda4cfa9de9ea1ff05daf7caa5f24->leave($__internal_2ec17f2f8dd186cc436140da260818973a5fda4cfa9de9ea1ff05daf7caa5f24_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f6bccab9b29c2b1cd457c0466dd4abb290c3388cac3eb85113b98072ee65d06 = $this->env->getExtension("native_profiler");
        $__internal_4f6bccab9b29c2b1cd457c0466dd4abb290c3388cac3eb85113b98072ee65d06->enter($__internal_4f6bccab9b29c2b1cd457c0466dd4abb290c3388cac3eb85113b98072ee65d06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Cliente <span class=\"glyphicon glyphicon-user\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                <table class=\"table table-hover\">
                    <tbody>
                        <tr>
                            <th class=\"text-right\">No. de identificacion:</th>
                            <td>";
        // line 17
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nuip", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Nombre:</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "nombre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Fecha de nacimiento:</th>
                            <td>";
        // line 25
        if ($this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fechaDeNacimiento", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "fechaDeNacimiento", array()), "d-m-Y"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Puntos acumulados:</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "puntosAcumulados", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Email:</th>
                            <td>";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "email", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                <ul class=\"text-center list-inline\">
                    <li>
                        <a href=\"";
        // line 44
        echo $this->env->getExtension('routing')->getPath("clientes_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                    </li>
                    <li>
                        <a href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("clientes_edit", array("id" => $this->getAttribute((isset($context["cliente"]) ? $context["cliente"] : $this->getContext($context, "cliente")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                    </li>
                    <li>
                        ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <button type=\"submit\" class=\"btn btn-danger\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></button>
                        ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_4f6bccab9b29c2b1cd457c0466dd4abb290c3388cac3eb85113b98072ee65d06->leave($__internal_4f6bccab9b29c2b1cd457c0466dd4abb290c3388cac3eb85113b98072ee65d06_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/cliente/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  116 => 52,  111 => 50,  105 => 47,  99 => 44,  85 => 33,  78 => 29,  69 => 25,  62 => 21,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Cliente <span class="glyphicon glyphicon-user"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/*                 <table class="table table-hover">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <th class="text-right">No. de identificacion:</th>*/
/*                             <td>{{ cliente.nuip }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Nombre:</th>*/
/*                             <td>{{ cliente.nombre }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Fecha de nacimiento:</th>*/
/*                             <td>{% if cliente.fechaDeNacimiento %}{{ cliente.fechaDeNacimiento|date('d-m-Y') }}{% endif %}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Puntos acumulados:</th>*/
/*                             <td>{{ cliente.puntosAcumulados }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Email:</th>*/
/*                             <td>{{ cliente.email }}</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/*                 <ul class="text-center list-inline">*/
/*                     <li>*/
/*                         <a href="{{ path('clientes_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('clientes_edit', { 'id': cliente.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         {{ form_start(delete_form) }}*/
/*                         <button type="submit" class="btn btn-danger">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></button>*/
/*                         {{ form_end(delete_form) }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
