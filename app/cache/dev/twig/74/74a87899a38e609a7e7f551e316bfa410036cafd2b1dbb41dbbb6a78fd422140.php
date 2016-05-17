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
        $__internal_c322cce765415213f53b2850db89e06687670a1931201279df32d541851c4507 = $this->env->getExtension("native_profiler");
        $__internal_c322cce765415213f53b2850db89e06687670a1931201279df32d541851c4507->enter($__internal_c322cce765415213f53b2850db89e06687670a1931201279df32d541851c4507_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c322cce765415213f53b2850db89e06687670a1931201279df32d541851c4507->leave($__internal_c322cce765415213f53b2850db89e06687670a1931201279df32d541851c4507_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_12cc9e25b68de856a3e46c222cd3e5be782cb61e6848475b726199e0ecafde90 = $this->env->getExtension("native_profiler");
        $__internal_12cc9e25b68de856a3e46c222cd3e5be782cb61e6848475b726199e0ecafde90->enter($__internal_12cc9e25b68de856a3e46c222cd3e5be782cb61e6848475b726199e0ecafde90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_12cc9e25b68de856a3e46c222cd3e5be782cb61e6848475b726199e0ecafde90->leave($__internal_12cc9e25b68de856a3e46c222cd3e5be782cb61e6848475b726199e0ecafde90_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_17bdd102d26ecfffa75ef241f67f31efc610479848c63a78060480feb0814c5b = $this->env->getExtension("native_profiler");
        $__internal_17bdd102d26ecfffa75ef241f67f31efc610479848c63a78060480feb0814c5b->enter($__internal_17bdd102d26ecfffa75ef241f67f31efc610479848c63a78060480feb0814c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_17bdd102d26ecfffa75ef241f67f31efc610479848c63a78060480feb0814c5b->leave($__internal_17bdd102d26ecfffa75ef241f67f31efc610479848c63a78060480feb0814c5b_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_634119b01e8524ec6f7d6ecc5a30c66b517435e7a16f99ea6aa96b55b889e5df = $this->env->getExtension("native_profiler");
        $__internal_634119b01e8524ec6f7d6ecc5a30c66b517435e7a16f99ea6aa96b55b889e5df->enter($__internal_634119b01e8524ec6f7d6ecc5a30c66b517435e7a16f99ea6aa96b55b889e5df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_634119b01e8524ec6f7d6ecc5a30c66b517435e7a16f99ea6aa96b55b889e5df->leave($__internal_634119b01e8524ec6f7d6ecc5a30c66b517435e7a16f99ea6aa96b55b889e5df_prof);

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
