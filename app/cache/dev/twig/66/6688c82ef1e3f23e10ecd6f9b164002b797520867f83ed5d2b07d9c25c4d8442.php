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
        $__internal_fd38d42bf396e23cad651683417c8383ac9dfa4bfd357bc0826ea08f77843ca8 = $this->env->getExtension("native_profiler");
        $__internal_fd38d42bf396e23cad651683417c8383ac9dfa4bfd357bc0826ea08f77843ca8->enter($__internal_fd38d42bf396e23cad651683417c8383ac9dfa4bfd357bc0826ea08f77843ca8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_fd38d42bf396e23cad651683417c8383ac9dfa4bfd357bc0826ea08f77843ca8->leave($__internal_fd38d42bf396e23cad651683417c8383ac9dfa4bfd357bc0826ea08f77843ca8_prof);

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
