<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9525767148a997a23c957c6828d97df783af45e5e11e124f9469742bc181dab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_c81b6e46ad823e6949e2048b57737ef89f1e7762cdf369732a5ea1df7efee93f = $this->env->getExtension("native_profiler");
        $__internal_c81b6e46ad823e6949e2048b57737ef89f1e7762cdf369732a5ea1df7efee93f->enter($__internal_c81b6e46ad823e6949e2048b57737ef89f1e7762cdf369732a5ea1df7efee93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c81b6e46ad823e6949e2048b57737ef89f1e7762cdf369732a5ea1df7efee93f->leave($__internal_c81b6e46ad823e6949e2048b57737ef89f1e7762cdf369732a5ea1df7efee93f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a3599c1ee9bc1993920875a0d13ca1e4aab0615790f0c50c8d7bda2ba5eea5b = $this->env->getExtension("native_profiler");
        $__internal_0a3599c1ee9bc1993920875a0d13ca1e4aab0615790f0c50c8d7bda2ba5eea5b->enter($__internal_0a3599c1ee9bc1993920875a0d13ca1e4aab0615790f0c50c8d7bda2ba5eea5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_0a3599c1ee9bc1993920875a0d13ca1e4aab0615790f0c50c8d7bda2ba5eea5b->leave($__internal_0a3599c1ee9bc1993920875a0d13ca1e4aab0615790f0c50c8d7bda2ba5eea5b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
