<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_879f26c0a035cb3b4474f5f6ed9853a02365ceae278e2025cc3399c975f6cd79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b929ba1f7f1c8ff10857c173269b7c95ec97eb54e1e995ca2c62c16c4ee300fc = $this->env->getExtension("native_profiler");
        $__internal_b929ba1f7f1c8ff10857c173269b7c95ec97eb54e1e995ca2c62c16c4ee300fc->enter($__internal_b929ba1f7f1c8ff10857c173269b7c95ec97eb54e1e995ca2c62c16c4ee300fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_b929ba1f7f1c8ff10857c173269b7c95ec97eb54e1e995ca2c62c16c4ee300fc->leave($__internal_b929ba1f7f1c8ff10857c173269b7c95ec97eb54e1e995ca2c62c16c4ee300fc_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  32 => 5,  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_user_show">*/
/*     <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>*/
/*     <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>*/
/* </div>*/
/* */