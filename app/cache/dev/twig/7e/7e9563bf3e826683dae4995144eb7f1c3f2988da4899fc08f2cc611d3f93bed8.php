<?php

/* CostosBundle:costo:new.html.twig */
class __TwigTemplate_45e098fad63807fb137772502f1bae83827a67edd892fca7ee43affc990c14f3 extends Twig_Template
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
        $__internal_15f915f0f36986703c8d6987371fd794d029593e98ed830df35ef32f7a55da1c = $this->env->getExtension("native_profiler");
        $__internal_15f915f0f36986703c8d6987371fd794d029593e98ed830df35ef32f7a55da1c->enter($__internal_15f915f0f36986703c8d6987371fd794d029593e98ed830df35ef32f7a55da1c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CostosBundle:costo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_15f915f0f36986703c8d6987371fd794d029593e98ed830df35ef32f7a55da1c->leave($__internal_15f915f0f36986703c8d6987371fd794d029593e98ed830df35ef32f7a55da1c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_cf407fabc1caa6ce83c1a458df60888d3f235ce4009a3f1f2c9c00237e3774a7 = $this->env->getExtension("native_profiler");
        $__internal_cf407fabc1caa6ce83c1a458df60888d3f235ce4009a3f1f2c9c00237e3774a7->enter($__internal_cf407fabc1caa6ce83c1a458df60888d3f235ce4009a3f1f2c9c00237e3774a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cf407fabc1caa6ce83c1a458df60888d3f235ce4009a3f1f2c9c00237e3774a7->leave($__internal_cf407fabc1caa6ce83c1a458df60888d3f235ce4009a3f1f2c9c00237e3774a7_prof);

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
