<?php

/* InventarioBundle:producto:edit.html.twig */
class __TwigTemplate_9888bfda2f5213bbff6fff54c74552a42dc8774a14566624d7b1aaa6eef68fd1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:producto:edit.html.twig", 1);
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
        $__internal_e6e2384f9ab21146186c30d6bd1e5ac2c7b609441c21831c713ac04a06aede3f = $this->env->getExtension("native_profiler");
        $__internal_e6e2384f9ab21146186c30d6bd1e5ac2c7b609441c21831c713ac04a06aede3f->enter($__internal_e6e2384f9ab21146186c30d6bd1e5ac2c7b609441c21831c713ac04a06aede3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:producto:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e6e2384f9ab21146186c30d6bd1e5ac2c7b609441c21831c713ac04a06aede3f->leave($__internal_e6e2384f9ab21146186c30d6bd1e5ac2c7b609441c21831c713ac04a06aede3f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_67d7762f806a7a5b78ce2950a3c7d2ff865dd758f61a251d13f98e6c447670b1 = $this->env->getExtension("native_profiler");
        $__internal_67d7762f806a7a5b78ce2950a3c7d2ff865dd758f61a251d13f98e6c447670b1->enter($__internal_67d7762f806a7a5b78ce2950a3c7d2ff865dd758f61a251d13f98e6c447670b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Producto edit</h1>

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
        echo $this->env->getExtension('routing')->getPath("producto_index");
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
        
        $__internal_67d7762f806a7a5b78ce2950a3c7d2ff865dd758f61a251d13f98e6c447670b1->leave($__internal_67d7762f806a7a5b78ce2950a3c7d2ff865dd758f61a251d13f98e6c447670b1_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:producto:edit.html.twig";
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
/*     <h1>Producto edit</h1>*/
/* */
/*     {{ form_start(edit_form) }}*/
/*         {{ form_widget(edit_form) }}*/
/*         <input type="submit" value="Edit" />*/
/*     {{ form_end(edit_form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('producto_index') }}">Back to the list</a>*/
/*         </li>*/
/*         <li>*/
/*             {{ form_start(delete_form) }}*/
/*                 <input type="submit" value="Delete">*/
/*             {{ form_end(delete_form) }}*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
