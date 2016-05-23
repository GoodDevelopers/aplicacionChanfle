<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_42946ce62be191a6d5da0c263088c2ac1f1396221f05daa3c676c8a85581362f extends Twig_Template
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
        $__internal_f09f306d42085bf63771f83ae714a1250e1c3d6c64231137648a355aa148796e = $this->env->getExtension("native_profiler");
        $__internal_f09f306d42085bf63771f83ae714a1250e1c3d6c64231137648a355aa148796e->enter($__internal_f09f306d42085bf63771f83ae714a1250e1c3d6c64231137648a355aa148796e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f09f306d42085bf63771f83ae714a1250e1c3d6c64231137648a355aa148796e->leave($__internal_f09f306d42085bf63771f83ae714a1250e1c3d6c64231137648a355aa148796e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a7b9593a62bb334e7f29fe478bc635d4a204dea862872844e7d29e4961ebc0bf = $this->env->getExtension("native_profiler");
        $__internal_a7b9593a62bb334e7f29fe478bc635d4a204dea862872844e7d29e4961ebc0bf->enter($__internal_a7b9593a62bb334e7f29fe478bc635d4a204dea862872844e7d29e4961ebc0bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a7b9593a62bb334e7f29fe478bc635d4a204dea862872844e7d29e4961ebc0bf->leave($__internal_a7b9593a62bb334e7f29fe478bc635d4a204dea862872844e7d29e4961ebc0bf_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_460180f99e4ab6df8826fb3021ee0be364926fa0a6800af3cef35dbde58dc2b5 = $this->env->getExtension("native_profiler");
        $__internal_460180f99e4ab6df8826fb3021ee0be364926fa0a6800af3cef35dbde58dc2b5->enter($__internal_460180f99e4ab6df8826fb3021ee0be364926fa0a6800af3cef35dbde58dc2b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_460180f99e4ab6df8826fb3021ee0be364926fa0a6800af3cef35dbde58dc2b5->leave($__internal_460180f99e4ab6df8826fb3021ee0be364926fa0a6800af3cef35dbde58dc2b5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_e90c80b1be7234eaed6a7b440cff7d2bb609384a777420641590d9801270d07b = $this->env->getExtension("native_profiler");
        $__internal_e90c80b1be7234eaed6a7b440cff7d2bb609384a777420641590d9801270d07b->enter($__internal_e90c80b1be7234eaed6a7b440cff7d2bb609384a777420641590d9801270d07b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_e90c80b1be7234eaed6a7b440cff7d2bb609384a777420641590d9801270d07b->leave($__internal_e90c80b1be7234eaed6a7b440cff7d2bb609384a777420641590d9801270d07b_prof);

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
