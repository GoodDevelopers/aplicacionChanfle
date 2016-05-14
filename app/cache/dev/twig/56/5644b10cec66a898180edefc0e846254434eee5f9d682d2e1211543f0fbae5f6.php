<?php

/* UsuariosBundle:empleado:edit.html.twig */
class __TwigTemplate_07cb6e14fe8d452ad6550e34b37a681019aff6931a9871e571ceafa7e38b208f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:empleado:edit.html.twig", 1);
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
        $__internal_cdfd31e10b75d42bb2f09ca32b336c9e2c8205b40d2c1ac351ae5f438be7210b = $this->env->getExtension("native_profiler");
        $__internal_cdfd31e10b75d42bb2f09ca32b336c9e2c8205b40d2c1ac351ae5f438be7210b->enter($__internal_cdfd31e10b75d42bb2f09ca32b336c9e2c8205b40d2c1ac351ae5f438be7210b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:empleado:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cdfd31e10b75d42bb2f09ca32b336c9e2c8205b40d2c1ac351ae5f438be7210b->leave($__internal_cdfd31e10b75d42bb2f09ca32b336c9e2c8205b40d2c1ac351ae5f438be7210b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_933ca13e597349c724fec9b256552f5d9a903e34381ea2f276d7b02d080f67d7 = $this->env->getExtension("native_profiler");
        $__internal_933ca13e597349c724fec9b256552f5d9a903e34381ea2f276d7b02d080f67d7->enter($__internal_933ca13e597349c724fec9b256552f5d9a903e34381ea2f276d7b02d080f67d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Empleado edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("UsuariosBundle_empleado_index");
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
        
        $__internal_933ca13e597349c724fec9b256552f5d9a903e34381ea2f276d7b02d080f67d7->leave($__internal_933ca13e597349c724fec9b256552f5d9a903e34381ea2f276d7b02d080f67d7_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:empleado:edit.html.twig";
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
/*     <h1>Empleado edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('UsuariosBundle_empleado_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
