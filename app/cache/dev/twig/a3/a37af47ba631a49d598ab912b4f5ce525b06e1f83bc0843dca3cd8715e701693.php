<?php

/* @JornadasLaborales/caja/new.html.twig */
class __TwigTemplate_0323b5388eaf4b96cc17edfad5bef946b9f8883b99f1bd62ce0faccd603fee80 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JornadasLaborales/caja/new.html.twig", 1);
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
        $__internal_26f85bddfbdef1fb658f9489ba7c8c96349946e80de00a45fe96322cd42c06e3 = $this->env->getExtension("native_profiler");
        $__internal_26f85bddfbdef1fb658f9489ba7c8c96349946e80de00a45fe96322cd42c06e3->enter($__internal_26f85bddfbdef1fb658f9489ba7c8c96349946e80de00a45fe96322cd42c06e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JornadasLaborales/caja/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_26f85bddfbdef1fb658f9489ba7c8c96349946e80de00a45fe96322cd42c06e3->leave($__internal_26f85bddfbdef1fb658f9489ba7c8c96349946e80de00a45fe96322cd42c06e3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9cfd3e0230c1ce2feba74d49c5775d9a3fc9a4931919a6074d93d158b759d118 = $this->env->getExtension("native_profiler");
        $__internal_9cfd3e0230c1ce2feba74d49c5775d9a3fc9a4931919a6074d93d158b759d118->enter($__internal_9cfd3e0230c1ce2feba74d49c5775d9a3fc9a4931919a6074d93d158b759d118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Caja creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("caja_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_9cfd3e0230c1ce2feba74d49c5775d9a3fc9a4931919a6074d93d158b759d118->leave($__internal_9cfd3e0230c1ce2feba74d49c5775d9a3fc9a4931919a6074d93d158b759d118_prof);

    }

    public function getTemplateName()
    {
        return "@JornadasLaborales/caja/new.html.twig";
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
/*     <h1>Caja creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('caja_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
