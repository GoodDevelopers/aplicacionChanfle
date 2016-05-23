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
        $__internal_df0fd91f9bb78c92b7133597f0c48a527d65bc425c98d497b2a42fca7984f8df = $this->env->getExtension("native_profiler");
        $__internal_df0fd91f9bb78c92b7133597f0c48a527d65bc425c98d497b2a42fca7984f8df->enter($__internal_df0fd91f9bb78c92b7133597f0c48a527d65bc425c98d497b2a42fca7984f8df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_df0fd91f9bb78c92b7133597f0c48a527d65bc425c98d497b2a42fca7984f8df->leave($__internal_df0fd91f9bb78c92b7133597f0c48a527d65bc425c98d497b2a42fca7984f8df_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_ae9d764ca350961fa858f5ce0ab8be9610e0f6f5cbcea4c656532ca1d9ca0585 = $this->env->getExtension("native_profiler");
        $__internal_ae9d764ca350961fa858f5ce0ab8be9610e0f6f5cbcea4c656532ca1d9ca0585->enter($__internal_ae9d764ca350961fa858f5ce0ab8be9610e0f6f5cbcea4c656532ca1d9ca0585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_ae9d764ca350961fa858f5ce0ab8be9610e0f6f5cbcea4c656532ca1d9ca0585->leave($__internal_ae9d764ca350961fa858f5ce0ab8be9610e0f6f5cbcea4c656532ca1d9ca0585_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_0d60cc484dc059407b323d8e9b5f5435ce86bb8546de99e34cb94c4d7829b9b2 = $this->env->getExtension("native_profiler");
        $__internal_0d60cc484dc059407b323d8e9b5f5435ce86bb8546de99e34cb94c4d7829b9b2->enter($__internal_0d60cc484dc059407b323d8e9b5f5435ce86bb8546de99e34cb94c4d7829b9b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_0d60cc484dc059407b323d8e9b5f5435ce86bb8546de99e34cb94c4d7829b9b2->leave($__internal_0d60cc484dc059407b323d8e9b5f5435ce86bb8546de99e34cb94c4d7829b9b2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_7e1455437b6666c6d65bc4c40bec330780d9e4bdf8335d264e6b84674a4b0503 = $this->env->getExtension("native_profiler");
        $__internal_7e1455437b6666c6d65bc4c40bec330780d9e4bdf8335d264e6b84674a4b0503->enter($__internal_7e1455437b6666c6d65bc4c40bec330780d9e4bdf8335d264e6b84674a4b0503_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_7e1455437b6666c6d65bc4c40bec330780d9e4bdf8335d264e6b84674a4b0503->leave($__internal_7e1455437b6666c6d65bc4c40bec330780d9e4bdf8335d264e6b84674a4b0503_prof);

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
