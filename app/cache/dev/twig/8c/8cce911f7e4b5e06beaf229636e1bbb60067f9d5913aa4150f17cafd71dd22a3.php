<?php

/* @Twig/Exception/exception.rdf.twig */
class __TwigTemplate_ac82426da15ec1161353fb787ff8571c0d92d8bba99c3b682cbf6c5b258c6017 extends Twig_Template
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
        $__internal_cee12e23c32763a649d520b671866064cbb92fd20132159a4fd59441ebda4328 = $this->env->getExtension("native_profiler");
        $__internal_cee12e23c32763a649d520b671866064cbb92fd20132159a4fd59441ebda4328->enter($__internal_cee12e23c32763a649d520b671866064cbb92fd20132159a4fd59441ebda4328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_cee12e23c32763a649d520b671866064cbb92fd20132159a4fd59441ebda4328->leave($__internal_cee12e23c32763a649d520b671866064cbb92fd20132159a4fd59441ebda4328_prof);

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
