<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_3bac7c5d9335b98b5eaa42d24bfa03c5270647bbc689049cae8757b5e8e14e36 extends Twig_Template
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
        $__internal_fdf4bf6b74ab63cc806799fc069f2f859a214e560c0fdc015b7815215025f637 = $this->env->getExtension("native_profiler");
        $__internal_fdf4bf6b74ab63cc806799fc069f2f859a214e560c0fdc015b7815215025f637->enter($__internal_fdf4bf6b74ab63cc806799fc069f2f859a214e560c0fdc015b7815215025f637_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_fdf4bf6b74ab63cc806799fc069f2f859a214e560c0fdc015b7815215025f637->leave($__internal_fdf4bf6b74ab63cc806799fc069f2f859a214e560c0fdc015b7815215025f637_prof);

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