<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_b1376cfcbed531b15deb9f97603d7b272486f48728141929e1542b0624b20c3f extends Twig_Template
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
        $__internal_27b31f91d97deac5b2db94eda2e3f4a4604d146324b2893e75032a41c90cc736 = $this->env->getExtension("native_profiler");
        $__internal_27b31f91d97deac5b2db94eda2e3f4a4604d146324b2893e75032a41c90cc736->enter($__internal_27b31f91d97deac5b2db94eda2e3f4a4604d146324b2893e75032a41c90cc736_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_27b31f91d97deac5b2db94eda2e3f4a4604d146324b2893e75032a41c90cc736->leave($__internal_27b31f91d97deac5b2db94eda2e3f4a4604d146324b2893e75032a41c90cc736_prof);

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