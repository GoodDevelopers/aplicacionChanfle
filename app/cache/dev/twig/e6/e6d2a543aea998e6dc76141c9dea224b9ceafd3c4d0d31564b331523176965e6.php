<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_f754d6d4706f51310a0af716fd6b2490a41f7f5de4578be51c0bdd196e904765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_1e9f97f38adaefd6035c063ff2735abf2bafaf49d624a0010e2670b6ccb94a6c = $this->env->getExtension("native_profiler");
        $__internal_1e9f97f38adaefd6035c063ff2735abf2bafaf49d624a0010e2670b6ccb94a6c->enter($__internal_1e9f97f38adaefd6035c063ff2735abf2bafaf49d624a0010e2670b6ccb94a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e9f97f38adaefd6035c063ff2735abf2bafaf49d624a0010e2670b6ccb94a6c->leave($__internal_1e9f97f38adaefd6035c063ff2735abf2bafaf49d624a0010e2670b6ccb94a6c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_51d1ebe8f9d20a1baad6a15b6d63f98509ae3ad121f154bf41360297f1d0a6f9 = $this->env->getExtension("native_profiler");
        $__internal_51d1ebe8f9d20a1baad6a15b6d63f98509ae3ad121f154bf41360297f1d0a6f9->enter($__internal_51d1ebe8f9d20a1baad6a15b6d63f98509ae3ad121f154bf41360297f1d0a6f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_51d1ebe8f9d20a1baad6a15b6d63f98509ae3ad121f154bf41360297f1d0a6f9->leave($__internal_51d1ebe8f9d20a1baad6a15b6d63f98509ae3ad121f154bf41360297f1d0a6f9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
