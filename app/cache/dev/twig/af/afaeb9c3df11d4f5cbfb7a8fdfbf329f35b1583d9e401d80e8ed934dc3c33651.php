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
        $__internal_a2beaf2da4db6fffc51dc06b2da230cc17699b68a7751592d169546bb94295df = $this->env->getExtension("native_profiler");
        $__internal_a2beaf2da4db6fffc51dc06b2da230cc17699b68a7751592d169546bb94295df->enter($__internal_a2beaf2da4db6fffc51dc06b2da230cc17699b68a7751592d169546bb94295df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a2beaf2da4db6fffc51dc06b2da230cc17699b68a7751592d169546bb94295df->leave($__internal_a2beaf2da4db6fffc51dc06b2da230cc17699b68a7751592d169546bb94295df_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9f7ce9e36cddd08e3a326d8464c0550c5ec668c8ac2a23927a1fc47be481ecd7 = $this->env->getExtension("native_profiler");
        $__internal_9f7ce9e36cddd08e3a326d8464c0550c5ec668c8ac2a23927a1fc47be481ecd7->enter($__internal_9f7ce9e36cddd08e3a326d8464c0550c5ec668c8ac2a23927a1fc47be481ecd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_9f7ce9e36cddd08e3a326d8464c0550c5ec668c8ac2a23927a1fc47be481ecd7->leave($__internal_9f7ce9e36cddd08e3a326d8464c0550c5ec668c8ac2a23927a1fc47be481ecd7_prof);

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
