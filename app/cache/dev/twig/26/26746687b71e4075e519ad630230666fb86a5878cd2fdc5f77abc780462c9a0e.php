<?php

/* InventarioBundle:ingresomateriaprima:show.html.twig */
class __TwigTemplate_f3002eec3357a0a08d6bb109575f9b9b5cb2e705f4124f24fbb96d4dcb81a18a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:ingresomateriaprima:show.html.twig", 1);
        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c8db8554a25a51c44cc764ab2046128a937ef2cc40fd5a2b4bfc0c2be7a3801c = $this->env->getExtension("native_profiler");
        $__internal_c8db8554a25a51c44cc764ab2046128a937ef2cc40fd5a2b4bfc0c2be7a3801c->enter($__internal_c8db8554a25a51c44cc764ab2046128a937ef2cc40fd5a2b4bfc0c2be7a3801c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:ingresomateriaprima:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c8db8554a25a51c44cc764ab2046128a937ef2cc40fd5a2b4bfc0c2be7a3801c->leave($__internal_c8db8554a25a51c44cc764ab2046128a937ef2cc40fd5a2b4bfc0c2be7a3801c_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_f8d10f486dd61563f23c8876da0deefb6e505e31c3f6363a9a3abe1b6a50b815 = $this->env->getExtension("native_profiler");
        $__internal_f8d10f486dd61563f23c8876da0deefb6e505e31c3f6363a9a3abe1b6a50b815->enter($__internal_f8d10f486dd61563f23c8876da0deefb6e505e31c3f6363a9a3abe1b6a50b815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_f8d10f486dd61563f23c8876da0deefb6e505e31c3f6363a9a3abe1b6a50b815->leave($__internal_f8d10f486dd61563f23c8876da0deefb6e505e31c3f6363a9a3abe1b6a50b815_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_30d8ec4a965e95cfb8b64815849ff097e5a1abe01fc2bbcb6587142ecbf51a98 = $this->env->getExtension("native_profiler");
        $__internal_30d8ec4a965e95cfb8b64815849ff097e5a1abe01fc2bbcb6587142ecbf51a98->enter($__internal_30d8ec4a965e95cfb8b64815849ff097e5a1abe01fc2bbcb6587142ecbf51a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Ingreso Materia Prima <span class=\"icon-ingresoMateria\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                <table class=\"table table-hover\">
                    <tbody>
                        <tr>
                            <th class=\"text-right\">Id:</th>
                            <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "id", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Fecha:</th>
                            <td>";
        // line 26
        if ($this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "fecha", array())) {
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "fecha", array()), "d-m-Y H:i:s"), "html", null, true);
        }
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Materia Prima:</th>
                            <td>";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "materiaPrima", array()), "nombre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Cantidad:</th>
                            <td>";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "cantidad", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "materiaPrima", array()), "unidadDeMedida", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th class=\"text-right\">Valor:</th>
                            <td>";
        // line 38
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "valor", array()), "html", null, true);
        echo "</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                <ul class=\"list-inline text-center\">
                    <li>
                        <a href=\"";
        // line 49
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                    </li>
                    <li>
                        <a href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("ingresomateriaprima_edit", array("id" => $this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                    </li>
                    <li>
                        ";
        // line 55
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
        
        $__internal_30d8ec4a965e95cfb8b64815849ff097e5a1abe01fc2bbcb6587142ecbf51a98->leave($__internal_30d8ec4a965e95cfb8b64815849ff097e5a1abe01fc2bbcb6587142ecbf51a98_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:ingresomateriaprima:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  139 => 57,  134 => 55,  128 => 52,  122 => 49,  108 => 38,  99 => 34,  92 => 30,  83 => 26,  76 => 22,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block stylesheets %}*/
/*     {{ parent() }}*/
/*     <link rel="stylesheet" href="{{ asset('bundles/app/css/otrosIconos.css')}}">*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 text-center marginTitulo">Ingreso Materia Prima <span class="icon-ingresoMateria"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/*                 <table class="table table-hover">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <th class="text-right">Id:</th>*/
/*                             <td>{{ ingresoMateriaPrima.id }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Fecha:</th>*/
/*                             <td>{% if ingresoMateriaPrima.fecha %}{{ ingresoMateriaPrima.fecha|date('d-m-Y H:i:s') }}{% endif %}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Materia Prima:</th>*/
/*                             <td>{{ ingresoMateriaPrima.materiaPrima.nombre }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Cantidad:</th>*/
/*                             <td>{{ ingresoMateriaPrima.cantidad }} {{ ingresoMateriaPrima.materiaPrima.unidadDeMedida }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th class="text-right">Valor:</th>*/
/*                             <td>{{ ingresoMateriaPrima.valor }}</td>*/
/*                         </tr>*/
/*                     </tbody>*/
/*                 </table>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/*                 <ul class="list-inline text-center">*/
/*                     <li>*/
/*                         <a href="{{ path('ingresomateriaprima_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('ingresomateriaprima_edit', { 'id': ingresoMateriaPrima.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
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
