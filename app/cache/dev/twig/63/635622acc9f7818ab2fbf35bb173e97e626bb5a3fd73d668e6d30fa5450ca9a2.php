<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_3aa3202b7821c7b01a46efa162d42fa0f194ee83926aee5ec9dfd7d982567e76 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_00ff965d0aae7defd4eb95c0add21daab3dde330997528c7fbff9a671f4e6b1c = $this->env->getExtension("native_profiler");
        $__internal_00ff965d0aae7defd4eb95c0add21daab3dde330997528c7fbff9a671f4e6b1c->enter($__internal_00ff965d0aae7defd4eb95c0add21daab3dde330997528c7fbff9a671f4e6b1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_00ff965d0aae7defd4eb95c0add21daab3dde330997528c7fbff9a671f4e6b1c->leave($__internal_00ff965d0aae7defd4eb95c0add21daab3dde330997528c7fbff9a671f4e6b1c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06080828dd4e04e3a1e9a0d8384d5dd52a02597404c1806112e62cb9c159b371 = $this->env->getExtension("native_profiler");
        $__internal_06080828dd4e04e3a1e9a0d8384d5dd52a02597404c1806112e62cb9c159b371->enter($__internal_06080828dd4e04e3a1e9a0d8384d5dd52a02597404c1806112e62cb9c159b371_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_06080828dd4e04e3a1e9a0d8384d5dd52a02597404c1806112e62cb9c159b371->leave($__internal_06080828dd4e04e3a1e9a0d8384d5dd52a02597404c1806112e62cb9c159b371_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
