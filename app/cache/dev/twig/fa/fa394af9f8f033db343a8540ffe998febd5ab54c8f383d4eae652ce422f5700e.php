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
        $__internal_c605d1188cf5ef62ac423fd27c66d477b3cc7ecdc2547eb0ca3ca5d72e74d6fb = $this->env->getExtension("native_profiler");
        $__internal_c605d1188cf5ef62ac423fd27c66d477b3cc7ecdc2547eb0ca3ca5d72e74d6fb->enter($__internal_c605d1188cf5ef62ac423fd27c66d477b3cc7ecdc2547eb0ca3ca5d72e74d6fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 12
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
";
        // line 16
        echo "            ";
        $this->displayBlock('body', $context, $blocks);
        // line 19
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 23
        echo "    </body>
</html>
";
        
        $__internal_c605d1188cf5ef62ac423fd27c66d477b3cc7ecdc2547eb0ca3ca5d72e74d6fb->leave($__internal_c605d1188cf5ef62ac423fd27c66d477b3cc7ecdc2547eb0ca3ca5d72e74d6fb_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_dbba9726e88290b5087dfc01eecfbd2438fd5771fdd4660eedcbaf5048588655 = $this->env->getExtension("native_profiler");
        $__internal_dbba9726e88290b5087dfc01eecfbd2438fd5771fdd4660eedcbaf5048588655->enter($__internal_dbba9726e88290b5087dfc01eecfbd2438fd5771fdd4660eedcbaf5048588655_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_dbba9726e88290b5087dfc01eecfbd2438fd5771fdd4660eedcbaf5048588655->leave($__internal_dbba9726e88290b5087dfc01eecfbd2438fd5771fdd4660eedcbaf5048588655_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_29234df2a25f872725f53ddf6a2f794453e237543bd8894b37b94c2d2d06d67e = $this->env->getExtension("native_profiler");
        $__internal_29234df2a25f872725f53ddf6a2f794453e237543bd8894b37b94c2d2d06d67e->enter($__internal_29234df2a25f872725f53ddf6a2f794453e237543bd8894b37b94c2d2d06d67e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/font-awesome.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_29234df2a25f872725f53ddf6a2f794453e237543bd8894b37b94c2d2d06d67e->leave($__internal_29234df2a25f872725f53ddf6a2f794453e237543bd8894b37b94c2d2d06d67e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_bddeb615ad4a326e0401f4c4b28e22a0f4ee3a08627defdd0154c57d68bbb081 = $this->env->getExtension("native_profiler");
        $__internal_bddeb615ad4a326e0401f4c4b28e22a0f4ee3a08627defdd0154c57d68bbb081->enter($__internal_bddeb615ad4a326e0401f4c4b28e22a0f4ee3a08627defdd0154c57d68bbb081_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            ";
        
        $__internal_bddeb615ad4a326e0401f4c4b28e22a0f4ee3a08627defdd0154c57d68bbb081->leave($__internal_bddeb615ad4a326e0401f4c4b28e22a0f4ee3a08627defdd0154c57d68bbb081_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2483ab9793f86b4b9dbf7a7edb90f59c073dc827794d09a74b3d7e6c9a5ffa55 = $this->env->getExtension("native_profiler");
        $__internal_2483ab9793f86b4b9dbf7a7edb90f59c073dc827794d09a74b3d7e6c9a5ffa55->enter($__internal_2483ab9793f86b4b9dbf7a7edb90f59c073dc827794d09a74b3d7e6c9a5ffa55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_2483ab9793f86b4b9dbf7a7edb90f59c073dc827794d09a74b3d7e6c9a5ffa55->leave($__internal_2483ab9793f86b4b9dbf7a7edb90f59c073dc827794d09a74b3d7e6c9a5ffa55_prof);

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
        return array (  121 => 21,  116 => 20,  110 => 19,  103 => 17,  97 => 16,  88 => 10,  84 => 9,  79 => 8,  73 => 7,  61 => 5,  52 => 23,  49 => 19,  46 => 16,  39 => 12,  37 => 7,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/style.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/font-awesome.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/* {#        <div class="container">#}*/
/*             {% block body %}*/
/*             {% endblock %}*/
/* {#        </div>#}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/app/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('bundles/app/js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
