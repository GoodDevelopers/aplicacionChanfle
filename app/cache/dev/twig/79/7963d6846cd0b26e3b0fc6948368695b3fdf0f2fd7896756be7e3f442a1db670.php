<?php

/* @JornadasLaborales/caja/edit.html.twig */
class __TwigTemplate_428669ed03b320de8b51245acd1e497817b6379d4b3d72253079da385ee752f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JornadasLaborales/caja/edit.html.twig", 1);
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
        $__internal_352305a5cdfe5f44132acbb3dc5420bd6ab7302268d2934ccf39583c97adb51c = $this->env->getExtension("native_profiler");
        $__internal_352305a5cdfe5f44132acbb3dc5420bd6ab7302268d2934ccf39583c97adb51c->enter($__internal_352305a5cdfe5f44132acbb3dc5420bd6ab7302268d2934ccf39583c97adb51c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JornadasLaborales/caja/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_352305a5cdfe5f44132acbb3dc5420bd6ab7302268d2934ccf39583c97adb51c->leave($__internal_352305a5cdfe5f44132acbb3dc5420bd6ab7302268d2934ccf39583c97adb51c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d4eb9e923ab00b34bccb339983fa422141e6dcc5d9c844ec11ae4e2c3f975e9e = $this->env->getExtension("native_profiler");
        $__internal_d4eb9e923ab00b34bccb339983fa422141e6dcc5d9c844ec11ae4e2c3f975e9e->enter($__internal_d4eb9e923ab00b34bccb339983fa422141e6dcc5d9c844ec11ae4e2c3f975e9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Caja edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("caja_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_d4eb9e923ab00b34bccb339983fa422141e6dcc5d9c844ec11ae4e2c3f975e9e->leave($__internal_d4eb9e923ab00b34bccb339983fa422141e6dcc5d9c844ec11ae4e2c3f975e9e_prof);

    }

    public function getTemplateName()
    {
        return "@JornadasLaborales/caja/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Caja edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('caja_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
