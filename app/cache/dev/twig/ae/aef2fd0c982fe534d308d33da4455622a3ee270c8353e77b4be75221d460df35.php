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
        $__internal_8caad5ceb5e41e9d5c6172bbb86c0e70c1aebf37ee9e78bce67353a95cdfeed7 = $this->env->getExtension("native_profiler");
        $__internal_8caad5ceb5e41e9d5c6172bbb86c0e70c1aebf37ee9e78bce67353a95cdfeed7->enter($__internal_8caad5ceb5e41e9d5c6172bbb86c0e70c1aebf37ee9e78bce67353a95cdfeed7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8caad5ceb5e41e9d5c6172bbb86c0e70c1aebf37ee9e78bce67353a95cdfeed7->leave($__internal_8caad5ceb5e41e9d5c6172bbb86c0e70c1aebf37ee9e78bce67353a95cdfeed7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ad15efb90327ee14867388d5962c8515f691c0b0f9dda7cd2d72373ac5eb0d98 = $this->env->getExtension("native_profiler");
        $__internal_ad15efb90327ee14867388d5962c8515f691c0b0f9dda7cd2d72373ac5eb0d98->enter($__internal_ad15efb90327ee14867388d5962c8515f691c0b0f9dda7cd2d72373ac5eb0d98_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_ad15efb90327ee14867388d5962c8515f691c0b0f9dda7cd2d72373ac5eb0d98->leave($__internal_ad15efb90327ee14867388d5962c8515f691c0b0f9dda7cd2d72373ac5eb0d98_prof);

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
