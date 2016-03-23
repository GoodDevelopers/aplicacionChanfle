<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b293afc7f40a2cf79a4b54ad674b99ef02cb3a131b95eca7ea16fb73b2c99d6e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_14068f90fd767fc7a2ec96d379b19765779915ba55a2006c44fefec574a6bf2b = $this->env->getExtension("native_profiler");
        $__internal_14068f90fd767fc7a2ec96d379b19765779915ba55a2006c44fefec574a6bf2b->enter($__internal_14068f90fd767fc7a2ec96d379b19765779915ba55a2006c44fefec574a6bf2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14068f90fd767fc7a2ec96d379b19765779915ba55a2006c44fefec574a6bf2b->leave($__internal_14068f90fd767fc7a2ec96d379b19765779915ba55a2006c44fefec574a6bf2b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f95b40fb9c55cea9cc35d7630f314f5e3e18b92037e970a0c19f54c263abbc25 = $this->env->getExtension("native_profiler");
        $__internal_f95b40fb9c55cea9cc35d7630f314f5e3e18b92037e970a0c19f54c263abbc25->enter($__internal_f95b40fb9c55cea9cc35d7630f314f5e3e18b92037e970a0c19f54c263abbc25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_f95b40fb9c55cea9cc35d7630f314f5e3e18b92037e970a0c19f54c263abbc25->leave($__internal_f95b40fb9c55cea9cc35d7630f314f5e3e18b92037e970a0c19f54c263abbc25_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_0fdcc2e494b7f9144b4fc03dbf64f511d9c8fa1484a05e1003e1951dfc0e1dd0 = $this->env->getExtension("native_profiler");
        $__internal_0fdcc2e494b7f9144b4fc03dbf64f511d9c8fa1484a05e1003e1951dfc0e1dd0->enter($__internal_0fdcc2e494b7f9144b4fc03dbf64f511d9c8fa1484a05e1003e1951dfc0e1dd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_0fdcc2e494b7f9144b4fc03dbf64f511d9c8fa1484a05e1003e1951dfc0e1dd0->leave($__internal_0fdcc2e494b7f9144b4fc03dbf64f511d9c8fa1484a05e1003e1951dfc0e1dd0_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f11440b84c08760713d5cbe500989f1291a2a69d5fa549ee14d581c2ab1a05c = $this->env->getExtension("native_profiler");
        $__internal_9f11440b84c08760713d5cbe500989f1291a2a69d5fa549ee14d581c2ab1a05c->enter($__internal_9f11440b84c08760713d5cbe500989f1291a2a69d5fa549ee14d581c2ab1a05c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_9f11440b84c08760713d5cbe500989f1291a2a69d5fa549ee14d581c2ab1a05c->leave($__internal_9f11440b84c08760713d5cbe500989f1291a2a69d5fa549ee14d581c2ab1a05c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
