<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_990d0b67e6263888f4ba32b536c48930d8d7b3a23b138c1d3ef28863d050e702 extends Twig_Template
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
        $__internal_202be02505e42814d088086750e24db2acb71e07ca6d6237c209b3a483350173 = $this->env->getExtension("native_profiler");
        $__internal_202be02505e42814d088086750e24db2acb71e07ca6d6237c209b3a483350173->enter($__internal_202be02505e42814d088086750e24db2acb71e07ca6d6237c209b3a483350173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_202be02505e42814d088086750e24db2acb71e07ca6d6237c209b3a483350173->leave($__internal_202be02505e42814d088086750e24db2acb71e07ca6d6237c209b3a483350173_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bdc67c9385ccf4e269c1e9f0d9cf55fa29985e3a113653bbe0e4996716394f4a = $this->env->getExtension("native_profiler");
        $__internal_bdc67c9385ccf4e269c1e9f0d9cf55fa29985e3a113653bbe0e4996716394f4a->enter($__internal_bdc67c9385ccf4e269c1e9f0d9cf55fa29985e3a113653bbe0e4996716394f4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_bdc67c9385ccf4e269c1e9f0d9cf55fa29985e3a113653bbe0e4996716394f4a->leave($__internal_bdc67c9385ccf4e269c1e9f0d9cf55fa29985e3a113653bbe0e4996716394f4a_prof);

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
