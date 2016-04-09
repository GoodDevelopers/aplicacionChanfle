<?php

/* FOSUserBundle:Registration:email.txt.twig */
class __TwigTemplate_bfded0e91125bfecadb913d2e816492c6388dc87e2ea3408f4606517ecffa0ce extends Twig_Template
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
        $__internal_2dcf4244b3b02fc3dea1908cbcf222f1e8ce416fa31ebc6aa497ca73639fef6c = $this->env->getExtension("native_profiler");
        $__internal_2dcf4244b3b02fc3dea1908cbcf222f1e8ce416fa31ebc6aa497ca73639fef6c->enter($__internal_2dcf4244b3b02fc3dea1908cbcf222f1e8ce416fa31ebc6aa497ca73639fef6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_2dcf4244b3b02fc3dea1908cbcf222f1e8ce416fa31ebc6aa497ca73639fef6c->leave($__internal_2dcf4244b3b02fc3dea1908cbcf222f1e8ce416fa31ebc6aa497ca73639fef6c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_5a009f0e97d30836e5a0dadd4c38f1aaa6a138eef858c961add7087e82ac9c13 = $this->env->getExtension("native_profiler");
        $__internal_5a009f0e97d30836e5a0dadd4c38f1aaa6a138eef858c961add7087e82ac9c13->enter($__internal_5a009f0e97d30836e5a0dadd4c38f1aaa6a138eef858c961add7087e82ac9c13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_5a009f0e97d30836e5a0dadd4c38f1aaa6a138eef858c961add7087e82ac9c13->leave($__internal_5a009f0e97d30836e5a0dadd4c38f1aaa6a138eef858c961add7087e82ac9c13_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_7390d872fd07571e2afb485fe98a592e6237c3cdbe17f4de748b2f0445fe5f21 = $this->env->getExtension("native_profiler");
        $__internal_7390d872fd07571e2afb485fe98a592e6237c3cdbe17f4de748b2f0445fe5f21->enter($__internal_7390d872fd07571e2afb485fe98a592e6237c3cdbe17f4de748b2f0445fe5f21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_7390d872fd07571e2afb485fe98a592e6237c3cdbe17f4de748b2f0445fe5f21->leave($__internal_7390d872fd07571e2afb485fe98a592e6237c3cdbe17f4de748b2f0445fe5f21_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_005a945da16b31a532545476f37aaed21fe7d855043c4bd39011814d263cbf30 = $this->env->getExtension("native_profiler");
        $__internal_005a945da16b31a532545476f37aaed21fe7d855043c4bd39011814d263cbf30->enter($__internal_005a945da16b31a532545476f37aaed21fe7d855043c4bd39011814d263cbf30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_005a945da16b31a532545476f37aaed21fe7d855043c4bd39011814d263cbf30->leave($__internal_005a945da16b31a532545476f37aaed21fe7d855043c4bd39011814d263cbf30_prof);

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
