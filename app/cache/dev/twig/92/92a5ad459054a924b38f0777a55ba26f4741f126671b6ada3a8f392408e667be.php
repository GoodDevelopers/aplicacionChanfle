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
        $__internal_eb4accf6b679a0f32279919b39971799a0c5be9ce05ed9171e8751993d81dd23 = $this->env->getExtension("native_profiler");
        $__internal_eb4accf6b679a0f32279919b39971799a0c5be9ce05ed9171e8751993d81dd23->enter($__internal_eb4accf6b679a0f32279919b39971799a0c5be9ce05ed9171e8751993d81dd23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:materiaprima:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eb4accf6b679a0f32279919b39971799a0c5be9ce05ed9171e8751993d81dd23->leave($__internal_eb4accf6b679a0f32279919b39971799a0c5be9ce05ed9171e8751993d81dd23_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a032aba3a357bce9073f9039100af1c7d39a7d2f66339b136fb9318bcc286c4f = $this->env->getExtension("native_profiler");
        $__internal_a032aba3a357bce9073f9039100af1c7d39a7d2f66339b136fb9318bcc286c4f->enter($__internal_a032aba3a357bce9073f9039100af1c7d39a7d2f66339b136fb9318bcc286c4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a032aba3a357bce9073f9039100af1c7d39a7d2f66339b136fb9318bcc286c4f->leave($__internal_a032aba3a357bce9073f9039100af1c7d39a7d2f66339b136fb9318bcc286c4f_prof);

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
