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
        $__internal_cafc18a4d1e960cca3d542fa67b36f2a9e48650d112b9044296922b6709b6a92 = $this->env->getExtension("native_profiler");
        $__internal_cafc18a4d1e960cca3d542fa67b36f2a9e48650d112b9044296922b6709b6a92->enter($__internal_cafc18a4d1e960cca3d542fa67b36f2a9e48650d112b9044296922b6709b6a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_cafc18a4d1e960cca3d542fa67b36f2a9e48650d112b9044296922b6709b6a92->leave($__internal_cafc18a4d1e960cca3d542fa67b36f2a9e48650d112b9044296922b6709b6a92_prof);

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
