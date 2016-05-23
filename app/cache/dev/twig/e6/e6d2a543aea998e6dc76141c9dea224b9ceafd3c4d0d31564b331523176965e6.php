<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_f754d6d4706f51310a0af716fd6b2490a41f7f5de4578be51c0bdd196e904765 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_1ef649419df6938eb2f3223a1920510182a7fb2997275ff8cfeb007237f4cf3e = $this->env->getExtension("native_profiler");
        $__internal_1ef649419df6938eb2f3223a1920510182a7fb2997275ff8cfeb007237f4cf3e->enter($__internal_1ef649419df6938eb2f3223a1920510182a7fb2997275ff8cfeb007237f4cf3e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ef649419df6938eb2f3223a1920510182a7fb2997275ff8cfeb007237f4cf3e->leave($__internal_1ef649419df6938eb2f3223a1920510182a7fb2997275ff8cfeb007237f4cf3e_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0a3ffe7054c716a01cec30dc73a8096a453dd606097b87f3e17be85a980f9cb3 = $this->env->getExtension("native_profiler");
        $__internal_0a3ffe7054c716a01cec30dc73a8096a453dd606097b87f3e17be85a980f9cb3->enter($__internal_0a3ffe7054c716a01cec30dc73a8096a453dd606097b87f3e17be85a980f9cb3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_0a3ffe7054c716a01cec30dc73a8096a453dd606097b87f3e17be85a980f9cb3->leave($__internal_0a3ffe7054c716a01cec30dc73a8096a453dd606097b87f3e17be85a980f9cb3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
/* {% include "FOSUserBundle:Resetting:reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
