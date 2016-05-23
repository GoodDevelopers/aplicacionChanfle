<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_eb7ad7cdfa820cd37ea3d447613a2500654b43d9adae9201336b131b8f1d2dfd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecc56c694cf9dde94d79a37fb908fec155f85646ba249f5ae6f9818f64e3de67 = $this->env->getExtension("native_profiler");
        $__internal_ecc56c694cf9dde94d79a37fb908fec155f85646ba249f5ae6f9818f64e3de67->enter($__internal_ecc56c694cf9dde94d79a37fb908fec155f85646ba249f5ae6f9818f64e3de67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "        <title>Login</title>
    </head>
    <body>
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\" style=\"margin-bottom: 20px;\">
                    <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/img/login.png"), "html", null, true);
        echo "\" alt=\"imgLogin\" class=\"img-responsive center-block\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 22
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 23
            echo "                        <p>
                            <span style=\"font-weight: bold;\">Sesion abierta como: ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                            <a href=\"";
            // line 25
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" style=\"float: right;\">
                                Cerrar sesion
                            </a>
                        </p>
                    ";
        } else {
            // line 30
            echo "                        ";
            // line 31
            echo "                    ";
        }
        // line 32
        echo "

                    ";
        // line 34
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 35
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 36
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 37
                    echo "                                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                    ";
                    // line 38
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 41
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 42
            echo "                    ";
        }
        // line 43
        echo "
                    ";
        // line 45
        echo "                    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 47
        echo "                    ";
        // line 48
        echo "                </div>
            </div>
        </div>

        ";
        // line 52
        $this->displayBlock('javascripts', $context, $blocks);
        // line 56
        echo "    </body>
</html>
";
        
        $__internal_ecc56c694cf9dde94d79a37fb908fec155f85646ba249f5ae6f9818f64e3de67->leave($__internal_ecc56c694cf9dde94d79a37fb908fec155f85646ba249f5ae6f9818f64e3de67_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_256a2f195105c4f1ad412341b0c7951e70f5b1f0f7ab6c555e71e93148d96cee = $this->env->getExtension("native_profiler");
        $__internal_256a2f195105c4f1ad412341b0c7951e70f5b1f0f7ab6c555e71e93148d96cee->enter($__internal_256a2f195105c4f1ad412341b0c7951e70f5b1f0f7ab6c555e71e93148d96cee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_256a2f195105c4f1ad412341b0c7951e70f5b1f0f7ab6c555e71e93148d96cee->leave($__internal_256a2f195105c4f1ad412341b0c7951e70f5b1f0f7ab6c555e71e93148d96cee_prof);

    }

    // line 45
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_aaeb306edaae8d09839cdcc2b9dda74999daf814f8a1cd773ef2e4369b1d97d4 = $this->env->getExtension("native_profiler");
        $__internal_aaeb306edaae8d09839cdcc2b9dda74999daf814f8a1cd773ef2e4369b1d97d4->enter($__internal_aaeb306edaae8d09839cdcc2b9dda74999daf814f8a1cd773ef2e4369b1d97d4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 46
        echo "                    ";
        
        $__internal_aaeb306edaae8d09839cdcc2b9dda74999daf814f8a1cd773ef2e4369b1d97d4->leave($__internal_aaeb306edaae8d09839cdcc2b9dda74999daf814f8a1cd773ef2e4369b1d97d4_prof);

    }

    // line 52
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_06d8f830fd8c8cbe9c49aa9cdf1a4b9f71b496bf58a8f83e0b13f67b76db12cd = $this->env->getExtension("native_profiler");
        $__internal_06d8f830fd8c8cbe9c49aa9cdf1a4b9f71b496bf58a8f83e0b13f67b76db12cd->enter($__internal_06d8f830fd8c8cbe9c49aa9cdf1a4b9f71b496bf58a8f83e0b13f67b76db12cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 53
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_06d8f830fd8c8cbe9c49aa9cdf1a4b9f71b496bf58a8f83e0b13f67b76db12cd->leave($__internal_06d8f830fd8c8cbe9c49aa9cdf1a4b9f71b496bf58a8f83e0b13f67b76db12cd_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  181 => 54,  176 => 53,  170 => 52,  163 => 46,  157 => 45,  148 => 7,  143 => 6,  137 => 5,  128 => 56,  126 => 52,  120 => 48,  118 => 47,  115 => 45,  112 => 43,  109 => 42,  103 => 41,  94 => 38,  89 => 37,  84 => 36,  79 => 35,  77 => 34,  73 => 32,  70 => 31,  68 => 30,  60 => 25,  56 => 24,  53 => 23,  51 => 22,  42 => 16,  33 => 9,  31 => 5,  25 => 1,);
    }
}
/* <!DOCTYPE html>*/
/* <html>*/
/*     <head>*/
/*         <meta charset="UTF-8" />*/
/*         {% block stylesheets %}*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/bootstrap.css') }}" />*/
/*             <link rel="stylesheet" href="{{ asset('bundles/app/css/style.css') }}" />*/
/*         {% endblock %}*/
/*         <title>Login</title>*/
/*     </head>*/
/*     <body>*/
/*         <div class="container">*/
/* */
/*             <div class="row">*/
/*                 <div class="col-md-4 col-md-offset-4" style="margin-bottom: 20px;">*/
/*                     <img src="{{ asset('bundles/app/img/login.png') }}" alt="imgLogin" class="img-responsive center-block">*/
/*                 </div>*/
/*             </div>*/
/* */
/*             <div class="row">*/
/*                 <div class="col-lg-12">*/
/*                     {% if is_granted("IS_AUTHENTICATED_REMEMBERED") %}*/
/*                         <p>*/
/*                             <span style="font-weight: bold;">Sesion abierta como: {{app.user.username}}</span>*/
/*                             <a href="{{ path('fos_user_security_logout') }}" style="float: right;">*/
/*                                 Cerrar sesion*/
/*                             </a>*/
/*                         </p>*/
/*                     {% else %}*/
/*                         {#                <a href="{{ path('fos_user_security_login') }}">Iniciar sesion</a>#}*/
/*                     {% endif %}*/
/* */
/* */
/*                     {% if app.request.hasPreviousSession %}*/
/*                         {% for type, messages in app.session.flashbag.all() %}*/
/*                             {% for message in messages %}*/
/*                                 <div class="flash-{{ type }}">*/
/*                                     {{ message }}*/
/*                                 </div>*/
/*                             {% endfor %}*/
/*                         {% endfor %}*/
/*                     {% endif %}*/
/* */
/*                     {#            <div>#}*/
/*                     {% block fos_user_content %}*/
/*                     {% endblock fos_user_content %}*/
/*                     {#            </div>#}*/
/*                 </div>*/
/*             </div>*/
/*         </div>*/
/* */
/*         {% block javascripts %}*/
/*             <script src="{{ asset('bundles/app/js/jquery.js') }}"></script>*/
/*             <script src="{{ asset('bundles/app/js/bootstrap.js') }}"></script>*/
/*         {% endblock %}*/
/*     </body>*/
/* </html>*/
/* */
