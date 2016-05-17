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
        $__internal_fdb414e74eb1ea645b4e9984be913f3114cd46bd7893439b00b80e4c676f878f = $this->env->getExtension("native_profiler");
        $__internal_fdb414e74eb1ea645b4e9984be913f3114cd46bd7893439b00b80e4c676f878f->enter($__internal_fdb414e74eb1ea645b4e9984be913f3114cd46bd7893439b00b80e4c676f878f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fdb414e74eb1ea645b4e9984be913f3114cd46bd7893439b00b80e4c676f878f->leave($__internal_fdb414e74eb1ea645b4e9984be913f3114cd46bd7893439b00b80e4c676f878f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4353827ecf36ddb9cdb5d3029188f01bca3f987afef036a2ec0e9cbb6edd84a = $this->env->getExtension("native_profiler");
        $__internal_f4353827ecf36ddb9cdb5d3029188f01bca3f987afef036a2ec0e9cbb6edd84a->enter($__internal_f4353827ecf36ddb9cdb5d3029188f01bca3f987afef036a2ec0e9cbb6edd84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_f4353827ecf36ddb9cdb5d3029188f01bca3f987afef036a2ec0e9cbb6edd84a->leave($__internal_f4353827ecf36ddb9cdb5d3029188f01bca3f987afef036a2ec0e9cbb6edd84a_prof);

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
