<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_0d1a1ef2ea300b9c105ad41f08e823b7dd186bd5d3d672a6c608c23ccabaa92f extends Twig_Template
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
        $__internal_a6bbb245256fd6f74426ba515fd5813f7e6c63f7bc67461126cdf67d9f652177 = $this->env->getExtension("native_profiler");
        $__internal_a6bbb245256fd6f74426ba515fd5813f7e6c63f7bc67461126cdf67d9f652177->enter($__internal_a6bbb245256fd6f74426ba515fd5813f7e6c63f7bc67461126cdf67d9f652177_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6bbb245256fd6f74426ba515fd5813f7e6c63f7bc67461126cdf67d9f652177->leave($__internal_a6bbb245256fd6f74426ba515fd5813f7e6c63f7bc67461126cdf67d9f652177_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_98d7390ec2168438d1df7346149d27f08fea3225f7005fff57e4e1beb9d141ac = $this->env->getExtension("native_profiler");
        $__internal_98d7390ec2168438d1df7346149d27f08fea3225f7005fff57e4e1beb9d141ac->enter($__internal_98d7390ec2168438d1df7346149d27f08fea3225f7005fff57e4e1beb9d141ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_98d7390ec2168438d1df7346149d27f08fea3225f7005fff57e4e1beb9d141ac->leave($__internal_98d7390ec2168438d1df7346149d27f08fea3225f7005fff57e4e1beb9d141ac_prof);

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
