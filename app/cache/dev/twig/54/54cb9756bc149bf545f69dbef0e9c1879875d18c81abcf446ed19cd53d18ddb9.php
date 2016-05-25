<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_2325563c91f172b0a487bbc6b953baa2d8ea953d18cf2314df0943a3d3f3de45 extends Twig_Template
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
        $__internal_fccf0b33e933b0a66d28e403c986e217a1dcb989367812f0f7b29285c7b6259a = $this->env->getExtension("native_profiler");
        $__internal_fccf0b33e933b0a66d28e403c986e217a1dcb989367812f0f7b29285c7b6259a->enter($__internal_fccf0b33e933b0a66d28e403c986e217a1dcb989367812f0f7b29285c7b6259a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_fccf0b33e933b0a66d28e403c986e217a1dcb989367812f0f7b29285c7b6259a->leave($__internal_fccf0b33e933b0a66d28e403c986e217a1dcb989367812f0f7b29285c7b6259a_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
