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
        $__internal_b25b9986278de81fb8c46c06b41aee2c38fcfa23f0fdfb9a7201025c3668bd9f = $this->env->getExtension("native_profiler");
        $__internal_b25b9986278de81fb8c46c06b41aee2c38fcfa23f0fdfb9a7201025c3668bd9f->enter($__internal_b25b9986278de81fb8c46c06b41aee2c38fcfa23f0fdfb9a7201025c3668bd9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b25b9986278de81fb8c46c06b41aee2c38fcfa23f0fdfb9a7201025c3668bd9f->leave($__internal_b25b9986278de81fb8c46c06b41aee2c38fcfa23f0fdfb9a7201025c3668bd9f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b86080d2db90d1c4fa57dc5e36bc16967d00baf295e6e1898beb72078da44f60 = $this->env->getExtension("native_profiler");
        $__internal_b86080d2db90d1c4fa57dc5e36bc16967d00baf295e6e1898beb72078da44f60->enter($__internal_b86080d2db90d1c4fa57dc5e36bc16967d00baf295e6e1898beb72078da44f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_b86080d2db90d1c4fa57dc5e36bc16967d00baf295e6e1898beb72078da44f60->leave($__internal_b86080d2db90d1c4fa57dc5e36bc16967d00baf295e6e1898beb72078da44f60_prof);

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
