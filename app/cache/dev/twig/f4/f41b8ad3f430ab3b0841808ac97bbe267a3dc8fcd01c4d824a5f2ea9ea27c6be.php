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
        $__internal_70aedd5bde3afcfa13c48f044ba500bc21b6e445bcac42a215c20df847433c31 = $this->env->getExtension("native_profiler");
        $__internal_70aedd5bde3afcfa13c48f044ba500bc21b6e445bcac42a215c20df847433c31->enter($__internal_70aedd5bde3afcfa13c48f044ba500bc21b6e445bcac42a215c20df847433c31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70aedd5bde3afcfa13c48f044ba500bc21b6e445bcac42a215c20df847433c31->leave($__internal_70aedd5bde3afcfa13c48f044ba500bc21b6e445bcac42a215c20df847433c31_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_dbdaa2e535e3acbad9be72b02764f012f8ec49d59d034a3014bc99d86ec4f642 = $this->env->getExtension("native_profiler");
        $__internal_dbdaa2e535e3acbad9be72b02764f012f8ec49d59d034a3014bc99d86ec4f642->enter($__internal_dbdaa2e535e3acbad9be72b02764f012f8ec49d59d034a3014bc99d86ec4f642_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_dbdaa2e535e3acbad9be72b02764f012f8ec49d59d034a3014bc99d86ec4f642->leave($__internal_dbdaa2e535e3acbad9be72b02764f012f8ec49d59d034a3014bc99d86ec4f642_prof);

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
