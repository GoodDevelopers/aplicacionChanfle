<?php

/* InventarioBundle:tipoproducto:edit.html.twig */
class __TwigTemplate_f06193f952122e173ec1de536acc9ef414b75bb2eeb26866727b898eee73abe9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:tipoproducto:edit.html.twig", 1);
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
        $__internal_eaac2fa2f0828094b2331f16469c3144eb4108e543c1d8f38a80e8773e6b4e21 = $this->env->getExtension("native_profiler");
        $__internal_eaac2fa2f0828094b2331f16469c3144eb4108e543c1d8f38a80e8773e6b4e21->enter($__internal_eaac2fa2f0828094b2331f16469c3144eb4108e543c1d8f38a80e8773e6b4e21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:tipoproducto:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eaac2fa2f0828094b2331f16469c3144eb4108e543c1d8f38a80e8773e6b4e21->leave($__internal_eaac2fa2f0828094b2331f16469c3144eb4108e543c1d8f38a80e8773e6b4e21_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05c498faf4ec143714b8912f8bb8b04b9d84d4c2d3798b5ecee7a0f3900a180f = $this->env->getExtension("native_profiler");
        $__internal_05c498faf4ec143714b8912f8bb8b04b9d84d4c2d3798b5ecee7a0f3900a180f->enter($__internal_05c498faf4ec143714b8912f8bb8b04b9d84d4c2d3798b5ecee7a0f3900a180f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TipoProducto edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("tipoproducto_index");
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
        
        $__internal_05c498faf4ec143714b8912f8bb8b04b9d84d4c2d3798b5ecee7a0f3900a180f->leave($__internal_05c498faf4ec143714b8912f8bb8b04b9d84d4c2d3798b5ecee7a0f3900a180f_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:tipoproducto:edit.html.twig";
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
/*     <h1>TipoProducto edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipoproducto_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
