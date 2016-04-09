<?php

/* @Framework/Form/radio_widget.html.php */
class __TwigTemplate_74268c45de8e013f451e873d36b2a059acd0594b29c11bf702b749164b9f4f95 extends Twig_Template
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
        $__internal_960f76b771ab4a5272c0888c0fe5d92b9f4edaa0a8d1b5e3a192baea0d0f349a = $this->env->getExtension("native_profiler");
        $__internal_960f76b771ab4a5272c0888c0fe5d92b9f4edaa0a8d1b5e3a192baea0d0f349a->enter($__internal_960f76b771ab4a5272c0888c0fe5d92b9f4edaa0a8d1b5e3a192baea0d0f349a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/radio_widget.html.php"));

        // line 1
        echo "<input type=\"radio\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    value=\"<?php echo \$view->escape(\$value) ?>\"
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_960f76b771ab4a5272c0888c0fe5d92b9f4edaa0a8d1b5e3a192baea0d0f349a->leave($__internal_960f76b771ab4a5272c0888c0fe5d92b9f4edaa0a8d1b5e3a192baea0d0f349a_prof);

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
