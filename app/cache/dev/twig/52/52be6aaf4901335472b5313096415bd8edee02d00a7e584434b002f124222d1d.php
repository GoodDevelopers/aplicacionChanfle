<?php

/* TwigBundle:Exception:exception.js.twig */
class __TwigTemplate_20365e79b5ec4daf4411976c276f3ec2cffa4bb160e3b031a464e90e918ad240 extends Twig_Template
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
        $__internal_0c227a7f01288075219994861bed592d0f94b7a42f85d0a6a2eaafb5a75fa838 = $this->env->getExtension("native_profiler");
        $__internal_0c227a7f01288075219994861bed592d0f94b7a42f85d0a6a2eaafb5a75fa838->enter($__internal_0c227a7f01288075219994861bed592d0f94b7a42f85d0a6a2eaafb5a75fa838_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_0c227a7f01288075219994861bed592d0f94b7a42f85d0a6a2eaafb5a75fa838->leave($__internal_0c227a7f01288075219994861bed592d0f94b7a42f85d0a6a2eaafb5a75fa838_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
