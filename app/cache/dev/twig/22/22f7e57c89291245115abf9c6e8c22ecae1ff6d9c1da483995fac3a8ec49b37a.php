<?php

/* InventarioBundle:proveedor:edit.html.twig */
class __TwigTemplate_17a9be5b334b58f0d5d7634a3f5eeb6b374ab8f07dccf4e7560c72cbc5d7ac6d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:proveedor:edit.html.twig", 1);
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
        $__internal_928f0773de9965d6a3d3adbeea01856742fc941eafdf9a7ac64151f7b55e6610 = $this->env->getExtension("native_profiler");
        $__internal_928f0773de9965d6a3d3adbeea01856742fc941eafdf9a7ac64151f7b55e6610->enter($__internal_928f0773de9965d6a3d3adbeea01856742fc941eafdf9a7ac64151f7b55e6610_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:proveedor:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_928f0773de9965d6a3d3adbeea01856742fc941eafdf9a7ac64151f7b55e6610->leave($__internal_928f0773de9965d6a3d3adbeea01856742fc941eafdf9a7ac64151f7b55e6610_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_2273494f103618940ea361a6e722470f84173631305a6aee6d223166e5314aa3 = $this->env->getExtension("native_profiler");
        $__internal_2273494f103618940ea361a6e722470f84173631305a6aee6d223166e5314aa3->enter($__internal_2273494f103618940ea361a6e722470f84173631305a6aee6d223166e5314aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proveedor edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("yes_index");
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
        
        $__internal_2273494f103618940ea361a6e722470f84173631305a6aee6d223166e5314aa3->leave($__internal_2273494f103618940ea361a6e722470f84173631305a6aee6d223166e5314aa3_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:proveedor:edit.html.twig";
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
/*     <h1>Proveedor edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('yes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
