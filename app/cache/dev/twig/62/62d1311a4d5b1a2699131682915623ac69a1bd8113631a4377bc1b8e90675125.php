<?php

/* @FOSUser/Resetting/checkEmail.html.twig */
class __TwigTemplate_692d4455863a3ea2802a088d0ade795801f7e85a007f93452b92ccfd4e905226 extends Twig_Template
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
        $__internal_ca278c9276c34cd31660e2133043ccba9911782d1edf0e40d8e3ecfffcf914d7 = $this->env->getExtension("native_profiler");
        $__internal_ca278c9276c34cd31660e2133043ccba9911782d1edf0e40d8e3ecfffcf914d7->enter($__internal_ca278c9276c34cd31660e2133043ccba9911782d1edf0e40d8e3ecfffcf914d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ca278c9276c34cd31660e2133043ccba9911782d1edf0e40d8e3ecfffcf914d7->leave($__internal_ca278c9276c34cd31660e2133043ccba9911782d1edf0e40d8e3ecfffcf914d7_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_772418ee47c71313f15aa685007969a7c2cec18f801c44769f188de6c6fbeb0a = $this->env->getExtension("native_profiler");
        $__internal_772418ee47c71313f15aa685007969a7c2cec18f801c44769f188de6c6fbeb0a->enter($__internal_772418ee47c71313f15aa685007969a7c2cec18f801c44769f188de6c6fbeb0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_772418ee47c71313f15aa685007969a7c2cec18f801c44769f188de6c6fbeb0a->leave($__internal_772418ee47c71313f15aa685007969a7c2cec18f801c44769f188de6c6fbeb0a_prof);

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
