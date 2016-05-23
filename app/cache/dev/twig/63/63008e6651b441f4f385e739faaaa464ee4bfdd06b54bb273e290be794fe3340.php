<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_bce24fd0435ca4e98008909c7fa6fcdbf2940575c4e7c7ff63c0cf5d39f0d955 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_c156fbdf196feaa74936122c7a2bfc624b93d5dbcb2338b799333fa3b05e036d = $this->env->getExtension("native_profiler");
        $__internal_c156fbdf196feaa74936122c7a2bfc624b93d5dbcb2338b799333fa3b05e036d->enter($__internal_c156fbdf196feaa74936122c7a2bfc624b93d5dbcb2338b799333fa3b05e036d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c156fbdf196feaa74936122c7a2bfc624b93d5dbcb2338b799333fa3b05e036d->leave($__internal_c156fbdf196feaa74936122c7a2bfc624b93d5dbcb2338b799333fa3b05e036d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_081928ebfca57c41a6571972abb1f5e92f55f6606897eede62d8759e2f164bc4 = $this->env->getExtension("native_profiler");
        $__internal_081928ebfca57c41a6571972abb1f5e92f55f6606897eede62d8759e2f164bc4->enter($__internal_081928ebfca57c41a6571972abb1f5e92f55f6606897eede62d8759e2f164bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_081928ebfca57c41a6571972abb1f5e92f55f6606897eede62d8759e2f164bc4->leave($__internal_081928ebfca57c41a6571972abb1f5e92f55f6606897eede62d8759e2f164bc4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
