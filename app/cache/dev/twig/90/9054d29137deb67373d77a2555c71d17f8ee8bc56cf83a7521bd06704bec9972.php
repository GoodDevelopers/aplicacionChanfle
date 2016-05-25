<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_0a9ec81896f0b343b33544435d15f7fdc00343bf1f888a4fb33377c43428006b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:checkEmail.html.twig", 1);
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
        $__internal_207e95180cc7a862bb86ee7b4744ebf85b79656e1d5cb3967b972b5831c85354 = $this->env->getExtension("native_profiler");
        $__internal_207e95180cc7a862bb86ee7b4744ebf85b79656e1d5cb3967b972b5831c85354->enter($__internal_207e95180cc7a862bb86ee7b4744ebf85b79656e1d5cb3967b972b5831c85354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_207e95180cc7a862bb86ee7b4744ebf85b79656e1d5cb3967b972b5831c85354->leave($__internal_207e95180cc7a862bb86ee7b4744ebf85b79656e1d5cb3967b972b5831c85354_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_8b259f15256b8aa115a3f9fc6c7c45998d87042a1e9bec549bde7088637a8a2d = $this->env->getExtension("native_profiler");
        $__internal_8b259f15256b8aa115a3f9fc6c7c45998d87042a1e9bec549bde7088637a8a2d->enter($__internal_8b259f15256b8aa115a3f9fc6c7c45998d87042a1e9bec549bde7088637a8a2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_8b259f15256b8aa115a3f9fc6c7c45998d87042a1e9bec549bde7088637a8a2d->leave($__internal_8b259f15256b8aa115a3f9fc6c7c45998d87042a1e9bec549bde7088637a8a2d_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:checkEmail.html.twig";
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
