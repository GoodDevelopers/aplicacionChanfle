<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b5737dae7c94059ccef59072f6e6585b60d93848aa48425831a544adf3805714 extends Twig_Template
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
        $__internal_dccb2f5eb7e503ff6e82cfb780be0c3c090ef9ae60fa217f4033b8ca873500d0 = $this->env->getExtension("native_profiler");
        $__internal_dccb2f5eb7e503ff6e82cfb780be0c3c090ef9ae60fa217f4033b8ca873500d0->enter($__internal_dccb2f5eb7e503ff6e82cfb780be0c3c090ef9ae60fa217f4033b8ca873500d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_dccb2f5eb7e503ff6e82cfb780be0c3c090ef9ae60fa217f4033b8ca873500d0->leave($__internal_dccb2f5eb7e503ff6e82cfb780be0c3c090ef9ae60fa217f4033b8ca873500d0_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
