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
        $__internal_6031000d7b4c8173bd01bc689830f982ec1b455806733f406c917c98769ca0ca = $this->env->getExtension("native_profiler");
        $__internal_6031000d7b4c8173bd01bc689830f982ec1b455806733f406c917c98769ca0ca->enter($__internal_6031000d7b4c8173bd01bc689830f982ec1b455806733f406c917c98769ca0ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6031000d7b4c8173bd01bc689830f982ec1b455806733f406c917c98769ca0ca->leave($__internal_6031000d7b4c8173bd01bc689830f982ec1b455806733f406c917c98769ca0ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5876879ea8a46c3b889405c8ac328f3ab577b1b4a7d4a63bd1c12becfe4d4c4d = $this->env->getExtension("native_profiler");
        $__internal_5876879ea8a46c3b889405c8ac328f3ab577b1b4a7d4a63bd1c12becfe4d4c4d->enter($__internal_5876879ea8a46c3b889405c8ac328f3ab577b1b4a7d4a63bd1c12becfe4d4c4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_5876879ea8a46c3b889405c8ac328f3ab577b1b4a7d4a63bd1c12becfe4d4c4d->leave($__internal_5876879ea8a46c3b889405c8ac328f3ab577b1b4a7d4a63bd1c12becfe4d4c4d_prof);

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
