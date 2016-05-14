<?php

/* @Inventario/producto/edit.html.twig */
class __TwigTemplate_b9eb498ef7e954989ee04c7deae589ba5155cfac83af024c5ce3fa8a171ca895 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/producto/edit.html.twig", 1);
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
        $__internal_500712b9a1b66fd41293189cb72a33c1bc0ba28cd54a7870d9aa167844c4aa4f = $this->env->getExtension("native_profiler");
        $__internal_500712b9a1b66fd41293189cb72a33c1bc0ba28cd54a7870d9aa167844c4aa4f->enter($__internal_500712b9a1b66fd41293189cb72a33c1bc0ba28cd54a7870d9aa167844c4aa4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/producto/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_500712b9a1b66fd41293189cb72a33c1bc0ba28cd54a7870d9aa167844c4aa4f->leave($__internal_500712b9a1b66fd41293189cb72a33c1bc0ba28cd54a7870d9aa167844c4aa4f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_77c3694f94d5656021756aa442a0ce0fd95d6b836f44feb06478d049c2aabd07 = $this->env->getExtension("native_profiler");
        $__internal_77c3694f94d5656021756aa442a0ce0fd95d6b836f44feb06478d049c2aabd07->enter($__internal_77c3694f94d5656021756aa442a0ce0fd95d6b836f44feb06478d049c2aabd07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Producto edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("producto_index");
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
        
        $__internal_77c3694f94d5656021756aa442a0ce0fd95d6b836f44feb06478d049c2aabd07->leave($__internal_77c3694f94d5656021756aa442a0ce0fd95d6b836f44feb06478d049c2aabd07_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/producto/edit.html.twig";
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
/*     <h1>Producto edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('producto_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
