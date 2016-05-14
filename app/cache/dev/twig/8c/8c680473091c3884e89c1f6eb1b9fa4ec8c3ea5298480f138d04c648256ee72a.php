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
        $__internal_1fe79b3a730b6e58e619026650041acef37f3c7e1da50ed0e53b80d99f233eec = $this->env->getExtension("native_profiler");
        $__internal_1fe79b3a730b6e58e619026650041acef37f3c7e1da50ed0e53b80d99f233eec->enter($__internal_1fe79b3a730b6e58e619026650041acef37f3c7e1da50ed0e53b80d99f233eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1fe79b3a730b6e58e619026650041acef37f3c7e1da50ed0e53b80d99f233eec->leave($__internal_1fe79b3a730b6e58e619026650041acef37f3c7e1da50ed0e53b80d99f233eec_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_73db362d37eb625f3d096c3beb4d124b74de89d6dda9e9d61d5803ba38e39950 = $this->env->getExtension("native_profiler");
        $__internal_73db362d37eb625f3d096c3beb4d124b74de89d6dda9e9d61d5803ba38e39950->enter($__internal_73db362d37eb625f3d096c3beb4d124b74de89d6dda9e9d61d5803ba38e39950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "FOSUserBundle:Group:new.html.twig", 4)->display($context);
        
        $__internal_73db362d37eb625f3d096c3beb4d124b74de89d6dda9e9d61d5803ba38e39950->leave($__internal_73db362d37eb625f3d096c3beb4d124b74de89d6dda9e9d61d5803ba38e39950_prof);

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
