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
        $__internal_34cd0f22025bf6626258f8940d5be32f258072ce3b031ba05c479c23c811234e = $this->env->getExtension("native_profiler");
        $__internal_34cd0f22025bf6626258f8940d5be32f258072ce3b031ba05c479c23c811234e->enter($__internal_34cd0f22025bf6626258f8940d5be32f258072ce3b031ba05c479c23c811234e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34cd0f22025bf6626258f8940d5be32f258072ce3b031ba05c479c23c811234e->leave($__internal_34cd0f22025bf6626258f8940d5be32f258072ce3b031ba05c479c23c811234e_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_62a7db226704125f8619e0996c99e4a14e161117f6ef2f37a2626ae768853c89 = $this->env->getExtension("native_profiler");
        $__internal_62a7db226704125f8619e0996c99e4a14e161117f6ef2f37a2626ae768853c89->enter($__internal_62a7db226704125f8619e0996c99e4a14e161117f6ef2f37a2626ae768853c89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_62a7db226704125f8619e0996c99e4a14e161117f6ef2f37a2626ae768853c89->leave($__internal_62a7db226704125f8619e0996c99e4a14e161117f6ef2f37a2626ae768853c89_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_34f02c302676ab31c12ceb238aa3475d88655d4dca1717b80c36186b84723383 = $this->env->getExtension("native_profiler");
        $__internal_34f02c302676ab31c12ceb238aa3475d88655d4dca1717b80c36186b84723383->enter($__internal_34f02c302676ab31c12ceb238aa3475d88655d4dca1717b80c36186b84723383_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_34f02c302676ab31c12ceb238aa3475d88655d4dca1717b80c36186b84723383->leave($__internal_34f02c302676ab31c12ceb238aa3475d88655d4dca1717b80c36186b84723383_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_3d07087a00d9acd63779530f7bc186edfaef83b0554ed1ef73ce71c931adba19 = $this->env->getExtension("native_profiler");
        $__internal_3d07087a00d9acd63779530f7bc186edfaef83b0554ed1ef73ce71c931adba19->enter($__internal_3d07087a00d9acd63779530f7bc186edfaef83b0554ed1ef73ce71c931adba19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_3d07087a00d9acd63779530f7bc186edfaef83b0554ed1ef73ce71c931adba19->leave($__internal_3d07087a00d9acd63779530f7bc186edfaef83b0554ed1ef73ce71c931adba19_prof);

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
