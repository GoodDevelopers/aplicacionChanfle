<?php

/* InventarioBundle:proveedor:new.html.twig */
class __TwigTemplate_d4b7757bb60bb4c0bc8d57001c85cbf61c94b45b7c07778d807471370d947622 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:proveedor:new.html.twig", 1);
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
        $__internal_f08cdf9ba752bd4ba63964a56046cb21543eecf3ba93899cf0b40b3fcf142a15 = $this->env->getExtension("native_profiler");
        $__internal_f08cdf9ba752bd4ba63964a56046cb21543eecf3ba93899cf0b40b3fcf142a15->enter($__internal_f08cdf9ba752bd4ba63964a56046cb21543eecf3ba93899cf0b40b3fcf142a15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:proveedor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f08cdf9ba752bd4ba63964a56046cb21543eecf3ba93899cf0b40b3fcf142a15->leave($__internal_f08cdf9ba752bd4ba63964a56046cb21543eecf3ba93899cf0b40b3fcf142a15_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6bca1c2a3011d62565af8bdbdf4d3aef4063b4a9400167ae99bd1f91d25c9508 = $this->env->getExtension("native_profiler");
        $__internal_6bca1c2a3011d62565af8bdbdf4d3aef4063b4a9400167ae99bd1f91d25c9508->enter($__internal_6bca1c2a3011d62565af8bdbdf4d3aef4063b4a9400167ae99bd1f91d25c9508_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proveedor creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_6bca1c2a3011d62565af8bdbdf4d3aef4063b4a9400167ae99bd1f91d25c9508->leave($__internal_6bca1c2a3011d62565af8bdbdf4d3aef4063b4a9400167ae99bd1f91d25c9508_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:proveedor:new.html.twig";
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
/*     <h1>Proveedor creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('yes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
