<?php

/* @JornadasLaborales/caja/new.html.twig */
class __TwigTemplate_c371a17d74c40ed8b5dab07e5a7bc83c04ab1967f172ceb4ed57270c3a562c6f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@JornadasLaborales/caja/new.html.twig", 1);
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
        $__internal_ed7d667f4c57679db16a584bf55419898ca4cb1fc69df0c66ff0d351eba3d994 = $this->env->getExtension("native_profiler");
        $__internal_ed7d667f4c57679db16a584bf55419898ca4cb1fc69df0c66ff0d351eba3d994->enter($__internal_ed7d667f4c57679db16a584bf55419898ca4cb1fc69df0c66ff0d351eba3d994_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@JornadasLaborales/caja/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ed7d667f4c57679db16a584bf55419898ca4cb1fc69df0c66ff0d351eba3d994->leave($__internal_ed7d667f4c57679db16a584bf55419898ca4cb1fc69df0c66ff0d351eba3d994_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_444a3727e935a7969fe03709dd9513d2f3d28517dcd68b20423d54b32a23d8dc = $this->env->getExtension("native_profiler");
        $__internal_444a3727e935a7969fe03709dd9513d2f3d28517dcd68b20423d54b32a23d8dc->enter($__internal_444a3727e935a7969fe03709dd9513d2f3d28517dcd68b20423d54b32a23d8dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_444a3727e935a7969fe03709dd9513d2f3d28517dcd68b20423d54b32a23d8dc->leave($__internal_444a3727e935a7969fe03709dd9513d2f3d28517dcd68b20423d54b32a23d8dc_prof);

    }

    public function getTemplateName()
    {
        return "@JornadasLaborales/caja/new.html.twig";
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
