<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_0cf7ce8b95598eed40c3ceed1a2292e57c54da05aab9560877529f0d88d31305 extends Twig_Template
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
        $__internal_39093b31ca6f8ffb6b5ee5e0142cee65b25a3d6f8841cc6992cb35b2f97e7d49 = $this->env->getExtension("native_profiler");
        $__internal_39093b31ca6f8ffb6b5ee5e0142cee65b25a3d6f8841cc6992cb35b2f97e7d49->enter($__internal_39093b31ca6f8ffb6b5ee5e0142cee65b25a3d6f8841cc6992cb35b2f97e7d49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_39093b31ca6f8ffb6b5ee5e0142cee65b25a3d6f8841cc6992cb35b2f97e7d49->leave($__internal_39093b31ca6f8ffb6b5ee5e0142cee65b25a3d6f8841cc6992cb35b2f97e7d49_prof);

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
