<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_e6a700d3bc54e0d269824a7866aa09ca27048b51fa7bcbf128e75dc3ddb2bedc extends Twig_Template
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
        $__internal_7cb507f2a26f7558ba7af0ea8668b9c4feeaed98306bdcac800d5a52ded058eb = $this->env->getExtension("native_profiler");
        $__internal_7cb507f2a26f7558ba7af0ea8668b9c4feeaed98306bdcac800d5a52ded058eb->enter($__internal_7cb507f2a26f7558ba7af0ea8668b9c4feeaed98306bdcac800d5a52ded058eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "@Twig/Exception/exception.atom.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_7cb507f2a26f7558ba7af0ea8668b9c4feeaed98306bdcac800d5a52ded058eb->leave($__internal_7cb507f2a26f7558ba7af0ea8668b9c4feeaed98306bdcac800d5a52ded058eb_prof);

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
