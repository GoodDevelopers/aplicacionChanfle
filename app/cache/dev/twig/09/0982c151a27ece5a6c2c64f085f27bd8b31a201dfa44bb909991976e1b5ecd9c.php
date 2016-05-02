<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_c8a94a830a0630507117d7bc4c058fc6a05171f5134842cf5b887be9a28902f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ee2a191dbb1b6725041a874688ea1050cbb7799359e38218050b46e318c7fcc0 = $this->env->getExtension("native_profiler");
        $__internal_ee2a191dbb1b6725041a874688ea1050cbb7799359e38218050b46e318c7fcc0->enter($__internal_ee2a191dbb1b6725041a874688ea1050cbb7799359e38218050b46e318c7fcc0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ee2a191dbb1b6725041a874688ea1050cbb7799359e38218050b46e318c7fcc0->leave($__internal_ee2a191dbb1b6725041a874688ea1050cbb7799359e38218050b46e318c7fcc0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_643e5d7cd9005232c2364fca13ca1be711eb6dee5f50d0a94ea205eb73b3e8bf = $this->env->getExtension("native_profiler");
        $__internal_643e5d7cd9005232c2364fca13ca1be711eb6dee5f50d0a94ea205eb73b3e8bf->enter($__internal_643e5d7cd9005232c2364fca13ca1be711eb6dee5f50d0a94ea205eb73b3e8bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_643e5d7cd9005232c2364fca13ca1be711eb6dee5f50d0a94ea205eb73b3e8bf->leave($__internal_643e5d7cd9005232c2364fca13ca1be711eb6dee5f50d0a94ea205eb73b3e8bf_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_a150e2fd815f754b59aa34a1a3d9e013da405d1888b9fc56d5ab2b946d17663d = $this->env->getExtension("native_profiler");
        $__internal_a150e2fd815f754b59aa34a1a3d9e013da405d1888b9fc56d5ab2b946d17663d->enter($__internal_a150e2fd815f754b59aa34a1a3d9e013da405d1888b9fc56d5ab2b946d17663d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_a150e2fd815f754b59aa34a1a3d9e013da405d1888b9fc56d5ab2b946d17663d->leave($__internal_a150e2fd815f754b59aa34a1a3d9e013da405d1888b9fc56d5ab2b946d17663d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_1bfda445d2ff6abac0277e8bf626e9fd685ff38b98f53ff9c5acb7a71effb0af = $this->env->getExtension("native_profiler");
        $__internal_1bfda445d2ff6abac0277e8bf626e9fd685ff38b98f53ff9c5acb7a71effb0af->enter($__internal_1bfda445d2ff6abac0277e8bf626e9fd685ff38b98f53ff9c5acb7a71effb0af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1bfda445d2ff6abac0277e8bf626e9fd685ff38b98f53ff9c5acb7a71effb0af->leave($__internal_1bfda445d2ff6abac0277e8bf626e9fd685ff38b98f53ff9c5acb7a71effb0af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 33,  114 => 32,  108 => 28,  106 => 27,  102 => 25,  96 => 24,  88 => 21,  82 => 17,  80 => 16,  75 => 14,  70 => 13,  64 => 12,  54 => 9,  48 => 6,  45 => 5,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     {% if collector.hasexception %}*/
/*         <style>*/
/*             {{ render(path('_profiler_exception_css', { token: token })) }}*/
/*         </style>*/
/*     {% endif %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block menu %}*/
/*     <span class="label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}">*/
/*         <span class="icon">{{ include('@WebProfiler/Icon/exception.svg') }}</span>*/
/*         <strong>Exception</strong>*/
/*         {% if collector.hasexception %}*/
/*             <span class="count">*/
/*                 <span>1</span>*/
/*             </span>*/
/*         {% endif %}*/
/*     </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     <h2>Exceptions</h2>*/
/* */
/*     {% if not collector.hasexception %}*/
/*         <div class="empty">*/
/*             <p>No exception was thrown and caught during the request.</p>*/
/*         </div>*/
/*     {% else %}*/
/*         <div class="sf-reset">*/
/*             {{ render(path('_profiler_exception', { token: token })) }}*/
/*         </div>*/
/*     {% endif %}*/
/* {% endblock %}*/
/* */
