<?php

/* CostosBundle:costo:new.html.twig */
class __TwigTemplate_b5a216455c5ac9423ad5a4d69df9bc8cf836e415dbe32eddb024540d5fc2046c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "CostosBundle:costo:new.html.twig", 1);
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
        $__internal_dd3d51a98890223972aeb8500ba14edac08b05b62094694f99cd52942e98b024 = $this->env->getExtension("native_profiler");
        $__internal_dd3d51a98890223972aeb8500ba14edac08b05b62094694f99cd52942e98b024->enter($__internal_dd3d51a98890223972aeb8500ba14edac08b05b62094694f99cd52942e98b024_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CostosBundle:costo:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd3d51a98890223972aeb8500ba14edac08b05b62094694f99cd52942e98b024->leave($__internal_dd3d51a98890223972aeb8500ba14edac08b05b62094694f99cd52942e98b024_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_171c5340005fc8c68487809edcaa7e5a90fba33482c88d5bb8589a94cfc85d9d = $this->env->getExtension("native_profiler");
        $__internal_171c5340005fc8c68487809edcaa7e5a90fba33482c88d5bb8589a94cfc85d9d->enter($__internal_171c5340005fc8c68487809edcaa7e5a90fba33482c88d5bb8589a94cfc85d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Costo creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("costo_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_171c5340005fc8c68487809edcaa7e5a90fba33482c88d5bb8589a94cfc85d9d->leave($__internal_171c5340005fc8c68487809edcaa7e5a90fba33482c88d5bb8589a94cfc85d9d_prof);

    }

    public function getTemplateName()
    {
        return "CostosBundle:costo:new.html.twig";
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
/*     <h1>Costo creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('costo_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
