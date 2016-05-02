<?php

/* InventarioBundle:IngresoMateriaPrima:edit.html.twig */
class __TwigTemplate_0de25af6f92d61cd9ef71fc8f61f2801cf972a5ec98c0307478e14762405fcde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:IngresoMateriaPrima:edit.html.twig", 1);
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
        $__internal_f5915b67048a3127b97055704996f6aee09aa10d43e284b6cae6a53ce81ba7a8 = $this->env->getExtension("native_profiler");
        $__internal_f5915b67048a3127b97055704996f6aee09aa10d43e284b6cae6a53ce81ba7a8->enter($__internal_f5915b67048a3127b97055704996f6aee09aa10d43e284b6cae6a53ce81ba7a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:IngresoMateriaPrima:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f5915b67048a3127b97055704996f6aee09aa10d43e284b6cae6a53ce81ba7a8->leave($__internal_f5915b67048a3127b97055704996f6aee09aa10d43e284b6cae6a53ce81ba7a8_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_6d572740a8b193f30ed176c5882d622fb337dc93acd2e4f0c35b426bce001499 = $this->env->getExtension("native_profiler");
        $__internal_6d572740a8b193f30ed176c5882d622fb337dc93acd2e4f0c35b426bce001499->enter($__internal_6d572740a8b193f30ed176c5882d622fb337dc93acd2e4f0c35b426bce001499_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_6d572740a8b193f30ed176c5882d622fb337dc93acd2e4f0c35b426bce001499->leave($__internal_6d572740a8b193f30ed176c5882d622fb337dc93acd2e4f0c35b426bce001499_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_95f53eedf4478002bd58c1758d7c10371467132ce9399c1d4766d531b1d96715 = $this->env->getExtension("native_profiler");
        $__internal_95f53eedf4478002bd58c1758d7c10371467132ce9399c1d4766d531b1d96715->enter($__internal_95f53eedf4478002bd58c1758d7c10371467132ce9399c1d4766d531b1d96715_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                <h1 class=\"h1 text-center marginTitulo\">Editar Ingreso Materia Prima <span class=\"icon-listaIngresosMateria\"></span></h1>
            </div>
        </div>

        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
                ";
        // line 20
        echo "                <div class=\"form-group\">
                    ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantidad", array()), 'label', array("label" => "Cantidad"));
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cantidad ingresada")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "valor", array()), 'label', array("label" => "Valor"));
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "valor", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Valor total")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "materiaPrima", array()), 'label', array("label" => "Materia prima"));
        echo "
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "materiaPrima", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 33
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "proveedor", array()), 'label', array("label" => "Proveedor"));
        echo "
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "proveedor", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group text-center\">
                    ";
        // line 38
        echo "                    <button type=\"submit\" class=\"btn btn-lg btn-warning\">Editar <span class=\"glyphicon glyphicon-edit\"></span></button>
                </div>
                    
                ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                <div>
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"";
        // line 46
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                        </li>
                        <li>
                            ";
        // line 49
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
";
        // line 51
        echo "                            <button type=\"submit\" class=\"btn btn-danger\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></button>
                            ";
        // line 52
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_95f53eedf4478002bd58c1758d7c10371467132ce9399c1d4766d531b1d96715->leave($__internal_95f53eedf4478002bd58c1758d7c10371467132ce9399c1d4766d531b1d96715_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:IngresoMateriaPrima:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  145 => 52,  142 => 51,  138 => 49,  132 => 46,  124 => 41,  119 => 38,  113 => 34,  109 => 33,  103 => 30,  99 => 29,  93 => 26,  89 => 25,  83 => 22,  79 => 21,  76 => 20,  72 => 18,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*                 <h1 class="h1 text-center marginTitulo">Editar Ingreso Materia Prima <span class="icon-listaIngresosMateria"></span></h1>*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="row">*/
/*             <div class="col-sm-4 col-sm-offset-4">*/
/*                 {{ form_start(edit_form) }}*/
/*                 {#                {{ form_widget(edit_form) }}#}*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.cantidad, "Cantidad") }}*/
/*                     {{ form_widget(edit_form.cantidad, {'attr':{'class' : 'form-control', 'placeholder' : 'Cantidad ingresada'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.valor, "Valor") }}*/
/*                     {{ form_widget(edit_form.valor, {'attr':{'class' : 'form-control', 'placeholder' : 'Valor total'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.materiaPrima, "Materia prima") }}*/
/*                     {{ form_widget(edit_form.materiaPrima, {'attr':{'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.proveedor, "Proveedor") }}*/
/*                     {{ form_widget(edit_form.proveedor, {'attr':{'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group text-center">*/
/*                     {#                    <input type="submit" value="Edit" />#}*/
/*                     <button type="submit" class="btn btn-lg btn-warning">Editar <span class="glyphicon glyphicon-edit"></span></button>*/
/*                 </div>*/
/*                     */
/*                 {{ form_end(edit_form) }}*/
/* */
/*                 <div>*/
/*                     <ul class="list-inline text-center">*/
/*                         <li>*/
/*                             <a href="{{ path('ingresomateriaprima_index') }}" class="btn btn-info">Lista <span class="glyphicon glyphicon-th-list"></span></a>*/
/*                         </li>*/
/*                         <li>*/
/*                             {{ form_start(delete_form) }}*/
/* {#                            <input type="submit" value="Delete">#}*/
/*                             <button type="submit" class="btn btn-danger">Eliminar <span class="glyphicon glyphicon-floppy-remove"></span></button>*/
/*                             {{ form_end(delete_form) }}*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
