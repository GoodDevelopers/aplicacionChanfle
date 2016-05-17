<?php

/* FOSUserBundle:Resetting:checkEmail.html.twig */
class __TwigTemplate_721605dfd6ea1e74e04bab198ed372e44c50fad49abc67ab460f0c3b51665d20 extends Twig_Template
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
        $__internal_94568e72558157ce49125774f8411e8c2a3c2c3351c9d875fb1d6c2bacb5d940 = $this->env->getExtension("native_profiler");
        $__internal_94568e72558157ce49125774f8411e8c2a3c2c3351c9d875fb1d6c2bacb5d940->enter($__internal_94568e72558157ce49125774f8411e8c2a3c2c3351c9d875fb1d6c2bacb5d940_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:checkEmail.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_94568e72558157ce49125774f8411e8c2a3c2c3351c9d875fb1d6c2bacb5d940->leave($__internal_94568e72558157ce49125774f8411e8c2a3c2c3351c9d875fb1d6c2bacb5d940_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b4da902f9670a89afcd036af25cb645c213b00a02ebc3f482de5a6084c4fa28f = $this->env->getExtension("native_profiler");
        $__internal_b4da902f9670a89afcd036af25cb645c213b00a02ebc3f482de5a6084c4fa28f->enter($__internal_b4da902f9670a89afcd036af25cb645c213b00a02ebc3f482de5a6084c4fa28f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("resetting.check_email", array("%email%" => (isset($context["email"]) ? $context["email"] : $this->getContext($context, "email"))), "FOSUserBundle"), "html", null, true);
        echo "
</p>
";
        
        $__internal_b4da902f9670a89afcd036af25cb645c213b00a02ebc3f482de5a6084c4fa28f->leave($__internal_b4da902f9670a89afcd036af25cb645c213b00a02ebc3f482de5a6084c4fa28f_prof);

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
