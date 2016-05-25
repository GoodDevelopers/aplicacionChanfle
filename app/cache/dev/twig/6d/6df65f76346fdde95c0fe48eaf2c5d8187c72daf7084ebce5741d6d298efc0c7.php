<?php

/* InventarioBundle:tipoproducto:new.html.twig */
class __TwigTemplate_082c1ff0f21bbea6b9a2f29bc941ac334931e0edb50fd380d939d558cfb1fa6d extends Twig_Template
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
        $__internal_4e63ca579e2f6012e752a5011b13c9c8199f01599c77d4f19302c6b78add0d97 = $this->env->getExtension("native_profiler");
        $__internal_4e63ca579e2f6012e752a5011b13c9c8199f01599c77d4f19302c6b78add0d97->enter($__internal_4e63ca579e2f6012e752a5011b13c9c8199f01599c77d4f19302c6b78add0d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:tipoproducto:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4e63ca579e2f6012e752a5011b13c9c8199f01599c77d4f19302c6b78add0d97->leave($__internal_4e63ca579e2f6012e752a5011b13c9c8199f01599c77d4f19302c6b78add0d97_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_e5b17fc8c01aa977d41685c68c35ae0bc2f5fbf26611b91bdb6db142b3f67867 = $this->env->getExtension("native_profiler");
        $__internal_e5b17fc8c01aa977d41685c68c35ae0bc2f5fbf26611b91bdb6db142b3f67867->enter($__internal_e5b17fc8c01aa977d41685c68c35ae0bc2f5fbf26611b91bdb6db142b3f67867_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e5b17fc8c01aa977d41685c68c35ae0bc2f5fbf26611b91bdb6db142b3f67867->leave($__internal_e5b17fc8c01aa977d41685c68c35ae0bc2f5fbf26611b91bdb6db142b3f67867_prof);

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
