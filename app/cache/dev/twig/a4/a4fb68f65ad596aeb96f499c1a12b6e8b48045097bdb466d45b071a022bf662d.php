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
        $__internal_749610f03c59e2d9025ea21d469ef08ee7bb0b478faa877951824c11506cfd47 = $this->env->getExtension("native_profiler");
        $__internal_749610f03c59e2d9025ea21d469ef08ee7bb0b478faa877951824c11506cfd47->enter($__internal_749610f03c59e2d9025ea21d469ef08ee7bb0b478faa877951824c11506cfd47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget.html.php"));

        // line 1
        echo "<?php if (\$compound): ?>
<?php echo \$view['form']->block(\$form, 'form_widget_compound')?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'form_widget_simple')?>
<?php endif ?>
";
        
        $__internal_749610f03c59e2d9025ea21d469ef08ee7bb0b478faa877951824c11506cfd47->leave($__internal_749610f03c59e2d9025ea21d469ef08ee7bb0b478faa877951824c11506cfd47_prof);

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
