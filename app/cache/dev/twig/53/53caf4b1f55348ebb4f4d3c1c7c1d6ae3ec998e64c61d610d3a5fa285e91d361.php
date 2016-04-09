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
        $__internal_75d7787e4422816e84ba0360099326a7125f167e46b0e62acfdef5235e929e8d = $this->env->getExtension("native_profiler");
        $__internal_75d7787e4422816e84ba0360099326a7125f167e46b0e62acfdef5235e929e8d->enter($__internal_75d7787e4422816e84ba0360099326a7125f167e46b0e62acfdef5235e929e8d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::base.html.twig"));

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
        
        $__internal_75d7787e4422816e84ba0360099326a7125f167e46b0e62acfdef5235e929e8d->leave($__internal_75d7787e4422816e84ba0360099326a7125f167e46b0e62acfdef5235e929e8d_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_303d076d6f996bc235c3d02c439c31dd73d774a44e1722cc221d5719c2f0d0ab = $this->env->getExtension("native_profiler");
        $__internal_303d076d6f996bc235c3d02c439c31dd73d774a44e1722cc221d5719c2f0d0ab->enter($__internal_303d076d6f996bc235c3d02c439c31dd73d774a44e1722cc221d5719c2f0d0ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_303d076d6f996bc235c3d02c439c31dd73d774a44e1722cc221d5719c2f0d0ab->leave($__internal_303d076d6f996bc235c3d02c439c31dd73d774a44e1722cc221d5719c2f0d0ab_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_efdaa41982dc2e2f2b4e090c493548fdc4de617d948ad94e491f017d8557c65f = $this->env->getExtension("native_profiler");
        $__internal_efdaa41982dc2e2f2b4e090c493548fdc4de617d948ad94e491f017d8557c65f->enter($__internal_efdaa41982dc2e2f2b4e090c493548fdc4de617d948ad94e491f017d8557c65f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

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
        
        $__internal_efdaa41982dc2e2f2b4e090c493548fdc4de617d948ad94e491f017d8557c65f->leave($__internal_efdaa41982dc2e2f2b4e090c493548fdc4de617d948ad94e491f017d8557c65f_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_a4f0f2b05e1f0a519d2949a6edc829b4488c37cb1a4a349525eca31439181d39 = $this->env->getExtension("native_profiler");
        $__internal_a4f0f2b05e1f0a519d2949a6edc829b4488c37cb1a4a349525eca31439181d39->enter($__internal_a4f0f2b05e1f0a519d2949a6edc829b4488c37cb1a4a349525eca31439181d39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            ";
        
        $__internal_a4f0f2b05e1f0a519d2949a6edc829b4488c37cb1a4a349525eca31439181d39->leave($__internal_a4f0f2b05e1f0a519d2949a6edc829b4488c37cb1a4a349525eca31439181d39_prof);

    }

    // line 19
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a6db4ed607ecd7802183279bcd9684cf19653a139a5d9dfd305a4e718bd8f755 = $this->env->getExtension("native_profiler");
        $__internal_a6db4ed607ecd7802183279bcd9684cf19653a139a5d9dfd305a4e718bd8f755->enter($__internal_a6db4ed607ecd7802183279bcd9684cf19653a139a5d9dfd305a4e718bd8f755_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 20
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a6db4ed607ecd7802183279bcd9684cf19653a139a5d9dfd305a4e718bd8f755->leave($__internal_a6db4ed607ecd7802183279bcd9684cf19653a139a5d9dfd305a4e718bd8f755_prof);

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
