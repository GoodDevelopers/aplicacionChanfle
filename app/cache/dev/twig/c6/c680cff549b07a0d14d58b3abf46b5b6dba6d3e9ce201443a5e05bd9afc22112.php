<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_f97059152515cc3ae5abe42358f748b4a5373dbc6c10c4cc55da0f204810ca6a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_022d53220f3087f61546117205da07c0619498e6fe7ad8b9b183ee08154ba807 = $this->env->getExtension("native_profiler");
        $__internal_022d53220f3087f61546117205da07c0619498e6fe7ad8b9b183ee08154ba807->enter($__internal_022d53220f3087f61546117205da07c0619498e6fe7ad8b9b183ee08154ba807_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_022d53220f3087f61546117205da07c0619498e6fe7ad8b9b183ee08154ba807->leave($__internal_022d53220f3087f61546117205da07c0619498e6fe7ad8b9b183ee08154ba807_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_06c0004611ed1f62681e1686cd3ddf2e8676f0e0d4d5ce149556dc81d905fde9 = $this->env->getExtension("native_profiler");
        $__internal_06c0004611ed1f62681e1686cd3ddf2e8676f0e0d4d5ce149556dc81d905fde9->enter($__internal_06c0004611ed1f62681e1686cd3ddf2e8676f0e0d4d5ce149556dc81d905fde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_06c0004611ed1f62681e1686cd3ddf2e8676f0e0d4d5ce149556dc81d905fde9->leave($__internal_06c0004611ed1f62681e1686cd3ddf2e8676f0e0d4d5ce149556dc81d905fde9_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
