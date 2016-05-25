<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_8b0fed2eaf4cf7c418d27843913442b38c25bc761a8a6735da5180a7672a58ab extends Twig_Template
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
        $__internal_096ea7cbd2e0aa94e08e9132245474677e4031d7319edace82697834e127e490 = $this->env->getExtension("native_profiler");
        $__internal_096ea7cbd2e0aa94e08e9132245474677e4031d7319edace82697834e127e490->enter($__internal_096ea7cbd2e0aa94e08e9132245474677e4031d7319edace82697834e127e490_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_096ea7cbd2e0aa94e08e9132245474677e4031d7319edace82697834e127e490->leave($__internal_096ea7cbd2e0aa94e08e9132245474677e4031d7319edace82697834e127e490_prof);

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
