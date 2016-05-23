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
        $__internal_96b31b4039c367c2e5e7597a7973bc23fc3b1811b9eb4201bcd8e089f9f067ae = $this->env->getExtension("native_profiler");
        $__internal_96b31b4039c367c2e5e7597a7973bc23fc3b1811b9eb4201bcd8e089f9f067ae->enter($__internal_96b31b4039c367c2e5e7597a7973bc23fc3b1811b9eb4201bcd8e089f9f067ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_96b31b4039c367c2e5e7597a7973bc23fc3b1811b9eb4201bcd8e089f9f067ae->leave($__internal_96b31b4039c367c2e5e7597a7973bc23fc3b1811b9eb4201bcd8e089f9f067ae_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_cb7457f179cbb740b75f2ed60df3de610d4190d5eceec0e4e636db0f63bdcae1 = $this->env->getExtension("native_profiler");
        $__internal_cb7457f179cbb740b75f2ed60df3de610d4190d5eceec0e4e636db0f63bdcae1->enter($__internal_cb7457f179cbb740b75f2ed60df3de610d4190d5eceec0e4e636db0f63bdcae1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_cb7457f179cbb740b75f2ed60df3de610d4190d5eceec0e4e636db0f63bdcae1->leave($__internal_cb7457f179cbb740b75f2ed60df3de610d4190d5eceec0e4e636db0f63bdcae1_prof);

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
