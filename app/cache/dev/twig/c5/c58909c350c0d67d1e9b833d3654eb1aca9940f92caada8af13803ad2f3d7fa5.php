<?php

/* email.html.twig */
class __TwigTemplate_099f1e4988db96892c613073a4e63705b7238a1f7dc4fc4c37c16002702a58c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7a2c340594d457304701aa17f526ab82ed243229c8bba6ee408509481ca71a00 = $this->env->getExtension("native_profiler");
        $__internal_7a2c340594d457304701aa17f526ab82ed243229c8bba6ee408509481ca71a00->enter($__internal_7a2c340594d457304701aa17f526ab82ed243229c8bba6ee408509481ca71a00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "email.html.twig"));

        // line 1
        echo "<h2>";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "</h2>
<p>Este es mi primer email :v</p>

";
        
        $__internal_7a2c340594d457304701aa17f526ab82ed243229c8bba6ee408509481ca71a00->leave($__internal_7a2c340594d457304701aa17f526ab82ed243229c8bba6ee408509481ca71a00_prof);

    }

    public function getTemplateName()
    {
        return "email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <h2>{{ titulo }}</h2>*/
/* <p>Este es mi primer email :v</p>*/
/* */
/* */
