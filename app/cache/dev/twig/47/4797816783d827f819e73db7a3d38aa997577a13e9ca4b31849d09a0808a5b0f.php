<?php

/* InventarioBundle:materiaprima:edit.html.twig */
class __TwigTemplate_5a1e78e26981fefcf547c0793572d7d19717723e42bf7d1a0aa7d70871f33905 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:materiaprima:edit.html.twig", 1);
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
        $__internal_e4b2ec74c7227fe2173d22dab688a6c90647cde1e9ae73effdbe315f8f375a6f = $this->env->getExtension("native_profiler");
        $__internal_e4b2ec74c7227fe2173d22dab688a6c90647cde1e9ae73effdbe315f8f375a6f->enter($__internal_e4b2ec74c7227fe2173d22dab688a6c90647cde1e9ae73effdbe315f8f375a6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:materiaprima:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e4b2ec74c7227fe2173d22dab688a6c90647cde1e9ae73effdbe315f8f375a6f->leave($__internal_e4b2ec74c7227fe2173d22dab688a6c90647cde1e9ae73effdbe315f8f375a6f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_007c1d1f6e93c3039171e4a1ac7f754a4f18f54148501ef198dfa00a86013a36 = $this->env->getExtension("native_profiler");
        $__internal_007c1d1f6e93c3039171e4a1ac7f754a4f18f54148501ef198dfa00a86013a36->enter($__internal_007c1d1f6e93c3039171e4a1ac7f754a4f18f54148501ef198dfa00a86013a36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MateriaPrima edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("materiaprima_index");
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
        
        $__internal_007c1d1f6e93c3039171e4a1ac7f754a4f18f54148501ef198dfa00a86013a36->leave($__internal_007c1d1f6e93c3039171e4a1ac7f754a4f18f54148501ef198dfa00a86013a36_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:materiaprima:edit.html.twig";
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
/*     <h1>MateriaPrima edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('materiaprima_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
