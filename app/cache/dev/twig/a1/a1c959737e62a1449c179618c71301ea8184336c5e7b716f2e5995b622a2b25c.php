<?php

/* FOSUserBundle:Profile:edit.html.twig */
class __TwigTemplate_e80a4ab61ebc6cec0be2b3eab0ca9a18abe8ce0d0c03066dc541cbb9231cb8a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Profile:edit.html.twig", 1);
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
        $__internal_4249b17983c1818ff860750725bf76545f4a41de7ade5e47ea99de2831211c27 = $this->env->getExtension("native_profiler");
        $__internal_4249b17983c1818ff860750725bf76545f4a41de7ade5e47ea99de2831211c27->enter($__internal_4249b17983c1818ff860750725bf76545f4a41de7ade5e47ea99de2831211c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Profile:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4249b17983c1818ff860750725bf76545f4a41de7ade5e47ea99de2831211c27->leave($__internal_4249b17983c1818ff860750725bf76545f4a41de7ade5e47ea99de2831211c27_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5ba470a4dd09970b1a9875e5180661c1080824a65c7d5f923859c4a4a78bc55f = $this->env->getExtension("native_profiler");
        $__internal_5ba470a4dd09970b1a9875e5180661c1080824a65c7d5f923859c4a4a78bc55f->enter($__internal_5ba470a4dd09970b1a9875e5180661c1080824a65c7d5f923859c4a4a78bc55f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "FOSUserBundle:Profile:edit.html.twig", 4)->display($context);
        
        $__internal_5ba470a4dd09970b1a9875e5180661c1080824a65c7d5f923859c4a4a78bc55f->leave($__internal_5ba470a4dd09970b1a9875e5180661c1080824a65c7d5f923859c4a4a78bc55f_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:edit.html.twig";
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
/* {% include "FOSUserBundle:Profile:edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
