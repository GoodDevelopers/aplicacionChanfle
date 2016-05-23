<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ae58fb79cac732bb36c1f0e5952dcbb0e0e725ddc4835e9f5ef7024afd1b84bc extends Twig_Template
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
        $__internal_6fc4a8f5fca90487082335abdb9c350ce810610273ff7b55bfae641299d49e83 = $this->env->getExtension("native_profiler");
        $__internal_6fc4a8f5fca90487082335abdb9c350ce810610273ff7b55bfae641299d49e83->enter($__internal_6fc4a8f5fca90487082335abdb9c350ce810610273ff7b55bfae641299d49e83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_6fc4a8f5fca90487082335abdb9c350ce810610273ff7b55bfae641299d49e83->leave($__internal_6fc4a8f5fca90487082335abdb9c350ce810610273ff7b55bfae641299d49e83_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2c9ac5c973b97c10c5ab86964d3802fc52d6dbb10ebcdf1a07b949cbb9b8a791 = $this->env->getExtension("native_profiler");
        $__internal_2c9ac5c973b97c10c5ab86964d3802fc52d6dbb10ebcdf1a07b949cbb9b8a791->enter($__internal_2c9ac5c973b97c10c5ab86964d3802fc52d6dbb10ebcdf1a07b949cbb9b8a791_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_2c9ac5c973b97c10c5ab86964d3802fc52d6dbb10ebcdf1a07b949cbb9b8a791->leave($__internal_2c9ac5c973b97c10c5ab86964d3802fc52d6dbb10ebcdf1a07b949cbb9b8a791_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_bca70a5059d0d33e6089f874ab7932e59c04a8cb63e17832e6c197b50ad4d751 = $this->env->getExtension("native_profiler");
        $__internal_bca70a5059d0d33e6089f874ab7932e59c04a8cb63e17832e6c197b50ad4d751->enter($__internal_bca70a5059d0d33e6089f874ab7932e59c04a8cb63e17832e6c197b50ad4d751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_bca70a5059d0d33e6089f874ab7932e59c04a8cb63e17832e6c197b50ad4d751->leave($__internal_bca70a5059d0d33e6089f874ab7932e59c04a8cb63e17832e6c197b50ad4d751_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a351a169e1b701a2d7e880eb32f6f04d7fbfeade3ef6e9d1af1154657ed2bc81 = $this->env->getExtension("native_profiler");
        $__internal_a351a169e1b701a2d7e880eb32f6f04d7fbfeade3ef6e9d1af1154657ed2bc81->enter($__internal_a351a169e1b701a2d7e880eb32f6f04d7fbfeade3ef6e9d1af1154657ed2bc81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a351a169e1b701a2d7e880eb32f6f04d7fbfeade3ef6e9d1af1154657ed2bc81->leave($__internal_a351a169e1b701a2d7e880eb32f6f04d7fbfeade3ef6e9d1af1154657ed2bc81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
