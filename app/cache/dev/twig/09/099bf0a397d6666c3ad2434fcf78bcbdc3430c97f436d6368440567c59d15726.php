<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_32e7cd031ce66eed3aee213d3d3bdfe7badf6d1bf79b529ea281a413035be5a2 extends Twig_Template
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
        $__internal_558b719e01e9e16bd4ddea592ee44cf62a72eb230d384d1a353c4374b8b90248 = $this->env->getExtension("native_profiler");
        $__internal_558b719e01e9e16bd4ddea592ee44cf62a72eb230d384d1a353c4374b8b90248->enter($__internal_558b719e01e9e16bd4ddea592ee44cf62a72eb230d384d1a353c4374b8b90248_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_558b719e01e9e16bd4ddea592ee44cf62a72eb230d384d1a353c4374b8b90248->leave($__internal_558b719e01e9e16bd4ddea592ee44cf62a72eb230d384d1a353c4374b8b90248_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/radio_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="radio"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     value="<?php echo $view->escape($value) ?>"*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
