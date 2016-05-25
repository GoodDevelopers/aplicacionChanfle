<?php

/* @Inventario/proveedor/new.html.twig */
class __TwigTemplate_f0f2704644da2372c5c4f54727d63e0e5e4bcf978989230861e0d80d565ab3ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/proveedor/new.html.twig", 1);
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
        $__internal_5a7a09bacd6081adf35fb2cf0b26b682db037c5e53380ac412ac21d644301abf = $this->env->getExtension("native_profiler");
        $__internal_5a7a09bacd6081adf35fb2cf0b26b682db037c5e53380ac412ac21d644301abf->enter($__internal_5a7a09bacd6081adf35fb2cf0b26b682db037c5e53380ac412ac21d644301abf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/proveedor/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a7a09bacd6081adf35fb2cf0b26b682db037c5e53380ac412ac21d644301abf->leave($__internal_5a7a09bacd6081adf35fb2cf0b26b682db037c5e53380ac412ac21d644301abf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_361c22c2e68e761e5694ca24b1d6688e14b629a1cff5e9ffa2ff23c2e0a9f82b = $this->env->getExtension("native_profiler");
        $__internal_361c22c2e68e761e5694ca24b1d6688e14b629a1cff5e9ffa2ff23c2e0a9f82b->enter($__internal_361c22c2e68e761e5694ca24b1d6688e14b629a1cff5e9ffa2ff23c2e0a9f82b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_361c22c2e68e761e5694ca24b1d6688e14b629a1cff5e9ffa2ff23c2e0a9f82b->leave($__internal_361c22c2e68e761e5694ca24b1d6688e14b629a1cff5e9ffa2ff23c2e0a9f82b_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/proveedor/new.html.twig";
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
