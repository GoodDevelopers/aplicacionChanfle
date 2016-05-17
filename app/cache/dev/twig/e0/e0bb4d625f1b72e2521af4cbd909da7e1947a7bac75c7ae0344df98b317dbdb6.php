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
        $__internal_c4f45920a16b0668d4a1265bbca91d16335d432f5beb294ab3b9f3c78e8d9856 = $this->env->getExtension("native_profiler");
        $__internal_c4f45920a16b0668d4a1265bbca91d16335d432f5beb294ab3b9f3c78e8d9856->enter($__internal_c4f45920a16b0668d4a1265bbca91d16335d432f5beb294ab3b9f3c78e8d9856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Costos/costo/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c4f45920a16b0668d4a1265bbca91d16335d432f5beb294ab3b9f3c78e8d9856->leave($__internal_c4f45920a16b0668d4a1265bbca91d16335d432f5beb294ab3b9f3c78e8d9856_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_5a739d1e9b648d5d3f12835dc6e95841ffb7eb02d8fe710a97b162befe64ba8c = $this->env->getExtension("native_profiler");
        $__internal_5a739d1e9b648d5d3f12835dc6e95841ffb7eb02d8fe710a97b162befe64ba8c->enter($__internal_5a739d1e9b648d5d3f12835dc6e95841ffb7eb02d8fe710a97b162befe64ba8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_5a739d1e9b648d5d3f12835dc6e95841ffb7eb02d8fe710a97b162befe64ba8c->leave($__internal_5a739d1e9b648d5d3f12835dc6e95841ffb7eb02d8fe710a97b162befe64ba8c_prof);

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
