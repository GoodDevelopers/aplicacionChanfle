<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_bad87d1cb117ec89a4187d7bb432719daa70cf131fa536106b3140331bef9df4 extends Twig_Template
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
        $__internal_c45a3c8077746adbcead93da0877a09e1155eca26acc0c42cb3c41f37722fdca = $this->env->getExtension("native_profiler");
        $__internal_c45a3c8077746adbcead93da0877a09e1155eca26acc0c42cb3c41f37722fdca->enter($__internal_c45a3c8077746adbcead93da0877a09e1155eca26acc0c42cb3c41f37722fdca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_c45a3c8077746adbcead93da0877a09e1155eca26acc0c42cb3c41f37722fdca->leave($__internal_c45a3c8077746adbcead93da0877a09e1155eca26acc0c42cb3c41f37722fdca_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8781f2b402f6a1dd846062b355f5d7e5adccd32673f6477ef519a7d2c7f0dbed = $this->env->getExtension("native_profiler");
        $__internal_8781f2b402f6a1dd846062b355f5d7e5adccd32673f6477ef519a7d2c7f0dbed->enter($__internal_8781f2b402f6a1dd846062b355f5d7e5adccd32673f6477ef519a7d2c7f0dbed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_8781f2b402f6a1dd846062b355f5d7e5adccd32673f6477ef519a7d2c7f0dbed->leave($__internal_8781f2b402f6a1dd846062b355f5d7e5adccd32673f6477ef519a7d2c7f0dbed_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_b78094671f1af04e283cf73d91dde485fa50743606ef2d156e169e3afb2f3ce2 = $this->env->getExtension("native_profiler");
        $__internal_b78094671f1af04e283cf73d91dde485fa50743606ef2d156e169e3afb2f3ce2->enter($__internal_b78094671f1af04e283cf73d91dde485fa50743606ef2d156e169e3afb2f3ce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_b78094671f1af04e283cf73d91dde485fa50743606ef2d156e169e3afb2f3ce2->leave($__internal_b78094671f1af04e283cf73d91dde485fa50743606ef2d156e169e3afb2f3ce2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_19893154cb62e979593767741f48d918e7b9fecc3f8f62412f798f7b07dc2879 = $this->env->getExtension("native_profiler");
        $__internal_19893154cb62e979593767741f48d918e7b9fecc3f8f62412f798f7b07dc2879->enter($__internal_19893154cb62e979593767741f48d918e7b9fecc3f8f62412f798f7b07dc2879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_19893154cb62e979593767741f48d918e7b9fecc3f8f62412f798f7b07dc2879->leave($__internal_19893154cb62e979593767741f48d918e7b9fecc3f8f62412f798f7b07dc2879_prof);

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
