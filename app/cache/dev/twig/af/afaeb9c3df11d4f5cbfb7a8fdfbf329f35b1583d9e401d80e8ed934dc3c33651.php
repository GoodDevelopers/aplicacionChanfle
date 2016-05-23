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
        $__internal_73d96a53e09515feec1a926102dd408a5629e0dfb2c4f77c709d5f3aa503c8f5 = $this->env->getExtension("native_profiler");
        $__internal_73d96a53e09515feec1a926102dd408a5629e0dfb2c4f77c709d5f3aa503c8f5->enter($__internal_73d96a53e09515feec1a926102dd408a5629e0dfb2c4f77c709d5f3aa503c8f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_73d96a53e09515feec1a926102dd408a5629e0dfb2c4f77c709d5f3aa503c8f5->leave($__internal_73d96a53e09515feec1a926102dd408a5629e0dfb2c4f77c709d5f3aa503c8f5_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0eeff3327a2a6665366805de971a19b7d2df2e4e20f1e41e32c328bf6a79a9ec = $this->env->getExtension("native_profiler");
        $__internal_0eeff3327a2a6665366805de971a19b7d2df2e4e20f1e41e32c328bf6a79a9ec->enter($__internal_0eeff3327a2a6665366805de971a19b7d2df2e4e20f1e41e32c328bf6a79a9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_0eeff3327a2a6665366805de971a19b7d2df2e4e20f1e41e32c328bf6a79a9ec->leave($__internal_0eeff3327a2a6665366805de971a19b7d2df2e4e20f1e41e32c328bf6a79a9ec_prof);

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
