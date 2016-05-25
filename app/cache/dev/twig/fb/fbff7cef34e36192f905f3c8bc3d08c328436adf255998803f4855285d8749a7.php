<?php

/* InventarioBundle:proveedor:new.html.twig */
class __TwigTemplate_85de764e4b970a85105ae9b0f4f46d2423f30cdfc3c4534f3376b33015772c12 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "InventarioBundle:proveedor:new.html.twig", 1);
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
        $__internal_474c36bb83d5e2e67af25369c105233e81c6482810ee80eac43eab98e43f0f44 = $this->env->getExtension("native_profiler");
        $__internal_474c36bb83d5e2e67af25369c105233e81c6482810ee80eac43eab98e43f0f44->enter($__internal_474c36bb83d5e2e67af25369c105233e81c6482810ee80eac43eab98e43f0f44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "InventarioBundle:proveedor:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_474c36bb83d5e2e67af25369c105233e81c6482810ee80eac43eab98e43f0f44->leave($__internal_474c36bb83d5e2e67af25369c105233e81c6482810ee80eac43eab98e43f0f44_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_863e8b78c1045061ed24d3ea5b7cf638a2334f2c7d748f23357ba091d0b0a91d = $this->env->getExtension("native_profiler");
        $__internal_863e8b78c1045061ed24d3ea5b7cf638a2334f2c7d748f23357ba091d0b0a91d->enter($__internal_863e8b78c1045061ed24d3ea5b7cf638a2334f2c7d748f23357ba091d0b0a91d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Proveedor creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("yes_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_863e8b78c1045061ed24d3ea5b7cf638a2334f2c7d748f23357ba091d0b0a91d->leave($__internal_863e8b78c1045061ed24d3ea5b7cf638a2334f2c7d748f23357ba091d0b0a91d_prof);

    }

    public function getTemplateName()
    {
        return "InventarioBundle:proveedor:new.html.twig";
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
/*     <h1>Proveedor creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('yes_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
