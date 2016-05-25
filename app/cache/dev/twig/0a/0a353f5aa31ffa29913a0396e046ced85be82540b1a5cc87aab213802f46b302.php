<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_bb16723320c840412e43370791e009b1c519fa36b04084e200bf92e68594163a extends Twig_Template
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
        $__internal_074d7eb43dc691ce6c3fa82fdd93d2181e6b48f0ed8bdaf43e9c61e3e67da18d = $this->env->getExtension("native_profiler");
        $__internal_074d7eb43dc691ce6c3fa82fdd93d2181e6b48f0ed8bdaf43e9c61e3e67da18d->enter($__internal_074d7eb43dc691ce6c3fa82fdd93d2181e6b48f0ed8bdaf43e9c61e3e67da18d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_074d7eb43dc691ce6c3fa82fdd93d2181e6b48f0ed8bdaf43e9c61e3e67da18d->leave($__internal_074d7eb43dc691ce6c3fa82fdd93d2181e6b48f0ed8bdaf43e9c61e3e67da18d_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_7f3e07f84fd07e7c5e3f506da9395ffd06bceaac046a7d85235de86118b228ff = $this->env->getExtension("native_profiler");
        $__internal_7f3e07f84fd07e7c5e3f506da9395ffd06bceaac046a7d85235de86118b228ff->enter($__internal_7f3e07f84fd07e7c5e3f506da9395ffd06bceaac046a7d85235de86118b228ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7f3e07f84fd07e7c5e3f506da9395ffd06bceaac046a7d85235de86118b228ff->leave($__internal_7f3e07f84fd07e7c5e3f506da9395ffd06bceaac046a7d85235de86118b228ff_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_fd1dfd39babd0d9474a889f18cb803217fc5cc2f65e6f2a99972b41823d096e7 = $this->env->getExtension("native_profiler");
        $__internal_fd1dfd39babd0d9474a889f18cb803217fc5cc2f65e6f2a99972b41823d096e7->enter($__internal_fd1dfd39babd0d9474a889f18cb803217fc5cc2f65e6f2a99972b41823d096e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_fd1dfd39babd0d9474a889f18cb803217fc5cc2f65e6f2a99972b41823d096e7->leave($__internal_fd1dfd39babd0d9474a889f18cb803217fc5cc2f65e6f2a99972b41823d096e7_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_26480d6dd5e103eb414e53383edb43be8e32cd2cd265e9469428a9735b5608fd = $this->env->getExtension("native_profiler");
        $__internal_26480d6dd5e103eb414e53383edb43be8e32cd2cd265e9469428a9735b5608fd->enter($__internal_26480d6dd5e103eb414e53383edb43be8e32cd2cd265e9469428a9735b5608fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_26480d6dd5e103eb414e53383edb43be8e32cd2cd265e9469428a9735b5608fd->leave($__internal_26480d6dd5e103eb414e53383edb43be8e32cd2cd265e9469428a9735b5608fd_prof);

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
