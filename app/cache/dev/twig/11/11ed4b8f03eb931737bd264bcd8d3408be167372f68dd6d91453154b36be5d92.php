<?php

/* InventarioBundle:tipoproducto:new.html.twig */
class __TwigTemplate_29fb0dbc29b683a3e6af7e7782fa5ed5fac0c6c2d7c649b06f6f6f2008357c8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:tipoproducto:new.html.twig", 1);
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
        $__internal_8e06784ed0f414d2e2fa2be0a1beea3a65ffbbabbf09d314429e4feee8f305a4 = $this->env->getExtension("native_profiler");
        $__internal_8e06784ed0f414d2e2fa2be0a1beea3a65ffbbabbf09d314429e4feee8f305a4->enter($__internal_8e06784ed0f414d2e2fa2be0a1beea3a65ffbbabbf09d314429e4feee8f305a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:tipoproducto:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8e06784ed0f414d2e2fa2be0a1beea3a65ffbbabbf09d314429e4feee8f305a4->leave($__internal_8e06784ed0f414d2e2fa2be0a1beea3a65ffbbabbf09d314429e4feee8f305a4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_562d279b544e0b256fbe21fdb4e3bea595cfec3096f72c67090c069759de649e = $this->env->getExtension("native_profiler");
        $__internal_562d279b544e0b256fbe21fdb4e3bea595cfec3096f72c67090c069759de649e->enter($__internal_562d279b544e0b256fbe21fdb4e3bea595cfec3096f72c67090c069759de649e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TipoProducto creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("tipoproducto_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_562d279b544e0b256fbe21fdb4e3bea595cfec3096f72c67090c069759de649e->leave($__internal_562d279b544e0b256fbe21fdb4e3bea595cfec3096f72c67090c069759de649e_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:tipoproducto:new.html.twig";
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
/*     <h1>TipoProducto creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipoproducto_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */