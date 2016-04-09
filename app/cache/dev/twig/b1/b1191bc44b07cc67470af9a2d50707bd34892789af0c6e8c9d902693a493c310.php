<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e6a700d3bc54e0d269824a7866aa09ca27048b51fa7bcbf128e75dc3ddb2bedc extends Twig_Template
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
        $__internal_68e0ec5eec6397a5fc9248e91b86dc572d6be23be82f2649a7e942ec985f4850 = $this->env->getExtension("native_profiler");
        $__internal_68e0ec5eec6397a5fc9248e91b86dc572d6be23be82f2649a7e942ec985f4850->enter($__internal_68e0ec5eec6397a5fc9248e91b86dc572d6be23be82f2649a7e942ec985f4850_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_68e0ec5eec6397a5fc9248e91b86dc572d6be23be82f2649a7e942ec985f4850->leave($__internal_68e0ec5eec6397a5fc9248e91b86dc572d6be23be82f2649a7e942ec985f4850_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
