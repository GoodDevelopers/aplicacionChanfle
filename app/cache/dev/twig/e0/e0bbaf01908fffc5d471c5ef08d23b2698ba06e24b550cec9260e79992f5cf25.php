<?php

/* TwigBundle:Exception:exception.css.twig */
class __TwigTemplate_cdaeab57ed78eff57ad729830a56d6fa71ad1ea3e201f6c1a2adf63975d4a7af extends Twig_Template
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
        $__internal_3f27ca814e41346c2091cb2ffa3d43b2d0a91d0d32e480a1ea954c4dc61b1e16 = $this->env->getExtension("native_profiler");
        $__internal_3f27ca814e41346c2091cb2ffa3d43b2d0a91d0d32e480a1ea954c4dc61b1e16->enter($__internal_3f27ca814e41346c2091cb2ffa3d43b2d0a91d0d32e480a1ea954c4dc61b1e16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        $this->loadTemplate("@Twig/Exception/exception.txt.twig", "TwigBundle:Exception:exception.css.twig", 2)->display(array_merge($context, array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")))));
        // line 3
        echo "*/
";
        
        $__internal_3f27ca814e41346c2091cb2ffa3d43b2d0a91d0d32e480a1ea954c4dc61b1e16->leave($__internal_3f27ca814e41346c2091cb2ffa3d43b2d0a91d0d32e480a1ea954c4dc61b1e16_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 3,  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {% include '@Twig/Exception/exception.txt.twig' with { 'exception': exception } %}*/
/* *//* */
/* */
