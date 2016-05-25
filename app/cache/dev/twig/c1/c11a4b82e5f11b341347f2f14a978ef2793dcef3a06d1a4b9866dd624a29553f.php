<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_5e086007058ee7d05e5ef41af67fe0f4dc8265e7d7f3a283ff16bdaa87291dd4 extends Twig_Template
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
        $__internal_8c417dbbd116c452103380808063d115d6ab5e9662f428a5151ce06b28e4654b = $this->env->getExtension("native_profiler");
        $__internal_8c417dbbd116c452103380808063d115d6ab5e9662f428a5151ce06b28e4654b->enter($__internal_8c417dbbd116c452103380808063d115d6ab5e9662f428a5151ce06b28e4654b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_8c417dbbd116c452103380808063d115d6ab5e9662f428a5151ce06b28e4654b->leave($__internal_8c417dbbd116c452103380808063d115d6ab5e9662f428a5151ce06b28e4654b_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
