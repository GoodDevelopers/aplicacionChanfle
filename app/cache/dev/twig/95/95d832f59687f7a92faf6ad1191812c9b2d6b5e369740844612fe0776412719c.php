<?php

/* UsuariosBundle:cliente:hola.html.twig */
class __TwigTemplate_7f7ee7a959da84f05c2b195834c8fde5e29de5a6930383d57779ee969e3ae1cf extends Twig_Template
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
        $__internal_602181b7af50958e11e845fbfcf24c5b7d88147877d0173df890ffd269a84768 = $this->env->getExtension("native_profiler");
        $__internal_602181b7af50958e11e845fbfcf24c5b7d88147877d0173df890ffd269a84768->enter($__internal_602181b7af50958e11e845fbfcf24c5b7d88147877d0173df890ffd269a84768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:cliente:hola.html.twig"));

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
        
        $__internal_602181b7af50958e11e845fbfcf24c5b7d88147877d0173df890ffd269a84768->leave($__internal_602181b7af50958e11e845fbfcf24c5b7d88147877d0173df890ffd269a84768_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:cliente:hola.html.twig";
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
