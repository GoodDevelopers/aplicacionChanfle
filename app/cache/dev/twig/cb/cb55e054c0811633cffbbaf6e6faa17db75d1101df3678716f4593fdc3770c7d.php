<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_e1c25f004471c5f232292ef480cba506b844b4d30cdfc0b8b917ffe94b1681d0 extends Twig_Template
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
        $__internal_1e6bd704afeb5f7659cf0073e58da1ec73362bbe2a728681c82fd89a3aa19002 = $this->env->getExtension("native_profiler");
        $__internal_1e6bd704afeb5f7659cf0073e58da1ec73362bbe2a728681c82fd89a3aa19002->enter($__internal_1e6bd704afeb5f7659cf0073e58da1ec73362bbe2a728681c82fd89a3aa19002_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1e6bd704afeb5f7659cf0073e58da1ec73362bbe2a728681c82fd89a3aa19002->leave($__internal_1e6bd704afeb5f7659cf0073e58da1ec73362bbe2a728681c82fd89a3aa19002_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8d9eb89a8bd299ace8b832346be3ca39b880e149b390a1c82cf6b22c7e693d6e = $this->env->getExtension("native_profiler");
        $__internal_8d9eb89a8bd299ace8b832346be3ca39b880e149b390a1c82cf6b22c7e693d6e->enter($__internal_8d9eb89a8bd299ace8b832346be3ca39b880e149b390a1c82cf6b22c7e693d6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_8d9eb89a8bd299ace8b832346be3ca39b880e149b390a1c82cf6b22c7e693d6e->leave($__internal_8d9eb89a8bd299ace8b832346be3ca39b880e149b390a1c82cf6b22c7e693d6e_prof);

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
