<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_cb660da31100689c59a57d7298149edccd56cfdcb38fe1dba6b67e6036fa39ac extends Twig_Template
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
        $__internal_6495791980d7ea6cc7b8705aa6b13e173851a8d7711234d6185599155cfaedbe = $this->env->getExtension("native_profiler");
        $__internal_6495791980d7ea6cc7b8705aa6b13e173851a8d7711234d6185599155cfaedbe->enter($__internal_6495791980d7ea6cc7b8705aa6b13e173851a8d7711234d6185599155cfaedbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_6495791980d7ea6cc7b8705aa6b13e173851a8d7711234d6185599155cfaedbe->leave($__internal_6495791980d7ea6cc7b8705aa6b13e173851a8d7711234d6185599155cfaedbe_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
