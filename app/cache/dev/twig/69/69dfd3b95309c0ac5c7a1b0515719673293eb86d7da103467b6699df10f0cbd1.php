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
        $__internal_f1274d6477d685378e38d2f5b082b410812754c5b64cbf97c93934278925a3c7 = $this->env->getExtension("native_profiler");
        $__internal_f1274d6477d685378e38d2f5b082b410812754c5b64cbf97c93934278925a3c7->enter($__internal_f1274d6477d685378e38d2f5b082b410812754c5b64cbf97c93934278925a3c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_f1274d6477d685378e38d2f5b082b410812754c5b64cbf97c93934278925a3c7->leave($__internal_f1274d6477d685378e38d2f5b082b410812754c5b64cbf97c93934278925a3c7_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_f0a4640ffe4d4aae893451e356a102452e81cca28fd3a6bd5317e82faa52ab1d = $this->env->getExtension("native_profiler");
        $__internal_f0a4640ffe4d4aae893451e356a102452e81cca28fd3a6bd5317e82faa52ab1d->enter($__internal_f0a4640ffe4d4aae893451e356a102452e81cca28fd3a6bd5317e82faa52ab1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f0a4640ffe4d4aae893451e356a102452e81cca28fd3a6bd5317e82faa52ab1d->leave($__internal_f0a4640ffe4d4aae893451e356a102452e81cca28fd3a6bd5317e82faa52ab1d_prof);

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
