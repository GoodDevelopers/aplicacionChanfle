<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_b1403c137c94b959d7b322310b6ef39062bcb32e81dd0291abc346ff9e21f101 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3613529fb898170301127a4eb5002b35dce03bec62dbf432bfb917c1b26e5e3c = $this->env->getExtension("native_profiler");
        $__internal_3613529fb898170301127a4eb5002b35dce03bec62dbf432bfb917c1b26e5e3c->enter($__internal_3613529fb898170301127a4eb5002b35dce03bec62dbf432bfb917c1b26e5e3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_3613529fb898170301127a4eb5002b35dce03bec62dbf432bfb917c1b26e5e3c->leave($__internal_3613529fb898170301127a4eb5002b35dce03bec62dbf432bfb917c1b26e5e3c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
