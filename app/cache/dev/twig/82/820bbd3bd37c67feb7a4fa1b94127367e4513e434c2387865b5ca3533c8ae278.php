<?php

/* @Inventario/producto/new.html.twig */
class __TwigTemplate_91568991d6b4946f964044e15759c1cf6431fcc7aa7173b2330ad5701c4f3475 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@Inventario/producto/new.html.twig", 1);
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
        $__internal_8f53410a5480df05b09e3164fa004972c453e77ba2e8b00fb0880a6696b0965f = $this->env->getExtension("native_profiler");
        $__internal_8f53410a5480df05b09e3164fa004972c453e77ba2e8b00fb0880a6696b0965f->enter($__internal_8f53410a5480df05b09e3164fa004972c453e77ba2e8b00fb0880a6696b0965f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Inventario/producto/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8f53410a5480df05b09e3164fa004972c453e77ba2e8b00fb0880a6696b0965f->leave($__internal_8f53410a5480df05b09e3164fa004972c453e77ba2e8b00fb0880a6696b0965f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_356d3732fec6344849c494bec72609cfcd4825a47902c4bbe5cd4b4f3c34c83d = $this->env->getExtension("native_profiler");
        $__internal_356d3732fec6344849c494bec72609cfcd4825a47902c4bbe5cd4b4f3c34c83d->enter($__internal_356d3732fec6344849c494bec72609cfcd4825a47902c4bbe5cd4b4f3c34c83d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Producto creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("producto_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_356d3732fec6344849c494bec72609cfcd4825a47902c4bbe5cd4b4f3c34c83d->leave($__internal_356d3732fec6344849c494bec72609cfcd4825a47902c4bbe5cd4b4f3c34c83d_prof);

    }

    public function getTemplateName()
    {
        return "@Inventario/producto/new.html.twig";
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
/*     <h1>Producto creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('producto_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
