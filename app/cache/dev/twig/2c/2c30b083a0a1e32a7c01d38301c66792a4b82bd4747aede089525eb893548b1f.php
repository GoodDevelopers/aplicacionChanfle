<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_9a9eed77a2cab9439a1cc93de3bd7d826e3c9193fcbaa88ea4eee4f88d6a5c73 extends Twig_Template
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
        $__internal_e142a90d2255acfadfc34b8c0d93c88493c0b713c7d6566d472cf5296e0a7d81 = $this->env->getExtension("native_profiler");
        $__internal_e142a90d2255acfadfc34b8c0d93c88493c0b713c7d6566d472cf5296e0a7d81->enter($__internal_e142a90d2255acfadfc34b8c0d93c88493c0b713c7d6566d472cf5296e0a7d81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e142a90d2255acfadfc34b8c0d93c88493c0b713c7d6566d472cf5296e0a7d81->leave($__internal_e142a90d2255acfadfc34b8c0d93c88493c0b713c7d6566d472cf5296e0a7d81_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
