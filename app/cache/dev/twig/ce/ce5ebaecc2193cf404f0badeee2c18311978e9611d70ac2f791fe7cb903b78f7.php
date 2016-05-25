<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_649ca909d5148f23251f8ae192cb1882e8b692dadc2683ceeabca2d4bb7f9606 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_fad29faf07d0e8ab72629738a7627b1585e3bc33e24c6ed8b074b9c8ea79d599 = $this->env->getExtension("native_profiler");
        $__internal_fad29faf07d0e8ab72629738a7627b1585e3bc33e24c6ed8b074b9c8ea79d599->enter($__internal_fad29faf07d0e8ab72629738a7627b1585e3bc33e24c6ed8b074b9c8ea79d599_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fad29faf07d0e8ab72629738a7627b1585e3bc33e24c6ed8b074b9c8ea79d599->leave($__internal_fad29faf07d0e8ab72629738a7627b1585e3bc33e24c6ed8b074b9c8ea79d599_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7211c5323341192d008b67ecb7c7b7aa9a501f3919b3de1ce3e82928d559b3b8 = $this->env->getExtension("native_profiler");
        $__internal_7211c5323341192d008b67ecb7c7b7aa9a501f3919b3de1ce3e82928d559b3b8->enter($__internal_7211c5323341192d008b67ecb7c7b7aa9a501f3919b3de1ce3e82928d559b3b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_7211c5323341192d008b67ecb7c7b7aa9a501f3919b3de1ce3e82928d559b3b8->leave($__internal_7211c5323341192d008b67ecb7c7b7aa9a501f3919b3de1ce3e82928d559b3b8_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
