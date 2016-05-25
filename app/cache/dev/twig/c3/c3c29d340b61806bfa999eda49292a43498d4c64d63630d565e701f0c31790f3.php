<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9767b4758294cad5c79fe117284223873d7bd0f8da409662a42a7023e582d145 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_4c84a5c831e56c8353afe4f4d4a5acf9d2bb038a5a30f2293d461be0942d9eed = $this->env->getExtension("native_profiler");
        $__internal_4c84a5c831e56c8353afe4f4d4a5acf9d2bb038a5a30f2293d461be0942d9eed->enter($__internal_4c84a5c831e56c8353afe4f4d4a5acf9d2bb038a5a30f2293d461be0942d9eed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4c84a5c831e56c8353afe4f4d4a5acf9d2bb038a5a30f2293d461be0942d9eed->leave($__internal_4c84a5c831e56c8353afe4f4d4a5acf9d2bb038a5a30f2293d461be0942d9eed_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c70f859307512d16f3839f48c96c7a3420cf398d50454fe6d6f768cddaa98309 = $this->env->getExtension("native_profiler");
        $__internal_c70f859307512d16f3839f48c96c7a3420cf398d50454fe6d6f768cddaa98309->enter($__internal_c70f859307512d16f3839f48c96c7a3420cf398d50454fe6d6f768cddaa98309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_c70f859307512d16f3839f48c96c7a3420cf398d50454fe6d6f768cddaa98309->leave($__internal_c70f859307512d16f3839f48c96c7a3420cf398d50454fe6d6f768cddaa98309_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
