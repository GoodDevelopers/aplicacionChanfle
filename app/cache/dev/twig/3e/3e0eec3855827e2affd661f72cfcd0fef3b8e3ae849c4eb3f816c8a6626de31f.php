<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_6571455a57738638c909a87ade1c97f0817910dd371c69eff9a699852f5ebd70 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:show.html.twig", 1);
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
        $__internal_90cc27c754ef6cc31c75f802947342b5e8145926378f832490f133e64cf51e12 = $this->env->getExtension("native_profiler");
        $__internal_90cc27c754ef6cc31c75f802947342b5e8145926378f832490f133e64cf51e12->enter($__internal_90cc27c754ef6cc31c75f802947342b5e8145926378f832490f133e64cf51e12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_90cc27c754ef6cc31c75f802947342b5e8145926378f832490f133e64cf51e12->leave($__internal_90cc27c754ef6cc31c75f802947342b5e8145926378f832490f133e64cf51e12_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5cf098ce51f4694ed16d329af60bee5a8d3f42ed8a5f93e89abbba8928e8ca7b = $this->env->getExtension("native_profiler");
        $__internal_5cf098ce51f4694ed16d329af60bee5a8d3f42ed8a5f93e89abbba8928e8ca7b->enter($__internal_5cf098ce51f4694ed16d329af60bee5a8d3f42ed8a5f93e89abbba8928e8ca7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "FOSUserBundle:Profile:show.html.twig", 4)->display($context);
        
        $__internal_5cf098ce51f4694ed16d329af60bee5a8d3f42ed8a5f93e89abbba8928e8ca7b->leave($__internal_5cf098ce51f4694ed16d329af60bee5a8d3f42ed8a5f93e89abbba8928e8ca7b_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "FOSUserBundle:Profile:show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
