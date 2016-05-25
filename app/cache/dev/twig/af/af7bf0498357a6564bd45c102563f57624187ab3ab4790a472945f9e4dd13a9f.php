<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_035e508031d84fe053f96fefb57928a0f3e8222a557cb40fd4baf8bebec98d52 extends Twig_Template
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
        $__internal_1ccd83f2976e0216b85732201367d0e7212f9c5ea0919f3c56691641bbf5ba7d = $this->env->getExtension("native_profiler");
        $__internal_1ccd83f2976e0216b85732201367d0e7212f9c5ea0919f3c56691641bbf5ba7d->enter($__internal_1ccd83f2976e0216b85732201367d0e7212f9c5ea0919f3c56691641bbf5ba7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_1ccd83f2976e0216b85732201367d0e7212f9c5ea0919f3c56691641bbf5ba7d->leave($__internal_1ccd83f2976e0216b85732201367d0e7212f9c5ea0919f3c56691641bbf5ba7d_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_8812968dfefd5b1af81725d01059d643f33e4392507b480957d9ce507c88e5ba = $this->env->getExtension("native_profiler");
        $__internal_8812968dfefd5b1af81725d01059d643f33e4392507b480957d9ce507c88e5ba->enter($__internal_8812968dfefd5b1af81725d01059d643f33e4392507b480957d9ce507c88e5ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8812968dfefd5b1af81725d01059d643f33e4392507b480957d9ce507c88e5ba->leave($__internal_8812968dfefd5b1af81725d01059d643f33e4392507b480957d9ce507c88e5ba_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_f411bee47fab1f02429eedc64e718fce965e159163e77fb8c7ba73dec76a979c = $this->env->getExtension("native_profiler");
        $__internal_f411bee47fab1f02429eedc64e718fce965e159163e77fb8c7ba73dec76a979c->enter($__internal_f411bee47fab1f02429eedc64e718fce965e159163e77fb8c7ba73dec76a979c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_f411bee47fab1f02429eedc64e718fce965e159163e77fb8c7ba73dec76a979c->leave($__internal_f411bee47fab1f02429eedc64e718fce965e159163e77fb8c7ba73dec76a979c_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_94d1e6d42ac02f918ded20947f8a8ef09ba12467dd741063871b273e36e48b92 = $this->env->getExtension("native_profiler");
        $__internal_94d1e6d42ac02f918ded20947f8a8ef09ba12467dd741063871b273e36e48b92->enter($__internal_94d1e6d42ac02f918ded20947f8a8ef09ba12467dd741063871b273e36e48b92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_94d1e6d42ac02f918ded20947f8a8ef09ba12467dd741063871b273e36e48b92->leave($__internal_94d1e6d42ac02f918ded20947f8a8ef09ba12467dd741063871b273e36e48b92_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  66 => 12,  57 => 9,  51 => 7,  42 => 4,  36 => 2,  29 => 12,  27 => 7,  25 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* {% block subject %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_text %}*/
/* {% autoescape false %}*/
/* {{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}*/
/* {% endautoescape %}*/
/* {% endblock %}*/
/* {% block body_html %}{% endblock %}*/
/* */
