<?php

/* UsuariosBundle:empleado:edit.html.twig */
class __TwigTemplate_b7953fb01d4cd9ce11ae002351b32970570fa3fba7bdd01021320e228527c7e9 extends Twig_Template
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
        $__internal_07408833bebb508022f76e59b96e1d682b7fc30e18b9553c61e7a49ba8f3612c = $this->env->getExtension("native_profiler");
        $__internal_07408833bebb508022f76e59b96e1d682b7fc30e18b9553c61e7a49ba8f3612c->enter($__internal_07408833bebb508022f76e59b96e1d682b7fc30e18b9553c61e7a49ba8f3612c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:empleado:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_07408833bebb508022f76e59b96e1d682b7fc30e18b9553c61e7a49ba8f3612c->leave($__internal_07408833bebb508022f76e59b96e1d682b7fc30e18b9553c61e7a49ba8f3612c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_0c698b1b926e90db86d58b79e03bad7ae1df110a8b498016b5b1bbec76c11f68 = $this->env->getExtension("native_profiler");
        $__internal_0c698b1b926e90db86d58b79e03bad7ae1df110a8b498016b5b1bbec76c11f68->enter($__internal_0c698b1b926e90db86d58b79e03bad7ae1df110a8b498016b5b1bbec76c11f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0c698b1b926e90db86d58b79e03bad7ae1df110a8b498016b5b1bbec76c11f68->leave($__internal_0c698b1b926e90db86d58b79e03bad7ae1df110a8b498016b5b1bbec76c11f68_prof);

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
