<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_7c008d9880099bd43b1ea4f4d414f046a7029583d64ca732ab9fa1de46fb1adc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:confirmed.html.twig", 1);
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
        $__internal_320857016a07b3b8566e18d6875e87c0b49ebe03e1830ba11957b53cd8e19e39 = $this->env->getExtension("native_profiler");
        $__internal_320857016a07b3b8566e18d6875e87c0b49ebe03e1830ba11957b53cd8e19e39->enter($__internal_320857016a07b3b8566e18d6875e87c0b49ebe03e1830ba11957b53cd8e19e39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_320857016a07b3b8566e18d6875e87c0b49ebe03e1830ba11957b53cd8e19e39->leave($__internal_320857016a07b3b8566e18d6875e87c0b49ebe03e1830ba11957b53cd8e19e39_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bff5e8abef0c2c6ef6a57b93795a48e9b65b1a19c376250ec06e3bcf05c1ea25 = $this->env->getExtension("native_profiler");
        $__internal_bff5e8abef0c2c6ef6a57b93795a48e9b65b1a19c376250ec06e3bcf05c1ea25->enter($__internal_bff5e8abef0c2c6ef6a57b93795a48e9b65b1a19c376250ec06e3bcf05c1ea25_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_bff5e8abef0c2c6ef6a57b93795a48e9b65b1a19c376250ec06e3bcf05c1ea25->leave($__internal_bff5e8abef0c2c6ef6a57b93795a48e9b65b1a19c376250ec06e3bcf05c1ea25_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
