<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5cfda331ad93671956f6a306a9fbb4eea57f1744bd14fc453090ee9eca0fde86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_8501fe6af2df90a8585f4728c074cb34045dfd9450317190bf52726506eda695 = $this->env->getExtension("native_profiler");
        $__internal_8501fe6af2df90a8585f4728c074cb34045dfd9450317190bf52726506eda695->enter($__internal_8501fe6af2df90a8585f4728c074cb34045dfd9450317190bf52726506eda695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8501fe6af2df90a8585f4728c074cb34045dfd9450317190bf52726506eda695->leave($__internal_8501fe6af2df90a8585f4728c074cb34045dfd9450317190bf52726506eda695_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98ae8d44e4efc3edd5f102b4dfe089359483ba51c85761fc27d57462a47bedc2 = $this->env->getExtension("native_profiler");
        $__internal_98ae8d44e4efc3edd5f102b4dfe089359483ba51c85761fc27d57462a47bedc2->enter($__internal_98ae8d44e4efc3edd5f102b4dfe089359483ba51c85761fc27d57462a47bedc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_98ae8d44e4efc3edd5f102b4dfe089359483ba51c85761fc27d57462a47bedc2->leave($__internal_98ae8d44e4efc3edd5f102b4dfe089359483ba51c85761fc27d57462a47bedc2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
