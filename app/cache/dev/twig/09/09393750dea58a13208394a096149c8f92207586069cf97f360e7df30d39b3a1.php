<?php

/* @Framework/Form/money_widget.html.php */
class __TwigTemplate_cd643d04ec369636f632a3203767d3f9793d337ffcbb5a77ea7fd63c9a3d2a88 extends Twig_Template
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
        $__internal_dfee9aae22ebcccac5e17bbfcb8f41cda52d621dae57f5e41b9b9c98c78d2da1 = $this->env->getExtension("native_profiler");
        $__internal_dfee9aae22ebcccac5e17bbfcb8f41cda52d621dae57f5e41b9b9c98c78d2da1->enter($__internal_dfee9aae22ebcccac5e17bbfcb8f41cda52d621dae57f5e41b9b9c98c78d2da1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/money_widget.html.php"));

        // line 1
        echo "<?php echo str_replace('";
        echo twig_escape_filter($this->env, (isset($context["widget"]) ? $context["widget"] : $this->getContext($context, "widget")), "html", null, true);
        echo "', \$view['form']->block(\$form, 'form_widget_simple'), \$money_pattern) ?>
";
        
        $__internal_dfee9aae22ebcccac5e17bbfcb8f41cda52d621dae57f5e41b9b9c98c78d2da1->leave($__internal_dfee9aae22ebcccac5e17bbfcb8f41cda52d621dae57f5e41b9b9c98c78d2da1_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/money_widget.html.php";
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
/* <?php echo str_replace('{{ widget }}', $view['form']->block($form, 'form_widget_simple'), $money_pattern) ?>*/
/* */
