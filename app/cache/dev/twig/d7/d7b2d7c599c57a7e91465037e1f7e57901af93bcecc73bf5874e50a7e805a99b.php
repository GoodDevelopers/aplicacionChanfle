<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f0218560f5221b167cd8a0a516fa39be5872f3f845a0cd33c4acc2abfd01d802 extends Twig_Template
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
        $__internal_034e63d7893909f9cd8fc4b44647000f26392df5a81c898807f2f592f270f01d = $this->env->getExtension("native_profiler");
        $__internal_034e63d7893909f9cd8fc4b44647000f26392df5a81c898807f2f592f270f01d->enter($__internal_034e63d7893909f9cd8fc4b44647000f26392df5a81c898807f2f592f270f01d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_034e63d7893909f9cd8fc4b44647000f26392df5a81c898807f2f592f270f01d->leave($__internal_034e63d7893909f9cd8fc4b44647000f26392df5a81c898807f2f592f270f01d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
