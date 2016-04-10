<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_b293afc7f40a2cf79a4b54ad674b99ef02cb3a131b95eca7ea16fb73b2c99d6e extends Twig_Template
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
        $__internal_fefbaf98b7675b21f6200c2c502309144216b33954c33d4d5afc5e693fde70d8 = $this->env->getExtension("native_profiler");
        $__internal_fefbaf98b7675b21f6200c2c502309144216b33954c33d4d5afc5e693fde70d8->enter($__internal_fefbaf98b7675b21f6200c2c502309144216b33954c33d4d5afc5e693fde70d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_fefbaf98b7675b21f6200c2c502309144216b33954c33d4d5afc5e693fde70d8->leave($__internal_fefbaf98b7675b21f6200c2c502309144216b33954c33d4d5afc5e693fde70d8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_63996882d02beb11bf243b891c0e59254879c7eed8a5fa34b53e487ff4e58184 = $this->env->getExtension("native_profiler");
        $__internal_63996882d02beb11bf243b891c0e59254879c7eed8a5fa34b53e487ff4e58184->enter($__internal_63996882d02beb11bf243b891c0e59254879c7eed8a5fa34b53e487ff4e58184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_63996882d02beb11bf243b891c0e59254879c7eed8a5fa34b53e487ff4e58184->leave($__internal_63996882d02beb11bf243b891c0e59254879c7eed8a5fa34b53e487ff4e58184_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_78dff38b12988aa0a6a52e8b87927802a77a714ef69c533d96c4208f7be5a0df = $this->env->getExtension("native_profiler");
        $__internal_78dff38b12988aa0a6a52e8b87927802a77a714ef69c533d96c4208f7be5a0df->enter($__internal_78dff38b12988aa0a6a52e8b87927802a77a714ef69c533d96c4208f7be5a0df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_78dff38b12988aa0a6a52e8b87927802a77a714ef69c533d96c4208f7be5a0df->leave($__internal_78dff38b12988aa0a6a52e8b87927802a77a714ef69c533d96c4208f7be5a0df_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_17f0566ed8b739bdab5041813e3ebeb0d4a2b8eca7ff433a37087ceb00b69fbf = $this->env->getExtension("native_profiler");
        $__internal_17f0566ed8b739bdab5041813e3ebeb0d4a2b8eca7ff433a37087ceb00b69fbf->enter($__internal_17f0566ed8b739bdab5041813e3ebeb0d4a2b8eca7ff433a37087ceb00b69fbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_17f0566ed8b739bdab5041813e3ebeb0d4a2b8eca7ff433a37087ceb00b69fbf->leave($__internal_17f0566ed8b739bdab5041813e3ebeb0d4a2b8eca7ff433a37087ceb00b69fbf_prof);

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
