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
        $__internal_261c3f4ececdfee7f4f061335a045e9e8016f61e77633b33e39f26d31c3fda05 = $this->env->getExtension("native_profiler");
        $__internal_261c3f4ececdfee7f4f061335a045e9e8016f61e77633b33e39f26d31c3fda05->enter($__internal_261c3f4ececdfee7f4f061335a045e9e8016f61e77633b33e39f26d31c3fda05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JornadasLaboralesBundle:caja:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_261c3f4ececdfee7f4f061335a045e9e8016f61e77633b33e39f26d31c3fda05->leave($__internal_261c3f4ececdfee7f4f061335a045e9e8016f61e77633b33e39f26d31c3fda05_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4f2f18ae21e39dbcd7b5828aec0eb78ccea391d8c983bb3b46fac85b32a0e93f = $this->env->getExtension("native_profiler");
        $__internal_4f2f18ae21e39dbcd7b5828aec0eb78ccea391d8c983bb3b46fac85b32a0e93f->enter($__internal_4f2f18ae21e39dbcd7b5828aec0eb78ccea391d8c983bb3b46fac85b32a0e93f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_4f2f18ae21e39dbcd7b5828aec0eb78ccea391d8c983bb3b46fac85b32a0e93f->leave($__internal_4f2f18ae21e39dbcd7b5828aec0eb78ccea391d8c983bb3b46fac85b32a0e93f_prof);

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
