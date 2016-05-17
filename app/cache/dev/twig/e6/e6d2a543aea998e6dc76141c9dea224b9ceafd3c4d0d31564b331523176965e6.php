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
        $__internal_e25995c7ea680eb538e33d2593c8114fb92ac5d9fcfd72183af466bc5a2e6583 = $this->env->getExtension("native_profiler");
        $__internal_e25995c7ea680eb538e33d2593c8114fb92ac5d9fcfd72183af466bc5a2e6583->enter($__internal_e25995c7ea680eb538e33d2593c8114fb92ac5d9fcfd72183af466bc5a2e6583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e25995c7ea680eb538e33d2593c8114fb92ac5d9fcfd72183af466bc5a2e6583->leave($__internal_e25995c7ea680eb538e33d2593c8114fb92ac5d9fcfd72183af466bc5a2e6583_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_309f6b0fa1316b819bbfd0c756c3268d1e0dd3864ba255cdec13f1ab59d964b3 = $this->env->getExtension("native_profiler");
        $__internal_309f6b0fa1316b819bbfd0c756c3268d1e0dd3864ba255cdec13f1ab59d964b3->enter($__internal_309f6b0fa1316b819bbfd0c756c3268d1e0dd3864ba255cdec13f1ab59d964b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_309f6b0fa1316b819bbfd0c756c3268d1e0dd3864ba255cdec13f1ab59d964b3->leave($__internal_309f6b0fa1316b819bbfd0c756c3268d1e0dd3864ba255cdec13f1ab59d964b3_prof);

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
