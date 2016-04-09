<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_f0218560f5221b167cd8a0a516fa39be5872f3f845a0cd33c4acc2abfd01d802 extends Twig_Template
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
        $__internal_2bf8472466f7e2c0b882a6e3a7b611ae8ac632a431f317880e157576ed86aa91 = $this->env->getExtension("native_profiler");
        $__internal_2bf8472466f7e2c0b882a6e3a7b611ae8ac632a431f317880e157576ed86aa91->enter($__internal_2bf8472466f7e2c0b882a6e3a7b611ae8ac632a431f317880e157576ed86aa91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_2bf8472466f7e2c0b882a6e3a7b611ae8ac632a431f317880e157576ed86aa91->leave($__internal_2bf8472466f7e2c0b882a6e3a7b611ae8ac632a431f317880e157576ed86aa91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="<?php echo isset($type) ? $view->escape($type) : 'text' ?>" <?php echo $view['form']->block($form, 'widget_attributes') ?><?php if (!empty($value) || is_numeric($value)): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?> />*/
/* */
