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
        $__internal_63fd419a99a595a8390d948ed81183b1a9aedfc8e77f022d5e0713837e2e4990 = $this->env->getExtension("native_profiler");
        $__internal_63fd419a99a595a8390d948ed81183b1a9aedfc8e77f022d5e0713837e2e4990->enter($__internal_63fd419a99a595a8390d948ed81183b1a9aedfc8e77f022d5e0713837e2e4990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_63fd419a99a595a8390d948ed81183b1a9aedfc8e77f022d5e0713837e2e4990->leave($__internal_63fd419a99a595a8390d948ed81183b1a9aedfc8e77f022d5e0713837e2e4990_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_31a73e83283f287499dcd219b958e8cac473879d317978eb61787757f467b571 = $this->env->getExtension("native_profiler");
        $__internal_31a73e83283f287499dcd219b958e8cac473879d317978eb61787757f467b571->enter($__internal_31a73e83283f287499dcd219b958e8cac473879d317978eb61787757f467b571_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_31a73e83283f287499dcd219b958e8cac473879d317978eb61787757f467b571->leave($__internal_31a73e83283f287499dcd219b958e8cac473879d317978eb61787757f467b571_prof);

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
