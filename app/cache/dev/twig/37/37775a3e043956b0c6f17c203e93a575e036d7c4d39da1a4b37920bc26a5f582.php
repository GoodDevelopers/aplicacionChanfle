<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_2a226cf8ebdffb69072ea955a8d3597e4487a3a4dc634732e0d02a3064f52312 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_495ce2ebc7078f6143fa680673a7d863e046627c0749996a4a2a2c89bf33ffa9 = $this->env->getExtension("native_profiler");
        $__internal_495ce2ebc7078f6143fa680673a7d863e046627c0749996a4a2a2c89bf33ffa9->enter($__internal_495ce2ebc7078f6143fa680673a7d863e046627c0749996a4a2a2c89bf33ffa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_495ce2ebc7078f6143fa680673a7d863e046627c0749996a4a2a2c89bf33ffa9->leave($__internal_495ce2ebc7078f6143fa680673a7d863e046627c0749996a4a2a2c89bf33ffa9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_5fc2ab73d63f2dbc9db02b24af89f03114b8ed4a2ec641ddb9f71ad002e847dd = $this->env->getExtension("native_profiler");
        $__internal_5fc2ab73d63f2dbc9db02b24af89f03114b8ed4a2ec641ddb9f71ad002e847dd->enter($__internal_5fc2ab73d63f2dbc9db02b24af89f03114b8ed4a2ec641ddb9f71ad002e847dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_5fc2ab73d63f2dbc9db02b24af89f03114b8ed4a2ec641ddb9f71ad002e847dd->leave($__internal_5fc2ab73d63f2dbc9db02b24af89f03114b8ed4a2ec641ddb9f71ad002e847dd_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_3d942def92f90f1c4b912ac12c1a01a9a350b8d5385d8e5307755249fe24967f = $this->env->getExtension("native_profiler");
        $__internal_3d942def92f90f1c4b912ac12c1a01a9a350b8d5385d8e5307755249fe24967f->enter($__internal_3d942def92f90f1c4b912ac12c1a01a9a350b8d5385d8e5307755249fe24967f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_3d942def92f90f1c4b912ac12c1a01a9a350b8d5385d8e5307755249fe24967f->leave($__internal_3d942def92f90f1c4b912ac12c1a01a9a350b8d5385d8e5307755249fe24967f_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_00003ee33e95e25b43b17f56766d31fa9872e68a365d346537b996deeb15bbf6 = $this->env->getExtension("native_profiler");
        $__internal_00003ee33e95e25b43b17f56766d31fa9872e68a365d346537b996deeb15bbf6->enter($__internal_00003ee33e95e25b43b17f56766d31fa9872e68a365d346537b996deeb15bbf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_00003ee33e95e25b43b17f56766d31fa9872e68a365d346537b996deeb15bbf6->leave($__internal_00003ee33e95e25b43b17f56766d31fa9872e68a365d346537b996deeb15bbf6_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
