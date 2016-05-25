<?php

/* @Inventario/proveedor/edit.html.twig */
class __TwigTemplate_03d3a330c321340e824bc40c11c6bf09208b2394c3a29a10f0e6bbfc158cf7f6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/proveedor/edit.html.twig", 1);
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
        $__internal_a4d5f64c7c3e9518e9f621facb1fb14b2ed5fc34d3a94b0f6869be22b9321785 = $this->env->getExtension("native_profiler");
        $__internal_a4d5f64c7c3e9518e9f621facb1fb14b2ed5fc34d3a94b0f6869be22b9321785->enter($__internal_a4d5f64c7c3e9518e9f621facb1fb14b2ed5fc34d3a94b0f6869be22b9321785_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/proveedor/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4d5f64c7c3e9518e9f621facb1fb14b2ed5fc34d3a94b0f6869be22b9321785->leave($__internal_a4d5f64c7c3e9518e9f621facb1fb14b2ed5fc34d3a94b0f6869be22b9321785_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_d0220e2273130b323ef7d31e68db31ac0a71f7a3f8a4c38880aa395979bc2c5b = $this->env->getExtension("native_profiler");
        $__internal_d0220e2273130b323ef7d31e68db31ac0a71f7a3f8a4c38880aa395979bc2c5b->enter($__internal_d0220e2273130b323ef7d31e68db31ac0a71f7a3f8a4c38880aa395979bc2c5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proveedor edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("yes_index");
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
        
        $__internal_d0220e2273130b323ef7d31e68db31ac0a71f7a3f8a4c38880aa395979bc2c5b->leave($__internal_d0220e2273130b323ef7d31e68db31ac0a71f7a3f8a4c38880aa395979bc2c5b_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/proveedor/edit.html.twig";
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
/*     <h1>Proveedor edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('yes_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
