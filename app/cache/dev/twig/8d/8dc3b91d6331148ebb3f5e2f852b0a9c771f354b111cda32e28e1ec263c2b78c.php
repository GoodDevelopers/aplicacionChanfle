<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_1415d32e2ca1d8965ae7bdee391b70c86cf72fedfac9d88c9285129fc8bd516c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_6161b9557f74bb29c192182146e0e16d32b3f7cc8b6e9a71a08f7b6fa34b1c58 = $this->env->getExtension("native_profiler");
        $__internal_6161b9557f74bb29c192182146e0e16d32b3f7cc8b6e9a71a08f7b6fa34b1c58->enter($__internal_6161b9557f74bb29c192182146e0e16d32b3f7cc8b6e9a71a08f7b6fa34b1c58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6161b9557f74bb29c192182146e0e16d32b3f7cc8b6e9a71a08f7b6fa34b1c58->leave($__internal_6161b9557f74bb29c192182146e0e16d32b3f7cc8b6e9a71a08f7b6fa34b1c58_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec246d63f8b16a42eb4e756c8db38d0c10569a7234394e4410ae7e762fa47634 = $this->env->getExtension("native_profiler");
        $__internal_ec246d63f8b16a42eb4e756c8db38d0c10569a7234394e4410ae7e762fa47634->enter($__internal_ec246d63f8b16a42eb4e756c8db38d0c10569a7234394e4410ae7e762fa47634_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_ec246d63f8b16a42eb4e756c8db38d0c10569a7234394e4410ae7e762fa47634->leave($__internal_ec246d63f8b16a42eb4e756c8db38d0c10569a7234394e4410ae7e762fa47634_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
