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
        $__internal_538bd870fc4888b0a5094d5dcf717ea6d8798659029b8f908c0cba285445160a = $this->env->getExtension("native_profiler");
        $__internal_538bd870fc4888b0a5094d5dcf717ea6d8798659029b8f908c0cba285445160a->enter($__internal_538bd870fc4888b0a5094d5dcf717ea6d8798659029b8f908c0cba285445160a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_538bd870fc4888b0a5094d5dcf717ea6d8798659029b8f908c0cba285445160a->leave($__internal_538bd870fc4888b0a5094d5dcf717ea6d8798659029b8f908c0cba285445160a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_53aeddb3f0135a8f39385fb080122f13e20ff58d89989557dfbba988c4b0e2f8 = $this->env->getExtension("native_profiler");
        $__internal_53aeddb3f0135a8f39385fb080122f13e20ff58d89989557dfbba988c4b0e2f8->enter($__internal_53aeddb3f0135a8f39385fb080122f13e20ff58d89989557dfbba988c4b0e2f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_53aeddb3f0135a8f39385fb080122f13e20ff58d89989557dfbba988c4b0e2f8->leave($__internal_53aeddb3f0135a8f39385fb080122f13e20ff58d89989557dfbba988c4b0e2f8_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2ccb963a2cd00581b0c7de0ec33436134d983ee1683695dfbbc2f43c07a4bb04 = $this->env->getExtension("native_profiler");
        $__internal_2ccb963a2cd00581b0c7de0ec33436134d983ee1683695dfbbc2f43c07a4bb04->enter($__internal_2ccb963a2cd00581b0c7de0ec33436134d983ee1683695dfbbc2f43c07a4bb04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_2ccb963a2cd00581b0c7de0ec33436134d983ee1683695dfbbc2f43c07a4bb04->leave($__internal_2ccb963a2cd00581b0c7de0ec33436134d983ee1683695dfbbc2f43c07a4bb04_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_35b5996797f31cb7486c5fb62f6feb810fff035fcba5baa1286376be07b039d3 = $this->env->getExtension("native_profiler");
        $__internal_35b5996797f31cb7486c5fb62f6feb810fff035fcba5baa1286376be07b039d3->enter($__internal_35b5996797f31cb7486c5fb62f6feb810fff035fcba5baa1286376be07b039d3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_35b5996797f31cb7486c5fb62f6feb810fff035fcba5baa1286376be07b039d3->leave($__internal_35b5996797f31cb7486c5fb62f6feb810fff035fcba5baa1286376be07b039d3_prof);

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
