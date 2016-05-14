<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9aedf1de34d42f8765af4973cb39dcd6b7c26191074197971db78ec7d4f28f73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_e0e1157d49e9425829196971b8b02623b1e9a2a23761cef27b5a15ad82e4e7a2 = $this->env->getExtension("native_profiler");
        $__internal_e0e1157d49e9425829196971b8b02623b1e9a2a23761cef27b5a15ad82e4e7a2->enter($__internal_e0e1157d49e9425829196971b8b02623b1e9a2a23761cef27b5a15ad82e4e7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e0e1157d49e9425829196971b8b02623b1e9a2a23761cef27b5a15ad82e4e7a2->leave($__internal_e0e1157d49e9425829196971b8b02623b1e9a2a23761cef27b5a15ad82e4e7a2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f3e91f01f447f13c5c72e836d0884210190ca6a1ab8ca0140ba51e925e550eac = $this->env->getExtension("native_profiler");
        $__internal_f3e91f01f447f13c5c72e836d0884210190ca6a1ab8ca0140ba51e925e550eac->enter($__internal_f3e91f01f447f13c5c72e836d0884210190ca6a1ab8ca0140ba51e925e550eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_f3e91f01f447f13c5c72e836d0884210190ca6a1ab8ca0140ba51e925e550eac->leave($__internal_f3e91f01f447f13c5c72e836d0884210190ca6a1ab8ca0140ba51e925e550eac_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
