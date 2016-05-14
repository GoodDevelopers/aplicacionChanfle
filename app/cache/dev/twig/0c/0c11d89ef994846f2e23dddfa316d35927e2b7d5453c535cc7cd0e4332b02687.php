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
        $__internal_14babfaa2fd140ac25dcdfa0ebd545ac5a4353b7d35c35e281948cd0eaa70122 = $this->env->getExtension("native_profiler");
        $__internal_14babfaa2fd140ac25dcdfa0ebd545ac5a4353b7d35c35e281948cd0eaa70122->enter($__internal_14babfaa2fd140ac25dcdfa0ebd545ac5a4353b7d35c35e281948cd0eaa70122_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.xml.twig"));

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
        
        $__internal_14babfaa2fd140ac25dcdfa0ebd545ac5a4353b7d35c35e281948cd0eaa70122->leave($__internal_14babfaa2fd140ac25dcdfa0ebd545ac5a4353b7d35c35e281948cd0eaa70122_prof);

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
