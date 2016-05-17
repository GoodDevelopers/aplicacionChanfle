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
        $__internal_c0e8ab1daeb6aba358d2e0a20163997a327407d678e30266903e90f6bc7ea72d = $this->env->getExtension("native_profiler");
        $__internal_c0e8ab1daeb6aba358d2e0a20163997a327407d678e30266903e90f6bc7ea72d->enter($__internal_c0e8ab1daeb6aba358d2e0a20163997a327407d678e30266903e90f6bc7ea72d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0e8ab1daeb6aba358d2e0a20163997a327407d678e30266903e90f6bc7ea72d->leave($__internal_c0e8ab1daeb6aba358d2e0a20163997a327407d678e30266903e90f6bc7ea72d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_62d8b9a5a5aebf6ab23dee07c6af05b660d8c62c27f73e6acbbe8df17e736354 = $this->env->getExtension("native_profiler");
        $__internal_62d8b9a5a5aebf6ab23dee07c6af05b660d8c62c27f73e6acbbe8df17e736354->enter($__internal_62d8b9a5a5aebf6ab23dee07c6af05b660d8c62c27f73e6acbbe8df17e736354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_62d8b9a5a5aebf6ab23dee07c6af05b660d8c62c27f73e6acbbe8df17e736354->leave($__internal_62d8b9a5a5aebf6ab23dee07c6af05b660d8c62c27f73e6acbbe8df17e736354_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_da5b29358e487b302a7cd1a0733385527f069ae139b37e7361e6e4d53b4e22c5 = $this->env->getExtension("native_profiler");
        $__internal_da5b29358e487b302a7cd1a0733385527f069ae139b37e7361e6e4d53b4e22c5->enter($__internal_da5b29358e487b302a7cd1a0733385527f069ae139b37e7361e6e4d53b4e22c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_da5b29358e487b302a7cd1a0733385527f069ae139b37e7361e6e4d53b4e22c5->leave($__internal_da5b29358e487b302a7cd1a0733385527f069ae139b37e7361e6e4d53b4e22c5_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7883093ea49462db6e6db1d1e7c77e9f20a89595e77c0e7bb95bc8a9ea5896d = $this->env->getExtension("native_profiler");
        $__internal_a7883093ea49462db6e6db1d1e7c77e9f20a89595e77c0e7bb95bc8a9ea5896d->enter($__internal_a7883093ea49462db6e6db1d1e7c77e9f20a89595e77c0e7bb95bc8a9ea5896d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_a7883093ea49462db6e6db1d1e7c77e9f20a89595e77c0e7bb95bc8a9ea5896d->leave($__internal_a7883093ea49462db6e6db1d1e7c77e9f20a89595e77c0e7bb95bc8a9ea5896d_prof);

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
