<?php

/* @Inventario/tipoproducto/edit.html.twig */
class __TwigTemplate_218c56f35eb907da50f2282403e649994b0b96fdb0e82e436bb9a92d86d1eb26 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/tipoproducto/edit.html.twig", 1);
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
        $__internal_d5753b0120687ebf0b0ff6a53d97a7f135bb9d374322ac6cefbef81908d8ac09 = $this->env->getExtension("native_profiler");
        $__internal_d5753b0120687ebf0b0ff6a53d97a7f135bb9d374322ac6cefbef81908d8ac09->enter($__internal_d5753b0120687ebf0b0ff6a53d97a7f135bb9d374322ac6cefbef81908d8ac09_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/tipoproducto/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d5753b0120687ebf0b0ff6a53d97a7f135bb9d374322ac6cefbef81908d8ac09->leave($__internal_d5753b0120687ebf0b0ff6a53d97a7f135bb9d374322ac6cefbef81908d8ac09_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0fbfb96298d0600b0b786ea3fd94ad9563a3ba92b30f2c9820a6f57a8162ab7e = $this->env->getExtension("native_profiler");
        $__internal_0fbfb96298d0600b0b786ea3fd94ad9563a3ba92b30f2c9820a6f57a8162ab7e->enter($__internal_0fbfb96298d0600b0b786ea3fd94ad9563a3ba92b30f2c9820a6f57a8162ab7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>TipoProducto edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("tipoproducto_index");
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
        
        $__internal_0fbfb96298d0600b0b786ea3fd94ad9563a3ba92b30f2c9820a6f57a8162ab7e->leave($__internal_0fbfb96298d0600b0b786ea3fd94ad9563a3ba92b30f2c9820a6f57a8162ab7e_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/tipoproducto/edit.html.twig";
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
/*     <h1>TipoProducto edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('tipoproducto_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
