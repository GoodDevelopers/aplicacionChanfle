<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_bb2abeca9085adffba563ae4a640fe94e019b135deadbce65fe0d23f903925b0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_a63b31a602e0655d82a14b3e6dace8e3758b624f67ec982d6b445f9304cbbebd = $this->env->getExtension("native_profiler");
        $__internal_a63b31a602e0655d82a14b3e6dace8e3758b624f67ec982d6b445f9304cbbebd->enter($__internal_a63b31a602e0655d82a14b3e6dace8e3758b624f67ec982d6b445f9304cbbebd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a63b31a602e0655d82a14b3e6dace8e3758b624f67ec982d6b445f9304cbbebd->leave($__internal_a63b31a602e0655d82a14b3e6dace8e3758b624f67ec982d6b445f9304cbbebd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_758ecce5a2fe7da6a1cb46b93674cf3d18bf18083ca0fa7840af40818a067b2d = $this->env->getExtension("native_profiler");
        $__internal_758ecce5a2fe7da6a1cb46b93674cf3d18bf18083ca0fa7840af40818a067b2d->enter($__internal_758ecce5a2fe7da6a1cb46b93674cf3d18bf18083ca0fa7840af40818a067b2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Profile:edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_758ecce5a2fe7da6a1cb46b93674cf3d18bf18083ca0fa7840af40818a067b2d->leave($__internal_758ecce5a2fe7da6a1cb46b93674cf3d18bf18083ca0fa7840af40818a067b2d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
