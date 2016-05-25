<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_405387e70efdeb77f928d7432161dd6ff153bf6f04744deec9664f00048418bb extends Twig_Template
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
        $__internal_762010a900453f685f20a31413fbf0f8b91ee0c4ba2f26b3f5de567fef6ce021 = $this->env->getExtension("native_profiler");
        $__internal_762010a900453f685f20a31413fbf0f8b91ee0c4ba2f26b3f5de567fef6ce021->enter($__internal_762010a900453f685f20a31413fbf0f8b91ee0c4ba2f26b3f5de567fef6ce021_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_762010a900453f685f20a31413fbf0f8b91ee0c4ba2f26b3f5de567fef6ce021->leave($__internal_762010a900453f685f20a31413fbf0f8b91ee0c4ba2f26b3f5de567fef6ce021_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
