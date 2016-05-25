<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_1cd162d985fc4e08e2c2117e87645028409a0a268dfbd61e11a6c17f7c73a8e7 extends Twig_Template
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
        $__internal_f2a4b1bf2b4f890bcee823e75088f57c7e2ca889b96baedacdc5dc2b83d75307 = $this->env->getExtension("native_profiler");
        $__internal_f2a4b1bf2b4f890bcee823e75088f57c7e2ca889b96baedacdc5dc2b83d75307->enter($__internal_f2a4b1bf2b4f890bcee823e75088f57c7e2ca889b96baedacdc5dc2b83d75307_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_f2a4b1bf2b4f890bcee823e75088f57c7e2ca889b96baedacdc5dc2b83d75307->leave($__internal_f2a4b1bf2b4f890bcee823e75088f57c7e2ca889b96baedacdc5dc2b83d75307_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
