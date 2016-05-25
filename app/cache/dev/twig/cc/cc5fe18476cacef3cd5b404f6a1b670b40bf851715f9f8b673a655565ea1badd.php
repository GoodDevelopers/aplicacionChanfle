<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_6ed07dcba15e87a924e27958b4dfc2682e6d39eceafbac339d567e7be5dee51b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_03ae196303beae380e7022d616386a7a06c0d8b65522d10087b072ddae27b6c1 = $this->env->getExtension("native_profiler");
        $__internal_03ae196303beae380e7022d616386a7a06c0d8b65522d10087b072ddae27b6c1->enter($__internal_03ae196303beae380e7022d616386a7a06c0d8b65522d10087b072ddae27b6c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["group"]) ? $context["group"] : $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_03ae196303beae380e7022d616386a7a06c0d8b65522d10087b072ddae27b6c1->leave($__internal_03ae196303beae380e7022d616386a7a06c0d8b65522d10087b072ddae27b6c1_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 4,  22 => 2,);
    }
}
/* {% trans_default_domain 'FOSUserBundle' %}*/
/* */
/* <div class="fos_user_group_show">*/
/*     <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>*/
/* </div>*/
/* */
