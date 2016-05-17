<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_84c6de8241425dfbb33e665a46f638627c3521bcb0167b86ebff8bcee78e266e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_04a61eab5837b9158bbc7eac2e74bc6d4acf6ab79dd8fd90c0ce10b3bffe859c = $this->env->getExtension("native_profiler");
        $__internal_04a61eab5837b9158bbc7eac2e74bc6d4acf6ab79dd8fd90c0ce10b3bffe859c->enter($__internal_04a61eab5837b9158bbc7eac2e74bc6d4acf6ab79dd8fd90c0ce10b3bffe859c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04a61eab5837b9158bbc7eac2e74bc6d4acf6ab79dd8fd90c0ce10b3bffe859c->leave($__internal_04a61eab5837b9158bbc7eac2e74bc6d4acf6ab79dd8fd90c0ce10b3bffe859c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_39f39c25e2c9eca2526ce1a0e9c63a4c1cc53e1cf346e9d1922eb298358f82e1 = $this->env->getExtension("native_profiler");
        $__internal_39f39c25e2c9eca2526ce1a0e9c63a4c1cc53e1cf346e9d1922eb298358f82e1->enter($__internal_39f39c25e2c9eca2526ce1a0e9c63a4c1cc53e1cf346e9d1922eb298358f82e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_39f39c25e2c9eca2526ce1a0e9c63a4c1cc53e1cf346e9d1922eb298358f82e1->leave($__internal_39f39c25e2c9eca2526ce1a0e9c63a4c1cc53e1cf346e9d1922eb298358f82e1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
