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
        $__internal_a961b1853de5a102a9a643ecf66332bd4d5d948e122348b75ef954652277126e = $this->env->getExtension("native_profiler");
        $__internal_a961b1853de5a102a9a643ecf66332bd4d5d948e122348b75ef954652277126e->enter($__internal_a961b1853de5a102a9a643ecf66332bd4d5d948e122348b75ef954652277126e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a961b1853de5a102a9a643ecf66332bd4d5d948e122348b75ef954652277126e->leave($__internal_a961b1853de5a102a9a643ecf66332bd4d5d948e122348b75ef954652277126e_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1a3bb7fea00701c5cc698cb4c3b15d50d79cff8f1956836efad96838f071235e = $this->env->getExtension("native_profiler");
        $__internal_1a3bb7fea00701c5cc698cb4c3b15d50d79cff8f1956836efad96838f071235e->enter($__internal_1a3bb7fea00701c5cc698cb4c3b15d50d79cff8f1956836efad96838f071235e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_1a3bb7fea00701c5cc698cb4c3b15d50d79cff8f1956836efad96838f071235e->leave($__internal_1a3bb7fea00701c5cc698cb4c3b15d50d79cff8f1956836efad96838f071235e_prof);

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
