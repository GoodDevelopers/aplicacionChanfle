<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0034739247cd6f894642d7ee1e809c7cfa142527cb6dbc7b9d1259b2587879bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_67db9c5420366aa3ee4166a380cb18248536943dd34627e8473ff32ad4c63f57 = $this->env->getExtension("native_profiler");
        $__internal_67db9c5420366aa3ee4166a380cb18248536943dd34627e8473ff32ad4c63f57->enter($__internal_67db9c5420366aa3ee4166a380cb18248536943dd34627e8473ff32ad4c63f57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_67db9c5420366aa3ee4166a380cb18248536943dd34627e8473ff32ad4c63f57->leave($__internal_67db9c5420366aa3ee4166a380cb18248536943dd34627e8473ff32ad4c63f57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f27eedc216c65ec8dc70a27d4460ff7d65635205faabe2fcb4e1b7ee26625eb = $this->env->getExtension("native_profiler");
        $__internal_2f27eedc216c65ec8dc70a27d4460ff7d65635205faabe2fcb4e1b7ee26625eb->enter($__internal_2f27eedc216c65ec8dc70a27d4460ff7d65635205faabe2fcb4e1b7ee26625eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_2f27eedc216c65ec8dc70a27d4460ff7d65635205faabe2fcb4e1b7ee26625eb->leave($__internal_2f27eedc216c65ec8dc70a27d4460ff7d65635205faabe2fcb4e1b7ee26625eb_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
