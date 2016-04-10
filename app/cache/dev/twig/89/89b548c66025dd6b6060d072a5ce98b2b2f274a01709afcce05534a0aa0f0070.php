<?php

/* InventarioBundle:IngresoMateriaPrima:new.html.twig */
class __TwigTemplate_15e78718e013d8f6e6e3a8d0b7803549d13363709e0b4ebf34688d453d50e957 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:IngresoMateriaPrima:new.html.twig", 1);
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
        $__internal_909b251906050a4f39c4d6d7f6430f1d9bda8323e720c7c6e87beb8fe06c602c = $this->env->getExtension("native_profiler");
        $__internal_909b251906050a4f39c4d6d7f6430f1d9bda8323e720c7c6e87beb8fe06c602c->enter($__internal_909b251906050a4f39c4d6d7f6430f1d9bda8323e720c7c6e87beb8fe06c602c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:IngresoMateriaPrima:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_909b251906050a4f39c4d6d7f6430f1d9bda8323e720c7c6e87beb8fe06c602c->leave($__internal_909b251906050a4f39c4d6d7f6430f1d9bda8323e720c7c6e87beb8fe06c602c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9f60a7259c816089a76bfbb4a054eb751593eb36a48cecb6ed3d59d83a5bae07 = $this->env->getExtension("native_profiler");
        $__internal_9f60a7259c816089a76bfbb4a054eb751593eb36a48cecb6ed3d59d83a5bae07->enter($__internal_9f60a7259c816089a76bfbb4a054eb751593eb36a48cecb6ed3d59d83a5bae07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>IngresoMateriaPrima creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("ingresomateriaprima_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9f60a7259c816089a76bfbb4a054eb751593eb36a48cecb6ed3d59d83a5bae07->leave($__internal_9f60a7259c816089a76bfbb4a054eb751593eb36a48cecb6ed3d59d83a5bae07_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:IngresoMateriaPrima:new.html.twig";
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
/*     <h1>IngresoMateriaPrima creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('ingresomateriaprima_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
