<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_086247f87f638e3b9d369d1f57f3538b11e246f8c8ea1bbdf5e1f47b1f5b78b1 extends Twig_Template
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
        $__internal_fac8eea69e147597925ff99070b3f519499c0f5db7448edd85f710b233943bf3 = $this->env->getExtension("native_profiler");
        $__internal_fac8eea69e147597925ff99070b3f519499c0f5db7448edd85f710b233943bf3->enter($__internal_fac8eea69e147597925ff99070b3f519499c0f5db7448edd85f710b233943bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_fac8eea69e147597925ff99070b3f519499c0f5db7448edd85f710b233943bf3->leave($__internal_fac8eea69e147597925ff99070b3f519499c0f5db7448edd85f710b233943bf3_prof);

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
