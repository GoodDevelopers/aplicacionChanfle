<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_750e01c0320870ee1cbe306cf8d2148402b0d8b9038edb9d325cc267a21bd550 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
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
        $__internal_7b81f72a29bd8954efab54e170661f1cfbc7ee0ea390984cbe35f64d207630eb = $this->env->getExtension("native_profiler");
        $__internal_7b81f72a29bd8954efab54e170661f1cfbc7ee0ea390984cbe35f64d207630eb->enter($__internal_7b81f72a29bd8954efab54e170661f1cfbc7ee0ea390984cbe35f64d207630eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7b81f72a29bd8954efab54e170661f1cfbc7ee0ea390984cbe35f64d207630eb->leave($__internal_7b81f72a29bd8954efab54e170661f1cfbc7ee0ea390984cbe35f64d207630eb_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_95748d825a7df7db1faeb5783129aad2b35b7d197a8d26e8275ff988435a45dd = $this->env->getExtension("native_profiler");
        $__internal_95748d825a7df7db1faeb5783129aad2b35b7d197a8d26e8275ff988435a45dd->enter($__internal_95748d825a7df7db1faeb5783129aad2b35b7d197a8d26e8275ff988435a45dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_95748d825a7df7db1faeb5783129aad2b35b7d197a8d26e8275ff988435a45dd->leave($__internal_95748d825a7df7db1faeb5783129aad2b35b7d197a8d26e8275ff988435a45dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cea014c35d4ae61724f9e898510a83933463797e816ed3747e305cd74720bf32 = $this->env->getExtension("native_profiler");
        $__internal_cea014c35d4ae61724f9e898510a83933463797e816ed3747e305cd74720bf32->enter($__internal_cea014c35d4ae61724f9e898510a83933463797e816ed3747e305cd74720bf32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cea014c35d4ae61724f9e898510a83933463797e816ed3747e305cd74720bf32->leave($__internal_cea014c35d4ae61724f9e898510a83933463797e816ed3747e305cd74720bf32_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e65b4b592f82a5909eab43b358770cfc5cc6bd9fc386b8a0b8c9f49d0c0f1d96 = $this->env->getExtension("native_profiler");
        $__internal_e65b4b592f82a5909eab43b358770cfc5cc6bd9fc386b8a0b8c9f49d0c0f1d96->enter($__internal_e65b4b592f82a5909eab43b358770cfc5cc6bd9fc386b8a0b8c9f49d0c0f1d96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e65b4b592f82a5909eab43b358770cfc5cc6bd9fc386b8a0b8c9f49d0c0f1d96->leave($__internal_e65b4b592f82a5909eab43b358770cfc5cc6bd9fc386b8a0b8c9f49d0c0f1d96_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
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
