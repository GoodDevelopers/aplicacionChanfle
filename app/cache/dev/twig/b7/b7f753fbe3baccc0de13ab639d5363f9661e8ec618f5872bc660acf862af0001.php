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
        $__internal_b2b10a3358c830807f2eb6988d4d3d8157bba658ac4e3f719e5c537736d931ef = $this->env->getExtension("native_profiler");
        $__internal_b2b10a3358c830807f2eb6988d4d3d8157bba658ac4e3f719e5c537736d931ef->enter($__internal_b2b10a3358c830807f2eb6988d4d3d8157bba658ac4e3f719e5c537736d931ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2b10a3358c830807f2eb6988d4d3d8157bba658ac4e3f719e5c537736d931ef->leave($__internal_b2b10a3358c830807f2eb6988d4d3d8157bba658ac4e3f719e5c537736d931ef_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0ddb0812af65d3184e40d64eb424ced4dc841bd96c50d4560dc0b45a0af35a1d = $this->env->getExtension("native_profiler");
        $__internal_0ddb0812af65d3184e40d64eb424ced4dc841bd96c50d4560dc0b45a0af35a1d->enter($__internal_0ddb0812af65d3184e40d64eb424ced4dc841bd96c50d4560dc0b45a0af35a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_0ddb0812af65d3184e40d64eb424ced4dc841bd96c50d4560dc0b45a0af35a1d->leave($__internal_0ddb0812af65d3184e40d64eb424ced4dc841bd96c50d4560dc0b45a0af35a1d_prof);

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
