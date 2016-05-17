<?php

/* FOSUserBundle:Registration:checkEmail.html.twig */
class __TwigTemplate_3d5a95d15e1b0b25c099c116dcf84dddf686ca519550d90fd100e0a485006b68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:checkEmail.html.twig", 1);
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
        $__internal_01232405488b6571f5dfd62c7f0f3685f354c2ba35890867a7dae1cd476085a6 = $this->env->getExtension("native_profiler");
        $__internal_01232405488b6571f5dfd62c7f0f3685f354c2ba35890867a7dae1cd476085a6->enter($__internal_01232405488b6571f5dfd62c7f0f3685f354c2ba35890867a7dae1cd476085a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01232405488b6571f5dfd62c7f0f3685f354c2ba35890867a7dae1cd476085a6->leave($__internal_01232405488b6571f5dfd62c7f0f3685f354c2ba35890867a7dae1cd476085a6_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e9070d0510b880e01d5f338894996421806c6eba6f7fce551d170724b7d166c7 = $this->env->getExtension("native_profiler");
        $__internal_e9070d0510b880e01d5f338894996421806c6eba6f7fce551d170724b7d166c7->enter($__internal_e9070d0510b880e01d5f338894996421806c6eba6f7fce551d170724b7d166c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_e9070d0510b880e01d5f338894996421806c6eba6f7fce551d170724b7d166c7->leave($__internal_e9070d0510b880e01d5f338894996421806c6eba6f7fce551d170724b7d166c7_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:checkEmail.html.twig";
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
