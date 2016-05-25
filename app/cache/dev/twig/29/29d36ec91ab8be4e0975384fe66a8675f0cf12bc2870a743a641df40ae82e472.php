<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_50c3d18d46a9da9c123159cb9cb6d18d83852e84a1fea659e9b016eb849c7189 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_064ec4782896e976e62cdae2fef2b17ee4e358cfca80111caa456e66fe70f616 = $this->env->getExtension("native_profiler");
        $__internal_064ec4782896e976e62cdae2fef2b17ee4e358cfca80111caa456e66fe70f616->enter($__internal_064ec4782896e976e62cdae2fef2b17ee4e358cfca80111caa456e66fe70f616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_064ec4782896e976e62cdae2fef2b17ee4e358cfca80111caa456e66fe70f616->leave($__internal_064ec4782896e976e62cdae2fef2b17ee4e358cfca80111caa456e66fe70f616_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_52c46f2bc4575a345a37ad5f3a0371b90f7adc54bd9e8fe29a0c4227c134c7e6 = $this->env->getExtension("native_profiler");
        $__internal_52c46f2bc4575a345a37ad5f3a0371b90f7adc54bd9e8fe29a0c4227c134c7e6->enter($__internal_52c46f2bc4575a345a37ad5f3a0371b90f7adc54bd9e8fe29a0c4227c134c7e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_52c46f2bc4575a345a37ad5f3a0371b90f7adc54bd9e8fe29a0c4227c134c7e6->leave($__internal_52c46f2bc4575a345a37ad5f3a0371b90f7adc54bd9e8fe29a0c4227c134c7e6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
