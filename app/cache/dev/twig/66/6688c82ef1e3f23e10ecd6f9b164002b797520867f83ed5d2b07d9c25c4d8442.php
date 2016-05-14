<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_31fe3f27bcab1a5ba6648d225bb9083e2f6e37496ca30b033aafec2f9b9fbbef extends Twig_Template
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
        $__internal_060aa010530e88ec97997615ecbf65d3cbb904fef2e43b42d9a2a5d1fe0523f2 = $this->env->getExtension("native_profiler");
        $__internal_060aa010530e88ec97997615ecbf65d3cbb904fef2e43b42d9a2a5d1fe0523f2->enter($__internal_060aa010530e88ec97997615ecbf65d3cbb904fef2e43b42d9a2a5d1fe0523f2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_060aa010530e88ec97997615ecbf65d3cbb904fef2e43b42d9a2a5d1fe0523f2->leave($__internal_060aa010530e88ec97997615ecbf65d3cbb904fef2e43b42d9a2a5d1fe0523f2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
