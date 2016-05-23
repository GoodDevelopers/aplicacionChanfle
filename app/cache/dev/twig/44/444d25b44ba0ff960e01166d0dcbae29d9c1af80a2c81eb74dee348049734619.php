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
        $__internal_248a81f6a1a43b33b2d9fc6f4003b532f0cce6b3f11530218a2e1a9da2eff332 = $this->env->getExtension("native_profiler");
        $__internal_248a81f6a1a43b33b2d9fc6f4003b532f0cce6b3f11530218a2e1a9da2eff332->enter($__internal_248a81f6a1a43b33b2d9fc6f4003b532f0cce6b3f11530218a2e1a9da2eff332_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_248a81f6a1a43b33b2d9fc6f4003b532f0cce6b3f11530218a2e1a9da2eff332->leave($__internal_248a81f6a1a43b33b2d9fc6f4003b532f0cce6b3f11530218a2e1a9da2eff332_prof);

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
