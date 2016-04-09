<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_fbf53040938c6d6640dd7b104ddbeb70c079241abdd30a54db1f9d7944395a54 extends Twig_Template
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
        $__internal_87c2bc27d94af33381fb1658cb314237cd836a37659501cc443244863df9f0b5 = $this->env->getExtension("native_profiler");
        $__internal_87c2bc27d94af33381fb1658cb314237cd836a37659501cc443244863df9f0b5->enter($__internal_87c2bc27d94af33381fb1658cb314237cd836a37659501cc443244863df9f0b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_87c2bc27d94af33381fb1658cb314237cd836a37659501cc443244863df9f0b5->leave($__internal_87c2bc27d94af33381fb1658cb314237cd836a37659501cc443244863df9f0b5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show_content.html.twig";
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
