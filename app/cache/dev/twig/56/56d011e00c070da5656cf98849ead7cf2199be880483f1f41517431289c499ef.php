<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_990d0b67e6263888f4ba32b536c48930d8d7b3a23b138c1d3ef28863d050e702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_8d0d16870ca1238b27c8c8a6fdff1db579184f2473bf6c58d5ac810783049bf6 = $this->env->getExtension("native_profiler");
        $__internal_8d0d16870ca1238b27c8c8a6fdff1db579184f2473bf6c58d5ac810783049bf6->enter($__internal_8d0d16870ca1238b27c8c8a6fdff1db579184f2473bf6c58d5ac810783049bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d0d16870ca1238b27c8c8a6fdff1db579184f2473bf6c58d5ac810783049bf6->leave($__internal_8d0d16870ca1238b27c8c8a6fdff1db579184f2473bf6c58d5ac810783049bf6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5b66a55adb2aa738fc598bc364412ea6f6781410ea5608168a1752ed3c879eb3 = $this->env->getExtension("native_profiler");
        $__internal_5b66a55adb2aa738fc598bc364412ea6f6781410ea5608168a1752ed3c879eb3->enter($__internal_5b66a55adb2aa738fc598bc364412ea6f6781410ea5608168a1752ed3c879eb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_5b66a55adb2aa738fc598bc364412ea6f6781410ea5608168a1752ed3c879eb3->leave($__internal_5b66a55adb2aa738fc598bc364412ea6f6781410ea5608168a1752ed3c879eb3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
