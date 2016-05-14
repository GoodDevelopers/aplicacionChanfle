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
        $__internal_4065b3300d5f13cc972067c9512547d39a78547c1bff9e64d84b885592309f82 = $this->env->getExtension("native_profiler");
        $__internal_4065b3300d5f13cc972067c9512547d39a78547c1bff9e64d84b885592309f82->enter($__internal_4065b3300d5f13cc972067c9512547d39a78547c1bff9e64d84b885592309f82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4065b3300d5f13cc972067c9512547d39a78547c1bff9e64d84b885592309f82->leave($__internal_4065b3300d5f13cc972067c9512547d39a78547c1bff9e64d84b885592309f82_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_04a3e59249a7b3a2f2422bd3e4377c31a5d62d8ccd950ad8a55f6ec33370a9b6 = $this->env->getExtension("native_profiler");
        $__internal_04a3e59249a7b3a2f2422bd3e4377c31a5d62d8ccd950ad8a55f6ec33370a9b6->enter($__internal_04a3e59249a7b3a2f2422bd3e4377c31a5d62d8ccd950ad8a55f6ec33370a9b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_04a3e59249a7b3a2f2422bd3e4377c31a5d62d8ccd950ad8a55f6ec33370a9b6->leave($__internal_04a3e59249a7b3a2f2422bd3e4377c31a5d62d8ccd950ad8a55f6ec33370a9b6_prof);

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
