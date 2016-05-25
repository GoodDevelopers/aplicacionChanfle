<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_359baba3b8636371dfb95a5e513af61fe92ff6a40741842f2631bf8beb4fd91e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_dbb98c8b59b6b011bc8c7b8453b15a86ce443598ba2e254b6422823682cdf38c = $this->env->getExtension("native_profiler");
        $__internal_dbb98c8b59b6b011bc8c7b8453b15a86ce443598ba2e254b6422823682cdf38c->enter($__internal_dbb98c8b59b6b011bc8c7b8453b15a86ce443598ba2e254b6422823682cdf38c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dbb98c8b59b6b011bc8c7b8453b15a86ce443598ba2e254b6422823682cdf38c->leave($__internal_dbb98c8b59b6b011bc8c7b8453b15a86ce443598ba2e254b6422823682cdf38c_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_57c450a331f8dbdacb23c3a41f2682ea8427b35d3e39b9943ca75c97fe603281 = $this->env->getExtension("native_profiler");
        $__internal_57c450a331f8dbdacb23c3a41f2682ea8427b35d3e39b9943ca75c97fe603281->enter($__internal_57c450a331f8dbdacb23c3a41f2682ea8427b35d3e39b9943ca75c97fe603281_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_57c450a331f8dbdacb23c3a41f2682ea8427b35d3e39b9943ca75c97fe603281->leave($__internal_57c450a331f8dbdacb23c3a41f2682ea8427b35d3e39b9943ca75c97fe603281_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
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
