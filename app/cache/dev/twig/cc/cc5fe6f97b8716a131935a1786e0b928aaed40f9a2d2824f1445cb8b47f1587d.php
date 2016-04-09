<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_7d40229660de0f58ef85eba37f256dbaeb1f4779ac484527e58f49bd0f2d7691 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_02e0d38626104ada1001a6eafbbc34085b180d8a26d21960b48a3ed1d44273c8 = $this->env->getExtension("native_profiler");
        $__internal_02e0d38626104ada1001a6eafbbc34085b180d8a26d21960b48a3ed1d44273c8->enter($__internal_02e0d38626104ada1001a6eafbbc34085b180d8a26d21960b48a3ed1d44273c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_02e0d38626104ada1001a6eafbbc34085b180d8a26d21960b48a3ed1d44273c8->leave($__internal_02e0d38626104ada1001a6eafbbc34085b180d8a26d21960b48a3ed1d44273c8_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_716419dcc5bec287aab50f5d7b013e3b00f9f848f2d23714a5b0c480b6b60a4b = $this->env->getExtension("native_profiler");
        $__internal_716419dcc5bec287aab50f5d7b013e3b00f9f848f2d23714a5b0c480b6b60a4b->enter($__internal_716419dcc5bec287aab50f5d7b013e3b00f9f848f2d23714a5b0c480b6b60a4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_716419dcc5bec287aab50f5d7b013e3b00f9f848f2d23714a5b0c480b6b60a4b->leave($__internal_716419dcc5bec287aab50f5d7b013e3b00f9f848f2d23714a5b0c480b6b60a4b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_0df407697ec8e41fd910b980d593528c87ffca2256fd37db690442b7a99d3ba6 = $this->env->getExtension("native_profiler");
        $__internal_0df407697ec8e41fd910b980d593528c87ffca2256fd37db690442b7a99d3ba6->enter($__internal_0df407697ec8e41fd910b980d593528c87ffca2256fd37db690442b7a99d3ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_0df407697ec8e41fd910b980d593528c87ffca2256fd37db690442b7a99d3ba6->leave($__internal_0df407697ec8e41fd910b980d593528c87ffca2256fd37db690442b7a99d3ba6_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
