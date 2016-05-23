<?php

/* JornadasLaboralesBundle:caja:edit.html.twig */
class __TwigTemplate_f4bde91394f49aebab43294f9f77bef255c617631ba7c2edc1c1d0bdad1c375c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JornadasLaboralesBundle:caja:edit.html.twig", 1);
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
        $__internal_e420bba5fa1a0c7c712a9e8b93a1adc1197c9a57cd917b0d885bd4eeb3fc9bd5 = $this->env->getExtension("native_profiler");
        $__internal_e420bba5fa1a0c7c712a9e8b93a1adc1197c9a57cd917b0d885bd4eeb3fc9bd5->enter($__internal_e420bba5fa1a0c7c712a9e8b93a1adc1197c9a57cd917b0d885bd4eeb3fc9bd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JornadasLaboralesBundle:caja:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e420bba5fa1a0c7c712a9e8b93a1adc1197c9a57cd917b0d885bd4eeb3fc9bd5->leave($__internal_e420bba5fa1a0c7c712a9e8b93a1adc1197c9a57cd917b0d885bd4eeb3fc9bd5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5040795d6bc1ed679d7f8bfcefd33e9da36af0cf1e967fb7e7c5f954b913de29 = $this->env->getExtension("native_profiler");
        $__internal_5040795d6bc1ed679d7f8bfcefd33e9da36af0cf1e967fb7e7c5f954b913de29->enter($__internal_5040795d6bc1ed679d7f8bfcefd33e9da36af0cf1e967fb7e7c5f954b913de29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Caja edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("caja_index");
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
        
        $__internal_5040795d6bc1ed679d7f8bfcefd33e9da36af0cf1e967fb7e7c5f954b913de29->leave($__internal_5040795d6bc1ed679d7f8bfcefd33e9da36af0cf1e967fb7e7c5f954b913de29_prof);

    }

    public function getTemplateName()
    {
        return "JornadasLaboralesBundle:caja:edit.html.twig";
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
/*     <h1>Caja edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('caja_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
