<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_9d6d7c62f7bbceb46693b20f71ec631ab430d930fd53332a3c1f06f1a9f6b288 extends Twig_Template
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
        $__internal_5051e1f2323fb141ff7a8e04c72dd7c4a5eb713f4e4ba95c2277c267306233c5 = $this->env->getExtension("native_profiler");
        $__internal_5051e1f2323fb141ff7a8e04c72dd7c4a5eb713f4e4ba95c2277c267306233c5->enter($__internal_5051e1f2323fb141ff7a8e04c72dd7c4a5eb713f4e4ba95c2277c267306233c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_5051e1f2323fb141ff7a8e04c72dd7c4a5eb713f4e4ba95c2277c267306233c5->leave($__internal_5051e1f2323fb141ff7a8e04c72dd7c4a5eb713f4e4ba95c2277c267306233c5_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_56b9b237fbee018c77636c11cd49944fbbcecbedc9f1c1962279835b1e4cd705 = $this->env->getExtension("native_profiler");
        $__internal_56b9b237fbee018c77636c11cd49944fbbcecbedc9f1c1962279835b1e4cd705->enter($__internal_56b9b237fbee018c77636c11cd49944fbbcecbedc9f1c1962279835b1e4cd705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_56b9b237fbee018c77636c11cd49944fbbcecbedc9f1c1962279835b1e4cd705->leave($__internal_56b9b237fbee018c77636c11cd49944fbbcecbedc9f1c1962279835b1e4cd705_prof);

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
