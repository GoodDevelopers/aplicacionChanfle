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
        $__internal_3d8c986d8dd46167bbb3815cb2c3a6ba3564275f94d852df240a8bef00d5b353 = $this->env->getExtension("native_profiler");
        $__internal_3d8c986d8dd46167bbb3815cb2c3a6ba3564275f94d852df240a8bef00d5b353->enter($__internal_3d8c986d8dd46167bbb3815cb2c3a6ba3564275f94d852df240a8bef00d5b353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3d8c986d8dd46167bbb3815cb2c3a6ba3564275f94d852df240a8bef00d5b353->leave($__internal_3d8c986d8dd46167bbb3815cb2c3a6ba3564275f94d852df240a8bef00d5b353_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_427c8db6499bbd844f3b177ce057938b40d81f75c9e179fada79e64e6608e466 = $this->env->getExtension("native_profiler");
        $__internal_427c8db6499bbd844f3b177ce057938b40d81f75c9e179fada79e64e6608e466->enter($__internal_427c8db6499bbd844f3b177ce057938b40d81f75c9e179fada79e64e6608e466_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.check_email", array("%email%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_427c8db6499bbd844f3b177ce057938b40d81f75c9e179fada79e64e6608e466->leave($__internal_427c8db6499bbd844f3b177ce057938b40d81f75c9e179fada79e64e6608e466_prof);

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
