<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_e0c1acc223d0e65b437057aa1e4eeff0d8586f41afd80442367dde32fd42210e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_d1dac64ce9db10a620c81370063df757253614ffe46ca8805e4d425ed2ddb0ab = $this->env->getExtension("native_profiler");
        $__internal_d1dac64ce9db10a620c81370063df757253614ffe46ca8805e4d425ed2ddb0ab->enter($__internal_d1dac64ce9db10a620c81370063df757253614ffe46ca8805e4d425ed2ddb0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d1dac64ce9db10a620c81370063df757253614ffe46ca8805e4d425ed2ddb0ab->leave($__internal_d1dac64ce9db10a620c81370063df757253614ffe46ca8805e4d425ed2ddb0ab_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b8b0040df0cb5a1c2b51a563c63fa339bc9d7450e677acbfc649f9b98870a87b = $this->env->getExtension("native_profiler");
        $__internal_b8b0040df0cb5a1c2b51a563c63fa339bc9d7450e677acbfc649f9b98870a87b->enter($__internal_b8b0040df0cb5a1c2b51a563c63fa339bc9d7450e677acbfc649f9b98870a87b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_b8b0040df0cb5a1c2b51a563c63fa339bc9d7450e677acbfc649f9b98870a87b->leave($__internal_b8b0040df0cb5a1c2b51a563c63fa339bc9d7450e677acbfc649f9b98870a87b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
