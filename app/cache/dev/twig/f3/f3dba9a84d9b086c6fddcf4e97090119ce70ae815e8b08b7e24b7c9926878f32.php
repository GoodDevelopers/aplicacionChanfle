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
        $__internal_2be66a6e935a32beadf4e69ccc23f4bac87709384cd2a31685b3b47a3c93151c = $this->env->getExtension("native_profiler");
        $__internal_2be66a6e935a32beadf4e69ccc23f4bac87709384cd2a31685b3b47a3c93151c->enter($__internal_2be66a6e935a32beadf4e69ccc23f4bac87709384cd2a31685b3b47a3c93151c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2be66a6e935a32beadf4e69ccc23f4bac87709384cd2a31685b3b47a3c93151c->leave($__internal_2be66a6e935a32beadf4e69ccc23f4bac87709384cd2a31685b3b47a3c93151c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8b752492d2152d551e9017fbdcdb46786eb98fdb4ae7e89d9c6d3b749c059585 = $this->env->getExtension("native_profiler");
        $__internal_8b752492d2152d551e9017fbdcdb46786eb98fdb4ae7e89d9c6d3b749c059585->enter($__internal_8b752492d2152d551e9017fbdcdb46786eb98fdb4ae7e89d9c6d3b749c059585_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8b752492d2152d551e9017fbdcdb46786eb98fdb4ae7e89d9c6d3b749c059585->leave($__internal_8b752492d2152d551e9017fbdcdb46786eb98fdb4ae7e89d9c6d3b749c059585_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_511e3e235afc60edb0875e55fc0ad38d920bffdfd1965156d784705926b8fbe2 = $this->env->getExtension("native_profiler");
        $__internal_511e3e235afc60edb0875e55fc0ad38d920bffdfd1965156d784705926b8fbe2->enter($__internal_511e3e235afc60edb0875e55fc0ad38d920bffdfd1965156d784705926b8fbe2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_511e3e235afc60edb0875e55fc0ad38d920bffdfd1965156d784705926b8fbe2->leave($__internal_511e3e235afc60edb0875e55fc0ad38d920bffdfd1965156d784705926b8fbe2_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c1b5af69069ef722b32a4f1325087b243b8d0c7d298d08a309e56d7fa23b5896 = $this->env->getExtension("native_profiler");
        $__internal_c1b5af69069ef722b32a4f1325087b243b8d0c7d298d08a309e56d7fa23b5896->enter($__internal_c1b5af69069ef722b32a4f1325087b243b8d0c7d298d08a309e56d7fa23b5896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c1b5af69069ef722b32a4f1325087b243b8d0c7d298d08a309e56d7fa23b5896->leave($__internal_c1b5af69069ef722b32a4f1325087b243b8d0c7d298d08a309e56d7fa23b5896_prof);

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
