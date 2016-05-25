<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_0aa53c0aa3ae4632c898dcc74bcfcfeccd5bc15e2279dee972a71b43d0adbe56 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_2fd55349a812d6f78696263f418f3885c95d10df64cf9229ab80b760739c125c = $this->env->getExtension("native_profiler");
        $__internal_2fd55349a812d6f78696263f418f3885c95d10df64cf9229ab80b760739c125c->enter($__internal_2fd55349a812d6f78696263f418f3885c95d10df64cf9229ab80b760739c125c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2fd55349a812d6f78696263f418f3885c95d10df64cf9229ab80b760739c125c->leave($__internal_2fd55349a812d6f78696263f418f3885c95d10df64cf9229ab80b760739c125c_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_85b46ba21490453ce3157af7df6d05b655c5c667cedec5f1d1a549abaff81e03 = $this->env->getExtension("native_profiler");
        $__internal_85b46ba21490453ce3157af7df6d05b655c5c667cedec5f1d1a549abaff81e03->enter($__internal_85b46ba21490453ce3157af7df6d05b655c5c667cedec5f1d1a549abaff81e03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_85b46ba21490453ce3157af7df6d05b655c5c667cedec5f1d1a549abaff81e03->leave($__internal_85b46ba21490453ce3157af7df6d05b655c5c667cedec5f1d1a549abaff81e03_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
