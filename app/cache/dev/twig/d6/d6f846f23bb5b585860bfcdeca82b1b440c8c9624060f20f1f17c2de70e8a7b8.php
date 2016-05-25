<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_08ab7a00d9401c07cd8ccd6b8fe146514b68e01d2f0c55a7123fec78862f0f61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/checkEmail.html.twig", 1);
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
        $__internal_f4a55f15c07569f0de1797c6178991b559a9fc98064cc52d64dd7e926339ade7 = $this->env->getExtension("native_profiler");
        $__internal_f4a55f15c07569f0de1797c6178991b559a9fc98064cc52d64dd7e926339ade7->enter($__internal_f4a55f15c07569f0de1797c6178991b559a9fc98064cc52d64dd7e926339ade7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f4a55f15c07569f0de1797c6178991b559a9fc98064cc52d64dd7e926339ade7->leave($__internal_f4a55f15c07569f0de1797c6178991b559a9fc98064cc52d64dd7e926339ade7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d24d7a63ad9998936d980ab9a6fa84bef2efdb979a1d55248be7c33facff4874 = $this->env->getExtension("native_profiler");
        $__internal_d24d7a63ad9998936d980ab9a6fa84bef2efdb979a1d55248be7c33facff4874->enter($__internal_d24d7a63ad9998936d980ab9a6fa84bef2efdb979a1d55248be7c33facff4874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_d24d7a63ad9998936d980ab9a6fa84bef2efdb979a1d55248be7c33facff4874->leave($__internal_d24d7a63ad9998936d980ab9a6fa84bef2efdb979a1d55248be7c33facff4874_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>*/
/* {% endblock fos_user_content %}*/
/* */
