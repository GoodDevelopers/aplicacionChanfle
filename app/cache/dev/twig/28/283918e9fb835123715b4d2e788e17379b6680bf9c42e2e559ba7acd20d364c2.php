<?php

/* InventarioBundle:producto:index.html.twig */
class __TwigTemplate_3830cad6d1f24561b62bb7af6df7c30cf74171bb6bf34d14d44ccbc996a10c3e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:producto:index.html.twig", 1);
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
        $__internal_deff8ebd31c56813a0a15e085221d7c9ca088772c8e2b17a542130322dd473d5 = $this->env->getExtension("native_profiler");
        $__internal_deff8ebd31c56813a0a15e085221d7c9ca088772c8e2b17a542130322dd473d5->enter($__internal_deff8ebd31c56813a0a15e085221d7c9ca088772c8e2b17a542130322dd473d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:producto:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_deff8ebd31c56813a0a15e085221d7c9ca088772c8e2b17a542130322dd473d5->leave($__internal_deff8ebd31c56813a0a15e085221d7c9ca088772c8e2b17a542130322dd473d5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7e9d51ff1c7575ba36b0a5d0c842b8813987e91b057a666ef7e6f169247f19f = $this->env->getExtension("native_profiler");
        $__internal_f7e9d51ff1c7575ba36b0a5d0c842b8813987e91b057a666ef7e6f169247f19f->enter($__internal_f7e9d51ff1c7575ba36b0a5d0c842b8813987e91b057a666ef7e6f169247f19f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 marginTitulo text-center\">Productos <span class=\"icon-productos\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-md-3\">
                <ul style=\"list-style-type: none; padding: 0px;\">
                    <li>
                        <a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("producto_new");
        echo "\" class=\"btn btn-lg btn-success\">Registrar Producto <span class=\"glyphicon glyphicon-floppy-saved\"></span></a>
                    </li>
                </ul>
            </div>

            <div class=\"col-md-9\">
                <form action=\"\" method=\"GET\" class=\"form-inline\">
                    <div class=\"form-group\">
                        <div class=\"input-group\">
                            <div class=\"input-group-addon\">Producto</div>
                            <input type=\"text\" class=\"form-control\" placeholder=\"Nombre del producto\" id=\"nomMateria\">
                        </div>
                        <button type=\"button\" id=\"btnBuscar\" class=\"btn btn-primary\"><span class=\"glyphicon glyphicon-search\"></span> Buscar</button>
                    </div>
                </form>
            </div>
        </div>

        <div class=\"margenTopTablas\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    <div class=\"table-responsive\">
                        <table class=\"table table-bordered table-hover table-condensed text-center\">
                            <thead>
                                <tr class=\"active info\">
                                    <th>NO.</th>
                                    <th>NOMBRE</th>
                                    <th>DESCRIPCION</th>
                                    <th>PRECIO</th>
                                    <th>ACCIONES</th>
                                </tr>
                            </thead>
                            <tbody id=\"cuerpoTabla\">
                                ";
        // line 48
        $context["num"] = 0;
        // line 49
        echo "                                ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["productos"]) ? $context["productos"] : $this->getContext($context, "productos")));
        foreach ($context['_seq'] as $context["_key"] => $context["producto"]) {
            // line 50
            echo "                                    ";
            $context["num"] = ((isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")) + 1);
            // line 51
            echo "                                    <tr>
";
            // line 53
            echo "                                        <td><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute($context["producto"], "id", array()), "num" => (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["num"]) ? $context["num"] : $this->getContext($context, "num")), "html", null, true);
            echo "</a></td>
                                        <td>";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "nombre", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "DESCRIPCION", array()), "html", null, true);
            echo "</td>
                                        <td>";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["producto"], "precio", array()), "html", null, true);
            echo "</td>
                                        <td>
                                            <ul class=\"list-inline text-center\">
                                                <li>
                                                    <a href=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_edit", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-warning\" role=\"button\">Editar <span class=\"glyphicon glyphicon-edit\"></span></a>
                                                </li>
                                                <li>
                                                    <a href=\"";
            // line 63
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("producto_show", array("id" => $this->getAttribute($context["producto"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-danger\" role=\"button\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></a>
                                                </li>
                                            </ul>
                                        </td>
                                    </tr>
                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['producto'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        echo "                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

    </div>
";
        
        $__internal_f7e9d51ff1c7575ba36b0a5d0c842b8813987e91b057a666ef7e6f169247f19f->leave($__internal_f7e9d51ff1c7575ba36b0a5d0c842b8813987e91b057a666ef7e6f169247f19f_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:producto:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 69,  130 => 63,  124 => 60,  117 => 56,  113 => 55,  109 => 54,  102 => 53,  99 => 51,  96 => 50,  91 => 49,  89 => 48,  53 => 15,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-md-12">*/
/*                 <h1 class="h1 marginTitulo text-center">Productos <span class="icon-productos"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-md-3">*/
/*                 <ul style="list-style-type: none; padding: 0px;">*/
/*                     <li>*/
/*                         <a href="{{ path('producto_new') }}" class="btn btn-lg btn-success">Registrar Producto <span class="glyphicon glyphicon-floppy-saved"></span></a>*/
/*                     </li>*/
/*                 </ul>*/
/*             </div>*/
/* */
/*             <div class="col-md-9">*/
/*                 <form action="" method="GET" class="form-inline">*/
/*                     <div class="form-group">*/
/*                         <div class="input-group">*/
/*                             <div class="input-group-addon">Producto</div>*/
/*                             <input type="text" class="form-control" placeholder="Nombre del producto" id="nomMateria">*/
/*                         </div>*/
/*                         <button type="button" id="btnBuscar" class="btn btn-primary"><span class="glyphicon glyphicon-search"></span> Buscar</button>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="margenTopTablas">*/
/*             <div class="row">*/
/*                 <div class="col-md-12">*/
/*                     <div class="table-responsive">*/
/*                         <table class="table table-bordered table-hover table-condensed text-center">*/
/*                             <thead>*/
/*                                 <tr class="active info">*/
/*                                     <th>NO.</th>*/
/*                                     <th>NOMBRE</th>*/
/*                                     <th>DESCRIPCION</th>*/
/*                                     <th>PRECIO</th>*/
/*                                     <th>ACCIONES</th>*/
/*                                 </tr>*/
/*                             </thead>*/
/*                             <tbody id="cuerpoTabla">*/
/*                                 {% set num = 0 %}*/
/*                                 {% for producto in productos %}*/
/*                                     {% set num = num + 1 %}*/
/*                                     <tr>*/
/* {#                                        <td><a href="{{ path('producto_show', { 'id': producto.id }) }}">{{ producto.id }}</a></td>#}*/
/*                                         <td><a href="{{ path('producto_show', { 'id': producto.id , 'num': num}) }}">{{ num }}</a></td>*/
/*                                         <td>{{ producto.nombre }}</td>*/
/*                                         <td>{{ producto.DESCRIPCION }}</td>*/
/*                                         <td>{{ producto.precio }}</td>*/
/*                                         <td>*/
/*                                             <ul class="list-inline text-center">*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('producto_edit', { 'id': producto.id }) }}" class="btn btn-warning" role="button">Editar <span class="glyphicon glyphicon-edit"></span></a>*/
/*                                                 </li>*/
/*                                                 <li>*/
/*                                                     <a href="{{ path('producto_show', { 'id': producto.id }) }}" class="btn btn-danger" role="button">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></a>*/
/*                                                 </li>*/
/*                                             </ul>*/
/*                                         </td>*/
/*                                     </tr>*/
/*                                 {% endfor %}*/
/*                             </tbody>*/
/*                         </table>*/
/*                     </div>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*     </div>*/
/* {% endblock %}*/
/* */
