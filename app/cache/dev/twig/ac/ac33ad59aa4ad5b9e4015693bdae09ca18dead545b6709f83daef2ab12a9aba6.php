<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9b1c50083228d4d3fe92442b410b10c850b1cceca801d61953de71866c18c1df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Security:login.html.twig", 1);
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
        $__internal_6724ac8e0a03b189aee63e319932ff5247d0b2e6a4ab49ba4ff3a80f5fdf8e78 = $this->env->getExtension("native_profiler");
        $__internal_6724ac8e0a03b189aee63e319932ff5247d0b2e6a4ab49ba4ff3a80f5fdf8e78->enter($__internal_6724ac8e0a03b189aee63e319932ff5247d0b2e6a4ab49ba4ff3a80f5fdf8e78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6724ac8e0a03b189aee63e319932ff5247d0b2e6a4ab49ba4ff3a80f5fdf8e78->leave($__internal_6724ac8e0a03b189aee63e319932ff5247d0b2e6a4ab49ba4ff3a80f5fdf8e78_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_062d3617fe06aa86c3f7013d033776a06ab87d66ce3f7b7af6b84f54442863cd = $this->env->getExtension("native_profiler");
        $__internal_062d3617fe06aa86c3f7013d033776a06ab87d66ce3f7b7af6b84f54442863cd->enter($__internal_062d3617fe06aa86c3f7013d033776a06ab87d66ce3f7b7af6b84f54442863cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

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
        
        $__internal_062d3617fe06aa86c3f7013d033776a06ab87d66ce3f7b7af6b84f54442863cd->leave($__internal_062d3617fe06aa86c3f7013d033776a06ab87d66ce3f7b7af6b84f54442863cd_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
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
