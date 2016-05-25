<?php

/* @Inventario/materiaprima/edit.html.twig */
class __TwigTemplate_39cdce2b5f34d7d9f4e6c8475a4282d3187470c77204c065bf6ed0fb750904c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/materiaprima/edit.html.twig", 1);
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
        $__internal_12635d4b873f0577019f665f87f9075752be896ea665343ecaf61ea644793fc3 = $this->env->getExtension("native_profiler");
        $__internal_12635d4b873f0577019f665f87f9075752be896ea665343ecaf61ea644793fc3->enter($__internal_12635d4b873f0577019f665f87f9075752be896ea665343ecaf61ea644793fc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/materiaprima/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12635d4b873f0577019f665f87f9075752be896ea665343ecaf61ea644793fc3->leave($__internal_12635d4b873f0577019f665f87f9075752be896ea665343ecaf61ea644793fc3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6e573e285875e3455ae56fbc6eef07e1bdf2b269a3e1c7eef03c0237b7f2efb = $this->env->getExtension("native_profiler");
        $__internal_a6e573e285875e3455ae56fbc6eef07e1bdf2b269a3e1c7eef03c0237b7f2efb->enter($__internal_a6e573e285875e3455ae56fbc6eef07e1bdf2b269a3e1c7eef03c0237b7f2efb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a6e573e285875e3455ae56fbc6eef07e1bdf2b269a3e1c7eef03c0237b7f2efb->leave($__internal_a6e573e285875e3455ae56fbc6eef07e1bdf2b269a3e1c7eef03c0237b7f2efb_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/materiaprima/edit.html.twig";
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
