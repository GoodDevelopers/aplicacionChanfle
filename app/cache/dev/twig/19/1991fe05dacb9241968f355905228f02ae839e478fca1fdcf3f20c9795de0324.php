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
        $__internal_7ff25424dcd1093a4be86fc231df086e5b3f6717ad90529a36e696f154c5ed0f = $this->env->getExtension("native_profiler");
        $__internal_7ff25424dcd1093a4be86fc231df086e5b3f6717ad90529a36e696f154c5ed0f->enter($__internal_7ff25424dcd1093a4be86fc231df086e5b3f6717ad90529a36e696f154c5ed0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        ";
        // line 5
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "    </head>
    <body>
        <div class=\"container\">

            <div class=\"row\">
                <div class=\"col-md-4 col-md-offset-4\" style=\"margin-bottom: 20px;\">
                    <img src=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/img/login.png"), "html", null, true);
        echo "\" alt=\"imgLogin\" class=\"img-responsive center-block\">
                </div>
            </div>

            <div class=\"row\">
                <div class=\"col-lg-12\">
                    ";
        // line 21
        if ($this->env->getExtension('security')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 22
            echo "                        <p>
                            <span style=\"font-weight: bold;\">Sesion abierta como: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</span>
                            <a href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\" style=\"float: right;\">
                                Cerrar sesion
                            </a>
                        </p>
                    ";
        } else {
            // line 29
            echo "                        ";
            // line 30
            echo "                    ";
        }
        // line 31
        echo "

                    ";
        // line 33
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 34
            echo "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 35
                echo "                            ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 36
                    echo "                                <div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
                                    ";
                    // line 37
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
                                </div>
                            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 40
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                    ";
        }
        // line 42
        echo "
                    ";
        // line 44
        echo "                    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 46
        echo "                    ";
        // line 47
        echo "                </div>
            </div>
        </div>

        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 55
        echo "    </body>
</html>
";
        
        $__internal_7ff25424dcd1093a4be86fc231df086e5b3f6717ad90529a36e696f154c5ed0f->leave($__internal_7ff25424dcd1093a4be86fc231df086e5b3f6717ad90529a36e696f154c5ed0f_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0f4804d79be65876109f32bd318a94cde52580b7805bc31e7d84edf735ec4d26 = $this->env->getExtension("native_profiler");
        $__internal_0f4804d79be65876109f32bd318a94cde52580b7805bc31e7d84edf735ec4d26->enter($__internal_0f4804d79be65876109f32bd318a94cde52580b7805bc31e7d84edf735ec4d26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_0f4804d79be65876109f32bd318a94cde52580b7805bc31e7d84edf735ec4d26->leave($__internal_0f4804d79be65876109f32bd318a94cde52580b7805bc31e7d84edf735ec4d26_prof);

    }

    // line 44
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e0305d72982a03a76fd5da09199d5dd883f5b2b699c56e9f3209548aea1d37a3 = $this->env->getExtension("native_profiler");
        $__internal_e0305d72982a03a76fd5da09199d5dd883f5b2b699c56e9f3209548aea1d37a3->enter($__internal_e0305d72982a03a76fd5da09199d5dd883f5b2b699c56e9f3209548aea1d37a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 45
        echo "                    ";
        
        $__internal_e0305d72982a03a76fd5da09199d5dd883f5b2b699c56e9f3209548aea1d37a3->leave($__internal_e0305d72982a03a76fd5da09199d5dd883f5b2b699c56e9f3209548aea1d37a3_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_9e6cc311748aa6a352acfb33f6d6793c2254f4d62c1d18b6ae0b0ae1c708a719 = $this->env->getExtension("native_profiler");
        $__internal_9e6cc311748aa6a352acfb33f6d6793c2254f4d62c1d18b6ae0b0ae1c708a719->enter($__internal_9e6cc311748aa6a352acfb33f6d6793c2254f4d62c1d18b6ae0b0ae1c708a719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_9e6cc311748aa6a352acfb33f6d6793c2254f4d62c1d18b6ae0b0ae1c708a719->leave($__internal_9e6cc311748aa6a352acfb33f6d6793c2254f4d62c1d18b6ae0b0ae1c708a719_prof);

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
        return array (  180 => 53,  175 => 52,  169 => 51,  162 => 45,  156 => 44,  147 => 7,  142 => 6,  136 => 5,  127 => 55,  125 => 51,  119 => 47,  117 => 46,  114 => 44,  111 => 42,  108 => 41,  102 => 40,  93 => 37,  88 => 36,  83 => 35,  78 => 34,  76 => 33,  72 => 31,  69 => 30,  67 => 29,  59 => 24,  55 => 23,  52 => 22,  50 => 21,  41 => 15,  33 => 9,  31 => 5,  25 => 1,);
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
