<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_c683e2eec37a732d4a2c55807b6470ec1cb135178048a3a3359a613f1c2f17a0 extends Twig_Template
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
        $__internal_441135e8e022aee5f5d2a15f9a36905af77a676161c655ed3a402d053863b209 = $this->env->getExtension("native_profiler");
        $__internal_441135e8e022aee5f5d2a15f9a36905af77a676161c655ed3a402d053863b209->enter($__internal_441135e8e022aee5f5d2a15f9a36905af77a676161c655ed3a402d053863b209_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_441135e8e022aee5f5d2a15f9a36905af77a676161c655ed3a402d053863b209->leave($__internal_441135e8e022aee5f5d2a15f9a36905af77a676161c655ed3a402d053863b209_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
