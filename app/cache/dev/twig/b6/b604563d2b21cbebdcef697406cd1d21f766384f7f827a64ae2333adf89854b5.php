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
        $__internal_5a9d73b268597edaadc307bf440c38af5c893e77fdcc3d9c531fb12737127f41 = $this->env->getExtension("native_profiler");
        $__internal_5a9d73b268597edaadc307bf440c38af5c893e77fdcc3d9c531fb12737127f41->enter($__internal_5a9d73b268597edaadc307bf440c38af5c893e77fdcc3d9c531fb12737127f41_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_5a9d73b268597edaadc307bf440c38af5c893e77fdcc3d9c531fb12737127f41->leave($__internal_5a9d73b268597edaadc307bf440c38af5c893e77fdcc3d9c531fb12737127f41_prof);

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
