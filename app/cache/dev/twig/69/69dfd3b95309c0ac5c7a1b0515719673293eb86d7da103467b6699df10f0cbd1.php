<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_3683a28de5eec12d2af4f2e083a311410dc06c76eb4703465a7fb4cd117f452c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c422a749c025ac3a0950013c1012456e7b2718cedb89d3005cad4a3f3929969b = $this->env->getExtension("native_profiler");
        $__internal_c422a749c025ac3a0950013c1012456e7b2718cedb89d3005cad4a3f3929969b->enter($__internal_c422a749c025ac3a0950013c1012456e7b2718cedb89d3005cad4a3f3929969b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_c422a749c025ac3a0950013c1012456e7b2718cedb89d3005cad4a3f3929969b->leave($__internal_c422a749c025ac3a0950013c1012456e7b2718cedb89d3005cad4a3f3929969b_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_feb95ea28f19bf82770a6fa046885b34c913fad899cad825dc1e58c8c75d20f1 = $this->env->getExtension("native_profiler");
        $__internal_feb95ea28f19bf82770a6fa046885b34c913fad899cad825dc1e58c8c75d20f1->enter($__internal_feb95ea28f19bf82770a6fa046885b34c913fad899cad825dc1e58c8c75d20f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_feb95ea28f19bf82770a6fa046885b34c913fad899cad825dc1e58c8c75d20f1->leave($__internal_feb95ea28f19bf82770a6fa046885b34c913fad899cad825dc1e58c8c75d20f1_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  23 => 1,);
    }
}
/* {% block panel '' %}*/
/* */
