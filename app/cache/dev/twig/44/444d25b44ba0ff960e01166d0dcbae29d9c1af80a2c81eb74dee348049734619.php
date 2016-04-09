<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_4a20ce194b7e1024c5c1913bf2cae1ac09311b6084ac875751f52f7811e28428 extends Twig_Template
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
        $__internal_1eee9534b5e357e01b44f88b9dfebcbd7a291f17bc720006129891c2aa4df613 = $this->env->getExtension("native_profiler");
        $__internal_1eee9534b5e357e01b44f88b9dfebcbd7a291f17bc720006129891c2aa4df613->enter($__internal_1eee9534b5e357e01b44f88b9dfebcbd7a291f17bc720006129891c2aa4df613_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_1eee9534b5e357e01b44f88b9dfebcbd7a291f17bc720006129891c2aa4df613->leave($__internal_1eee9534b5e357e01b44f88b9dfebcbd7a291f17bc720006129891c2aa4df613_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
