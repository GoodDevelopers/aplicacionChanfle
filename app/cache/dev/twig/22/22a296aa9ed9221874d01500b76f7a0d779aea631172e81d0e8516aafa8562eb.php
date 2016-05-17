<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_bb2abeca9085adffba563ae4a640fe94e019b135deadbce65fe0d23f903925b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_b625411f8e3869b35c57cdd492fe7a32f9a9c7a4c8b4dce03ef17121e583d238 = $this->env->getExtension("native_profiler");
        $__internal_b625411f8e3869b35c57cdd492fe7a32f9a9c7a4c8b4dce03ef17121e583d238->enter($__internal_b625411f8e3869b35c57cdd492fe7a32f9a9c7a4c8b4dce03ef17121e583d238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b625411f8e3869b35c57cdd492fe7a32f9a9c7a4c8b4dce03ef17121e583d238->leave($__internal_b625411f8e3869b35c57cdd492fe7a32f9a9c7a4c8b4dce03ef17121e583d238_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99ef46141ca1a2611cbe8fcbd2ae2031ccf83503a7148fb6e8299f4e3860fe57 = $this->env->getExtension("native_profiler");
        $__internal_99ef46141ca1a2611cbe8fcbd2ae2031ccf83503a7148fb6e8299f4e3860fe57->enter($__internal_99ef46141ca1a2611cbe8fcbd2ae2031ccf83503a7148fb6e8299f4e3860fe57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_99ef46141ca1a2611cbe8fcbd2ae2031ccf83503a7148fb6e8299f4e3860fe57->leave($__internal_99ef46141ca1a2611cbe8fcbd2ae2031ccf83503a7148fb6e8299f4e3860fe57_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
