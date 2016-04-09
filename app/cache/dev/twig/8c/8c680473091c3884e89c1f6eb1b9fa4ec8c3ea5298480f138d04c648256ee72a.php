<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_30d83c4150cdd07cad31ff84b6909691681fd29cb070a50abd1884608cafe61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_28f58a9c96853008a642f285f9d1ebf94d13b64ae8bfba4774755468942b56bc = $this->env->getExtension("native_profiler");
        $__internal_28f58a9c96853008a642f285f9d1ebf94d13b64ae8bfba4774755468942b56bc->enter($__internal_28f58a9c96853008a642f285f9d1ebf94d13b64ae8bfba4774755468942b56bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_28f58a9c96853008a642f285f9d1ebf94d13b64ae8bfba4774755468942b56bc->leave($__internal_28f58a9c96853008a642f285f9d1ebf94d13b64ae8bfba4774755468942b56bc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a5674ea54078c6d69fa1d607af43841efd043addda54346a8602315c879bd9ec = $this->env->getExtension("native_profiler");
        $__internal_a5674ea54078c6d69fa1d607af43841efd043addda54346a8602315c879bd9ec->enter($__internal_a5674ea54078c6d69fa1d607af43841efd043addda54346a8602315c879bd9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_a5674ea54078c6d69fa1d607af43841efd043addda54346a8602315c879bd9ec->leave($__internal_a5674ea54078c6d69fa1d607af43841efd043addda54346a8602315c879bd9ec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
