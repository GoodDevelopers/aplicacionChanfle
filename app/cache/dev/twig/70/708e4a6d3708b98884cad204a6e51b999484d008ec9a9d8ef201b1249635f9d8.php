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
        $__internal_859ee759807eae1de944a444ae2ecbcc520c36cc45bca6693091b63773eb31dd = $this->env->getExtension("native_profiler");
        $__internal_859ee759807eae1de944a444ae2ecbcc520c36cc45bca6693091b63773eb31dd->enter($__internal_859ee759807eae1de944a444ae2ecbcc520c36cc45bca6693091b63773eb31dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_859ee759807eae1de944a444ae2ecbcc520c36cc45bca6693091b63773eb31dd->leave($__internal_859ee759807eae1de944a444ae2ecbcc520c36cc45bca6693091b63773eb31dd_prof);

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
