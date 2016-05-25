<?php

/* @Framework/Form/button_widget.html.php */
class __TwigTemplate_a2517547d5cc0e54c73486575800183d56a37cad8c89b9dcb13c3c96d41ca7cb extends Twig_Template
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
        $__internal_87518c7955af52aa9ea106498f0289d771ca0c12242c0200cbb0d06b9926296c = $this->env->getExtension("native_profiler");
        $__internal_87518c7955af52aa9ea106498f0289d771ca0c12242c0200cbb0d06b9926296c->enter($__internal_87518c7955af52aa9ea106498f0289d771ca0c12242c0200cbb0d06b9926296c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_widget.html.php"));

        // line 1
        echo "<?php if (!\$label) { \$label = isset(\$label_format)
    ? strtr(\$label_format, array('%name%' => \$name, '%id%' => \$id))
    : \$view['form']->humanize(\$name); } ?>
<button type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'button' ?>\" <?php echo \$view['form']->block(\$form, 'button_attributes') ?>><?php echo \$view->escape(false !== \$translation_domain ? \$view['translator']->trans(\$label, array(), \$translation_domain) : \$label) ?></button>
";
        
        $__internal_87518c7955af52aa9ea106498f0289d771ca0c12242c0200cbb0d06b9926296c->leave($__internal_87518c7955af52aa9ea106498f0289d771ca0c12242c0200cbb0d06b9926296c_prof);

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
