<?php

/* @KnpPaginator/Pagination/sortable_link.html.twig */
class __TwigTemplate_57b5d51cd5403e727a338fdcc55263e973cfe3c213758b2d866436f6cbe4862e extends Twig_Template
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
        $__internal_ccd94667dbf81a40e3b11b221b1cc955dc088a574b54630efe5116c44b9dc883 = $this->env->getExtension("native_profiler");
        $__internal_ccd94667dbf81a40e3b11b221b1cc955dc088a574b54630efe5116c44b9dc883->enter($__internal_ccd94667dbf81a40e3b11b221b1cc955dc088a574b54630efe5116c44b9dc883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@KnpPaginator/Pagination/sortable_link.html.twig"));

        // line 1
        echo "<a";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : $this->getContext($context, "options")));
        foreach ($context['_seq'] as $context["attr"] => $context["value"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["value"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['value'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">";
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "</a>
";
        
        $__internal_ccd94667dbf81a40e3b11b221b1cc955dc088a574b54630efe5116c44b9dc883->leave($__internal_ccd94667dbf81a40e3b11b221b1cc955dc088a574b54630efe5116c44b9dc883_prof);

    }

    public function getTemplateName()
    {
        return "@KnpPaginator/Pagination/sortable_link.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <a{% for attr, value in options %} {{ attr }}="{{ value }}"{% endfor %}>{{ title }}</a>*/
/* */
