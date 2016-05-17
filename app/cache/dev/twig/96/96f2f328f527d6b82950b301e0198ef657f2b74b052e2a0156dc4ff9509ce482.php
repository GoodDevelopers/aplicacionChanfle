<?php

/* @Framework/Form/checkbox_widget.html.php */
class __TwigTemplate_b5737dae7c94059ccef59072f6e6585b60d93848aa48425831a544adf3805714 extends Twig_Template
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
        $__internal_a47debb1e6ddb063834ca1ba1fd8a55f59421bb6810f17bf20f28d3e282bf15e = $this->env->getExtension("native_profiler");
        $__internal_a47debb1e6ddb063834ca1ba1fd8a55f59421bb6810f17bf20f28d3e282bf15e->enter($__internal_a47debb1e6ddb063834ca1ba1fd8a55f59421bb6810f17bf20f28d3e282bf15e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/checkbox_widget.html.php"));

        // line 1
        echo "<input type=\"checkbox\"
    <?php echo \$view['form']->block(\$form, 'widget_attributes') ?>
    <?php if (strlen(\$value) > 0): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?>
    <?php if (\$checked): ?> checked=\"checked\"<?php endif ?>
/>
";
        
        $__internal_a47debb1e6ddb063834ca1ba1fd8a55f59421bb6810f17bf20f28d3e282bf15e->leave($__internal_a47debb1e6ddb063834ca1ba1fd8a55f59421bb6810f17bf20f28d3e282bf15e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/checkbox_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <input type="checkbox"*/
/*     <?php echo $view['form']->block($form, 'widget_attributes') ?>*/
/*     <?php if (strlen($value) > 0): ?> value="<?php echo $view->escape($value) ?>"<?php endif ?>*/
/*     <?php if ($checked): ?> checked="checked"<?php endif ?>*/
/* />*/
/* */
