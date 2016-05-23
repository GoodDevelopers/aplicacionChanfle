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
        $__internal_c0d13a59b19ff28505439841ed298ac803ffa059d9f0a0608b3e85a1af0dac47 = $this->env->getExtension("native_profiler");
        $__internal_c0d13a59b19ff28505439841ed298ac803ffa059d9f0a0608b3e85a1af0dac47->enter($__internal_c0d13a59b19ff28505439841ed298ac803ffa059d9f0a0608b3e85a1af0dac47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_c0d13a59b19ff28505439841ed298ac803ffa059d9f0a0608b3e85a1af0dac47->leave($__internal_c0d13a59b19ff28505439841ed298ac803ffa059d9f0a0608b3e85a1af0dac47_prof);

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
