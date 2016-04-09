<?php

/* TwigBundle:Exception:error.js.twig */
class __TwigTemplate_2861b4c1cde65ec1f9e545e34cf52834b06ef9d2b66c882b87f3b68213df6c3e extends Twig_Template
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
        $__internal_9f4cc69cc7002ad0e2e069ef0a67dbb2dbf765c2035e6b6f696585724cc39afb = $this->env->getExtension("native_profiler");
        $__internal_9f4cc69cc7002ad0e2e069ef0a67dbb2dbf765c2035e6b6f696585724cc39afb->enter($__internal_9f4cc69cc7002ad0e2e069ef0a67dbb2dbf765c2035e6b6f696585724cc39afb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.js.twig"));

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
        
        $__internal_9f4cc69cc7002ad0e2e069ef0a67dbb2dbf765c2035e6b6f696585724cc39afb->leave($__internal_9f4cc69cc7002ad0e2e069ef0a67dbb2dbf765c2035e6b6f696585724cc39afb_prof);

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
