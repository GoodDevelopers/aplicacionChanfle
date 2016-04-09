<?php

/* FOSUserBundle:Group:edit.html.twig */
class __TwigTemplate_9525767148a997a23c957c6828d97df783af45e5e11e124f9469742bc181dab0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "FOSUserBundle:Group:edit.html.twig", 1);
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
        $__internal_705f98d665b9f75cdfec9ee08f221e0dafbeb67351b7424a4932039da42323fd = $this->env->getExtension("native_profiler");
        $__internal_705f98d665b9f75cdfec9ee08f221e0dafbeb67351b7424a4932039da42323fd->enter($__internal_705f98d665b9f75cdfec9ee08f221e0dafbeb67351b7424a4932039da42323fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_705f98d665b9f75cdfec9ee08f221e0dafbeb67351b7424a4932039da42323fd->leave($__internal_705f98d665b9f75cdfec9ee08f221e0dafbeb67351b7424a4932039da42323fd_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f2da088d7461f4d30ad9f8df1a98d636f1c3421615220104d69604fea9df2eec = $this->env->getExtension("native_profiler");
        $__internal_f2da088d7461f4d30ad9f8df1a98d636f1c3421615220104d69604fea9df2eec->enter($__internal_f2da088d7461f4d30ad9f8df1a98d636f1c3421615220104d69604fea9df2eec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Group:edit_content.html.twig", "FOSUserBundle:Group:edit.html.twig", 4)->display($context);
        
        $__internal_f2da088d7461f4d30ad9f8df1a98d636f1c3421615220104d69604fea9df2eec->leave($__internal_f2da088d7461f4d30ad9f8df1a98d636f1c3421615220104d69604fea9df2eec_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:edit.html.twig";
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
