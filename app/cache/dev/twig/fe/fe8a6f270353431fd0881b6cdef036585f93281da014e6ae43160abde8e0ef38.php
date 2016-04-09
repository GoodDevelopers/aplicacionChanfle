<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_7756e91a7b15d47ccb9071579015e7f1f87ba3d852c243b6aec85c000af5c479 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_924875a04cf656bbd1d3bfde1211d351f75d897814301c17f9f5bbdc126b6b9d = $this->env->getExtension("native_profiler");
        $__internal_924875a04cf656bbd1d3bfde1211d351f75d897814301c17f9f5bbdc126b6b9d->enter($__internal_924875a04cf656bbd1d3bfde1211d351f75d897814301c17f9f5bbdc126b6b9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_924875a04cf656bbd1d3bfde1211d351f75d897814301c17f9f5bbdc126b6b9d->leave($__internal_924875a04cf656bbd1d3bfde1211d351f75d897814301c17f9f5bbdc126b6b9d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_24ae473c7c9b3dd7d62aeb52fe3871339bfb79bffba3cf07355e9b1166eace9d = $this->env->getExtension("native_profiler");
        $__internal_24ae473c7c9b3dd7d62aeb52fe3871339bfb79bffba3cf07355e9b1166eace9d->enter($__internal_24ae473c7c9b3dd7d62aeb52fe3871339bfb79bffba3cf07355e9b1166eace9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_24ae473c7c9b3dd7d62aeb52fe3871339bfb79bffba3cf07355e9b1166eace9d->leave($__internal_24ae473c7c9b3dd7d62aeb52fe3871339bfb79bffba3cf07355e9b1166eace9d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
