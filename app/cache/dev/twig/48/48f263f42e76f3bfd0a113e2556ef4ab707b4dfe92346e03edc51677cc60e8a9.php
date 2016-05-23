<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9525767148a997a23c957c6828d97df783af45e5e11e124f9469742bc181dab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_34e1f9dddb84545abb2c0c67e77e9afec17e64d236cfed72ac500070130ef458 = $this->env->getExtension("native_profiler");
        $__internal_34e1f9dddb84545abb2c0c67e77e9afec17e64d236cfed72ac500070130ef458->enter($__internal_34e1f9dddb84545abb2c0c67e77e9afec17e64d236cfed72ac500070130ef458_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34e1f9dddb84545abb2c0c67e77e9afec17e64d236cfed72ac500070130ef458->leave($__internal_34e1f9dddb84545abb2c0c67e77e9afec17e64d236cfed72ac500070130ef458_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b497f9199d9a513dd70d477f0597b99369228877991e31e979183814995825b8 = $this->env->getExtension("native_profiler");
        $__internal_b497f9199d9a513dd70d477f0597b99369228877991e31e979183814995825b8->enter($__internal_b497f9199d9a513dd70d477f0597b99369228877991e31e979183814995825b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_b497f9199d9a513dd70d477f0597b99369228877991e31e979183814995825b8->leave($__internal_b497f9199d9a513dd70d477f0597b99369228877991e31e979183814995825b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
