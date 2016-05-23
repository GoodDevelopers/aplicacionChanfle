<?php

/* TwigBundle:Exception:exception.atom.twig */
class __TwigTemplate_daba51d77c5f56f915435cc23c5e440330820c5805b1875e68ee596c8c8d4a68 extends Twig_Template
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
        $__internal_a82708b9507271b8b53e26665d22dceab44350b84b3b99e3eab2fa69ad0dccf9 = $this->env->getExtension("native_profiler");
        $__internal_a82708b9507271b8b53e26665d22dceab44350b84b3b99e3eab2fa69ad0dccf9->enter($__internal_a82708b9507271b8b53e26665d22dceab44350b84b3b99e3eab2fa69ad0dccf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_a82708b9507271b8b53e26665d22dceab44350b84b3b99e3eab2fa69ad0dccf9->leave($__internal_a82708b9507271b8b53e26665d22dceab44350b84b3b99e3eab2fa69ad0dccf9_prof);

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
