<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_bce24fd0435ca4e98008909c7fa6fcdbf2940575c4e7c7ff63c0cf5d39f0d955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_6fa6bde174ad4a152fff668a457201f4ab6c8f4e04600bd07bf5ee5b570924dd = $this->env->getExtension("native_profiler");
        $__internal_6fa6bde174ad4a152fff668a457201f4ab6c8f4e04600bd07bf5ee5b570924dd->enter($__internal_6fa6bde174ad4a152fff668a457201f4ab6c8f4e04600bd07bf5ee5b570924dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6fa6bde174ad4a152fff668a457201f4ab6c8f4e04600bd07bf5ee5b570924dd->leave($__internal_6fa6bde174ad4a152fff668a457201f4ab6c8f4e04600bd07bf5ee5b570924dd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1763511fb4341d5baf535ccefcad94c279d7edfa8b9cce656564545d478d3d5a = $this->env->getExtension("native_profiler");
        $__internal_1763511fb4341d5baf535ccefcad94c279d7edfa8b9cce656564545d478d3d5a->enter($__internal_1763511fb4341d5baf535ccefcad94c279d7edfa8b9cce656564545d478d3d5a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_1763511fb4341d5baf535ccefcad94c279d7edfa8b9cce656564545d478d3d5a->leave($__internal_1763511fb4341d5baf535ccefcad94c279d7edfa8b9cce656564545d478d3d5a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
/* {% include "FOSUserBundle:Group:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
