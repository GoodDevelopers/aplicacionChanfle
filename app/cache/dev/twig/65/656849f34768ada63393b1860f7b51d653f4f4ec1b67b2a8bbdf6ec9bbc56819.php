<?php

/* FOSUserBundle:Registration:register.html.twig */
class __TwigTemplate_937bb855121495934f9eda9a5e2c7560150dd321979a8aba5b690d1758a26dbe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Registration:register.html.twig", 1);
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
        $__internal_f3ffbf6ae9a03213707d653855fbc28f8584c01f45956ef8470d7c8477223403 = $this->env->getExtension("native_profiler");
        $__internal_f3ffbf6ae9a03213707d653855fbc28f8584c01f45956ef8470d7c8477223403->enter($__internal_f3ffbf6ae9a03213707d653855fbc28f8584c01f45956ef8470d7c8477223403_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Registration:register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f3ffbf6ae9a03213707d653855fbc28f8584c01f45956ef8470d7c8477223403->leave($__internal_f3ffbf6ae9a03213707d653855fbc28f8584c01f45956ef8470d7c8477223403_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c9948eaac7be6c2b5b9097f78b28c52289b138666feb82746fdcc3bd78136f78 = $this->env->getExtension("native_profiler");
        $__internal_c9948eaac7be6c2b5b9097f78b28c52289b138666feb82746fdcc3bd78136f78->enter($__internal_c9948eaac7be6c2b5b9097f78b28c52289b138666feb82746fdcc3bd78136f78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Registration:register_content.html.twig", "FOSUserBundle:Registration:register.html.twig", 4)->display($context);
        
        $__internal_c9948eaac7be6c2b5b9097f78b28c52289b138666feb82746fdcc3bd78136f78->leave($__internal_c9948eaac7be6c2b5b9097f78b28c52289b138666feb82746fdcc3bd78136f78_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Registration:register.html.twig";
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
/* {% include "FOSUserBundle:Registration:register_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
