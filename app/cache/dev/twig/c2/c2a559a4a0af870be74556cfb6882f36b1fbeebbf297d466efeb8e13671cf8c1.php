<?php

/* @FOSUser/ChangePassword/changePassword.html.twig */
class __TwigTemplate_ba41d35b4c83724899521ef94cc6babad6ff322da49682a1063dce02186fb833 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 1);
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
        $__internal_1327656c60f18b9941c407212eb84f9b24d7756a98ff10acf035afc304dadbb6 = $this->env->getExtension("native_profiler");
        $__internal_1327656c60f18b9941c407212eb84f9b24d7756a98ff10acf035afc304dadbb6->enter($__internal_1327656c60f18b9941c407212eb84f9b24d7756a98ff10acf035afc304dadbb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1327656c60f18b9941c407212eb84f9b24d7756a98ff10acf035afc304dadbb6->leave($__internal_1327656c60f18b9941c407212eb84f9b24d7756a98ff10acf035afc304dadbb6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_61ec761aa309507e8774b8b650eb3e985b2e694400e36dfc406de95c1269a5b4 = $this->env->getExtension("native_profiler");
        $__internal_61ec761aa309507e8774b8b650eb3e985b2e694400e36dfc406de95c1269a5b4->enter($__internal_61ec761aa309507e8774b8b650eb3e985b2e694400e36dfc406de95c1269a5b4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "@FOSUser/ChangePassword/changePassword.html.twig", 4)->display($context);
        
        $__internal_61ec761aa309507e8774b8b650eb3e985b2e694400e36dfc406de95c1269a5b4->leave($__internal_61ec761aa309507e8774b8b650eb3e985b2e694400e36dfc406de95c1269a5b4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/changePassword.html.twig";
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
/* {% include "FOSUserBundle:ChangePassword:changePassword_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
