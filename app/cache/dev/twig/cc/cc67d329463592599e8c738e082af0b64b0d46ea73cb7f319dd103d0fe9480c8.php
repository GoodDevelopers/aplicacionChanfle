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
        $__internal_7bbe388f9da757fb152a1a47a2e4356d14ae7a7a2ad6eb1d103a774b7c64a868 = $this->env->getExtension("native_profiler");
        $__internal_7bbe388f9da757fb152a1a47a2e4356d14ae7a7a2ad6eb1d103a774b7c64a868->enter($__internal_7bbe388f9da757fb152a1a47a2e4356d14ae7a7a2ad6eb1d103a774b7c64a868_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bbe388f9da757fb152a1a47a2e4356d14ae7a7a2ad6eb1d103a774b7c64a868->leave($__internal_7bbe388f9da757fb152a1a47a2e4356d14ae7a7a2ad6eb1d103a774b7c64a868_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_90a7c09e7794a3a6038ad5f168988a0bf5c6df2ea0a10dea2ed4ad72718b64ed = $this->env->getExtension("native_profiler");
        $__internal_90a7c09e7794a3a6038ad5f168988a0bf5c6df2ea0a10dea2ed4ad72718b64ed->enter($__internal_90a7c09e7794a3a6038ad5f168988a0bf5c6df2ea0a10dea2ed4ad72718b64ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_90a7c09e7794a3a6038ad5f168988a0bf5c6df2ea0a10dea2ed4ad72718b64ed->leave($__internal_90a7c09e7794a3a6038ad5f168988a0bf5c6df2ea0a10dea2ed4ad72718b64ed_prof);

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
