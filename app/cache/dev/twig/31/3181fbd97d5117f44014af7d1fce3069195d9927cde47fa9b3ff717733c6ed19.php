<?php

/* @Inventario/ingresomateriaprima/edit.html.twig */
class __TwigTemplate_652ef7e789b4274020a31b38808913a3331ef9e1460587c1898fe3d2f2b380ca extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/ingresomateriaprima/edit.html.twig", 1);
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
        $__internal_cb037f37bacefefbc4ab4944248adee468c004f1ffb2a1084e5f8197c20ecc7f = $this->env->getExtension("native_profiler");
        $__internal_cb037f37bacefefbc4ab4944248adee468c004f1ffb2a1084e5f8197c20ecc7f->enter($__internal_cb037f37bacefefbc4ab4944248adee468c004f1ffb2a1084e5f8197c20ecc7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/ingresomateriaprima/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb037f37bacefefbc4ab4944248adee468c004f1ffb2a1084e5f8197c20ecc7f->leave($__internal_cb037f37bacefefbc4ab4944248adee468c004f1ffb2a1084e5f8197c20ecc7f_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_b8be111f21617fafb2d899415ff14476c3ba7968361e224cf483d1d751f580bd = $this->env->getExtension("native_profiler");
        $__internal_b8be111f21617fafb2d899415ff14476c3ba7968361e224cf483d1d751f580bd->enter($__internal_b8be111f21617fafb2d899415ff14476c3ba7968361e224cf483d1d751f580bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_b8be111f21617fafb2d899415ff14476c3ba7968361e224cf483d1d751f580bd->leave($__internal_b8be111f21617fafb2d899415ff14476c3ba7968361e224cf483d1d751f580bd_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_810039c51f82b068231b07d1495ce2b940553de79edf39d8c0eb2d232cbc412f = $this->env->getExtension("native_profiler");
        $__internal_810039c51f82b068231b07d1495ce2b940553de79edf39d8c0eb2d232cbc412f->enter($__internal_810039c51f82b068231b07d1495ce2b940553de79edf39d8c0eb2d232cbc412f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "materiaPrima", array()), 'label');
        echo "
                    ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "materiaPrima", array()), 'widget', array("disabled" => "true", "attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantidad", array()), 'label');
        echo "
                    ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "cantidad", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Cantidad ingresada")));
        echo "
                    <p class=\"help-block\" id=\"msjUnidad\">La cantidad debe ser en ";
        // line 27
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["ingresoMateriaPrima"]) ? $context["ingresoMateriaPrima"] : $this->getContext($context, "ingresoMateriaPrima")), "materiaPrima", array()), "unidadDeMedida", array()), "html", null, true);
        echo "</p>
                </div>
                <div class=\"form-group\">
                    ";
        // line 30
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "valor", array()), 'label');
        echo "
                    ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "valor", array()), 'widget', array("attr" => array("class" => "form-control", "placeholder" => "Valor total")));
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "proveedor", array()), 'label');
        echo "
                    ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), "proveedor", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
                </div>
                <div class=\"form-group text-center\">
                    ";
        // line 39
        echo "                    <button type=\"submit\" class=\"btn btn-lg btn-warning\">Editar <span class=\"glyphicon glyphicon-edit\"></span></button>
                </div>
                    
                ";
        // line 42
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

                <div>
                    <ul class=\"list-inline text-center\">
                        <li>
                            <a href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_index");
        echo "\" class=\"btn btn-info\">Lista <span class=\"glyphicon glyphicon-th-list\"></span></a>
                        </li>
                        <li>
                            ";
        // line 50
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
";
        // line 52
        echo "                            <button type=\"submit\" class=\"btn btn-danger\">Eliminar <span class=\"glyphicon glyphicon-floppy-remove\"></span></button>
                            ";
        // line 53
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
";
        
        $__internal_810039c51f82b068231b07d1495ce2b940553de79edf39d8c0eb2d232cbc412f->leave($__internal_810039c51f82b068231b07d1495ce2b940553de79edf39d8c0eb2d232cbc412f_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/ingresomateriaprima/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 53,  146 => 52,  142 => 50,  136 => 47,  128 => 42,  123 => 39,  117 => 35,  113 => 34,  107 => 31,  103 => 30,  97 => 27,  93 => 26,  89 => 25,  83 => 22,  79 => 21,  76 => 20,  72 => 18,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*                     {{ form_label(edit_form.materiaPrima) }}*/
/*                     {{ form_widget(edit_form.materiaPrima, {'disabled' : 'true', 'attr':{'class' : 'form-control'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.cantidad) }}*/
/*                     {{ form_widget(edit_form.cantidad, {'attr':{'class' : 'form-control', 'placeholder' : 'Cantidad ingresada'}}) }}*/
/*                     <p class="help-block" id="msjUnidad">La cantidad debe ser en {{ ingresoMateriaPrima.materiaPrima.unidadDeMedida }}</p>*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.valor) }}*/
/*                     {{ form_widget(edit_form.valor, {'attr':{'class' : 'form-control', 'placeholder' : 'Valor total'}}) }}*/
/*                 </div>*/
/*                 <div class="form-group">*/
/*                     {{ form_label(edit_form.proveedor) }}*/
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
