<?php

/* CostosBundle:costo:edit.html.twig */
class __TwigTemplate_f72e8dbec4401c4e43098e1b90b7771902cd0cc25dc7ace1de235664785cc4f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CostosBundle:costo:edit.html.twig", 1);
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
        $__internal_1defac0be10b6af6d794b77b5fd43300d6fa21af156abc450a653b6d97b7d2c7 = $this->env->getExtension("native_profiler");
        $__internal_1defac0be10b6af6d794b77b5fd43300d6fa21af156abc450a653b6d97b7d2c7->enter($__internal_1defac0be10b6af6d794b77b5fd43300d6fa21af156abc450a653b6d97b7d2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CostosBundle:costo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1defac0be10b6af6d794b77b5fd43300d6fa21af156abc450a653b6d97b7d2c7->leave($__internal_1defac0be10b6af6d794b77b5fd43300d6fa21af156abc450a653b6d97b7d2c7_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8747a8e883477960c4657a15c39b903ff0637b62301741f614117c95e1689c1 = $this->env->getExtension("native_profiler");
        $__internal_a8747a8e883477960c4657a15c39b903ff0637b62301741f614117c95e1689c1->enter($__internal_a8747a8e883477960c4657a15c39b903ff0637b62301741f614117c95e1689c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a8747a8e883477960c4657a15c39b903ff0637b62301741f614117c95e1689c1->leave($__internal_a8747a8e883477960c4657a15c39b903ff0637b62301741f614117c95e1689c1_prof);

    }

    public function getTemplateName()
    {
        return "CostosBundle:costo:edit.html.twig";
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
