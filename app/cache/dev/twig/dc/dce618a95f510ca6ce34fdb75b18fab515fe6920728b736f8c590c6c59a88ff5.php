<?php

/* @Costos/costo/edit.html.twig */
class __TwigTemplate_b24be8a0d63fe9798a9bfba12abf68fd8087e4f7f359de615013342730cfcd7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Costos/costo/edit.html.twig", 1);
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
        $__internal_12ab3f01c17c82221a66095521be03b6ea76cb3afad1145a37f2713f37807cbf = $this->env->getExtension("native_profiler");
        $__internal_12ab3f01c17c82221a66095521be03b6ea76cb3afad1145a37f2713f37807cbf->enter($__internal_12ab3f01c17c82221a66095521be03b6ea76cb3afad1145a37f2713f37807cbf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Costos/costo/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_12ab3f01c17c82221a66095521be03b6ea76cb3afad1145a37f2713f37807cbf->leave($__internal_12ab3f01c17c82221a66095521be03b6ea76cb3afad1145a37f2713f37807cbf_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4ff167b46680aff14fd3bf6dc895a9978fc7f5cb34e7214cf59e058b634465f1 = $this->env->getExtension("native_profiler");
        $__internal_4ff167b46680aff14fd3bf6dc895a9978fc7f5cb34e7214cf59e058b634465f1->enter($__internal_4ff167b46680aff14fd3bf6dc895a9978fc7f5cb34e7214cf59e058b634465f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Costo edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("costo_index");
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
        
        $__internal_4ff167b46680aff14fd3bf6dc895a9978fc7f5cb34e7214cf59e058b634465f1->leave($__internal_4ff167b46680aff14fd3bf6dc895a9978fc7f5cb34e7214cf59e058b634465f1_prof);

    }

    public function getTemplateName()
    {
        return "@Costos/costo/edit.html.twig";
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
/*     <h1>Costo edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('costo_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
