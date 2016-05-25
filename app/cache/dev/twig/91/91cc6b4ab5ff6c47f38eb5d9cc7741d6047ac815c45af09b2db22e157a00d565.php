<?php

/* @Inventario/materiaprima/new.html.twig */
class __TwigTemplate_eaa827f74d10abe95b85c3702c267681085ae8ce2cd56589fd6eb54b72c90a1c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/materiaprima/new.html.twig", 1);
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
        $__internal_0adbf1f0f5c1f9d3ef7bc407fd624db13c5283af6825af648f1e1614750d5dbf = $this->env->getExtension("native_profiler");
        $__internal_0adbf1f0f5c1f9d3ef7bc407fd624db13c5283af6825af648f1e1614750d5dbf->enter($__internal_0adbf1f0f5c1f9d3ef7bc407fd624db13c5283af6825af648f1e1614750d5dbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/materiaprima/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0adbf1f0f5c1f9d3ef7bc407fd624db13c5283af6825af648f1e1614750d5dbf->leave($__internal_0adbf1f0f5c1f9d3ef7bc407fd624db13c5283af6825af648f1e1614750d5dbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_931291915d67e95474d882b16686ae144fd1b7fd2a2defce086d5dd6966c177b = $this->env->getExtension("native_profiler");
        $__internal_931291915d67e95474d882b16686ae144fd1b7fd2a2defce086d5dd6966c177b->enter($__internal_931291915d67e95474d882b16686ae144fd1b7fd2a2defce086d5dd6966c177b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_931291915d67e95474d882b16686ae144fd1b7fd2a2defce086d5dd6966c177b->leave($__internal_931291915d67e95474d882b16686ae144fd1b7fd2a2defce086d5dd6966c177b_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/materiaprima/new.html.twig";
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
