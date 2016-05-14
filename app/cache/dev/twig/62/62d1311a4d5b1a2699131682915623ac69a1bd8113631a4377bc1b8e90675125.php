<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_692d4455863a3ea2802a088d0ade795801f7e85a007f93452b92ccfd4e905226 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_5e5dd5b7fddcfff7223193ffa2739115d8f2c9f1bb2081432aead5134a650346 = $this->env->getExtension("native_profiler");
        $__internal_5e5dd5b7fddcfff7223193ffa2739115d8f2c9f1bb2081432aead5134a650346->enter($__internal_5e5dd5b7fddcfff7223193ffa2739115d8f2c9f1bb2081432aead5134a650346_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5e5dd5b7fddcfff7223193ffa2739115d8f2c9f1bb2081432aead5134a650346->leave($__internal_5e5dd5b7fddcfff7223193ffa2739115d8f2c9f1bb2081432aead5134a650346_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_10716a3828adf7393c0d3f38663ff0780009b57520c3b164110b8513bff2ce62 = $this->env->getExtension("native_profiler");
        $__internal_10716a3828adf7393c0d3f38663ff0780009b57520c3b164110b8513bff2ce62->enter($__internal_10716a3828adf7393c0d3f38663ff0780009b57520c3b164110b8513bff2ce62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_10716a3828adf7393c0d3f38663ff0780009b57520c3b164110b8513bff2ce62->leave($__internal_10716a3828adf7393c0d3f38663ff0780009b57520c3b164110b8513bff2ce62_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
