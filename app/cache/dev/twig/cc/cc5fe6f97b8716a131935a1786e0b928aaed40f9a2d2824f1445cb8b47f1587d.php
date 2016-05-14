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
        $__internal_44a2b0d37a1ad571e222b4a79026f047d6d10e31e0e2b344d73f6275ce70eeaf = $this->env->getExtension("native_profiler");
        $__internal_44a2b0d37a1ad571e222b4a79026f047d6d10e31e0e2b344d73f6275ce70eeaf->enter($__internal_44a2b0d37a1ad571e222b4a79026f047d6d10e31e0e2b344d73f6275ce70eeaf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_44a2b0d37a1ad571e222b4a79026f047d6d10e31e0e2b344d73f6275ce70eeaf->leave($__internal_44a2b0d37a1ad571e222b4a79026f047d6d10e31e0e2b344d73f6275ce70eeaf_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_311f15801ba6328e45936855e114baeef09ad706b551027b5cf95d7c3609bf04 = $this->env->getExtension("native_profiler");
        $__internal_311f15801ba6328e45936855e114baeef09ad706b551027b5cf95d7c3609bf04->enter($__internal_311f15801ba6328e45936855e114baeef09ad706b551027b5cf95d7c3609bf04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_311f15801ba6328e45936855e114baeef09ad706b551027b5cf95d7c3609bf04->leave($__internal_311f15801ba6328e45936855e114baeef09ad706b551027b5cf95d7c3609bf04_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25ef034a9184f8ff04bc2c8dba0b456730d865741e78f3e52985f78e1069b557 = $this->env->getExtension("native_profiler");
        $__internal_25ef034a9184f8ff04bc2c8dba0b456730d865741e78f3e52985f78e1069b557->enter($__internal_25ef034a9184f8ff04bc2c8dba0b456730d865741e78f3e52985f78e1069b557_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25ef034a9184f8ff04bc2c8dba0b456730d865741e78f3e52985f78e1069b557->leave($__internal_25ef034a9184f8ff04bc2c8dba0b456730d865741e78f3e52985f78e1069b557_prof);

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
