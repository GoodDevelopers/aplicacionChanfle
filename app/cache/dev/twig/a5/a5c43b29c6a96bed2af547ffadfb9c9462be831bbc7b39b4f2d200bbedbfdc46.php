<?php

/* @Twig/Exception/error.xml.twig */
class __TwigTemplate_70873aa82bd5287a0a90bbdf61984a896464b6ada2db24ec550760dfab7e5776 extends Twig_Template
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
        $__internal_89c7589df53ae87260bd8eca11c3d8e25a616079521f4bc853c48510231ab826 = $this->env->getExtension("native_profiler");
        $__internal_89c7589df53ae87260bd8eca11c3d8e25a616079521f4bc853c48510231ab826->enter($__internal_89c7589df53ae87260bd8eca11c3d8e25a616079521f4bc853c48510231ab826_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.xml.twig"));

        // line 1
        echo "<?xml version=\"1.0\" encoding=\"";
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" ?>

<error code=\"";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo "\" message=\"";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo "\" />
";
        
        $__internal_89c7589df53ae87260bd8eca11c3d8e25a616079521f4bc853c48510231ab826->leave($__internal_89c7589df53ae87260bd8eca11c3d8e25a616079521f4bc853c48510231ab826_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.xml.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  22 => 1,);
    }
}
/* <?xml version="1.0" encoding="{{ _charset }}" ?>*/
/* */
/* <error code="{{ status_code }}" message="{{ status_text }}" />*/
/* */
