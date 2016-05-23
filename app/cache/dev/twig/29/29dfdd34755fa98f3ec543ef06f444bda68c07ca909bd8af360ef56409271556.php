<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_65b63ab981f3ea84c9d75bf142a45f51c488ac6e22879315e1565f4ab5bee79f extends Twig_Template
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
        $__internal_564f9ae7473cd1c8484ea7b19ae037ced7de58e5ec22dfa5d6279e756649b800 = $this->env->getExtension("native_profiler");
        $__internal_564f9ae7473cd1c8484ea7b19ae037ced7de58e5ec22dfa5d6279e756649b800->enter($__internal_564f9ae7473cd1c8484ea7b19ae037ced7de58e5ec22dfa5d6279e756649b800_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_564f9ae7473cd1c8484ea7b19ae037ced7de58e5ec22dfa5d6279e756649b800->leave($__internal_564f9ae7473cd1c8484ea7b19ae037ced7de58e5ec22dfa5d6279e756649b800_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_393fbf7d89da04ea74b1d54fa064daffa4e1213dc4a4c4cbd1fc1c489f7d33d4 = $this->env->getExtension("native_profiler");
        $__internal_393fbf7d89da04ea74b1d54fa064daffa4e1213dc4a4c4cbd1fc1c489f7d33d4->enter($__internal_393fbf7d89da04ea74b1d54fa064daffa4e1213dc4a4c4cbd1fc1c489f7d33d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_393fbf7d89da04ea74b1d54fa064daffa4e1213dc4a4c4cbd1fc1c489f7d33d4->leave($__internal_393fbf7d89da04ea74b1d54fa064daffa4e1213dc4a4c4cbd1fc1c489f7d33d4_prof);

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
