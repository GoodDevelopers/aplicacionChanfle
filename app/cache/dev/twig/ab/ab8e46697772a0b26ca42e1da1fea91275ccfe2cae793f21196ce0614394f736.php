<?php

/* JornadasLaboralesBundle:caja:new.html.twig */
class __TwigTemplate_f3b996d42342320f6d04857dbbf00dbd5ae3a7c8cc079a8d1925ff2fb360bd0e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "JornadasLaboralesBundle:caja:new.html.twig", 1);
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
        $__internal_f073a0e74e0206f29c52b1030db37a016b5595738c1ed2002fe532b4a5b37339 = $this->env->getExtension("native_profiler");
        $__internal_f073a0e74e0206f29c52b1030db37a016b5595738c1ed2002fe532b4a5b37339->enter($__internal_f073a0e74e0206f29c52b1030db37a016b5595738c1ed2002fe532b4a5b37339_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "JornadasLaboralesBundle:caja:new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f073a0e74e0206f29c52b1030db37a016b5595738c1ed2002fe532b4a5b37339->leave($__internal_f073a0e74e0206f29c52b1030db37a016b5595738c1ed2002fe532b4a5b37339_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_8d64efc96e32ae700a119a55bb5c13dc8e62fe683fbbab8d12445b16e2ccc93e = $this->env->getExtension("native_profiler");
        $__internal_8d64efc96e32ae700a119a55bb5c13dc8e62fe683fbbab8d12445b16e2ccc93e->enter($__internal_8d64efc96e32ae700a119a55bb5c13dc8e62fe683fbbab8d12445b16e2ccc93e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h1>Caja creation</h1>

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
        echo $this->env->getExtension('routing')->getPath("caja_index");
        echo "\">Back to the list</a>
        </li>
    </ul>
";
        
        $__internal_8d64efc96e32ae700a119a55bb5c13dc8e62fe683fbbab8d12445b16e2ccc93e->leave($__internal_8d64efc96e32ae700a119a55bb5c13dc8e62fe683fbbab8d12445b16e2ccc93e_prof);

    }

    public function getTemplateName()
    {
        return "JornadasLaboralesBundle:caja:new.html.twig";
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
/*     <h1>Caja creation</h1>*/
/* */
/*     {{ form_start(form) }}*/
/*         {{ form_widget(form) }}*/
/*         <input type="submit" value="Create" />*/
/*     {{ form_end(form) }}*/
/* */
/*     <ul>*/
/*         <li>*/
/*             <a href="{{ path('caja_index') }}">Back to the list</a>*/
/*         </li>*/
/*     </ul>*/
/* {% endblock %}*/
/* */
