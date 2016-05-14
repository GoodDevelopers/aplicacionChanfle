<?php

/* ::base.html.twig */
class __TwigTemplate_96ee81362b02ff5f464b6145bcb5bd232f6dc231e409d81f0d8980c8084c1cd2 extends Twig_Template
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
        $__internal_1385bf7eb833afcfdb1924bf1e9e48693bbc6b6a3673dc8e1e687b2899e6f9de = $this->env->getExtension("native_profiler");
        $__internal_1385bf7eb833afcfdb1924bf1e9e48693bbc6b6a3673dc8e1e687b2899e6f9de->enter($__internal_1385bf7eb833afcfdb1924bf1e9e48693bbc6b6a3673dc8e1e687b2899e6f9de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        // line 42
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 77
        echo "        ";
        $this->displayBlock('body', $context, $blocks);
        // line 79
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 83
        echo "    </body>
</html>
";
        
        $__internal_1385bf7eb833afcfdb1924bf1e9e48693bbc6b6a3673dc8e1e687b2899e6f9de->leave($__internal_1385bf7eb833afcfdb1924bf1e9e48693bbc6b6a3673dc8e1e687b2899e6f9de_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_0caf9d6eea19e2694f5065181b315690a2ba40774e43650a5ad7050cd5c70b03 = $this->env->getExtension("native_profiler");
        $__internal_0caf9d6eea19e2694f5065181b315690a2ba40774e43650a5ad7050cd5c70b03->enter($__internal_0caf9d6eea19e2694f5065181b315690a2ba40774e43650a5ad7050cd5c70b03_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_0caf9d6eea19e2694f5065181b315690a2ba40774e43650a5ad7050cd5c70b03->leave($__internal_0caf9d6eea19e2694f5065181b315690a2ba40774e43650a5ad7050cd5c70b03_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_3ad25ba27bb1e6d08a28f5ee150bacce7b3976d311754c02217c0cb1ef5ab425 = $this->env->getExtension("native_profiler");
        $__internal_3ad25ba27bb1e6d08a28f5ee150bacce7b3976d311754c02217c0cb1ef5ab425->enter($__internal_3ad25ba27bb1e6d08a28f5ee150bacce7b3976d311754c02217c0cb1ef5ab425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
            <link rel=\"stylesheet\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/otrosIconos.css"), "html", null, true);
        echo "\">
            <style>
                .navbar-default{
                    background-color: #f0ad4e;
                    border-color: #eea236;
                }
                .navbar-default:hover{
                    background-color: #ec971f;
                    border-color: #d58512;
                }
                .navbar-default .navbar-toggle .icon-bar {
                    background-color: white;
                }
                .nav .open > a, .nav .open > a:hover, .nav .open > a:focus,
                .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus,
                .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus{
                    background-color: #e26d1e;
                }

                @media (max-width: 767px){
                    .navbar-default .navbar-nav .open .dropdown-menu > li > a {
                        color: black;
                    }
                    .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,
                    .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {
                        color: white;
                        background-color: transparent;
                    }
                }
            </style>
        ";
        
        $__internal_3ad25ba27bb1e6d08a28f5ee150bacce7b3976d311754c02217c0cb1ef5ab425->leave($__internal_3ad25ba27bb1e6d08a28f5ee150bacce7b3976d311754c02217c0cb1ef5ab425_prof);

    }

    // line 77
    public function block_body($context, array $blocks = array())
    {
        $__internal_932312f612bafe9e6742e242ad83f0755995bf726c78da95509ed29b4340c328 = $this->env->getExtension("native_profiler");
        $__internal_932312f612bafe9e6742e242ad83f0755995bf726c78da95509ed29b4340c328->enter($__internal_932312f612bafe9e6742e242ad83f0755995bf726c78da95509ed29b4340c328_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 78
        echo "        ";
        
        $__internal_932312f612bafe9e6742e242ad83f0755995bf726c78da95509ed29b4340c328->leave($__internal_932312f612bafe9e6742e242ad83f0755995bf726c78da95509ed29b4340c328_prof);

    }

    // line 79
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b57c2852b547a026d4f1665d6ba5b27de5ff8aa90011e481ac866491cda436e6 = $this->env->getExtension("native_profiler");
        $__internal_b57c2852b547a026d4f1665d6ba5b27de5ff8aa90011e481ac866491cda436e6->enter($__internal_b57c2852b547a026d4f1665d6ba5b27de5ff8aa90011e481ac866491cda436e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 80
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_b57c2852b547a026d4f1665d6ba5b27de5ff8aa90011e481ac866491cda436e6->leave($__internal_b57c2852b547a026d4f1665d6ba5b27de5ff8aa90011e481ac866491cda436e6_prof);

    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  154 => 81,  149 => 80,  143 => 79,  136 => 78,  130 => 77,  92 => 11,  88 => 10,  84 => 9,  79 => 8,  73 => 7,  61 => 5,  52 => 83,  49 => 79,  46 => 77,  39 => 42,  37 => 7,  32 => 5,  26 => 1,);
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
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/otrosIconos.css')}}">*/
/*             <style>*/
/*                 .navbar-default{*/
/*                     background-color: #f0ad4e;*/
/*                     border-color: #eea236;*/
/*                 }*/
/*                 .navbar-default:hover{*/
/*                     background-color: #ec971f;*/
/*                     border-color: #d58512;*/
/*                 }*/
/*                 .navbar-default .navbar-toggle .icon-bar {*/
/*                     background-color: white;*/
/*                 }*/
/*                 .nav .open > a, .nav .open > a:hover, .nav .open > a:focus,*/
/*                 .navbar-default .navbar-nav > .open > a, .navbar-default .navbar-nav > .open > a:hover, .navbar-default .navbar-nav > .open > a:focus,*/
/*                 .navbar-default .navbar-toggle:hover, .navbar-default .navbar-toggle:focus{*/
/*                     background-color: #e26d1e;*/
/*                 }*/
/* */
/*                 @media (max-width: 767px){*/
/*                     .navbar-default .navbar-nav .open .dropdown-menu > li > a {*/
/*                         color: black;*/
/*                     }*/
/*                     .navbar-default .navbar-nav .open .dropdown-menu > li > a:hover,*/
/*                     .navbar-default .navbar-nav .open .dropdown-menu > li > a:focus {*/
/*                         color: white;*/
/*                         background-color: transparent;*/
/*                     }*/
/*                 }*/
/*             </style>*/
/*         {% endblock %}*/
/*         <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}" />*/
/*     </head>*/
/*     <body>*/
/*         {#<nav class="navbar navbar-default">*/
/*             <div class="container-fluid">*/
/*                 <!-- Brand and toggle get grouped for better mobile display -->*/
/*                 <div class="navbar-header">*/
/*                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu" aria-expanded="false">*/
/*                         <span class="sr-only">Menu</span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                         <span class="icon-bar"></span>*/
/*                     </button>*/
/*                     <a class="navbar-brand" href="{{ path('homepage') }}" style="color: black; font-weight: bold;"><span class="glyphicon glyphicon-home"></span> Inicio</a>*/
/*                 </div>*/
/* */
/*                 <!-- Collect the nav links, forms, and other content for toggling -->*/
/*                 <div class="collapse navbar-collapse" id="menu">*/
/*                     <ul class="nav navbar-nav navbar-right">*/
/*                         <li class="dropdown" style="font-size: 16px;">*/
/*                             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">*/
/*                                 <span class="icon-empleado"></span> {{ usuario }} <span class="caret"></span>*/
/*                             </a>*/
/*                             <ul class="dropdown-menu">*/
/*                                 <li><a href="#">Perfil</a></li>*/
/*                                 <li><a href="#">Opcion</a></li>*/
/*                                 <li><a href="#">Opcion</a></li>*/
/*                                 <li role="separator" class="divider"></li>*/
/*                                 <li><a href="#">Cerrar sesion</a></li>*/
/*                             </ul>*/
/*                         </li>*/
/*                     </ul>*/
/*                 </div><!-- /.navbar-collapse -->*/
/*             </div><!-- /.container-fluid -->*/
/*         </nav>#}*/
/*         {% block body %}*/
/*         {% endblock %}*/
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/app/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('bundles/app/js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
