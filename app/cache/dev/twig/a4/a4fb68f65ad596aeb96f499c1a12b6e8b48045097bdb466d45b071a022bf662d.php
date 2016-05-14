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
        $__internal_aaf6d21e0df570be291fbef12a5833fe1057ead8e69eeae898f6e4349212130b = $this->env->getExtension("native_profiler");
        $__internal_aaf6d21e0df570be291fbef12a5833fe1057ead8e69eeae898f6e4349212130b->enter($__internal_aaf6d21e0df570be291fbef12a5833fe1057ead8e69eeae898f6e4349212130b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_aaf6d21e0df570be291fbef12a5833fe1057ead8e69eeae898f6e4349212130b->leave($__internal_aaf6d21e0df570be291fbef12a5833fe1057ead8e69eeae898f6e4349212130b_prof);

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
