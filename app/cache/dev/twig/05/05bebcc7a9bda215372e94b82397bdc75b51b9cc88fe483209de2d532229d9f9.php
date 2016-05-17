<?php

/* @JornadasLaborales/caja/edit.html.twig */
class __TwigTemplate_3792f7e452896c05f4a8be14448756a03a85a03abf031d7661272cd27a6adf91 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JornadasLaborales/caja/edit.html.twig", 1);
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
        $__internal_341cedfff5b83e113cd63efa1a9f5a00df72548b35cf17ea21b2021407e41bb4 = $this->env->getExtension("native_profiler");
        $__internal_341cedfff5b83e113cd63efa1a9f5a00df72548b35cf17ea21b2021407e41bb4->enter($__internal_341cedfff5b83e113cd63efa1a9f5a00df72548b35cf17ea21b2021407e41bb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JornadasLaborales/caja/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341cedfff5b83e113cd63efa1a9f5a00df72548b35cf17ea21b2021407e41bb4->leave($__internal_341cedfff5b83e113cd63efa1a9f5a00df72548b35cf17ea21b2021407e41bb4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_f6750c08e3ac911a983c56603454e4f1953652ac4b64029aea932e3d38a22cd5 = $this->env->getExtension("native_profiler");
        $__internal_f6750c08e3ac911a983c56603454e4f1953652ac4b64029aea932e3d38a22cd5->enter($__internal_f6750c08e3ac911a983c56603454e4f1953652ac4b64029aea932e3d38a22cd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Caja edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("caja_index");
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
        
        $__internal_f6750c08e3ac911a983c56603454e4f1953652ac4b64029aea932e3d38a22cd5->leave($__internal_f6750c08e3ac911a983c56603454e4f1953652ac4b64029aea932e3d38a22cd5_prof);

    }

    public function getTemplateName()
    {
        return "@JornadasLaborales/caja/edit.html.twig";
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
/*     <h1>Caja edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('caja_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
