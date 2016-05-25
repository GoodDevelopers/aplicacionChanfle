<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_4655959beac3b2d3ebf1f34ec364f5553d4198a329ffd36fe5e59ab1eaac6879 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_394c2139d45348432d6228f57d8738804731329734cb42c3b74df8a969fe2e35 = $this->env->getExtension("native_profiler");
        $__internal_394c2139d45348432d6228f57d8738804731329734cb42c3b74df8a969fe2e35->enter($__internal_394c2139d45348432d6228f57d8738804731329734cb42c3b74df8a969fe2e35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_394c2139d45348432d6228f57d8738804731329734cb42c3b74df8a969fe2e35->leave($__internal_394c2139d45348432d6228f57d8738804731329734cb42c3b74df8a969fe2e35_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f24cdabddd198eb8e24c30517c4b53ab789a522b3d18d897123c0acf242bc0bd = $this->env->getExtension("native_profiler");
        $__internal_f24cdabddd198eb8e24c30517c4b53ab789a522b3d18d897123c0acf242bc0bd->enter($__internal_f24cdabddd198eb8e24c30517c4b53ab789a522b3d18d897123c0acf242bc0bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_f24cdabddd198eb8e24c30517c4b53ab789a522b3d18d897123c0acf242bc0bd->leave($__internal_f24cdabddd198eb8e24c30517c4b53ab789a522b3d18d897123c0acf242bc0bd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
