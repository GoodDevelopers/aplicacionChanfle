<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_a8d4be2e0cc5f241e02811c3c3f4d0abc08d289f20c945d21dc92037105dbfef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
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
        $__internal_c9ff0840a3d048ee651b33759a4185ee2df096d2b81de029656b244a761ac5e9 = $this->env->getExtension("native_profiler");
        $__internal_c9ff0840a3d048ee651b33759a4185ee2df096d2b81de029656b244a761ac5e9->enter($__internal_c9ff0840a3d048ee651b33759a4185ee2df096d2b81de029656b244a761ac5e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9ff0840a3d048ee651b33759a4185ee2df096d2b81de029656b244a761ac5e9->leave($__internal_c9ff0840a3d048ee651b33759a4185ee2df096d2b81de029656b244a761ac5e9_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_f65a8e7bd4427746d9b220e9c1e45d3c2facff8b1523b821e4dae468e72c845a = $this->env->getExtension("native_profiler");
        $__internal_f65a8e7bd4427746d9b220e9c1e45d3c2facff8b1523b821e4dae468e72c845a->enter($__internal_f65a8e7bd4427746d9b220e9c1e45d3c2facff8b1523b821e4dae468e72c845a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f65a8e7bd4427746d9b220e9c1e45d3c2facff8b1523b821e4dae468e72c845a->leave($__internal_f65a8e7bd4427746d9b220e9c1e45d3c2facff8b1523b821e4dae468e72c845a_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d79c2a4fa27ef219fb908c0dbd4958a7edf4c2e147a16022bf9fef2af8b98ada = $this->env->getExtension("native_profiler");
        $__internal_d79c2a4fa27ef219fb908c0dbd4958a7edf4c2e147a16022bf9fef2af8b98ada->enter($__internal_d79c2a4fa27ef219fb908c0dbd4958a7edf4c2e147a16022bf9fef2af8b98ada_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_d79c2a4fa27ef219fb908c0dbd4958a7edf4c2e147a16022bf9fef2af8b98ada->leave($__internal_d79c2a4fa27ef219fb908c0dbd4958a7edf4c2e147a16022bf9fef2af8b98ada_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4d6752279e45f37c1bbc4095584aa1efbae321dd2dd25bcd97c1f74794c0242d = $this->env->getExtension("native_profiler");
        $__internal_4d6752279e45f37c1bbc4095584aa1efbae321dd2dd25bcd97c1f74794c0242d->enter($__internal_4d6752279e45f37c1bbc4095584aa1efbae321dd2dd25bcd97c1f74794c0242d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_4d6752279e45f37c1bbc4095584aa1efbae321dd2dd25bcd97c1f74794c0242d->leave($__internal_4d6752279e45f37c1bbc4095584aa1efbae321dd2dd25bcd97c1f74794c0242d_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
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
