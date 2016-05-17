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
        $__internal_418ce6136a6280422aaa0280b32f7ded377613c7bfa902a0975c00253aa83fe7 = $this->env->getExtension("native_profiler");
        $__internal_418ce6136a6280422aaa0280b32f7ded377613c7bfa902a0975c00253aa83fe7->enter($__internal_418ce6136a6280422aaa0280b32f7ded377613c7bfa902a0975c00253aa83fe7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_418ce6136a6280422aaa0280b32f7ded377613c7bfa902a0975c00253aa83fe7->leave($__internal_418ce6136a6280422aaa0280b32f7ded377613c7bfa902a0975c00253aa83fe7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_fabf2f95a14954dc2dfdb32f6119f412fe869c98e22adcff756a156e3e2570d2 = $this->env->getExtension("native_profiler");
        $__internal_fabf2f95a14954dc2dfdb32f6119f412fe869c98e22adcff756a156e3e2570d2->enter($__internal_fabf2f95a14954dc2dfdb32f6119f412fe869c98e22adcff756a156e3e2570d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_fabf2f95a14954dc2dfdb32f6119f412fe869c98e22adcff756a156e3e2570d2->leave($__internal_fabf2f95a14954dc2dfdb32f6119f412fe869c98e22adcff756a156e3e2570d2_prof);

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
