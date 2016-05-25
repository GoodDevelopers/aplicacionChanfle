<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_1e4bbd0b9086cff2db6bbbc2e841066b0a0a04197016fae6663eda86096f70cf extends Twig_Template
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
        $__internal_0cd0883705b274fff7bffe2fc945ee8f25b8384b269675cd26910c0a66cc8ba4 = $this->env->getExtension("native_profiler");
        $__internal_0cd0883705b274fff7bffe2fc945ee8f25b8384b269675cd26910c0a66cc8ba4->enter($__internal_0cd0883705b274fff7bffe2fc945ee8f25b8384b269675cd26910c0a66cc8ba4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0cd0883705b274fff7bffe2fc945ee8f25b8384b269675cd26910c0a66cc8ba4->leave($__internal_0cd0883705b274fff7bffe2fc945ee8f25b8384b269675cd26910c0a66cc8ba4_prof);

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
