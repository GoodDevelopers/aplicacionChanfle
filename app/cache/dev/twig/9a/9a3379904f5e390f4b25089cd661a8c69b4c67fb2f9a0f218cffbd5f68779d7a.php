<?php

/* @Inventario/proveedor/new.html.twig */
class __TwigTemplate_b36ae2c18214904c4070f0a07ee36d765294823b6b526d06879c075fab1820b4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/proveedor/new.html.twig", 1);
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
        $__internal_a462a99be6b0588488d4d0da04ebc567440a2801bdbd8ab5bf95d3646f1d7365 = $this->env->getExtension("native_profiler");
        $__internal_a462a99be6b0588488d4d0da04ebc567440a2801bdbd8ab5bf95d3646f1d7365->enter($__internal_a462a99be6b0588488d4d0da04ebc567440a2801bdbd8ab5bf95d3646f1d7365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/proveedor/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a462a99be6b0588488d4d0da04ebc567440a2801bdbd8ab5bf95d3646f1d7365->leave($__internal_a462a99be6b0588488d4d0da04ebc567440a2801bdbd8ab5bf95d3646f1d7365_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6b90eeade1a931841a5e13f892a5058a417530764f9af7342abe0aef5596196 = $this->env->getExtension("native_profiler");
        $__internal_c6b90eeade1a931841a5e13f892a5058a417530764f9af7342abe0aef5596196->enter($__internal_c6b90eeade1a931841a5e13f892a5058a417530764f9af7342abe0aef5596196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proveedor creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c6b90eeade1a931841a5e13f892a5058a417530764f9af7342abe0aef5596196->leave($__internal_c6b90eeade1a931841a5e13f892a5058a417530764f9af7342abe0aef5596196_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/proveedor/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Proveedor creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('yes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
