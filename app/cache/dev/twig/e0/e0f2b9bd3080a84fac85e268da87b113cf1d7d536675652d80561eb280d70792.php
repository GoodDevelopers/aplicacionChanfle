<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_70f1a617a9e42149c28a4f0b00f3b550d3e69fbf2c596b2e0c8c92965361a216 extends Twig_Template
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
        $__internal_d28a8aca2078703c1cf6a8877e1bacf9b288668d0f987c6d890769da80f3dbaa = $this->env->getExtension("native_profiler");
        $__internal_d28a8aca2078703c1cf6a8877e1bacf9b288668d0f987c6d890769da80f3dbaa->enter($__internal_d28a8aca2078703c1cf6a8877e1bacf9b288668d0f987c6d890769da80f3dbaa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_d28a8aca2078703c1cf6a8877e1bacf9b288668d0f987c6d890769da80f3dbaa->leave($__internal_d28a8aca2078703c1cf6a8877e1bacf9b288668d0f987c6d890769da80f3dbaa_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.xml.twig";
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
