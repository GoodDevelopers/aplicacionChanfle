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
        $__internal_84d2b1836182c8de1f97a31f6b3420944ca52208626603734c69e9569178a4c4 = $this->env->getExtension("native_profiler");
        $__internal_84d2b1836182c8de1f97a31f6b3420944ca52208626603734c69e9569178a4c4->enter($__internal_84d2b1836182c8de1f97a31f6b3420944ca52208626603734c69e9569178a4c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_84d2b1836182c8de1f97a31f6b3420944ca52208626603734c69e9569178a4c4->leave($__internal_84d2b1836182c8de1f97a31f6b3420944ca52208626603734c69e9569178a4c4_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_383c15f43db81a7fd8aecce43b9061fd4e5d564dfc89ce83cdae373188ce7e86 = $this->env->getExtension("native_profiler");
        $__internal_383c15f43db81a7fd8aecce43b9061fd4e5d564dfc89ce83cdae373188ce7e86->enter($__internal_383c15f43db81a7fd8aecce43b9061fd4e5d564dfc89ce83cdae373188ce7e86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_383c15f43db81a7fd8aecce43b9061fd4e5d564dfc89ce83cdae373188ce7e86->leave($__internal_383c15f43db81a7fd8aecce43b9061fd4e5d564dfc89ce83cdae373188ce7e86_prof);

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
