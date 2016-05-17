<?php

/* FOSUserBundle:Resetting:email.txt.twig */
class __TwigTemplate_ae58fb79cac732bb36c1f0e5952dcbb0e0e725ddc4835e9f5ef7024afd1b84bc extends Twig_Template
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
        $__internal_4bf7c7040b4d0707fbbdfb507586128225862f64556ee2bee869ceed75c2ed2e = $this->env->getExtension("native_profiler");
        $__internal_4bf7c7040b4d0707fbbdfb507586128225862f64556ee2bee869ceed75c2ed2e->enter($__internal_4bf7c7040b4d0707fbbdfb507586128225862f64556ee2bee869ceed75c2ed2e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_4bf7c7040b4d0707fbbdfb507586128225862f64556ee2bee869ceed75c2ed2e->leave($__internal_4bf7c7040b4d0707fbbdfb507586128225862f64556ee2bee869ceed75c2ed2e_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_fbc51f7f5b7e37184aca5934ce2f6f75aa6510afdd48c24c6bcce770a8f9c616 = $this->env->getExtension("native_profiler");
        $__internal_fbc51f7f5b7e37184aca5934ce2f6f75aa6510afdd48c24c6bcce770a8f9c616->enter($__internal_fbc51f7f5b7e37184aca5934ce2f6f75aa6510afdd48c24c6bcce770a8f9c616_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("resetting.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        echo "
";
        
        $__internal_fbc51f7f5b7e37184aca5934ce2f6f75aa6510afdd48c24c6bcce770a8f9c616->leave($__internal_fbc51f7f5b7e37184aca5934ce2f6f75aa6510afdd48c24c6bcce770a8f9c616_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_8ea5adbbe1068b679cadc288c625850c8a8b2bea7a34e4c790a86f2453e3213a = $this->env->getExtension("native_profiler");
        $__internal_8ea5adbbe1068b679cadc288c625850c8a8b2bea7a34e4c790a86f2453e3213a->enter($__internal_8ea5adbbe1068b679cadc288c625850c8a8b2bea7a34e4c790a86f2453e3213a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("resetting.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8ea5adbbe1068b679cadc288c625850c8a8b2bea7a34e4c790a86f2453e3213a->leave($__internal_8ea5adbbe1068b679cadc288c625850c8a8b2bea7a34e4c790a86f2453e3213a_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_eb9ced0f0f7b3e10440a5ac0bb79dcf6bb4c9f6ff487df5083c138d95d58b0a2 = $this->env->getExtension("native_profiler");
        $__internal_eb9ced0f0f7b3e10440a5ac0bb79dcf6bb4c9f6ff487df5083c138d95d58b0a2->enter($__internal_eb9ced0f0f7b3e10440a5ac0bb79dcf6bb4c9f6ff487df5083c138d95d58b0a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_eb9ced0f0f7b3e10440a5ac0bb79dcf6bb4c9f6ff487df5083c138d95d58b0a2->leave($__internal_eb9ced0f0f7b3e10440a5ac0bb79dcf6bb4c9f6ff487df5083c138d95d58b0a2_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:email.txt.twig";
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
