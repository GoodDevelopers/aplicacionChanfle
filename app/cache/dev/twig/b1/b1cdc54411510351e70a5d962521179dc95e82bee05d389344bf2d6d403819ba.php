<?php

/* TwigBundle:Exception:error.css.twig */
class __TwigTemplate_53c7a515023027cf2e8ab9794381537fe673d91221a0181ff139664aec602240 extends Twig_Template
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
        $__internal_b2a0b1c01e7abf74d890c615e0d706d884a8998525528c6f2ed963bf790fd753 = $this->env->getExtension("native_profiler");
        $__internal_b2a0b1c01e7abf74d890c615e0d706d884a8998525528c6f2ed963bf790fd753->enter($__internal_b2a0b1c01e7abf74d890c615e0d706d884a8998525528c6f2ed963bf790fd753_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.css.twig"));

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
        
        $__internal_b2a0b1c01e7abf74d890c615e0d706d884a8998525528c6f2ed963bf790fd753->leave($__internal_b2a0b1c01e7abf74d890c615e0d706d884a8998525528c6f2ed963bf790fd753_prof);

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
