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
        $__internal_aafe8577e4bdfe637277e01dd281a8018b6a2e0217aa66c7611fa1301e83f3c6 = $this->env->getExtension("native_profiler");
        $__internal_aafe8577e4bdfe637277e01dd281a8018b6a2e0217aa66c7611fa1301e83f3c6->enter($__internal_aafe8577e4bdfe637277e01dd281a8018b6a2e0217aa66c7611fa1301e83f3c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aafe8577e4bdfe637277e01dd281a8018b6a2e0217aa66c7611fa1301e83f3c6->leave($__internal_aafe8577e4bdfe637277e01dd281a8018b6a2e0217aa66c7611fa1301e83f3c6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_83c3ed26adaa806b1f403cedb210d44cdd81eb536d1e83a422779933e6af929e = $this->env->getExtension("native_profiler");
        $__internal_83c3ed26adaa806b1f403cedb210d44cdd81eb536d1e83a422779933e6af929e->enter($__internal_83c3ed26adaa806b1f403cedb210d44cdd81eb536d1e83a422779933e6af929e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_83c3ed26adaa806b1f403cedb210d44cdd81eb536d1e83a422779933e6af929e->leave($__internal_83c3ed26adaa806b1f403cedb210d44cdd81eb536d1e83a422779933e6af929e_prof);

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
