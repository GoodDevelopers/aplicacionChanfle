<?php

/* InventarioBundle:materiaprima:new.html.twig */
class __TwigTemplate_09e3f9facb6ff37e787bebff207f8a32e767ebb6783bbdea01ce9bab8c3aeee5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:materiaprima:new.html.twig", 1);
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
        $__internal_b44874906f255b574e3f37a06547965d10064fbf57ad79ed3ac4bc9fe6cff22d = $this->env->getExtension("native_profiler");
        $__internal_b44874906f255b574e3f37a06547965d10064fbf57ad79ed3ac4bc9fe6cff22d->enter($__internal_b44874906f255b574e3f37a06547965d10064fbf57ad79ed3ac4bc9fe6cff22d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:materiaprima:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b44874906f255b574e3f37a06547965d10064fbf57ad79ed3ac4bc9fe6cff22d->leave($__internal_b44874906f255b574e3f37a06547965d10064fbf57ad79ed3ac4bc9fe6cff22d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_550cfa7515a65477cf5fa4bdb59758dbd4bd6f55be5ef0f5e1d5830fc0506fdf = $this->env->getExtension("native_profiler");
        $__internal_550cfa7515a65477cf5fa4bdb59758dbd4bd6f55be5ef0f5e1d5830fc0506fdf->enter($__internal_550cfa7515a65477cf5fa4bdb59758dbd4bd6f55be5ef0f5e1d5830fc0506fdf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MateriaPrima creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("materiaprima_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_550cfa7515a65477cf5fa4bdb59758dbd4bd6f55be5ef0f5e1d5830fc0506fdf->leave($__internal_550cfa7515a65477cf5fa4bdb59758dbd4bd6f55be5ef0f5e1d5830fc0506fdf_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:materiaprima:new.html.twig";
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
/*     <h1>MateriaPrima creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('materiaprima_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
