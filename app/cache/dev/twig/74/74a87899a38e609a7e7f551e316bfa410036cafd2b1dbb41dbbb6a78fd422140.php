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
        $__internal_68be83e28f4e29961c00c4426fb9aec6f457a2a4cebb3aef932122b915e67165 = $this->env->getExtension("native_profiler");
        $__internal_68be83e28f4e29961c00c4426fb9aec6f457a2a4cebb3aef932122b915e67165->enter($__internal_68be83e28f4e29961c00c4426fb9aec6f457a2a4cebb3aef932122b915e67165_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_68be83e28f4e29961c00c4426fb9aec6f457a2a4cebb3aef932122b915e67165->leave($__internal_68be83e28f4e29961c00c4426fb9aec6f457a2a4cebb3aef932122b915e67165_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_fba6a342dfa0d96f5e02d033fadb30ee16829cfddb62fc3730786da985ab567a = $this->env->getExtension("native_profiler");
        $__internal_fba6a342dfa0d96f5e02d033fadb30ee16829cfddb62fc3730786da985ab567a->enter($__internal_fba6a342dfa0d96f5e02d033fadb30ee16829cfddb62fc3730786da985ab567a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_fba6a342dfa0d96f5e02d033fadb30ee16829cfddb62fc3730786da985ab567a->leave($__internal_fba6a342dfa0d96f5e02d033fadb30ee16829cfddb62fc3730786da985ab567a_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_180e3b8c231c443454ea862fa4b86ea21996ef6b281a2352f35634c5c2c65882 = $this->env->getExtension("native_profiler");
        $__internal_180e3b8c231c443454ea862fa4b86ea21996ef6b281a2352f35634c5c2c65882->enter($__internal_180e3b8c231c443454ea862fa4b86ea21996ef6b281a2352f35634c5c2c65882_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_180e3b8c231c443454ea862fa4b86ea21996ef6b281a2352f35634c5c2c65882->leave($__internal_180e3b8c231c443454ea862fa4b86ea21996ef6b281a2352f35634c5c2c65882_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d3d0d8a19ad4b7af0c897c38ca5ad9650c37ea2b2e5ed5ce8769ef3d1c208c34 = $this->env->getExtension("native_profiler");
        $__internal_d3d0d8a19ad4b7af0c897c38ca5ad9650c37ea2b2e5ed5ce8769ef3d1c208c34->enter($__internal_d3d0d8a19ad4b7af0c897c38ca5ad9650c37ea2b2e5ed5ce8769ef3d1c208c34_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d3d0d8a19ad4b7af0c897c38ca5ad9650c37ea2b2e5ed5ce8769ef3d1c208c34->leave($__internal_d3d0d8a19ad4b7af0c897c38ca5ad9650c37ea2b2e5ed5ce8769ef3d1c208c34_prof);

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
