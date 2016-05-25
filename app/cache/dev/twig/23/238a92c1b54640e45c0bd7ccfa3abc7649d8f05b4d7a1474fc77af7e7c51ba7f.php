<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9bc3bba42cccd16645974a4122dec2e45df6eba01a5a2a3446035fa900231f5e extends Twig_Template
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
        $__internal_c91c54b636fa4bc3c9d419e38c83884b89412b5fdfb938ffcfd59611c48a2971 = $this->env->getExtension("native_profiler");
        $__internal_c91c54b636fa4bc3c9d419e38c83884b89412b5fdfb938ffcfd59611c48a2971->enter($__internal_c91c54b636fa4bc3c9d419e38c83884b89412b5fdfb938ffcfd59611c48a2971_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/exception.xml.twig", "TwigBundle:Exception:exception.rdf.twig", 1)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        
        $__internal_c91c54b636fa4bc3c9d419e38c83884b89412b5fdfb938ffcfd59611c48a2971->leave($__internal_c91c54b636fa4bc3c9d419e38c83884b89412b5fdfb938ffcfd59611c48a2971_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
/* {% include '@Twig/Exception/exception.xml.twig' with { 'exception': exception } %}*/
/* */
