<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_4ea261ad38036372da587542a8933dcda46658e69a5a69d1cc9d01b71a4e56c1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/checkEmail.html.twig", 1);
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
        $__internal_c06edf1d51f6efbdec406440586841acb99cedb0e55ab9e3f69c6e81d5b6a227 = $this->env->getExtension("native_profiler");
        $__internal_c06edf1d51f6efbdec406440586841acb99cedb0e55ab9e3f69c6e81d5b6a227->enter($__internal_c06edf1d51f6efbdec406440586841acb99cedb0e55ab9e3f69c6e81d5b6a227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c06edf1d51f6efbdec406440586841acb99cedb0e55ab9e3f69c6e81d5b6a227->leave($__internal_c06edf1d51f6efbdec406440586841acb99cedb0e55ab9e3f69c6e81d5b6a227_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_830fd2d50f248e8f3a181296e971a475977e4887ad566123c31b8bee31638f74 = $this->env->getExtension("native_profiler");
        $__internal_830fd2d50f248e8f3a181296e971a475977e4887ad566123c31b8bee31638f74->enter($__internal_830fd2d50f248e8f3a181296e971a475977e4887ad566123c31b8bee31638f74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_830fd2d50f248e8f3a181296e971a475977e4887ad566123c31b8bee31638f74->leave($__internal_830fd2d50f248e8f3a181296e971a475977e4887ad566123c31b8bee31638f74_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/checkEmail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/* <p>*/
/* {{ 'resetting.check_email'|trans({'%email%': email}) }}*/
/* </p>*/
/* {% endblock %}*/
/* */
