<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6571455a57738638c909a87ade1c97f0817910dd371c69eff9a699852f5ebd70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_60e6ad897bc4d7a3f787f8ead19782187820fc4b690fe3560129ee03623f36b8 = $this->env->getExtension("native_profiler");
        $__internal_60e6ad897bc4d7a3f787f8ead19782187820fc4b690fe3560129ee03623f36b8->enter($__internal_60e6ad897bc4d7a3f787f8ead19782187820fc4b690fe3560129ee03623f36b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_60e6ad897bc4d7a3f787f8ead19782187820fc4b690fe3560129ee03623f36b8->leave($__internal_60e6ad897bc4d7a3f787f8ead19782187820fc4b690fe3560129ee03623f36b8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b36cfdf137736c9a6e740e986c344bcbe451a300313e573d1aa2ea152d8a4fbe = $this->env->getExtension("native_profiler");
        $__internal_b36cfdf137736c9a6e740e986c344bcbe451a300313e573d1aa2ea152d8a4fbe->enter($__internal_b36cfdf137736c9a6e740e986c344bcbe451a300313e573d1aa2ea152d8a4fbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_b36cfdf137736c9a6e740e986c344bcbe451a300313e573d1aa2ea152d8a4fbe->leave($__internal_b36cfdf137736c9a6e740e986c344bcbe451a300313e573d1aa2ea152d8a4fbe_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
