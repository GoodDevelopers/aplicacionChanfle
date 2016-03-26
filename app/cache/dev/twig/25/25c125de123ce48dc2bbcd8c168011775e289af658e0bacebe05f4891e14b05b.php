<?php

/* cliente/new.html.twig */
class __TwigTemplate_2b5f96e4989939abb2415e308fa36a2512d2cd4d2fae410a715fb37d5cfc18ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "cliente/new.html.twig", 1);
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
        $__internal_7fc423ace12073d81329cef51efcb653d24c33c0ecfbe3393effee1cf7eec660 = $this->env->getExtension("native_profiler");
        $__internal_7fc423ace12073d81329cef51efcb653d24c33c0ecfbe3393effee1cf7eec660->enter($__internal_7fc423ace12073d81329cef51efcb653d24c33c0ecfbe3393effee1cf7eec660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "cliente/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fc423ace12073d81329cef51efcb653d24c33c0ecfbe3393effee1cf7eec660->leave($__internal_7fc423ace12073d81329cef51efcb653d24c33c0ecfbe3393effee1cf7eec660_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8a49b99ffbce7500ad7b0009ef1bf838e2ec18d13feb685cdd2e012c62c79744 = $this->env->getExtension("native_profiler");
        $__internal_8a49b99ffbce7500ad7b0009ef1bf838e2ec18d13feb685cdd2e012c62c79744->enter($__internal_8a49b99ffbce7500ad7b0009ef1bf838e2ec18d13feb685cdd2e012c62c79744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("clientes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8a49b99ffbce7500ad7b0009ef1bf838e2ec18d13feb685cdd2e012c62c79744->leave($__internal_8a49b99ffbce7500ad7b0009ef1bf838e2ec18d13feb685cdd2e012c62c79744_prof);

    }

    public function getTemplateName()
    {
        return "cliente/new.html.twig";
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
/*     <h1>Cliente creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('clientes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
