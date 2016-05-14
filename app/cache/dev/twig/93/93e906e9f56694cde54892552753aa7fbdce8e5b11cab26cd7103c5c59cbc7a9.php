<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_f8a36c5d609db975ab37bc8d0a5fd04f2cc8dc128df5bcdb914df290e8f1e185 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_2c9124b7438ae3b223981e12d6442c4c0f246269ace8524544602e7af189e7f5 = $this->env->getExtension("native_profiler");
        $__internal_2c9124b7438ae3b223981e12d6442c4c0f246269ace8524544602e7af189e7f5->enter($__internal_2c9124b7438ae3b223981e12d6442c4c0f246269ace8524544602e7af189e7f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c9124b7438ae3b223981e12d6442c4c0f246269ace8524544602e7af189e7f5->leave($__internal_2c9124b7438ae3b223981e12d6442c4c0f246269ace8524544602e7af189e7f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d06b62718816c3df0d4206822a2e7c120b8b707bddf759977977bd6eecce351b = $this->env->getExtension("native_profiler");
        $__internal_d06b62718816c3df0d4206822a2e7c120b8b707bddf759977977bd6eecce351b->enter($__internal_d06b62718816c3df0d4206822a2e7c120b8b707bddf759977977bd6eecce351b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_d06b62718816c3df0d4206822a2e7c120b8b707bddf759977977bd6eecce351b->leave($__internal_d06b62718816c3df0d4206822a2e7c120b8b707bddf759977977bd6eecce351b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
