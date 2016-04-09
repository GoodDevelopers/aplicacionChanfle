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
        $__internal_e7fa42dc0f398601fe023746ba7bd6c0ba1d4ada86e6a482374b23a6cbddb75e = $this->env->getExtension("native_profiler");
        $__internal_e7fa42dc0f398601fe023746ba7bd6c0ba1d4ada86e6a482374b23a6cbddb75e->enter($__internal_e7fa42dc0f398601fe023746ba7bd6c0ba1d4ada86e6a482374b23a6cbddb75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_e7fa42dc0f398601fe023746ba7bd6c0ba1d4ada86e6a482374b23a6cbddb75e->leave($__internal_e7fa42dc0f398601fe023746ba7bd6c0ba1d4ada86e6a482374b23a6cbddb75e_prof);

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
