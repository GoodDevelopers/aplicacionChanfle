<?php

/* JornadasLaboralesBundle:caja:edit.html.twig */
class __TwigTemplate_0b3f3a7cc0399415f1f1161dde3519a1d7ee7f09a6bb69e3aba11918dab19c66 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JornadasLaboralesBundle:caja:edit.html.twig", 1);
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
        $__internal_ea5da7fbb0b0461d99fb61f4ec036e14154efec80a1bb97e993d823d8c8b3aae = $this->env->getExtension("native_profiler");
        $__internal_ea5da7fbb0b0461d99fb61f4ec036e14154efec80a1bb97e993d823d8c8b3aae->enter($__internal_ea5da7fbb0b0461d99fb61f4ec036e14154efec80a1bb97e993d823d8c8b3aae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JornadasLaboralesBundle:caja:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea5da7fbb0b0461d99fb61f4ec036e14154efec80a1bb97e993d823d8c8b3aae->leave($__internal_ea5da7fbb0b0461d99fb61f4ec036e14154efec80a1bb97e993d823d8c8b3aae_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_55a916e4e887920a51326ef95b3b9cb0928a52582156fdd287a339fad3bbfd6e = $this->env->getExtension("native_profiler");
        $__internal_55a916e4e887920a51326ef95b3b9cb0928a52582156fdd287a339fad3bbfd6e->enter($__internal_55a916e4e887920a51326ef95b3b9cb0928a52582156fdd287a339fad3bbfd6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_55a916e4e887920a51326ef95b3b9cb0928a52582156fdd287a339fad3bbfd6e->leave($__internal_55a916e4e887920a51326ef95b3b9cb0928a52582156fdd287a339fad3bbfd6e_prof);

    }

    public function getTemplateName()
    {
        return "JornadasLaboralesBundle:caja:edit.html.twig";
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
