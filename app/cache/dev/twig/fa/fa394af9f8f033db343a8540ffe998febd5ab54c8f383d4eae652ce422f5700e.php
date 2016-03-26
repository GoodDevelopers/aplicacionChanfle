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
        $__internal_06c682d31e9f069f9cf8f542e34b59d9d9f6c344a2464b19a8dab1eca1df9b69 = $this->env->getExtension("native_profiler");
        $__internal_06c682d31e9f069f9cf8f542e34b59d9d9f6c344a2464b19a8dab1eca1df9b69->enter($__internal_06c682d31e9f069f9cf8f542e34b59d9d9f6c344a2464b19a8dab1eca1df9b69_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        // line 10
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 13
        $this->displayBlock('body', $context, $blocks);
        // line 14
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 18
        echo "    </body>
</html>
";
        
        $__internal_06c682d31e9f069f9cf8f542e34b59d9d9f6c344a2464b19a8dab1eca1df9b69->leave($__internal_06c682d31e9f069f9cf8f542e34b59d9d9f6c344a2464b19a8dab1eca1df9b69_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_7fa6c1d135d9a3203c78aa98e8f116ec18452b7dbc68474db59e9d64b3d713a5 = $this->env->getExtension("native_profiler");
        $__internal_7fa6c1d135d9a3203c78aa98e8f116ec18452b7dbc68474db59e9d64b3d713a5->enter($__internal_7fa6c1d135d9a3203c78aa98e8f116ec18452b7dbc68474db59e9d64b3d713a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_7fa6c1d135d9a3203c78aa98e8f116ec18452b7dbc68474db59e9d64b3d713a5->leave($__internal_7fa6c1d135d9a3203c78aa98e8f116ec18452b7dbc68474db59e9d64b3d713a5_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_1f4da06f19b64ebd2f2c8f44b5f41b03107172fbb148a2908a9fa2e2af9a6a3c = $this->env->getExtension("native_profiler");
        $__internal_1f4da06f19b64ebd2f2c8f44b5f41b03107172fbb148a2908a9fa2e2af9a6a3c->enter($__internal_1f4da06f19b64ebd2f2c8f44b5f41b03107172fbb148a2908a9fa2e2af9a6a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_1f4da06f19b64ebd2f2c8f44b5f41b03107172fbb148a2908a9fa2e2af9a6a3c->leave($__internal_1f4da06f19b64ebd2f2c8f44b5f41b03107172fbb148a2908a9fa2e2af9a6a3c_prof);

    }

    // line 13
    public function block_body($context, array $blocks = array())
    {
        $__internal_295ecf640d43fcf459a271c406072d97b8233858e6b5ab06e8aaeadfad97822a = $this->env->getExtension("native_profiler");
        $__internal_295ecf640d43fcf459a271c406072d97b8233858e6b5ab06e8aaeadfad97822a->enter($__internal_295ecf640d43fcf459a271c406072d97b8233858e6b5ab06e8aaeadfad97822a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_295ecf640d43fcf459a271c406072d97b8233858e6b5ab06e8aaeadfad97822a->leave($__internal_295ecf640d43fcf459a271c406072d97b8233858e6b5ab06e8aaeadfad97822a_prof);

    }

    // line 14
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_82edcf59a2712af7e763107771447a3c1adbbbe275491b80afa6b5eb44f984a4 = $this->env->getExtension("native_profiler");
        $__internal_82edcf59a2712af7e763107771447a3c1adbbbe275491b80afa6b5eb44f984a4->enter($__internal_82edcf59a2712af7e763107771447a3c1adbbbe275491b80afa6b5eb44f984a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 15
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("public/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_82edcf59a2712af7e763107771447a3c1adbbbe275491b80afa6b5eb44f984a4->leave($__internal_82edcf59a2712af7e763107771447a3c1adbbbe275491b80afa6b5eb44f984a4_prof);

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
        return array (  113 => 16,  108 => 15,  102 => 14,  91 => 13,  82 => 8,  77 => 7,  71 => 6,  59 => 5,  50 => 18,  47 => 14,  45 => 13,  38 => 10,  36 => 6,  32 => 5,  26 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         <title>{% block title %}Welcome!{% endblock %}</title>*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('public/css/bootstrap.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('public/css/style.css') }}" />*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {% block body %}{% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('public/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('public/js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
