<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_8916e7c6b91672df530bc82b13684a3750da8a1d871796d1f43edccf910c5139 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSUserBundle::layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_4437437dde07ea535dfce026a8aed002cbee9776a216b3ca3643b69349b7ec08 = $this->env->getExtension("native_profiler");
        $__internal_4437437dde07ea535dfce026a8aed002cbee9776a216b3ca3643b69349b7ec08->enter($__internal_4437437dde07ea535dfce026a8aed002cbee9776a216b3ca3643b69349b7ec08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4437437dde07ea535dfce026a8aed002cbee9776a216b3ca3643b69349b7ec08->leave($__internal_4437437dde07ea535dfce026a8aed002cbee9776a216b3ca3643b69349b7ec08_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_6b218d611ce52a7405132ada4c8f7bee1063527e51df931944e49dd657e86425 = $this->env->getExtension("native_profiler");
        $__internal_6b218d611ce52a7405132ada4c8f7bee1063527e51df931944e49dd657e86425->enter($__internal_6b218d611ce52a7405132ada4c8f7bee1063527e51df931944e49dd657e86425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.confirmed", array("%username%" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if ((isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, (isset($context["targetUrl"]) ? $context["targetUrl"] : $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_6b218d611ce52a7405132ada4c8f7bee1063527e51df931944e49dd657e86425->leave($__internal_6b218d611ce52a7405132ada4c8f7bee1063527e51df931944e49dd657e86425_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  47 => 8,  45 => 7,  40 => 6,  34 => 5,  11 => 1,);
    }
}
/* {% extends "FOSUserBundle::layout.html.twig" %}*/
/* */
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* {% block fos_user_content %}*/
/*     <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>*/
/*     {% if targetUrl %}*/
/*     <p><a href="{{ targetUrl }}">{{ 'registration.back'|trans }}</a></p>*/
/*     {% endif %}*/
/* {% endblock fos_user_content %}*/
/* */
