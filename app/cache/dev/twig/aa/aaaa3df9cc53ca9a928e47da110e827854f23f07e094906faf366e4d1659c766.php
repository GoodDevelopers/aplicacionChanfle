<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_2762bd8fdf17344c5dd9e8a3a969b33404da189e03675a142f90a4e8fcafa22e extends Twig_Template
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
        $__internal_80e318a5d0d684a140fff739aa7c60bfb30e6f464d018a6420af051929f04b26 = $this->env->getExtension("native_profiler");
        $__internal_80e318a5d0d684a140fff739aa7c60bfb30e6f464d018a6420af051929f04b26->enter($__internal_80e318a5d0d684a140fff739aa7c60bfb30e6f464d018a6420af051929f04b26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_80e318a5d0d684a140fff739aa7c60bfb30e6f464d018a6420af051929f04b26->leave($__internal_80e318a5d0d684a140fff739aa7c60bfb30e6f464d018a6420af051929f04b26_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_406924d82404c9b8394bd9b07a2290a99e27d4245c9c6be6ac11a13ce918c2cb = $this->env->getExtension("native_profiler");
        $__internal_406924d82404c9b8394bd9b07a2290a99e27d4245c9c6be6ac11a13ce918c2cb->enter($__internal_406924d82404c9b8394bd9b07a2290a99e27d4245c9c6be6ac11a13ce918c2cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_406924d82404c9b8394bd9b07a2290a99e27d4245c9c6be6ac11a13ce918c2cb->leave($__internal_406924d82404c9b8394bd9b07a2290a99e27d4245c9c6be6ac11a13ce918c2cb_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_eb45d2aa8eb3c7b2d19e6b140917bfed02c22568fc6428ebb167ca012815bb8c = $this->env->getExtension("native_profiler");
        $__internal_eb45d2aa8eb3c7b2d19e6b140917bfed02c22568fc6428ebb167ca012815bb8c->enter($__internal_eb45d2aa8eb3c7b2d19e6b140917bfed02c22568fc6428ebb167ca012815bb8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_eb45d2aa8eb3c7b2d19e6b140917bfed02c22568fc6428ebb167ca012815bb8c->leave($__internal_eb45d2aa8eb3c7b2d19e6b140917bfed02c22568fc6428ebb167ca012815bb8c_prof);

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
