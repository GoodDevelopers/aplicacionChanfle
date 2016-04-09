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
        $__internal_c775a8026650a76c54ab61ee21c939ce0a57dfbc3a053dbd84c927a5d6e40b6e = $this->env->getExtension("native_profiler");
        $__internal_c775a8026650a76c54ab61ee21c939ce0a57dfbc3a053dbd84c927a5d6e40b6e->enter($__internal_c775a8026650a76c54ab61ee21c939ce0a57dfbc3a053dbd84c927a5d6e40b6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c775a8026650a76c54ab61ee21c939ce0a57dfbc3a053dbd84c927a5d6e40b6e->leave($__internal_c775a8026650a76c54ab61ee21c939ce0a57dfbc3a053dbd84c927a5d6e40b6e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_348bae757e9ca5bb59def140f0c33e6d3eaf86738142bb1b90ce3f3eeb25e10e = $this->env->getExtension("native_profiler");
        $__internal_348bae757e9ca5bb59def140f0c33e6d3eaf86738142bb1b90ce3f3eeb25e10e->enter($__internal_348bae757e9ca5bb59def140f0c33e6d3eaf86738142bb1b90ce3f3eeb25e10e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_348bae757e9ca5bb59def140f0c33e6d3eaf86738142bb1b90ce3f3eeb25e10e->leave($__internal_348bae757e9ca5bb59def140f0c33e6d3eaf86738142bb1b90ce3f3eeb25e10e_prof);

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
