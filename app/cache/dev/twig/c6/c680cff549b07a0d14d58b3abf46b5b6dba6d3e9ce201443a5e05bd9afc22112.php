<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f97059152515cc3ae5abe42358f748b4a5373dbc6c10c4cc55da0f204810ca6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_50c70b3e2da1c8c37e60ed721141252657bd9bc48cf69764265ae8835f4eb4a0 = $this->env->getExtension("native_profiler");
        $__internal_50c70b3e2da1c8c37e60ed721141252657bd9bc48cf69764265ae8835f4eb4a0->enter($__internal_50c70b3e2da1c8c37e60ed721141252657bd9bc48cf69764265ae8835f4eb4a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_50c70b3e2da1c8c37e60ed721141252657bd9bc48cf69764265ae8835f4eb4a0->leave($__internal_50c70b3e2da1c8c37e60ed721141252657bd9bc48cf69764265ae8835f4eb4a0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_3444c9e5f4aa75d1a0580fd8d53aac6efa709cafe2d5586b268eb0e89da04b8d = $this->env->getExtension("native_profiler");
        $__internal_3444c9e5f4aa75d1a0580fd8d53aac6efa709cafe2d5586b268eb0e89da04b8d->enter($__internal_3444c9e5f4aa75d1a0580fd8d53aac6efa709cafe2d5586b268eb0e89da04b8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_3444c9e5f4aa75d1a0580fd8d53aac6efa709cafe2d5586b268eb0e89da04b8d->leave($__internal_3444c9e5f4aa75d1a0580fd8d53aac6efa709cafe2d5586b268eb0e89da04b8d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
