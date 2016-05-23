<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_3342bfe5840c917e415585025a25d9a093a0803275cfcf3547e3aa140c703486 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
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
        $__internal_73b97f5e60cc15971c90d708adb47fa0f78b3220b8fbb76738e7f068e7ee027d = $this->env->getExtension("native_profiler");
        $__internal_73b97f5e60cc15971c90d708adb47fa0f78b3220b8fbb76738e7f068e7ee027d->enter($__internal_73b97f5e60cc15971c90d708adb47fa0f78b3220b8fbb76738e7f068e7ee027d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73b97f5e60cc15971c90d708adb47fa0f78b3220b8fbb76738e7f068e7ee027d->leave($__internal_73b97f5e60cc15971c90d708adb47fa0f78b3220b8fbb76738e7f068e7ee027d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_250d5801772299c28931bb86f98255aac961cbb6dd653d085bcfe6db6eefa338 = $this->env->getExtension("native_profiler");
        $__internal_250d5801772299c28931bb86f98255aac961cbb6dd653d085bcfe6db6eefa338->enter($__internal_250d5801772299c28931bb86f98255aac961cbb6dd653d085bcfe6db6eefa338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_250d5801772299c28931bb86f98255aac961cbb6dd653d085bcfe6db6eefa338->leave($__internal_250d5801772299c28931bb86f98255aac961cbb6dd653d085bcfe6db6eefa338_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_ef028ede29ffedc7b9e89629385e8c925ce17b7c0671d949b47a70e19b286d00 = $this->env->getExtension("native_profiler");
        $__internal_ef028ede29ffedc7b9e89629385e8c925ce17b7c0671d949b47a70e19b286d00->enter($__internal_ef028ede29ffedc7b9e89629385e8c925ce17b7c0671d949b47a70e19b286d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_ef028ede29ffedc7b9e89629385e8c925ce17b7c0671d949b47a70e19b286d00->leave($__internal_ef028ede29ffedc7b9e89629385e8c925ce17b7c0671d949b47a70e19b286d00_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_67dcc345f127f8578ec272122db286daec1602fd8a3d07624c31cfce97448b6d = $this->env->getExtension("native_profiler");
        $__internal_67dcc345f127f8578ec272122db286daec1602fd8a3d07624c31cfce97448b6d->enter($__internal_67dcc345f127f8578ec272122db286daec1602fd8a3d07624c31cfce97448b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_67dcc345f127f8578ec272122db286daec1602fd8a3d07624c31cfce97448b6d->leave($__internal_67dcc345f127f8578ec272122db286daec1602fd8a3d07624c31cfce97448b6d_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
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
