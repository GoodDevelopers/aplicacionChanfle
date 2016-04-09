<?php

/* FOSUserBundle:ChangePassword:changePassword.html.twig */
class __TwigTemplate_9aedf1de34d42f8765af4973cb39dcd6b7c26191074197971db78ec7d4f28f73 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 1);
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
        $__internal_a6e9960e8fe77ec0bc535f8bbeb289a8ec0f143e3d139fcf451eb54870eb118f = $this->env->getExtension("native_profiler");
        $__internal_a6e9960e8fe77ec0bc535f8bbeb289a8ec0f143e3d139fcf451eb54870eb118f->enter($__internal_a6e9960e8fe77ec0bc535f8bbeb289a8ec0f143e3d139fcf451eb54870eb118f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a6e9960e8fe77ec0bc535f8bbeb289a8ec0f143e3d139fcf451eb54870eb118f->leave($__internal_a6e9960e8fe77ec0bc535f8bbeb289a8ec0f143e3d139fcf451eb54870eb118f_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a690ed7cf051364d80086ef94be693c24263a9a73e7edf076d4d686a655d0452 = $this->env->getExtension("native_profiler");
        $__internal_a690ed7cf051364d80086ef94be693c24263a9a73e7edf076d4d686a655d0452->enter($__internal_a690ed7cf051364d80086ef94be693c24263a9a73e7edf076d4d686a655d0452_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_a690ed7cf051364d80086ef94be693c24263a9a73e7edf076d4d686a655d0452->leave($__internal_a690ed7cf051364d80086ef94be693c24263a9a73e7edf076d4d686a655d0452_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:ChangePassword:changePassword.html.twig";
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
