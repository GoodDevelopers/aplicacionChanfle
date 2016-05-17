<?php

/* JornadasLaboralesBundle:caja:new.html.twig */
class __TwigTemplate_01eca9b8ae509e92f93082e31cc888c66d178a414525c3b9a898fc2e433e6a16 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JornadasLaboralesBundle:caja:new.html.twig", 1);
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
        $__internal_a54e98b66e6d26e673a81f7408264b3bc6d4fce972f7ca4935f5c4166eb99b2a = $this->env->getExtension("native_profiler");
        $__internal_a54e98b66e6d26e673a81f7408264b3bc6d4fce972f7ca4935f5c4166eb99b2a->enter($__internal_a54e98b66e6d26e673a81f7408264b3bc6d4fce972f7ca4935f5c4166eb99b2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JornadasLaboralesBundle:caja:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a54e98b66e6d26e673a81f7408264b3bc6d4fce972f7ca4935f5c4166eb99b2a->leave($__internal_a54e98b66e6d26e673a81f7408264b3bc6d4fce972f7ca4935f5c4166eb99b2a_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_ab0e061a228ca8fff73c910718572a9501a00f0d18e911b46a351951d95d9f5c = $this->env->getExtension("native_profiler");
        $__internal_ab0e061a228ca8fff73c910718572a9501a00f0d18e911b46a351951d95d9f5c->enter($__internal_ab0e061a228ca8fff73c910718572a9501a00f0d18e911b46a351951d95d9f5c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Caja creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("caja_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_ab0e061a228ca8fff73c910718572a9501a00f0d18e911b46a351951d95d9f5c->leave($__internal_ab0e061a228ca8fff73c910718572a9501a00f0d18e911b46a351951d95d9f5c_prof);

    }

    public function getTemplateName()
    {
        return "JornadasLaboralesBundle:caja:new.html.twig";
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
/*     <h1>Caja creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('caja_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
