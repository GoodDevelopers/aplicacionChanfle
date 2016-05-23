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
        $__internal_d50df2d490072db3507e5cc0707e184682a3f8c41fb3f425946b662aaa9cdefb = $this->env->getExtension("native_profiler");
        $__internal_d50df2d490072db3507e5cc0707e184682a3f8c41fb3f425946b662aaa9cdefb->enter($__internal_d50df2d490072db3507e5cc0707e184682a3f8c41fb3f425946b662aaa9cdefb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_d50df2d490072db3507e5cc0707e184682a3f8c41fb3f425946b662aaa9cdefb->leave($__internal_d50df2d490072db3507e5cc0707e184682a3f8c41fb3f425946b662aaa9cdefb_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ec6841a8118ab4c6fadeb3aab158b1677f45fda6807ea1e3075e5b14d3a5a964 = $this->env->getExtension("native_profiler");
        $__internal_ec6841a8118ab4c6fadeb3aab158b1677f45fda6807ea1e3075e5b14d3a5a964->enter($__internal_ec6841a8118ab4c6fadeb3aab158b1677f45fda6807ea1e3075e5b14d3a5a964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_ec6841a8118ab4c6fadeb3aab158b1677f45fda6807ea1e3075e5b14d3a5a964->leave($__internal_ec6841a8118ab4c6fadeb3aab158b1677f45fda6807ea1e3075e5b14d3a5a964_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_e68b506cdd03cfffb47bc8ae93f22f5d1c50ddf777a73b607188d9548c9e393c = $this->env->getExtension("native_profiler");
        $__internal_e68b506cdd03cfffb47bc8ae93f22f5d1c50ddf777a73b607188d9548c9e393c->enter($__internal_e68b506cdd03cfffb47bc8ae93f22f5d1c50ddf777a73b607188d9548c9e393c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_e68b506cdd03cfffb47bc8ae93f22f5d1c50ddf777a73b607188d9548c9e393c->leave($__internal_e68b506cdd03cfffb47bc8ae93f22f5d1c50ddf777a73b607188d9548c9e393c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_583e21f8bfe038033ee32d6d260f73fabdb254c3e44b6e84133c167a53db138c = $this->env->getExtension("native_profiler");
        $__internal_583e21f8bfe038033ee32d6d260f73fabdb254c3e44b6e84133c167a53db138c->enter($__internal_583e21f8bfe038033ee32d6d260f73fabdb254c3e44b6e84133c167a53db138c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_583e21f8bfe038033ee32d6d260f73fabdb254c3e44b6e84133c167a53db138c->leave($__internal_583e21f8bfe038033ee32d6d260f73fabdb254c3e44b6e84133c167a53db138c_prof);

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
