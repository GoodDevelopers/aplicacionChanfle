<?php

/* FOSUserBundle:Registration:confirmed.html.twig */
class __TwigTemplate_8b09006622c67dd29250ce4335b979edc0d61f25856ee7ff415925d2d2212100 extends Twig_Template
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
        $__internal_06c9b3ae631407f4c99731dbeee49f26256baac34eac59ed523bfc868a644974 = $this->env->getExtension("native_profiler");
        $__internal_06c9b3ae631407f4c99731dbeee49f26256baac34eac59ed523bfc868a644974->enter($__internal_06c9b3ae631407f4c99731dbeee49f26256baac34eac59ed523bfc868a644974_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_06c9b3ae631407f4c99731dbeee49f26256baac34eac59ed523bfc868a644974->leave($__internal_06c9b3ae631407f4c99731dbeee49f26256baac34eac59ed523bfc868a644974_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0e0d83ec74551d40146abbf67cec520e552f16606905d91d7f898b1bdda1bd6e = $this->env->getExtension("native_profiler");
        $__internal_0e0d83ec74551d40146abbf67cec520e552f16606905d91d7f898b1bdda1bd6e->enter($__internal_0e0d83ec74551d40146abbf67cec520e552f16606905d91d7f898b1bdda1bd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_0e0d83ec74551d40146abbf67cec520e552f16606905d91d7f898b1bdda1bd6e->leave($__internal_0e0d83ec74551d40146abbf67cec520e552f16606905d91d7f898b1bdda1bd6e_prof);

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
