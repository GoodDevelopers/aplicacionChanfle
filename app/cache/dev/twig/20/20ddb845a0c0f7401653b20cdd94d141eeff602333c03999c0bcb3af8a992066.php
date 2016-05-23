<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e2a6bda3dd6c832b60790129f12bbf2db0f1afbd698831aa3225ccd6d2b46483 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4d722ceb67adc7f237b512a6af57f2b28fd37d3ad45db14bd79b3d0b810985d4 = $this->env->getExtension("native_profiler");
        $__internal_4d722ceb67adc7f237b512a6af57f2b28fd37d3ad45db14bd79b3d0b810985d4->enter($__internal_4d722ceb67adc7f237b512a6af57f2b28fd37d3ad45db14bd79b3d0b810985d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_4d722ceb67adc7f237b512a6af57f2b28fd37d3ad45db14bd79b3d0b810985d4->leave($__internal_4d722ceb67adc7f237b512a6af57f2b28fd37d3ad45db14bd79b3d0b810985d4_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
