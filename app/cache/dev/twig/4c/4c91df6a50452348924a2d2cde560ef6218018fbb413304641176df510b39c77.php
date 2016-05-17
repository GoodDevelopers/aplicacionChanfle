<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_dda0e11f1b374095c5d1f3674ec5e46acfe3f6a037c888e357bfb621a634d656 extends Twig_Template
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
        $__internal_0d91a26fdfb0ef2af06dffc99d9cffe72a3661483736b55ea2dda1b997dfce54 = $this->env->getExtension("native_profiler");
        $__internal_0d91a26fdfb0ef2af06dffc99d9cffe72a3661483736b55ea2dda1b997dfce54->enter($__internal_0d91a26fdfb0ef2af06dffc99d9cffe72a3661483736b55ea2dda1b997dfce54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_0d91a26fdfb0ef2af06dffc99d9cffe72a3661483736b55ea2dda1b997dfce54->leave($__internal_0d91a26fdfb0ef2af06dffc99d9cffe72a3661483736b55ea2dda1b997dfce54_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
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
