<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d37aa1800176ce8257cc531b1125a7a4dcf1d911eb041720aa3803d783f91f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_8447a62ca5fa4e7319b495f049e58a1a133a69d71046cf43b477729065660378 = $this->env->getExtension("native_profiler");
        $__internal_8447a62ca5fa4e7319b495f049e58a1a133a69d71046cf43b477729065660378->enter($__internal_8447a62ca5fa4e7319b495f049e58a1a133a69d71046cf43b477729065660378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8447a62ca5fa4e7319b495f049e58a1a133a69d71046cf43b477729065660378->leave($__internal_8447a62ca5fa4e7319b495f049e58a1a133a69d71046cf43b477729065660378_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8ba05d170eb8d4b2b3ea91a036a275849837a23bec3d41bd012e84b303417dd3 = $this->env->getExtension("native_profiler");
        $__internal_8ba05d170eb8d4b2b3ea91a036a275849837a23bec3d41bd012e84b303417dd3->enter($__internal_8ba05d170eb8d4b2b3ea91a036a275849837a23bec3d41bd012e84b303417dd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_8ba05d170eb8d4b2b3ea91a036a275849837a23bec3d41bd012e84b303417dd3->leave($__internal_8ba05d170eb8d4b2b3ea91a036a275849837a23bec3d41bd012e84b303417dd3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
