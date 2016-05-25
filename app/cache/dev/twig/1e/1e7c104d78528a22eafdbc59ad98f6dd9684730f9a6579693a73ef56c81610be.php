<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_27b5dc22a8b38d33244aacc553b3876ce787ae4b43578068730516dad7926e7a extends Twig_Template
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
        $__internal_d2afea56469481f1a3e638ed5bf6585fa3603481a172fe93c2f624f11d08ccd0 = $this->env->getExtension("native_profiler");
        $__internal_d2afea56469481f1a3e638ed5bf6585fa3603481a172fe93c2f624f11d08ccd0->enter($__internal_d2afea56469481f1a3e638ed5bf6585fa3603481a172fe93c2f624f11d08ccd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_d2afea56469481f1a3e638ed5bf6585fa3603481a172fe93c2f624f11d08ccd0->leave($__internal_d2afea56469481f1a3e638ed5bf6585fa3603481a172fe93c2f624f11d08ccd0_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
