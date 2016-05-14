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
        $__internal_44ac0683ec7cc53a6fc087218f285187d763063870cf6396ae4d9a4f97862cc5 = $this->env->getExtension("native_profiler");
        $__internal_44ac0683ec7cc53a6fc087218f285187d763063870cf6396ae4d9a4f97862cc5->enter($__internal_44ac0683ec7cc53a6fc087218f285187d763063870cf6396ae4d9a4f97862cc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44ac0683ec7cc53a6fc087218f285187d763063870cf6396ae4d9a4f97862cc5->leave($__internal_44ac0683ec7cc53a6fc087218f285187d763063870cf6396ae4d9a4f97862cc5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_0bd6415a9d4d4c8d123cfb76e1105d5645f14a1bc5f226521d84fd0a1f98c11e = $this->env->getExtension("native_profiler");
        $__internal_0bd6415a9d4d4c8d123cfb76e1105d5645f14a1bc5f226521d84fd0a1f98c11e->enter($__internal_0bd6415a9d4d4c8d123cfb76e1105d5645f14a1bc5f226521d84fd0a1f98c11e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_0bd6415a9d4d4c8d123cfb76e1105d5645f14a1bc5f226521d84fd0a1f98c11e->leave($__internal_0bd6415a9d4d4c8d123cfb76e1105d5645f14a1bc5f226521d84fd0a1f98c11e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_8cb32d95d13050ca3bd09fbee7893597ff609fbb58824193855369c2bdec9efe = $this->env->getExtension("native_profiler");
        $__internal_8cb32d95d13050ca3bd09fbee7893597ff609fbb58824193855369c2bdec9efe->enter($__internal_8cb32d95d13050ca3bd09fbee7893597ff609fbb58824193855369c2bdec9efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_8cb32d95d13050ca3bd09fbee7893597ff609fbb58824193855369c2bdec9efe->leave($__internal_8cb32d95d13050ca3bd09fbee7893597ff609fbb58824193855369c2bdec9efe_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_e60fb2b2770212fc96055f3902ee8e122ed3794a5c4d62151e0894d4e018fa81 = $this->env->getExtension("native_profiler");
        $__internal_e60fb2b2770212fc96055f3902ee8e122ed3794a5c4d62151e0894d4e018fa81->enter($__internal_e60fb2b2770212fc96055f3902ee8e122ed3794a5c4d62151e0894d4e018fa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_e60fb2b2770212fc96055f3902ee8e122ed3794a5c4d62151e0894d4e018fa81->leave($__internal_e60fb2b2770212fc96055f3902ee8e122ed3794a5c4d62151e0894d4e018fa81_prof);

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
