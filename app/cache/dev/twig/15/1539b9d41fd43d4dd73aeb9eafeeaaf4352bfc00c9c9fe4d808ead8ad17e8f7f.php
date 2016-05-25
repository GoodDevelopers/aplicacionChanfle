<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_6cb90739aa96c3af3403971e1c2c060d778371d129ea2b6d912779105f33fb0b extends Twig_Template
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
        $__internal_8465032ac1614019e1469f2917c54f9aad3aa6fe821a24cbbc1eadcd0088f13d = $this->env->getExtension("native_profiler");
        $__internal_8465032ac1614019e1469f2917c54f9aad3aa6fe821a24cbbc1eadcd0088f13d->enter($__internal_8465032ac1614019e1469f2917c54f9aad3aa6fe821a24cbbc1eadcd0088f13d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8465032ac1614019e1469f2917c54f9aad3aa6fe821a24cbbc1eadcd0088f13d->leave($__internal_8465032ac1614019e1469f2917c54f9aad3aa6fe821a24cbbc1eadcd0088f13d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_422f279a5fb71833c44625867372dc65c5b1faa3ac2b09f224b95a45d12e93bb = $this->env->getExtension("native_profiler");
        $__internal_422f279a5fb71833c44625867372dc65c5b1faa3ac2b09f224b95a45d12e93bb->enter($__internal_422f279a5fb71833c44625867372dc65c5b1faa3ac2b09f224b95a45d12e93bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_422f279a5fb71833c44625867372dc65c5b1faa3ac2b09f224b95a45d12e93bb->leave($__internal_422f279a5fb71833c44625867372dc65c5b1faa3ac2b09f224b95a45d12e93bb_prof);

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
