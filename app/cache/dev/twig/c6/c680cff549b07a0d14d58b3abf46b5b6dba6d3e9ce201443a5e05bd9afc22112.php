<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f97059152515cc3ae5abe42358f748b4a5373dbc6c10c4cc55da0f204810ca6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_f11422f675860bb3e394920bc120262cfda6886ac414648fd24adbb3da5a4920 = $this->env->getExtension("native_profiler");
        $__internal_f11422f675860bb3e394920bc120262cfda6886ac414648fd24adbb3da5a4920->enter($__internal_f11422f675860bb3e394920bc120262cfda6886ac414648fd24adbb3da5a4920_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f11422f675860bb3e394920bc120262cfda6886ac414648fd24adbb3da5a4920->leave($__internal_f11422f675860bb3e394920bc120262cfda6886ac414648fd24adbb3da5a4920_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_94ae1a1e1f5b7f335fb22de26b4a59e20b4c4579d6c0a1774ada01ab83fe8ba9 = $this->env->getExtension("native_profiler");
        $__internal_94ae1a1e1f5b7f335fb22de26b4a59e20b4c4579d6c0a1774ada01ab83fe8ba9->enter($__internal_94ae1a1e1f5b7f335fb22de26b4a59e20b4c4579d6c0a1774ada01ab83fe8ba9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_94ae1a1e1f5b7f335fb22de26b4a59e20b4c4579d6c0a1774ada01ab83fe8ba9->leave($__internal_94ae1a1e1f5b7f335fb22de26b4a59e20b4c4579d6c0a1774ada01ab83fe8ba9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
