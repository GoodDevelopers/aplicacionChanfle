<?php

/* FOSUserBundle:Group:show_content.html.twig */
class __TwigTemplate_22932c7fe5134f66066a2bb42df402dcd672fabfadde2ddc1f937897109ba6fe extends Twig_Template
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
        $__internal_5d0e306d010d2f193a3cb967f8afeeb0d535492e07b20412360cdd75e0cc05ce = $this->env->getExtension("native_profiler");
        $__internal_5d0e306d010d2f193a3cb967f8afeeb0d535492e07b20412360cdd75e0cc05ce->enter($__internal_5d0e306d010d2f193a3cb967f8afeeb0d535492e07b20412360cdd75e0cc05ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show_content.html.twig"));

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
        
        $__internal_5d0e306d010d2f193a3cb967f8afeeb0d535492e07b20412360cdd75e0cc05ce->leave($__internal_5d0e306d010d2f193a3cb967f8afeeb0d535492e07b20412360cdd75e0cc05ce_prof);

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
