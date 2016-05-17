<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7756e91a7b15d47ccb9071579015e7f1f87ba3d852c243b6aec85c000af5c479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_eaaca0757a45d6b1816cc644ebfe2ac96165bb5919a4b569da92de0631e74d39 = $this->env->getExtension("native_profiler");
        $__internal_eaaca0757a45d6b1816cc644ebfe2ac96165bb5919a4b569da92de0631e74d39->enter($__internal_eaaca0757a45d6b1816cc644ebfe2ac96165bb5919a4b569da92de0631e74d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaaca0757a45d6b1816cc644ebfe2ac96165bb5919a4b569da92de0631e74d39->leave($__internal_eaaca0757a45d6b1816cc644ebfe2ac96165bb5919a4b569da92de0631e74d39_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2feef28b1461dc06c5fa936402f869618871d8698a2d08683702ae23973cb6b1 = $this->env->getExtension("native_profiler");
        $__internal_2feef28b1461dc06c5fa936402f869618871d8698a2d08683702ae23973cb6b1->enter($__internal_2feef28b1461dc06c5fa936402f869618871d8698a2d08683702ae23973cb6b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_2feef28b1461dc06c5fa936402f869618871d8698a2d08683702ae23973cb6b1->leave($__internal_2feef28b1461dc06c5fa936402f869618871d8698a2d08683702ae23973cb6b1_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
