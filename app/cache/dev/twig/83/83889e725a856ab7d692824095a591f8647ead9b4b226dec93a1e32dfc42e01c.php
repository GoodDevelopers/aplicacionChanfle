<?php

/* @Costos/costo/edit.html.twig */
class __TwigTemplate_8cf930bda736b3f7c2b70c278eadafb7377cd29d0bba283cb10ec2ea064a5bee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Costos/costo/edit.html.twig", 1);
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
        $__internal_d7ab4b22bad8e9a1778ea793f239625d4bba64880278e8c20b8c122706ad5fd0 = $this->env->getExtension("native_profiler");
        $__internal_d7ab4b22bad8e9a1778ea793f239625d4bba64880278e8c20b8c122706ad5fd0->enter($__internal_d7ab4b22bad8e9a1778ea793f239625d4bba64880278e8c20b8c122706ad5fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Costos/costo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d7ab4b22bad8e9a1778ea793f239625d4bba64880278e8c20b8c122706ad5fd0->leave($__internal_d7ab4b22bad8e9a1778ea793f239625d4bba64880278e8c20b8c122706ad5fd0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da3ef137e93082814d0af62e42bad737345dffefb81c74ba94054763c665c82a = $this->env->getExtension("native_profiler");
        $__internal_da3ef137e93082814d0af62e42bad737345dffefb81c74ba94054763c665c82a->enter($__internal_da3ef137e93082814d0af62e42bad737345dffefb81c74ba94054763c665c82a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Costo edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("costo_index");
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
        
        $__internal_da3ef137e93082814d0af62e42bad737345dffefb81c74ba94054763c665c82a->leave($__internal_da3ef137e93082814d0af62e42bad737345dffefb81c74ba94054763c665c82a_prof);

    }

    public function getTemplateName()
    {
        return "@Costos/costo/edit.html.twig";
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
/*     <h1>Costo edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('costo_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
