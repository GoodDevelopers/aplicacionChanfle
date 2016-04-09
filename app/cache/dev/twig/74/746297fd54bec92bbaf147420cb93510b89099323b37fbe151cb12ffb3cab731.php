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
        $__internal_65b57ebd83a8ecb3bb380bd7eebc44f5ff00345cab6c51eb6daf4dec4b0546b5 = $this->env->getExtension("native_profiler");
        $__internal_65b57ebd83a8ecb3bb380bd7eebc44f5ff00345cab6c51eb6daf4dec4b0546b5->enter($__internal_65b57ebd83a8ecb3bb380bd7eebc44f5ff00345cab6c51eb6daf4dec4b0546b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_65b57ebd83a8ecb3bb380bd7eebc44f5ff00345cab6c51eb6daf4dec4b0546b5->leave($__internal_65b57ebd83a8ecb3bb380bd7eebc44f5ff00345cab6c51eb6daf4dec4b0546b5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_adbb98e24034039026730fd85489e02b736280bdfb5b18e8e3bda308c8d61960 = $this->env->getExtension("native_profiler");
        $__internal_adbb98e24034039026730fd85489e02b736280bdfb5b18e8e3bda308c8d61960->enter($__internal_adbb98e24034039026730fd85489e02b736280bdfb5b18e8e3bda308c8d61960_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_adbb98e24034039026730fd85489e02b736280bdfb5b18e8e3bda308c8d61960->leave($__internal_adbb98e24034039026730fd85489e02b736280bdfb5b18e8e3bda308c8d61960_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_2128e61c167a5fe14c9b9d82ad59ee8d9114531281ce19633ac639929f94d212 = $this->env->getExtension("native_profiler");
        $__internal_2128e61c167a5fe14c9b9d82ad59ee8d9114531281ce19633ac639929f94d212->enter($__internal_2128e61c167a5fe14c9b9d82ad59ee8d9114531281ce19633ac639929f94d212_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_2128e61c167a5fe14c9b9d82ad59ee8d9114531281ce19633ac639929f94d212->leave($__internal_2128e61c167a5fe14c9b9d82ad59ee8d9114531281ce19633ac639929f94d212_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_fa7ab78175d365b52596f6fb86de4d0c7b10f5d99e74fe9c30f4e9f5d359a965 = $this->env->getExtension("native_profiler");
        $__internal_fa7ab78175d365b52596f6fb86de4d0c7b10f5d99e74fe9c30f4e9f5d359a965->enter($__internal_fa7ab78175d365b52596f6fb86de4d0c7b10f5d99e74fe9c30f4e9f5d359a965_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_fa7ab78175d365b52596f6fb86de4d0c7b10f5d99e74fe9c30f4e9f5d359a965->leave($__internal_fa7ab78175d365b52596f6fb86de4d0c7b10f5d99e74fe9c30f4e9f5d359a965_prof);

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
