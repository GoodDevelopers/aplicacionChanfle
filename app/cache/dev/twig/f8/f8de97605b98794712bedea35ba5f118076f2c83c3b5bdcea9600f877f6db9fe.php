<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_809bee851bce0977a58fc04e39a2b9341d88c2cf3554893195c255f65af9a77d extends Twig_Template
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
        $__internal_3235eaa83266bc47d61a32ebfc7b0e5326ee13bf7abbdc1e0499895118830baf = $this->env->getExtension("native_profiler");
        $__internal_3235eaa83266bc47d61a32ebfc7b0e5326ee13bf7abbdc1e0499895118830baf->enter($__internal_3235eaa83266bc47d61a32ebfc7b0e5326ee13bf7abbdc1e0499895118830baf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_3235eaa83266bc47d61a32ebfc7b0e5326ee13bf7abbdc1e0499895118830baf->leave($__internal_3235eaa83266bc47d61a32ebfc7b0e5326ee13bf7abbdc1e0499895118830baf_prof);

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