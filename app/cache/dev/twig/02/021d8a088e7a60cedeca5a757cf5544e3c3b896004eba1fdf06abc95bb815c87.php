<?php

/* @Inventario/tipoproducto/new.html.twig */
class __TwigTemplate_032911e7ab705f1f99d7721f8cc96186248981fef3b2c0de4f32aca6049ad661 extends Twig_Template
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
        $__internal_736fa32f38db58a27ae9fa6d183097004bcac3523f15b456f9ee27f203a525cf = $this->env->getExtension("native_profiler");
        $__internal_736fa32f38db58a27ae9fa6d183097004bcac3523f15b456f9ee27f203a525cf->enter($__internal_736fa32f38db58a27ae9fa6d183097004bcac3523f15b456f9ee27f203a525cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/tipoproducto/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_736fa32f38db58a27ae9fa6d183097004bcac3523f15b456f9ee27f203a525cf->leave($__internal_736fa32f38db58a27ae9fa6d183097004bcac3523f15b456f9ee27f203a525cf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_3c1daf4ef122005a529c3714e39a11fe17f7242a036f232db1ef48cc28fa975b = $this->env->getExtension("native_profiler");
        $__internal_3c1daf4ef122005a529c3714e39a11fe17f7242a036f232db1ef48cc28fa975b->enter($__internal_3c1daf4ef122005a529c3714e39a11fe17f7242a036f232db1ef48cc28fa975b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3c1daf4ef122005a529c3714e39a11fe17f7242a036f232db1ef48cc28fa975b->leave($__internal_3c1daf4ef122005a529c3714e39a11fe17f7242a036f232db1ef48cc28fa975b_prof);

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
