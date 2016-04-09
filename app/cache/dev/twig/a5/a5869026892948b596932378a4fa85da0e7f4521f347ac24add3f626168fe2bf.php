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
        $__internal_a7b3f0333a1c16d25098d0b698e1b9a552aec6fc8a21f92a9193b096481a0cfe = $this->env->getExtension("native_profiler");
        $__internal_a7b3f0333a1c16d25098d0b698e1b9a552aec6fc8a21f92a9193b096481a0cfe->enter($__internal_a7b3f0333a1c16d25098d0b698e1b9a552aec6fc8a21f92a9193b096481a0cfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a7b3f0333a1c16d25098d0b698e1b9a552aec6fc8a21f92a9193b096481a0cfe->leave($__internal_a7b3f0333a1c16d25098d0b698e1b9a552aec6fc8a21f92a9193b096481a0cfe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_942849196436b43c1055e1be63647140ef6999d0fb340fd831e8490eefecfdf5 = $this->env->getExtension("native_profiler");
        $__internal_942849196436b43c1055e1be63647140ef6999d0fb340fd831e8490eefecfdf5->enter($__internal_942849196436b43c1055e1be63647140ef6999d0fb340fd831e8490eefecfdf5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_942849196436b43c1055e1be63647140ef6999d0fb340fd831e8490eefecfdf5->leave($__internal_942849196436b43c1055e1be63647140ef6999d0fb340fd831e8490eefecfdf5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bbe214763432e4e746db2eda41e7457cda47979383d52584cf3c0f20fe1ca8bd = $this->env->getExtension("native_profiler");
        $__internal_bbe214763432e4e746db2eda41e7457cda47979383d52584cf3c0f20fe1ca8bd->enter($__internal_bbe214763432e4e746db2eda41e7457cda47979383d52584cf3c0f20fe1ca8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_bbe214763432e4e746db2eda41e7457cda47979383d52584cf3c0f20fe1ca8bd->leave($__internal_bbe214763432e4e746db2eda41e7457cda47979383d52584cf3c0f20fe1ca8bd_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d26e714458b2392e2139c3d895a3b76c6d5fc422330c4bfd6408209e276becfb = $this->env->getExtension("native_profiler");
        $__internal_d26e714458b2392e2139c3d895a3b76c6d5fc422330c4bfd6408209e276becfb->enter($__internal_d26e714458b2392e2139c3d895a3b76c6d5fc422330c4bfd6408209e276becfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_d26e714458b2392e2139c3d895a3b76c6d5fc422330c4bfd6408209e276becfb->leave($__internal_d26e714458b2392e2139c3d895a3b76c6d5fc422330c4bfd6408209e276becfb_prof);

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
