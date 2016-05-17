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
        $__internal_c6ea02a4f16f5fec62088869ab847aa44128102f93cd0b464ccc38c1f065348b = $this->env->getExtension("native_profiler");
        $__internal_c6ea02a4f16f5fec62088869ab847aa44128102f93cd0b464ccc38c1f065348b->enter($__internal_c6ea02a4f16f5fec62088869ab847aa44128102f93cd0b464ccc38c1f065348b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c6ea02a4f16f5fec62088869ab847aa44128102f93cd0b464ccc38c1f065348b->leave($__internal_c6ea02a4f16f5fec62088869ab847aa44128102f93cd0b464ccc38c1f065348b_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0695532133e840def3e6e27cac518a81e57e9eacd011fef687dd4f6c1ea0617c = $this->env->getExtension("native_profiler");
        $__internal_0695532133e840def3e6e27cac518a81e57e9eacd011fef687dd4f6c1ea0617c->enter($__internal_0695532133e840def3e6e27cac518a81e57e9eacd011fef687dd4f6c1ea0617c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0695532133e840def3e6e27cac518a81e57e9eacd011fef687dd4f6c1ea0617c->leave($__internal_0695532133e840def3e6e27cac518a81e57e9eacd011fef687dd4f6c1ea0617c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_effbc90eb89538179b1d87e54c21c38a959a259b155457581d39769895ebb7bc = $this->env->getExtension("native_profiler");
        $__internal_effbc90eb89538179b1d87e54c21c38a959a259b155457581d39769895ebb7bc->enter($__internal_effbc90eb89538179b1d87e54c21c38a959a259b155457581d39769895ebb7bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_effbc90eb89538179b1d87e54c21c38a959a259b155457581d39769895ebb7bc->leave($__internal_effbc90eb89538179b1d87e54c21c38a959a259b155457581d39769895ebb7bc_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a1cc69a2e2450cabdddc40ea480ba8d78921f7b53c853fa0fd52c32ee85acdc = $this->env->getExtension("native_profiler");
        $__internal_2a1cc69a2e2450cabdddc40ea480ba8d78921f7b53c853fa0fd52c32ee85acdc->enter($__internal_2a1cc69a2e2450cabdddc40ea480ba8d78921f7b53c853fa0fd52c32ee85acdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2a1cc69a2e2450cabdddc40ea480ba8d78921f7b53c853fa0fd52c32ee85acdc->leave($__internal_2a1cc69a2e2450cabdddc40ea480ba8d78921f7b53c853fa0fd52c32ee85acdc_prof);

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
