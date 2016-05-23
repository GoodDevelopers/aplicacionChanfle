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
        $__internal_905b979cf224cccaa2941707daf45fa8104e49100dfced221a247970c6c6aa70 = $this->env->getExtension("native_profiler");
        $__internal_905b979cf224cccaa2941707daf45fa8104e49100dfced221a247970c6c6aa70->enter($__internal_905b979cf224cccaa2941707daf45fa8104e49100dfced221a247970c6c6aa70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_905b979cf224cccaa2941707daf45fa8104e49100dfced221a247970c6c6aa70->leave($__internal_905b979cf224cccaa2941707daf45fa8104e49100dfced221a247970c6c6aa70_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_34f54c7568a8ec7b8f8d6978175fba49802c85d4316e059eaf8f3480e47b3469 = $this->env->getExtension("native_profiler");
        $__internal_34f54c7568a8ec7b8f8d6978175fba49802c85d4316e059eaf8f3480e47b3469->enter($__internal_34f54c7568a8ec7b8f8d6978175fba49802c85d4316e059eaf8f3480e47b3469_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("FOSUserBundle:Resetting:request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_34f54c7568a8ec7b8f8d6978175fba49802c85d4316e059eaf8f3480e47b3469->leave($__internal_34f54c7568a8ec7b8f8d6978175fba49802c85d4316e059eaf8f3480e47b3469_prof);

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
