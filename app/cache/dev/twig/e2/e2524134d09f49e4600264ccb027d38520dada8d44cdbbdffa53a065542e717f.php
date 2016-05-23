<?php

/* @Inventario/tipoproducto/new.html.twig */
class __TwigTemplate_0b3b0a9b33a8bb89334ba1977351420b0d4e8ce506ccce752f398254ea4cdad6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/tipoproducto/new.html.twig", 1);
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
        $__internal_05ce3bcaaa0c567430219dc01272d6bd99a0d2b84149fef41598b2e47ddd7701 = $this->env->getExtension("native_profiler");
        $__internal_05ce3bcaaa0c567430219dc01272d6bd99a0d2b84149fef41598b2e47ddd7701->enter($__internal_05ce3bcaaa0c567430219dc01272d6bd99a0d2b84149fef41598b2e47ddd7701_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/tipoproducto/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_05ce3bcaaa0c567430219dc01272d6bd99a0d2b84149fef41598b2e47ddd7701->leave($__internal_05ce3bcaaa0c567430219dc01272d6bd99a0d2b84149fef41598b2e47ddd7701_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f3cf73f1be947ffe57677919fc5b399a20f458b2ec241b2568d8c6afe97d80b2 = $this->env->getExtension("native_profiler");
        $__internal_f3cf73f1be947ffe57677919fc5b399a20f458b2ec241b2568d8c6afe97d80b2->enter($__internal_f3cf73f1be947ffe57677919fc5b399a20f458b2ec241b2568d8c6afe97d80b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TipoProducto creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("tipoproducto_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_f3cf73f1be947ffe57677919fc5b399a20f458b2ec241b2568d8c6afe97d80b2->leave($__internal_f3cf73f1be947ffe57677919fc5b399a20f458b2ec241b2568d8c6afe97d80b2_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/tipoproducto/new.html.twig";
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
/*     <h1>TipoProducto creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipoproducto_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
