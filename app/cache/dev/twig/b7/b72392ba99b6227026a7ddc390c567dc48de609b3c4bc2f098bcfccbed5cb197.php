<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_fda4f7769ba4b05d1a9aa23ef5e15879070c44b780865da72b0a1d4df554d3d3 extends Twig_Template
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
        $__internal_bf7a46739f89aef73efb3a7330f3a5bbabbd5417853894d03aa976fcf78ec0d2 = $this->env->getExtension("native_profiler");
        $__internal_bf7a46739f89aef73efb3a7330f3a5bbabbd5417853894d03aa976fcf78ec0d2->enter($__internal_bf7a46739f89aef73efb3a7330f3a5bbabbd5417853894d03aa976fcf78ec0d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "@Twig/Exception/exception.js.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_bf7a46739f89aef73efb3a7330f3a5bbabbd5417853894d03aa976fcf78ec0d2->leave($__internal_bf7a46739f89aef73efb3a7330f3a5bbabbd5417853894d03aa976fcf78ec0d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
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
