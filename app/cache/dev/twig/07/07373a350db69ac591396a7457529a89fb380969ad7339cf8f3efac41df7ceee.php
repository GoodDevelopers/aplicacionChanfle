<?php

/* InventarioBundle:materiaprima:new.html.twig */
class __TwigTemplate_98726c754fa1a259e1f97f7766d08636069b6b015196c3aacbadf5ab872ed480 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:materiaprima:new.html.twig", 1);
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
        $__internal_6bcef8bd1e7a9708dc76b786081e047c7bfb5c4333a1019f2df2c9dbb96cf93d = $this->env->getExtension("native_profiler");
        $__internal_6bcef8bd1e7a9708dc76b786081e047c7bfb5c4333a1019f2df2c9dbb96cf93d->enter($__internal_6bcef8bd1e7a9708dc76b786081e047c7bfb5c4333a1019f2df2c9dbb96cf93d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:materiaprima:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6bcef8bd1e7a9708dc76b786081e047c7bfb5c4333a1019f2df2c9dbb96cf93d->leave($__internal_6bcef8bd1e7a9708dc76b786081e047c7bfb5c4333a1019f2df2c9dbb96cf93d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a565167e86fbdf0e7fc21b886eaa1e28b587435be9329cd4870d31bd7da2d939 = $this->env->getExtension("native_profiler");
        $__internal_a565167e86fbdf0e7fc21b886eaa1e28b587435be9329cd4870d31bd7da2d939->enter($__internal_a565167e86fbdf0e7fc21b886eaa1e28b587435be9329cd4870d31bd7da2d939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>MateriaPrima creation</h1>

    ";
        // line 6
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
        echo "
        ";
        // line 7
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <input type=\"submit\" value=\"Create\" />
    ";
        // line 9
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "

    <ul>
        <li>
            <a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("materiaprima_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_a565167e86fbdf0e7fc21b886eaa1e28b587435be9329cd4870d31bd7da2d939->leave($__internal_a565167e86fbdf0e7fc21b886eaa1e28b587435be9329cd4870d31bd7da2d939_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:materiaprima:new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  60 => 13,  53 => 9,  48 => 7,  44 => 6,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h1>MateriaPrima creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('materiaprima_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
