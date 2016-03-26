<?php

/* UsuariosBundle:Cliente:edit.html.twig */
class __TwigTemplate_cfda2fa1af1ab0b92297342d1f6f690ec2d69f24e02f76282431b27afce7694f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Cliente:edit.html.twig", 1);
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
        $__internal_b3b841f97887e4c30f2c5dd454f95180637d65d4c7e0638ba8628a5d2f720c27 = $this->env->getExtension("native_profiler");
        $__internal_b3b841f97887e4c30f2c5dd454f95180637d65d4c7e0638ba8628a5d2f720c27->enter($__internal_b3b841f97887e4c30f2c5dd454f95180637d65d4c7e0638ba8628a5d2f720c27_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:Cliente:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b3b841f97887e4c30f2c5dd454f95180637d65d4c7e0638ba8628a5d2f720c27->leave($__internal_b3b841f97887e4c30f2c5dd454f95180637d65d4c7e0638ba8628a5d2f720c27_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_1eb49fa40890a761959f0ae01ee587e24f905207ca649fcffede4393c04363ce = $this->env->getExtension("native_profiler");
        $__internal_1eb49fa40890a761959f0ae01ee587e24f905207ca649fcffede4393c04363ce->enter($__internal_1eb49fa40890a761959f0ae01ee587e24f905207ca649fcffede4393c04363ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Cliente edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("clientes_index");
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
        
        $__internal_1eb49fa40890a761959f0ae01ee587e24f905207ca649fcffede4393c04363ce->leave($__internal_1eb49fa40890a761959f0ae01ee587e24f905207ca649fcffede4393c04363ce_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Cliente:edit.html.twig";
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
/*     <h1>Cliente edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('clientes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
