<?php

/* @Framework/Form/textarea_widget.html.php */
class __TwigTemplate_ec6271bc40c7b2f7082c5acbb1cf95c9fe3c3bdf02cfeb4893dcf737eb2e5a40 extends Twig_Template
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
        $__internal_beb25d8bb172695ef198e03f131ba3e503af9042f72bdadae356902fcf605413 = $this->env->getExtension("native_profiler");
        $__internal_beb25d8bb172695ef198e03f131ba3e503af9042f72bdadae356902fcf605413->enter($__internal_beb25d8bb172695ef198e03f131ba3e503af9042f72bdadae356902fcf605413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/textarea_widget.html.php"));

        // line 1
        echo "<textarea <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>><?php echo \$view->escape(\$value) ?></textarea>
";
        
        $__internal_beb25d8bb172695ef198e03f131ba3e503af9042f72bdadae356902fcf605413->leave($__internal_beb25d8bb172695ef198e03f131ba3e503af9042f72bdadae356902fcf605413_prof);

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
