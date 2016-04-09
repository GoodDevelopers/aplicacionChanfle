<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_83e53862e1a2ec990d614900ffd1786ce372f2f518cd18e598e3cf0ca5ccb5a8 extends Twig_Template
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
        $__internal_6bd06926be26a12254ebd533da2d7d05ba3318896f0c407617cd5779dd7ead85 = $this->env->getExtension("native_profiler");
        $__internal_6bd06926be26a12254ebd533da2d7d05ba3318896f0c407617cd5779dd7ead85->enter($__internal_6bd06926be26a12254ebd533da2d7d05ba3318896f0c407617cd5779dd7ead85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_6bd06926be26a12254ebd533da2d7d05ba3318896f0c407617cd5779dd7ead85->leave($__internal_6bd06926be26a12254ebd533da2d7d05ba3318896f0c407617cd5779dd7ead85_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/datetime_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* <?php if ($widget == 'single_text'): ?>*/
/*     <?php echo $view['form']->block($form, 'form_widget_simple'); ?>*/
/* <?php else: ?>*/
/*     <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>*/
/*         <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>*/
/*     </div>*/
/* <?php endif ?>*/
/* */
