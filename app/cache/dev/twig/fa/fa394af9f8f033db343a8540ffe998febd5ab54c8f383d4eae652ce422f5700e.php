<?php

/* base.html.twig */
class __TwigTemplate_333aa9fce1da284636c3b28f9ec34add94b5b6eefabeb706dcb1d0ffbc3847d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19074c5e06ed2960820aec2ea8c701ee6be5b3c5eb88e437907cfcc68d433ba8 = $this->env->getExtension("native_profiler");
        $__internal_19074c5e06ed2960820aec2ea8c701ee6be5b3c5eb88e437907cfcc68d433ba8->enter($__internal_19074c5e06ed2960820aec2ea8c701ee6be5b3c5eb88e437907cfcc68d433ba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_19074c5e06ed2960820aec2ea8c701ee6be5b3c5eb88e437907cfcc68d433ba8->leave($__internal_19074c5e06ed2960820aec2ea8c701ee6be5b3c5eb88e437907cfcc68d433ba8_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_e16b460de4432a950e268bc7a371c4a3092fe214a926478e69dda0b2e47fdb56 = $this->env->getExtension("native_profiler");
        $__internal_e16b460de4432a950e268bc7a371c4a3092fe214a926478e69dda0b2e47fdb56->enter($__internal_e16b460de4432a950e268bc7a371c4a3092fe214a926478e69dda0b2e47fdb56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_e16b460de4432a950e268bc7a371c4a3092fe214a926478e69dda0b2e47fdb56->leave($__internal_e16b460de4432a950e268bc7a371c4a3092fe214a926478e69dda0b2e47fdb56_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_434b34cc9a94ee2d210e78a156d0bc8b2133d8f0549b85879ee23cf9b8eb87d0 = $this->env->getExtension("native_profiler");
        $__internal_434b34cc9a94ee2d210e78a156d0bc8b2133d8f0549b85879ee23cf9b8eb87d0->enter($__internal_434b34cc9a94ee2d210e78a156d0bc8b2133d8f0549b85879ee23cf9b8eb87d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_434b34cc9a94ee2d210e78a156d0bc8b2133d8f0549b85879ee23cf9b8eb87d0->leave($__internal_434b34cc9a94ee2d210e78a156d0bc8b2133d8f0549b85879ee23cf9b8eb87d0_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_4a624fa8b43dec77568ad0d2c73d65dee24ee5c06252f228dd1d755e42c87fd7 = $this->env->getExtension("native_profiler");
        $__internal_4a624fa8b43dec77568ad0d2c73d65dee24ee5c06252f228dd1d755e42c87fd7->enter($__internal_4a624fa8b43dec77568ad0d2c73d65dee24ee5c06252f228dd1d755e42c87fd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_4a624fa8b43dec77568ad0d2c73d65dee24ee5c06252f228dd1d755e42c87fd7->leave($__internal_4a624fa8b43dec77568ad0d2c73d65dee24ee5c06252f228dd1d755e42c87fd7_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_bfabd42ac16725c5a8b23ed76b25a6d43e587cd4880ed80c651cd323f96fa04e = $this->env->getExtension("native_profiler");
        $__internal_bfabd42ac16725c5a8b23ed76b25a6d43e587cd4880ed80c651cd323f96fa04e->enter($__internal_bfabd42ac16725c5a8b23ed76b25a6d43e587cd4880ed80c651cd323f96fa04e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_bfabd42ac16725c5a8b23ed76b25a6d43e587cd4880ed80c651cd323f96fa04e->leave($__internal_bfabd42ac16725c5a8b23ed76b25a6d43e587cd4880ed80c651cd323f96fa04e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 11,  82 => 10,  71 => 6,  59 => 5,  50 => 12,  47 => 11,  45 => 10,  38 => 7,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}{% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}{% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
