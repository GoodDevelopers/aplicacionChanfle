<?php

/* @FOSUser/Registration/checkEmail.html.twig */
class __TwigTemplate_004b669d15185fdb9e81a742eabbff3af9533ea2fd6799ea77b525d869933065 extends Twig_Template
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
        $__internal_edb02fc9c5521862cf74b2209733152add2bf5e00776f00a3e0b0e5e5be47e9b = $this->env->getExtension("native_profiler");
        $__internal_edb02fc9c5521862cf74b2209733152add2bf5e00776f00a3e0b0e5e5be47e9b->enter($__internal_edb02fc9c5521862cf74b2209733152add2bf5e00776f00a3e0b0e5e5be47e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edb02fc9c5521862cf74b2209733152add2bf5e00776f00a3e0b0e5e5be47e9b->leave($__internal_edb02fc9c5521862cf74b2209733152add2bf5e00776f00a3e0b0e5e5be47e9b_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_71f72e7f0c784f0a54a51e9674a7a1fb025423d5de254beb0aea97fa96c993f3 = $this->env->getExtension("native_profiler");
        $__internal_71f72e7f0c784f0a54a51e9674a7a1fb025423d5de254beb0aea97fa96c993f3->enter($__internal_71f72e7f0c784f0a54a51e9674a7a1fb025423d5de254beb0aea97fa96c993f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_71f72e7f0c784f0a54a51e9674a7a1fb025423d5de254beb0aea97fa96c993f3->leave($__internal_71f72e7f0c784f0a54a51e9674a7a1fb025423d5de254beb0aea97fa96c993f3_prof);

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
