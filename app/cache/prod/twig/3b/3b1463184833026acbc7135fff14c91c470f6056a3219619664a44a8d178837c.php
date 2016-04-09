<?php

/* base.html.twig */
class __TwigTemplate_190a206ecde38caa95c00279264d32bb80240f83be61a6fd89a24d94096eca9b extends Twig_Template
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
        $__internal_b008b73ecc230142b135914328b345ce152c99be4d4c44ed6f564b2fcdf68adb = $this->env->getExtension("native_profiler");
        $__internal_b008b73ecc230142b135914328b345ce152c99be4d4c44ed6f564b2fcdf68adb->enter($__internal_b008b73ecc230142b135914328b345ce152c99be4d4c44ed6f564b2fcdf68adb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <meta name=\"viewport\" content=\"width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0\">
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 11
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
";
        // line 15
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 18
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 22
        echo "    </body>
</html>
";
        
        $__internal_b008b73ecc230142b135914328b345ce152c99be4d4c44ed6f564b2fcdf68adb->leave($__internal_b008b73ecc230142b135914328b345ce152c99be4d4c44ed6f564b2fcdf68adb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_3468e8188a826a03fb431c1128a03e85bc96bd7a9639b6204ddd85a5649dd815 = $this->env->getExtension("native_profiler");
        $__internal_3468e8188a826a03fb431c1128a03e85bc96bd7a9639b6204ddd85a5649dd815->enter($__internal_3468e8188a826a03fb431c1128a03e85bc96bd7a9639b6204ddd85a5649dd815_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_3468e8188a826a03fb431c1128a03e85bc96bd7a9639b6204ddd85a5649dd815->leave($__internal_3468e8188a826a03fb431c1128a03e85bc96bd7a9639b6204ddd85a5649dd815_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_e4936bd56d1311cb6e9be9e63ad93c9a9fd721e55bce56455cc2b5bfa8d28115 = $this->env->getExtension("native_profiler");
        $__internal_e4936bd56d1311cb6e9be9e63ad93c9a9fd721e55bce56455cc2b5bfa8d28115->enter($__internal_e4936bd56d1311cb6e9be9e63ad93c9a9fd721e55bce56455cc2b5bfa8d28115_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_e4936bd56d1311cb6e9be9e63ad93c9a9fd721e55bce56455cc2b5bfa8d28115->leave($__internal_e4936bd56d1311cb6e9be9e63ad93c9a9fd721e55bce56455cc2b5bfa8d28115_prof);

    }

    // line 15
    public function block_body($context, array $blocks = array())
    {
        $__internal_5b8ac51b2939e77ce612e35107ee237fc2e1ebbda0455f7aafecae16204407f8 = $this->env->getExtension("native_profiler");
        $__internal_5b8ac51b2939e77ce612e35107ee237fc2e1ebbda0455f7aafecae16204407f8->enter($__internal_5b8ac51b2939e77ce612e35107ee237fc2e1ebbda0455f7aafecae16204407f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 16
        echo "            ";
        
        $__internal_5b8ac51b2939e77ce612e35107ee237fc2e1ebbda0455f7aafecae16204407f8->leave($__internal_5b8ac51b2939e77ce612e35107ee237fc2e1ebbda0455f7aafecae16204407f8_prof);

    }

    // line 18
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c7847eb5b1a1f0f48571619d3db3d203aa127fd2095a6553a427a40cccf5eebe = $this->env->getExtension("native_profiler");
        $__internal_c7847eb5b1a1f0f48571619d3db3d203aa127fd2095a6553a427a40cccf5eebe->enter($__internal_c7847eb5b1a1f0f48571619d3db3d203aa127fd2095a6553a427a40cccf5eebe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 19
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_c7847eb5b1a1f0f48571619d3db3d203aa127fd2095a6553a427a40cccf5eebe->leave($__internal_c7847eb5b1a1f0f48571619d3db3d203aa127fd2095a6553a427a40cccf5eebe_prof);

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
        return array (  117 => 20,  112 => 19,  106 => 18,  99 => 16,  93 => 15,  84 => 9,  79 => 8,  73 => 7,  61 => 5,  52 => 22,  49 => 18,  46 => 15,  39 => 11,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* {#        <div class="container">#}*/
/*             {% block body %}*/
/*             {% endblock %}*/
/* {#        </div>#}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
