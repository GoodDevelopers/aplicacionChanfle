<?php

/* CostosBundle:costo:new.html.twig */
class __TwigTemplate_b5a216455c5ac9423ad5a4d69df9bc8cf836e415dbe32eddb024540d5fc2046c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CostosBundle:costo:new.html.twig", 1);
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
        $__internal_0cb084f3f600cb259a8a9156f805311cf8e07ae8e01729a0a30cf1c7202ff6a4 = $this->env->getExtension("native_profiler");
        $__internal_0cb084f3f600cb259a8a9156f805311cf8e07ae8e01729a0a30cf1c7202ff6a4->enter($__internal_0cb084f3f600cb259a8a9156f805311cf8e07ae8e01729a0a30cf1c7202ff6a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CostosBundle:costo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0cb084f3f600cb259a8a9156f805311cf8e07ae8e01729a0a30cf1c7202ff6a4->leave($__internal_0cb084f3f600cb259a8a9156f805311cf8e07ae8e01729a0a30cf1c7202ff6a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d12f170bd9691e5c206a628f1f2688260fe91d3190daa9d9037c84962936e1b6 = $this->env->getExtension("native_profiler");
        $__internal_d12f170bd9691e5c206a628f1f2688260fe91d3190daa9d9037c84962936e1b6->enter($__internal_d12f170bd9691e5c206a628f1f2688260fe91d3190daa9d9037c84962936e1b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_d12f170bd9691e5c206a628f1f2688260fe91d3190daa9d9037c84962936e1b6->leave($__internal_d12f170bd9691e5c206a628f1f2688260fe91d3190daa9d9037c84962936e1b6_prof);

    }

    public function getTemplateName()
    {
        return "CostosBundle:costo:new.html.twig";
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
