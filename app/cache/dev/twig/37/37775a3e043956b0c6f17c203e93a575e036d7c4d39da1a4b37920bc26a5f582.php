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
        $__internal_1bbf041b19b7b73a92839c8284e3d29bf75774185252f4ccda51be09a6aa743f = $this->env->getExtension("native_profiler");
        $__internal_1bbf041b19b7b73a92839c8284e3d29bf75774185252f4ccda51be09a6aa743f->enter($__internal_1bbf041b19b7b73a92839c8284e3d29bf75774185252f4ccda51be09a6aa743f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1bbf041b19b7b73a92839c8284e3d29bf75774185252f4ccda51be09a6aa743f->leave($__internal_1bbf041b19b7b73a92839c8284e3d29bf75774185252f4ccda51be09a6aa743f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_930b9613e24efaebadb48f949d2e3ad29dba99e72d37e47fbd22c45ca0d55150 = $this->env->getExtension("native_profiler");
        $__internal_930b9613e24efaebadb48f949d2e3ad29dba99e72d37e47fbd22c45ca0d55150->enter($__internal_930b9613e24efaebadb48f949d2e3ad29dba99e72d37e47fbd22c45ca0d55150_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_930b9613e24efaebadb48f949d2e3ad29dba99e72d37e47fbd22c45ca0d55150->leave($__internal_930b9613e24efaebadb48f949d2e3ad29dba99e72d37e47fbd22c45ca0d55150_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_912a433c74d789471f3d1a3350962dd3b4024949db00723f0df0d3621fd454d8 = $this->env->getExtension("native_profiler");
        $__internal_912a433c74d789471f3d1a3350962dd3b4024949db00723f0df0d3621fd454d8->enter($__internal_912a433c74d789471f3d1a3350962dd3b4024949db00723f0df0d3621fd454d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_912a433c74d789471f3d1a3350962dd3b4024949db00723f0df0d3621fd454d8->leave($__internal_912a433c74d789471f3d1a3350962dd3b4024949db00723f0df0d3621fd454d8_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4e0de4f7a0d5cfcce3d2d0b4b19d3c8ec8e338e987f1a194d84d081180da2916 = $this->env->getExtension("native_profiler");
        $__internal_4e0de4f7a0d5cfcce3d2d0b4b19d3c8ec8e338e987f1a194d84d081180da2916->enter($__internal_4e0de4f7a0d5cfcce3d2d0b4b19d3c8ec8e338e987f1a194d84d081180da2916_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_4e0de4f7a0d5cfcce3d2d0b4b19d3c8ec8e338e987f1a194d84d081180da2916->leave($__internal_4e0de4f7a0d5cfcce3d2d0b4b19d3c8ec8e338e987f1a194d84d081180da2916_prof);

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
