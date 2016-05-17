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
        $__internal_d42706e5fccbaaf87a736b176426b39f661f1708a9d4e6daf25ef9e0993d3e82 = $this->env->getExtension("native_profiler");
        $__internal_d42706e5fccbaaf87a736b176426b39f661f1708a9d4e6daf25ef9e0993d3e82->enter($__internal_d42706e5fccbaaf87a736b176426b39f661f1708a9d4e6daf25ef9e0993d3e82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d42706e5fccbaaf87a736b176426b39f661f1708a9d4e6daf25ef9e0993d3e82->leave($__internal_d42706e5fccbaaf87a736b176426b39f661f1708a9d4e6daf25ef9e0993d3e82_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_3af7d76a8131ddfb8d62b8b6f748e7e330c072454ed6643ae8e8dc85d771d3f4 = $this->env->getExtension("native_profiler");
        $__internal_3af7d76a8131ddfb8d62b8b6f748e7e330c072454ed6643ae8e8dc85d771d3f4->enter($__internal_3af7d76a8131ddfb8d62b8b6f748e7e330c072454ed6643ae8e8dc85d771d3f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_3af7d76a8131ddfb8d62b8b6f748e7e330c072454ed6643ae8e8dc85d771d3f4->leave($__internal_3af7d76a8131ddfb8d62b8b6f748e7e330c072454ed6643ae8e8dc85d771d3f4_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_3893c65ee3e241f89e9f94a192ea3a04ca3cb633e67607898f95509222920c68 = $this->env->getExtension("native_profiler");
        $__internal_3893c65ee3e241f89e9f94a192ea3a04ca3cb633e67607898f95509222920c68->enter($__internal_3893c65ee3e241f89e9f94a192ea3a04ca3cb633e67607898f95509222920c68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_3893c65ee3e241f89e9f94a192ea3a04ca3cb633e67607898f95509222920c68->leave($__internal_3893c65ee3e241f89e9f94a192ea3a04ca3cb633e67607898f95509222920c68_prof);

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
