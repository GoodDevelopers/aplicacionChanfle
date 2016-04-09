<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_f754d6d4706f51310a0af716fd6b2490a41f7f5de4578be51c0bdd196e904765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_d81542f70b697fe337c7f09926c8b24425c2da39a6d6418b58fcf55be9cb25de = $this->env->getExtension("native_profiler");
        $__internal_d81542f70b697fe337c7f09926c8b24425c2da39a6d6418b58fcf55be9cb25de->enter($__internal_d81542f70b697fe337c7f09926c8b24425c2da39a6d6418b58fcf55be9cb25de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d81542f70b697fe337c7f09926c8b24425c2da39a6d6418b58fcf55be9cb25de->leave($__internal_d81542f70b697fe337c7f09926c8b24425c2da39a6d6418b58fcf55be9cb25de_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_01eedf488811aae40c0424dac25b1c2525ace8802f166ce95f28042c92393c94 = $this->env->getExtension("native_profiler");
        $__internal_01eedf488811aae40c0424dac25b1c2525ace8802f166ce95f28042c92393c94->enter($__internal_01eedf488811aae40c0424dac25b1c2525ace8802f166ce95f28042c92393c94_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_01eedf488811aae40c0424dac25b1c2525ace8802f166ce95f28042c92393c94->leave($__internal_01eedf488811aae40c0424dac25b1c2525ace8802f166ce95f28042c92393c94_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
