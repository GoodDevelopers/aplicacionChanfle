<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_aab5b74d2131b6420f1c15082b7e055fef2c9ac6b30f837295a6308c3a37b66e extends Twig_Template
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
        $__internal_24e599b2bf89b93007847e0e67fde29e5a53236b04ef15fe8994d7c8586572f1 = $this->env->getExtension("native_profiler");
        $__internal_24e599b2bf89b93007847e0e67fde29e5a53236b04ef15fe8994d7c8586572f1->enter($__internal_24e599b2bf89b93007847e0e67fde29e5a53236b04ef15fe8994d7c8586572f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.rdf.twig", 1)->display($context);
        
        $__internal_24e599b2bf89b93007847e0e67fde29e5a53236b04ef15fe8994d7c8586572f1->leave($__internal_24e599b2bf89b93007847e0e67fde29e5a53236b04ef15fe8994d7c8586572f1_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
