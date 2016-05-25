<?php

/* @Framework/Form/datetime_widget.html.php */
class __TwigTemplate_65a746969debfd83e06070cb450857e4b90f14e68218e64653e81b6ae462f121 extends Twig_Template
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
        $__internal_3361044aedcbb7cc8218f677acab8aceab3efd9311d8b75a9cab0ab0e4750ae7 = $this->env->getExtension("native_profiler");
        $__internal_3361044aedcbb7cc8218f677acab8aceab3efd9311d8b75a9cab0ab0e4750ae7->enter($__internal_3361044aedcbb7cc8218f677acab8aceab3efd9311d8b75a9cab0ab0e4750ae7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/datetime_widget.html.php"));

        // line 1
        echo "<?php if (\$widget == 'single_text'): ?>
    <?php echo \$view['form']->block(\$form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo \$view['form']->block(\$form, 'widget_container_attributes') ?>>
        <?php echo \$view['form']->widget(\$form['date']).' '.\$view['form']->widget(\$form['time']) ?>
    </div>
<?php endif ?>
";
        
        $__internal_3361044aedcbb7cc8218f677acab8aceab3efd9311d8b75a9cab0ab0e4750ae7->leave($__internal_3361044aedcbb7cc8218f677acab8aceab3efd9311d8b75a9cab0ab0e4750ae7_prof);

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
