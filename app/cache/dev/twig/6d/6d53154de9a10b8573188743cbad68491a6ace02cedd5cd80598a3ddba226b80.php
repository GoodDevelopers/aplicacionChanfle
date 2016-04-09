<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_e9509366b6ee181e91aefb3b98a3ed080b4e8e888d0c40e37c89446b4335a361 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_5fdb04ec2f9b7c22bd90c67cc0d9b008de2b979e33912e839d39dd9b67b5308a = $this->env->getExtension("native_profiler");
        $__internal_5fdb04ec2f9b7c22bd90c67cc0d9b008de2b979e33912e839d39dd9b67b5308a->enter($__internal_5fdb04ec2f9b7c22bd90c67cc0d9b008de2b979e33912e839d39dd9b67b5308a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fdb04ec2f9b7c22bd90c67cc0d9b008de2b979e33912e839d39dd9b67b5308a->leave($__internal_5fdb04ec2f9b7c22bd90c67cc0d9b008de2b979e33912e839d39dd9b67b5308a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_78c13d4dbfa89d1f313336bcc6a76bab8d941267f22f1c61aa2acf0594bab065 = $this->env->getExtension("native_profiler");
        $__internal_78c13d4dbfa89d1f313336bcc6a76bab8d941267f22f1c61aa2acf0594bab065->enter($__internal_78c13d4dbfa89d1f313336bcc6a76bab8d941267f22f1c61aa2acf0594bab065_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_78c13d4dbfa89d1f313336bcc6a76bab8d941267f22f1c61aa2acf0594bab065->leave($__internal_78c13d4dbfa89d1f313336bcc6a76bab8d941267f22f1c61aa2acf0594bab065_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
