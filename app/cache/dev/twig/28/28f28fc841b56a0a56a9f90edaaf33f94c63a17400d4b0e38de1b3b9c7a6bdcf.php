<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_e9d68abc094923d5c2fec35f35cf6cebd701230c803946d0e31c022cc87c6788 extends Twig_Template
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
        $__internal_5795e4b1f5bc5b9d27ec757e36901eb30c4004a8e73fdfc4d4fa28600f579691 = $this->env->getExtension("native_profiler");
        $__internal_5795e4b1f5bc5b9d27ec757e36901eb30c4004a8e73fdfc4d4fa28600f579691->enter($__internal_5795e4b1f5bc5b9d27ec757e36901eb30c4004a8e73fdfc4d4fa28600f579691_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_5795e4b1f5bc5b9d27ec757e36901eb30c4004a8e73fdfc4d4fa28600f579691->leave($__internal_5795e4b1f5bc5b9d27ec757e36901eb30c4004a8e73fdfc4d4fa28600f579691_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.rdf.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
