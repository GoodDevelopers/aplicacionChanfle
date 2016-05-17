<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_f3ce56429158eb2f2a12465f6e3ee3513d95ce4c7bf2fff58c716197aaf4a1e6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_55e64b05460f0bb7a01254d0ba8ccc829ee62a070d7342ae0ee559f62abb13be = $this->env->getExtension("native_profiler");
        $__internal_55e64b05460f0bb7a01254d0ba8ccc829ee62a070d7342ae0ee559f62abb13be->enter($__internal_55e64b05460f0bb7a01254d0ba8ccc829ee62a070d7342ae0ee559f62abb13be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_55e64b05460f0bb7a01254d0ba8ccc829ee62a070d7342ae0ee559f62abb13be->leave($__internal_55e64b05460f0bb7a01254d0ba8ccc829ee62a070d7342ae0ee559f62abb13be_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_809cf720c1e64d319a4d22d8c59bced6e14e04108785a747fe21f117cfacc5a4 = $this->env->getExtension("native_profiler");
        $__internal_809cf720c1e64d319a4d22d8c59bced6e14e04108785a747fe21f117cfacc5a4->enter($__internal_809cf720c1e64d319a4d22d8c59bced6e14e04108785a747fe21f117cfacc5a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_809cf720c1e64d319a4d22d8c59bced6e14e04108785a747fe21f117cfacc5a4->leave($__internal_809cf720c1e64d319a4d22d8c59bced6e14e04108785a747fe21f117cfacc5a4_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_a043f144cf77e81207767c625cefc52abce3fb674db7c66365f1b20ff04f5ebc = $this->env->getExtension("native_profiler");
        $__internal_a043f144cf77e81207767c625cefc52abce3fb674db7c66365f1b20ff04f5ebc->enter($__internal_a043f144cf77e81207767c625cefc52abce3fb674db7c66365f1b20ff04f5ebc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_a043f144cf77e81207767c625cefc52abce3fb674db7c66365f1b20ff04f5ebc->leave($__internal_a043f144cf77e81207767c625cefc52abce3fb674db7c66365f1b20ff04f5ebc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_883d7e210192f4bdf2ad02e330a08f9a3ee88db0183fa70d0e846351f6db72e9 = $this->env->getExtension("native_profiler");
        $__internal_883d7e210192f4bdf2ad02e330a08f9a3ee88db0183fa70d0e846351f6db72e9->enter($__internal_883d7e210192f4bdf2ad02e330a08f9a3ee88db0183fa70d0e846351f6db72e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_883d7e210192f4bdf2ad02e330a08f9a3ee88db0183fa70d0e846351f6db72e9->leave($__internal_883d7e210192f4bdf2ad02e330a08f9a3ee88db0183fa70d0e846351f6db72e9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
