<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_15954ff74e6fe764bb4e12f6dcf51d98e2910b372fcfd6c3538889a223a49cc5 extends Twig_Template
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
        $__internal_14c6157eda5457b29a797598f2d51dd4cb390af7f151d499004b329d2e4d2b28 = $this->env->getExtension("native_profiler");
        $__internal_14c6157eda5457b29a797598f2d51dd4cb390af7f151d499004b329d2e4d2b28->enter($__internal_14c6157eda5457b29a797598f2d51dd4cb390af7f151d499004b329d2e4d2b28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_14c6157eda5457b29a797598f2d51dd4cb390af7f151d499004b329d2e4d2b28->leave($__internal_14c6157eda5457b29a797598f2d51dd4cb390af7f151d499004b329d2e4d2b28_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0dd9b51b9c8aa191012ee52bc03045df378cea9c88e80abe05b72be31fd97d0c = $this->env->getExtension("native_profiler");
        $__internal_0dd9b51b9c8aa191012ee52bc03045df378cea9c88e80abe05b72be31fd97d0c->enter($__internal_0dd9b51b9c8aa191012ee52bc03045df378cea9c88e80abe05b72be31fd97d0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0dd9b51b9c8aa191012ee52bc03045df378cea9c88e80abe05b72be31fd97d0c->leave($__internal_0dd9b51b9c8aa191012ee52bc03045df378cea9c88e80abe05b72be31fd97d0c_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_25bed8e3f1086b6fbc9b02966e476d830952bae073d563c28b1de8c891e15518 = $this->env->getExtension("native_profiler");
        $__internal_25bed8e3f1086b6fbc9b02966e476d830952bae073d563c28b1de8c891e15518->enter($__internal_25bed8e3f1086b6fbc9b02966e476d830952bae073d563c28b1de8c891e15518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_25bed8e3f1086b6fbc9b02966e476d830952bae073d563c28b1de8c891e15518->leave($__internal_25bed8e3f1086b6fbc9b02966e476d830952bae073d563c28b1de8c891e15518_prof);

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
