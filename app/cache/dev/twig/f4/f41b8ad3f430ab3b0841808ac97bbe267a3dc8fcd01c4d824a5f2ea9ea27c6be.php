<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_004b669d15185fdb9e81a742eabbff3af9533ea2fd6799ea77b525d869933065 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_712d033a2fc890e0cd9a2f8d65e0e69fd010c0e8f089637a1d1bbc87d4c0c07a = $this->env->getExtension("native_profiler");
        $__internal_712d033a2fc890e0cd9a2f8d65e0e69fd010c0e8f089637a1d1bbc87d4c0c07a->enter($__internal_712d033a2fc890e0cd9a2f8d65e0e69fd010c0e8f089637a1d1bbc87d4c0c07a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_712d033a2fc890e0cd9a2f8d65e0e69fd010c0e8f089637a1d1bbc87d4c0c07a->leave($__internal_712d033a2fc890e0cd9a2f8d65e0e69fd010c0e8f089637a1d1bbc87d4c0c07a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7c91ef5bf2fc56961a4f8d873dfb2b4328b300a8678c8c234c9d1340a482de72 = $this->env->getExtension("native_profiler");
        $__internal_7c91ef5bf2fc56961a4f8d873dfb2b4328b300a8678c8c234c9d1340a482de72->enter($__internal_7c91ef5bf2fc56961a4f8d873dfb2b4328b300a8678c8c234c9d1340a482de72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_7c91ef5bf2fc56961a4f8d873dfb2b4328b300a8678c8c234c9d1340a482de72->leave($__internal_7c91ef5bf2fc56961a4f8d873dfb2b4328b300a8678c8c234c9d1340a482de72_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
