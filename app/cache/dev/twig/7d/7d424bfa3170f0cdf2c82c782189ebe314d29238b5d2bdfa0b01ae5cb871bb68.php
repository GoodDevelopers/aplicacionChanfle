<?php

/* @Costos/costo/new.html.twig */
class __TwigTemplate_d5053a3352da2b0a0c187300c98011096ed7fe77ad6520633cfba1723103b8f4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Costos/costo/new.html.twig", 1);
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
        $__internal_33be2f9cb067ada98cdec9872863d7e568b4328593f69112202b11b0fb5ca935 = $this->env->getExtension("native_profiler");
        $__internal_33be2f9cb067ada98cdec9872863d7e568b4328593f69112202b11b0fb5ca935->enter($__internal_33be2f9cb067ada98cdec9872863d7e568b4328593f69112202b11b0fb5ca935_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Costos/costo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33be2f9cb067ada98cdec9872863d7e568b4328593f69112202b11b0fb5ca935->leave($__internal_33be2f9cb067ada98cdec9872863d7e568b4328593f69112202b11b0fb5ca935_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c075da3668edf5797cd9d8051d7003ac6b9059b1c8e9a601045ab6544cc6a9c2 = $this->env->getExtension("native_profiler");
        $__internal_c075da3668edf5797cd9d8051d7003ac6b9059b1c8e9a601045ab6544cc6a9c2->enter($__internal_c075da3668edf5797cd9d8051d7003ac6b9059b1c8e9a601045ab6544cc6a9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Costo creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("costo_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_c075da3668edf5797cd9d8051d7003ac6b9059b1c8e9a601045ab6544cc6a9c2->leave($__internal_c075da3668edf5797cd9d8051d7003ac6b9059b1c8e9a601045ab6544cc6a9c2_prof);

    }

    public function getTemplateName()
    {
        return "@Costos/costo/new.html.twig";
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
/*     <h1>Costo creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('costo_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
