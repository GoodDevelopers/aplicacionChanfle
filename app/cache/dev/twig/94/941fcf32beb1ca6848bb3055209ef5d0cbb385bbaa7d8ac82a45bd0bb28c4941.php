<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_080410b4e56e5d60c141728a6964250f3793c810171de4b9dd9318fb6b5cfba7 extends Twig_Template
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
        $__internal_7d74db1be88d3fcefca33aeba981c2ad067824c85e0d743d06f6367b9d724d33 = $this->env->getExtension("native_profiler");
        $__internal_7d74db1be88d3fcefca33aeba981c2ad067824c85e0d743d06f6367b9d724d33->enter($__internal_7d74db1be88d3fcefca33aeba981c2ad067824c85e0d743d06f6367b9d724d33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

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
        
        $__internal_7d74db1be88d3fcefca33aeba981c2ad067824c85e0d743d06f6367b9d724d33->leave($__internal_7d74db1be88d3fcefca33aeba981c2ad067824c85e0d743d06f6367b9d724d33_prof);

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
