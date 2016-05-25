<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_64d11efb1bc843616cf9e7c9e05692cdc342b1cec8d1a69497078f5e6cd58bcc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_30fe7c6745b1c8a0750ec4339b71db83bfef0ca2dbf9ee00062a855e7073cd2b = $this->env->getExtension("native_profiler");
        $__internal_30fe7c6745b1c8a0750ec4339b71db83bfef0ca2dbf9ee00062a855e7073cd2b->enter($__internal_30fe7c6745b1c8a0750ec4339b71db83bfef0ca2dbf9ee00062a855e7073cd2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_30fe7c6745b1c8a0750ec4339b71db83bfef0ca2dbf9ee00062a855e7073cd2b->leave($__internal_30fe7c6745b1c8a0750ec4339b71db83bfef0ca2dbf9ee00062a855e7073cd2b_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_99bd93a180fe1af5a81ab7b1348584f88332943c9ca3fa6cbf153ed8a4de47ca = $this->env->getExtension("native_profiler");
        $__internal_99bd93a180fe1af5a81ab7b1348584f88332943c9ca3fa6cbf153ed8a4de47ca->enter($__internal_99bd93a180fe1af5a81ab7b1348584f88332943c9ca3fa6cbf153ed8a4de47ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_99bd93a180fe1af5a81ab7b1348584f88332943c9ca3fa6cbf153ed8a4de47ca->leave($__internal_99bd93a180fe1af5a81ab7b1348584f88332943c9ca3fa6cbf153ed8a4de47ca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
