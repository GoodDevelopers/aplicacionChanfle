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
        $__internal_b6f91716fbcc08c7d38951418d1b43003198b6943adcaf2cc11025d08acb53e0 = $this->env->getExtension("native_profiler");
        $__internal_b6f91716fbcc08c7d38951418d1b43003198b6943adcaf2cc11025d08acb53e0->enter($__internal_b6f91716fbcc08c7d38951418d1b43003198b6943adcaf2cc11025d08acb53e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b6f91716fbcc08c7d38951418d1b43003198b6943adcaf2cc11025d08acb53e0->leave($__internal_b6f91716fbcc08c7d38951418d1b43003198b6943adcaf2cc11025d08acb53e0_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_14cf2443a552887ef232030036f9587dfe54b4e616c5e2067f3b91955369c9e7 = $this->env->getExtension("native_profiler");
        $__internal_14cf2443a552887ef232030036f9587dfe54b4e616c5e2067f3b91955369c9e7->enter($__internal_14cf2443a552887ef232030036f9587dfe54b4e616c5e2067f3b91955369c9e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_14cf2443a552887ef232030036f9587dfe54b4e616c5e2067f3b91955369c9e7->leave($__internal_14cf2443a552887ef232030036f9587dfe54b4e616c5e2067f3b91955369c9e7_prof);

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
