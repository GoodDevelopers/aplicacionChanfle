<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_f6d1a6e49e057d870b11dcb9be2345461d7eca61bce38c3a14c55f4c55e3a212 extends Twig_Template
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
        $__internal_7bf43fd2ce6b63b277badd9b343322bf8e764878c9455b92afb736eb6770e5d2 = $this->env->getExtension("native_profiler");
        $__internal_7bf43fd2ce6b63b277badd9b343322bf8e764878c9455b92afb736eb6770e5d2->enter($__internal_7bf43fd2ce6b63b277badd9b343322bf8e764878c9455b92afb736eb6770e5d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7bf43fd2ce6b63b277badd9b343322bf8e764878c9455b92afb736eb6770e5d2->leave($__internal_7bf43fd2ce6b63b277badd9b343322bf8e764878c9455b92afb736eb6770e5d2_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_88157ce0b12ae8adff58af867e0a370447913f58c20d2910ed03b0eed437980e = $this->env->getExtension("native_profiler");
        $__internal_88157ce0b12ae8adff58af867e0a370447913f58c20d2910ed03b0eed437980e->enter($__internal_88157ce0b12ae8adff58af867e0a370447913f58c20d2910ed03b0eed437980e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_88157ce0b12ae8adff58af867e0a370447913f58c20d2910ed03b0eed437980e->leave($__internal_88157ce0b12ae8adff58af867e0a370447913f58c20d2910ed03b0eed437980e_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7b41a66a8283b94f21c746a7b576655906b822fb5791619e950b357e2e18bbda = $this->env->getExtension("native_profiler");
        $__internal_7b41a66a8283b94f21c746a7b576655906b822fb5791619e950b357e2e18bbda->enter($__internal_7b41a66a8283b94f21c746a7b576655906b822fb5791619e950b357e2e18bbda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7b41a66a8283b94f21c746a7b576655906b822fb5791619e950b357e2e18bbda->leave($__internal_7b41a66a8283b94f21c746a7b576655906b822fb5791619e950b357e2e18bbda_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_32f942e9c270f6d5fd64fe328dabc296f124eee88d207afab09be9e2468d81ef = $this->env->getExtension("native_profiler");
        $__internal_32f942e9c270f6d5fd64fe328dabc296f124eee88d207afab09be9e2468d81ef->enter($__internal_32f942e9c270f6d5fd64fe328dabc296f124eee88d207afab09be9e2468d81ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_32f942e9c270f6d5fd64fe328dabc296f124eee88d207afab09be9e2468d81ef->leave($__internal_32f942e9c270f6d5fd64fe328dabc296f124eee88d207afab09be9e2468d81ef_prof);

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
