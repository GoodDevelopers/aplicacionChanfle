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
        $__internal_395bbd12bb056080d5592c5ae1211260513d324ac9d1f510496eef4547271a4f = $this->env->getExtension("native_profiler");
        $__internal_395bbd12bb056080d5592c5ae1211260513d324ac9d1f510496eef4547271a4f->enter($__internal_395bbd12bb056080d5592c5ae1211260513d324ac9d1f510496eef4547271a4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_395bbd12bb056080d5592c5ae1211260513d324ac9d1f510496eef4547271a4f->leave($__internal_395bbd12bb056080d5592c5ae1211260513d324ac9d1f510496eef4547271a4f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_d2b7819674d4b7a8ea49f18f7d38003d6adf77446bc5e3935dfb920c74f52db3 = $this->env->getExtension("native_profiler");
        $__internal_d2b7819674d4b7a8ea49f18f7d38003d6adf77446bc5e3935dfb920c74f52db3->enter($__internal_d2b7819674d4b7a8ea49f18f7d38003d6adf77446bc5e3935dfb920c74f52db3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_d2b7819674d4b7a8ea49f18f7d38003d6adf77446bc5e3935dfb920c74f52db3->leave($__internal_d2b7819674d4b7a8ea49f18f7d38003d6adf77446bc5e3935dfb920c74f52db3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f65dc8c7e2ee08301e851b6bd070d68a600e4b924c2ac85c12913eeab18821ef = $this->env->getExtension("native_profiler");
        $__internal_f65dc8c7e2ee08301e851b6bd070d68a600e4b924c2ac85c12913eeab18821ef->enter($__internal_f65dc8c7e2ee08301e851b6bd070d68a600e4b924c2ac85c12913eeab18821ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f65dc8c7e2ee08301e851b6bd070d68a600e4b924c2ac85c12913eeab18821ef->leave($__internal_f65dc8c7e2ee08301e851b6bd070d68a600e4b924c2ac85c12913eeab18821ef_prof);

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
