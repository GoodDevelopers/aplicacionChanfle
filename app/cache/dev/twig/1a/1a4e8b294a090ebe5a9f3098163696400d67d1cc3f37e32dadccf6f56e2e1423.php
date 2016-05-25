<?php

/* FOSUserBundle:Group:list.html.twig */
class __TwigTemplate_b303b5cc747e6e51cedbdda044fdffc17b9f2992924e0b50e7aaf2b3df0546e2 extends Twig_Template
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
        $__internal_ffeb8e0510cdbc8617561961979479126650583235daf717bb9c682803ec611d = $this->env->getExtension("native_profiler");
        $__internal_ffeb8e0510cdbc8617561961979479126650583235daf717bb9c682803ec611d->enter($__internal_ffeb8e0510cdbc8617561961979479126650583235daf717bb9c682803ec611d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ffeb8e0510cdbc8617561961979479126650583235daf717bb9c682803ec611d->leave($__internal_ffeb8e0510cdbc8617561961979479126650583235daf717bb9c682803ec611d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3f0325b5cda46204eb8c503135bf74a59c10b0166d4b81d9b377d466e9f8857e = $this->env->getExtension("native_profiler");
        $__internal_3f0325b5cda46204eb8c503135bf74a59c10b0166d4b81d9b377d466e9f8857e->enter($__internal_3f0325b5cda46204eb8c503135bf74a59c10b0166d4b81d9b377d466e9f8857e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "FOSUserBundle:Group:list.html.twig", 4)->display($context);
        
        $__internal_3f0325b5cda46204eb8c503135bf74a59c10b0166d4b81d9b377d466e9f8857e->leave($__internal_3f0325b5cda46204eb8c503135bf74a59c10b0166d4b81d9b377d466e9f8857e_prof);

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
