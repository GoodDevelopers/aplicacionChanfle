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
        $__internal_476e320380ebfdb75434eda83a14193ad49640d0d02f186890e03570f44bf55b = $this->env->getExtension("native_profiler");
        $__internal_476e320380ebfdb75434eda83a14193ad49640d0d02f186890e03570f44bf55b->enter($__internal_476e320380ebfdb75434eda83a14193ad49640d0d02f186890e03570f44bf55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_476e320380ebfdb75434eda83a14193ad49640d0d02f186890e03570f44bf55b->leave($__internal_476e320380ebfdb75434eda83a14193ad49640d0d02f186890e03570f44bf55b_prof);

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
