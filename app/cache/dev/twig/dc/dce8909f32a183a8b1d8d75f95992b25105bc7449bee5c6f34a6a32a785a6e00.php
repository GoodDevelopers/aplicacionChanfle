<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_6f672d176f401b929c3063bac1b30bdfafb98ecf779bd6e3c6a0f47e98a93079 extends Twig_Template
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
        $__internal_28e0f0184e70e6a106a78c8ae160f55d7c7061886df5df8e4c96fec49109dd4e = $this->env->getExtension("native_profiler");
        $__internal_28e0f0184e70e6a106a78c8ae160f55d7c7061886df5df8e4c96fec49109dd4e->enter($__internal_28e0f0184e70e6a106a78c8ae160f55d7c7061886df5df8e4c96fec49109dd4e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_28e0f0184e70e6a106a78c8ae160f55d7c7061886df5df8e4c96fec49109dd4e->leave($__internal_28e0f0184e70e6a106a78c8ae160f55d7c7061886df5df8e4c96fec49109dd4e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
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
