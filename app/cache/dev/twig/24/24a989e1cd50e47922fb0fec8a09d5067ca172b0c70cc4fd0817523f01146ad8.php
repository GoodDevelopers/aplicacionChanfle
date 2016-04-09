<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_d37aa1800176ce8257cc531b1125a7a4dcf1d911eb041720aa3803d783f91f3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_edcf54597750ef85e40404580ad97768c0d2b5ec73cbac0c40ace80e41b2a1aa = $this->env->getExtension("native_profiler");
        $__internal_edcf54597750ef85e40404580ad97768c0d2b5ec73cbac0c40ace80e41b2a1aa->enter($__internal_edcf54597750ef85e40404580ad97768c0d2b5ec73cbac0c40ace80e41b2a1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_edcf54597750ef85e40404580ad97768c0d2b5ec73cbac0c40ace80e41b2a1aa->leave($__internal_edcf54597750ef85e40404580ad97768c0d2b5ec73cbac0c40ace80e41b2a1aa_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5df84c90d8462a55b5b4d73ae44f7455e1cbf14363ee0d8780559da56bc3588a = $this->env->getExtension("native_profiler");
        $__internal_5df84c90d8462a55b5b4d73ae44f7455e1cbf14363ee0d8780559da56bc3588a->enter($__internal_5df84c90d8462a55b5b4d73ae44f7455e1cbf14363ee0d8780559da56bc3588a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_5df84c90d8462a55b5b4d73ae44f7455e1cbf14363ee0d8780559da56bc3588a->leave($__internal_5df84c90d8462a55b5b4d73ae44f7455e1cbf14363ee0d8780559da56bc3588a_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
