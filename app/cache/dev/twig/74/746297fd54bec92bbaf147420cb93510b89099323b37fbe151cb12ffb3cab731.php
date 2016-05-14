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
        $__internal_9d8f36aab1045a0837928f513fde9162684b52669e5ef0fe689f7d791959f67b = $this->env->getExtension("native_profiler");
        $__internal_9d8f36aab1045a0837928f513fde9162684b52669e5ef0fe689f7d791959f67b->enter($__internal_9d8f36aab1045a0837928f513fde9162684b52669e5ef0fe689f7d791959f67b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_9d8f36aab1045a0837928f513fde9162684b52669e5ef0fe689f7d791959f67b->leave($__internal_9d8f36aab1045a0837928f513fde9162684b52669e5ef0fe689f7d791959f67b_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_14f88c74456c2ff40ee7d71b30f8d0639b9e2825b979ec8cfa80c7fa19ab7121 = $this->env->getExtension("native_profiler");
        $__internal_14f88c74456c2ff40ee7d71b30f8d0639b9e2825b979ec8cfa80c7fa19ab7121->enter($__internal_14f88c74456c2ff40ee7d71b30f8d0639b9e2825b979ec8cfa80c7fa19ab7121_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_14f88c74456c2ff40ee7d71b30f8d0639b9e2825b979ec8cfa80c7fa19ab7121->leave($__internal_14f88c74456c2ff40ee7d71b30f8d0639b9e2825b979ec8cfa80c7fa19ab7121_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_cafff996438b67b41daf654a6e48bc7dc1cf75ae90a9cff52bef466bc8bf5a9e = $this->env->getExtension("native_profiler");
        $__internal_cafff996438b67b41daf654a6e48bc7dc1cf75ae90a9cff52bef466bc8bf5a9e->enter($__internal_cafff996438b67b41daf654a6e48bc7dc1cf75ae90a9cff52bef466bc8bf5a9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_cafff996438b67b41daf654a6e48bc7dc1cf75ae90a9cff52bef466bc8bf5a9e->leave($__internal_cafff996438b67b41daf654a6e48bc7dc1cf75ae90a9cff52bef466bc8bf5a9e_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_423c35b5ff7d817b94cc608d558af77a2c9ada761d108ef74e049e6407da02f8 = $this->env->getExtension("native_profiler");
        $__internal_423c35b5ff7d817b94cc608d558af77a2c9ada761d108ef74e049e6407da02f8->enter($__internal_423c35b5ff7d817b94cc608d558af77a2c9ada761d108ef74e049e6407da02f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_423c35b5ff7d817b94cc608d558af77a2c9ada761d108ef74e049e6407da02f8->leave($__internal_423c35b5ff7d817b94cc608d558af77a2c9ada761d108ef74e049e6407da02f8_prof);

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
