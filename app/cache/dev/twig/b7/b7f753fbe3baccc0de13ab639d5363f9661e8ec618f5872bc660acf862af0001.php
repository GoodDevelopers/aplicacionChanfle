<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_3be663e94afbf618013d2639068ef36a5344bbb6dab8cd03459cd5c50783cf7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_7b5661d1b53682ae62ed6a07d02a86d21d54fcf1eba85a649b3be1a3c5822540 = $this->env->getExtension("native_profiler");
        $__internal_7b5661d1b53682ae62ed6a07d02a86d21d54fcf1eba85a649b3be1a3c5822540->enter($__internal_7b5661d1b53682ae62ed6a07d02a86d21d54fcf1eba85a649b3be1a3c5822540_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b5661d1b53682ae62ed6a07d02a86d21d54fcf1eba85a649b3be1a3c5822540->leave($__internal_7b5661d1b53682ae62ed6a07d02a86d21d54fcf1eba85a649b3be1a3c5822540_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3bfd7eb97aa3bf7cda578403db87613c56d1f30c39000d0208900145183f09fa = $this->env->getExtension("native_profiler");
        $__internal_3bfd7eb97aa3bf7cda578403db87613c56d1f30c39000d0208900145183f09fa->enter($__internal_3bfd7eb97aa3bf7cda578403db87613c56d1f30c39000d0208900145183f09fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_3bfd7eb97aa3bf7cda578403db87613c56d1f30c39000d0208900145183f09fa->leave($__internal_3bfd7eb97aa3bf7cda578403db87613c56d1f30c39000d0208900145183f09fa_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
