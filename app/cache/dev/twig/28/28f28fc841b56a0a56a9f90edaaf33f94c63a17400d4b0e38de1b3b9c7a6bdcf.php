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
        $__internal_ff9ca1745877db31a924813ce1bc3e3e048c1d4b3b0337021a2487672691df2b = $this->env->getExtension("native_profiler");
        $__internal_ff9ca1745877db31a924813ce1bc3e3e048c1d4b3b0337021a2487672691df2b->enter($__internal_ff9ca1745877db31a924813ce1bc3e3e048c1d4b3b0337021a2487672691df2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_ff9ca1745877db31a924813ce1bc3e3e048c1d4b3b0337021a2487672691df2b->leave($__internal_ff9ca1745877db31a924813ce1bc3e3e048c1d4b3b0337021a2487672691df2b_prof);

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
