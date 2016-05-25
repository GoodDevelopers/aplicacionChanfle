<?php

/* @Usuarios/cliente/hola.html.twig */
class __TwigTemplate_cd75217aba976ed796f4ee4ca1937e9c42f28b784b068c249521a67fa2ca777e extends Twig_Template
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
        $__internal_f445678f0e07fc929a5ec8c7b28b26b552d97496a03be71c43f581635e0cd9cf = $this->env->getExtension("native_profiler");
        $__internal_f445678f0e07fc929a5ec8c7b28b26b552d97496a03be71c43f581635e0cd9cf->enter($__internal_f445678f0e07fc929a5ec8c7b28b26b552d97496a03be71c43f581635e0cd9cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/cliente/hola.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>";
        // line 9
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "</title>
        <meta charset=\"UTF-8\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    </head>
    <body>
        <div>TODO write content</div>
    </body>
</html>";
        
        $__internal_f445678f0e07fc929a5ec8c7b28b26b552d97496a03be71c43f581635e0cd9cf->leave($__internal_f445678f0e07fc929a5ec8c7b28b26b552d97496a03be71c43f581635e0cd9cf_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/cliente/hola.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 9,  22 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <!--*/
/* To change this license header, choose License Headers in Project Properties.*/
/* To change this template file, choose Tools | Templates*/
/* and open the template in the editor.*/
/* -->*/
/* <html>*/
/*     <head>*/
/*         <title>{{ titulo }}</title>*/
/*         <meta charset="UTF-8">*/
/*         <meta name="viewport" content="width=device-width, initial-scale=1.0">*/
/*     </head>*/
/*     <body>*/
/*         <div>TODO write content</div>*/
/*     </body>*/
/* </html>*/
