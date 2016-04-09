<?php

/* TwigBundle:Exception:error.xml.twig */
class __TwigTemplate_d9f772beada11ca0ca401225ba264900bd0cd3efad6da78d7efc0349beef15c9 extends Twig_Template
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
        $__internal_d9d433166a7839cad15e4e3f06b1f4142f9a5fbfc7c7ae3869c78181865d8bb9 = $this->env->getExtension("native_profiler");
        $__internal_d9d433166a7839cad15e4e3f06b1f4142f9a5fbfc7c7ae3869c78181865d8bb9->enter($__internal_d9d433166a7839cad15e4e3f06b1f4142f9a5fbfc7c7ae3869c78181865d8bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_d9d433166a7839cad15e4e3f06b1f4142f9a5fbfc7c7ae3869c78181865d8bb9->leave($__internal_d9d433166a7839cad15e4e3f06b1f4142f9a5fbfc7c7ae3869c78181865d8bb9_prof);

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
