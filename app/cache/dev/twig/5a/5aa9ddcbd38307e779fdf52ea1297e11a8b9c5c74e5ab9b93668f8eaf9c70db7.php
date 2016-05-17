<?php

/* :venta:edit.html.twig */
class __TwigTemplate_1b4fe524062463997a06969338ca2c0037ebac8b4d7425a29f4b85f8de7e08da extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", ":venta:edit.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c3cddb4fee6fd0c475cecb5342bc720d9767ee60eef9f36c6136cde711f3ae01 = $this->env->getExtension("native_profiler");
        $__internal_c3cddb4fee6fd0c475cecb5342bc720d9767ee60eef9f36c6136cde711f3ae01->enter($__internal_c3cddb4fee6fd0c475cecb5342bc720d9767ee60eef9f36c6136cde711f3ae01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", ":venta:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c3cddb4fee6fd0c475cecb5342bc720d9767ee60eef9f36c6136cde711f3ae01->leave($__internal_c3cddb4fee6fd0c475cecb5342bc720d9767ee60eef9f36c6136cde711f3ae01_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb6ce07bc7d1120339c4aa72e8e057dc0fd968020c5f43a9f20e9d48056783d2 = $this->env->getExtension("native_profiler");
        $__internal_fb6ce07bc7d1120339c4aa72e8e057dc0fd968020c5f43a9f20e9d48056783d2->enter($__internal_fb6ce07bc7d1120339c4aa72e8e057dc0fd968020c5f43a9f20e9d48056783d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Venta edit</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Edit\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["edit_form"]) ? $context["edit_form"] : $this->getContext($context, "edit_form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("venta_index");
        echo "\">Back to the list</a>
        </li>
        <li>
            ";
        // line 16
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_start');
        echo "
                <input type=\"submit\" value=\"Delete\">
            ";
        // line 18
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form_end');
        echo "
        </li>
    </ul>
";
        
        $__internal_fb6ce07bc7d1120339c4aa72e8e057dc0fd968020c5f43a9f20e9d48056783d2->leave($__internal_fb6ce07bc7d1120339c4aa72e8e057dc0fd968020c5f43a9f20e9d48056783d2_prof);

    }

    public function getTemplateName()
    {
        return ":venta:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 18,  66 => 16,  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Venta edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('venta_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
