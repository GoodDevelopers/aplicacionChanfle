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
        $__internal_b2f5f5dc5f87f92f9c7cdac00db0b7125adb2a30da591245ca374860caa039a4 = $this->env->getExtension("native_profiler");
        $__internal_b2f5f5dc5f87f92f9c7cdac00db0b7125adb2a30da591245ca374860caa039a4->enter($__internal_b2f5f5dc5f87f92f9c7cdac00db0b7125adb2a30da591245ca374860caa039a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b2f5f5dc5f87f92f9c7cdac00db0b7125adb2a30da591245ca374860caa039a4->leave($__internal_b2f5f5dc5f87f92f9c7cdac00db0b7125adb2a30da591245ca374860caa039a4_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_09e28aeea21641a9aa53d6a0c98737ad209e1b8cdc6e80a9d2792a517fd62233 = $this->env->getExtension("native_profiler");
        $__internal_09e28aeea21641a9aa53d6a0c98737ad209e1b8cdc6e80a9d2792a517fd62233->enter($__internal_09e28aeea21641a9aa53d6a0c98737ad209e1b8cdc6e80a9d2792a517fd62233_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_09e28aeea21641a9aa53d6a0c98737ad209e1b8cdc6e80a9d2792a517fd62233->leave($__internal_09e28aeea21641a9aa53d6a0c98737ad209e1b8cdc6e80a9d2792a517fd62233_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_0e183f015fe290b20be68d2a263d98d191e387a230f6efeb83cc864f0bf1954e = $this->env->getExtension("native_profiler");
        $__internal_0e183f015fe290b20be68d2a263d98d191e387a230f6efeb83cc864f0bf1954e->enter($__internal_0e183f015fe290b20be68d2a263d98d191e387a230f6efeb83cc864f0bf1954e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_0e183f015fe290b20be68d2a263d98d191e387a230f6efeb83cc864f0bf1954e->leave($__internal_0e183f015fe290b20be68d2a263d98d191e387a230f6efeb83cc864f0bf1954e_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_608db997d50b77bb0a489be392781542258b1816bd4eb19c3a12d2894233d427 = $this->env->getExtension("native_profiler");
        $__internal_608db997d50b77bb0a489be392781542258b1816bd4eb19c3a12d2894233d427->enter($__internal_608db997d50b77bb0a489be392781542258b1816bd4eb19c3a12d2894233d427_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_608db997d50b77bb0a489be392781542258b1816bd4eb19c3a12d2894233d427->leave($__internal_608db997d50b77bb0a489be392781542258b1816bd4eb19c3a12d2894233d427_prof);

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
