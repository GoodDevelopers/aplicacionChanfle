<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_deef688d8457d86ad5fa262958af6124e07bade812ef8981e8d920fc3ffb4db7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_3af3a2e11b88851cace8edc267f15a5a83d045c6155797f35e6def551a6a7464 = $this->env->getExtension("native_profiler");
        $__internal_3af3a2e11b88851cace8edc267f15a5a83d045c6155797f35e6def551a6a7464->enter($__internal_3af3a2e11b88851cace8edc267f15a5a83d045c6155797f35e6def551a6a7464_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_3af3a2e11b88851cace8edc267f15a5a83d045c6155797f35e6def551a6a7464->leave($__internal_3af3a2e11b88851cace8edc267f15a5a83d045c6155797f35e6def551a6a7464_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_a2e16d7350c511754ffb30e3df0f767bcc22e72203086a26a6e00f32b2653ef3 = $this->env->getExtension("native_profiler");
        $__internal_a2e16d7350c511754ffb30e3df0f767bcc22e72203086a26a6e00f32b2653ef3->enter($__internal_a2e16d7350c511754ffb30e3df0f767bcc22e72203086a26a6e00f32b2653ef3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_a2e16d7350c511754ffb30e3df0f767bcc22e72203086a26a6e00f32b2653ef3->leave($__internal_a2e16d7350c511754ffb30e3df0f767bcc22e72203086a26a6e00f32b2653ef3_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_68ee6a77debf121f5d7aee3145eaeb248e0b9cd74f02f25bf2836e87231bf526 = $this->env->getExtension("native_profiler");
        $__internal_68ee6a77debf121f5d7aee3145eaeb248e0b9cd74f02f25bf2836e87231bf526->enter($__internal_68ee6a77debf121f5d7aee3145eaeb248e0b9cd74f02f25bf2836e87231bf526_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_68ee6a77debf121f5d7aee3145eaeb248e0b9cd74f02f25bf2836e87231bf526->leave($__internal_68ee6a77debf121f5d7aee3145eaeb248e0b9cd74f02f25bf2836e87231bf526_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e25bf4187f0b58ba9abafe14d2f377c28a13e42c0cd4f9fd9ec49632e275f298 = $this->env->getExtension("native_profiler");
        $__internal_e25bf4187f0b58ba9abafe14d2f377c28a13e42c0cd4f9fd9ec49632e275f298->enter($__internal_e25bf4187f0b58ba9abafe14d2f377c28a13e42c0cd4f9fd9ec49632e275f298_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_e25bf4187f0b58ba9abafe14d2f377c28a13e42c0cd4f9fd9ec49632e275f298->leave($__internal_e25bf4187f0b58ba9abafe14d2f377c28a13e42c0cd4f9fd9ec49632e275f298_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.subject'|trans({'%username%': user.username}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
