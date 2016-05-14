<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_1522909292bbd12b8551ba21b9e19e88358de54cb5c8005780c55c309cb1b7a5 extends Twig_Template
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
        $__internal_d6d8de261c273cb8ef42106ef1401dc9fe2617c76f080f3677b72bec09fdb2fe = $this->env->getExtension("native_profiler");
        $__internal_d6d8de261c273cb8ef42106ef1401dc9fe2617c76f080f3677b72bec09fdb2fe->enter($__internal_d6d8de261c273cb8ef42106ef1401dc9fe2617c76f080f3677b72bec09fdb2fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_d6d8de261c273cb8ef42106ef1401dc9fe2617c76f080f3677b72bec09fdb2fe->leave($__internal_d6d8de261c273cb8ef42106ef1401dc9fe2617c76f080f3677b72bec09fdb2fe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.css.twig";
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
