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
        $__internal_91c3a85d39a63be2c6756f7880f6c03f39ed4264ca33c9b84ac0911313a468ed = $this->env->getExtension("native_profiler");
        $__internal_91c3a85d39a63be2c6756f7880f6c03f39ed4264ca33c9b84ac0911313a468ed->enter($__internal_91c3a85d39a63be2c6756f7880f6c03f39ed4264ca33c9b84ac0911313a468ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_91c3a85d39a63be2c6756f7880f6c03f39ed4264ca33c9b84ac0911313a468ed->leave($__internal_91c3a85d39a63be2c6756f7880f6c03f39ed4264ca33c9b84ac0911313a468ed_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b1d1f261a123b1bc4f454fba1bf8014580a1221ce185b7cdf03c0d61dffe2923 = $this->env->getExtension("native_profiler");
        $__internal_b1d1f261a123b1bc4f454fba1bf8014580a1221ce185b7cdf03c0d61dffe2923->enter($__internal_b1d1f261a123b1bc4f454fba1bf8014580a1221ce185b7cdf03c0d61dffe2923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b1d1f261a123b1bc4f454fba1bf8014580a1221ce185b7cdf03c0d61dffe2923->leave($__internal_b1d1f261a123b1bc4f454fba1bf8014580a1221ce185b7cdf03c0d61dffe2923_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_5df96709bb2764fb85f2c04d9268fa9147127d715887858b44b443e994f6d8ae = $this->env->getExtension("native_profiler");
        $__internal_5df96709bb2764fb85f2c04d9268fa9147127d715887858b44b443e994f6d8ae->enter($__internal_5df96709bb2764fb85f2c04d9268fa9147127d715887858b44b443e994f6d8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5df96709bb2764fb85f2c04d9268fa9147127d715887858b44b443e994f6d8ae->leave($__internal_5df96709bb2764fb85f2c04d9268fa9147127d715887858b44b443e994f6d8ae_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2293e1e11dbd117de23c93df4d37d20add58b7ab391e38df0fac9a25cc9f4d44 = $this->env->getExtension("native_profiler");
        $__internal_2293e1e11dbd117de23c93df4d37d20add58b7ab391e38df0fac9a25cc9f4d44->enter($__internal_2293e1e11dbd117de23c93df4d37d20add58b7ab391e38df0fac9a25cc9f4d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_2293e1e11dbd117de23c93df4d37d20add58b7ab391e38df0fac9a25cc9f4d44->leave($__internal_2293e1e11dbd117de23c93df4d37d20add58b7ab391e38df0fac9a25cc9f4d44_prof);

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
