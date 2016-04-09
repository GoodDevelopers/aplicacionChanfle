<?php

/* FOSUserBundle:Resetting:request.html.twig */
class __TwigTemplate_0034739247cd6f894642d7ee1e809c7cfa142527cb6dbc7b9d1259b2587879bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Resetting:request.html.twig", 1);
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
        $__internal_83937b5994bdec47b4f44be2dfae4faed94452692ea8185347f6e12d7d014a83 = $this->env->getExtension("native_profiler");
        $__internal_83937b5994bdec47b4f44be2dfae4faed94452692ea8185347f6e12d7d014a83->enter($__internal_83937b5994bdec47b4f44be2dfae4faed94452692ea8185347f6e12d7d014a83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_83937b5994bdec47b4f44be2dfae4faed94452692ea8185347f6e12d7d014a83->leave($__internal_83937b5994bdec47b4f44be2dfae4faed94452692ea8185347f6e12d7d014a83_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f4ff5080eadf44da6fa2d2bdc1528c88a1f30ebe23463ad0ad33bf6a3c904fca = $this->env->getExtension("native_profiler");
        $__internal_f4ff5080eadf44da6fa2d2bdc1528c88a1f30ebe23463ad0ad33bf6a3c904fca->enter($__internal_f4ff5080eadf44da6fa2d2bdc1528c88a1f30ebe23463ad0ad33bf6a3c904fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "FOSUserBundle:Resetting:request.html.twig", 4)->display($context);
        
        $__internal_f4ff5080eadf44da6fa2d2bdc1528c88a1f30ebe23463ad0ad33bf6a3c904fca->leave($__internal_f4ff5080eadf44da6fa2d2bdc1528c88a1f30ebe23463ad0ad33bf6a3c904fca_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:request.html.twig";
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
/* {% include "FOSUserBundle:Resetting:request_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
