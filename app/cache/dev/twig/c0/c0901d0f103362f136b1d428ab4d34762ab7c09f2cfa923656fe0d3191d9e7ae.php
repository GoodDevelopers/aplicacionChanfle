<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_44fc123bea14a937dc9bf2d6887c858f8943fd2320d81d4a077e02e22e354306 extends Twig_Template
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
        $__internal_0dbd6442efe3f820e61ff23fd609bb56837231503d21d7cdc4198b4bda3d3648 = $this->env->getExtension("native_profiler");
        $__internal_0dbd6442efe3f820e61ff23fd609bb56837231503d21d7cdc4198b4bda3d3648->enter($__internal_0dbd6442efe3f820e61ff23fd609bb56837231503d21d7cdc4198b4bda3d3648_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0dbd6442efe3f820e61ff23fd609bb56837231503d21d7cdc4198b4bda3d3648->leave($__internal_0dbd6442efe3f820e61ff23fd609bb56837231503d21d7cdc4198b4bda3d3648_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4683edf2921cddd5692954320075d2ef795096828f762c139680e2b2dab21e99 = $this->env->getExtension("native_profiler");
        $__internal_4683edf2921cddd5692954320075d2ef795096828f762c139680e2b2dab21e99->enter($__internal_4683edf2921cddd5692954320075d2ef795096828f762c139680e2b2dab21e99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_4683edf2921cddd5692954320075d2ef795096828f762c139680e2b2dab21e99->leave($__internal_4683edf2921cddd5692954320075d2ef795096828f762c139680e2b2dab21e99_prof);

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
