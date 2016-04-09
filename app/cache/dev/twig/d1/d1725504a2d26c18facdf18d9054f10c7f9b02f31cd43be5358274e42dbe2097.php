<?php

/* InventarioBundle:Producto:new.html.twig */
class __TwigTemplate_9d6b81fee6a6b13f3f108f9b7dc0bbe0e0281e969008a1f511839cbbc38c7779 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:Producto:new.html.twig", 1);
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
        $__internal_f173ddbeba8e4b49ed2f8f4b57ba323023a8fe71ab021a064178ac70cc42677f = $this->env->getExtension("native_profiler");
        $__internal_f173ddbeba8e4b49ed2f8f4b57ba323023a8fe71ab021a064178ac70cc42677f->enter($__internal_f173ddbeba8e4b49ed2f8f4b57ba323023a8fe71ab021a064178ac70cc42677f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:Producto:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f173ddbeba8e4b49ed2f8f4b57ba323023a8fe71ab021a064178ac70cc42677f->leave($__internal_f173ddbeba8e4b49ed2f8f4b57ba323023a8fe71ab021a064178ac70cc42677f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0f4d473ef74554bad21b94d7207f4d62f622d91c5f6924ad67b08963c8f1fe8 = $this->env->getExtension("native_profiler");
        $__internal_d0f4d473ef74554bad21b94d7207f4d62f622d91c5f6924ad67b08963c8f1fe8->enter($__internal_d0f4d473ef74554bad21b94d7207f4d62f622d91c5f6924ad67b08963c8f1fe8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Producto creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("producto_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_d0f4d473ef74554bad21b94d7207f4d62f622d91c5f6924ad67b08963c8f1fe8->leave($__internal_d0f4d473ef74554bad21b94d7207f4d62f622d91c5f6924ad67b08963c8f1fe8_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:Producto:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>Producto creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('producto_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
