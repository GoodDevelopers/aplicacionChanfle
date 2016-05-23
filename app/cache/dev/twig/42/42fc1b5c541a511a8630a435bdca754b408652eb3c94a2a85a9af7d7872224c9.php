<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e1bfa2349176d818e0f4746cdb64509bfab21e56733aac3bf35c39e640cc1341 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "FOSUserBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5c89922ce0d8b45b2cd267b1df47b37932f4b04a37f694128a5a2f07f091ea37 = $this->env->getExtension("native_profiler");
        $__internal_5c89922ce0d8b45b2cd267b1df47b37932f4b04a37f694128a5a2f07f091ea37->enter($__internal_5c89922ce0d8b45b2cd267b1df47b37932f4b04a37f694128a5a2f07f091ea37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5c89922ce0d8b45b2cd267b1df47b37932f4b04a37f694128a5a2f07f091ea37->leave($__internal_5c89922ce0d8b45b2cd267b1df47b37932f4b04a37f694128a5a2f07f091ea37_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c38b19e3c898aab5fb3fbde49b8c52626cf6323c65ba23b77abd7e0cd90a27ae = $this->env->getExtension("native_profiler");
        $__internal_c38b19e3c898aab5fb3fbde49b8c52626cf6323c65ba23b77abd7e0cd90a27ae->enter($__internal_c38b19e3c898aab5fb3fbde49b8c52626cf6323c65ba23b77abd7e0cd90a27ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    ";
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 7
            echo "        <div>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
            echo "</div>
    ";
        }
        // line 9
        echo "    <div class=\"container\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-sm-offset-4\">
                <form action=\"";
        // line 12
        echo $this->env->getExtension('routing')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
                    <input type=\"hidden\" name=\"_csrf_token\" value=\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["csrf_token"]) ? $context["csrf_token"] : $this->getContext($context, "csrf_token")), "html", null, true);
        echo "\" />
                    <div class=\"form-group\">
                        <label for=\"username\">Usuario: </label>
                        <input type=\"number\" id=\"username\" name=\"_username\" value=\"";
        // line 16
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" class=\"form-control\" placeholder=\"Numero de identificacion\" required=\"required\" />
                    </div>

                    <div class=\"form-group\">
                        <label for=\"password\">Contraseña:</label>
                        <input type=\"password\" id=\"password\" name=\"_password\" class=\"form-control\" required=\"required\" />
                    </div>

                    <div class=\"form-group form-inline\">
                        <label for=\"remember_me\">Recordar</label>
                        <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" class=\"checkbox\" />
                    </div>

                    <div class=\"form-group text-center\">
                        <input type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"Iniciar sesion\" role=\"button\" class=\"btn btn-lg btn-success\"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
";
        
        $__internal_c38b19e3c898aab5fb3fbde49b8c52626cf6323c65ba23b77abd7e0cd90a27ae->leave($__internal_c38b19e3c898aab5fb3fbde49b8c52626cf6323c65ba23b77abd7e0cd90a27ae_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 16,  58 => 13,  54 => 12,  49 => 9,  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     {% if error %}*/
/*         <div>{{ error.messageKey|trans(error.messageData, 'security') }}</div>*/
/*     {% endif %}*/
/*     <div class="container">*/
/*         <div class="row">*/
/*             <div class="col-sm-4 col-sm-offset-4">*/
/*                 <form action="{{ path("fos_user_security_check") }}" method="post">*/
/*                     <input type="hidden" name="_csrf_token" value="{{ csrf_token }}" />*/
/*                     <div class="form-group">*/
/*                         <label for="username">Usuario: </label>*/
/*                         <input type="number" id="username" name="_username" value="{{ last_username }}" class="form-control" placeholder="Numero de identificacion" required="required" />*/
/*                     </div>*/
/* */
/*                     <div class="form-group">*/
/*                         <label for="password">Contraseña:</label>*/
/*                         <input type="password" id="password" name="_password" class="form-control" required="required" />*/
/*                     </div>*/
/* */
/*                     <div class="form-group form-inline">*/
/*                         <label for="remember_me">Recordar</label>*/
/*                         <input type="checkbox" id="remember_me" name="_remember_me" value="on" class="checkbox" />*/
/*                     </div>*/
/* */
/*                     <div class="form-group text-center">*/
/*                         <input type="submit" id="_submit" name="_submit" value="Iniciar sesion" role="button" class="btn btn-lg btn-success"/>*/
/*                     </div>*/
/*                 </form>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/* {% endblock fos_user_content %}*/
/* */
