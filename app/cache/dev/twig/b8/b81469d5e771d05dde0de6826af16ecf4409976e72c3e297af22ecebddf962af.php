<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_a17c6220af1e1aa936b39d43c83fd1b24d82da2b4dd69be36a032d41183a244e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_21ea4efeb74281b465e941d89b688a955f4e371c681ee75f207319a7a6ba5a4d = $this->env->getExtension("native_profiler");
        $__internal_21ea4efeb74281b465e941d89b688a955f4e371c681ee75f207319a7a6ba5a4d->enter($__internal_21ea4efeb74281b465e941d89b688a955f4e371c681ee75f207319a7a6ba5a4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_21ea4efeb74281b465e941d89b688a955f4e371c681ee75f207319a7a6ba5a4d->leave($__internal_21ea4efeb74281b465e941d89b688a955f4e371c681ee75f207319a7a6ba5a4d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_422ba08669febd94c97df2e74d6a71d3c27d01b9d101dfacda83e1e9478ba23d = $this->env->getExtension("native_profiler");
        $__internal_422ba08669febd94c97df2e74d6a71d3c27d01b9d101dfacda83e1e9478ba23d->enter($__internal_422ba08669febd94c97df2e74d6a71d3c27d01b9d101dfacda83e1e9478ba23d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_422ba08669febd94c97df2e74d6a71d3c27d01b9d101dfacda83e1e9478ba23d->leave($__internal_422ba08669febd94c97df2e74d6a71d3c27d01b9d101dfacda83e1e9478ba23d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
