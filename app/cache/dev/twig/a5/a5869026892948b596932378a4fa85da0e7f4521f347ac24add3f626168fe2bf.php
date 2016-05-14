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
        $__internal_f1a4d8fdef6a346c975b6ad6eaa793c8a57264dfdb9e29373d90e49891409318 = $this->env->getExtension("native_profiler");
        $__internal_f1a4d8fdef6a346c975b6ad6eaa793c8a57264dfdb9e29373d90e49891409318->enter($__internal_f1a4d8fdef6a346c975b6ad6eaa793c8a57264dfdb9e29373d90e49891409318_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f1a4d8fdef6a346c975b6ad6eaa793c8a57264dfdb9e29373d90e49891409318->leave($__internal_f1a4d8fdef6a346c975b6ad6eaa793c8a57264dfdb9e29373d90e49891409318_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_a3ed87b6fcf52e4702b531f64d342d5311f6a07ff538a1df12b9ea7ff904ec05 = $this->env->getExtension("native_profiler");
        $__internal_a3ed87b6fcf52e4702b531f64d342d5311f6a07ff538a1df12b9ea7ff904ec05->enter($__internal_a3ed87b6fcf52e4702b531f64d342d5311f6a07ff538a1df12b9ea7ff904ec05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_a3ed87b6fcf52e4702b531f64d342d5311f6a07ff538a1df12b9ea7ff904ec05->leave($__internal_a3ed87b6fcf52e4702b531f64d342d5311f6a07ff538a1df12b9ea7ff904ec05_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e4cfbe121245f523406f0698f663a1009d9673509a9cfe1418c0c5850da675a6 = $this->env->getExtension("native_profiler");
        $__internal_e4cfbe121245f523406f0698f663a1009d9673509a9cfe1418c0c5850da675a6->enter($__internal_e4cfbe121245f523406f0698f663a1009d9673509a9cfe1418c0c5850da675a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_e4cfbe121245f523406f0698f663a1009d9673509a9cfe1418c0c5850da675a6->leave($__internal_e4cfbe121245f523406f0698f663a1009d9673509a9cfe1418c0c5850da675a6_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_b9820033cf0d0c0572d82eb998d2eba99835b9ced27335bfb05a252bd4c6e7a2 = $this->env->getExtension("native_profiler");
        $__internal_b9820033cf0d0c0572d82eb998d2eba99835b9ced27335bfb05a252bd4c6e7a2->enter($__internal_b9820033cf0d0c0572d82eb998d2eba99835b9ced27335bfb05a252bd4c6e7a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_b9820033cf0d0c0572d82eb998d2eba99835b9ced27335bfb05a252bd4c6e7a2->leave($__internal_b9820033cf0d0c0572d82eb998d2eba99835b9ced27335bfb05a252bd4c6e7a2_prof);

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
