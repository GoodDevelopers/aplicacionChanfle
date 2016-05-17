<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_05365c9105b2bc8209c3c5be68de3189c601b3db6b7a5f3584b6ddbbf2387a52 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_478a90d5beab4c187900eb57500bb2a51f1fa624cf1d986fe385641469cf141d = $this->env->getExtension("native_profiler");
        $__internal_478a90d5beab4c187900eb57500bb2a51f1fa624cf1d986fe385641469cf141d->enter($__internal_478a90d5beab4c187900eb57500bb2a51f1fa624cf1d986fe385641469cf141d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_478a90d5beab4c187900eb57500bb2a51f1fa624cf1d986fe385641469cf141d->leave($__internal_478a90d5beab4c187900eb57500bb2a51f1fa624cf1d986fe385641469cf141d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_36c1325575b2fcfa68d1508ca317149a2b35bdcb7a53a380c6c1c4ccfc8d3a79 = $this->env->getExtension("native_profiler");
        $__internal_36c1325575b2fcfa68d1508ca317149a2b35bdcb7a53a380c6c1c4ccfc8d3a79->enter($__internal_36c1325575b2fcfa68d1508ca317149a2b35bdcb7a53a380c6c1c4ccfc8d3a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_36c1325575b2fcfa68d1508ca317149a2b35bdcb7a53a380c6c1c4ccfc8d3a79->leave($__internal_36c1325575b2fcfa68d1508ca317149a2b35bdcb7a53a380c6c1c4ccfc8d3a79_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "FOSUserBundle:Group:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
