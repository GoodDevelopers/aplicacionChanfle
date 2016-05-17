<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_deef688d8457d86ad5fa262958af6124e07bade812ef8981e8d920fc3ffb4db7 extends Twig_Template
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
        $__internal_f4cc002bd7b3070640b57808bb5b0c2d8c7868c34f3c5a371ccfa43d8a8dec3c = $this->env->getExtension("native_profiler");
        $__internal_f4cc002bd7b3070640b57808bb5b0c2d8c7868c34f3c5a371ccfa43d8a8dec3c->enter($__internal_f4cc002bd7b3070640b57808bb5b0c2d8c7868c34f3c5a371ccfa43d8a8dec3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_f4cc002bd7b3070640b57808bb5b0c2d8c7868c34f3c5a371ccfa43d8a8dec3c->leave($__internal_f4cc002bd7b3070640b57808bb5b0c2d8c7868c34f3c5a371ccfa43d8a8dec3c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_79eb9e2525ca8a05195de93546f4511fb97f52dd3c65a7aad109d44cbb027402 = $this->env->getExtension("native_profiler");
        $__internal_79eb9e2525ca8a05195de93546f4511fb97f52dd3c65a7aad109d44cbb027402->enter($__internal_79eb9e2525ca8a05195de93546f4511fb97f52dd3c65a7aad109d44cbb027402_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_79eb9e2525ca8a05195de93546f4511fb97f52dd3c65a7aad109d44cbb027402->leave($__internal_79eb9e2525ca8a05195de93546f4511fb97f52dd3c65a7aad109d44cbb027402_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_dfb343c7c1c1b73658ba7a77c6ea8b69e487673154dcd3effdaa8578e0de4a52 = $this->env->getExtension("native_profiler");
        $__internal_dfb343c7c1c1b73658ba7a77c6ea8b69e487673154dcd3effdaa8578e0de4a52->enter($__internal_dfb343c7c1c1b73658ba7a77c6ea8b69e487673154dcd3effdaa8578e0de4a52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_dfb343c7c1c1b73658ba7a77c6ea8b69e487673154dcd3effdaa8578e0de4a52->leave($__internal_dfb343c7c1c1b73658ba7a77c6ea8b69e487673154dcd3effdaa8578e0de4a52_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7ef59eb8c08679c5ac88b00d56e5733a4ec0f3580f3b2cbd60e38a830949228d = $this->env->getExtension("native_profiler");
        $__internal_7ef59eb8c08679c5ac88b00d56e5733a4ec0f3580f3b2cbd60e38a830949228d->enter($__internal_7ef59eb8c08679c5ac88b00d56e5733a4ec0f3580f3b2cbd60e38a830949228d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7ef59eb8c08679c5ac88b00d56e5733a4ec0f3580f3b2cbd60e38a830949228d->leave($__internal_7ef59eb8c08679c5ac88b00d56e5733a4ec0f3580f3b2cbd60e38a830949228d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
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
