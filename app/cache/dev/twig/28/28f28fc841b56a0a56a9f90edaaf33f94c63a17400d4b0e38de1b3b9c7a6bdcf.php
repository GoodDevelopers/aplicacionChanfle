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
        $__internal_0fb285d26b99faa3a5de288ab9f2b96dd5f222c4ca879079ce130e4dcdb4b24c = $this->env->getExtension("native_profiler");
        $__internal_0fb285d26b99faa3a5de288ab9f2b96dd5f222c4ca879079ce130e4dcdb4b24c->enter($__internal_0fb285d26b99faa3a5de288ab9f2b96dd5f222c4ca879079ce130e4dcdb4b24c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.rdf.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.rdf.twig", 1)->display($context);
        
        $__internal_0fb285d26b99faa3a5de288ab9f2b96dd5f222c4ca879079ce130e4dcdb4b24c->leave($__internal_0fb285d26b99faa3a5de288ab9f2b96dd5f222c4ca879079ce130e4dcdb4b24c_prof);

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
