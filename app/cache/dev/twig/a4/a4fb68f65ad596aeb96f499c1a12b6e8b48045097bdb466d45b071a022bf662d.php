<?php

/* @Framework/Form/form_widget.html.php */
class __TwigTemplate_d9efbe2e09b57e22ebb204c77e04151eac9935e9e2465422aeaa90732f04109f extends Twig_Template
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
        $__internal_0e4984ecf26ab529d4d6ebe2cff8b99f0f972b1218f58f8fdd3abee9fb9b115d = $this->env->getExtension("native_profiler");
        $__internal_0e4984ecf26ab529d4d6ebe2cff8b99f0f972b1218f58f8fdd3abee9fb9b115d->enter($__internal_0e4984ecf26ab529d4d6ebe2cff8b99f0f972b1218f58f8fdd3abee9fb9b115d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_0e4984ecf26ab529d4d6ebe2cff8b99f0f972b1218f58f8fdd3abee9fb9b115d->leave($__internal_0e4984ecf26ab529d4d6ebe2cff8b99f0f972b1218f58f8fdd3abee9fb9b115d_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($compound): ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_compound')?>*/
/* <?php else: ?>*/
/* <?php echo $view['form']->block($form, 'form_widget_simple')?>*/
/* <?php endif ?>*/
/* */
