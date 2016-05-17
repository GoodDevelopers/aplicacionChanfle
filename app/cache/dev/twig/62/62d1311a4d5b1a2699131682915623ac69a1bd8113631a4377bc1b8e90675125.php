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
        $__internal_e7d34dcbc537c60fd567a9a550a0a8fa2d74232772b49d0176855ad8ae8a13b6 = $this->env->getExtension("native_profiler");
        $__internal_e7d34dcbc537c60fd567a9a550a0a8fa2d74232772b49d0176855ad8ae8a13b6->enter($__internal_e7d34dcbc537c60fd567a9a550a0a8fa2d74232772b49d0176855ad8ae8a13b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e7d34dcbc537c60fd567a9a550a0a8fa2d74232772b49d0176855ad8ae8a13b6->leave($__internal_e7d34dcbc537c60fd567a9a550a0a8fa2d74232772b49d0176855ad8ae8a13b6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_62d7ea36b9ce86f8070a19f1060a6d3645b866569ff8d125841cce5468f32fe7 = $this->env->getExtension("native_profiler");
        $__internal_62d7ea36b9ce86f8070a19f1060a6d3645b866569ff8d125841cce5468f32fe7->enter($__internal_62d7ea36b9ce86f8070a19f1060a6d3645b866569ff8d125841cce5468f32fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_62d7ea36b9ce86f8070a19f1060a6d3645b866569ff8d125841cce5468f32fe7->leave($__internal_62d7ea36b9ce86f8070a19f1060a6d3645b866569ff8d125841cce5468f32fe7_prof);

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
