<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_9fa8c33340e56c4c0cecf7fbf9c76574551b0d531615f7b2282329bf13611ba7 extends Twig_Template
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
        $__internal_df8ee98a153aa9a68f2c9e6f9b5ab92858bc7d9e4733943c7c8e2efe1b2142bb = $this->env->getExtension("native_profiler");
        $__internal_df8ee98a153aa9a68f2c9e6f9b5ab92858bc7d9e4733943c7c8e2efe1b2142bb->enter($__internal_df8ee98a153aa9a68f2c9e6f9b5ab92858bc7d9e4733943c7c8e2efe1b2142bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_df8ee98a153aa9a68f2c9e6f9b5ab92858bc7d9e4733943c7c8e2efe1b2142bb->leave($__internal_df8ee98a153aa9a68f2c9e6f9b5ab92858bc7d9e4733943c7c8e2efe1b2142bb_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_41fc299e871b957a1c6cb1aaad5c4607b535a57c63cd8fc665aee5b6a96d60d6 = $this->env->getExtension("native_profiler");
        $__internal_41fc299e871b957a1c6cb1aaad5c4607b535a57c63cd8fc665aee5b6a96d60d6->enter($__internal_41fc299e871b957a1c6cb1aaad5c4607b535a57c63cd8fc665aee5b6a96d60d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_41fc299e871b957a1c6cb1aaad5c4607b535a57c63cd8fc665aee5b6a96d60d6->leave($__internal_41fc299e871b957a1c6cb1aaad5c4607b535a57c63cd8fc665aee5b6a96d60d6_prof);

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
