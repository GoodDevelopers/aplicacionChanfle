<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2a226cf8ebdffb69072ea955a8d3597e4487a3a4dc634732e0d02a3064f52312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_8762a8ffd890b916b25c703a2daeb629ca888986a32846836356c5026474ed34 = $this->env->getExtension("native_profiler");
        $__internal_8762a8ffd890b916b25c703a2daeb629ca888986a32846836356c5026474ed34->enter($__internal_8762a8ffd890b916b25c703a2daeb629ca888986a32846836356c5026474ed34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8762a8ffd890b916b25c703a2daeb629ca888986a32846836356c5026474ed34->leave($__internal_8762a8ffd890b916b25c703a2daeb629ca888986a32846836356c5026474ed34_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_694f9a0cbe09f0fa420dc3c6ac6f90729fc6925ecc706082abf3690ca80997fd = $this->env->getExtension("native_profiler");
        $__internal_694f9a0cbe09f0fa420dc3c6ac6f90729fc6925ecc706082abf3690ca80997fd->enter($__internal_694f9a0cbe09f0fa420dc3c6ac6f90729fc6925ecc706082abf3690ca80997fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_694f9a0cbe09f0fa420dc3c6ac6f90729fc6925ecc706082abf3690ca80997fd->leave($__internal_694f9a0cbe09f0fa420dc3c6ac6f90729fc6925ecc706082abf3690ca80997fd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5e9770dae22004ac4d716988531fe9212aee5c3b6f7090e10f8a7a7890c0edc9 = $this->env->getExtension("native_profiler");
        $__internal_5e9770dae22004ac4d716988531fe9212aee5c3b6f7090e10f8a7a7890c0edc9->enter($__internal_5e9770dae22004ac4d716988531fe9212aee5c3b6f7090e10f8a7a7890c0edc9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5e9770dae22004ac4d716988531fe9212aee5c3b6f7090e10f8a7a7890c0edc9->leave($__internal_5e9770dae22004ac4d716988531fe9212aee5c3b6f7090e10f8a7a7890c0edc9_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_80b9746f0fa7009ee89c3fd95255c96441f56b68a454c25c7c5c9f6ca5074aa3 = $this->env->getExtension("native_profiler");
        $__internal_80b9746f0fa7009ee89c3fd95255c96441f56b68a454c25c7c5c9f6ca5074aa3->enter($__internal_80b9746f0fa7009ee89c3fd95255c96441f56b68a454c25c7c5c9f6ca5074aa3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_80b9746f0fa7009ee89c3fd95255c96441f56b68a454c25c7c5c9f6ca5074aa3->leave($__internal_80b9746f0fa7009ee89c3fd95255c96441f56b68a454c25c7c5c9f6ca5074aa3_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
