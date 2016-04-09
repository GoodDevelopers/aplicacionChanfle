<?php

/* FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig */
class __TwigTemplate_5cfda331ad93671956f6a306a9fbb4eea57f1744bd14fc453090ee9eca0fde86 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig", 1);
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
        $__internal_53324d87040fe215c3d78509fcc31bac41d3548c35b4c5241c88d5df779a5c24 = $this->env->getExtension("native_profiler");
        $__internal_53324d87040fe215c3d78509fcc31bac41d3548c35b4c5241c88d5df779a5c24->enter($__internal_53324d87040fe215c3d78509fcc31bac41d3548c35b4c5241c88d5df779a5c24_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_53324d87040fe215c3d78509fcc31bac41d3548c35b4c5241c88d5df779a5c24->leave($__internal_53324d87040fe215c3d78509fcc31bac41d3548c35b4c5241c88d5df779a5c24_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_2f4a5b8334295811d8c354fc2505fd33930248a1151d09065a5dedc7529887ce = $this->env->getExtension("native_profiler");
        $__internal_2f4a5b8334295811d8c354fc2505fd33930248a1151d09065a5dedc7529887ce->enter($__internal_2f4a5b8334295811d8c354fc2505fd33930248a1151d09065a5dedc7529887ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_2f4a5b8334295811d8c354fc2505fd33930248a1151d09065a5dedc7529887ce->leave($__internal_2f4a5b8334295811d8c354fc2505fd33930248a1151d09065a5dedc7529887ce_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>{{ 'resetting.password_already_requested'|trans }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
