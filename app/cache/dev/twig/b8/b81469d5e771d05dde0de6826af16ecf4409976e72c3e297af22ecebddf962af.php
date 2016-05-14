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
        $__internal_3e7d0e1bab7c04a0b7e8458e3d2f95176e596c45b61191ac9458d288d2359a99 = $this->env->getExtension("native_profiler");
        $__internal_3e7d0e1bab7c04a0b7e8458e3d2f95176e596c45b61191ac9458d288d2359a99->enter($__internal_3e7d0e1bab7c04a0b7e8458e3d2f95176e596c45b61191ac9458d288d2359a99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3e7d0e1bab7c04a0b7e8458e3d2f95176e596c45b61191ac9458d288d2359a99->leave($__internal_3e7d0e1bab7c04a0b7e8458e3d2f95176e596c45b61191ac9458d288d2359a99_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b16e84407cca37ba1dc0322a054f1acd8b37cf649758ea6c2afb6c8c0ac18536 = $this->env->getExtension("native_profiler");
        $__internal_b16e84407cca37ba1dc0322a054f1acd8b37cf649758ea6c2afb6c8c0ac18536->enter($__internal_b16e84407cca37ba1dc0322a054f1acd8b37cf649758ea6c2afb6c8c0ac18536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_b16e84407cca37ba1dc0322a054f1acd8b37cf649758ea6c2afb6c8c0ac18536->leave($__internal_b16e84407cca37ba1dc0322a054f1acd8b37cf649758ea6c2afb6c8c0ac18536_prof);

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
