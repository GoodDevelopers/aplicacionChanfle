<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a94b948d91c5acd99f7eda5340cb8e9b9f34d74b74f6ff152c3187316ebbf42c extends Twig_Template
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
        $__internal_ab939c6f9ff6673a0fcd247079a482e78bfd20a9ee3594a1456e26fa2f24dc91 = $this->env->getExtension("native_profiler");
        $__internal_ab939c6f9ff6673a0fcd247079a482e78bfd20a9ee3594a1456e26fa2f24dc91->enter($__internal_ab939c6f9ff6673a0fcd247079a482e78bfd20a9ee3594a1456e26fa2f24dc91_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_ab939c6f9ff6673a0fcd247079a482e78bfd20a9ee3594a1456e26fa2f24dc91->leave($__internal_ab939c6f9ff6673a0fcd247079a482e78bfd20a9ee3594a1456e26fa2f24dc91_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if (!$label) { $label = isset($label_format)*/
/*     ? strtr($label_format, array('%name%' => $name, '%id%' => $id))*/
/*     : $view['form']->humanize($name); } ?>*/
/* <button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, array(), $translation_domain) : $label) ?></button>*/
/* */
