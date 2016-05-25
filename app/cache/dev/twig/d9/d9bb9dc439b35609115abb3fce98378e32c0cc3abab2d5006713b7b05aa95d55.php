<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_9808a83a6737026fcd8da69bdbea4e2efbef34a189f5fe38a852e92c4b7afe37 extends Twig_Template
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
        $__internal_63aa34fe91f32cf0e94b9432832cccc4bf747f0c7ebf78d270b2966c247b481c = $this->env->getExtension("native_profiler");
        $__internal_63aa34fe91f32cf0e94b9432832cccc4bf747f0c7ebf78d270b2966c247b481c->enter($__internal_63aa34fe91f32cf0e94b9432832cccc4bf747f0c7ebf78d270b2966c247b481c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        $this->displayBlock('body_text', $context, $blocks);
        // line 12
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_63aa34fe91f32cf0e94b9432832cccc4bf747f0c7ebf78d270b2966c247b481c->leave($__internal_63aa34fe91f32cf0e94b9432832cccc4bf747f0c7ebf78d270b2966c247b481c_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_c2d7c2e6438d4a0b9df3f4d0550d955e18c47a05a04c813a99d1fb4c8016dc7b = $this->env->getExtension("native_profiler");
        $__internal_c2d7c2e6438d4a0b9df3f4d0550d955e18c47a05a04c813a99d1fb4c8016dc7b->enter($__internal_c2d7c2e6438d4a0b9df3f4d0550d955e18c47a05a04c813a99d1fb4c8016dc7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('translator')->trans("registration.email.subject", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_c2d7c2e6438d4a0b9df3f4d0550d955e18c47a05a04c813a99d1fb4c8016dc7b->leave($__internal_c2d7c2e6438d4a0b9df3f4d0550d955e18c47a05a04c813a99d1fb4c8016dc7b_prof);

    }

    // line 7
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_9ba097326be4113ec696c68090993bb4acb2e50da72cc07d98905e146428a3a7 = $this->env->getExtension("native_profiler");
        $__internal_9ba097326be4113ec696c68090993bb4acb2e50da72cc07d98905e146428a3a7->enter($__internal_9ba097326be4113ec696c68090993bb4acb2e50da72cc07d98905e146428a3a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 9
        echo $this->env->getExtension('translator')->trans("registration.email.message", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => (isset($context["confirmationUrl"]) ? $context["confirmationUrl"] : $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_9ba097326be4113ec696c68090993bb4acb2e50da72cc07d98905e146428a3a7->leave($__internal_9ba097326be4113ec696c68090993bb4acb2e50da72cc07d98905e146428a3a7_prof);

    }

    // line 12
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_c995d4988a5e39cb6f678b55dc39e947806a5149534ec3e3b14aba20a24b48a4 = $this->env->getExtension("native_profiler");
        $__internal_c995d4988a5e39cb6f678b55dc39e947806a5149534ec3e3b14aba20a24b48a4->enter($__internal_c995d4988a5e39cb6f678b55dc39e947806a5149534ec3e3b14aba20a24b48a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_c995d4988a5e39cb6f678b55dc39e947806a5149534ec3e3b14aba20a24b48a4->leave($__internal_c995d4988a5e39cb6f678b55dc39e947806a5149534ec3e3b14aba20a24b48a4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
