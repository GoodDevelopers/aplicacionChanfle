<?php

/* InventarioBundle:producto:show.html.twig */
class __TwigTemplate_7ec4927b9e8817d3c4b7749a45df057a635ea2047a750682c6e1c26ee5dc59da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:producto:show.html.twig", 1);
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
        $__internal_a43c11c4fac502d239c78ba96c545ddf0e9eaa40f80a56303d035cfc0b106cb5 = $this->env->getExtension("native_profiler");
        $__internal_a43c11c4fac502d239c78ba96c545ddf0e9eaa40f80a56303d035cfc0b106cb5->enter($__internal_a43c11c4fac502d239c78ba96c545ddf0e9eaa40f80a56303d035cfc0b106cb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:producto:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a43c11c4fac502d239c78ba96c545ddf0e9eaa40f80a56303d035cfc0b106cb5->leave($__internal_a43c11c4fac502d239c78ba96c545ddf0e9eaa40f80a56303d035cfc0b106cb5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_28f207981cc13c80c1443e36d69f084a4227ddf2e9229d5a0cd4e0ca517aeee9 = $this->env->getExtension("native_profiler");
        $__internal_28f207981cc13c80c1443e36d69f084a4227ddf2e9229d5a0cd4e0ca517aeee9->enter($__internal_28f207981cc13c80c1443e36d69f084a4227ddf2e9229d5a0cd4e0ca517aeee9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 marginTitulo text-center\">Producto <span class=\"icon-productos\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-lg-4 col-lg-offset-4\">
                <table class=\"table table-hover\">
                    <tbody>
                        <tr>
                            <th>Número:</th>
                            <td>";
        // line 17
        echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Nombre:</th>
                            <td>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "nombre", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Precio:</th>
                            <td>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "precio", array()), "html", null, true);
        echo "</td>
                        </tr>
                        <tr>
                            <th>Descripción:</th>
                            <td>";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "descripcion", array()), "html", null, true);
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
        // line 40
        echo $this->env->getExtension('routing')->getPath("producto_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                    </li>
                    <li>
                        <a href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute((isset($context["producto"]) ? $context["producto"] : $this->getContext($context, "producto")), "id", array()))), "html", null, true);
        echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                    </li>
                    <li>
                        ";
        // line 46
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                        ";
        // line 48
        echo "                        <button type=\"submit\" class=\"btn btn-danger\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></button>
                            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                    </li>
                </ul>
            </div>
        </div>
    </div>
";
        
        $__internal_28f207981cc13c80c1443e36d69f084a4227ddf2e9229d5a0cd4e0ca517aeee9->leave($__internal_28f207981cc13c80c1443e36d69f084a4227ddf2e9229d5a0cd4e0ca517aeee9_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:producto:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 49,  106 => 48,  102 => 46,  96 => 43,  90 => 40,  76 => 29,  69 => 25,  62 => 21,  55 => 17,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 marginTitulo text-center">Producto <span class="icon-productos"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-lg-4 col-lg-offset-4">*/
/*                 <table class="table table-hover">*/
/*                     <tbody>*/
/*                         <tr>*/
/*                             <th>Número:</th>*/
/*                             <td>{{ num }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Nombre:</th>*/
/*                             <td>{{ producto.nombre }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Precio:</th>*/
/*                             <td>{{ producto.precio }}</td>*/
/*                         </tr>*/
/*                         <tr>*/
/*                             <th>Descripción:</th>*/
/*                             <td>{{ producto.descripcion }}</td>*/
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
/*                         <a href="{{ path('producto_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         <a href="{{ path('producto_edit', { 'id': producto.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                     </li>*/
/*                     <li>*/
/*                         {{ form_start(delete_form) }}*/
/*                         {#                        <input type="submit" value="Delete">#}*/
/*                         <button type="submit" class="btn btn-danger">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></button>*/
/*                             {{ form_end(delete_form) }}*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
