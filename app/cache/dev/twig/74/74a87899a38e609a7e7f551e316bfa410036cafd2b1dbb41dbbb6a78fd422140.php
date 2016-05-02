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
        $__internal_693db69fa932f37117e7bf142dca63ce53458ab84c0df28c4cbfa5c0974ff26e = $this->env->getExtension("native_profiler");
        $__internal_693db69fa932f37117e7bf142dca63ce53458ab84c0df28c4cbfa5c0974ff26e->enter($__internal_693db69fa932f37117e7bf142dca63ce53458ab84c0df28c4cbfa5c0974ff26e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_693db69fa932f37117e7bf142dca63ce53458ab84c0df28c4cbfa5c0974ff26e->leave($__internal_693db69fa932f37117e7bf142dca63ce53458ab84c0df28c4cbfa5c0974ff26e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_16f9cd3606760c76a34939731bf7f55b7107e927f57a41b439a023063da03c0b = $this->env->getExtension("native_profiler");
        $__internal_16f9cd3606760c76a34939731bf7f55b7107e927f57a41b439a023063da03c0b->enter($__internal_16f9cd3606760c76a34939731bf7f55b7107e927f57a41b439a023063da03c0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_16f9cd3606760c76a34939731bf7f55b7107e927f57a41b439a023063da03c0b->leave($__internal_16f9cd3606760c76a34939731bf7f55b7107e927f57a41b439a023063da03c0b_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ebf0983235aaf0ac6caa1d63181b70e26351eb6cbc51da019229ea00f4470bd8 = $this->env->getExtension("native_profiler");
        $__internal_ebf0983235aaf0ac6caa1d63181b70e26351eb6cbc51da019229ea00f4470bd8->enter($__internal_ebf0983235aaf0ac6caa1d63181b70e26351eb6cbc51da019229ea00f4470bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ebf0983235aaf0ac6caa1d63181b70e26351eb6cbc51da019229ea00f4470bd8->leave($__internal_ebf0983235aaf0ac6caa1d63181b70e26351eb6cbc51da019229ea00f4470bd8_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d5b5c46c6dfde47cf042dc20097b39b47bb01062f4a06c9c349fbd0d7818f062 = $this->env->getExtension("native_profiler");
        $__internal_d5b5c46c6dfde47cf042dc20097b39b47bb01062f4a06c9c349fbd0d7818f062->enter($__internal_d5b5c46c6dfde47cf042dc20097b39b47bb01062f4a06c9c349fbd0d7818f062_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d5b5c46c6dfde47cf042dc20097b39b47bb01062f4a06c9c349fbd0d7818f062->leave($__internal_d5b5c46c6dfde47cf042dc20097b39b47bb01062f4a06c9c349fbd0d7818f062_prof);

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
