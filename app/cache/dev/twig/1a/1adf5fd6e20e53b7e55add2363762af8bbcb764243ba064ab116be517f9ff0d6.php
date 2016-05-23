<?php

/* @Inventario/proveedor/edit.html.twig */
class __TwigTemplate_bc2d34f3dd3661ed246e045bb9bb7099e217a65136b3b28cbdf861137bbba690 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/proveedor/edit.html.twig", 1);
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
        $__internal_13c12d3c80c9b39e0eee1d8c77a7a5abfac5c000f0bcddb1eed9fbda2be2b575 = $this->env->getExtension("native_profiler");
        $__internal_13c12d3c80c9b39e0eee1d8c77a7a5abfac5c000f0bcddb1eed9fbda2be2b575->enter($__internal_13c12d3c80c9b39e0eee1d8c77a7a5abfac5c000f0bcddb1eed9fbda2be2b575_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/proveedor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_13c12d3c80c9b39e0eee1d8c77a7a5abfac5c000f0bcddb1eed9fbda2be2b575->leave($__internal_13c12d3c80c9b39e0eee1d8c77a7a5abfac5c000f0bcddb1eed9fbda2be2b575_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_25b7b98a835569c9862f6235ce5287d8acde7b471c15c9cec0f1de2cb1f42dbd = $this->env->getExtension("native_profiler");
        $__internal_25b7b98a835569c9862f6235ce5287d8acde7b471c15c9cec0f1de2cb1f42dbd->enter($__internal_25b7b98a835569c9862f6235ce5287d8acde7b471c15c9cec0f1de2cb1f42dbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25b7b98a835569c9862f6235ce5287d8acde7b471c15c9cec0f1de2cb1f42dbd->leave($__internal_25b7b98a835569c9862f6235ce5287d8acde7b471c15c9cec0f1de2cb1f42dbd_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/proveedor/edit.html.twig";
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
