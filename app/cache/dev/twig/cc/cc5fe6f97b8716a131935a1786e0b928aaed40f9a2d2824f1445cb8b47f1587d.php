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
        $__internal_6f2c4c4db5c91a573f4792cb5a8801f00534f91ac989b0404f589d90c420a354 = $this->env->getExtension("native_profiler");
        $__internal_6f2c4c4db5c91a573f4792cb5a8801f00534f91ac989b0404f589d90c420a354->enter($__internal_6f2c4c4db5c91a573f4792cb5a8801f00534f91ac989b0404f589d90c420a354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6f2c4c4db5c91a573f4792cb5a8801f00534f91ac989b0404f589d90c420a354->leave($__internal_6f2c4c4db5c91a573f4792cb5a8801f00534f91ac989b0404f589d90c420a354_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_211a6baed6fcee8e993031a08dd38c3eba166676693ccbcbbd7981b5a40032ef = $this->env->getExtension("native_profiler");
        $__internal_211a6baed6fcee8e993031a08dd38c3eba166676693ccbcbbd7981b5a40032ef->enter($__internal_211a6baed6fcee8e993031a08dd38c3eba166676693ccbcbbd7981b5a40032ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_211a6baed6fcee8e993031a08dd38c3eba166676693ccbcbbd7981b5a40032ef->leave($__internal_211a6baed6fcee8e993031a08dd38c3eba166676693ccbcbbd7981b5a40032ef_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f05e2386033895f75411a75a1cfd569b7ad204ecdbc427f7be77d88e5921a247 = $this->env->getExtension("native_profiler");
        $__internal_f05e2386033895f75411a75a1cfd569b7ad204ecdbc427f7be77d88e5921a247->enter($__internal_f05e2386033895f75411a75a1cfd569b7ad204ecdbc427f7be77d88e5921a247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f05e2386033895f75411a75a1cfd569b7ad204ecdbc427f7be77d88e5921a247->leave($__internal_f05e2386033895f75411a75a1cfd569b7ad204ecdbc427f7be77d88e5921a247_prof);

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
