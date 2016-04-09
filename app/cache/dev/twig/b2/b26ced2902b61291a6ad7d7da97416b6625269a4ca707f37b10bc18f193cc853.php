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
        $__internal_ae7690c8e275efdefce5b29a6a9e71763cbacbffa42ae9b18d7b556c134e4390 = $this->env->getExtension("native_profiler");
        $__internal_ae7690c8e275efdefce5b29a6a9e71763cbacbffa42ae9b18d7b556c134e4390->enter($__internal_ae7690c8e275efdefce5b29a6a9e71763cbacbffa42ae9b18d7b556c134e4390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae7690c8e275efdefce5b29a6a9e71763cbacbffa42ae9b18d7b556c134e4390->leave($__internal_ae7690c8e275efdefce5b29a6a9e71763cbacbffa42ae9b18d7b556c134e4390_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_92b9af5ef97239b1634c305c31806ff5d73c5c2de8bf3f2928104d0e0dcae583 = $this->env->getExtension("native_profiler");
        $__internal_92b9af5ef97239b1634c305c31806ff5d73c5c2de8bf3f2928104d0e0dcae583->enter($__internal_92b9af5ef97239b1634c305c31806ff5d73c5c2de8bf3f2928104d0e0dcae583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_92b9af5ef97239b1634c305c31806ff5d73c5c2de8bf3f2928104d0e0dcae583->leave($__internal_92b9af5ef97239b1634c305c31806ff5d73c5c2de8bf3f2928104d0e0dcae583_prof);

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
