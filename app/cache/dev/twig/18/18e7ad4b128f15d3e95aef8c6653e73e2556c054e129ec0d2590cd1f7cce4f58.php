<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_84c6de8241425dfbb33e665a46f638627c3521bcb0167b86ebff8bcee78e266e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_2edbbfca40913870f5cc6337500b142920a13f38ce52607270fbe356a640fefe = $this->env->getExtension("native_profiler");
        $__internal_2edbbfca40913870f5cc6337500b142920a13f38ce52607270fbe356a640fefe->enter($__internal_2edbbfca40913870f5cc6337500b142920a13f38ce52607270fbe356a640fefe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2edbbfca40913870f5cc6337500b142920a13f38ce52607270fbe356a640fefe->leave($__internal_2edbbfca40913870f5cc6337500b142920a13f38ce52607270fbe356a640fefe_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c2bfcf4516ff6f2188c36b31eab7c5550a17b4f6dd4b01fd0665759ed72101e3 = $this->env->getExtension("native_profiler");
        $__internal_c2bfcf4516ff6f2188c36b31eab7c5550a17b4f6dd4b01fd0665759ed72101e3->enter($__internal_c2bfcf4516ff6f2188c36b31eab7c5550a17b4f6dd4b01fd0665759ed72101e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_c2bfcf4516ff6f2188c36b31eab7c5550a17b4f6dd4b01fd0665759ed72101e3->leave($__internal_c2bfcf4516ff6f2188c36b31eab7c5550a17b4f6dd4b01fd0665759ed72101e3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
