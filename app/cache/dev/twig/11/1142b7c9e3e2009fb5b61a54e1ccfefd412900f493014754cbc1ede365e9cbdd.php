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
        $__internal_aa28a55c8156c762d21a0d7efa35b7b79a72d674f43887fc48ee4199bc545586 = $this->env->getExtension("native_profiler");
        $__internal_aa28a55c8156c762d21a0d7efa35b7b79a72d674f43887fc48ee4199bc545586->enter($__internal_aa28a55c8156c762d21a0d7efa35b7b79a72d674f43887fc48ee4199bc545586_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_aa28a55c8156c762d21a0d7efa35b7b79a72d674f43887fc48ee4199bc545586->leave($__internal_aa28a55c8156c762d21a0d7efa35b7b79a72d674f43887fc48ee4199bc545586_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_b3c378c0d81e1150e24b2ddf4b34d19f1fea01bf87ab030ce0a04f02b6742c82 = $this->env->getExtension("native_profiler");
        $__internal_b3c378c0d81e1150e24b2ddf4b34d19f1fea01bf87ab030ce0a04f02b6742c82->enter($__internal_b3c378c0d81e1150e24b2ddf4b34d19f1fea01bf87ab030ce0a04f02b6742c82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_b3c378c0d81e1150e24b2ddf4b34d19f1fea01bf87ab030ce0a04f02b6742c82->leave($__internal_b3c378c0d81e1150e24b2ddf4b34d19f1fea01bf87ab030ce0a04f02b6742c82_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_c85a31d85cabee22be3551d30acab4b6c1519e4bdda4b8f97e827eff915c7300 = $this->env->getExtension("native_profiler");
        $__internal_c85a31d85cabee22be3551d30acab4b6c1519e4bdda4b8f97e827eff915c7300->enter($__internal_c85a31d85cabee22be3551d30acab4b6c1519e4bdda4b8f97e827eff915c7300_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c85a31d85cabee22be3551d30acab4b6c1519e4bdda4b8f97e827eff915c7300->leave($__internal_c85a31d85cabee22be3551d30acab4b6c1519e4bdda4b8f97e827eff915c7300_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7d344dd3c670984986beca9db30bc30d9e525832db4ab1865b514155859bb290 = $this->env->getExtension("native_profiler");
        $__internal_7d344dd3c670984986beca9db30bc30d9e525832db4ab1865b514155859bb290->enter($__internal_7d344dd3c670984986beca9db30bc30d9e525832db4ab1865b514155859bb290_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7d344dd3c670984986beca9db30bc30d9e525832db4ab1865b514155859bb290->leave($__internal_7d344dd3c670984986beca9db30bc30d9e525832db4ab1865b514155859bb290_prof);

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
