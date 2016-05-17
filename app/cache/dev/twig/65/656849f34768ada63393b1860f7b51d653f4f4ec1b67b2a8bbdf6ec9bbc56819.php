<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_937bb855121495934f9eda9a5e2c7560150dd321979a8aba5b690d1758a26dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_8cec94a7ae3fba4b7a9eba2721fb851d883d9bd8af49a7df2471c03c60a7a9d0 = $this->env->getExtension("native_profiler");
        $__internal_8cec94a7ae3fba4b7a9eba2721fb851d883d9bd8af49a7df2471c03c60a7a9d0->enter($__internal_8cec94a7ae3fba4b7a9eba2721fb851d883d9bd8af49a7df2471c03c60a7a9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8cec94a7ae3fba4b7a9eba2721fb851d883d9bd8af49a7df2471c03c60a7a9d0->leave($__internal_8cec94a7ae3fba4b7a9eba2721fb851d883d9bd8af49a7df2471c03c60a7a9d0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_23f38efa061e9e3cc539314fb48197af0713248ded87e65eef8f029254f1cfdf = $this->env->getExtension("native_profiler");
        $__internal_23f38efa061e9e3cc539314fb48197af0713248ded87e65eef8f029254f1cfdf->enter($__internal_23f38efa061e9e3cc539314fb48197af0713248ded87e65eef8f029254f1cfdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_23f38efa061e9e3cc539314fb48197af0713248ded87e65eef8f029254f1cfdf->leave($__internal_23f38efa061e9e3cc539314fb48197af0713248ded87e65eef8f029254f1cfdf_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
