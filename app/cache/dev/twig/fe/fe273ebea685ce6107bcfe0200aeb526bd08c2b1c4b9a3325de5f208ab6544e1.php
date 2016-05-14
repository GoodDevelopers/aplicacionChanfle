<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_3d5a95d15e1b0b25c099c116dcf84dddf686ca519550d90fd100e0a485006b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_d0ff8dd9b7c36ddc32e84abef966d2e8fea095a4ae820775b42ea89f55941b1a = $this->env->getExtension("native_profiler");
        $__internal_d0ff8dd9b7c36ddc32e84abef966d2e8fea095a4ae820775b42ea89f55941b1a->enter($__internal_d0ff8dd9b7c36ddc32e84abef966d2e8fea095a4ae820775b42ea89f55941b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0ff8dd9b7c36ddc32e84abef966d2e8fea095a4ae820775b42ea89f55941b1a->leave($__internal_d0ff8dd9b7c36ddc32e84abef966d2e8fea095a4ae820775b42ea89f55941b1a_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9219a19f1e86f2c72e4ab7288421fa37a1d6e756d91dae0d51f883cc20bedd5c = $this->env->getExtension("native_profiler");
        $__internal_9219a19f1e86f2c72e4ab7288421fa37a1d6e756d91dae0d51f883cc20bedd5c->enter($__internal_9219a19f1e86f2c72e4ab7288421fa37a1d6e756d91dae0d51f883cc20bedd5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_9219a19f1e86f2c72e4ab7288421fa37a1d6e756d91dae0d51f883cc20bedd5c->leave($__internal_9219a19f1e86f2c72e4ab7288421fa37a1d6e756d91dae0d51f883cc20bedd5c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
