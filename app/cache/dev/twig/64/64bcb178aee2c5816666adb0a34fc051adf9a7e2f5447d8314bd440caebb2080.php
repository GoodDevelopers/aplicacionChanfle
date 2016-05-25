<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_ff6ac84adeb7ea3305b29498c3045edd26526435b59a748f73bde51343ee6f99 extends Twig_Template
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
        $__internal_4f4409594c69c69434b79daa02978158cb4d12f6d6d2f09d2c8987b00b215ca9 = $this->env->getExtension("native_profiler");
        $__internal_4f4409594c69c69434b79daa02978158cb4d12f6d6d2f09d2c8987b00b215ca9->enter($__internal_4f4409594c69c69434b79daa02978158cb4d12f6d6d2f09d2c8987b00b215ca9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_4f4409594c69c69434b79daa02978158cb4d12f6d6d2f09d2c8987b00b215ca9->leave($__internal_4f4409594c69c69434b79daa02978158cb4d12f6d6d2f09d2c8987b00b215ca9_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($expanded): ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_expanded') ?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'choice_widget_collapsed') ?>*/
/* <?php endif ?>*/
/* */
