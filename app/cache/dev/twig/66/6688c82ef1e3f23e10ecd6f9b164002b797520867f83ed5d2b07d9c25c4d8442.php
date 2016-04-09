<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_31fe3f27bcab1a5ba6648d225bb9083e2f6e37496ca30b033aafec2f9b9fbbef extends Twig_Template
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
        $__internal_2636f1eaa55b96f540466eae8a2e42928bee44b0c121349b6dc44da3cb86135c = $this->env->getExtension("native_profiler");
        $__internal_2636f1eaa55b96f540466eae8a2e42928bee44b0c121349b6dc44da3cb86135c->enter($__internal_2636f1eaa55b96f540466eae8a2e42928bee44b0c121349b6dc44da3cb86135c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_2636f1eaa55b96f540466eae8a2e42928bee44b0c121349b6dc44da3cb86135c->leave($__internal_2636f1eaa55b96f540466eae8a2e42928bee44b0c121349b6dc44da3cb86135c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {% include '@Twig/Exception/error.xml.twig' %}*/
/* */
