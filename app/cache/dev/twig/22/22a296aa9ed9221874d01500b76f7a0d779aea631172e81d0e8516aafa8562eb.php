<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_bb2abeca9085adffba563ae4a640fe94e019b135deadbce65fe0d23f903925b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_3b10d8c16066b08752aad4be7f2ace343924f9029fa02bd249af4dde0463fc5d = $this->env->getExtension("native_profiler");
        $__internal_3b10d8c16066b08752aad4be7f2ace343924f9029fa02bd249af4dde0463fc5d->enter($__internal_3b10d8c16066b08752aad4be7f2ace343924f9029fa02bd249af4dde0463fc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3b10d8c16066b08752aad4be7f2ace343924f9029fa02bd249af4dde0463fc5d->leave($__internal_3b10d8c16066b08752aad4be7f2ace343924f9029fa02bd249af4dde0463fc5d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2a8cf08ed1ec5bf5495d171d4bf6cae5abda5e15b11239282844481c015b31d2 = $this->env->getExtension("native_profiler");
        $__internal_2a8cf08ed1ec5bf5495d171d4bf6cae5abda5e15b11239282844481c015b31d2->enter($__internal_2a8cf08ed1ec5bf5495d171d4bf6cae5abda5e15b11239282844481c015b31d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_2a8cf08ed1ec5bf5495d171d4bf6cae5abda5e15b11239282844481c015b31d2->leave($__internal_2a8cf08ed1ec5bf5495d171d4bf6cae5abda5e15b11239282844481c015b31d2_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
