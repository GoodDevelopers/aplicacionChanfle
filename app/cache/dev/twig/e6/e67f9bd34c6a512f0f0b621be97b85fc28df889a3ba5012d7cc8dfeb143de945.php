<?php

/* TwigBundle:Exception:error.rdf.twig */
class __TwigTemplate_5d20af0456671726a25538ef2097cae816cf7c929acf39217fc1669b4b2d0a43 extends Twig_Template
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
        $__internal_072395672acd57a7e3db5d0fa6fc0b7d3d22ef71d0b791c1ec5f88c73830caac = $this->env->getExtension("native_profiler");
        $__internal_072395672acd57a7e3db5d0fa6fc0b7d3d22ef71d0b791c1ec5f88c73830caac->enter($__internal_072395672acd57a7e3db5d0fa6fc0b7d3d22ef71d0b791c1ec5f88c73830caac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_072395672acd57a7e3db5d0fa6fc0b7d3d22ef71d0b791c1ec5f88c73830caac->leave($__internal_072395672acd57a7e3db5d0fa6fc0b7d3d22ef71d0b791c1ec5f88c73830caac_prof);

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
