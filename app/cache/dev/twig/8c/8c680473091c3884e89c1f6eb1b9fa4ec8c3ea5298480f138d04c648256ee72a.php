<?php

/* FOSUserBundle:Group:new.html.twig */
class __TwigTemplate_30d83c4150cdd07cad31ff84b6909691681fd29cb070a50abd1884608cafe61a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:new.html.twig", 1);
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
        $__internal_be7783fa9a9ec2b41224d94291c4a8ab8524718d0e9fd58d28f9eba161dfb4c3 = $this->env->getExtension("native_profiler");
        $__internal_be7783fa9a9ec2b41224d94291c4a8ab8524718d0e9fd58d28f9eba161dfb4c3->enter($__internal_be7783fa9a9ec2b41224d94291c4a8ab8524718d0e9fd58d28f9eba161dfb4c3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_be7783fa9a9ec2b41224d94291c4a8ab8524718d0e9fd58d28f9eba161dfb4c3->leave($__internal_be7783fa9a9ec2b41224d94291c4a8ab8524718d0e9fd58d28f9eba161dfb4c3_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_566dd44cff4ea33e2cb7d14718da5b0adcd56a271b0494827f9219e3e288aa81 = $this->env->getExtension("native_profiler");
        $__internal_566dd44cff4ea33e2cb7d14718da5b0adcd56a271b0494827f9219e3e288aa81->enter($__internal_566dd44cff4ea33e2cb7d14718da5b0adcd56a271b0494827f9219e3e288aa81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_566dd44cff4ea33e2cb7d14718da5b0adcd56a271b0494827f9219e3e288aa81->leave($__internal_566dd44cff4ea33e2cb7d14718da5b0adcd56a271b0494827f9219e3e288aa81_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:new.html.twig";
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
/* {% include "FOSUserBundle:Group:new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
