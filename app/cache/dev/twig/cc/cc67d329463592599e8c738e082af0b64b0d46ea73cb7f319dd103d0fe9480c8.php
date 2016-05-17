<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0034739247cd6f894642d7ee1e809c7cfa142527cb6dbc7b9d1259b2587879bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_2209656f0ab968cf5751c26355bc34ef5d8a42d4fd1a879d3beda83b773be517 = $this->env->getExtension("native_profiler");
        $__internal_2209656f0ab968cf5751c26355bc34ef5d8a42d4fd1a879d3beda83b773be517->enter($__internal_2209656f0ab968cf5751c26355bc34ef5d8a42d4fd1a879d3beda83b773be517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2209656f0ab968cf5751c26355bc34ef5d8a42d4fd1a879d3beda83b773be517->leave($__internal_2209656f0ab968cf5751c26355bc34ef5d8a42d4fd1a879d3beda83b773be517_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aa19ccd2f31196b8ff106ac0d5aa2321cf53e16869758e91de65fe3412f6642c = $this->env->getExtension("native_profiler");
        $__internal_aa19ccd2f31196b8ff106ac0d5aa2321cf53e16869758e91de65fe3412f6642c->enter($__internal_aa19ccd2f31196b8ff106ac0d5aa2321cf53e16869758e91de65fe3412f6642c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_aa19ccd2f31196b8ff106ac0d5aa2321cf53e16869758e91de65fe3412f6642c->leave($__internal_aa19ccd2f31196b8ff106ac0d5aa2321cf53e16869758e91de65fe3412f6642c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
