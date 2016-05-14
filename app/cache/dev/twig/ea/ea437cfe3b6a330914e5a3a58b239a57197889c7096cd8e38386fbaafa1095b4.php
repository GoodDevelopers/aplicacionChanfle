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
        $__internal_1e2ea9286d15f43963485d8aaf26d38141d6d9d2e6b3100f46c75dd6fda35157 = $this->env->getExtension("native_profiler");
        $__internal_1e2ea9286d15f43963485d8aaf26d38141d6d9d2e6b3100f46c75dd6fda35157->enter($__internal_1e2ea9286d15f43963485d8aaf26d38141d6d9d2e6b3100f46c75dd6fda35157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1e2ea9286d15f43963485d8aaf26d38141d6d9d2e6b3100f46c75dd6fda35157->leave($__internal_1e2ea9286d15f43963485d8aaf26d38141d6d9d2e6b3100f46c75dd6fda35157_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ca6c70cc77ca7259f7adc857152121369945e0e349f02adf2775e8c2497f34b1 = $this->env->getExtension("native_profiler");
        $__internal_ca6c70cc77ca7259f7adc857152121369945e0e349f02adf2775e8c2497f34b1->enter($__internal_ca6c70cc77ca7259f7adc857152121369945e0e349f02adf2775e8c2497f34b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ca6c70cc77ca7259f7adc857152121369945e0e349f02adf2775e8c2497f34b1->leave($__internal_ca6c70cc77ca7259f7adc857152121369945e0e349f02adf2775e8c2497f34b1_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c7553b04697d34c660380a84e0970030ef6a3b44be06f1e301e887f1d6099b5d = $this->env->getExtension("native_profiler");
        $__internal_c7553b04697d34c660380a84e0970030ef6a3b44be06f1e301e887f1d6099b5d->enter($__internal_c7553b04697d34c660380a84e0970030ef6a3b44be06f1e301e887f1d6099b5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c7553b04697d34c660380a84e0970030ef6a3b44be06f1e301e887f1d6099b5d->leave($__internal_c7553b04697d34c660380a84e0970030ef6a3b44be06f1e301e887f1d6099b5d_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_6d770976422583fe027ee43de0bcdb15589d294177abdeb6141a8ac63a802415 = $this->env->getExtension("native_profiler");
        $__internal_6d770976422583fe027ee43de0bcdb15589d294177abdeb6141a8ac63a802415->enter($__internal_6d770976422583fe027ee43de0bcdb15589d294177abdeb6141a8ac63a802415_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_6d770976422583fe027ee43de0bcdb15589d294177abdeb6141a8ac63a802415->leave($__internal_6d770976422583fe027ee43de0bcdb15589d294177abdeb6141a8ac63a802415_prof);

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
