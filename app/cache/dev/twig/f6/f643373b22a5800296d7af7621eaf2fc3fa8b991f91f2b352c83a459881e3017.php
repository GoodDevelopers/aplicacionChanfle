<?php

/* JornadasLaboralesBundle:Caja:new.html.twig */
class __TwigTemplate_ba5cd24ca8a5e0aa2b02ac27629c1e1b16c7ed1de3b236a83ae73c5d09d43790 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JornadasLaboralesBundle:Caja:new.html.twig", 1);
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
        $__internal_10e1cddd3a01d81c7595de201eab0d5eb0fb098940d8a336e71fc041968173c8 = $this->env->getExtension("native_profiler");
        $__internal_10e1cddd3a01d81c7595de201eab0d5eb0fb098940d8a336e71fc041968173c8->enter($__internal_10e1cddd3a01d81c7595de201eab0d5eb0fb098940d8a336e71fc041968173c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JornadasLaboralesBundle:Caja:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_10e1cddd3a01d81c7595de201eab0d5eb0fb098940d8a336e71fc041968173c8->leave($__internal_10e1cddd3a01d81c7595de201eab0d5eb0fb098940d8a336e71fc041968173c8_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_7f6418c2bc5a2f6f58ddc46093aae9f6d5270d3dde4a13d20c56a95567037f4f = $this->env->getExtension("native_profiler");
        $__internal_7f6418c2bc5a2f6f58ddc46093aae9f6d5270d3dde4a13d20c56a95567037f4f->enter($__internal_7f6418c2bc5a2f6f58ddc46093aae9f6d5270d3dde4a13d20c56a95567037f4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_7f6418c2bc5a2f6f58ddc46093aae9f6d5270d3dde4a13d20c56a95567037f4f->leave($__internal_7f6418c2bc5a2f6f58ddc46093aae9f6d5270d3dde4a13d20c56a95567037f4f_prof);

    }

    public function getTemplateName()
    {
        return "JornadasLaboralesBundle:Caja:new.html.twig";
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
