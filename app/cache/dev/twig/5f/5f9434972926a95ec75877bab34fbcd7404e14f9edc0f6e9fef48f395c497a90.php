<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_ce85a74a172c85d9ee05d712509c7293d8547b6577ab1c4d5ffbda2b909a58a1 extends Twig_Template
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
        $__internal_3a5446946c1b5873a499f153fb348ee25f3969c2315db4f5243e38e92e87f01f = $this->env->getExtension("native_profiler");
        $__internal_3a5446946c1b5873a499f153fb348ee25f3969c2315db4f5243e38e92e87f01f->enter($__internal_3a5446946c1b5873a499f153fb348ee25f3969c2315db4f5243e38e92e87f01f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_3a5446946c1b5873a499f153fb348ee25f3969c2315db4f5243e38e92e87f01f->leave($__internal_3a5446946c1b5873a499f153fb348ee25f3969c2315db4f5243e38e92e87f01f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
