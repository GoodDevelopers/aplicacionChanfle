<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6571455a57738638c909a87ade1c97f0817910dd371c69eff9a699852f5ebd70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_5916ea5358b7740965879b7b87adc06cdb2fef02518866daa4b40429cfc4b6eb = $this->env->getExtension("native_profiler");
        $__internal_5916ea5358b7740965879b7b87adc06cdb2fef02518866daa4b40429cfc4b6eb->enter($__internal_5916ea5358b7740965879b7b87adc06cdb2fef02518866daa4b40429cfc4b6eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5916ea5358b7740965879b7b87adc06cdb2fef02518866daa4b40429cfc4b6eb->leave($__internal_5916ea5358b7740965879b7b87adc06cdb2fef02518866daa4b40429cfc4b6eb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ed0fbd953121c11192783db9ccac29ae703f844776cd226c9e1aeac075c52e59 = $this->env->getExtension("native_profiler");
        $__internal_ed0fbd953121c11192783db9ccac29ae703f844776cd226c9e1aeac075c52e59->enter($__internal_ed0fbd953121c11192783db9ccac29ae703f844776cd226c9e1aeac075c52e59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_ed0fbd953121c11192783db9ccac29ae703f844776cd226c9e1aeac075c52e59->leave($__internal_ed0fbd953121c11192783db9ccac29ae703f844776cd226c9e1aeac075c52e59_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
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
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
