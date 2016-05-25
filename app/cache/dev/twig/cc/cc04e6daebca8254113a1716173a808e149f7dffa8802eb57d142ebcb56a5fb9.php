<?php

/* CostosBundle:costo:edit.html.twig */
class __TwigTemplate_3cad5350dab137fc6910e480b753d335b6905a0670038267dba7e511e2147b89 extends Twig_Template
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
        $__internal_8e860249c646668a6fd94d4dc673872cbf11fbc77217797b9a0eff12e3a44de5 = $this->env->getExtension("native_profiler");
        $__internal_8e860249c646668a6fd94d4dc673872cbf11fbc77217797b9a0eff12e3a44de5->enter($__internal_8e860249c646668a6fd94d4dc673872cbf11fbc77217797b9a0eff12e3a44de5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CostosBundle:costo:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e860249c646668a6fd94d4dc673872cbf11fbc77217797b9a0eff12e3a44de5->leave($__internal_8e860249c646668a6fd94d4dc673872cbf11fbc77217797b9a0eff12e3a44de5_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f9068f5b13b94c64b1f26c244cd0c8a157deb71fcf66c28f86934adcb7b7a02a = $this->env->getExtension("native_profiler");
        $__internal_f9068f5b13b94c64b1f26c244cd0c8a157deb71fcf66c28f86934adcb7b7a02a->enter($__internal_f9068f5b13b94c64b1f26c244cd0c8a157deb71fcf66c28f86934adcb7b7a02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f9068f5b13b94c64b1f26c244cd0c8a157deb71fcf66c28f86934adcb7b7a02a->leave($__internal_f9068f5b13b94c64b1f26c244cd0c8a157deb71fcf66c28f86934adcb7b7a02a_prof);

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
