<?php

/* venta/edit.html.twig */
class __TwigTemplate_77c656db0eaf2c224a193df37f82ca6521b54eb0264ad26322fb53ed31edda72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "venta/edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_741e4bb321c3b5dba12e90327ee66c98b1c92e9db7574396faf34eff87677af9 = $this->env->getExtension("native_profiler");
        $__internal_741e4bb321c3b5dba12e90327ee66c98b1c92e9db7574396faf34eff87677af9->enter($__internal_741e4bb321c3b5dba12e90327ee66c98b1c92e9db7574396faf34eff87677af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "venta/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_741e4bb321c3b5dba12e90327ee66c98b1c92e9db7574396faf34eff87677af9->leave($__internal_741e4bb321c3b5dba12e90327ee66c98b1c92e9db7574396faf34eff87677af9_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_727d9ee9f6965092e97c2fcd42eb2d9a3c9e2c81ab6f8f7f1e034c8c4b6f9db4 = $this->env->getExtension("native_profiler");
        $__internal_727d9ee9f6965092e97c2fcd42eb2d9a3c9e2c81ab6f8f7f1e034c8c4b6f9db4->enter($__internal_727d9ee9f6965092e97c2fcd42eb2d9a3c9e2c81ab6f8f7f1e034c8c4b6f9db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Venta edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("venta_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_727d9ee9f6965092e97c2fcd42eb2d9a3c9e2c81ab6f8f7f1e034c8c4b6f9db4->leave($__internal_727d9ee9f6965092e97c2fcd42eb2d9a3c9e2c81ab6f8f7f1e034c8c4b6f9db4_prof);

    }

    public function getTemplateName()
    {
        return "venta/edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Venta edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('venta_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
