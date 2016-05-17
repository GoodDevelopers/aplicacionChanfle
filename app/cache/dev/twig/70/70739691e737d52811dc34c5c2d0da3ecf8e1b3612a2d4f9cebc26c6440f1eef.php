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
        $__internal_8e12fec7a1ed3cdd30a8a3e3ed098b6cfd2c2b079c9e48f8d9aec00e3047d7ca = $this->env->getExtension("native_profiler");
        $__internal_8e12fec7a1ed3cdd30a8a3e3ed098b6cfd2c2b079c9e48f8d9aec00e3047d7ca->enter($__internal_8e12fec7a1ed3cdd30a8a3e3ed098b6cfd2c2b079c9e48f8d9aec00e3047d7ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:ChangePassword:changePassword.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e12fec7a1ed3cdd30a8a3e3ed098b6cfd2c2b079c9e48f8d9aec00e3047d7ca->leave($__internal_8e12fec7a1ed3cdd30a8a3e3ed098b6cfd2c2b079c9e48f8d9aec00e3047d7ca_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_409f763f4140ffeb21322f7bc86193c83a2c9bc2e08db4984f96ac79f8a7839f = $this->env->getExtension("native_profiler");
        $__internal_409f763f4140ffeb21322f7bc86193c83a2c9bc2e08db4984f96ac79f8a7839f->enter($__internal_409f763f4140ffeb21322f7bc86193c83a2c9bc2e08db4984f96ac79f8a7839f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:ChangePassword:changePassword_content.html.twig", "FOSUserBundle:ChangePassword:changePassword.html.twig", 4)->display($context);
        
        $__internal_409f763f4140ffeb21322f7bc86193c83a2c9bc2e08db4984f96ac79f8a7839f->leave($__internal_409f763f4140ffeb21322f7bc86193c83a2c9bc2e08db4984f96ac79f8a7839f_prof);

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
