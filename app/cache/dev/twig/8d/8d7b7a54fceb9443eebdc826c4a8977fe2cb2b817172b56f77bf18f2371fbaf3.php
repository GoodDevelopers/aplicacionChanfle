<?php

/* @Inventario/materiaprima/new.html.twig */
class __TwigTemplate_6213e819faabec5deeb18319fe2687c1278d5cf00f1da1f949f14ad75dd4d953 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/materiaprima/new.html.twig", 1);
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
        $__internal_70b4366449c7435c72f6ef2436ce36c56ad3a350792e45a2400bd69d9f78167c = $this->env->getExtension("native_profiler");
        $__internal_70b4366449c7435c72f6ef2436ce36c56ad3a350792e45a2400bd69d9f78167c->enter($__internal_70b4366449c7435c72f6ef2436ce36c56ad3a350792e45a2400bd69d9f78167c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/materiaprima/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_70b4366449c7435c72f6ef2436ce36c56ad3a350792e45a2400bd69d9f78167c->leave($__internal_70b4366449c7435c72f6ef2436ce36c56ad3a350792e45a2400bd69d9f78167c_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_9bec14b4497d873433e6d162552a5999742d8752edd73283b127cce0c21fbb93 = $this->env->getExtension("native_profiler");
        $__internal_9bec14b4497d873433e6d162552a5999742d8752edd73283b127cce0c21fbb93->enter($__internal_9bec14b4497d873433e6d162552a5999742d8752edd73283b127cce0c21fbb93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_9bec14b4497d873433e6d162552a5999742d8752edd73283b127cce0c21fbb93->leave($__internal_9bec14b4497d873433e6d162552a5999742d8752edd73283b127cce0c21fbb93_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/materiaprima/new.html.twig";
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
