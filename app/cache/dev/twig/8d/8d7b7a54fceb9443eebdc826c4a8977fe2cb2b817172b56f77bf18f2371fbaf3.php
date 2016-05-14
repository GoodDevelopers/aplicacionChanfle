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
        $__internal_1caee3d18e2ab567efd6b3f94b006ae710ee65ee00b0a44f1fccf8a0933f1e89 = $this->env->getExtension("native_profiler");
        $__internal_1caee3d18e2ab567efd6b3f94b006ae710ee65ee00b0a44f1fccf8a0933f1e89->enter($__internal_1caee3d18e2ab567efd6b3f94b006ae710ee65ee00b0a44f1fccf8a0933f1e89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/materiaprima/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1caee3d18e2ab567efd6b3f94b006ae710ee65ee00b0a44f1fccf8a0933f1e89->leave($__internal_1caee3d18e2ab567efd6b3f94b006ae710ee65ee00b0a44f1fccf8a0933f1e89_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_da6c50649f18aba563c894e17ddce1ae5b2493da3d5b26086cc04922847ae0a8 = $this->env->getExtension("native_profiler");
        $__internal_da6c50649f18aba563c894e17ddce1ae5b2493da3d5b26086cc04922847ae0a8->enter($__internal_da6c50649f18aba563c894e17ddce1ae5b2493da3d5b26086cc04922847ae0a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_da6c50649f18aba563c894e17ddce1ae5b2493da3d5b26086cc04922847ae0a8->leave($__internal_da6c50649f18aba563c894e17ddce1ae5b2493da3d5b26086cc04922847ae0a8_prof);

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
