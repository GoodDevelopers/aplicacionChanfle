<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_721605dfd6ea1e74e04bab198ed372e44c50fad49abc67ab460f0c3b51665d20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_79a4678e7ee63fa4808cf564fa2fc94c76f89b67eb2e0588a5823c81c4d7eb70 = $this->env->getExtension("native_profiler");
        $__internal_79a4678e7ee63fa4808cf564fa2fc94c76f89b67eb2e0588a5823c81c4d7eb70->enter($__internal_79a4678e7ee63fa4808cf564fa2fc94c76f89b67eb2e0588a5823c81c4d7eb70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79a4678e7ee63fa4808cf564fa2fc94c76f89b67eb2e0588a5823c81c4d7eb70->leave($__internal_79a4678e7ee63fa4808cf564fa2fc94c76f89b67eb2e0588a5823c81c4d7eb70_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_939adae4e781b4b54befa6448dddf7e86e40a3bd307b6cc6db8cb246cde8cb9e = $this->env->getExtension("native_profiler");
        $__internal_939adae4e781b4b54befa6448dddf7e86e40a3bd307b6cc6db8cb246cde8cb9e->enter($__internal_939adae4e781b4b54befa6448dddf7e86e40a3bd307b6cc6db8cb246cde8cb9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_939adae4e781b4b54befa6448dddf7e86e40a3bd307b6cc6db8cb246cde8cb9e->leave($__internal_939adae4e781b4b54befa6448dddf7e86e40a3bd307b6cc6db8cb246cde8cb9e_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
