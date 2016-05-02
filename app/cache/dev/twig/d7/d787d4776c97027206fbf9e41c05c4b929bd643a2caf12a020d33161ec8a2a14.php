<?php

/* UsuariosBundle:Empleado:edit.html.twig */
class __TwigTemplate_c9548a8e140dcdcb64fbc6b7436f61668b8b03c6ce54896b870d8784d118ffeb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "UsuariosBundle:Empleado:edit.html.twig", 1);
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
        $__internal_09d13b677f3ea69656796431750da389447460ac747c9c2b0f7b4535ec9dc5f4 = $this->env->getExtension("native_profiler");
        $__internal_09d13b677f3ea69656796431750da389447460ac747c9c2b0f7b4535ec9dc5f4->enter($__internal_09d13b677f3ea69656796431750da389447460ac747c9c2b0f7b4535ec9dc5f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "UsuariosBundle:Empleado:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_09d13b677f3ea69656796431750da389447460ac747c9c2b0f7b4535ec9dc5f4->leave($__internal_09d13b677f3ea69656796431750da389447460ac747c9c2b0f7b4535ec9dc5f4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_015bfef70834a2e1508d54075bf43820126b68e4d6c3c67acb0e41d65fa13c81 = $this->env->getExtension("native_profiler");
        $__internal_015bfef70834a2e1508d54075bf43820126b68e4d6c3c67acb0e41d65fa13c81->enter($__internal_015bfef70834a2e1508d54075bf43820126b68e4d6c3c67acb0e41d65fa13c81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_015bfef70834a2e1508d54075bf43820126b68e4d6c3c67acb0e41d65fa13c81->leave($__internal_015bfef70834a2e1508d54075bf43820126b68e4d6c3c67acb0e41d65fa13c81_prof);

    }

    public function getTemplateName()
    {
        return "UsuariosBundle:Empleado:edit.html.twig";
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
