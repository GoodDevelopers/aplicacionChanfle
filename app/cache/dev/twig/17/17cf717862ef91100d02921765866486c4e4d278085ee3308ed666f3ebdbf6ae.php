<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_38ca0f7f397a279330bfc2412a83f046dffed2e983d6563b6125b8e866f24da2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_c661c1470e8f6184df3518c8bb74ac6bd153225ccd587b1e4856eba6ea87bd47 = $this->env->getExtension("native_profiler");
        $__internal_c661c1470e8f6184df3518c8bb74ac6bd153225ccd587b1e4856eba6ea87bd47->enter($__internal_c661c1470e8f6184df3518c8bb74ac6bd153225ccd587b1e4856eba6ea87bd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c661c1470e8f6184df3518c8bb74ac6bd153225ccd587b1e4856eba6ea87bd47->leave($__internal_c661c1470e8f6184df3518c8bb74ac6bd153225ccd587b1e4856eba6ea87bd47_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a9cf207801bc2da282a44ff6e910655fae46153c1c99d410d78e420cdef70d3e = $this->env->getExtension("native_profiler");
        $__internal_a9cf207801bc2da282a44ff6e910655fae46153c1c99d410d78e420cdef70d3e->enter($__internal_a9cf207801bc2da282a44ff6e910655fae46153c1c99d410d78e420cdef70d3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_a9cf207801bc2da282a44ff6e910655fae46153c1c99d410d78e420cdef70d3e->leave($__internal_a9cf207801bc2da282a44ff6e910655fae46153c1c99d410d78e420cdef70d3e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
