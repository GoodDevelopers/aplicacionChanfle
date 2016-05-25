<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_54dda753caa4ab9e23be82bdc94ddbd858f3921e29da80287359c45bca1b9961 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_a56ee2950248abdd0b573ed5515cb363f521ecf1954d087cf0d4189e0190da5c = $this->env->getExtension("native_profiler");
        $__internal_a56ee2950248abdd0b573ed5515cb363f521ecf1954d087cf0d4189e0190da5c->enter($__internal_a56ee2950248abdd0b573ed5515cb363f521ecf1954d087cf0d4189e0190da5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a56ee2950248abdd0b573ed5515cb363f521ecf1954d087cf0d4189e0190da5c->leave($__internal_a56ee2950248abdd0b573ed5515cb363f521ecf1954d087cf0d4189e0190da5c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_270910d0e60dff97c51abc0a4c5c467456c45f42d6331f68ffbf3037a7577410 = $this->env->getExtension("native_profiler");
        $__internal_270910d0e60dff97c51abc0a4c5c467456c45f42d6331f68ffbf3037a7577410->enter($__internal_270910d0e60dff97c51abc0a4c5c467456c45f42d6331f68ffbf3037a7577410_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_270910d0e60dff97c51abc0a4c5c467456c45f42d6331f68ffbf3037a7577410->leave($__internal_270910d0e60dff97c51abc0a4c5c467456c45f42d6331f68ffbf3037a7577410_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
