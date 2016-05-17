<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_b85fe66a419fdf0d1bc0a0e6cb61aa1160878845b4c5e2b1b9433ac67f612612 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_f0000cbdb6c98f6c88af989934741e2777a2f403bc0d2a71dcb9653c8ad682f0 = $this->env->getExtension("native_profiler");
        $__internal_f0000cbdb6c98f6c88af989934741e2777a2f403bc0d2a71dcb9653c8ad682f0->enter($__internal_f0000cbdb6c98f6c88af989934741e2777a2f403bc0d2a71dcb9653c8ad682f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f0000cbdb6c98f6c88af989934741e2777a2f403bc0d2a71dcb9653c8ad682f0->leave($__internal_f0000cbdb6c98f6c88af989934741e2777a2f403bc0d2a71dcb9653c8ad682f0_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_7bb936e0ef209680f48d628007d9f738600dc3ad335dacace5ee82142ba49c66 = $this->env->getExtension("native_profiler");
        $__internal_7bb936e0ef209680f48d628007d9f738600dc3ad335dacace5ee82142ba49c66->enter($__internal_7bb936e0ef209680f48d628007d9f738600dc3ad335dacace5ee82142ba49c66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_7bb936e0ef209680f48d628007d9f738600dc3ad335dacace5ee82142ba49c66->leave($__internal_7bb936e0ef209680f48d628007d9f738600dc3ad335dacace5ee82142ba49c66_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_755b04189c21cbdbeee88c8888e0648f11804e21e1d04c61022771b7e56db7af = $this->env->getExtension("native_profiler");
        $__internal_755b04189c21cbdbeee88c8888e0648f11804e21e1d04c61022771b7e56db7af->enter($__internal_755b04189c21cbdbeee88c8888e0648f11804e21e1d04c61022771b7e56db7af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_755b04189c21cbdbeee88c8888e0648f11804e21e1d04c61022771b7e56db7af->leave($__internal_755b04189c21cbdbeee88c8888e0648f11804e21e1d04c61022771b7e56db7af_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
