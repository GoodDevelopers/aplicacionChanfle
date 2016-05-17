<?php

/* @Inventario/materiaprima/edit.html.twig */
class __TwigTemplate_4444310f4eb70a1bd54fdbe595f5eb8c855d269b5a7e945424424df4869951ac extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/materiaprima/edit.html.twig", 1);
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
        $__internal_70f8c80c963992d0696f8dcfb29fec42c68b1feadd988046a6e29739597fa9c4 = $this->env->getExtension("native_profiler");
        $__internal_70f8c80c963992d0696f8dcfb29fec42c68b1feadd988046a6e29739597fa9c4->enter($__internal_70f8c80c963992d0696f8dcfb29fec42c68b1feadd988046a6e29739597fa9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/materiaprima/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70f8c80c963992d0696f8dcfb29fec42c68b1feadd988046a6e29739597fa9c4->leave($__internal_70f8c80c963992d0696f8dcfb29fec42c68b1feadd988046a6e29739597fa9c4_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a670cf44769049318da1aac88a08b675bbec8bd8ea3a89eee74373f0bfa89da5 = $this->env->getExtension("native_profiler");
        $__internal_a670cf44769049318da1aac88a08b675bbec8bd8ea3a89eee74373f0bfa89da5->enter($__internal_a670cf44769049318da1aac88a08b675bbec8bd8ea3a89eee74373f0bfa89da5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MateriaPrima edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("materiaprima_index");
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
        
        $__internal_a670cf44769049318da1aac88a08b675bbec8bd8ea3a89eee74373f0bfa89da5->leave($__internal_a670cf44769049318da1aac88a08b675bbec8bd8ea3a89eee74373f0bfa89da5_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/materiaprima/edit.html.twig";
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
/*     <h1>MateriaPrima edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('materiaprima_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
