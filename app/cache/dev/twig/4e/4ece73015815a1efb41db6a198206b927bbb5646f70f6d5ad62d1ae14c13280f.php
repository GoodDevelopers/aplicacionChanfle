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
        $__internal_1f6e7bc2d2515702310d04416d62e5f9ef07058fcb39421f56a69ae0cfdccc75 = $this->env->getExtension("native_profiler");
        $__internal_1f6e7bc2d2515702310d04416d62e5f9ef07058fcb39421f56a69ae0cfdccc75->enter($__internal_1f6e7bc2d2515702310d04416d62e5f9ef07058fcb39421f56a69ae0cfdccc75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:passwordAlreadyRequested.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1f6e7bc2d2515702310d04416d62e5f9ef07058fcb39421f56a69ae0cfdccc75->leave($__internal_1f6e7bc2d2515702310d04416d62e5f9ef07058fcb39421f56a69ae0cfdccc75_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_594d19ee6fa9a189db404ff0debd1356ef55fc0902d55d8d143fc91a8de753a0 = $this->env->getExtension("native_profiler");
        $__internal_594d19ee6fa9a189db404ff0debd1356ef55fc0902d55d8d143fc91a8de753a0->enter($__internal_594d19ee6fa9a189db404ff0debd1356ef55fc0902d55d8d143fc91a8de753a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.password_already_requested", array(), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_594d19ee6fa9a189db404ff0debd1356ef55fc0902d55d8d143fc91a8de753a0->leave($__internal_594d19ee6fa9a189db404ff0debd1356ef55fc0902d55d8d143fc91a8de753a0_prof);

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
