<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_3b0851e713f7a51ecda18bb9655568042f92ac8f2fb1745200943eb95cc67bf5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d6f07334855e4d66efb0037d850ba31eaff889a1a906da599fe0ec1d8fc0f1ce = $this->env->getExtension("native_profiler");
        $__internal_d6f07334855e4d66efb0037d850ba31eaff889a1a906da599fe0ec1d8fc0f1ce->enter($__internal_d6f07334855e4d66efb0037d850ba31eaff889a1a906da599fe0ec1d8fc0f1ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d6f07334855e4d66efb0037d850ba31eaff889a1a906da599fe0ec1d8fc0f1ce->leave($__internal_d6f07334855e4d66efb0037d850ba31eaff889a1a906da599fe0ec1d8fc0f1ce_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_36706a429ec71d28593014c55dc594949a8f90dece0db78ab50ecede1a27f00f = $this->env->getExtension("native_profiler");
        $__internal_36706a429ec71d28593014c55dc594949a8f90dece0db78ab50ecede1a27f00f->enter($__internal_36706a429ec71d28593014c55dc594949a8f90dece0db78ab50ecede1a27f00f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_36706a429ec71d28593014c55dc594949a8f90dece0db78ab50ecede1a27f00f->leave($__internal_36706a429ec71d28593014c55dc594949a8f90dece0db78ab50ecede1a27f00f_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_9df50f7968e3f11329c1cb4bf1e8d8709fde9f43ed5a5e1b05059ee364cdcdcd = $this->env->getExtension("native_profiler");
        $__internal_9df50f7968e3f11329c1cb4bf1e8d8709fde9f43ed5a5e1b05059ee364cdcdcd->enter($__internal_9df50f7968e3f11329c1cb4bf1e8d8709fde9f43ed5a5e1b05059ee364cdcdcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_9df50f7968e3f11329c1cb4bf1e8d8709fde9f43ed5a5e1b05059ee364cdcdcd->leave($__internal_9df50f7968e3f11329c1cb4bf1e8d8709fde9f43ed5a5e1b05059ee364cdcdcd_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_833b831e583faf833fd461e7dca9a524d61bb2b7ab99048ecf7e2e185560fe14 = $this->env->getExtension("native_profiler");
        $__internal_833b831e583faf833fd461e7dca9a524d61bb2b7ab99048ecf7e2e185560fe14->enter($__internal_833b831e583faf833fd461e7dca9a524d61bb2b7ab99048ecf7e2e185560fe14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_833b831e583faf833fd461e7dca9a524d61bb2b7ab99048ecf7e2e185560fe14->leave($__internal_833b831e583faf833fd461e7dca9a524d61bb2b7ab99048ecf7e2e185560fe14_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
