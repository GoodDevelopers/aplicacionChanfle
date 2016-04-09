<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_990d0b67e6263888f4ba32b536c48930d8d7b3a23b138c1d3ef28863d050e702 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_05687d48bca8da13de4d7a3ca0d5ccfc37487d505504cb4dc485fbc7bc7bec57 = $this->env->getExtension("native_profiler");
        $__internal_05687d48bca8da13de4d7a3ca0d5ccfc37487d505504cb4dc485fbc7bc7bec57->enter($__internal_05687d48bca8da13de4d7a3ca0d5ccfc37487d505504cb4dc485fbc7bc7bec57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05687d48bca8da13de4d7a3ca0d5ccfc37487d505504cb4dc485fbc7bc7bec57->leave($__internal_05687d48bca8da13de4d7a3ca0d5ccfc37487d505504cb4dc485fbc7bc7bec57_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8b63a3b860adf47b1f26da83327bcd8fa51f8056fe1541df08bfd44ce849136 = $this->env->getExtension("native_profiler");
        $__internal_b8b63a3b860adf47b1f26da83327bcd8fa51f8056fe1541df08bfd44ce849136->enter($__internal_b8b63a3b860adf47b1f26da83327bcd8fa51f8056fe1541df08bfd44ce849136_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_b8b63a3b860adf47b1f26da83327bcd8fa51f8056fe1541df08bfd44ce849136->leave($__internal_b8b63a3b860adf47b1f26da83327bcd8fa51f8056fe1541df08bfd44ce849136_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
