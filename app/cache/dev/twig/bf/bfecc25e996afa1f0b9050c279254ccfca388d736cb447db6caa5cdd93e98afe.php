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
        $__internal_cb155b52bacccf151348a58fcbed4dfbae86ea1b2722aaee3d3749d439204d2a = $this->env->getExtension("native_profiler");
        $__internal_cb155b52bacccf151348a58fcbed4dfbae86ea1b2722aaee3d3749d439204d2a->enter($__internal_cb155b52bacccf151348a58fcbed4dfbae86ea1b2722aaee3d3749d439204d2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JornadasLaboralesBundle:caja:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cb155b52bacccf151348a58fcbed4dfbae86ea1b2722aaee3d3749d439204d2a->leave($__internal_cb155b52bacccf151348a58fcbed4dfbae86ea1b2722aaee3d3749d439204d2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_05f09df43051b5b80e260acdfd9102c97a7473652c66a96240ee22bd3702631e = $this->env->getExtension("native_profiler");
        $__internal_05f09df43051b5b80e260acdfd9102c97a7473652c66a96240ee22bd3702631e->enter($__internal_05f09df43051b5b80e260acdfd9102c97a7473652c66a96240ee22bd3702631e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_05f09df43051b5b80e260acdfd9102c97a7473652c66a96240ee22bd3702631e->leave($__internal_05f09df43051b5b80e260acdfd9102c97a7473652c66a96240ee22bd3702631e_prof);

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
