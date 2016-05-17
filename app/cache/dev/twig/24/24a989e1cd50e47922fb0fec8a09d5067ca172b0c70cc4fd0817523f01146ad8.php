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
        $__internal_9dd59272ab96ead6b9b806f72bf97abeade6f3a6d1b291503e194d0d35611521 = $this->env->getExtension("native_profiler");
        $__internal_9dd59272ab96ead6b9b806f72bf97abeade6f3a6d1b291503e194d0d35611521->enter($__internal_9dd59272ab96ead6b9b806f72bf97abeade6f3a6d1b291503e194d0d35611521_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9dd59272ab96ead6b9b806f72bf97abeade6f3a6d1b291503e194d0d35611521->leave($__internal_9dd59272ab96ead6b9b806f72bf97abeade6f3a6d1b291503e194d0d35611521_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_60312fe95cb802ae8fb8910881d02e6e8d2420e9a35ee57b873fba54259a1f36 = $this->env->getExtension("native_profiler");
        $__internal_60312fe95cb802ae8fb8910881d02e6e8d2420e9a35ee57b873fba54259a1f36->enter($__internal_60312fe95cb802ae8fb8910881d02e6e8d2420e9a35ee57b873fba54259a1f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_60312fe95cb802ae8fb8910881d02e6e8d2420e9a35ee57b873fba54259a1f36->leave($__internal_60312fe95cb802ae8fb8910881d02e6e8d2420e9a35ee57b873fba54259a1f36_prof);

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
