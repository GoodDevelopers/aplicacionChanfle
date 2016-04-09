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
        $__internal_f06b344517fbf0aae611e6abf168569d4a8673e9d95c8a41b9d949dea7e73eae = $this->env->getExtension("native_profiler");
        $__internal_f06b344517fbf0aae611e6abf168569d4a8673e9d95c8a41b9d949dea7e73eae->enter($__internal_f06b344517fbf0aae611e6abf168569d4a8673e9d95c8a41b9d949dea7e73eae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f06b344517fbf0aae611e6abf168569d4a8673e9d95c8a41b9d949dea7e73eae->leave($__internal_f06b344517fbf0aae611e6abf168569d4a8673e9d95c8a41b9d949dea7e73eae_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bd77518a5065fe080e90e3da10011bd169310b1a9981907bace1c36e24aa80cd = $this->env->getExtension("native_profiler");
        $__internal_bd77518a5065fe080e90e3da10011bd169310b1a9981907bace1c36e24aa80cd->enter($__internal_bd77518a5065fe080e90e3da10011bd169310b1a9981907bace1c36e24aa80cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_bd77518a5065fe080e90e3da10011bd169310b1a9981907bace1c36e24aa80cd->leave($__internal_bd77518a5065fe080e90e3da10011bd169310b1a9981907bace1c36e24aa80cd_prof);

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
