<?php

/* @Costos/costo/new.html.twig */
class __TwigTemplate_701f570893ab78863dc6c15760b2143deb4717803b4af5da45cefb27e85022a9 extends Twig_Template
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
        $__internal_20defed98c6c1e3fb0afbd78cd33b9975867787d0712c913f2e2d8b8bca246d8 = $this->env->getExtension("native_profiler");
        $__internal_20defed98c6c1e3fb0afbd78cd33b9975867787d0712c913f2e2d8b8bca246d8->enter($__internal_20defed98c6c1e3fb0afbd78cd33b9975867787d0712c913f2e2d8b8bca246d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Costos/costo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_20defed98c6c1e3fb0afbd78cd33b9975867787d0712c913f2e2d8b8bca246d8->leave($__internal_20defed98c6c1e3fb0afbd78cd33b9975867787d0712c913f2e2d8b8bca246d8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6c59f03caa8ef5c1a0309bd051f8f3c10af8bdba01309cefb8db25748dfb24ca = $this->env->getExtension("native_profiler");
        $__internal_6c59f03caa8ef5c1a0309bd051f8f3c10af8bdba01309cefb8db25748dfb24ca->enter($__internal_6c59f03caa8ef5c1a0309bd051f8f3c10af8bdba01309cefb8db25748dfb24ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_6c59f03caa8ef5c1a0309bd051f8f3c10af8bdba01309cefb8db25748dfb24ca->leave($__internal_6c59f03caa8ef5c1a0309bd051f8f3c10af8bdba01309cefb8db25748dfb24ca_prof);

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
