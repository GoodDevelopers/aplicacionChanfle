<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a17c6220af1e1aa936b39d43c83fd1b24d82da2b4dd69be36a032d41183a244e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_8d2891b4aaaea68c38d3438c324ca9c3dda60f7f4f27e3d8aeacf97d488139c1 = $this->env->getExtension("native_profiler");
        $__internal_8d2891b4aaaea68c38d3438c324ca9c3dda60f7f4f27e3d8aeacf97d488139c1->enter($__internal_8d2891b4aaaea68c38d3438c324ca9c3dda60f7f4f27e3d8aeacf97d488139c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8d2891b4aaaea68c38d3438c324ca9c3dda60f7f4f27e3d8aeacf97d488139c1->leave($__internal_8d2891b4aaaea68c38d3438c324ca9c3dda60f7f4f27e3d8aeacf97d488139c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ff7dc847e6c57a2f317d2c645e0ca390bf236781746556a88019c49a1978e65d = $this->env->getExtension("native_profiler");
        $__internal_ff7dc847e6c57a2f317d2c645e0ca390bf236781746556a88019c49a1978e65d->enter($__internal_ff7dc847e6c57a2f317d2c645e0ca390bf236781746556a88019c49a1978e65d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_ff7dc847e6c57a2f317d2c645e0ca390bf236781746556a88019c49a1978e65d->leave($__internal_ff7dc847e6c57a2f317d2c645e0ca390bf236781746556a88019c49a1978e65d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
