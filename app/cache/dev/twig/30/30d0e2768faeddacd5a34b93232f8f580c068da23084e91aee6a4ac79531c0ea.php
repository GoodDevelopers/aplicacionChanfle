<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_d777fb14d5fd550c3f9e0758ffb3b75401065501b9b92f0bb328b18de3bc7058 extends Twig_Template
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
        $__internal_0618c4a379b8a73954f7c08900b61ffc2e4d718360985a3f851979751bc004a2 = $this->env->getExtension("native_profiler");
        $__internal_0618c4a379b8a73954f7c08900b61ffc2e4d718360985a3f851979751bc004a2->enter($__internal_0618c4a379b8a73954f7c08900b61ffc2e4d718360985a3f851979751bc004a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_0618c4a379b8a73954f7c08900b61ffc2e4d718360985a3f851979751bc004a2->leave($__internal_0618c4a379b8a73954f7c08900b61ffc2e4d718360985a3f851979751bc004a2_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/textarea_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <textarea <?php echo $view['form']->block($form, 'widget_attributes') ?>><?php echo $view->escape($value) ?></textarea>*/
/* */
