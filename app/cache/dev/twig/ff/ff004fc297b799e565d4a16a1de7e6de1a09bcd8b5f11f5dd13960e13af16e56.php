<?php

/* @Usuarios/empleado/edit.html.twig */
class __TwigTemplate_f92a6bdf6b23dc750413a90ee84f9019eadd4a79deeec6b9fb5198f222bf0299 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Usuarios/empleado/edit.html.twig", 1);
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
        $__internal_86edd4bdbc68befbcdec82317eb1c788c8d7fd9edcac23cda9f39c1f7cb16c72 = $this->env->getExtension("native_profiler");
        $__internal_86edd4bdbc68befbcdec82317eb1c788c8d7fd9edcac23cda9f39c1f7cb16c72->enter($__internal_86edd4bdbc68befbcdec82317eb1c788c8d7fd9edcac23cda9f39c1f7cb16c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Usuarios/empleado/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86edd4bdbc68befbcdec82317eb1c788c8d7fd9edcac23cda9f39c1f7cb16c72->leave($__internal_86edd4bdbc68befbcdec82317eb1c788c8d7fd9edcac23cda9f39c1f7cb16c72_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a8e355d807273f9409167749a3b6564206dd3212b7d97beae78ab3d8614aa2b9 = $this->env->getExtension("native_profiler");
        $__internal_a8e355d807273f9409167749a3b6564206dd3212b7d97beae78ab3d8614aa2b9->enter($__internal_a8e355d807273f9409167749a3b6564206dd3212b7d97beae78ab3d8614aa2b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_a8e355d807273f9409167749a3b6564206dd3212b7d97beae78ab3d8614aa2b9->leave($__internal_a8e355d807273f9409167749a3b6564206dd3212b7d97beae78ab3d8614aa2b9_prof);

    }

    public function getTemplateName()
    {
        return "@Usuarios/empleado/edit.html.twig";
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
