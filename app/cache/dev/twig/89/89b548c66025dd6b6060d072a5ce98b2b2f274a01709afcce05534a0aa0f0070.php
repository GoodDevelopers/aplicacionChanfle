<?php

/* InventarioBundle:IngresoMateriaPrima:new.html.twig */
class __TwigTemplate_15e78718e013d8f6e6e3a8d0b7803549d13363709e0b4ebf34688d453d50e957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:IngresoMateriaPrima:new.html.twig", 1);
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
        $__internal_18bbe348ec772e1c3a7a65875890e5481c2eef8a50f2042d90571ba1bf66a42b = $this->env->getExtension("native_profiler");
        $__internal_18bbe348ec772e1c3a7a65875890e5481c2eef8a50f2042d90571ba1bf66a42b->enter($__internal_18bbe348ec772e1c3a7a65875890e5481c2eef8a50f2042d90571ba1bf66a42b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:IngresoMateriaPrima:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_18bbe348ec772e1c3a7a65875890e5481c2eef8a50f2042d90571ba1bf66a42b->leave($__internal_18bbe348ec772e1c3a7a65875890e5481c2eef8a50f2042d90571ba1bf66a42b_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_ee650883045abc60e3db0298e74edde2f8e61e864dcae096dfe28e1335f41440 = $this->env->getExtension("native_profiler");
        $__internal_ee650883045abc60e3db0298e74edde2f8e61e864dcae096dfe28e1335f41440->enter($__internal_ee650883045abc60e3db0298e74edde2f8e61e864dcae096dfe28e1335f41440_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link rel=\"stylesheet\" href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
";
        
        $__internal_ee650883045abc60e3db0298e74edde2f8e61e864dcae096dfe28e1335f41440->leave($__internal_ee650883045abc60e3db0298e74edde2f8e61e864dcae096dfe28e1335f41440_prof);

    }

    // line 8
    public function block_body($context, array $blocks = array())
    {
        $__internal_7fdda8b23273eaf8f6d8a997135aca9a7596c7fd92c68c5323d5b257daba883f = $this->env->getExtension("native_profiler");
        $__internal_7fdda8b23273eaf8f6d8a997135aca9a7596c7fd92c68c5323d5b257daba883f->enter($__internal_7fdda8b23273eaf8f6d8a997135aca9a7596c7fd92c68c5323d5b257daba883f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    <h1>Registrar Ingreso Materia Prima <span class=\"icon-ingresoMateria\"></span></h1>

    ";
        // line 11
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 12
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 14
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 18
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_7fdda8b23273eaf8f6d8a997135aca9a7596c7fd92c68c5323d5b257daba883f->leave($__internal_7fdda8b23273eaf8f6d8a997135aca9a7596c7fd92c68c5323d5b257daba883f_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:IngresoMateriaPrima:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 18,  74 => 14,  69 => 12,  65 => 11,  61 => 9,  55 => 8,  46 => 5,  41 => 4,  35 => 3,  11 => 1,);
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
/*     <h1>Registrar Ingreso Materia Prima <span class="icon-ingresoMateria"></span></h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ingresomateriaprima_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
