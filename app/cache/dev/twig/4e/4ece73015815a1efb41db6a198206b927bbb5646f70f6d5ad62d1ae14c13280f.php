<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5cfda331ad93671956f6a306a9fbb4eea57f1744bd14fc453090ee9eca0fde86 extends Twig_Template
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
        $__internal_7c8d35582dcfb1b120de1f18b3014e7176b95a185fe439eecb08a42b22b24b6f = $this->env->getExtension("native_profiler");
        $__internal_7c8d35582dcfb1b120de1f18b3014e7176b95a185fe439eecb08a42b22b24b6f->enter($__internal_7c8d35582dcfb1b120de1f18b3014e7176b95a185fe439eecb08a42b22b24b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7c8d35582dcfb1b120de1f18b3014e7176b95a185fe439eecb08a42b22b24b6f->leave($__internal_7c8d35582dcfb1b120de1f18b3014e7176b95a185fe439eecb08a42b22b24b6f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4b17280a5432ad0ca45c65f6f7883889ebf953283d9d3851d12d792de8557b6f = $this->env->getExtension("native_profiler");
        $__internal_4b17280a5432ad0ca45c65f6f7883889ebf953283d9d3851d12d792de8557b6f->enter($__internal_4b17280a5432ad0ca45c65f6f7883889ebf953283d9d3851d12d792de8557b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_4b17280a5432ad0ca45c65f6f7883889ebf953283d9d3851d12d792de8557b6f->leave($__internal_4b17280a5432ad0ca45c65f6f7883889ebf953283d9d3851d12d792de8557b6f_prof);

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
