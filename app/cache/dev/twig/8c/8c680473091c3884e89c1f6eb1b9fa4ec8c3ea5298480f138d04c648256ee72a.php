<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_30d83c4150cdd07cad31ff84b6909691681fd29cb070a50abd1884608cafe61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b1ce4bff0237fc62d1e1e5d75cfe5f79e53527afc007d98e297da7531b269abd = $this->env->getExtension("native_profiler");
        $__internal_b1ce4bff0237fc62d1e1e5d75cfe5f79e53527afc007d98e297da7531b269abd->enter($__internal_b1ce4bff0237fc62d1e1e5d75cfe5f79e53527afc007d98e297da7531b269abd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b1ce4bff0237fc62d1e1e5d75cfe5f79e53527afc007d98e297da7531b269abd->leave($__internal_b1ce4bff0237fc62d1e1e5d75cfe5f79e53527afc007d98e297da7531b269abd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a05fd746b145d4da91f374e3ff9c0e5e438fc9335bee0f95046378bcb20beb12 = $this->env->getExtension("native_profiler");
        $__internal_a05fd746b145d4da91f374e3ff9c0e5e438fc9335bee0f95046378bcb20beb12->enter($__internal_a05fd746b145d4da91f374e3ff9c0e5e438fc9335bee0f95046378bcb20beb12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a05fd746b145d4da91f374e3ff9c0e5e438fc9335bee0f95046378bcb20beb12->leave($__internal_a05fd746b145d4da91f374e3ff9c0e5e438fc9335bee0f95046378bcb20beb12_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
