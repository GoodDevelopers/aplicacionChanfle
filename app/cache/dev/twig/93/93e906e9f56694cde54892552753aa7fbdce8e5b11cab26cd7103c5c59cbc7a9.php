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
        $__internal_cd78e30a322aac274b983972258427a7385610f323ae34990e3b9e7e146cbfef = $this->env->getExtension("native_profiler");
        $__internal_cd78e30a322aac274b983972258427a7385610f323ae34990e3b9e7e146cbfef->enter($__internal_cd78e30a322aac274b983972258427a7385610f323ae34990e3b9e7e146cbfef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cd78e30a322aac274b983972258427a7385610f323ae34990e3b9e7e146cbfef->leave($__internal_cd78e30a322aac274b983972258427a7385610f323ae34990e3b9e7e146cbfef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1f2e41a4c762c07ddb9e7d0cae27f5d8e1c7693ca09df478cbee3fd149ad7e1e = $this->env->getExtension("native_profiler");
        $__internal_1f2e41a4c762c07ddb9e7d0cae27f5d8e1c7693ca09df478cbee3fd149ad7e1e->enter($__internal_1f2e41a4c762c07ddb9e7d0cae27f5d8e1c7693ca09df478cbee3fd149ad7e1e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_1f2e41a4c762c07ddb9e7d0cae27f5d8e1c7693ca09df478cbee3fd149ad7e1e->leave($__internal_1f2e41a4c762c07ddb9e7d0cae27f5d8e1c7693ca09df478cbee3fd149ad7e1e_prof);

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
