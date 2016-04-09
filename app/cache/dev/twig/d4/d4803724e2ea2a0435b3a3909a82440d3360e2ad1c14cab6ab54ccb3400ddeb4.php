<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_8ba3aa92f5f35983b208f8e9b0065d148f1147d3fe02e32941ad2a70bed99f1e extends Twig_Template
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
        $__internal_bb4e6de0051dadd39a876440f890b8672bde5317da5b49e2e2e13f687af7eaf4 = $this->env->getExtension("native_profiler");
        $__internal_bb4e6de0051dadd39a876440f890b8672bde5317da5b49e2e2e13f687af7eaf4->enter($__internal_bb4e6de0051dadd39a876440f890b8672bde5317da5b49e2e2e13f687af7eaf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

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
        
        $__internal_bb4e6de0051dadd39a876440f890b8672bde5317da5b49e2e2e13f687af7eaf4->leave($__internal_bb4e6de0051dadd39a876440f890b8672bde5317da5b49e2e2e13f687af7eaf4_prof);

    }

    // line 5
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0ee14fdd77f425c79be6b8a21ed62fdad18fea63e94e7a974bff5b48ebb3818d = $this->env->getExtension("native_profiler");
        $__internal_0ee14fdd77f425c79be6b8a21ed62fdad18fea63e94e7a974bff5b48ebb3818d->enter($__internal_0ee14fdd77f425c79be6b8a21ed62fdad18fea63e94e7a974bff5b48ebb3818d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 6
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/bootstrap.css"), "html", null, true);
        echo "\" />
            <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/css/style.css"), "html", null, true);
        echo "\" />
        ";
        
        $__internal_0ee14fdd77f425c79be6b8a21ed62fdad18fea63e94e7a974bff5b48ebb3818d->leave($__internal_0ee14fdd77f425c79be6b8a21ed62fdad18fea63e94e7a974bff5b48ebb3818d_prof);

    }

    // line 44
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f285e4c137231936b7069954010ca7adb9902774fe24612d619fee81ae18a315 = $this->env->getExtension("native_profiler");
        $__internal_f285e4c137231936b7069954010ca7adb9902774fe24612d619fee81ae18a315->enter($__internal_f285e4c137231936b7069954010ca7adb9902774fe24612d619fee81ae18a315_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 45
        echo "                    ";
        
        $__internal_f285e4c137231936b7069954010ca7adb9902774fe24612d619fee81ae18a315->leave($__internal_f285e4c137231936b7069954010ca7adb9902774fe24612d619fee81ae18a315_prof);

    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a76a8f301d541c673351607f16430d1fff3c6f0c48f62192bafdf763304db0a3 = $this->env->getExtension("native_profiler");
        $__internal_a76a8f301d541c673351607f16430d1fff3c6f0c48f62192bafdf763304db0a3->enter($__internal_a76a8f301d541c673351607f16430d1fff3c6f0c48f62192bafdf763304db0a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 52
        echo "            <script src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/jquery.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 53
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/app/js/bootstrap.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_a76a8f301d541c673351607f16430d1fff3c6f0c48f62192bafdf763304db0a3->leave($__internal_a76a8f301d541c673351607f16430d1fff3c6f0c48f62192bafdf763304db0a3_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
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
