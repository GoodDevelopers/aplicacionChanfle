<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_2ce0d7c53ea3aeb968dff1b5c69c5c6e724a36b1ca2f87a26836e17a64a05437 extends Twig_Template
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
        $__internal_a22a181b22cd9046d0471cae15771c809fb2acb0b54213e28015d5e3a25aa57f = $this->env->getExtension("native_profiler");
        $__internal_a22a181b22cd9046d0471cae15771c809fb2acb0b54213e28015d5e3a25aa57f->enter($__internal_a22a181b22cd9046d0471cae15771c809fb2acb0b54213e28015d5e3a25aa57f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        $this->loadTemplate("@Twig/Exception/error.xml.twig", "@Twig/Exception/error.atom.twig", 1)->display($context);
        
        $__internal_a22a181b22cd9046d0471cae15771c809fb2acb0b54213e28015d5e3a25aa57f->leave($__internal_a22a181b22cd9046d0471cae15771c809fb2acb0b54213e28015d5e3a25aa57f_prof);

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
