<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_050ee7cbc39e56804ae8e7150d253d6abed67a628ed681afc3d150a492ce3c56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_7b2820fbb4fa12b5db7e9e3ad58988889c916ec3424ea440e764cc1df07b11dd = $this->env->getExtension("native_profiler");
        $__internal_7b2820fbb4fa12b5db7e9e3ad58988889c916ec3424ea440e764cc1df07b11dd->enter($__internal_7b2820fbb4fa12b5db7e9e3ad58988889c916ec3424ea440e764cc1df07b11dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b2820fbb4fa12b5db7e9e3ad58988889c916ec3424ea440e764cc1df07b11dd->leave($__internal_7b2820fbb4fa12b5db7e9e3ad58988889c916ec3424ea440e764cc1df07b11dd_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90f10c5e844445131b4faa10489ab45764bb0f592f15a44ba7bb6bfecbe6c687 = $this->env->getExtension("native_profiler");
        $__internal_90f10c5e844445131b4faa10489ab45764bb0f592f15a44ba7bb6bfecbe6c687->enter($__internal_90f10c5e844445131b4faa10489ab45764bb0f592f15a44ba7bb6bfecbe6c687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_90f10c5e844445131b4faa10489ab45764bb0f592f15a44ba7bb6bfecbe6c687->leave($__internal_90f10c5e844445131b4faa10489ab45764bb0f592f15a44ba7bb6bfecbe6c687_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
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