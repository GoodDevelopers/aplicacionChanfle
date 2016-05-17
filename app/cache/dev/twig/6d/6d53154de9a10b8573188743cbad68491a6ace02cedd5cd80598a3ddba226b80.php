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
        $__internal_9e6b6613e23da701a0d4ed995b6bb42eb40408c45ba687d6b4bdcd81f7c5c0e0 = $this->env->getExtension("native_profiler");
        $__internal_9e6b6613e23da701a0d4ed995b6bb42eb40408c45ba687d6b4bdcd81f7c5c0e0->enter($__internal_9e6b6613e23da701a0d4ed995b6bb42eb40408c45ba687d6b4bdcd81f7c5c0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9e6b6613e23da701a0d4ed995b6bb42eb40408c45ba687d6b4bdcd81f7c5c0e0->leave($__internal_9e6b6613e23da701a0d4ed995b6bb42eb40408c45ba687d6b4bdcd81f7c5c0e0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04fac0af216b8db91ad178f683de45a047ef34c058aac37483e717144af7f5b8 = $this->env->getExtension("native_profiler");
        $__internal_04fac0af216b8db91ad178f683de45a047ef34c058aac37483e717144af7f5b8->enter($__internal_04fac0af216b8db91ad178f683de45a047ef34c058aac37483e717144af7f5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_04fac0af216b8db91ad178f683de45a047ef34c058aac37483e717144af7f5b8->leave($__internal_04fac0af216b8db91ad178f683de45a047ef34c058aac37483e717144af7f5b8_prof);

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
