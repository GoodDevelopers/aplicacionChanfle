<?php

/* venta/show.html.twig */
class __TwigTemplate_2ac2b55e5d69cd1f7aa0c88241168f72edd97aa5bfaae3aaf610c87a3389df55 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venta/show.html.twig", 1);
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
        $__internal_c4ad377f45e48614acdfa228143743254d8871354230e39c4f648208e73342d2 = $this->env->getExtension("native_profiler");
        $__internal_c4ad377f45e48614acdfa228143743254d8871354230e39c4f648208e73342d2->enter($__internal_c4ad377f45e48614acdfa228143743254d8871354230e39c4f648208e73342d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4ad377f45e48614acdfa228143743254d8871354230e39c4f648208e73342d2->leave($__internal_c4ad377f45e48614acdfa228143743254d8871354230e39c4f648208e73342d2_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4b96adf961dab567478eee2656c56f1a10974c11df2d5e516491c86e4c771e56 = $this->env->getExtension("native_profiler");
        $__internal_4b96adf961dab567478eee2656c56f1a10974c11df2d5e516491c86e4c771e56->enter($__internal_4b96adf961dab567478eee2656c56f1a10974c11df2d5e516491c86e4c771e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div  class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Venta <span class=\"fa fa-shopping-basket\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                <table class=\"table table-hover\">

                    <tbody>
                        <tr>
                            <th class=\"text-right\">Fecha:</th>
                            <td>";
        // line 18
        if ($this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "fecha", array()), "Y-m-d H:i:s"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Mesa:</th>
                            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "mesa", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">No. de Personas:</th>
                            <td>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "personasPorMesa", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Tipo Venta:</th>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "tipoVenta", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Valor Total:</th>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "valorTotal", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Puntos:</th>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "puntosVenta", array()), "html", null, true);
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
        // line 48
        echo $this->env->getExtension('routing')->getPath("venta_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                    </li>
                    <li>
                        <a href=\"";
        // line 51
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("venta_detalles", array("id" => $this->getAttribute((isset($context["ventum"]) ? $context["ventum"] : $this->getContext($context, "ventum")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                    </li>
                    <li>
                        ";
        // line 54
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        <button type=\"submit\" class=\"btn btn-danger\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></button>

                        ";
        // line 57
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_4b96adf961dab567478eee2656c56f1a10974c11df2d5e516491c86e4c771e56->leave($__internal_4b96adf961dab567478eee2656c56f1a10974c11df2d5e516491c86e4c771e56_prof);

    }

    public function getTemplateName()
    {
        return "venta/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  124 => 57,  118 => 54,  112 => 51,  106 => 48,  93 => 38,  86 => 34,  79 => 30,  72 => 26,  65 => 22,  56 => 18,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div  class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Venta <span class="fa fa-shopping-basket"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/*                 <table class="table table-hover">*/
/* */
/*                     <tbody>*/
/*                         <tr>*/
/*                             <th class="text-right">Fecha:</th>*/
/*                             <td>{% if ventum.fecha %}{{ ventum.fecha|date('Y-m-d H:i:s') }}{% endif %}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Mesa:</th>*/
/*                             <td>{{ ventum.mesa }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">No. de Personas:</th>*/
/*                             <td>{{ ventum.personasPorMesa }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Tipo Venta:</th>*/
/*                             <td>{{ ventum.tipoVenta }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Valor Total:</th>*/
/*                             <td>{{ ventum.valorTotal }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Puntos:</th>*/
/*                             <td>{{ ventum.puntosVenta }}</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/*                 <ul class="text-center list-inline">*/
/*                     <li>*/
/*                         <a href="{{ path('venta_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('venta_detalles', { 'id': ventum.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         {{ form_start(delete_form) }}*/
/*                         <button type="submit" class="btn btn-danger">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></button>*/
/* */
/*                         {{ form_end(delete_form) }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
