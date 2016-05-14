<?php

/* TwigBundle:Exception:error.atom.twig */
class __TwigTemplate_66b7139e00e28d2ce89a8509dcb8e1da5ebe1d7c1388cca3c0829ea29013b129 extends Twig_Template
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
        $__internal_4ff8b1dad2b2268aff5654ac8167cbcefec65df90341c6027da100a05ca6f9b9 = $this->env->getExtension("native_profiler");
        $__internal_4ff8b1dad2b2268aff5654ac8167cbcefec65df90341c6027da100a05ca6f9b9->enter($__internal_4ff8b1dad2b2268aff5654ac8167cbcefec65df90341c6027da100a05ca6f9b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "TwigBundle:Exception:error.atom.twig", 1)->display($context);
        
        $__internal_4ff8b1dad2b2268aff5654ac8167cbcefec65df90341c6027da100a05ca6f9b9->leave($__internal_4ff8b1dad2b2268aff5654ac8167cbcefec65df90341c6027da100a05ca6f9b9_prof);

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
