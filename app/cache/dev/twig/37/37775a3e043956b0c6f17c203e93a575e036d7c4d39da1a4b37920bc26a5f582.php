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
        $__internal_047d68961ac4b058a560d265e38fb2e80dfab2bb7f73e085208f826f6a79fb32 = $this->env->getExtension("native_profiler");
        $__internal_047d68961ac4b058a560d265e38fb2e80dfab2bb7f73e085208f826f6a79fb32->enter($__internal_047d68961ac4b058a560d265e38fb2e80dfab2bb7f73e085208f826f6a79fb32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_047d68961ac4b058a560d265e38fb2e80dfab2bb7f73e085208f826f6a79fb32->leave($__internal_047d68961ac4b058a560d265e38fb2e80dfab2bb7f73e085208f826f6a79fb32_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3e308399befefad95cd6b837d90dfebfd38f0ab12e002063e4f108a6f866afd1 = $this->env->getExtension("native_profiler");
        $__internal_3e308399befefad95cd6b837d90dfebfd38f0ab12e002063e4f108a6f866afd1->enter($__internal_3e308399befefad95cd6b837d90dfebfd38f0ab12e002063e4f108a6f866afd1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_3e308399befefad95cd6b837d90dfebfd38f0ab12e002063e4f108a6f866afd1->leave($__internal_3e308399befefad95cd6b837d90dfebfd38f0ab12e002063e4f108a6f866afd1_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c75f40917a617acb486268597bba2f95002298a1ad5719930f9ce09e2480b2c7 = $this->env->getExtension("native_profiler");
        $__internal_c75f40917a617acb486268597bba2f95002298a1ad5719930f9ce09e2480b2c7->enter($__internal_c75f40917a617acb486268597bba2f95002298a1ad5719930f9ce09e2480b2c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c75f40917a617acb486268597bba2f95002298a1ad5719930f9ce09e2480b2c7->leave($__internal_c75f40917a617acb486268597bba2f95002298a1ad5719930f9ce09e2480b2c7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_22bf2ff6976e7a26fd122e81210293db82eef71611febd41c8da7220820563c4 = $this->env->getExtension("native_profiler");
        $__internal_22bf2ff6976e7a26fd122e81210293db82eef71611febd41c8da7220820563c4->enter($__internal_22bf2ff6976e7a26fd122e81210293db82eef71611febd41c8da7220820563c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_22bf2ff6976e7a26fd122e81210293db82eef71611febd41c8da7220820563c4->leave($__internal_22bf2ff6976e7a26fd122e81210293db82eef71611febd41c8da7220820563c4_prof);

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
