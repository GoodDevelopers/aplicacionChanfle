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
        $__internal_a447488481437ec37eaff4a9128c8408bd353ff69c5ea1c87540f8877e735563 = $this->env->getExtension("native_profiler");
        $__internal_a447488481437ec37eaff4a9128c8408bd353ff69c5ea1c87540f8877e735563->enter($__internal_a447488481437ec37eaff4a9128c8408bd353ff69c5ea1c87540f8877e735563_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a447488481437ec37eaff4a9128c8408bd353ff69c5ea1c87540f8877e735563->leave($__internal_a447488481437ec37eaff4a9128c8408bd353ff69c5ea1c87540f8877e735563_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_77b060bf2763e5f70d9deb5e0cd545fd2cf29a25806455b414beac4149e91ba6 = $this->env->getExtension("native_profiler");
        $__internal_77b060bf2763e5f70d9deb5e0cd545fd2cf29a25806455b414beac4149e91ba6->enter($__internal_77b060bf2763e5f70d9deb5e0cd545fd2cf29a25806455b414beac4149e91ba6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_77b060bf2763e5f70d9deb5e0cd545fd2cf29a25806455b414beac4149e91ba6->leave($__internal_77b060bf2763e5f70d9deb5e0cd545fd2cf29a25806455b414beac4149e91ba6_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_f7efd06a55acbc0efcb25dbccd32197e47dcf2cdb949060bbcc0beb455a1c8bd = $this->env->getExtension("native_profiler");
        $__internal_f7efd06a55acbc0efcb25dbccd32197e47dcf2cdb949060bbcc0beb455a1c8bd->enter($__internal_f7efd06a55acbc0efcb25dbccd32197e47dcf2cdb949060bbcc0beb455a1c8bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_f7efd06a55acbc0efcb25dbccd32197e47dcf2cdb949060bbcc0beb455a1c8bd->leave($__internal_f7efd06a55acbc0efcb25dbccd32197e47dcf2cdb949060bbcc0beb455a1c8bd_prof);

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
