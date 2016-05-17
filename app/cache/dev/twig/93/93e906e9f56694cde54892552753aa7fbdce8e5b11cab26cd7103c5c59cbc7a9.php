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
        $__internal_2e9d5083ca8ffdf14d48aa65f9f676b4948fd124bfb24835dd00fd2c854872c6 = $this->env->getExtension("native_profiler");
        $__internal_2e9d5083ca8ffdf14d48aa65f9f676b4948fd124bfb24835dd00fd2c854872c6->enter($__internal_2e9d5083ca8ffdf14d48aa65f9f676b4948fd124bfb24835dd00fd2c854872c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2e9d5083ca8ffdf14d48aa65f9f676b4948fd124bfb24835dd00fd2c854872c6->leave($__internal_2e9d5083ca8ffdf14d48aa65f9f676b4948fd124bfb24835dd00fd2c854872c6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_11c17a1542bab0f5fbbc3a8417ded68585478d5e0c5d00b3b9631cd02972271d = $this->env->getExtension("native_profiler");
        $__internal_11c17a1542bab0f5fbbc3a8417ded68585478d5e0c5d00b3b9631cd02972271d->enter($__internal_11c17a1542bab0f5fbbc3a8417ded68585478d5e0c5d00b3b9631cd02972271d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_11c17a1542bab0f5fbbc3a8417ded68585478d5e0c5d00b3b9631cd02972271d->leave($__internal_11c17a1542bab0f5fbbc3a8417ded68585478d5e0c5d00b3b9631cd02972271d_prof);

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
