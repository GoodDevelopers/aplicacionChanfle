<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bfded0e91125bfecadb913d2e816492c6388dc87e2ea3408f4606517ecffa0ce extends Twig_Template
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
        $__internal_23a02201184b7f7578b30d95451532de69b920dbf631da12543084b2b386b7b8 = $this->env->getExtension("native_profiler");
        $__internal_23a02201184b7f7578b30d95451532de69b920dbf631da12543084b2b386b7b8->enter($__internal_23a02201184b7f7578b30d95451532de69b920dbf631da12543084b2b386b7b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_23a02201184b7f7578b30d95451532de69b920dbf631da12543084b2b386b7b8->leave($__internal_23a02201184b7f7578b30d95451532de69b920dbf631da12543084b2b386b7b8_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_16eff9a194979d8cf0b4b2ae6dc7cd4100f14acd031bb7a4bc54b45d79281c29 = $this->env->getExtension("native_profiler");
        $__internal_16eff9a194979d8cf0b4b2ae6dc7cd4100f14acd031bb7a4bc54b45d79281c29->enter($__internal_16eff9a194979d8cf0b4b2ae6dc7cd4100f14acd031bb7a4bc54b45d79281c29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_16eff9a194979d8cf0b4b2ae6dc7cd4100f14acd031bb7a4bc54b45d79281c29->leave($__internal_16eff9a194979d8cf0b4b2ae6dc7cd4100f14acd031bb7a4bc54b45d79281c29_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_afbe5245ad99ae7f233a9ca7f53955bdc70423747d962525e9e66ef7f47873dc = $this->env->getExtension("native_profiler");
        $__internal_afbe5245ad99ae7f233a9ca7f53955bdc70423747d962525e9e66ef7f47873dc->enter($__internal_afbe5245ad99ae7f233a9ca7f53955bdc70423747d962525e9e66ef7f47873dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_afbe5245ad99ae7f233a9ca7f53955bdc70423747d962525e9e66ef7f47873dc->leave($__internal_afbe5245ad99ae7f233a9ca7f53955bdc70423747d962525e9e66ef7f47873dc_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_f9d2c0d311c2e0320631b6630c0c38f3439410ca6faf164e18151d5fc4d78e6a = $this->env->getExtension("native_profiler");
        $__internal_f9d2c0d311c2e0320631b6630c0c38f3439410ca6faf164e18151d5fc4d78e6a->enter($__internal_f9d2c0d311c2e0320631b6630c0c38f3439410ca6faf164e18151d5fc4d78e6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_f9d2c0d311c2e0320631b6630c0c38f3439410ca6faf164e18151d5fc4d78e6a->leave($__internal_f9d2c0d311c2e0320631b6630c0c38f3439410ca6faf164e18151d5fc4d78e6a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
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
