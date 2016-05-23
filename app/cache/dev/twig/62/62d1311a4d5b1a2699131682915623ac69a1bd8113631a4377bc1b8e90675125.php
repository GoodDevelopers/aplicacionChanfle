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
        $__internal_065d5f6b00966c34ef9e7c1ac8c392ac43ea6d71a0caee1bddd21c6968712409 = $this->env->getExtension("native_profiler");
        $__internal_065d5f6b00966c34ef9e7c1ac8c392ac43ea6d71a0caee1bddd21c6968712409->enter($__internal_065d5f6b00966c34ef9e7c1ac8c392ac43ea6d71a0caee1bddd21c6968712409_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_065d5f6b00966c34ef9e7c1ac8c392ac43ea6d71a0caee1bddd21c6968712409->leave($__internal_065d5f6b00966c34ef9e7c1ac8c392ac43ea6d71a0caee1bddd21c6968712409_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8e0d02354d4bed77e5e22bbd4c49f09389d2bf49bfc8b8988838f37e300a93a1 = $this->env->getExtension("native_profiler");
        $__internal_8e0d02354d4bed77e5e22bbd4c49f09389d2bf49bfc8b8988838f37e300a93a1->enter($__internal_8e0d02354d4bed77e5e22bbd4c49f09389d2bf49bfc8b8988838f37e300a93a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8e0d02354d4bed77e5e22bbd4c49f09389d2bf49bfc8b8988838f37e300a93a1->leave($__internal_8e0d02354d4bed77e5e22bbd4c49f09389d2bf49bfc8b8988838f37e300a93a1_prof);

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
