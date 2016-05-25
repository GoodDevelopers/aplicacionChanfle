<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_565cb0e2f22f3df4c5ce3b08aa723862a7ca2eb2844170f9adcb856ab2182426 extends Twig_Template
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
        $__internal_a76bb0c90b089f7aeef4031a2b68a5a8d176d1f78bd52a0130fcce97a8224f4f = $this->env->getExtension("native_profiler");
        $__internal_a76bb0c90b089f7aeef4031a2b68a5a8d176d1f78bd52a0130fcce97a8224f4f->enter($__internal_a76bb0c90b089f7aeef4031a2b68a5a8d176d1f78bd52a0130fcce97a8224f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_a76bb0c90b089f7aeef4031a2b68a5a8d176d1f78bd52a0130fcce97a8224f4f->leave($__internal_a76bb0c90b089f7aeef4031a2b68a5a8d176d1f78bd52a0130fcce97a8224f4f_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.js.twig";
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
