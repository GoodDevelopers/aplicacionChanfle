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
        $__internal_bdbecb8da75471d853f87bff554c467a335756d52009361ea10795c3c4cd353e = $this->env->getExtension("native_profiler");
        $__internal_bdbecb8da75471d853f87bff554c467a335756d52009361ea10795c3c4cd353e->enter($__internal_bdbecb8da75471d853f87bff554c467a335756d52009361ea10795c3c4cd353e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bdbecb8da75471d853f87bff554c467a335756d52009361ea10795c3c4cd353e->leave($__internal_bdbecb8da75471d853f87bff554c467a335756d52009361ea10795c3c4cd353e_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a6bb814b7c87ab240a279f5e2a3a541bf4319450e18b86da84c00e1c1ca27d71 = $this->env->getExtension("native_profiler");
        $__internal_a6bb814b7c87ab240a279f5e2a3a541bf4319450e18b86da84c00e1c1ca27d71->enter($__internal_a6bb814b7c87ab240a279f5e2a3a541bf4319450e18b86da84c00e1c1ca27d71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_a6bb814b7c87ab240a279f5e2a3a541bf4319450e18b86da84c00e1c1ca27d71->leave($__internal_a6bb814b7c87ab240a279f5e2a3a541bf4319450e18b86da84c00e1c1ca27d71_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_cba789df85177f0ddb0ee162d47a2e4e96519e5b726c13c8ec5bfb1d826f67f3 = $this->env->getExtension("native_profiler");
        $__internal_cba789df85177f0ddb0ee162d47a2e4e96519e5b726c13c8ec5bfb1d826f67f3->enter($__internal_cba789df85177f0ddb0ee162d47a2e4e96519e5b726c13c8ec5bfb1d826f67f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_cba789df85177f0ddb0ee162d47a2e4e96519e5b726c13c8ec5bfb1d826f67f3->leave($__internal_cba789df85177f0ddb0ee162d47a2e4e96519e5b726c13c8ec5bfb1d826f67f3_prof);

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
