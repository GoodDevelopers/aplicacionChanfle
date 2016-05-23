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
        $__internal_dfebd208ce025732b14c6f7a25f71e89042150ef1311a7e20a795ba1bbb4c743 = $this->env->getExtension("native_profiler");
        $__internal_dfebd208ce025732b14c6f7a25f71e89042150ef1311a7e20a795ba1bbb4c743->enter($__internal_dfebd208ce025732b14c6f7a25f71e89042150ef1311a7e20a795ba1bbb4c743_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_dfebd208ce025732b14c6f7a25f71e89042150ef1311a7e20a795ba1bbb4c743->leave($__internal_dfebd208ce025732b14c6f7a25f71e89042150ef1311a7e20a795ba1bbb4c743_prof);

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
