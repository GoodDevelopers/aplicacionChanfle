<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_e8f0bbc90be80b3d163a78443e378379d9ef8efff89ab828b917830227a4df5b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:list.html.twig", 1);
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
        $__internal_46c4792cabf1acec6fd064f7866b844b5a9bfafe39804af567880b4a69ad6a19 = $this->env->getExtension("native_profiler");
        $__internal_46c4792cabf1acec6fd064f7866b844b5a9bfafe39804af567880b4a69ad6a19->enter($__internal_46c4792cabf1acec6fd064f7866b844b5a9bfafe39804af567880b4a69ad6a19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_46c4792cabf1acec6fd064f7866b844b5a9bfafe39804af567880b4a69ad6a19->leave($__internal_46c4792cabf1acec6fd064f7866b844b5a9bfafe39804af567880b4a69ad6a19_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_08afcfeb941eb798ae2b4b1718f2f0b0c9ed815ca8c10d2e807cd956e444aab7 = $this->env->getExtension("native_profiler");
        $__internal_08afcfeb941eb798ae2b4b1718f2f0b0c9ed815ca8c10d2e807cd956e444aab7->enter($__internal_08afcfeb941eb798ae2b4b1718f2f0b0c9ed815ca8c10d2e807cd956e444aab7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_08afcfeb941eb798ae2b4b1718f2f0b0c9ed815ca8c10d2e807cd956e444aab7->leave($__internal_08afcfeb941eb798ae2b4b1718f2f0b0c9ed815ca8c10d2e807cd956e444aab7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:list.html.twig";
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
/* {% include "FOSUserBundle:Group:list_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
