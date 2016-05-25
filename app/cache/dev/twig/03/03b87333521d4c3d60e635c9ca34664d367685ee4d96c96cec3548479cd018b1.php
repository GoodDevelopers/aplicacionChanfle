<?php

/* ::email.html.twig */
class __TwigTemplate_4334c80b43f50430962a66d16e69cbaadbf44a47f0e83505640783dca3df6389 extends Twig_Template
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
        $__internal_451fc32aab2282b82b66568b96b97025652714c1bd91b013a8386009e7dc5925 = $this->env->getExtension("native_profiler");
        $__internal_451fc32aab2282b82b66568b96b97025652714c1bd91b013a8386009e7dc5925->enter($__internal_451fc32aab2282b82b66568b96b97025652714c1bd91b013a8386009e7dc5925_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "::email.html.twig"));

        // line 1
        echo "<h2>";
        echo twig_escape_filter($this->env, (isset($context["titulo"]) ? $context["titulo"] : $this->getContext($context, "titulo")), "html", null, true);
        echo "</h2>
<p>Este es mi primer email :v</p>

";
        
        $__internal_451fc32aab2282b82b66568b96b97025652714c1bd91b013a8386009e7dc5925->leave($__internal_451fc32aab2282b82b66568b96b97025652714c1bd91b013a8386009e7dc5925_prof);

    }

    public function getTemplateName()
    {
        return "::email.html.twig";
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
