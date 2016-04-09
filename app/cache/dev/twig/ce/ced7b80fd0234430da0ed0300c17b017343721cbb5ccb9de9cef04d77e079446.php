<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_95cb7126df201925ee42ba047134e52079183896735a1e99b0b9281a4847619b extends Twig_Template
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
        $__internal_f2538a1ed211c251fafb356d1ad4a325463e149c19d6fafb1089d877d01b9383 = $this->env->getExtension("native_profiler");
        $__internal_f2538a1ed211c251fafb356d1ad4a325463e149c19d6fafb1089d877d01b9383->enter($__internal_f2538a1ed211c251fafb356d1ad4a325463e149c19d6fafb1089d877d01b9383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_f2538a1ed211c251fafb356d1ad4a325463e149c19d6fafb1089d877d01b9383->leave($__internal_f2538a1ed211c251fafb356d1ad4a325463e149c19d6fafb1089d877d01b9383_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
