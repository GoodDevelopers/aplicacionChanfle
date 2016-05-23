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
        $__internal_9cd760db678712c41685e45a44995ae05a879ce664de884d91c934fb0e5d388a = $this->env->getExtension("native_profiler");
        $__internal_9cd760db678712c41685e45a44995ae05a879ce664de884d91c934fb0e5d388a->enter($__internal_9cd760db678712c41685e45a44995ae05a879ce664de884d91c934fb0e5d388a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9cd760db678712c41685e45a44995ae05a879ce664de884d91c934fb0e5d388a->leave($__internal_9cd760db678712c41685e45a44995ae05a879ce664de884d91c934fb0e5d388a_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fa78b6899ac7112ada09b8512e2f16cfe281a53a486ddce48f7108423f797c5 = $this->env->getExtension("native_profiler");
        $__internal_4fa78b6899ac7112ada09b8512e2f16cfe281a53a486ddce48f7108423f797c5->enter($__internal_4fa78b6899ac7112ada09b8512e2f16cfe281a53a486ddce48f7108423f797c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_4fa78b6899ac7112ada09b8512e2f16cfe281a53a486ddce48f7108423f797c5->leave($__internal_4fa78b6899ac7112ada09b8512e2f16cfe281a53a486ddce48f7108423f797c5_prof);

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
