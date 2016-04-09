<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_72eebce8142c55afad26e33780a69193982b2e3b6415b35af407ee774ffc1b70 extends Twig_Template
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
        $__internal_7d0e6e966c53ba5c2943fd31d823db2a79a6cb44e2837823e7008c891fa426c9 = $this->env->getExtension("native_profiler");
        $__internal_7d0e6e966c53ba5c2943fd31d823db2a79a6cb44e2837823e7008c891fa426c9->enter($__internal_7d0e6e966c53ba5c2943fd31d823db2a79a6cb44e2837823e7008c891fa426c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7d0e6e966c53ba5c2943fd31d823db2a79a6cb44e2837823e7008c891fa426c9->leave($__internal_7d0e6e966c53ba5c2943fd31d823db2a79a6cb44e2837823e7008c891fa426c9_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
