<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_909ae0384e2fc36dce5897a790e419e15f7df9677ba246c6385a468e2ac0a40a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_05b99595670658e485d0ffe962362050fb96bbdadbc661c9222177af8135a470 = $this->env->getExtension("native_profiler");
        $__internal_05b99595670658e485d0ffe962362050fb96bbdadbc661c9222177af8135a470->enter($__internal_05b99595670658e485d0ffe962362050fb96bbdadbc661c9222177af8135a470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05b99595670658e485d0ffe962362050fb96bbdadbc661c9222177af8135a470->leave($__internal_05b99595670658e485d0ffe962362050fb96bbdadbc661c9222177af8135a470_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_70f1551eeabdb640b94e8c27549b85503429dad2de43743fae3ae7f6033d194b = $this->env->getExtension("native_profiler");
        $__internal_70f1551eeabdb640b94e8c27549b85503429dad2de43743fae3ae7f6033d194b->enter($__internal_70f1551eeabdb640b94e8c27549b85503429dad2de43743fae3ae7f6033d194b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_70f1551eeabdb640b94e8c27549b85503429dad2de43743fae3ae7f6033d194b->leave($__internal_70f1551eeabdb640b94e8c27549b85503429dad2de43743fae3ae7f6033d194b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
