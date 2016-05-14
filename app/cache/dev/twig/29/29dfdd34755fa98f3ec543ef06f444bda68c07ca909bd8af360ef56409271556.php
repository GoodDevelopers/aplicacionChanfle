<?php

/* @FOSUser/Resetting/passwordAlreadyRequested.html.twig */
class __TwigTemplate_65b63ab981f3ea84c9d75bf142a45f51c488ac6e22879315e1565f4ab5bee79f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig", 1);
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
        $__internal_fc92f55cf982fb0eed17f8b825c401d6cdb9479cab0bee7ab8a3e30df172b159 = $this->env->getExtension("native_profiler");
        $__internal_fc92f55cf982fb0eed17f8b825c401d6cdb9479cab0bee7ab8a3e30df172b159->enter($__internal_fc92f55cf982fb0eed17f8b825c401d6cdb9479cab0bee7ab8a3e30df172b159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fc92f55cf982fb0eed17f8b825c401d6cdb9479cab0bee7ab8a3e30df172b159->leave($__internal_fc92f55cf982fb0eed17f8b825c401d6cdb9479cab0bee7ab8a3e30df172b159_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bfe6b4b980c99fb3cdef1b25a42e06433e19537604ad6f1a7cd521acb5116a98 = $this->env->getExtension("native_profiler");
        $__internal_bfe6b4b980c99fb3cdef1b25a42e06433e19537604ad6f1a7cd521acb5116a98->enter($__internal_bfe6b4b980c99fb3cdef1b25a42e06433e19537604ad6f1a7cd521acb5116a98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_bfe6b4b980c99fb3cdef1b25a42e06433e19537604ad6f1a7cd521acb5116a98->leave($__internal_bfe6b4b980c99fb3cdef1b25a42e06433e19537604ad6f1a7cd521acb5116a98_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/passwordAlreadyRequested.html.twig";
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
